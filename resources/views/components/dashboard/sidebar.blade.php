<div class="sidebar">
    <div class="sidebar-head">
        <a href="{{route('dashboard')}}" class="sidebar-logo">
            <x-dashboard.icon.logo-white/>
        </a>
    </div>
    <div class="sidebar-body">
        <nav class="sidebar-nav">
            @if(\App\Repository\Users::hasRole(\App\Models\Role::ROLE_ACCESS_TYPE_USERS ))
                <a href="{{route('users')}}" class="sidebar-nav__item">
                    <span class="sidebar-nav__item-icon"><x-dashboard.icon.sidebar.sidebar-clients/></span>
                    <span class="sidebar-nav__item-text">Пользователи</span>
                    <span class="sidebar-nav__item-arrow"><x-dashboard.icon.sidebar.sidebar-open-arrow/></span>
                </a>
            @endif
        </nav>
        <div class="sidebar-footer">
            <nav class="sidebar-nav">
                <a href="{{route('logout')}}" class="sidebar-nav__item">
                    <span class="sidebar-nav__item-text">Выход</span>
                </a>
            </nav>
        </div>
    </div>
</div>
