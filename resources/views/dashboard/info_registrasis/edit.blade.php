@extends('dashboard.app')

@section('content')
<div class="container">
    <h1>Edit Info Registrasi</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('info_registrasis.update', $infoRegistrasi->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label>No Registrasi:</label>
            <input type="number" name="no_registrasi" class="form-control" value="{{ $infoRegistrasi->no_registrasi }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection

