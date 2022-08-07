<div class="form-list-appending">
    <div>{!! $attributes->get('title') ? '<p>'.$attributes->get('title').'</p>' : '' !!}</div>
    <div class="form-list-appending__wrapper">
        {{ $slot }}
    </div>
    <button type="button" class="btn btn-default form-list-appending__button-add">Добавить</button>
</div>
