<!DOCTYPE html>
<html>
<head>
  <title>Biswajora PathShala</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <style type="text/css">
 #my_textarea {

  background: transparent;
  margin-left: 300px;
  color: black;
  font-size:19px;

}
  div{
    text-align: center;
  }
  button{

    background-color: #4CAF50;
    margin-left: 980px;

  }

  body{

    background-image: url("blog.jpg")
  }
  
  ::placeholder {
    color: black;
    opacity: 1; /* Firefox */
}
  .button {
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
      <li class="active"><a href="#">Home</a></li>
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
<div class="container">
 <header> <font size="5" color="white">ব্লগ তৈরি করুন </font></header>
 <br>
 <br>
 <br>
</div>

<script type="text/javascript">
  $(function() { 
   $(".hide-it").hide(5000);
 });

</script>
@if (Session::has('message'))
<div>
  <h1 class='hide-it'><font color="yellow">Your blog content has been posted successfully.Check it in Archive</font></h1>
</div>
@endif


<form action="" method="post">
  @csrf
  <div class="container">
    <div class="row test">
     <div class="col-md-8">
      <div class="row">
       <div class="col-sm-6 form-group">
        <input class="form-control"  name="title" id="my_textarea" placeholder="Blog Title...." type="text" required>
      </div>

    </div>
    <textarea align="center" class="form-control" name="content" id="my_textarea" rows="15"  placeholder="Write here......."  required></textarea>
   
   <br>

   <div class="row">
     <div class="col-md-12 form-group">

      <button type="submit" class="btn btn-warning-right"  color="black">{{  __('Submit')  }}</button>
    </div>
  </div>
</div>
</div>
</div>
</form>
</body>
</html>