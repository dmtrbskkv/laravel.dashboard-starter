<div class="search-header">
    <div class="search-header__input">
        <div class="form-node">
            <i class="bi bi-search"></i>
            <input type="text" placeholder="Поиск">
        </div>
    </div>
    <div class="search-header__nav">
        <nav>
            <a href="{{route('logout')}}">
                <i class="bi bi-box-arrow-left"></i>
                <span>Выход</span>
            </a>
            <span class="search-user">
               {{\Illuminate\Support\Facades\Auth::user()?->getAttribute('email')}}
            </span>
        </nav>
    </div>
</div>
