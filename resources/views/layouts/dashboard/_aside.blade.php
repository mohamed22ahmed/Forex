<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar">
        <div class="app-sidebar__user">
            <div>
                <p class="app-sidebar__user-name">{{ $user->name }} (@if($user->isadmin==1) Admin @else User @endif )</p>
            </div>
        </div>
        <ul class="app-menu">
            <li><a class="app-menu__item {{ url()->current()==url(route('dashboard.users'))?'active':'' }}" href="{{ route('dashboard.users') }}"><i class="app-menu__icon fa fa-user"></i><span class="app-menu__label">Users</span></a></li>
            <li><a class="app-menu__item {{ url()->current()==url(route('dashboard.register'))?'active':'' }}" href="{{ route('dashboard.register') }}"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Registered Users</span></a></li>
        </ul>
    </aside>
