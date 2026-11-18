<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit user</title>
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
                <h1>Edit user</h1>
                <p class="page-subtitle">Update {{ $user->full_name }}'s account details.</p>
            </div>
            <a class="button-link button-link--secondary" href="/users">Back to users</a>
        </header>
        @if($errors->any())
            <div class="form-errors">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="/users/{{ $user->id }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-field">
                <label for="username">Username</label>
                <input id="username" type="text" name="username" value="{{ old('username', $user->username) }}">
            </div>
            <div class="form-field">
                <label for="full_name">Full name</label>
                <input id="full_name" type="text" name="full_name" value="{{ old('full_name', $user->full_name) }}">
            </div>
            <div class="form-field">
                <label for="password">Password (leave blank to keep current password)</label>
                <input id="password" type="password" name="password">
            </div>
            <div class="form-field">
                <label for="avatar">Avatar</label>
                <input id="avatar" type="file" name="avatar" accept="image/jpeg,image/png">
                <small>Leave blank to keep the current avatar.</small>
            </div>
            <button type="submit">Save changes</button>
        </form>
    </main>
</body>
</html>