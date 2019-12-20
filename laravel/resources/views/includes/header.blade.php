    <!-- /banner section -->
    <!-- top bar -->
    <div class="top-bar">
        <div class="container">

            <ul class="top-contacts">
                <li class="top-unhover">
                    <p><span class="fa fa-phone-square" aria-hidden="true"></span> +7 (800) 555 35 35</p>
                <li class="top-hover">
                    <p><span class="fa fa-envelope" aria-hidden="true"></span> <a href="mailto:support@company.com">bestcarwash@mail.ru</a></p>
            </ul>
            <ul class="top-links">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-vk"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
            </ul>


            <!-- Right Side Of Navbar -->
            <ul class="top-auth">
                <!-- Authentication Links -->
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                         {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-my" aria-labelledby="navbarDropdown">
                            <a class="" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                               <div> {{ __('Logout') }}</div>
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>

            <div class="clearfix"></div>
        </div>
    </div>

    <!-- /top bar -->
    <div class="header-top">
        <div class="container">
            <nav class="navbar navbar-default">
                <div class="navbar-header navbar-left">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
                    <h1><a class="navbar-brand" href="index.html"><span> Автомобильная Мойка</span></a></h1>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav cl-effect-14">
                        <li><a class="scroll" href="{{route('about')}}">О компании</a></li>
                        <li><a class="scroll" href="{{route('pricelist')}}">Прайс</a></li>
                        <li><a class="scroll" href="{{route('team')}}">Наша команда</a></li>
                        {{-- <li><a class="scroll" href="{{route('gallery')}}">Галерея</a></li> --}}
                        <li><a class="scroll" href="{{route("contacts")}}">Контакты</a></li>
                        <li><a class="scroll" href="{{route('news')}}">Статьи</a></li>
                        <li><a class="scroll" href="{{route('comments')}}">Отзывы</a></li>
                    </ul>

                     {{-- <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                            <!-- Authentication Links -->
                            @guest
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                                @if (Route::has('register'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                    </li>
                                @endif
                            @else
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }} <span class="caret"></span>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                            @endguest
                    </ul> --}}

                </div>

            </nav>

        </div>

    </div>
</div>

