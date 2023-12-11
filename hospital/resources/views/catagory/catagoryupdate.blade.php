@include('dashboard')
<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->


</head>

<body>
  <header>
    <a href="{{url('dashboard')}}"><button class="btn btn-primary">Back</button></a>
  </header>
  <main>
    <h2>{{$title}}</h2>

    <form action="{{$url}}" method="post" enctype="multipart/form-data" class="contact-form">
        @csrf
      <div class="form-group">
        <label for="imageFile">Icon upload:</label>
        <input type="file" id="imageFile" name="icon" accept="image/*" value="{{$catagary->icon}}">
      </div>
      <div class="form-group">
        <label for="imageFile">Catagory-Title:</label>
        <input type="text" id="imageFile" name="title" value="{{$catagary->title}}">
      </div>
      <div class="form-group">
        <input type="submit" value="Submit">
      </div>
    </form>





  </main>
  <footer>
    <!-- place footer here -->
  </footer>
  <!-- Bootstrap JavaScript Libraries -->




<style>
    main{
        margin-top: -550px;
    }
  h2{
    color: blue;
    text-align: center;
  }
    body {
  {{--  font-family: Arial, sans-serif;
  margin: 20px;  --}}
}

.contact-form {
  max-width: 400px;
  margin: 0 auto;
}

.form-group {
  margin-bottom: 15px;
}

label {
  display: block;
  margin-bottom: 5px;
}

input[type="file"],
input[type="email"],
input[type="tel"],
input[type="submit"] {
  width: 100%;
  padding: 8px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type="submit"] {
  background-color: #4CAF50;
  color: white;
  border: none;
  cursor: pointer;
}

input[type="submit"]:hover {
  background-color: #45a049;
}
</style>
</body>

</html>
