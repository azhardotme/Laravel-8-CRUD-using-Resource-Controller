<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Laravel 8 CRUD</title>
  </head>
  <body>
      <div class="container">


    <h1 style="text-align: center">Edit Post</h1>
    <br><br>
    <a class="btn btn-primary mt-2 mb-2" href="{{url('blog')}}">Show All Post</a>
    <form action="{{url('blog/'.$blog->id)}}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group sm-2">
          <label for="exampleInputTittle">Title</label>
          <input type="text" class="form-control"  name="title" id="exampleInputEmail1" value="{{$blog->title}}">
        </div>

        <div class="form-group">
          <label for="exampleInputPassword1">Description</label>
          <textarea type="text" name="description" id="desscription" cols="50" rows="8">{{$blog->description}}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
      </form>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
</div>

