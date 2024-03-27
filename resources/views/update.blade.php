<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <title>Add new</title>
</head>

<body>
    <h1>Update a User details</h1>
    <div class="container">
        <div class="row">
            <div class="col-6">
                @foreach ($data as $row)
                    <form action="{{ route('update.user',$row->id) }}" method="POST">
                        @csrf
                        <label for="name">Name:</label><br>
                        <input type="text" value="{{$row->name}}"  id="name" name="name"><br>

                        <label for="lastname">Last Name:</label><br>
                        <input type="text" value="{{$row->lastname}}" id="lastname" name="lastname"><br>

                        <label for="age">Age:</label><br>
                        <input type="number" value="{{$row->age}}" id="age" name="age"><br>

                        <label for="city">City:</label><br>
                        <input type="text" value="{{$row->city}}" id="city" name="city"><br>

                        <br>
                        <input type="submit" value="Update">
                    </form>
                @endforeach
            </div>
        </div>
    </div>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
