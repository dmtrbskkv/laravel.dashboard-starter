<div class="table-tools">
    {{ $slot }}
    <a class="btn btn-default btn-square"
       href="{{ route($attributes->get('route').'-edit', ['id'=>$attributes->get('id')]) }}">
        <i class="bi bi-pencil-square"></i>
    </a>
    <a class="btn btn-danger btn-square"
       href="{{ route($attributes->get('route').'-remove', ['id'=>$attributes->get('id')]) }}">
        <i class="bi bi-trash3-fill"></i>
    </a>
</div>
