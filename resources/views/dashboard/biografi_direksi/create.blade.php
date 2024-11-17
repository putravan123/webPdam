@extends('dashboard.app')

@section('content')
    <div class="container">
        <h1>Tambah Biografi Direksi</h1>
        <form action="{{ route('biografi.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="title">Judul</label>
                <input type="text" name="title" id="title" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="jabatan">Jabatan</label>
                <input type="text" name="jabatan" id="jabatan" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="content">Konten</label>
                <textarea name="content" id="content" class="form-control" rows="5" required></textarea>
            </div>
            <div class="form-group">
                <label for="facebook">Facebook</label>
                <input type="url" name="facebook" id="facebook" class="form-control">
            </div>
            <div class="form-group">
                <label for="twitter">Twitter</label>
                <input type="url" name="twitter" id="twitter" class="form-control">
            </div>
            <div class="form-group">
                <label for="linkedin">LinkedIn</label>
                <input type="url" name="linkedin" id="linkedin" class="form-control">
            </div>
            <div class="form-group">
                <label for="instagram">Instagram</label>
                <input type="url" name="instagram" id="instagram" class="form-control">
            </div>
            <div class="form-group">
                <label for="image">Gambar</label>
                <input type="file" name="image" id="image" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary mt-3">Simpan</button>
        </form>
    </div>
@endsection

