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
 
 div{
    padding-left: 170px;


 }
 .dv{

    background-color: lightgrey;
    width: 300px;
    border: 25px solid green;
    padding: 25px;
    margin: 25px;
    color: black;

 }
 body{
  background-color: #4e7055;
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
          <li><a href="/writeblog">Write Blog</a></li>
          <li><a href="#">Ask Question</a></li>
          <li><a href="/upload/video">Upload Video tutorial</a></li>
        </ul>
      </li>
      <li class="dropdown">
       <a class="dropdown-toggle" data-toggle="dropdown" href="#">Archieve
         <span class="caret"></span></a>
         <ul class="dropdown-menu">
          <li><a href="/archive/blog">All Blog Posts</a></li>
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

<h2 align="center">বিশ্বজোড়া পাঠশালা এর ব্লগ সমগ্র</h2>

<div class="main">
  <div class="container">
    @yield('change_as_you_wish')
  </div>
</div>
</body>
</html>