<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>people nid list</title>
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card">
                    <div class="card-header">
                        <h4 class="d-flex justify-content-center">
                            Entry an Nid Number
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="{{route('people.store')}}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="name" class="form-label">Name:</label>
                                <input type="text" name="name" id="name" class="form-control">
                            </div>
                            <div class="p-3 d-flex justify-content-center">
                            <h4>NID NUMBER</h4>
                            </div>
                            <div class="form-group">
                                <label for="nid" class="form-label">Nid Number:</label>
                                <input type="number" name="nid" id="nid" class="form-control">
                            </div>
                            <button type="submit" class="btn btn-primary mt-3">Submit</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>