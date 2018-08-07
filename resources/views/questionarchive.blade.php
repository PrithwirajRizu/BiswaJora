<!DOCTYPE html>
<html>
<head>
   <title>BiswaJora Pathshala</title>

   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   <style type="text/css">
   .two {
      color: var(--my-var, green); /*if --my-var is not defined */
   }
   blockquote{
      margin-left: 30px;
   }
   body{


   }
   .centered {
     position: absolute;
     text-align: center;
     color: white;
     top: 60%;
     left: 0%;
     transform: translate(-50%, -50%);
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
<?php 
$allques=App\Question::all();
?>


@foreach($allques as $key)
<div class="container">
   <div class="row">
      <!-- Post Content Column -->
      <div class="col-lg-8">
         <h1 class="two">
           Q{{$key->id}}. {{$key->content}}
         </h1>
         <h5 class="two">{{$key->created_at->format('d M Y')}} </h5>
         <!-- Date/Time -->
         <!--  <p>Asked {{$key->created_at->format('d M Y')}}</p> -->
         
         <!-- Comments Form -->
         <a href="#{{ $key->id }}" class="btn btn-primary"  data-toggle="collapse">Write answer here...</a>
         <div id="{{ $key->id }}" class="collapse">
            <div class="card my-4">
               <h5 class="card-header">Leave Your Answer...</h5>
               <div class="card-body">
                  <form action="" method="post">
                     @csrf
                     <div class="col-sm-6 form-group">
                       <input type="text" class="form-control" name="content" placeholder="Answer..." required>
                    </div>
                  <input type="hidden" name="question_id" value="{{ $key->id }}">
                  <input type="hidden" name="name" value="{{ Auth::user()->name }}">
                    <button type="submit" class="btn btn-primary">Submit</button>

                 </form>
              </div>
           </div>
        </div>
     </div>
  </div>
  <hr>
  <?php
  $x = $key->id;
  $allcomments = App\Question::find($x)->comments;
  ?>
  <section id="comments">
   @foreach($allcomments as $k)
   <div class="comment">
      <p> <strong>{{ $k->name }} replied {{ $k->created_at->diffForHumans() }} <strong> </p>
         <blockquote>{{$k->content}} </blockquote>
      </div>
      @endforeach
   </section>
</div>
<hr>
@endforeach
</body>
</html>