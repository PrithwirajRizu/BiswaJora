<!DOCTYPE html>
<html lang="en">
<head>
  <title>Biswajora Pathsala</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css">
  <meta name="csrf-token" content="{{ csrf_token() }}">



  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}" defer></script>

  <!-- Fonts -->
  <link rel="dns-prefetch" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

  <!-- Styles -->

  <style type="text/css">
  
  .bg-1 {
         background: #2d2d30;
         color: #bdbdbd;
         }
         .bg-1 h3 {color: #fff;}
         .bg-1 p {font-style: italic;}
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

<div id="myCarousel" class="carousel slide" data-ride="carousel">
 <!-- Indicators -->
 <ol class="carousel-indicators">
  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
  <li data-target="#myCarousel" data-slide-to="1"></li>
  <li data-target="#myCarousel" data-slide-to="2"></li>
</ol>
<!-- Wrapper for slides -->
<div class="carousel-inner" role="listbox">
  <div class="item active">
   <img src="image12.jpg" alt="New York" width="1500" height="700">
   <div class="carousel-caption">
    <h3>Learn</h3>
    <p>Learn as if you were to live forever.</p>
  </div>
</div>
<div class="item">
 <img src="image11.jpg" alt="Chicago" width="1500" height="700">
 <div class="carousel-caption">
  <h3>Ask</h3>
  <p>Question everything. Learn something. Answer nothing.</p>
</div>
</div>
<div class="item">
 <img src="image10.jpg" alt="Los Angeles" width="1500" height="700">
 <div class="carousel-caption">
  <h3>Learn</h3>
  <p>Education is not preparation for life, education is life itself.</p>
</div>
</div>
</div>
<!-- Left and right controls -->
<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
 <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
 <span class="sr-only">Previous</span>
</a>
<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
 <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
 <span class="sr-only">Next</span>
</a>
</div>
<div  class="bg-1">
         <div class="container">
            <h3 class="text-center">যোগাযোগ করুনঃ</h3>

            <div class="row">
               <div class="col-md-4">
               
                  <p><span class="glyphicon glyphicon-map-marker"></span>SUST CSE,SYlHET</p>
                  <p><span class="glyphicon glyphicon-phone"></span>Phone: 01985240328</p>
                  <p><span class="glyphicon glyphicon-envelope"></span>Email: biswajorapathshala@gmail.com</p>
               </div>
             


            </div>
         </div>
      </div>


</body>
</html>