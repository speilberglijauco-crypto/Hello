<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Customer details</title>
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
                <h1>Customer details</h1>
                <p class="page-subtitle">View this customer's information.</p>
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
        <section class="detail-card">
            <p><strong>Customer ID:</strong> {{ $customer->id }}</p>
            <p><strong>Full name:</strong> {{ $customer->full_name }}</p>
            <p><strong>Email:</strong> {{ $customer->email }}</p>
            <p><strong>Phone:</strong> {{ $customer->phone }}</p>
            <div>
                <strong>Avatar</strong><br>
                @if($customer->avatar)
                    <img src="{{ asset('storage/customers/' . $customer->avatar) }}" alt="{{ $customer->full_name }} avatar">
                @else
                    <p>No avatar available.</p>
                @endif
            </div>
        </section>
    </main>
</body>
</html>