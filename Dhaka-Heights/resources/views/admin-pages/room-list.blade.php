

@extends('admin')
@section('content')


<link rel="stylesheet" href="admin-css/room-list.css">
<div class="table-container">
        <h2>Room List</h2>
        <table class="room-table">
            <thead>
                <tr>
                    <th>Room Number</th>
                    <th>Room Type</th>
                    <th>Availability</th>
                    <th>Price</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>101</td>
                    <td>Single</td>
                    <td>Available</td>
                    <td>$100</td>
                </tr>
                <tr>
                    <td>102</td>
                    <td>Double</td>
                    <td>Booked</td>
                    <td>$150</td>
                </tr>
                <tr>
                    <td>103</td>
                    <td>Suite</td>
                    <td>Available</td>
                    <td>$300</td>
                </tr>
                <tr>
                    <td>104</td>
                    <td>Single</td>
                    <td>Booked</td>
                    <td>$100</td>
                </tr>
            </tbody>
        </table>
    </div>
    @endsection