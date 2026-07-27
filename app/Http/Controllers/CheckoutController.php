<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use App\Services\TicketingService;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    /**
     * Halaman "selesaikan pembayaran" — memuat Snap dengan hitung mundur 15 menit.
     */
    public function payment($order_id)
    {
        $transaction = Transaction::with('transactionItems')
            ->where('order_id', $order_id)
            ->firstOrFail();

        // Reservasi yang sudah kedaluwarsa tidak boleh dibayar lagi —
        // kuotanya kemungkinan sudah dilepas ke pembeli lain.
        if ($transaction->isExpired()) {
            return redirect()->route('home')
                ->with('error', 'Waktu pembayaran untuk pesanan ini telah habis. Silakan pesan ulang.');
        }

        if ($transaction->status === Transaction::STATUS_SUCCESS) {
            return redirect()->route('ticket', $transaction->order_id)
                ->with('success', 'Pembayaran sudah lunas.');
        }

        return view('payment', compact('transaction'));
    }

    /**
     * Halaman terima kasih. Status sebenarnya ditentukan webhook, bukan di sini.
     */
        public function success($order_id)
    {
        // Mengambil daftar kategori untuk keperluan menu footer
        $categories = \App\Models\Category::all();

        $transaction = Transaction::with('event')->where('order_id', $order_id)->firstOrFail();
        
        // Konfigurasi Midtrans untuk mengecek status transaksi langsung ke API
        \Midtrans\Config::$serverKey = env('MIDTRANS_SERVER_KEY');
        \Midtrans\Config::$isProduction = false;
        \Midtrans\Config::$isSanitized = true;
        \Midtrans\Config::$is3ds = true;

        try {
            // Mengecek status pesanan secara mandiri (Bypass)
            $status = \Midtrans\Transaction::status($order_id);
            
            if ($status) {
                // Mengambil nilai status transaksi
                $trx_status = is_array($status) ? ($status['transaction_status'] ?? '') : ($status->transaction_status ?? '');
                
                // Jika API Midtrans mengonfirmasi bahwa transaksi telah berhasil (settlement / capture)
                if (in_array($trx_status, ['settlement', 'capture'])) {
                    // Hanya lakukan update jika status di database lokal masih 'pending' (indikasi Webhook tidak masuk)
                    if (strtolower($transaction->status) === 'pending') {
                        $transaction->update(['status' => 'success']);
                        
                        if ($transaction->event && $transaction->event->stock > 0) {
                            $transaction->event->stock = $transaction->event->stock - 1;
                            $transaction->event->save();
                            
                            try {
                                \Illuminate\Support\Facades\Mail::to($transaction->customer_email)
                                    ->send(new \App\Mail\EventTicketMail($transaction));
                            } catch (\Exception $e) {
                                \Log::error('Gagal mengirim email E-Ticket secara manual (Bypass): ' . $e->getMessage());
                            }
                        }
                    }
                }
            }
        } catch (\Exception $e) {
            // Jika terjadi error dari API Midtrans (transaksi tidak valid), kembalikan ke beranda
            return redirect()->route('home')->with('error', 'Transaksi tidak ditemukan atau gagal diproses oleh sistem pembayaran.');
        }

        return view('checkout.success', compact('transaction', 'categories'));
    }
}