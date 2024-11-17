@extends('dashboard.app')

@section('content')
<div class="container">
    <h1>Teknis List</h1>
    <a href="{{ route('teknis.create') }}" class="btn btn-primary mb-3">Create New Teknis</a>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Title</th>
                <th>Content</th>
                <th>Image</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($Teknis as $key => $teknis)
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>{{ $teknis->title }}</td>
                    <td>{{ $teknis->content }}</td>
                    <td>
                        @if($teknis->image)
                            <img src="{{ asset('images/' . $teknis->image) }}" width="100" alt="{{ $teknis->title }}">
                        @else
                            No image
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('teknis.show', $teknis->id) }}" class="btn btn-info btn-sm">Show</a>
                        <a href="{{ route('teknis.edit', $teknis->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('teknis.destroy', $teknis->id) }}" method="POST" style="display:inline;">
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
