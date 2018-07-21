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
    left: 50%;
    transform: translate(-50%, -50%);
   }
   </style>

   </head>
   <body>
      <div class="container">
         <nav class="navbar navbar-inverse">
            <div class="container-fluid">
               <div class="navbar-header">
                  <a class="navbar-brand" href="#">Biswajora Pathshala</a>
               </div>
               <ul class="nav navbar-nav">
                  <li class="active"><a href="#">Home</a></li>
                  <li class="dropdown">
                     <a class="dropdown-toggle" data-toggle="dropdown" href="#">Learn
                     <span class="caret"></span></a>
                     <ul class="dropdown-menu">
                        <li><a href="/book">Book</a></li>
                     </ul>
                  </li>
                  <li class="dropdown">
                     <a class="dropdown-toggle" data-toggle="dropdown" href="#">Resource
                     <span class="caret"></span></a>
                     <ul class="dropdown-menu">
                        <li><a href="#">Write Blog</a></li>
                        <li><a href="#">Ask Question</a></li>
                        <li><a href="#">Upload Video tutorial</a></li>
                     </ul>
                  </li>
               </ul>
               <ul class="nav navbar-nav navbar-right">
                  <li><a href="/register"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                  <li><a href="/login"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
               </ul>
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
            <div class="carousel-inner">
               <div class="item active">
                  <img src="image1.jpg" alt="Los Angeles" style="width:100%;">
                  <div class="centered">
                     <h3>Learn</h3>
                     <h4>Learn as if you were to live forever.</h4>
                  </div>
               </div>
               <div class="item">
                  <img src="image2.jpg" style="width:100%;">
                  <div class="centered">
                     <h3>Ask</h3>
                     <h4>Question everything. Learn something. Answer nothing.</h4>
                  </div>
               </div>
               <div class="item">
                  <img src="image3.jpg" alt="New York" style="width:100%;">
                  <div class="centered">
                     <h3>Know</h3>
                     <h4>Education is not preparation for life, education is life itself.</h4>
                  </div>
               </div>
            </div>
            <!-- Left and right controls -->
            
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
            </a>
            
         </div>
      </div>
   </body>
</html>