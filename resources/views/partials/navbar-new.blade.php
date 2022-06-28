<header class="">
    <nav class="navbar navbar-expand-lg">
      <div class="container">
        <a class="navbar-brand" href="#"><h2>TOPGEAR <em>Website</em></h2></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
              <li class="nav-item active">
                  <a class="nav-link" href="#">Home
                    <span class="sr-only">(current)</span>
                  </a>
              </li>

              <li class="nav-item"><a class="nav-link" href="{{ route('cars.index') }}">Cars</a></li>

              <li class="nav-item">
                <a class="nav-link" href="{{ route('locale.update', App::isLocale('en') ? 'ar' : 'en') }}">{{ App::isLocale('en') ? 'Arabic' : 'English' }}</a>
              </li>

              <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">More</a>

                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="{{ route('categories.index') }}">Categories</a>
                    <a class="dropdown-item" href="team.html">Team</a>
                    <a class="dropdown-item" href="testimonials.html">Testimonials</a>
                    <a class="dropdown-item" href="terms.html">Terms</a>
                  </div>
              </li>

              {{-- <li class="nav-item"><a class="nav-link" href="about-us.html">About Us</a></li> --}}

              <li class="nav-item"><a class="nav-link" href="contact.html">Contact Us</a></li>
              <li>
                  <form class="form-inline my-2 my-lg-0" action="{{ route('cars.index') }}" method="GET">
                    <ul>
                        <li><input type="hidden" name="category" value="{{ request()->category }}"></li>
                        <li>
                            <input class="form-control mr-sm-2" type="search" name="q" placeholder="Search"
                            value="{{ request()->q }}" aria-label="Search">
                        </li>
                        {{-- <li><button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button></li> --}}
                    </ul>
                  </form>
              </li>

              @guest
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Sign in</a>

                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="{{ route('login') }}">Login</a>
                        <a class="dropdown-item" href="{{ route('register') }}">Register</a>
                    </div>
                </li>
                @endguest
                @auth
                    <div class="nav-item px-3">
                        Hello {{ auth()->user()->name }}
                    </div>
                    <form class="form-inline my-2 my-lg-0" action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button class="btn btn-outline-danger my-2 my-sm-0" type="submit">Logout</button>
                    </form>
                @endauth
          </ul>


    </div>
</div>
</nav>
@push('css')
<style>


</style>
@endpush

  </header>
