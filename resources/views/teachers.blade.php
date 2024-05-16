<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Teacher</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    {{-- <div class="container">
        <h1 class="mt-5 mb-5">Teachers</h1>
        <form>
            <div class="mb-3">
                <label for="Name" class="form-label">Name</label>
                <input type="text" class="form-control" id="Name">

            </div>
            <div class="mb-3">
                <label for="Addres" class="form-label">Addres</label>
                <input type="text" class="form-control" id="Addres">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div> --}}
    <div class="container table-responsive py-5">
        <table class="table table-bordered table-hover">
            <div class="d-flex justify-content-between  mb-3">
                <h1>Header</h1>
                <a href="create.html"><button class="btn btn-primary align-items-center m-0">create</button></a>
            </div>
            <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Addres</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Email</th>
                    <th scope="col">Button</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($teachers as $teacher)
                    <tr>
                        <th scope="row">{{ $teacher->id }}</th>
                        <td>{{ $teacher->name }}</td>
                        <td>{{ $teacher->adress }}</td>
                        <td>{{ $teacher->phone }}</td>
                        <td>{{ $teacher->email }}</td>


                        <td class="d-flex justify-content-around">
                            <button class="btn btn-info">view</button>
                            <button class="btn btn-primary">edit</button>
                            <button class="btn btn-danger">delete</button>
                        </td>
                    </tr>
                @endforeach


            </tbody>
        </table>
    </div>
</body>

</html>
