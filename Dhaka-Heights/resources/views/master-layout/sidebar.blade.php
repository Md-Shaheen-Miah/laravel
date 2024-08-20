<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/side.css">
</head>
<body>
<div class="sidebar">
    
    <ul class="sidebar-menu">
        <li><a href="{{'/dash'}}">Dashboard</a></li>
        <li class="dropdown">
            <a href="#rooms" class="dropdown-btn">Rooms</a>
            <ul class="dropdown-container">
                <li><a href="#add-room">Add Room</a></li>
                <li><a href="#view-rooms">View Rooms</a></li>
                <li><a href="#edit-room">Edit Room</a></li>
            </ul>
        </li>
        <li class="dropdown">
            <a href="#bookings" class="dropdown-btn">Bookings</a>
            <ul class="dropdown-container">
                <li><a href="#add-booking">Add Booking</a></li>
                <li><a href="#view-bookings">View Bookings</a></li>
            </ul>
        </li>
        <li><a href="#reports">Reports</a></li>
        <li><a href="#settings">Settings</a></li>
    </ul>
</div>

</body>
</html>