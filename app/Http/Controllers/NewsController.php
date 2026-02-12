<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class NewsController extends Controller
{
    /**
     * LIST BERITA (PUBLIC)
     */
    public function index()
    {
        return view('news.index', [
            'news' => News::latest()->paginate(10),
        ]);
    }

    /**
     * FORM TAMBAH BERITA
     */
    public function create()
    {
        Gate::authorize('manage-news');

        return view('news.create');
    }

    /**
     * SIMPAN BERITA
     */
    public function store(Request $request)
    {
        Gate::authorize('manage-news');

        $validated = $request->validate([
            'title'   => 'required|string|max:255',
            'content' => 'required',
        ]);

        News::create($validated);

        return redirect()
            ->route('news.index')
            ->with('success', 'Berita berhasil ditambahkan');
    }

    /**
     * FORM EDIT
     */
    public function edit(News $news)
    {
        Gate::authorize('manage-news');

        return view('news.edit', compact('news'));
    }

    /**
     * UPDATE BERITA
     */
    public function update(Request $request, News $news)
    {
        Gate::authorize('manage-news');

        $validated = $request->validate([
            'title'   => 'required|string|max:255',
            'content' => 'required',
        ]);

        $news->update($validated);

        return redirect()
            ->route('news.index')
            ->with('success', 'Berita berhasil diperbarui');
    }

    /**
     * HAPUS BERITA
     */
    public function destroy(News $news)
    {
        Gate::authorize('manage-news');

        $news->delete();

        return back()->with('success', 'Berita berhasil dihapus');
    }
}
