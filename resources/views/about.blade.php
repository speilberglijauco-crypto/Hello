<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>About</title>
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
                <h1>About</h1>
                <p class="page-subtitle">A simple place to manage your records.</p>
            </div>
        </header>
        <section class="detail-card">
            <p>Keep customer information and user accounts organized in one place.</p>
            <div class="about-links">
                <a class="button-link" href="/customers">View customers</a>
                <a class="button-link button-link--secondary" href="/users">View users</a>
            </div>
        </section>
    </main>
</body>
</html>