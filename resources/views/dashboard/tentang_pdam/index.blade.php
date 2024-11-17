@extends('dashboard.app')

@section('content')
    <h1>Tentang PDAMs</h1>
    <a href="{{ route('tentang_pdams.create') }}">Create New</a>
    <ul>
        @foreach($tentangPdam as $item)
            <li>
                <h2>{{ $item->title }}</h2>
                <p>{{ $item->content }}</p>
                <a href="{{ route('tentang_pdams.show', $item->id) }}">View</a>
                <a href="{{ route('tentang_pdams.edit', $item->id) }}">Edit</a>
                <form action="{{ route('tentang_pdams.destroy', $item->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection

