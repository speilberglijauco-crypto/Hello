<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Customers</title>
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
                <h1>Customers</h1>
                <p class="page-subtitle">Manage your customer records.</p>
            </div>
            <a class="button-link" href="/customers/create">Add customer</a>
        </header>
        <div class="table-wrap">
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Avatar</th>
                        <th>Full Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($customers as $customer)
                        <tr>
                            <td>{{ $customer['id'] }}</td>
                            <td>
                                @if($customer['avatar'])
                                    <img src="{{ asset('storage/customers/'.$customer['avatar']) }}" alt="{{ $customer['full_name'] }} avatar">
                                @else
                                    <img src="{{ asset('storage/customers/images.jpeg') }}" alt="">
                                @endif
                            </td>
                            <td>{{ $customer['full_name'] }}</td>
                            <td>{{ $customer['email'] }}</td>
                            <td>{{ $customer['phone'] }}</td>
                            <td><a href="/customers/{{ $customer['id'] }}/edit">Edit</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </main>
</body>
</html>