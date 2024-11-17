<?php

namespace App\Http\Controllers;

use App\Models\Keuangan;
use Illuminate\Http\Request;

class KeuanganController extends Controller
{
    // Display a listing of the resource.
    public function index()
    {
        $keuangan = Keuangan::all();
        return view('dashboard.keuangan.index', compact('keuangan'));
    }

    // Show the form for creating a new resource.
    public function create()
    {
        return view('keuangan.create');
    }

    // Store a newly created resource in storage.
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $pelayanan = new Keuangan();
        $pelayanan->title = $request->title;
        $pelayanan->content = $request->content;

        if ($request->hasFile('image')) {
            $imageName = time().'.'.$request->image->extension();  
            $request->image->move(public_path('images'), $imageName);
            $pelayanan->image = $imageName;
        }

        $pelayanan->save();

        return redirect()->route('pelayanans.index')
                         ->with('success', 'Pelayanan created successfully.');
    }

    // Display the specified resource.
    public function show(Keuangan $keuangan)
    {
        return view('keuangan.show', compact('keuangan'));
    }

    // Show the form for editing the specified resource.
    public function edit(Keuangan $Keuangan)
    {
        return view('pelayanans.edit', compact('pelayanan'));
    }

    // Update the specified resource in storage.
    public function update(Request $request, Keuangan $Keuangan)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $Keuangan->title = $request->title;
        $Keuangan->content = $request->content;

        if ($request->hasFile('image')) {
            $imageName = time().'.'.$request->image->extension();  
            $request->image->move(public_path('images'), $imageName);
            $Keuangan->image = $imageName;
        }

        $Keuangan->save();

        return redirect()->route('pelayanans.index')
                         ->with('success', 'Pelayanan updated successfully.');
    }

    // Remove the specified resource from storage.
    public function destroy(Keuangan $Keuangan)
    {
        $Keuangan->delete();

        return redirect()->route('pelayanans.index')
                         ->with('success', 'Pelayanan deleted successfully.');
    }
}
