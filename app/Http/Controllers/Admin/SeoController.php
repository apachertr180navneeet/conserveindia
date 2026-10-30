<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PageSeo;

class SeoController extends Controller
{
    public function index()
    {
        $pages = PageSeo::orderBy('id')->get();
        return view('admin.seo.index', compact('pages'));
    }

    public function edit(PageSeo $seo)
    {
        return view('admin.seo.edit', compact('seo'));
    }

    public function update(Request $request, PageSeo $seo)
    {
        $validated = $request->validate([
            'meta_title' => 'required|string|max:255',
            'meta_description' => 'nullable|string',
            'meta_keywords' => 'nullable|string',
            'canonical_url' => 'nullable|string|max:255',
            'robots' => 'nullable|string|max:50',
            'og_title' => 'nullable|string|max:255',
            'og_description' => 'nullable|string',
            'schema_markup' => 'nullable|string',
            'og_image' => 'nullable|image|max:5120',
        ]);

        if ($request->hasFile('og_image')) {
            $file = $request->file('og_image');
            $filename = 'og_' . $seo->page_key . '_' . time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('website/assets/images'), $filename);
            $validated['og_image'] = 'assets/images/' . $filename;
        }

        $seo->update($validated);

        return redirect()->route('admin.seo.index')->with('success', 'SEO settings for "' . $seo->page_name . '" updated successfully!');
    }
}

