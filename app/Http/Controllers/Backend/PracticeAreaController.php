<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\PracticeArea;
use Illuminate\Http\Request;

class PracticeAreaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $practiceAreas = PracticeArea::latest()->paginate(10);
        return view('backend.practice-areas.index', compact('practiceAreas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.practice-areas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'icon' => 'required|string|max:255',
            'link' => 'nullable|url|max:255',
        ]);

        PracticeArea::create($request->all());

        return redirect()->route('admin.practice-areas.index')->with('success', 'Practice Area created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(PracticeArea $practiceArea)
    {
        return view('backend.practice-areas.show', compact('practiceArea'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PracticeArea $practiceArea)
    {
        return view('backend.practice-areas.edit', compact('practiceArea'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PracticeArea $practiceArea)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'icon' => 'required|string|max:255',
            'link' => 'nullable|url|max:255',
        ]);

        $practiceArea->update($request->all());

        return redirect()->route('admin.practice-areas.index')->with('success', 'Practice Area updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PracticeArea $practiceArea)
    {
        $practiceArea->delete();

        return redirect()->route('admin.practice-areas.index')->with('success', 'Practice Area deleted successfully.');
    }
}
