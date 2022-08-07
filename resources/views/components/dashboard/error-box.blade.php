@if(session('errors') && is_array(session('errors')))
<div class="error-box">
    <ul>
        @foreach(session('errors') as $error)
            <li>{{$error}}</li>
        @endforeach
    </ul>
</div>
@endif
