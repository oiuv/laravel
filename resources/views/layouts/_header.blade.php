<header class="navbar navbar-fixed-top bg-dark">
    <div class="container">

        <a href="{{ route('home') }}" id="logo" class="navbar-brand">Sample App</a>

        <nav>
            <ul class="nav justify-content-end nav-pills">
                @if (Auth::check())
                    <li class="nav-item"><a class="nav-link" href="{{ route('users.index') }}">用户列表</a></li>
                    <li class="dropdown nav-item">
                        <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                            {{ Auth::user()->name }} <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="nav-item"><a class="nav-link" href="{{ route('users.show', Auth::user()->id) }}">个人中心</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('users.edit', Auth::user()->id) }}">编辑资料</a></li>
                            <li class="divider"></li>
                            <li class="nav-item">
                                <a class="nav-link" id="logout" href="#">
                                    <form action="{{ route('logout') }}" method="POST">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}
                                        <button class="btn btn-block btn-danger" type="submit" name="button">退出</button>
                                    </form>
                                </a>
                            </li>
                        </ul>
                    </li>
                @else
                    <li class="nav-item"><a class="nav-link" href="{{ route('help') }}">帮助</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">登录</a></li>
                @endif
            </ul>
        </nav>

    </div>
</header>