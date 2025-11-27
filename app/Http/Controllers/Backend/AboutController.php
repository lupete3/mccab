<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $abouts = About::latest()->paginate(10);
        return view('backend.abouts.index', compact('abouts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.abouts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'subtitle' => 'required|string|max:255',
            'content' => 'required|string',
            'video_url' => 'required|url',
            'features' => 'nullable|array',
            'features.*' => 'string|max:255',
        ]);

        $data = $request->all();
        // Filter out empty features
        if (isset($data['features'])) {
            $data['features'] = array_filter($data['features'], fn($value) => !is_null($value) && $value !== '');
        }

        About::create($data);

        return redirect()->route('admin.abouts.index')->with('success', 'About section created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(About $about)
    {
        return view('backend.abouts.show', compact('about'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(About $about)
    {
        return view('backend.abouts.edit', compact('about'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, About $about)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'subtitle' => 'required|string|max:255',
            'content' => 'required|string',
            'video_url' => 'required|url',
            'features' => 'nullable|array',
            'features.*' => 'string|max:255',
        ]);

        $data = $request->all();
        // Filter out empty features
        if (isset($data['features'])) {
            $data['features'] = array_filter($data['features'], fn($value) => !is_null($value) && $value !== '');
            // Re-index array to ensure it's stored as a JSON array, not object
            $data['features'] = array_values($data['features']);
        }

        $about->update($data);

        return redirect()->route('admin.abouts.index')->with('success', 'About section updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(About $about)
    {
        $about->delete();

        return redirect()->route('admin.abouts.index')->with('success', 'About section deleted successfully.');
    }
}
