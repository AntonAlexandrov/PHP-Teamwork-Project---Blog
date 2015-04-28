<nav class="navbar navbar-default" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-targer=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="{{route('home')}}" class="navbar-brand specElite">Lake Mead</a>
        </div>
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            @if(isset(Auth::user()->name))
            <ul class="nav navbar-nav">
                <p class="navbar-text">
                    <a href="{{route('adminpage')}}"><i class="fa fa-dashboard"></i> Admin Panel</a>
                </p>
            </ul>
            @endif
            <ul class="nav navbar-nav navbar-right">
                <li><div class=" navbar-brand specElite">
                        @if(isset(Auth::user()->name))
                            Hello <a href="#" class="dropdown-toggle"
                                      data-toggle="dropdown" style="color:#777777"><i
                                        class="fa
                    fa-user"></i>  {{\Auth::user()->username}} <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="{{route('logout')}}"><i class="fa fa-sing-out"></i> Logout</a></li>
                            </ul>
                        @else
                            Welcome, Stranger!
                            <a href="/auth/login">Login</a>
                        @endif
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>