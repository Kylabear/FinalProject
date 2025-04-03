<!DOCTYPE html>
<html>
<head>
    <title>Request Barangay Clearance</title>
</head>
<body>
    <h2>Barangay Clearance Request Form</h2>

    @if(session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    <form method="POST" action="/clearance-requests">
        @csrf

        <label>Full Name:</label><br>
        <input type="text" name="name" required><br>

        <label>Address:</label><br>
        <input type="text" name="address" required><br>

        <label>Purpose:</label><br>
        <input type="text" name="purpose" required><br><br>

        <button type="submit">Submit Request</button>
    </form>
</body>
</html>
