<nav class="navbar navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            <img src="{{ asset('images/logo.png') }}" alt="logo" height="40">
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('/jobs') }}">Jobs</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('/about') }}">About</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('/contact') }}">Contact</a></li>
                @auth
                    <li class="nav-item"><a class="nav-link" href="{{ route('profile.index') }}">Profile</a></li>
                @endauth

            </ul>
        </div>
        <a class="navbar-brand" href="{{ url('/') }}">
            <img src="https://tse3.mm.bing.net/th/id/OIP.rml0smmpWgT5z_DXgXReGgHaHa?pid=ImgDet&w=183&h=183&c=7&dpr=1.3&o=7&rm=3" alt="logo" height="40">
        </a>
    </div>
</nav>
