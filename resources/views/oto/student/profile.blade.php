<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>profile</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card">
                    <div class="card-header ">
                        <h4 class="d-flex justify-content-center">Welcome, {{ $student->name }}</h4>
                        <p class="lead d-flex justify-content-center">Roll: {{$student->roll}}</p>
                    </div>
                    <div class="card-body">
                        <p><strong>Class: </strong><span>{{$student->profile->class ?? ''}}</span></p>
                        <p><strong>Group: </strong><span>{{$student->profile->group ?? ''}}</span></p>
                        <p><strong>Section: </strong><span>{{$student->profile->section?? ''}}</span></p>
                    </div>
                    <div class="d-flex justify-content-end p-1">
                        <a href="{{ url('profiles/'.$student->id.'/edit')}}" type="btn" class="btn btn-info">Add/Edit Your Profile</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>