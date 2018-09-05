<!DOCTYPE html>
<html lang="en">
<head  prefix="og: http://ogp.me/ns# article: http://ogp.me/ns/article#">
   
    <title>Biswajora Pathsahla</title>
      <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css">
    
  <style type="text/css">

  div{
    text-align: center;
}
body{
    background-image: url('http://backgroundcheckall.com/wp-content/uploads/2017/12/background-3d-hd-7.jpg');
    background-image-width:1000; 
}
/*.centered {
    position: absolute;
    text-align: center;
    color: white;
    top: 60%;
    left: 0%;
    transform: translate(-50%, -50%);
}*/

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

<?php
echo "<br>";
echo "<br>";
echo "<br>";
?>

<script type="text/javascript">
  $(function() { 
   $(".hide-it").hide(5000);
 });

</script>
@if (Session::has('message'))
<div>
  <h1 class='hide-it'><font color="yellow">Your video tutorial has been uploaded successfully.Check it in Archive</font></h1>
</div>
@endif



<form method="post" action="/upload/video" >
 @csrf

      <div class="col-md-8">
                 
                     <div >
                        <input class="form-control"  name="videoLink" placeholder="Enter Video Link...." type="text" required>
                     </div>
                      <br>
                     <div >
                        <input class="form-control"  name="title" placeholder="Video Title" type="text" required>
                     </div>
                 
                  
                 <br>
                  <div class="row">
                     <div class="col-md-12 form-group">
                        <button class="btn btn-primary" type="submit">Submit</button>
                     </div>
                  </div>
               </div>

   <!--  <input class="form-control" name="videoLink" type="text" placeholder="Enter Video Link..." required>

    
    <input class="form-control" name="title" type="text" placeholder="Video Titile" required>
  

<button class="c-btn c-btn__primary c-btn--md c-btn--normaltext u-mt15" type="submit">Submit</button>
 -->
</form>

</body>
</html>