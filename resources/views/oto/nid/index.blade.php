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
                    <div class="card-header ">
                        @if(session('message'))
                        <div class="alert alert-warning">{{session('message')}}</div>
                        @endif
                        <h4 class="d-flex justify-content-center">Entry an Nid Number</h4>
                        <a href="{{route('people.create')}}" type="btn" class="btn btn-info btn-sm">ADD</a>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Serial</th>
                                    <th>Name</th>
                                    <th>NID</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach($peoples as $people)
                                <tr>
                                    <td>{{$people->id}}</td>
                                    <td>{{$people->name}}</td>
                                    <td>{{$people->nid->nid}}</td>

                                    <td>
                                        <a href="{{ url('peoples/'.$people->id.'/edit') }}" type="btn" class="btn btn-info btn-sm">Edit</a>
                                        <a href="{{url('peoples/'.$people->id.'/show')}}" type="btn" class="btn btn-info btn-sm">Show</a>
                                        <a>
                                            <form action="{{route('people.delete',['people'=>$people->id])}}" method="post" class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-info btn-sm">Delete</button>
                                            </form>
                                        </a>
                                    </td>
                                </tr>
                                @endforeach


                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>