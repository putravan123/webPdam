@extends('dashboard.app')

@section('content')
    <div class="container">
        <h1>Daftar Biografi Direksi</h1>
        <a href="{{ route('biografi.create') }}" class="btn btn-primary">Tambah Biografi</a>
        <table class="table mt-3">
            <thead>
                <tr>
                    <th>Judul</th>
                    <th>Jabatan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($biografis as $biografi)
                    <tr>
                        <td>{{ $biografi->title }}</td>
                        <td>{{ $biografi->jabatan }}</td>
                        <td>
                            <a href="{{ route('biografi.show', $biografi->id) }}" class="btn btn-info">Lihat</a>
                            <a href="{{ route('biografi.edit', $biografi->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('biografi.destroy', $biografi->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

