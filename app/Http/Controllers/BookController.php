<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class BookController extends Controller
{
    /**
     * LIST BUKU (PUBLIC)
     */
    public function index()
    {
        return view('books.index', [
            'books' => Book::latest()->paginate(10),
        ]);
    }

    /**
     * FORM TAMBAH BUKU (PROTECTED)
     */
    public function create()
    {
        Gate::authorize('manage-books');

        return view('books.create');
    }

    /**
     * SIMPAN BUKU (PROTECTED)
     */
    public function store(Request $request)
    {
        Gate::authorize('manage-books');

        $validated = $request->validate([
            'title'  => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'year'   => 'required|integer',
        ]);

        Book::create($validated);

        return redirect()
            ->route('books.index')
            ->with('success', 'Buku berhasil ditambahkan');
    }

    /**
     * FORM EDIT (PROTECTED)
     */
    public function edit(Book $book)
    {
        Gate::authorize('manage-books');

        return view('books.edit', compact('book'));
    }

    /**
     * UPDATE BUKU (PROTECTED)
     */
    public function update(Request $request, Book $book)
    {
        Gate::authorize('manage-books');

        $validated = $request->validate([
            'title'  => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'year'   => 'required|integer',
        ]);

        $book->update($validated);

        return redirect()
            ->route('books.index')
            ->with('success', 'Buku berhasil diperbarui');
    }

    /**
     * HAPUS BUKU (PROTECTED)
     */
    public function destroy(Book $book)
    {
        Gate::authorize('manage-books');

        $book->delete();

        return back()->with('success', 'Buku berhasil dihapus');
    }
}