<!DOCTYPE html>
<html>
<head>
    <title>Cargo Booking Details</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h2>Cargo Booking Details</h2>
        <table class="table">
            <tbody>
                <tr>
                    <th>Name:</th>
                    <td>{{ $booking->name }}</td>
                </tr>
                <tr>
                    <th>Email:</th>
                    <td>{{ $booking->email }}</td>
                </tr>
                <tr>
                    <th>Phone:</th>
                    <td>{{ $booking->phone }}</td>
                </tr>
                <tr>
                    <th>Booking From:</th>
                    <td>{{ $booking->from }}</td>
                </tr>
                <tr>
                    <th>Destination:</th>
                    <td>{{ $booking->destination }}</td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>
