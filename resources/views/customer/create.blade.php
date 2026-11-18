<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Create customer</title>
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
                <h1>Create customer</h1>
                <p class="page-subtitle">Enter the customer's details below.</p>
            </div>
            <a class="button-link button-link--secondary" href="/customers">Back to customers</a>
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
        <form action="/customers" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-field">
                <label for="full_name">Full name</label>
                <input id="full_name" type="text" name="full_name" value="{{ old('full_name') }}">
            </div>
            <div class="form-field">
                <label for="email">Email</label>
                <input id="email" type="email" name="email" value="{{ old('email') }}">
            </div>
            <div class="form-field">
                <label for="phone">Phone</label>
                <input id="phone" type="tel" name="phone" value="{{ old('phone') }}">
            </div>
            <div class="form-field">
                <label for="avatar">Avatar</label>
                <input id="avatar" type="file" name="avatar" accept="image/*">
            </div>
            <button type="submit">Create customer</button>
        </form>
    </main>
</body>
</html>