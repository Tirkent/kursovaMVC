<nav class="navbar navbar-fixed-top navbar-custom">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">Писатели</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                @guest
                <li class="{{ Route::currentRouteName()== 'home' ? 'active' : '' }}">
                    <a href="{{ route('home')}}">Начало</a>
                </li>

                <li class="{{ Route::currentRouteName()== 'aboutus' ? 'active' : '' }}">
                    <a href="{{ route('aboutus')}}">За нас</a>
                </li>

                <li class="{{ Route::currentRouteName()== 'register' ? 'active' : '' }}">
                    <a href="{{ route('register')}}">Регистрация</a>
                </li>

                <li class="{{ Route::currentRouteName()== 'login' ? 'active' : '' }}">
                    <a href="{{ route('login')}}">Вход</a>
                </li>
                @endguest
                @auth
                <li class="{{ Route::currentRouteName()== 'home' ? 'active' : '' }}">
                    <a href="{{ route('home')}}">Начало</a>
                </li>

                <li class="{{ Route::currentRouteName()== 'aboutus' ? 'active' : '' }}">
                    <a href="{{ route('aboutus')}}">За нас</a>
                </li>
                <li class="{{ Route::currentRouteName()== 'posts.add' ? 'active' :
'' }}">
                    <a href="{{ route('posts.add') }}">Добави пост</a>
                </li>

                <li>
                    <form method="POST" action="{{ route('logout') }}" style="display: inline;">
                        @csrf
                        <button type="submit" class="btn btn-link navbar-link" style="color: #0a290b; text-decoration: none; padding: 15px 20px; display: inline-block;  font-weight: bold;">
                            Излизане
                        </button>
                    </form>
                </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>