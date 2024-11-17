<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Registrasi;

class RegistrasiController extends Controller
{
    // Display a listing of the records
    public function index()
    {
        $registrasis = Registrasi::all();
        return view('dasboard.registrasis.index', compact('registrasis'));
    }

    // Show the form for creating a new record
    public function create()
    {
        return view('dashboard.registrasis.create');
    }

    // Store a newly created record in storage
    public function store(Request $request)
    {
        $request->validate([
            'nama_lengkap' => 'required|string',
            'email' => 'required|email|unique:registrasis,email',
            'no_telephone' => 'nullable|numeric',
            'no_ktp' => 'nullable|numeric',
            'content' => 'nullable|string|max:100',
        ]);

        Registrasi::create($request->all());
        return redirect()->route('dashboard.registrasis.index')
                         ->with('success', 'Registrasi created successfully.');
    }
    public function registrasis(Request $request)
    {
        $request->validate([
            'nama_lengkap' => 'required|string',
            'email' => 'required|email|unique:registrasis,email',
            'no_telephone' => 'nullable|numeric',
            'no_ktp' => 'nullable|numeric',
            'content' => 'nullable|string|max:100',
        ]);

        Registrasi::create($request->all());
        return redirect()->route('dashboard.registrasis.index')
                         ->with('success', 'Registrasi created successfully.');
    }

    // Display the specified record
    public function show($id)
    {
        $registrasi = Registrasi::findOrFail($id);
        return view('dashboard.registrasis.show', compact('registrasi'));
    }

    // Show the form for editing the specified record
    public function edit($id)
    {
        $registrasi = Registrasi::findOrFail($id);
        return view('dashboard.registrasis.edit', compact('registrasi'));
    }

    // Update the specified record in storage
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_lengkap' => 'required|string',
            'email' => 'required|email|unique:registrasis,email,'.$id,
            'no_telephone' => 'nullable|numeric',
            'no_ktp' => 'nullable|numeric',
            'content' => 'nullable|string|max:100',
        ]);

        $registrasi = Registrasi::findOrFail($id);
        $registrasi->update($request->all());

        return redirect()->route('registrasis.index')
                         ->with('success', 'Registrasi updated successfully.');
    }

    // Remove the specified record from storage
    public function destroy($id)
    {
        $registrasi = Registrasi::findOrFail($id);
        $registrasi->delete();

        return redirect()->route('registrasis.index')
                         ->with('success', 'Registrasi deleted successfully.');
    }
}
