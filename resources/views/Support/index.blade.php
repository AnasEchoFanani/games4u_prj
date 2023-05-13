<h1>Support Chat</h1>

<ul>
@foreach ($users as $user)
    <li>
        <a href="{{ url('/support/show-msg', $user->id) }}">{{ $user->first_name }}</a>
    </li>
@endforeach
</ul>
