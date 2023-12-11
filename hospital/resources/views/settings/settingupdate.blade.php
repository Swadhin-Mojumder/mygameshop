@include('dashboard')
<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
  <header>
    <!-- place navbar here -->
    <a href="{{url('dashboard')}}"><button class="btn btn-primary">Back</button></a>
  </header>
  <main>
    <h2>{{$title}}</h2>

    <form action="{{$url}}" method="post" enctype="multipart/form-data" class="contact-form">
        @csrf
      <div class="form-group">
        <label for="imageFile">Logo upload:</label>
        <img src="{{asset('logo/'.$setting->logo)}}" alt="logo-image" width="100px">
        <input type="file" id="imageFile" name="logo" accept="image/*" value="{{$setting->logo}}">

      </div>
      <div class="form-group">
        <label for="imageFile">head_image_upload:</label>
        <img src="{{asset('head/'.$setting->head)}}" alt="logo-image" width="100px">
        <input type="file" id="imageFile" name="head" accept="image/*" value="{{$setting->head}}">
      </div>
      <div class="form-group">
        <label for="imageFile">Meddle Image:</label>
        <img src="{{asset('medile/'.$setting->medile)}}" alt="logo-image" width="100px">
        <input type="file" id="imageFile" name="medile" accept="image/*" value="{{$setting->medile}}">
      </div>
      <div class="form-group">
        <label for="imageFile">Bottom Image:</label>
        <img src="{{asset('bottom/'.$setting->bottom)}}" alt="logo-image" width="100px">
        <input type="file" id="imageFile" name="bottom" accept="image/*" value="{{$setting->bottom}}">
      </div>
      <div class="form-group">
        <label for="imageFile">Client Image:</label>
        <img src="{{asset('clint/'.$setting->clint)}}" alt="logo-image" width="100px">
        <input type="file" id="imageFile" name="clint" accept="image/*" value="{{$setting->clint}}">
      </div>
      <div class="form-group">
        <label for="email">Email:</label>

        <input type="email" id="email" name="email" required value="{{$setting->email}}">
      </div>
      <div class="form-group">
        <label for="phone">Phone:</label>

        <input type="tel" id="phone" name="phone" required value="{{$setting->contect_number}}">
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
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>



<style>
    main{
        margin-top:-590px;
    }
  h2{
    color: blue;
    text-align: center;
  }
    body {
  font-family: Arial, sans-serif;
  margin: 20px;
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
