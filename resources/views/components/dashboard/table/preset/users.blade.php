@if(isset($users) && $users->count() !== 0)
    <table class="table table-default">
        <thead>
        <tr>
            <td>#</td>
            <td>Почта</td>
            <td></td>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
            <tr>
                <td><b>{{ $user->getAttribute('id') }}</b></td>
                <td style="width: 300px">{{ $user->getAttribute('email') }}</td>
                <td><x-dashboard.table.row-tools route="users" id="{{ $user->getAttribute('id') }}"/></td>
            </tr>
        @endforeach
        </tbody>
    </table>
@else
    <p>Данных о пользователях нет</p>
@endif
