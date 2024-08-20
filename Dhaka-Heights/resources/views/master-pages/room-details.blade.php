

@extends('master')

@section('content')

<link rel="stylesheet" href="css/room-details.css">
<div class="containerer">
        <header>
            <h1>Dhaka Heights</h1>
        </header>

        <main>
            <section class="room-details">
                <div class="room-image">
                    <img src="assets/img/room2.jpg" alt="">
                </div>
                <div class="room-info">
                    <h2>Deluxe Room</h2>
                    <p class="price">$100 per night</p>
                    <p class="description">
                        Enjoy your stay in our luxurious Deluxe Room with a stunning view of the city. The room is equipped with all modern amenities, including free Wi-Fi, a flat-screen TV, minibar, and a spacious bathroom.
                    </p>
                    <ul class="features">
                        <li>Free Wi-Fi</li>
                        <li>Air Conditioning</li>
                        <li>24/7 Room Service</li>
                        <li>Flat-screen TV</li>
                        <li>Mini Bar</li>
                    </ul>
                    
                    <button class="book-now"><a href="{{ url('/book') }}">BOOK NOW</a></button>
                </div>
            </section>
        </main>
        
        <footer>
            <p>&copy; 2024 Dhaka Heights. All rights reserved.</p>
        </footer>
    </div>

    @endsection