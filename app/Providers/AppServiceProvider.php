<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Midtrans\Config;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Config::$serverKey = config('midtrans.server_key');
        Config::$clientKey = config('midtrans.client_key');
        Config::$isSanitized = true;
        Config::$is3ds = true;
        // Gunakan satu sumber konfigurasi yang sama dengan controller checkout.
        // Jangan menentukan mode dari key `midtrans.mode` yang tidak tersedia.
        Config::$isProduction = (bool) config('midtrans.is_production');
    }
}
