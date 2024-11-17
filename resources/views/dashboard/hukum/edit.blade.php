@extends('dashboard.app')

@section('content')
<div class="container">
    <h1>Edit About</h1>

    <form action="{{ route('abouts.update', $about) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" name="title" value="{{ $about->title }}" required>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" name="description" required>{{ $about->description }}</textarea>
        </div>
        <div class="mb-3">
            <label for="icon" class="form-label">Icon (Image)</label>
            <input type="file" class="form-control" name="icon" accept="image/*">
            <small>Leave empty to keep the current image.</small>
            @if ($about->icon)
                <img src="{{ asset('storage/' . $about->icon) }}" alt="{{ $about->title }} icon" style="width: 40px; height: 40px;">
            @endif
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
