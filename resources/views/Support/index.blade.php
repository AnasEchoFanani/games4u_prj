<!DOCTYPE html>
<html>
<head>
    <title>Support Chat</title>
    <!-- Add Bootstrap CSS link here -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>Support Chat</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>nom</th>
                    <th>gmail</th>
                    <th>message</th>
                    <th>repondre</th>
                </tr>
            </thead>
            <tbody>
            @foreach (array_unique($users->pluck('email')->toArray()) as $email)
    @php
        $user = $users->firstWhere('email', $email);
    @endphp
    <tr>
        <td>{{ $user->first_name }}</td>
        <td>{{ $user->email }}</td>
        <td>{{ $user->envoyer_msg }}</td>
        <td>
            <a href="{{ url('/support/show-msg', $user->email) }}">
                <button class="btn btn-primary">repondre</button>
            </a>
        </td>
    </tr>
@endforeach

            </tbody>
        </table>
    </div>

    <!-- Add Bootstrap JS and jQuery CDN links here -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

