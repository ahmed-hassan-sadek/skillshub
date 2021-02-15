<nav id="nav">
        <form action="{{ url('logout') }}" method="post" style="display:none;" id="logout-form">   
            @csrf
        </form>
    <ul class="main-menu nav navbar-nav navbar-right">
        <li><a href='{{ url("/") }}'>{{__('web.home')}}</a></li>
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{__('web.cats')}}<span class="caret"></span></a>
            <ul class="dropdown-menu">
            @foreach($category as $cat)
            <li><a href='{{ url("categories/show/{$cat->id}") }}'>
                {{ $cat->name() }}  
            </a></li>
                @endforeach
            </ul>
        </li>
        <li><a href='{{ url("contact/") }}'>{{__('web.contact')}}</a></li>

        @guest
            <li><a href="{{ url('login') }}">{{__('web.signin')}}</a></li>
            <li><a href="{{ url('register') }}">{{__('web.signup')}}</a></li>
        @endguest

        @auth
            <li><a id="logout-link" href="#">{{__('web.signOut')}}</a></li>
        @endauth
        @if(App::getLocale() == "ar")
            <li><a href="{{ url('lang/set/en') }}">EN</a></li>
        @else 
            <li><a href="{{ url('lang/set/ar') }}">ع</a></li>
        @endif
        

    </ul>
</nav>