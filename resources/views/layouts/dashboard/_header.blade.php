{{ App::setLocale(@session('lang')) }}
<header class="app-header"><a class="app-header__logo" href="/">Pro Traders</a>
    <a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"></a>
    <ul class="app-nav">
        <li></li>
        <li>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <a style="font-size:22px;color:white" id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ session('name') }} <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a style="font-size:18px" class="dropdown-item" href="#" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                            Logout  
                        </a>
                        <form id="logout-form" action="/logout" method="get" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
            </ul>
        </li>
    </ul>
  </header>
