@extends('layouts.auth')

@section('title', 'myMarvelFilms')

@section('content')
<link rel="stylesheet" href="{{ asset('css/login.css') }}">
<div class="row justify-content-center mt-4">
    <div class="col-12 col-md-6">
        <x-card title="Form Login">
            <form action="{{ route('login.post') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Username</label>
                    <input name="username" type="text" class="form-control" placeholder="Masukkan username" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input name="password" type="password" class="form-control" placeholder="Password" required>
                </div>
                <button class="btn btn-primary" type="submit">Login</button>
            </form>
        </x-card>
    </div>
</div>
@endsection