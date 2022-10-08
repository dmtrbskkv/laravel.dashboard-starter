<div class="sidebar">
    <div class="sidebar-head">
        <a href="{{route('dashboard')}}" class="sidebar-logo">
            <x-dashboard.icon.logo-white/>
        </a>
    </div>
    <div class="sidebar-body">
        <nav class="sidebar-nav">
            <div class="sidebar-nav__item-group">
                <a href="{{route('dashboard')}}" class="sidebar-nav__item">
                    <span class="sidebar-nav__item-icon"><i class="bi bi-house-fill"></i></span>
                    <span class="sidebar-nav__item-text">Панель управления</span>
                </a>
            </div>
            @if(\App\Repository\UsersRepository::hasRole(\App\Models\Role::ROLE_ACCESS_TYPE_USERS ))
                <div
                    class="sidebar-nav__item-group {{\App\Helpers\Dashboard\RoutesHelper::isUsersSection() ? ' sidebar-nav__item-group-active' : ''}}">
                    <span class="sidebar-nav__item">
                        <span class="sidebar-nav__item-icon"><i class="bi bi-people-fill"></i></span>
                        <span class="sidebar-nav__item-text">Пользователи</span>
                        <span class="sidebar-nav__item-arrow"><i class="bi bi-caret-down-fill"></i></span>
                    </span>
                    <div class="sidebar-nav__item-children">
                        <ul>
                            <li>
                                <a href="{{route('users')}}" class="sidebar-nav__item">
                                    <span class="sidebar-nav__item-text">Список пользователей</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{route('users-create')}}" class="sidebar-nav__item">
                                    <span class="sidebar-nav__item-text">Добавить пользователя</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            @endif
            @if(\App\Repository\UsersRepository::hasRole(\App\Models\Role::ROLE_ACCESS_TYPE_DEMO ))
                <div
                    class="sidebar-nav__item-group {{\App\Helpers\Dashboard\RoutesHelper::isDemoSection() ? ' sidebar-nav__item-group-active' : ''}}">
                <span class="sidebar-nav__item">
                    <span class="sidebar-nav__item-icon"><i class="bi bi-box-fill"></i></span>
                    <span class="sidebar-nav__item-text">Демо</span>
                    <span class="sidebar-nav__item-arrow"><i class="bi bi-caret-down-fill"></i></span>
                </span>
                    <div class="sidebar-nav__item-children">
                        <ul>
                            <li>
                                <a href="{{route('dashboard-demo-description')}}" class="sidebar-nav__item">
                                    <span class="sidebar-nav__item-text">Описание проекта</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{route('dashboard-demo-forms')}}" class="sidebar-nav__item">
                                    <span class="sidebar-nav__item-text">Формы</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{route('dashboard-demo-containers')}}" class="sidebar-nav__item">
                                    <span class="sidebar-nav__item-text">Контейнеры</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{route('dashboard-demo-tables')}}" class="sidebar-nav__item">
                                    <span class="sidebar-nav__item-text">Таблицы</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
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
