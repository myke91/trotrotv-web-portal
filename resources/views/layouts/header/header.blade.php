<header class="header dark-bg">
    <div class="toggle-nav">
        <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
    </div>

    <a href="index.html" class="logo" style="color:$000000; font-weight: bold">
        <span style="color: #EC2028">Tro</span style="color: #000000"><span>tro.</span><span style="color: #EC2028">TV</span>
    </a>

    <div class="nav search-row" id="top_menu">
        <ul class="nav top-menu">
            <li>
                <form class="navbar-form">
                    <input class="form-control" placeholder="Search" type="text">
                </form>
            </li>
        </ul>

    </div>

    <div class="top-nav notification-row">
        <ul class="nav pull-right top-menu">
            <li class="dropdown">
                <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="profile-ava">
                            <!--    <img alt="" src="img/avatar1_small.jpg">-->
                            </span>
                    <span class="username">
                        @if(Auth::check())
                            {{Auth::getUser()->username}}</span>
                    @else
                        No User
                    @endif
                    <b class="caret"></b>
                </a>
                <ul class="dropdown-menu extended logout">
                    <div class="log-arrow-up"></div>
                    <li>
                        <a href=""><i class="icon_key_alt"></i> Log Out</a>
                    </li>
                </ul>
            </li>

        </ul>

    </div>
</header>