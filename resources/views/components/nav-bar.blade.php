<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid d-flex">
      <div class="p-2 flex-grow-1">
        <a class="navbar-brand fs-4" href="#">CG Hotel</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse d-flex justify-content-end" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-link {{ request()->routeIs('landingPage') ? 'active' : '' }}" aria-current="page" href="{{ route('landingPage') }}">Home</a>
          <a class="nav-link {{ request()->routeIs('rooms') ? 'active' : '' }}" href="{{ route('rooms') }}">Rooms</a>
          <a class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}" href="{{ route('about') }}">About</a>
        </div>
      </div>
    </div>
</nav>
