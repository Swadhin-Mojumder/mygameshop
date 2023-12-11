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
<sub style="margin-left: 1000px";>
<body>
  <header>
    <!-- place navbar here -->
    <a href="{{url('dashboard')}}"><button class="btn btn-primary">Back</button></a>
  </header>
  <main>

    <div class="row" style="margin-left: 80px; margin-top:-580px;">
      <div class="col-md-12">
        <div class="card">
          <div class="table-responsive pt-3">

            <table class="table table-striped project-orders-table">
              <thead>
                  <tr>
                      <th>Id</th>
                      <th>Logo-image</th>
                      <th>Head-image</th>
                      <th>Meddle-image</th>
                      <th>Bottom-image</th>
                      <th>Clint-image</th>
                      <th>Email</th>
                      <th>Phone-number</th>
                      <th>Action</th>


                  </tr>
              </thead>
              <tbody>


               @foreach ($setting as $setting)



                  <tr class="">
                      <td>{{$setting->id}}</td>
                      <td>{{$setting->logo}}</td>
                      <td>{{$setting->head}}</td>
                      <td>{{$setting->medile}}</td>
                      <td>{{$setting->bottom}}</td>
                      <td>{{$setting->clint}}</td>
                      <td>{{$setting->email}}</td>
                      <td>{{$setting->contect_number}}</td>



                      <td>
                        <div class="d-flex align-items-center">
                        <a href="{{url('settingdelete')}}/{{$setting->id}}"><i class="typcn typcn-delete-outline btn-icon-append"></i> <button class="btn btn-success btn-sm btn-icon-text mr-3">Delete</button> </a>
                        <a href="{{url('settingedit')}}/{{$setting->id}}">
                          <button class="btn btn-danger btn-sm btn-icon-text">Edit</button> <i class="typcn typcn-edit btn-icon-append"></i>
                        </div>
                      </td>

                  </tr>
                  @endforeach

              </tbody>
          </table>

          </div>
        </div>
      </div>
    </div>

    <div class="">

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

  <style>

  </style>
</body>
</sub>
</html>
