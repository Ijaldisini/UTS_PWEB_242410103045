@extends('layouts.app')

@section('title', 'myMarvelFilms - Dashboard')

@section('content')

<link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
<div class="d-flex justify-content-between align-items-center mb-3">
    <div>
        <h3>Dashboard</h3>
        <p class="mb-0">Selamat datang, <strong>{{ $username ?? 'Tamu' }}</strong>!</p>
    </div>
    <div>
        <a class="btn btn-outline-secondary" href="{{ route('pengelolaan', ['username' => $username]) }}">Lihat Pengelolaan</a>
    </div>
</div>

<div class="row row-cols-1 row-cols-md-3 g-4">
    @foreach($featured as $f)
    <div class="col">
        <div class="card h-100">
            <img src="{{ asset($f['image']) }}" alt="{{ $f['title'] }}" class="img-fluid rounded mb-2">
            <div class="card-body">
                <h5 class="card-title">{{ $f['title'] }}</h5>
                <p class="mb-1"><strong>Genre:</strong> {{ $f['genre'] }} | <strong>Tahun:</strong> {{ $f['year'] }}</p>
                <p class="mb-1">{{ $f['description'] }}</p>
                <p class="mb-0"><strong>Harga sewa:</strong> {{ $f['price'] }}</p>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection