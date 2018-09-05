<!DOCTYPE html>
<html lang="en">
<head>
  <title>Biswajora Pathsala</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  

  <style type="text/css">

 
#myDIV {
    width: 1400px;
    height: 50px;
    
    background-color: white;
    color: #784212;
    -webkit-animation: mymove 5s infinite; /* Safari 4.0 - 8.0 */
    animation: mymove 5s infinite;
}

/* Safari 4.0 - 8.0 */
@-webkit-keyframes mymove {
    80% {box-shadow: 10px 20px 30px black;}
}
@keyframes mymove {
    80% {box-shadow: 10px 20px 30px black;}
}
#content {
  overflow: hidden;
  height: 9em;
  line-height: 1.3em;
  width: 1000px;
}

#more:checked + div {
  height: auto;
}
 body{
  color: #784212;

 }
 
p{
  
  text-justify:  inter-word;
}

 header{
  color: black;
 }
</style>

</head>
<body>



 <nav class="navbar navbar-inverse">

  <div class="navbar-header">


     <a class="navbar-brand" href="/home" align="left">বিশ্বজোড়া পাঠশালা</a>
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
          <li><a href="/askquestion">Ask Question</a></li>
          <li><a href="/upload/video">Upload Video tutorial</a></li>
        </ul>
      </li>
      <li class="dropdown">
       <a class="dropdown-toggle" data-toggle="dropdown" href="#">Archieve
         <span class="caret"></span></a>
         <ul class="dropdown-menu">
          <li><a href="/archive/blog">All Blog Posts</a></li>
          <li><a href="/archive/question">All Questions</a></li>
          <li><a href="/archive/video">All Video tutorials</a></li>
        </ul>
      </li>
    </ul>
    <!--  Right Side Of Navbar -->
    <ul class="nav navbar-nav navbar-right">
      <!-- Authentication Links -->
        <li class="nav-item dropdown">
      <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre><img src="/uploads/avatars/{{ Auth::user()->avatar }}" style="width:32px; height:32px; position:absolute; top:8px; left:-30px; border-radius:50%">
        {{ Auth::user()->name }} <span class="caret"></span>
      </a>

      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="{{ route('logout') }}"
        onclick="event.preventDefault();
        document.getElementById('logout-form').submit();"><i class="fa fa-btn fa-sign-out"></i>
        {{ __('Logout') }}
      </a>

      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
      </form><br>
      <a class="dropdown-item" href="{{ url('/profile') }}"><i class="fa fa-btn fa-user"></i>
        Profile
      </a>
    </div>
  </li>
  </ul>
</div>


</div>
</nav> 

<h2 align="center" id="myDIV">বিশ্বজোড়া পাঠশালা এর ব্লগ সমগ্র</h2>
<br>

<div class="main">
  
    @yield('change_as_you_wish')

</div>
</body>
</html>