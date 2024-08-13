<!-- resources/views/create.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Form</title>
</head>
<body>
    <h1>Edit and Submit Your Details</h1>

    @if (session('success'))
    <div >
        {{ session('success') }}
    </div>
@endif

    <!-- Display Validation Errors -->
    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <!-- Form -->
    <form action="{{ route('guest') }}" method="POST">
        @csrf
        <div>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name"  required value="{{$item->name}}">
        </div><br>

        <div>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required value="{{$item->email}}">
        </div><br>

        <div>
            <label for="phone">Address:</label>
            <input type="text" id="address" name="address"  required value="{{$item->address}}">
        </div><br>

       
        <div>
            <button type="submit">Submit</button>
        </div><br>
        <a class="nav-link" href="{{ url('/') }}">Home</a>
    </form>
</body>
</html>
