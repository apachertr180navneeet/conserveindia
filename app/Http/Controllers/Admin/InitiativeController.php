<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Initiative;

class InitiativeController extends Controller
{
    public function index()
    {
        $initiatives = Initiative::orderBy('order')->get();
        return view('admin.initiatives.index', compact('initiatives'));
    }

    public function create()
    {
        return view('admin.initiatives.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'meta' => 'nullable|string|max:255',
            'category' => 'nullable|string|max:255',
            'short_description' => 'nullable|string',
            'content' => 'nullable|string',
            'link' => 'nullable|string|max:255',
            'order' => 'nullable|integer',
            'image' => 'nullable|image|max:5120',
        ]);

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = 'init_' . time() . '_' . rand(100, 999) . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('website/assets/images'), $filename);
            $validated['image'] = 'assets/images/' . $filename;
        }

        $validated['is_active'] = $request->has('is_active');
        $validated['order'] = $request->input('order', 0);

        Initiative::create($validated);

        return redirect()->route('admin.initiatives.index')->with('success', 'Initiative created successfully!');
    }

    public function edit(Initiative $initiative)
    {
        return view('admin.initiatives.edit', compact('initiative'));
    }

    public function update(Request $request, Initiative $initiative)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'meta' => 'nullable|string|max:255',
            'category' => 'nullable|string|max:255',
            'short_description' => 'nullable|string',
            'content' => 'nullable|string',
            'link' => 'nullable|string|max:255',
            'order' => 'nullable|integer',
            'image' => 'nullable|image|max:5120',
        ]);

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = 'init_' . time() . '_' . rand(100, 999) . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('website/assets/images'), $filename);
            $validated['image'] = 'assets/images/' . $filename;
        }

        $validated['is_active'] = $request->has('is_active');
        $validated['order'] = $request->input('order', 0);

        $initiative->update($validated);

        return redirect()->route('admin.initiatives.index')->with('success', 'Initiative updated successfully!');
    }

    public function destroy(Initiative $initiative)
    {
        $initiative->delete();
        return redirect()->route('admin.initiatives.index')->with('success', 'Initiative deleted successfully!');
    }
}

