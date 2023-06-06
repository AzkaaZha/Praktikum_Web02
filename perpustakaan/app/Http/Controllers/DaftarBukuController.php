<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class DaftarBukuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books = Book::all();
        return view('admin.book.daftar_buku', [
            'books' => $books
        ]);
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.book.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //Validasi form input
        $validated = $request->validate([
            'title' => 'required|min:5|max:25',
            'isbn' => 'required|integer',
            'stok' => 'required|integer',
        ]);

        //Mengirim Data Ke Model
        Book::create($validated);
        return redirect('/book/daftar_buku');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //Mencari Data Berdasarkan ID
        $book = Book::find($id);
        $book->delete();
        return redirect('/book/daftar_buku');
    }
}
