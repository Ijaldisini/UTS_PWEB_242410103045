@extends('layouts.app')

@section('title', 'myMarvelFilms - Pengelolaan Film')

@section('content')
<link rel="stylesheet" href="{{ asset('css/pengelolaan.css') }}">
<div class="d-flex justify-content-between align-items-center mb-3">
    <div>
        <h3>Pengelolaan Film</h3>
    </div>
    <div>
        <!-- link membawa username bila ada -->
        <a class="btn btn-sm btn-outline-primary" href="{{ route('dashboard', ['username' => request()->query('username')]) }}">Kembali Dashboard</a>
    </div>
</div>

<div class="table-responsive">
    <table class="table table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>Poster</th>
                <th>Judul</th>
                <th>Genre</th>
                <th>Tahun</th>
                <th>Harga</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach($films as $film)
            <tr>
                <td>{{ $film['id'] }}</td>
                <td><img src="{{ asset($film['image']) }}" alt="{{ $film['title'] }}" width="80" class="rounded"></td>
                <td>
                    <strong>{{ $film['title'] }}</strong>
                    <div class="small text-muted">{{ $film['description'] }}</div>
                </td>
                <td>{{ $film['genre'] }}</td>
                <td>{{ $film['year'] }}</td>
                <td>{{ $film['price'] }}</td>
                <td>{{ $film['status'] }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection