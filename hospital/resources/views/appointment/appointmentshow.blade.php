@include('dashboard')
<!doctype html>
<html lang="en">

<head>
  <title>Appointment</title>
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
    <div class="table-responsive" style="margin-top:-560px; margin-left:100px ">
        <table class="table table-primary center">
            <thead>
                <tr>
                    <th scope="col">Full-Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Doctor-Name</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Preferred-Date</th>
                    <th scope="col">Additional-Message</th>
                    <th scope="col">Action</th>

                </tr>
            </thead>
            <tbody>
              @foreach ($appointment as $app)



                <tr class="center">
                    <td>{{$app->name}}</td>
                    <td>{{$app->email}}</td>
                    <td>{{$app->phone}}</td>
                    <td>{{$app->doctor_name}}</td>
                    <td>{{$app->gender}}</td>
                    <td>{{$app->date}}</td>
                    <td>{{$app->message}}</td>
                    <td><a href="{{url('appointmentdelete')}}/{{$app->id}}"><button class="btn btn-danger">Delete</button></a>
                    <button class="btn btn-primary">Edit</button>
                    </td>
                </tr>
                @endforeach

            </tbody>
        </table>
    </div>

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
</body>

</html>
