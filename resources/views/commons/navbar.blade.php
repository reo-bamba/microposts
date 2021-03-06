<header class = "mb-4">
    <nav class = "navbar navbar-expand-sm navbar-dark bg-dark">
        {{-- link to top page --}}
        <a class "navbar-bland" href = "/">MicroPost</a>
        
        
        <div class="collapse navbar-collapse" id="nav-bar">
            <ul class="navbar-nav mr-auto"></ul>
            <ul class="navbar-nav">
               
                @if(Auth::check())
                {{-- link to user list page --}}
                 <li class="nav-item">{!! link_to_route('users.index', 'Users', [], ['class' => 'nav-link']) !!}</li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">{{ Auth::user()->name }}</a>
                        
                        <ul class="dropdown-menu dropdown-menu-right">
                            
                           {{-- ユーザ詳細ページへのリンク --}}
                            <li class="dropdown-item">{!! link_to_route('users.show', 'My profile', ['user' => Auth::id()]) !!}</li>
                            <li class="dropdown-divider"></li>
                                
                            {{-- ログアウトへのリンク --}}
                            <li class="dropdown-item">{!! link_to_route('logout.get', 'Logout') !!}</li>
                            
                            {{-- favorite page --}}
                            {{-- <li class = "dropdown-item">{!! link_to_route('users.favorites', 'My favorite', ['user' => Auth::id()]) !!}</li> --}}
                            
                        </ul>
                    </li>
        
               @else
                {{-- ユーザ登録ページへのリンク --}}
                    <li class="nav-item">{!! link_to_route('signup.get', 'Signup', [], ['class' => 'nav-link']) !!}</li>
                    {{-- ログインページへのリンク --}}
                    <li class="nav-item">{!! link_to_route('login', 'Login', [], ['class' => 'nav-link']) !!}</li>
            @endif
            </ul>
            
        </div>
    </nav>
</header>