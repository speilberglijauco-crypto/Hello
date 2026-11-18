<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>User details</title>
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
                <h1>User details</h1>
                <p class="page-subtitle">View this user's account information.</p>
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
        <section class="detail-card">
            <p><strong>User ID:</strong> {{ $user->id }}</p>
            <p><strong>Username:</strong> {{ $user->username }}</p>
            <p><strong>Full name:</strong> {{ $user->full_name }}</p>
            <div>
                <strong>Avatar</strong><br>
                @if($user->avatar)
                    <img src="{{ asset('storage/users/' . $user->avatar) }}" alt="{{ $user->full_name }} avatar">
                @else
                    <p>No avatar available.</p>
                @endif
            </div>
        </section>
    </main>
</body>
</html>