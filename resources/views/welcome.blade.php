<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <title>Performing Crud</title>
</head>

<body>

    <h1>Data of all Users</h1>
    <div class="container">
        <a href="/newuser" class="btn btn-success my-3">Add Product</a>
        <table class="table table-dark table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">First</th>
                    <th scope="col">Last</th>
                    <th scope="col">Age</th>
                    <th scope="col">City</th>
                    <th scope="col">view</th>
                    <th scope="col">Delete</th>
                    <th scope="col">Update</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($data as $row)
                    <tr>
                        <th scope="row">{{ $row->id }}</th>
                        <td>{{ $row->name }}</td>
                        <td>{{ $row->lastname }}</td>
                        <td>{{ $row->age }}</td>
                        <td>{{ $row->city }}</td>

                        <td><a href="{{route ('single.client',$row->id)}}" class="btn btn-primary">view</a></td>
                        <td><a href="{{route ('Delete.user',$row->id)}}" class="btn btn-danger">Delete</a></td>
                        <td><a href="{{route ('update.page',$row->id)}}" class="btn btn-info">Update</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
