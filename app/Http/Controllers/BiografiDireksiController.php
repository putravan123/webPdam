<?php

namespace App\Http\Controllers;

use App\Models\BiografiDireksi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BiografiDireksiController extends Controller
{
    // Menampilkan daftar biografi direksi
    public function index()
    {
        $biografis = BiografiDireksi::all(); // Ambil semua data dari tabel biografi_direksis
        return view('dashboard.biografi_direksi.index', compact('biografis'));
    }

    // Menampilkan form untuk membuat biografi direksi baru
    public function create()
    {
        return view('dasboard.biografi_direksi.create');
    }

    // Menyimpan data biografi direksi yang baru
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'jabatan' => 'required|string|max:255',
            'content' => 'required|string',
            'facebook' => 'nullable|url',
            'twitter' => 'nullable|url',
            'linkedin' => 'nullable|url',
            'instagram' => 'nullable|url',
            'image' => 'nullable|image|max:2048',
        ]);

        // Menangani file gambar jika ada
        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images/biografi_direksi', 'public');
        }

        // Menyimpan data biografi direksi
        BiografiDireksi::create([
            'title' => $request->title,
            'jabatan' => $request->jabatan,
            'content' => $request->content,
            'facebook' => $request->facebook,
            'twitter' => $request->twitter,
            'linkedin' => $request->linkedin,
            'instagram' => $request->instagram,
            'image' => $imagePath,
        ]);

        return redirect()->route('biografi.index')->with('success', 'Biografi Direksi berhasil ditambahkan.');
    }

    // Menampilkan detail biografi direksi
    public function show($id)
    {
        $biografi = BiografiDireksi::findOrFail($id);
        return view('dashboadr.biografi_direksi.show', compact('biografi'));
    }

    // Menampilkan form untuk mengedit biografi direksi
    public function edit($id)
    {
        $biografi = BiografiDireksi::findOrFail($id);
        return view('dashboard.biografi_direksi.edit', compact('biografi'));
    }

    // Mengupdate biografi direksi
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'jabatan' => 'required|string|max:255',
            'content' => 'required|string',
            'facebook' => 'nullable|url',
            'twitter' => 'nullable|url',
            'linkedin' => 'nullable|url',
            'instagram' => 'nullable|url',
            'image' => 'nullable|image|max:2048',
        ]);

        $biografi = BiografiDireksi::findOrFail($id);

        // Menangani file gambar jika ada
        if ($request->hasFile('image')) {
            if ($biografi->image) {
                Storage::delete('public/' . $biografi->image);
            }
            $biografi->image = $request->file('image')->store('images/biografi_direksi', 'public');
        }

        // Update data biografi direksi
        $biografi->update([
            'title' => $request->title,
            'jabatan' => $request->jabatan,
            'content' => $request->content,
            'facebook' => $request->facebook,
            'twitter' => $request->twitter,
            'linkedin' => $request->linkedin,
            'instagram' => $request->instagram,
        ]);

        return redirect()->route('biografi.index')->with('success', 'Biografi Direksi berhasil diperbarui.');
    }

    // Menghapus biografi direksi
    public function destroy($id)
    {
        $biografi = BiografiDireksi::findOrFail($id);
        if ($biografi->image) {
            Storage::delete('public/' . $biografi->image);
        }
        $biografi->delete();
        
        return redirect()->route('biografi.index')->with('success', 'Biografi Direksi berhasil dihapus.');
    }
}
