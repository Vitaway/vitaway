<!DOCTYPE html>
<html>
<head>
    <title>New Contact</title>
</head>
<body>
    <h1>New User Contacted</h1>
    <p><strong>Name:</strong> {{ $payload['name'] }}</p>
    <p><strong>Email:</strong> {{ $payload['email'] }}</p>
    <p><strong>Message:</strong> {{ $payload['message'] }}</p>
</body>
</html>
