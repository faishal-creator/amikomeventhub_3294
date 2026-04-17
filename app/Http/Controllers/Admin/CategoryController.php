<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of all categories.
     */
    public function index()
    {
        return view('admin.categories.index');
    }

    /**
     * Show the form for creating a new category.
     */
    public function create()
    {
        return view('admin.categories.create');
    }

    /**
     * Store a newly created category in storage.
     */
    public function store(Request $request)
    {
        // TODO: Implement database storage logic
        return redirect()->route('admin.categories.index')->with('success', 'Kategori berhasil ditambahkan');
    }

    /**
     * Display the specified category.
     */
    public function show($id)
    {
        // TODO: Implement show logic
    }

    /**
     * Show the form for editing the specified category.
     */
    public function edit($id)
    {
        // TODO: Implement edit logic
        return view('admin.categories.edit');
    }

    /**
     * Update the specified category in storage.
     */
    public function update(Request $request, $id)
    {
        // TODO: Implement database update logic
        return redirect()->route('admin.categories.index')->with('success', 'Kategori berhasil diperbarui');
    }

    /**
     * Remove the specified category from storage.
     */
    public function destroy($id)
    {
        // TODO: Implement database delete logic
        return redirect()->route('admin.categories.index')->with('success', 'Kategori berhasil dihapus');
    }
}
