<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit customer</title>
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
                <h1>Edit customer</h1>
                <p class="page-subtitle">Update {{ $customer->full_name }}'s details.</p>
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
        <form action="/customers/{{ $customer->id }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-field">
                <label for="full_name">Full name</label>
                <input id="full_name" type="text" name="full_name" value="{{ old('full_name', $customer->full_name) }}">
            </div>
            <div class="form-field">
                <label for="email">Email</label>
                <input id="email" type="email" name="email" value="{{ old('email', $customer->email) }}">
            </div>
            <div class="form-field">
                <label for="phone">Phone</label>
                <input id="phone" type="tel" name="phone" value="{{ old('phone', $customer->phone) }}">
            </div>
            <div class="form-field">
                <label for="avatar">Avatar</label>
                <input id="avatar" type="file" name="avatar" accept="image/*">
            </div>
            <button type="submit">Save changes</button>
        </form>
    </main>
</body>
</html>