<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Lawyer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class LawyerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $lawyers = Lawyer::latest()->paginate(10);
        return view('backend.lawyers.index', compact('lawyers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.lawyers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'position' => 'nullable|string|max:255',
            'speciality' => 'nullable|string|max:255',
            'phone' => 'nullable|string|max:20',
            'email' => 'nullable|email|max:255',
            'photo' => 'nullable|image|max:2048',
        ]);

        $data = $request->all();

        if ($request->hasFile('photo')) {
            $data['photo'] = $request->file('photo')->store('lawyers', 'public');
        }

        Lawyer::create($data);

        return redirect()->route('admin.lawyers.index')->with('success', 'Lawyer created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Lawyer $lawyer)
    {
        return view('backend.lawyers.show', compact('lawyer'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Lawyer $lawyer)
    {
        return view('backend.lawyers.edit', compact('lawyer'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Lawyer $lawyer)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'position' => 'nullable|string|max:255',
            'speciality' => 'nullable|string|max:255',
            'phone' => 'nullable|string|max:20',
            'email' => 'nullable|email|max:255',
            'photo' => 'nullable|image|max:2048',
        ]);

        $data = $request->all();

        if ($request->hasFile('photo')) {
            if ($lawyer->photo) {
                Storage::disk('public')->delete($lawyer->photo);
            }
            $data['photo'] = $request->file('photo')->store('lawyers', 'public');
        }

        $lawyer->update($data);

        return redirect()->route('admin.lawyers.index')->with('success', 'Lawyer updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Lawyer $lawyer)
    {
        if ($lawyer->photo) {
            Storage::disk('public')->delete($lawyer->photo);
        }
        $lawyer->delete();

        return redirect()->route('admin.lawyers.index')->with('success', 'Lawyer deleted successfully.');
    }
}
