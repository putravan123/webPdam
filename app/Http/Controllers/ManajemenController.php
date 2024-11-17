<?php

namespace App\Http\Controllers;

use App\Models\Manajemen;
use Illuminate\Http\Request;

class ManajemenController extends Controller
{
    // Display a listing of the resource.
    public function index()
    {
        $manajemen = Manajemen::all();
        return view('dashboard.manajemen.index', compact('manajemen'));
    }

    // Show the form for creating a new resource.
    public function create()
    {
        return view('dashboard.manajemen.create');
    }

    // Store a newly created resource in storage.
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $pelayanan = new Manajemen();
        $pelayanan->title = $request->title;
        $pelayanan->content = $request->content;

        if ($request->hasFile('image')) {
            $imageName = time().'.'.$request->image->extension();  
            $request->image->move(public_path('images'), $imageName);
            $pelayanan->image = $imageName;
        }

        $pelayanan->save();

        return redirect()->route('manajemen.index')
                         ->with('success', 'Pelayanan created successfully.');
    }

    // Display the specified resource.
    public function show(Manajemen $manajemen)
    {
        return view('manajemen.show', compact('pelayanan'));
    }

    // Show the form for editing the specified resource.
    public function edit(Manajemen $manajemen)
    {
        return view('dashboard.manajemen.edit', compact('pelayanan'));
    }

    // Update the specified resource in storage.
    public function update(Request $request, Manajemen $manajemen)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $manajemen->title = $request->title;
        $manajemen->content = $request->content;

        if ($request->hasFile('image')) {
            $imageName = time().'.'.$request->image->extension();  
            $request->image->move(public_path('images'), $imageName);
            $manajemen->image = $imageName;
        }

        $manajemen->save();

        return redirect()->route('manajemen.index')
                         ->with('success', 'Pelayanan updated successfully.');
    }

    // Remove the specified resource from storage.
    public function destroy(Manajemen $manajemen)
    {
        $manajemen->delete();

        return redirect()->route('manajemen.index')
                         ->with('success', 'Pelayanan deleted successfully.');
    }
}
