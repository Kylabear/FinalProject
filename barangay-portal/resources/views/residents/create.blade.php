<!DOCTYPE html>
<html>
<head>
    <title>Register Resident</title>
</head>
<body>
    <h2>Register Resident</h2>

    @if(session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    <form method="POST" action="{{ route('residents.store') }}">
        @csrf
        <label>Name:</label><br>
        <input type="text" name="name"><br>

        <label>Address:</label><br>
        <input type="text" name="address"><br>

        <label>Contact Number:</label><br>
        <input type="text" name="contact_number"><br><br>

        <button type="submit">Register</button>
    </form>
</body>
</html>
