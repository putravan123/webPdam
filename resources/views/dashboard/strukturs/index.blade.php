@extends('dashboard.app')

@section('content')
<div class="container mt-5">
    <h2>All Strukturs</h2>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <a href="{{ route('strukturs.create') }}" class="btn btn-primary mb-3">Create New Struktur</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>Title</th>
                <th>Image</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($strukturs as $struktur)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $struktur->title }}</td>
                    <td>
                        @if($struktur->image)
                            <img src="{{ asset('storage/' . $struktur->image) }}" alt="{{ $struktur->title }}" width="100">
                        @else
                            No Image
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('strukturs.show', $struktur->id) }}" class="btn btn-info btn-sm">View</a>
                        <a href="{{ route('strukturs.edit', $struktur->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('strukturs.destroy', $struktur->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
