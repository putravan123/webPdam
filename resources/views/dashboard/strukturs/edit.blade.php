@extends('dashboard.app')

@section('content')
<div class="container mt-5">
    <h2>Edit Struktur</h2>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('strukturs.update', $struktur->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" class="form-control" id="title" value="{{ $struktur->title }}" required>
        </div>

        <div class="form-group mt-3">
            <label for="image">Image (optional)</label>
            <input type="file" name="image" class="form-control-file" id="image" accept="image/*">
            @if($struktur->image)
                <p>Current Image:</p>
                <img src="{{ asset('storage/' . $struktur->image) }}" alt="{{ $struktur->title }}" width="100">
            @endif
        </div>

        <button type="submit" class="btn btn-primary mt-3">Update</button>
    </form>
</div>
@endsection
