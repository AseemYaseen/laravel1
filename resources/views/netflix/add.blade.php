<h1>Add New Movie</h1>
<form action="{{route('movies.store')}}" method="post">
    @csrf
    <input type="text" name="movie_name" placeholder="Movie Name"><br>
    <input class="des" type="text" name="movie_description" placeholder="Enter description"><br>
    <input type="text" name="movie_gener" placeholder="Enter Gener"><br>
    <button type="submit">Submit</button>

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