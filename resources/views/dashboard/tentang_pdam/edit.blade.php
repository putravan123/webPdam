@extends('dashboard.app')

@section('content')
    <h1>Edit Tentang PDAM</h1>
    <form action="{{ route('tentang_pdams.update', $tentangPdam->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label>Title:</label>
        <input type="text" name="title" value="{{ $tentangPdam->title }}" required>
        
        <label>Image:</label>
        <input type="text" name="image" value="{{ $tentangPdam->image }}">
        
        <label>Content:</label>
        <textarea name="content">{{ $tentangPdam->content }}</textarea>
        
        <button type="submit">Update</button>
    </form>
@endsection
n
