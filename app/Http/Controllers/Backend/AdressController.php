<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Adress;
use Illuminate\Http\Request;

class AdressController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $adresses = Adress::latest()->paginate(10);
        return view('backend.adresses.index', compact('adresses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.adresses.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'city' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'phone' => 'nullable|string|max:255',
            'email' => 'nullable|email|max:255',
        ]);

        Adress::create($request->all());

        return redirect()->route('admin.adresses.index')->with('success', 'Address created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Adress $adress)
    {
        return view('backend.adresses.show', compact('adress'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Adress $adress)
    {
        return view('backend.adresses.edit', compact('adress'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Adress $adress)
    {
        $request->validate([
            'city' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'phone' => 'nullable|string|max:255',
            'email' => 'nullable|email|max:255',
        ]);

        $adress->update($request->all());

        return redirect()->route('admin.adresses.index')->with('success', 'Address updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Adress $adress)
    {
        $adress->delete();

        return redirect()->route('admin.adresses.index')->with('success', 'Address deleted successfully.');
    }
}
