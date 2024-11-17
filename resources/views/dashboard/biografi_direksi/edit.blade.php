@extends('dashboard.app')

@section('content')
    <div class="container">
        <h1>Edit Biografi Direksi</h1>
        <form action="{{ route('biografi.update', $biografi->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="title">Judul</label>
                <input type="text" name="title" id="title" class="form-control" value="{{ old('title', $biografi->title) }}" required>
            </div>
            <div class="form-group">
                <label for="jabatan">Jabatan</label>
                <input type="text" name="jabatan" id="jabatan" class="form-control" value="{{ old('jabatan', $biografi->jabatan) }}" required>
            </div>
            <div class="form-group">
                <label for="content">Konten</label>
                <textarea name="content" id="content" class="form-control" rows="5" required>{{ old('content', $biografi->content) }}</textarea>
            </div>
            <div class="form-group">
                <label for="facebook">Facebook</label>
                <input type="url" name="facebook" id="facebook" class="form-control" value="{{ old('facebook', $biografi->facebook) }}">
            </div>
            <div class="form-group">
                <label for="twitter">Twitter</label>
                <input type="url" name="twitter" id="twitter" class="form-control" value="{{ old('twitter', $biografi->twitter) }}">
            </div>
            <div class="form-group">
                <label for="linkedin">LinkedIn</label>
                <input type="url" name="linkedin" id="linkedin" class="form-control" value="{{ old('linkedin', $biografi->linkedin) }}">
            </div>
            <div class="form-group">
                <label for="instagram">Instagram</label>
                <input type="url" name="instagram" id="instagram" class="form-control" value="{{ old('instagram', $biografi->instagram) }}">
            </div>
            <div class="form-group">
                <label for="image">Gambar</label>
                <input type="file" name="image" id="image" class="form-control">
                @if ($biografi->image)
                    <div class="mt-2">
                        <img src="{{ asset('storage/' . $biografi->image) }}" alt="Image" class="img-thumbnail" width="150">
                    </div>
                @endif
            </div>
            <button type="submit" class="btn btn-primary mt-3">Perbarui</button>
        </form>
    </div>
@endsection

