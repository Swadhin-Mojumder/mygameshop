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
    <div class="table-responsive" style="margin-left: 100px;margin-top:-550px">
        <table class="table table-primary center">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Name</th>
                    <th scope="col">National-ID</th>
                    <th scope="col">Email</th>
                    <th scope="col">Password</th>
                    <th scope="col">Address</th>
                    <th scope="col">Type</th>
                    <th scope="col">Picture</th>
                    <th scope="col">Birth-Date</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Emergency</th>
                    <th scope="col">Medical-Degree</th>
                    <th scope="col">Secialist</th>
                    <th scope="col">Biography</th>
                    <th scope="col">Full-Biography</th>
                    <th scope="col">Education</th>
                    <th scope="col">Blood-Group</th>
                    <th scope="col">Action</th>


                </tr>
            </thead>
            <tbody>

                  @foreach ($doctor as $item)




                <tr class="center">
                    <td>{{$item->id}}</td>
                    <td>{{$item->first_name}} {{$item->last_name}}</td>
                    <td>{{$item->national_id}}</td>
                    <td>{{$item->email}}</td>
                    <td>{{$item->password}}</td>
                    <td>{{$item->address}}</td>
                    <td>{{$item->type}}</td>
                    <td>{{$item->picture}}</td>
                    <td>{{$item->birth_date}}</td>
                    <td>{{$item->gender}}</td>
                    <td>{{$item->phone}}</td>
                    <td>{{$item->emergency}}</td>
                    <td>{{$item->medical_degree}}</td>
                    <td>{{$item->specialist}}</td>
                    <td>{{$item->biography}}</td>
                    <td></td>
                    <td>{{$item->educational_qualification}}</td>
                    <td>{{$item->blood_group}}</td>


                    <td><a href="{{url('deletedoctor')}}/{{$item->id}}"><button class="btn btn-danger">Delete</button></a>
                      <a href="{{url('editdoctor')}}/{{$item->id}}">
                    <button class="btn btn-primary">Edit</button>
                  </a>
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
