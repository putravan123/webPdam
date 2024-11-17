@extends('dashboard.app')

@section('content')
<div class="container">
    <h1>Edit Info Tagihan</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('info_tagihans.update', $infoTagihan->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label>Tagihan:</label>
            <input type="number" name="tagihan" class="form-control" value="{{ $infoTagihan->tagihan }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
