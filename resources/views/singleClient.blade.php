<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Single User details</title>
</head>

<body>

    <h1>User details</h1>
    @foreach ($data as $user)
        <h2>Name: {{ $user->name }}</h2>
        <h2>Lastname:{{ $user->lastname }}</h2>
        <h2>Age;{{ $user->age }}</h2>
        <h2>City:{{ $user->city }}</h2>
    @endforeach
</body>

</html>
