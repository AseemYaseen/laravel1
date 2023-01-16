<h1>Edit Movie</h1>
<form action="{{route('movies.update',$MovieEdit->id)}}" method="post"> 
    {{-- to take id with route so you edit on it --}}
    @method('PUT')
    {{-- on route resourse we use method PUT to edit --}}
    @csrf
    <input type="text" name="movie_name" value="{{$MovieEdit->movie_name}}"><br>
    <input class="des" type="text" name="movie_description" value="{{$MovieEdit->movie_description}}"><br>
    <input type="text" name="movie_gener" value="{{$MovieEdit->movie_gener}}"><br>
    <button type="submit">Update</button>

</form>

<style>
    
    .des{
        width:300px;
        height: 150px; 
    }

    form input, button{
        margin: 20px;
    }
</style>