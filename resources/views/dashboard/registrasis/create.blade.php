@extends('dashboard.app')

@section('content')
<div class="container">
    <h1>Create New Registrasi</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('registrasis.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label>Nama Lengkap:</label>
            <input type="text" name="nama_lengkap" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Email:</label>
            <input type="email" name="email" class="form-control" required>
        </div>
        <div class="form-group">
            <label>No Telephone:</label>
            <input type="number" name="no_telephone" class="form-control">
        </div>
        <div class="form-group">
            <label>No KTP:</label>
            <input type="number" name="no_ktp" class="form-control">
        </div>
        <div class="form-group">
            <label>Content:</label>
            <input type="text" name="content" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
