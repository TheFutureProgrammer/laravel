<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <!-- Include your CSS files here -->
    <link rel="stylesheet" href="app.css">
</head>
<body>
    <!-- Sidebar -->
    <div id="sidebar">
        <h2>Admin Dashboard</h2>
        <ul>
            <li><a href="/admin">Dashboard</a></li>
            <li><a href="/students">Students</a></li>
            <li><a href="#">Courses</a></li>
            <li><a href="#">Enrollments</a></li>
            <li><a href="#">Profiles</a></li>
            <li><a href="#">Departments</a></li>
            <li><a href="#">Users</a></li>
            <li><a href="#">Reports</a></li>
            <li><a href="#">Settings</a></li>
            <li><a href="#">Logout</a></li>
            <!-- Add more sidebar links as needed -->
        </ul>
    </div>

    <!-- Page content -->
    <div class="content">
        @yield('content')
    </div>

    <!-- Include your JavaScript files here -->
</body>
</html>
