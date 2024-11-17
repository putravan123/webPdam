@extends('dashboard.app')

@extends('layouts.app')

@section('content')
    <h1>Create New Tentang PDAM</h1>
    <form action="{{ route('tentang_pdams.store') }}" method="POST">
        @csrf
        <label>Title:</label>
        <input type="text" name="title" required>
        
        <label>Image:</label>
        <input type="text" name="image">
        
        <label>Content:</label>
        <textarea name="content"></textarea>
        
        <button type="submit">Save</button>
    </form>
@endsection
