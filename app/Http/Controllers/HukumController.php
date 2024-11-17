<?php

namespace App\Http\Controllers;

use App\Models\Hukum;
use Illuminate\Http\Request;

class HukumController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    // public function index()
    // {
    //     //
    // }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.hukum.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'image' => 'nullable|image',
        ]);
    
        if ($request->hasFile('image')) {
            $image = $request->file('image')->store('hukum', 'public');
        } else {
            $image = null;
        }
    
        Hukum::create([
            'title' => $request->title,
            'image' => $image,
        ]);
    
        return redirect()->route('blogs.index')->with('success', 'Blog created successfully.');
    }
    /**
     * Display the specified resource.
     */
    public function show(Hukum $hukum)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Hukum $hukum)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Hukum $hukum)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Hukum $hukum)
    {
        //
    }
}
