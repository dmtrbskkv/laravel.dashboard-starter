<div class="table-tools">
    {{ $slot }}
    <a class="btn btn-default btn-square"
       href="{{ route($attributes->get('route').'-edit', ['id'=>$attributes->get('id')]) }}">
        <x-dashboard.icon.table.edit/>
    </a>
    <a class="btn btn-danger btn-square"
       href="{{ route($attributes->get('route').'-remove', ['id'=>$attributes->get('id')]) }}">
        <x-dashboard.icon.table.trash/>
    </a>
</div>
