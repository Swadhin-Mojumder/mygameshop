@include('dashboard')
<!DOCTYPE html>
<html>
<head>
  <title>Doctor's Information Form</title>
  <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
  <a href="{{url('dashboard')}}"><button class="btn btn-primary">Back</button></a>
<div class="head">

  <h1><span> {{$title}}    </span>Doctor</h1>
  <form action="{{$url}}" method="post" enctype="multipart/form-data">
    @csrf
    <label for="image">Image:
        <img src="{{asset('picture/'.$doctor->picture)}}" alt="" style="width:55px;">
    </label>
    <input type="file" id="imageFile" name="picture" accept="image/*" >

    <label for="name">First_Name:</label>
    <input type="text" id="name" name="first_name" class="" value="{{$doctor->first_name}}">
    <label for="name">Last_Name:</label>
    <input type="text" id="name" name="last_name" value="{{$doctor->last_name}}">

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" value="{{$doctor->email}}">

    <label for="education">Education:</label>
    <input type="text" id="education" name="education" value="{{$doctor->educational_qualification}}">

    <label for="education">Address:</label>
    <input type="text" id="education" name="address" value="{{$doctor->address}}">


    <label for="specialist">Specialist:</label>
    <input type="text" id="specialist" name="specialist" value="{{$doctor->specialist}}">

    <label for="phone">Phone:</label>
    <input type="number" id="phone" name="phone" value="{{$doctor->phone}}">

    <label for="phone">Emergency Phone:</label>
    <input type="number" id="phone" name="emergency" value="{{$doctor->emergency}}">

    <label for="national_id">National ID:</label>
    <input type="text" id="national_id" name="national_id" value="{{$doctor->national_id}}">

    <label for="password">Password:</label>
    <input type="password" id="password" name="password">

    <label for="gender">Gender:</label>
    <select id="" name="gender" value="{{$doctor->gender}}">
      <option value="male">Male</option>
      <option value="female">Female</option>
      <option value="other">Other</option>
    </select>

    <label for="type">Type:</label>
    <select id="gender" name="type" value="{{$doctor->type}}">
      <option value="Doctor">Doctor</option>
      <option value="Nurse">Nurse</option>
      <option value="other">Other</option>
    </select>

    <label for="date_of_birth">Date of Birth:</label>
    <input type="date" id="date_of_birth" name="date_of_birth" value="{{$doctor->birth_date}}">

    <label for="madical_degree">Medical Degree:</label>
    <input type="text" id="madical_degree" name="madical_degree" value="{{$doctor->medical_degree}}">

    <label for="madical_degree">Blood Group:</label>
    <input type="text" id="madical_degree" name="blood_group" value="{{$doctor->blood_group}}">

    <label for="biography">Biography:</label>

      <input type="text" name="biography" id="biography" value="{{$doctor->biography}}">

    <label for="biography">Full-Biography:</label>

      <input type="text" name="full-biography" id="biography" value="{{$doctor->full_biography}}">

    <input type="submit" value="Submit">
  </form>
</div>
</body>

<style>
    .head{
        margin-top:-590px;
    }
  h1{
    text-align: center;
    color: blue;
  }
    form {
  max-width: 500px;
  margin: 20px auto;
  padding: 20px;
  border: 1px solid #ccc;
  border-radius: 5px;
  font-family: Arial, sans-serif;
}

label,
input,
select,
textarea {
  display: block;
  margin-bottom: 10px;
}

input[type="text"],
input[type="email"],
input[type="tel"],
input[type="password"],
select,
textarea {
  width: 100%;
  padding: 8px;
  border-radius: 3px;
  border: 1px solid #ccc;
}

input[type="submit"] {
  background-color: #4caf50;
  color: white;
  padding: 10px 15px;
  border: none;
  border-radius: 3px;
  cursor: pointer;
}

input[type="submit"]:hover {
  background-color: #45a049;
}
</style>
</html>
