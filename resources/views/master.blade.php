<!DOCTYPE html>
<html lang="en">
<head>
  <title>Biswajora Pathsala</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style type="text/css">
  .centered {
    position: absolute;
    text-align: center;
    color: white;
    top: 60%;
    left: 0%;
    transform: translate(-50%, -50%);
  }
  body{font-family: "Lato", sans-serif;
}

.sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.sidenav a:hover {
  color: #f1f1f1;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
 div{
    padding-left: 170px;
 }
 body{
  background-color: black;
  color: white;
 }
</style>

</head>
<body>


 <nav class="navbar navbar-inverse">

  <div class="navbar-header">


     <a class="navbar-brand" href="#" align="left">বিশ্বজোড়া পাঠশালা</a>
  </div>
  <div class="container">

    <div class="container-fluid">

     <ul class="nav navbar-nav">
      <li class="active"><a href="/home">Home</a></li>
      <li class="dropdown">
       <a class="dropdown-toggle" data-toggle="dropdown" href="#">Resources
         <span class="caret"></span></a>
         <ul class="dropdown-menu">
          <li><a href="/book">Book</a></li>

        </ul>
      </li>
      <li class="dropdown">
       <a class="dropdown-toggle" data-toggle="dropdown" href="#">Ask-Post-Up
         <span class="caret"></span></a>
         <ul class="dropdown-menu">
          <li><a href="#">Write Blog</a></li>
          <li><a href="#">Ask Question</a></li>
          <li><a href="/upload/video">Upload Video tutorial</a></li>
        </ul>
      </li>
      <li class="dropdown">
       <a class="dropdown-toggle" data-toggle="dropdown" href="#">Archieve
         <span class="caret"></span></a>
         <ul class="dropdown-menu">
          <li><a href="#">All Blog Posts</a></li>
          <li><a href="#">All Questions</a></li>
          <li><a href="/archive/video">All Video tutorials</a></li>
        </ul>
      </li>
    </ul>
    <!--  Right Side Of Navbar -->
    <ul class="nav navbar-nav navbar-right">
      <!-- Authentication Links -->
      <li class="nav-item dropdown">
        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
          {{ Auth::user()->name }} <span class="caret"></span>
        </a>

        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="{{ route('logout') }}"
          onclick="event.preventDefault();
          document.getElementById('logout-form').submit();">
          {{ __('Logout') }}
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
          @csrf
        </form>
      </div>
    </li>
  </ul>
</div>


</div>
</nav> 

<h2 align="center">বিশ্বজোড়া পাঠশালা এর ভিডিও সমগ্র</h2>

<div class="main">
  <div class="container">
    @yield('change_as_you_wish')
  </div>
</div>
</body>
</html>