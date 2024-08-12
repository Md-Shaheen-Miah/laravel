<!-- resources/views/create.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Form</title>
</head>
<body>
    <h1>Submit Your Details</h1>

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
            <input type="text" id="name" name="name" value="{{ old('name') }}" required>
        </div>

        <div>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="{{ old('email') }}" required>
        </div>

        <div>
            <label for="phone">Address:</label>
            <input type="text" id="address" name="address" value="{{ old('address') }}" required>
        </div>

       
        <div>
            <button type="submit">Submit</button>
        </div>
        <a class="nav-link" href="{{ url('/') }}">Home</a>
    </form>
</body>
</html>
