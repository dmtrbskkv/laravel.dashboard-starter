<div class="form-node form-node-select">
    <input type="hidden" name="{{$name}}">
    <div class="form-select-trigger" data-placeholder="{{$placeholder}}">
        <span>{{$placeholder}}</span>
        <i class="bi bi-caret-down-fill"></i>
    </div>
    <div class="form-select-children">
        <ul>
            @foreach($values as $value=>$label)
                <li class="form-select-item">
                    <div class="form-select-item__checkbox">
                        <label for="{{$name}}-{{$value}}">{{$label}}</label>
                        <input id="{{$name}}-{{$value}}" type="{{$format}}" value="{{$value}}">
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
</div>
