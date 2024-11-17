@extends('dashboard.app')

@section('content')
<div class="container">
    <h1>Create New Info Tagihan</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('info_tagihans.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label>Tagihan:</label>
            <input type="number" name="tagihan" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
on
