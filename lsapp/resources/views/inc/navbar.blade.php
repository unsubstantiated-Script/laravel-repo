{{-- <nav class="navbar navbar-expand-md navbar-dark bg-dark mb-4">
  <div class="container">
    <a class="navbar-brand" href="/">{{config('app.name', 'LSAPP')}}</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav me-auto mb-2 mb-md-0">
        <li class="nav-item">
          <a class="nav-link " aria-current="page" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " aria-current="page" href="/about">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " aria-current="page" href="/services">Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " aria-current="page" href="/posts">Blog</a>
        </li>
      </ul>
      <ul class="nav navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link "  aria-current="page" href="/posts/create">Create Post</a>
        </li>
      </ul>
    </div>
  </div>
</nav> --}}

 <nav class="navbar navbar-expand-md navbar-dark bg-dark mb-4">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                          <a class="nav-link " aria-current="page" href="/">Home</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link " aria-current="page" href="/about">About</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link " aria-current="page" href="/services">Services</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link " aria-current="page" href="/posts">Blog</a>
                        </li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif
                            
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item "  href="/dashboard">Dashboard</a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                             
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>