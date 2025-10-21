@extends('layouts.app')

@section('title', 'Profile')

@push('styles')
@endpush

@section('content')
<link rel="stylesheet" href="{{ asset('css/profile.css') }}">
<div class="container py-5">
    <h3>Profile Pengguna</h3>

    <x-card title="Informasi Pengguna">
        <ul class="list-unstyled mb-0">
            <li>
                <strong>Username:</strong>
                <span>{{ $profile['username'] }}</span>
            </li>
            <li>
                <strong>Nama Lengkap:</strong>
                <span>{{ $profile['fullname'] }}</span>
            </li>
            <li>
                <strong>Email:</strong>
                <span>{{ $profile['email'] }}</span>
            </li>
        </ul>
    </x-card>

    <a href="{{ route('dashboard', ['username' => $profile['username']]) }}" class="btn btn-secondary">
        Kembali ke Dashboard
    </a>
</div>
@endsection