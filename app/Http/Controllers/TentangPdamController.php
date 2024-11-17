<?php

namespace App\Http\Controllers;

use App\Models\TentangPdam;
use Illuminate\Http\Request;

class TentangPdamController extends Controller
{
    public function index()
    {
        $tentangPdam = TentangPdam::all();
        return view('dashboard.tentang_pdams.index', compact('tentangPdam'));
    }

    public function create()
    {
        return view('dashboard.tentang_pdams.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'image' => 'nullable|string',
            'title' => 'nullable|string',
            'created_at' => 'nullable|date',
            'content' => 'nullable|string',
        ]);

        TentangPdam::create($request->all());

        return redirect()->route('tentang_pdams.index')
                         ->with('success', 'Tentang PDAM created successfully.');
    }

    public function show($id)
    {
        $tentangPdam = TentangPdam::findOrFail($id);
        return view('dashboard.tentang_pdams.show', compact('tentangPdam'));
    }

    public function edit($id)
    {
        $tentangPdam = TentangPdam::findOrFail($id);
        return view('dashbard.tentang_pdams.edit', compact('tentangPdam'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'image' => 'nullable|string',
            'title' => 'nullable|string',
            'created_at' => 'nullable|date',
            'content' => 'nullable|string',
        ]);

        $tentangPdam = TentangPdam::findOrFail($id);
        $tentangPdam->update($request->all());

        return redirect()->route('tentang_pdams.index')
                         ->with('success', 'Tentang PDAM updated successfully.');
    }

    public function destroy($id)
    {
        $tentangPdam = TentangPdam::findOrFail($id);
        $tentangPdam->delete();

        return redirect()->route('tentang_pdams.index')
                         ->with('success', 'Tentang PDAM deleted successfully.');
    }
}
