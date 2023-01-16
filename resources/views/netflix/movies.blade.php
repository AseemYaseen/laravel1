
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Movies</title>
</head>
<style>
body{
    background-color: black;
}
.place{
    margin-left:120px !important;
}
</style>
<body>

<a href="{{route('movies.create')}}" class=" place btn btn-danger mt-5 " style="">+Add Movie </a>

@foreach ($Movies as $Movie)
    <div class="container text-center">

        <div class="row">
            <div class="my-5">

    <div class="card" style="width: 18rem;">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
          <h4 class="card-title">{{$Movie->movie_name}}</h4>
          <h5 class="card-title">{{$Movie->movie_gener}}</h5>

          <p class="card-text">{{$Movie->movie_description}}</p>
          <a style="margin-bottom:15px;" href="{{route('movies.edit',$Movie->id)}}" class="btn btn-danger">Edit</a>

          <form action="{{route('movies.destroy',$Movie->id)}}" method="post">
            @method('DELETE')
            @csrf
            <button type="submit" class="btn btn-danger">Delete</button>
          </form>

          
        </div>

      </div>
    </div>
    @endforeach

</div>
</div>
</div>

</body>
</html>