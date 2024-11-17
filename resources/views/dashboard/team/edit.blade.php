@extends('dashboard.app')

@section('content')
    <h1>Edit Team Member</h1>
    <form action="{{ route('team.update', $teamMember->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <!-- Name Field -->
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" id="name" name="name" class="form-control" value="{{ old('name', $teamMember->name) }}" required>
        </div>

        <!-- Title Field -->
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" id="title" name="title" class="form-control" value="{{ old('title', $teamMember->title) }}" required>
        </div>

        <!-- Image Field -->
        <div class="form-group">
            <label for="image">Image</label>
            <input type="file" id="image" name="image" class="form-control">
            @if ($teamMember->image)
                <img src="{{ asset('storage/' . $teamMember->image) }}" alt="Team Member Image" class="mt-2" width="150">
            @endif
        </div>

        <!-- Social Links Fields -->
        <div class="form-group">
            <label for="facebook">Facebook</label>
            <input type="text" id="facebook" name="facebook" class="form-control" value="{{ old('facebook', $teamMember->facebook) }}">
        </div>
        <div class="form-group">
            <label for="twitter">Twitter</label>
            <input type="text" id="twitter" name="twitter" class="form-control" value="{{ old('twitter', $teamMember->twitter) }}">
        </div>
        <div class="form-group">
            <label for="linkedin">LinkedIn</label>
            <input type="text" id="linkedin" name="linkedin" class="form-control" value="{{ old('linkedin', $teamMember->linkedin) }}">
        </div>
        <div class="form-group">
            <label for="instagram">Instagram</label>
            <input type="text" id="instagram" name="instagram" class="form-control" value="{{ old('instagram', $teamMember->instagram) }}">
        </div>

        <!-- Submit Button -->
        <button type="submit" class="btn btn-primary">Update Team Member</button>
        <a href="{{ route('team.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
@endsection
