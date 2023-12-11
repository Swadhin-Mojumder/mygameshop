<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dropdown Sidebar - Tivotal</title>

    <!--font awesome-->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
    />

    <!--css file-->
    <link rel="stylesheet" href="{{ asset('back/styles.css')}}" />
  </head>
  <body>
    <a href="{{ url('/') }}">
    <div class="sidebar close">

      <div class="logo">
        <i class="fab fa-trade-federation"></i>
        <span class="logo-name">Home-Theme</span>

      </div>
    </a>

      <ul class="nav-list">
        <li>
          <a href="{{ url('dashboard') }}">
            <i class="fab fa-microsoft"></i>
            <span class="link-name">Dashboard</span>
          </a>

          <ul class="sub-menu blank">
            <li><a href="{{ url('dashboard') }}" class="link-name">Dashboard</a></li>
          </ul>
        </li>

        <li>
          <div class="icon-link">
            <a href="#">
                <i class="fa-solid fa-user-doctor"></i>
              <span class="link-name">Doctors</span>
            </a>
            <i class="fas fa-caret-down arrow"></i>
          </div>

          <ul class="sub-menu">
            <li><a href="#" class="link-name">Doctors</a></li>
            <li><a href="{{ url('/adddoctor') }}">Add-Doctor</a></li>
            <li><a href="{{ url('/listdoctor') }}">List-Doctor</a></li>
            <li><a href="{{ url('/showdoctor') }}">Show-Doctor</a></li>
          </ul>
        </li>

        <li>
          <div class="icon-link">
            <a href="#">
                <i class="fa-solid fa-gear"></i>
              <span class="link-name">Settings</span>
            </a>
            <i class="fas fa-caret-down arrow"></i>
          </div>

          <ul class="sub-menu">
            <li><a href="#" class="link-name">Settings</a></li>
            <li><a href="{{ url('/set') }}">Add-Setting</a></li>
            <li><a href="{{ url('/show') }}">List-Setting</a></li>
            <li><a href="{{ url('/') }}">Show-Setting</a></li>
          </ul>
        </li>

       <li>
        <div class="icon-link">
          <a href="#">
            <i class="fa-solid fa-layer-group"></i>
            <span class="link-name">Catagoriys</span>
          </a>
          <i class="fas fa-caret-down arrow"></i>
        </div>

        <ul class="sub-menu">
          <li><a href="#" class="link-name">Catagoriys</a></li>
          <li><a href="{{ url('/cata') }}">Add-Catagory</a></li>
          <li><a href="{{ url('/catagoryall') }}">List-Catagory</a></li>
          <li><a href="{{ url('/catashow') }}">Show-Catagory</a></li>
        </ul>
      </li>

      <li>
        <div class="icon-link">
          <a href="#">
            <i class="fa-solid fa-calendar-check"></i>
            <span class="link-name">Appointments</span>
          </a>
          <i class="fas fa-caret-down arrow"></i>
        </div>

        <ul class="sub-menu">
          <li><a href="#" class="link-name">Appointment</a></li>
          <li><a href="{{ url('/appointmentadd') }}">Add-Appointment</a></li>
          <li><a href="{{ url('/appointmentshow') }}">List-Appointment</a></li>

        </ul>
      </li>

        <li>
          <div class="icon-link">
            <a href="#">
                <i class="fa-brands fa-servicestack"></i>
              <span class="link-name">Services</span>
            </a>
            <i class="fas fa-caret-down arrow"></i>
          </div>

          <ul class="sub-menu">
            <li><a href="#" class="link-name">Services</a></li>
            <li><a href="{{ url('/addservice') }}">Add-Service</a></li>
            <li><a href="{{ url('/listservice') }}">List-Service</a></li>
            <li><a href="{{ url('/showservice') }}">Show-Service</a></li>
          </ul>
        </li>

        {{--  <li>
          <a href="#">
            <i class="fas fa-bookmark"></i>
            <span class="link-name">Saved</span>
          </a>

          <ul class="sub-menu blank">
            <li><a href="#" class="link-name">Saved</a></li>
          </ul>
        </li>

        <li>
          <a href="#">
            <i class="fas fa-cart-shopping"></i>
            <span class="link-name">Cart</span>
          </a>

          <ul class="sub-menu blank">
            <li><a href="#" class="link-name">Cart</a></li>
          </ul>
        </li>

        <li>
          <a href="#">
            <i class="fas fa-gear"></i>
            <span class="link-name">Settings</span>
          </a>

          <ul class="sub-menu blank">
            <li><a href="#" class="link-name">Settings</a></li>
          </ul>
        </li>  --}}

        <li>
          <div class="profile-details">
            <div class="profile-content">
              <img src="{{ asset('back/profile.jpg') }}" alt="" />
            </div>

            <div class="name-job">
              <div class="name">Swadhin Mojumder</div>
              <div class="job">Web Developer</div>
            </div>
            <i class="fas fa-right-to-bracket"></i>
          </div>
        </li>
      </ul>
    </div>

    <div class="home-section">
      <div class="home-content">
        <i class="fas fa-bars"></i>
        <span class="text">Dropdown Sidebar Menu</span>
      </div>
    </div>

    <script src="{{ asset('back/app.js') }}"></script>
  </body>
</html>
