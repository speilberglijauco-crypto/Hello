<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Create user</title>
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
                <h1>Create user</h1>
                <p class="page-subtitle">Enter the account details below.</p>
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
        <form action="/users" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-field">
                <label for="username">Username</label>
                <input id="username" type="text" name="username" value="{{ old('username') }}">
            </div>
            <div class="form-field">
                <label for="full_name">Full name</label>
                <input id="full_name" type="text" name="full_name" value="{{ old('full_name') }}">
            </div>
            <div class="form-field">
                <label for="password">Password</label>
                <input id="password" type="password" name="password">
            </div>
            <div class="form-field">
                <label for="avatar">Avatar</label>
                <input id="avatar" type="file" name="avatar" accept="image/jpeg,image/png">
            </div>
            <button type="submit">Create user</button>
        </form>
    </main>
</body>
</html>