<div id="app">
    <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                <img src="/images/logo.jpg" class="img-responsive w-100px">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">
                    <li><a class="nav-link" href="{{ url('/') }}"><i class="fas fa-home"></i></a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle"
                           href="{{ url('categoryoverview') }}" id="navbarDropdown" role="button"
                           aria-haspopup="true" aria-expanded="false"> Categorieën </a>
                        <div class="dropdown-menu droponhover" aria-labelledby="navbarDropdown">
                            @foreach($categories as $category)
                                <a class="dropdown-item"
                                   href="{{ "/../category/" . $category->category }}">{{ $category->category }}</a>
                                @if(!$loop->last)
                                    <div class="dropdown-divider"></div>
                                @endif
                            @endforeach
                        </div>
                    </li>
                    <li>
                        <a class="nav-link" href="{{ url('about') }}">{{ __('Over ons') }}</a>
                    </li>
                </ul>
                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <form action="/search" class="pr-3" method="GET">
                        <div class="input-group">
                            <input type="text" class="form-control" name="query"
                                   placeholder="Waar heb je zin in?"/>
                            <button type="submit" class=" btn btn-secondary notcurved"><i class="fas fa-search"></i>
                            </button>
                        </div>
                    </form>
                    <!-- Authentication Links -->
                    @guest
                        <li><a class="nav-link" href="/../login">Inloggen</a></li>
                        <li><a class="nav-link" href="/../registeren">Registreren</a></li>
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    @if(\Illuminate\Support\Facades\Auth::user()->role == 'admin')
                                        <a class="dropdown-item" href="/../admin/dashboard">Dashboard</a>
                                    @endif
                                    <a class="dropdown-item" href="/../user/">Mijn account</a>
                                    <a class="dropdown-item">Aankoop geschiedenis</a>
                                    <a class="dropdown-item" href="../shoppingcart">Winkelwagen</a>
                                    <a class="dropdown-item" href="/../logout/"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Uitloggen') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                          style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                            @endguest
                </ul>
            </div>
        </div>
    </nav>
</div>

<!-- Scripts -->
</body>
</html>