@extends('admin')

@section('content')



<div class="container">
    <h1>Create a New Room</h1>

   

    <form method="POST" action="{{ route('mstore') }}">
    @csrf

        <div class="form-group">
            <label for="room_number">Room Number</label>
            <input type="text" name="room_number" id="room_number" class="form-control"  required>
        </div>

        <div class="form-group">
            <label for="room_type">Room Type</label>
            <select name="room_type" id="room_type" class="form-control" required>
                <option > Presidential Suite</option>
                <option >Executive Room</option>
                <option >King Room</option>
                <option >Twin Room</option>
                <option >Double Room</option>
                <option >Single Room</option>
               
            </select>
        </div>

        <div class="form-group">
            <label for="bed_type">Bed Type</label>
            <select name="bed_type" id="bed_type" class="form-control" required>
                <option >Twin Bed</option>
                <option >Double Bed</option>
                <option >Queen Bed</option>
                <option >King Bed</option>
                <option >Sofa Bed </option>
               
            </select>
        </div>

        <div class="form-group">
            <label for="price">Price</label>
            <select name="price" id="price" class="form-control" required>
                <option > $300</option>
                <option >$200</option>
                <option >$180</option>
                <option >$150</option>
                <option >$120</option>
                <option >$100</option>
               
            </select>
        </div>

        <div class="form-group">
            <label for="availability_status">Availability Status</label>
            <select name="availability_status" id="availability_status" class="form-control" required>
                <option >Available</option>
                <option >Dirty</option>
                <option>Occupied</option>
            </select>
        </div>

        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" id="description" class="form-control" required></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Create Room</button>
    </form>
</div>
@endsection


