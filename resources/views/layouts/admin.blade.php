<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <!-- Include your CSS files here -->
</head>
<body>
    <!-- Sidebar -->
    <div class="sidebar">
        <h2>Admin Dashboard</h2>
        <ul>
            <li><a href="/students">Dashboard</a></li>
            <li><a href="#">Students</a></li>
            <li><a href="#">Courses</a></li>
            <li><a href="#">Enrollments</a></li>
            <li><a href="#">Profiles</a></li>
            <li><a href="#">Departments</a></li>
            <li><a href="#">Users</a></li>
            <li><a href="#">Reports</a></li>
            <li><a href="#">Settings</a></li>
            <!-- Add more sidebar links as needed -->
        </ul>
    </div>

    <!-- Page content -->
    <div class="content">
        <!-- Header -->
        <div class="header">
            <h2>Welcome, Admin</h2>
            <div class="user-info">
                <p>Logged in as Admin</p>
                <a href="#">Logout</a>
            </div>
        </div>

        <!-- Main content area -->
        <div class="main">
            @yield('content')
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h2>Total Students: {{ $totalStudents }}</h2>
                        <!-- Display other metrics if needed -->
                    </div>
                    <div class="col-md-6">
                        <!-- Display charts -->
                        {!! $studentsChart->render() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Include your JavaScript files here -->
</body>
</html>
