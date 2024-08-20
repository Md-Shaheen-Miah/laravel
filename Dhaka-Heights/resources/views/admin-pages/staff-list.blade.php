
@extends('admin')
@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Staff List</title>
    <link rel="stylesheet" href="admin-css/staff-list.css">
</head>
<body>
    <div class="container">
        <h2>Hotel Management - Staff List</h2>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Position</th>
                    <th>Department</th>
                    <th>Phone</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>001</td>
                    <td>John Doe</td>
                    <td>Manager</td>
                    <td>Administration</td>
                    <td>(123) 456-7890</td>
                    <td>john.doe@example.com</td>
                </tr>
                <tr>
                    <td>002</td>
                    <td>Jane Smith</td>
                    <td>Receptionist</td>
                    <td>Front Office</td>
                    <td>(098) 765-4321</td>
                    <td>jane.smith@example.com</td>
                </tr>
                <tr>
                    <td>001</td>
                    <td>John Doe</td>
                    <td>Manager</td>
                    <td>Administration</td>
                    <td>(123) 456-7890</td>
                    <td>john.doe@example.com</td>
                </tr>
                <tr>
                    <td>002</td>
                    <td>Jane Smith</td>
                    <td>Receptionist</td>
                    <td>Front Office</td>
                    <td>(098) 765-4321</td>
                    <td>jane.smith@example.com</td>
                </tr>
                <tr>
                    <td>001</td>
                    <td>John Doe</td>
                    <td>Manager</td>
                    <td>Administration</td>
                    <td>(123) 456-7890</td>
                    <td>john.doe@example.com</td>
                </tr>
                <tr>
                    <td>002</td>
                    <td>Jane Smith</td>
                    <td>Receptionist</td>
                    <td>Front Office</td>
                    <td>(098) 765-4321</td>
                    <td>jane.smith@example.com</td>
                </tr>
                <!-- Add more rows as needed -->
            </tbody>
        </table>
    </div>
</body>
</html>
@endsection