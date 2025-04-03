<!DOCTYPE html>
<html>
<head>
    <title>All Registered Residents</title>
</head>
<body>
    <h2>All Residents</h2>

    <a href="{{ route('residents.create') }}">+ Register New Resident</a>

    <table border="1" cellpadding="10">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Address</th>
                <th>Contact Number</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($residents as $resident)
                <tr>
                    <td>{{ $resident->id }}</td>
                    <td>{{ $resident->name }}</td>
                    <td>{{ $resident->address }}</td>
                    <td>{{ $resident->contact_number }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
