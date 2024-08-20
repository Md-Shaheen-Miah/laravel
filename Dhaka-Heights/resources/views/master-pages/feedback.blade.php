
@extends('master')

@section('content')


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Feedback Form</title>
    <link rel="stylesheet" href="css/feedback.css">
</head>
<body>
    <div class="feedback-form">
        <h2>Hotel Feedback Form</h2>
        <form action="/submit-feedback" method="POST">
            <!-- Overall Satisfaction -->
            <div class="form-group">
                <label for="overall-satisfaction">Overall Satisfaction:</label>
                <select id="overall-satisfaction" name="overall_satisfaction">
                    <option value="very_satisfied">Very Satisfied</option>
                    <option value="satisfied">Satisfied</option>
                    <option value="neutral">Neutral</option>
                    <option value="dissatisfied">Dissatisfied</option>
                    <option value="very_dissatisfied">Very Dissatisfied</option>
                </select>
            </div>

            <!-- First Impressions -->
            <div class="form-group">
                <label for="first-impressions">First Impressions:</label>
                <select id="first-impressions" name="first_impressions">
                    <option value="excellent">Excellent</option>
                    <option value="good">Good</option>
                    <option value="average">Average</option>
                    <option value="below_average">Below Average</option>
                    <option value="poor">Poor</option>
                </select>
            </div>

            <!-- Ease of Reservation -->
            <div class="form-group">
                <label for="ease-of-reservation">Ease of Reservation:</label>
                <select id="ease-of-reservation" name="ease_of_reservation">
                    <option value="very_easy">Very Easy</option>
                    <option value="easy">Easy</option>
                    <option value="neutral">Neutral</option>
                    <option value="difficult">Difficult</option>
                    <option value="very_difficult">Very Difficult</option>
                </select>
            </div>

            <!-- Check-In/Check-Out Process -->
            <div class="form-group">
                <label for="checkin-checkout">Check-In/Check-Out Process:</label>
                <select id="checkin-checkout" name="checkin_checkout">
                    <option value="very_efficient">Very Efficient</option>
                    <option value="efficient">Efficient</option>
                    <option value="neutral">Neutral</option>
                    <option value="inefficient">Inefficient</option>
                    <option value="very_inefficient">Very Inefficient</option>
                </select>
            </div>

            <!-- Staff Friendliness -->
            <div class="form-group">
                <label for="staff-friendliness">Staff Friendliness:</label>
                <select id="staff-friendliness" name="staff_friendliness">
                    <option value="excellent">Excellent</option>
                    <option value="good">Good</option>
                    <option value="average">Average</option>
                    <option value="below_average">Below Average</option>
                    <option value="poor">Poor</option>
                </select>
            </div>

            <!-- Comfort and Ambiance -->
            <div class="form-group">
                <label for="comfort-ambiance">Comfort and Ambiance:</label>
                <select id="comfort-ambiance" name="comfort_ambiance">
                    <option value="excellent">Excellent</option>
                    <option value="good">Good</option>
                    <option value="average">Average</option>
                    <option value="below_average">Below Average</option>
                    <option value="poor">Poor</option>
                </select>
            </div>

            <!-- Safety and Security -->
            <div class="form-group">
                <label for="safety-security">Safety and Security:</label>
                <select id="safety-security" name="safety_security">
                    <option value="very_safe">Very Safe</option>
                    <option value="somewhat_safe">Somewhat Safe</option>
                    <option value="neutral">Neutral</option>
                    <option value="somewhat_unsafe">Somewhat Unsafe</option>
                    <option value="not_safe">Not Safe</option>
                </select>
            </div>

            
            <div class="form-group">
                <label for="additional-comments">Additional Comments:</label>
                <textarea id="additional-comments" name="additional_comments" rows="4"></textarea>
            </div>

            <button type="submit">Submit Feedback</button>
        </form>
    </div>
</body>
</html>
@endsection