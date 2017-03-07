    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-static-top edit-nav">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    <li class="active"><a href="{{ route('home.index') }}">Home</a></li>
                    <li><a href="{{ url('/posts') }}">文章(posts) </a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">作品(works) <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                          <li><a href="#">旅遊景點</a></li>
                          <li><a href="#">待續</a></li>
                          <li><a href="#">待續</a></li>
                          <li role="separator" class="divider"></li>
                          <li class="dropdown-header">環境指標</li>
                          <li><a href="{{ url('/open/psi') }}">空汙指標</a></li>
                          <li><a href="{{ url('/open/pm') }}">PM2.5 細懸浮微粒指標</a></li>
                        </ul>
                    </li>
                    <li><a href="#">關於本站(About)</a></li>
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">登入</a></li>
                        <li><a href="{{ url('/register') }}">註冊</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li>
                                    <a href="{{ url('/logout') }}"
                                        onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>

                                    <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>
    <div id="wrapper"></div>