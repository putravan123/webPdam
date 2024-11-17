@extends('dashboard.app')

@section('content')
    <h1>Create New Team Member</h1>
    <form action="{{ route('team.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <!-- Name Field -->
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" id="name" name="name" class="form-control" value="{{ old('name') }}" required>
            @error('name')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <!-- Title Field -->
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" id="title" name="title" class="form-control" value="{{ old('title') }}" required>
            @error('title')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <!-- Image Field -->
        <div class="form-group">
            <label for="image">Image</label>
            <input type="file" id="image" name="image" class="form-control">
            @error('image')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <!-- Social Links Fields -->
        <div class="form-group">
            <label for="facebook">Facebook</label>
            <input type="text" id="facebook" name="facebook" class="form-control" value="{{ old('facebook') }}">
        </div>
        <div class="form-group">
            <label for="twitter">Twitter</label>
            <input type="text" id="twitter" name="twitter" class="form-control" value="{{ old('twitter') }}">
        </div>
        <div class="form-group">
            <label for="linkedin">LinkedIn</label>
            <input type="text" id="linkedin" name="linkedin" class="form-control" value="{{ old('linkedin') }}">
        </div>
        <div class="form-group">
            <label for="instagram">Instagram</label>
            <input type="text" id="instagram" name="instagram" class="form-control" value="{{ old('instagram') }}">
        </div>

        <!-- Submit Button -->
        <button type="submit" class="btn btn-primary">Create Team Member</button>
        <a href="{{ route('team.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
@endsection