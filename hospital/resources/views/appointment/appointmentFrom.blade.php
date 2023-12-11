@include('themeLayout.header')
<div class="from">
    <!--subcribe-box-->
    <h1 class="he">Make an Appointment</h1>
    <form id="appointmentForm" action="{{url('/')}}/from" method="post">
        @csrf
      <label for="fullName">Full Name:</label>
      <input type="text" id="fullName" name="name" required><br><br>

      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required><br><br>

      <label for="phone">Phone:</label>
      <input type="tel" id="phone" name="phone" required><br><br>

      <label for="type">Select-Doctor:</label>
      <select id="gender" name="select_doctor" >
        @foreach ($doc as $item)


        <option value="{{ $item->first_name }} {{ $item->last_name }}">{{ $item->first_name }} {{ $item->last_name }}</option>
        @endforeach
      </select><br><br>

      <label for="appointmentDate">Preferred Date:</label>
      <input type="date" id="appointmentDate" name="date" required><br><br>

      <label for="gender">Gender:</label>
      <select id="" name="gender" value=>
        <option value="male">Male</option>
        <option value="female">Female</option>
        <option value="other">Other</option>
      </select><br><br>

      <label for="message">Additional Message:</label><br>
      <textarea id="message" name="message" rows="4" cols="50"></textarea><br><br>

      <input type="submit" value="Submit" class="but">
    </form>

    </div>


    <style>
        #gender{
            width: 200px;
            height: 50px;
            font-weight: bold;
        }

    .he{
        text-align: center;
        color: rgb(241, 241, 241);
        padding: 15px;
    }
    .from{
        background-color: blue;
        margin-left: 180px;
        margin-right: 180px;
        border-radius: 50px;
    }

    form {
      width: 520px;
      margin: 0 auto;

    }
    .but{
        padding-top:2px;
        padding-bottom:5px;
        margin-bottom: 10px;
        margin-top: -10px;
    }

    label {
      display: block;
      margin-bottom: 5px;
      color: white;
      font-weight: bold;
    }

    input[type="text"],
    input[type="email"],
    input[type="tel"],
    input[type="date"],
    textarea {
      width: 100%;
      padding: 8px;
      margin-bottom: 10px;
      border: 1px solid #ccc;
      border-radius: 4px;
    }

    input[type="submit"] {
      background-color: #4CAF50;
      color: white;
      padding: 10px 15px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    input[type="submit"]:hover {
      background-color: #45a049;
    }

    @media (max-width: 480px) {
     input {
    width: 95%; /* Adjust width for mobile screens */
  }
}
    @media (max-width: 480px) {
     from {

    width: 95%; /* Adjust width for mobile screens */
  }
}

    </style>

    <script>


    </script>
    <!--end-->
    @include('themeLayout.footer')
