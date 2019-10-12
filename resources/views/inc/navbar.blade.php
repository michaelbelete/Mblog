<nav class="navbar navbar-expand-md navbar-dark bg-primary">
    <div class="container">
        @guest
            <a class="navbar-brand" href="/"><h3 class="mt-1">{{config('app.name', 'Mblog')}}</h3></a>
        @else
            <a class="navbar-brand" href="/dashboard"><h3 class="mt-1">{{config('app.name', 'Mblog')}}</h3></a>
        @endguest
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                @guest
                    <a href="/" class="nav-link">Home</a>
                @else
                    <a href="/dashboard" class="nav-link">Dashboard</a>
                @endguest
                </li>
                <li class="nav-item active">
                <a href="/about" class="nav-link">About</a>
                </li>
                <li class="nav-item active">
                <a href="/services" class="nav-link">Services</a>
                </li>
                <li class="nav-item active">
                <a href="/posts" class="nav-link">Blog</a>
                </li>
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item active">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Signup') }}</a>
                        </li>
                    @endif
                @else
                    <!-- <li class="nav-item active">
                        <a class="nav-link" href="/dashboard">
                            {{ Auth::user()->name }}
                        </a>
                    </li> -->
                    <li>
                        <a class="nav-link" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();"
                        >
                            {{ __('Logout') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
