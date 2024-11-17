@extends('dashboard.app')

@section('content')
<div class="container">
    <h1>Keuangan List</h1>
    <a href="{{ route('keuangan.create') }}" class="btn btn-primary mb-3">Create New Keuangan</a>

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
            @foreach($keuangan as $key => $item)
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>{{ $item->title }}</td>
                    <td>{{ $item->content }}</td>
                    <td>
                        @if($item->image)
                            <img src="{{ asset('images/' . $item->image) }}" width="100" alt="{{ $item->title }}">
                        @else
                            No image
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('keuangan.show', $item->id) }}" class="btn btn-info btn-sm">Show</a>
                        <a href="{{ route('keuangan.edit', $item->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('keuangan.destroy', $item->id) }}" method="POST" style="display:inline;">
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
