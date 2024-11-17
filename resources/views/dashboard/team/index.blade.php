@extends('dashboard.app')

@section('content')
    <h1>Team Members</h1>
    <a href="{{ route('team.create') }}">Add Team Member</a>
    <div class="row">
        @foreach($teamMembers as $teamMember)
            <div class="col-md-3">
                <div class="card">
                    <img src="{{ asset('storage/' . $teamMember->image) }}" class="img-fluid rounded-top w-100" alt="Image" style="width: 300px; height: 300px;">
                    <div class="card-body">
                        <h5 class="card-title">{{ $teamMember->name }}</h5>
                        <p class="card-text">{{ $teamMember->title }}</p>
                        <a href="{{ route('team.edit', $teamMember->id) }}" class="btn btn-primary">Edit</a>
                        <form action="{{ route('team.destroy', $teamMember->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection