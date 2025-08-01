<!DOCTYPE html>
<html>
<head>
    <title>Collegue Details</title>
</head>
<body>
    <h1>Collegue Details</h1>

    @if($collegue)
        <p><strong>Name:</strong> {{ $collegue->name }}</p>
        <p><strong>Email:</strong> {{ $collegue->email }}</p>
        <p><strong>Phone:</strong> {{ $collegue->phone }}</p>
        <p><strong>Age:</strong> {{ $collegue->age }}</p>
        <p><strong>Gender:</strong> {{ $collegue->gender }}</p>
        <p><strong>Address:</strong> {{ $collegue->address }}</p>
        <p><strong>Position:</strong> {{ $collegue->position }}</p>
        <p><strong>Department:</strong> {{ $collegue->department }}</p>
    @else
        <p>No collegue found with this phone number.</p>
    @endif
</body>
</html>
