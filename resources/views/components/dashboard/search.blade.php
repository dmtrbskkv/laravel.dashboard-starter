<div class="search-header">
    <div class="search-header__input">
        <input type="text" placeholder="Поиск" class="form-node">
        <x-dashboard.icon.search-icon/>
    </div>
    <div class="search-header__nav">
        <nav>
            <a href="{{route('logout')}}">
                <x-dashboard.icon.icon-logout/>
                <span>Выход</span>
            </a>
            <span class="search-user">
               {{\Illuminate\Support\Facades\Auth::user()->getAttribute('email')}}
            </span>
        </nav>
    </div>
</div>
