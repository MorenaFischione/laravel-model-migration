<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid p-4">
        <a class="navbar-brand" href="#">Menù principale</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" aria-current="page" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item">
                    {{-- <a class="nav-link {{ request()->routeIs('trip') ? 'active' : '' }}" href="{{ route('trip') }}">Trip</a> --}}
                </li>
            </ul>
        </div>
    </div>
</nav>

