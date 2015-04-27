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
            <ul class="nav navbar-nav">
                <p class="navbar-text">
                    <i class="fa fa-dashboard"></i> Admin Panel
                </p>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="{{route('logout')}}"><i class="fa fa-sing-out"></i>Logout</a></li>
            </ul>
        </div>
    </div>
</nav>