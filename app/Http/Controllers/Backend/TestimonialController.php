<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $testimonials = Testimonial::latest()->paginate(10);
        return view('backend.testimonials.index', compact('testimonials'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.testimonials.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'author_name' => 'required|string|max:255',
            'author_position' => 'required|string|max:255',
            'content' => 'required|string',
            'author_avatar_icon' => 'nullable|image|max:2048',
        ]);

        $data = $request->all();

        if ($request->hasFile('author_avatar_icon')) {
            $data['author_avatar_icon'] = $request->file('author_avatar_icon')->store('testimonials', 'public');
        }

        Testimonial::create($data);

        return redirect()->route('admin.testimonials.index')->with('success', 'Testimonial created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Testimonial $testimonial)
    {
        return view('backend.testimonials.show', compact('testimonial'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Testimonial $testimonial)
    {
        return view('backend.testimonials.edit', compact('testimonial'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Testimonial $testimonial)
    {
        $request->validate([
            'author_name' => 'required|string|max:255',
            'author_position' => 'required|string|max:255',
            'content' => 'required|string',
            'author_avatar_icon' => 'nullable|image|max:2048',
        ]);

        $data = $request->all();

        if ($request->hasFile('author_avatar_icon')) {
            if ($testimonial->author_avatar_icon) {
                Storage::disk('public')->delete($testimonial->author_avatar_icon);
            }
            $data['author_avatar_icon'] = $request->file('author_avatar_icon')->store('testimonials', 'public');
        }

        $testimonial->update($data);

        return redirect()->route('admin.testimonials.index')->with('success', 'Testimonial updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Testimonial $testimonial)
    {
        if ($testimonial->author_avatar_icon) {
            Storage::disk('public')->delete($testimonial->author_avatar_icon);
        }
        $testimonial->delete();

        return redirect()->route('admin.testimonials.index')->with('success', 'Testimonial deleted successfully.');
    }
}
