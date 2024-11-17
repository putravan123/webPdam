@extends('dashboard.app')

@section('content')
<div class="container">
    <h1>Edit Registrasi</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('registrasis.update', $registrasi->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label>Nama Lengkap:</label>
            <input type="text" name="nama_lengkap" class="form-control" value="{{ $registrasi->nama_lengkap }}" required>
        </div>
        <div class="form-group">
            <label>Email:</label>
            <input type="email" name="email" class="form-control" value="{{ $registrasi->email }}" required>
        </div>
        <div class="form-group">
            <label>No Telephone:</label>
            <input type="number" name="no_telephone" class="form-control" value="{{ $registrasi->no_telephone }}">
        </div>
        <div class="form-group">
            <label>No KTP:</label>
            <input type="number" name="no_ktp" class="form-control" value="{{ $registrasi->no_ktp }}">
        </div>
        <div class="form-group">
            <label>Content:</label>
            <input type="text" name="content" class="form-control" value="{{ $registrasi->content }}">
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection

