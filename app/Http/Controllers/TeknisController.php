<?php

namespace App\Http\Controllers;

use App\Models\Teknis;
use Illuminate\Http\Request;

class TeknisController extends Controller
{
    // Display a listing of the resource.
    public function index()
    {
        $Teknis = Teknis::all();
        return view('dashboard.teknis.index', compact('Teknis'));
    }

    // Show the form for creating a new resource.
    public function create()
    {
        return view('dashboard.teknis.create');
    }

    // Store a newly created resource in storage.
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $pelayanan = new Teknis();
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
    public function show(Teknis $teknis)
    {
        return view('Teknis.show', compact('Teknis'));
    }

    // Show the form for editing the specified resource.
    public function edit(Teknis $teknis)
    {
        return view('Teknis.edit', compact('Teknis'));
    }

    // Update the specified resource in storage.
    public function update(Request $request, Teknis $teknis)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $teknis->title = $request->title;
        $teknis->content = $request->content;

        if ($request->hasFile('image')) {
            $imageName = time().'.'.$request->image->extension();  
            $request->image->move(public_path('images'), $imageName);
            $teknis->image = $imageName;
        }

        $teknis->save();

        return redirect()->route('pelayanans.index')
                         ->with('success', 'Pelayanan updated successfully.');
    }

    // Remove the specified resource from storage.
    public function destroy(Teknis $teknis)
    {
        $teknis->delete();

        return redirect()->route('pelayanans.index')
                         ->with('success', 'Pelayanan deleted successfully.');
    }
}
