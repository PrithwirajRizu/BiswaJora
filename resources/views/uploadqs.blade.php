<html lang="en">
<head>
    
    <title>Biswajora Pathsahla</title>
   <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
 <script type="text/javascript">
   $(document).ready(function(){
  $('#title').focus();
    $('#text').autosize();
});
 </script>
  
<style type="text/css">


#paper {
  color:#FFF;
  font-size:20px;
}
#margin {
  margin-left:12px;
  margin-bottom:20px;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  -o-user-select: none;
  user-select: none; 
}
#texte {
  width:500px;
  overflow:hidden;
  background-color:#FFF;
  color:#222;
  font-family:Courier, monospace;
  font-weight:normal;
  font-size:24px;
  resize:none;
  line-height:40px;
  padding-left:100px;
  padding-right:100px;
  padding-top:45px;
  padding-bottom:34px;
  background-image:url(https://static.tumblr.com/maopbtg/E9Bmgtoht/lines.png), url(https://static.tumblr.com/maopbtg/nBUmgtogx/paper.png);
  background-repeat:repeat-y, repeat;
  -webkit-border-radius:12px;
  border-radius:12px;
  -webkit-box-shadow: 0px 2px 14px #000;
  box-shadow: 0px 2px 14px #000;
  border-top:1px solid #FFF;
  border-bottom:1px solid #FFF;
}
#title {
  background-color:transparent;
  border-bottom:3px solid #FFF;
  color:#FFF;
  font-size:20px;
  font-family:Courier, monospace;
  height:28px;
  font-weight:bold;
  width:220px;
}
body{
    background-image: url('brain.jpg');
    background-image-width:1000; 
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


@if (Session::has('message'))

<div class="alert alert-success alert-dismissible">
    <a class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Success!Your question has been posted.Check it in Archive!</strong>
  </div>
@endif


<?php
for($i=1;$i<=5;$i++){
echo "<br>";
}
?>


<form  method="post" action="">
    @csrf
   
     <div class="col-md-3"></div>
   <div class="col-md-8">
                 
                  <textarea placeholder="Ask a Question..." id="texte" name="content" rows="10" style="overflow: hidden; word-wrap: break-word; resize: none; height: 300px; "></textarea> 

                  <br>
                  <div class="row">
                     <div class="col-md-12 form-group">
                        <button class="btn btn-primary" type="submit">Submit</button>
                     </div>
                  </div>
               </div>


     




</form>
</body>
</html>