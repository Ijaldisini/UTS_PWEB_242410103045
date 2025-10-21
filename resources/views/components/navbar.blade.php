<link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
    <div class="container">
        <!-- Teks SewaFilm (tidak bisa diklik) -->
        <span class="navbar-brand fw-bold text-warning">SewaFilm</span>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMain">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navMain">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('dashboard', ['username' => request()->query('username')]) }}">Dashboard</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('pengelolaan', ['username' => request()->query('username')]) }}">Pengelolaan</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('profile', ['username' => request()->query('username')]) }}">Profil</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link text-danger" href="{{ route('login') }}">Logout</a>
                </li>
            </ul>
        </div>
    </div>
</nav>