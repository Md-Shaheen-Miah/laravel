

@extends('master')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback Display</title>
    
    <link rel="stylesheet" href="css/view-feedback.css">
</head>
<body>
    <div class="feedback-table-container">
    <a class="GAF" href="{{ url('/feedback') }}">Give A Feedback</a>
        <h2>Feedback Summary</h2>
       
        <table class="feedback-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Overall Satisfaction</th>
                    <th>First Impressions</th>
                    <th>Ease of Reservation</th>
                    <th>Check-In/Check-Out</th>
                    <th>Staff Friendliness</th>
                    <th>Comfort & Ambiance</th>
                    <th>Safety & Security</th>
                    <th>Comments</th>
                </tr>
            </thead>
            <tbody>
                <!-- Example Row -->
                <tr>
                    <td>1</td>
                    <td>John Doe</td>
                    <td>Satisfied</td>
                    <td>Good</td>
                    <td>Easy</td>
                    <td>Efficient</td>
                    <td>Excellent</td>
                    <td>Good</td>
                    <td>Very Safe</td>
                    <td>Great stay, will come back again.</td>
                </tr>
                <!-- Add more rows here -->
            </tbody>
        </table>
    </div>
</body>
</html>
@endsection
