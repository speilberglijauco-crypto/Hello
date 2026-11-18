<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Users</title>
    <link rel="stylesheet" href="{{ asset('css/management.css') }}">
</head>
<body class="management-page">
    <nav class="management-nav" aria-label="Main navigation">
        <a href="/">Home</a>
        <a href="/about">About</a>
        <a href="{{ route('dashboard') }}">Dashboard</a>
        <a href="/users">Users</a>
        <a href="/customers">Customers</a>
    </nav>
    <main class="management-content">
        <header class="page-heading">
            <div>
                <h1>Users</h1>
                <p class="page-subtitle">Manage your user accounts.</p>
            </div>
            <a class="button-link" href="/users/create">Add user</a>
        </header>
        <div class="table-wrap">
            <table>
                <thead>
                    <tr>
                        <th>Avatar</th>
                        <th>Username</th>
                        <th>Full Name</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td>
                                @if($user['avatar'])
                                    <img src="{{ asset('storage/users/'.$user['avatar']) }}" alt="{{ $user['full_name'] }} avatar">
                                @else
                                    <img src="{{ asset('storage/users/images.jpeg') }}" alt="">
                                @endif
                            </td>
                            <td>{{ $user['username'] }}</td>
                            <td>{{ $user['full_name'] }}</td>
                            <td><a href="/users/{{ $user['id'] }}/edit">Edit</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </main>
</body>
</html>