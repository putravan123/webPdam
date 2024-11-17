<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\InfoRegistrasi;

class InfoRegistrasiController extends Controller
{
    public function index()
    {
        $infoRegistrasis = InfoRegistrasi::all();
        return view('dashboard.info_registrasis.index', compact('infoRegistrasis'));
    }

    public function create()
    {
        return view('dashboard.info_registrasis.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'no_registrasi' => 'required|integer',
        ]);

        InfoRegistrasi::create($request->all());
        return redirect()->route('info_registrasis.index')
                         ->with('success', 'Info Registrasi created successfully.');
    }

    public function show($id)
    {
        $infoRegistrasi = InfoRegistrasi::findOrFail($id);
        return view('dashboard.info_registrasis.show', compact('infoRegistrasi'));
    }

    public function edit($id)
    {
        $infoRegistrasi = InfoRegistrasi::findOrFail($id);
        return view('dashboard.info_registrasis.edit', compact('infoRegistrasi'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'no_registrasi' => 'required|integer',
        ]);

        $infoRegistrasi = InfoRegistrasi::findOrFail($id);
        $infoRegistrasi->update($request->all());

        return redirect()->route('info_registrasis.index')
                         ->with('success', 'Info Registrasi updated successfully.');
    }

    public function destroy($id)
    {
        $infoRegistrasi = InfoRegistrasi::findOrFail($id);
        $infoRegistrasi->delete();

        return redirect()->route('info_registrasis.index')
                         ->with('success', 'Info Registrasi deleted successfully.');
    }
}
