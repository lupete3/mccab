<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Firm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FirmController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $firms = Firm::latest()->paginate(10);
        return view('backend.firms.index', compact('firms'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.firms.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'nullable|email|max:255',
            'logo_path' => 'nullable|image|max:2048',
        ]);

        $data = $request->all();

        if ($request->hasFile('logo_path')) {
            $data['logo_path'] = $request->file('logo_path')->store('firms', 'public_uploads');
        }

        Firm::create($data);

        return redirect()->route('admin.firms.index')->with('success', 'Firm created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Firm $firm)
    {
        return view('backend.firms.show', compact('firm'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Firm $firm)
    {
        return view('backend.firms.edit', compact('firm'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Firm $firm)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'nullable|email|max:255',
            'logo_path' => 'nullable|image|max:2048',
        ]);

        $data = $request->all();

        if ($request->hasFile('logo_path')) {
            if ($firm->logo_path) {
                Storage::disk('public_uploads')->delete($firm->logo_path);
            }
            $data['logo_path'] = $request->file('logo_path')->store('firms', 'public_uploads');
        }

        $firm->update($data);

        return redirect()->route('admin.firms.index')->with('success', 'Firm updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Firm $firm)
    {
        if ($firm->logo_path) {
            Storage::disk('public_uploads')->delete($firm->logo_path);
        }
        $firm->delete();

        return redirect()->route('admin.firms.index')->with('success', 'Firm deleted successfully.');
    }
}
