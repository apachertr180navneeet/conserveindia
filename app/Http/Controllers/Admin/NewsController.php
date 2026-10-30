<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\NewsArticle;

class NewsController extends Controller
{
    public function index()
    {
        $articles = NewsArticle::latest()->get();
        return view('admin.news.index', compact('articles'));
    }

    public function create()
    {
        return view('admin.news.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'category' => 'nullable|string|max:255',
            'summary' => 'nullable|string',
            'content' => 'nullable|string',
            'published_date' => 'nullable|date',
            'image' => 'nullable|image|max:5120',
        ]);

        $validated['slug'] = Str::slug($validated['title']) . '-' . rand(100, 999);

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = 'news_' . time() . '_' . rand(100, 999) . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('website/assets/images'), $filename);
            $validated['image'] = 'assets/images/' . $filename;
        }

        $validated['is_active'] = $request->has('is_active');
        if (empty($validated['published_date'])) {
            $validated['published_date'] = now();
        }

        NewsArticle::create($validated);

        return redirect()->route('admin.news.index')->with('success', 'Article created successfully!');
    }

    public function edit(NewsArticle $news)
    {
        return view('admin.news.edit', compact('news'));
    }

    public function update(Request $request, NewsArticle $news)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'category' => 'nullable|string|max:255',
            'summary' => 'nullable|string',
            'content' => 'nullable|string',
            'published_date' => 'nullable|date',
            'image' => 'nullable|image|max:5120',
        ]);

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = 'news_' . time() . '_' . rand(100, 999) . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('website/assets/images'), $filename);
            $validated['image'] = 'assets/images/' . $filename;
        }

        $validated['is_active'] = $request->has('is_active');

        $news->update($validated);

        return redirect()->route('admin.news.index')->with('success', 'Article updated successfully!');
    }

    public function destroy(NewsArticle $news)
    {
        $news->delete();
        return redirect()->route('admin.news.index')->with('success', 'Article deleted successfully!');
    }
}

