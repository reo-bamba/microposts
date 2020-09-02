<header class = "mb-4">
    <nav class = "navbar navbar-expand-sm navbar-dark bg-dark">
        {{-- link to top page --}}
        <a class "navbar-bland" href = "/">MicroPost</a>
        
        <btton type = "button" class = "navbar-togglar" data-toggle="collapse" data-target="#nav-bar">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class ="collapse navbar-collapse" id ="nav-bar">
            <ul class="navbar-nav mr-auto"></ul>
            <ul class="navbar-nav">
               
                @if(Auth::check())
                {{-- link to user list page --}}
                 <li class="nav-item"><a href="#" class="nav-link">Users</a></li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">{{ Auth::user()->name }}</a>
                        <ul class="dropdown-menu dropdown-menu-right">
                            
                            {{-- link to user detail page --}}
                            <li class="dropdown-item"><a href="#">My profile</a></li>
                            <li class="dropdown-divider"></li>
                            
                            {{-- link to logout --}}
                            <li class="dropdown-item">{!! link_to_route('logout.get', 'Logout') !!}</li>
                        </ul>
                    </li>
               @else
                {{-- link to user registration page --}}
                <li class="nav-item">{!! link_to_route('signup.get', 'Signup', [], ['class' => 'nav-link']) !!}</li>
               {{-- link to login page --}}
                <li class="nav-item">{!! link_to_route('login', 'Login', [], ['class' => 'nav-link']) !!}</li>
            @endif
            </ul>
            
        </div>
    </nav>
</header>