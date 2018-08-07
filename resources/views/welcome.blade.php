<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- Theme Made By www.w3schools.com - No Copyright -->
      <title>বিশ্বজোড়া পাঠশালা</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      <style type="text/css">
      <style>
         .container {
         padding: 80px 120px;
         }
         .person {
         border: 10px solid transparent;
         margin-bottom: 25px;
         width: 80%;
         height: 80%;
         opacity: 0.7;
         }
         .person:hover {
         border-color: #f1f1f1;
         }
         .carousel-inner img {
         width: 100%; Set width to 100%
         margin: auto;
         } 
         .carousel-caption h3 {
         color: #fff !important;
         }
         @media (max-width: 600px) {
         .carousel-caption {
         display: none; /* Hide the carousel text when the screen is less than 600 pixels wide */
         }
         }
         .bg-1 {
         background: #2d2d30;
         color: #bdbdbd;
         }
         .bg-1 h3 {color: #fff;}
         .bg-1 p {font-style: italic;}
         .list-group-item:first-child {
         border-top-right-radius: 0;
         border-top-left-radius: 0;
         }
         .list-group-item:last-child {
         border-bottom-right-radius: 0;
         border-bottom-left-radius: 0;
         }
         .thumbnail {
         padding: 0 0 15px 0;
         border: none;
         border-radius: 0;
         }
         .thumbnail p {
         margin-top: 15px;
         color: #555;
         }
         .btn {
         padding: 10px 20px;
         background-color: #333;
         color: #f1f1f1;
         border-radius: 0;
         transition: .2s;
         }
         .btn:hover, .btn:focus {
         border: 1px solid #333;
         background-color: #fff;
         color: #000;
         }
         .modal-header, h4, .close {
         background-color: #333;
         color: #fff !important;
         text-align: center;
         font-size: 30px;
         }
         .modal-header, .modal-body {
         padding: 40px 50px;
         }
         .nav-tabs li a {
         color: #777;
         }
         .navbar {
         margin-bottom: 0;
         background-color: black;
         border: 0;
         font-size: 13px !important;
         letter-spacing: 1px;
         opacity:0.8;
         }
         .navbar li a, .navbar .navbar-brand { 
         color: #d5d5d5 !important;
         }
         .navbar-nav li a:hover {
         color: #fff !important;
         }
         .navbar-nav li.active a {
         color: #fff !important;
         background-color:#29292c !important;
         }
         .navbar-default .navbar-toggle {
         border-color: transparent;
         }
         .open .dropdown-toggle {
         color:#fff ;
         background-color: #555 !important;
         }
         .dropdown-menu li a {
         color:#000 !important;
         }
         .dropdown-menu li a:hover {
         background-color:red !important;
         }
      </style>
   </head>
   <body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">
      <nav class="navbar navbar-default navbar-fixed-top">
         <div class="container-fluid">
            <div class="navbar-header">
               <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>                        
               </button>
               <a class="navbar-brand" href="/"><font size="5">বিশ্বজোড়া পাঠশালা</font> </a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
               <ul class="nav navbar-nav navbar-right">
                  <li><a href="#myPage">HOME</a></li>
                  <li><a href="#about">ABOUT</a></li>
                  <li><a href="#contact">CONTACT</a></li>
                  <li><a href="/register"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                  <li><a href="/login"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
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
               <img src="image1.jpg" alt="New York" width="1200" height="700">
               <div class="carousel-caption">
                  <h3>Learn</h3>
                  <p>Learn as if you were to live forever.</p>
               </div>
            </div>
            <div class="item">
               <img src="image2.jpg" alt="Chicago" width="1200" height="700">
               <div class="carousel-caption">
                  <h3>Ask</h3>
                  <p>Question everything. Learn something. Answer nothing.</p>
               </div>
            </div>
            <div class="item">
               <img src="image3.jpg" alt="Los Angeles" width="1200" height="700">
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
      <div id="about" class="container text-center">
         <h3>বিশ্বজোড়া পাঠশালা</h3>
         <p><b>কবি বলেছিলেন,</b></p>
         <p>"বিশ্বজোড়া পাঠশালা মোর</p>
         <p>সবার আমি ছাত্র,</p>
          <p>নানান ভাবে নতুন জিনিস </p>
           <p>শিখছি দিবারাত্র।।"</p>
            <p>হ্যাঁ পাঠশালা যত উন্মুক্ত হবে শিক্ষার বিস্তার হবে তত চমকপ্রদ।। আমাদের এই বিশ্বজোড়া পাঠশালা ওয়েবসাইটি তৈরি এর মূল উদ্দেশ্য হচ্ছে স্কুল এর ছেলেমেয়ে এবং শিক্ষকদের এমন একটা কমন প্লাটফর্মে আনা যেখানে তাঁরা শিক্ষামূলক বিভিন্ন কর্মকান্ডে সম্পৃক্ত থাকতে পারবেন। ছাত্র-ছাত্রীরা নির্দ্বিধায় তাঁদের জিজ্ঞাসু মনের বিভিন্ন প্রশ্ন এখানে করতে পারবে এবং শিক্ষকেরা তাঁদের প্রশ্নের উত্তর দিতে পারবেন।। শিক্ষকেরা তাঁদের তৈরি করা বিভিন্ন শিক্ষামূলক ভিডিও ও এখানে আপ্লুড করতে পারবেন।। তাঁরা বিভিন্ন সাব্জেক্ট ওয়াইজ,বিভিন্ন টপিকের উপর বিভিন্ন ব্লগ ও লিখতে পারবেন।। ছাত্ররা সেগুলো দেখতে এবং পড়তে পারবে।। ছাত্র ছাত্রীরা এনসিটিবি এর বইগুলাও এখানে পাবে।।মূলত শিক্ষার বিস্তারে ওয়েবসাইটি অনেকটা উন্মুক্ত প্লাটফর্মে তৈরি।।এখনও এটি নির্মানাধীন।। নতুন নতুন ফিচার এড করে শিক্ষা বিস্তারে ওয়েবসাইটটিকে আরো সমৃদ্ধ করার প্রত্যয় ব্যক্ত করা হল।।</p>

         <br>
         <div class="row">
            <div class="col-sm-4">
               <p class="text-center"><strong>শিক্ষা</strong></p>
               <br>
               <a href="#demo" data-toggle="collapse">
               <img src="image6.jpg" class="img-circle person" alt="Random Name" width="255" height="255">
               </a>
               <div id="demo" class="collapse">
                  <p>"সুশিক্ষিত লোক মাত্রই স্বশিক্ষিত"</p>
                  <p >-প্রমথ চৌধুরী</p>
                  
               </div>
            </div>
            <div class="col-sm-4">
               <p class="text-center"><strong>জ্ঞান</strong></p>
               <br>
               <a href="#demo2" data-toggle="collapse">
               <img src="image5.jpg" class="img-circle person" alt="Random Name" width="255" height="255">
               </a>
               <div id="demo2" class="collapse">
                  <p>"যুক্তি আপনাকে এক জায়গা থেকে</p>
                  <p>আপনার গন্তব্যে নিয়ে যাবে।</p>
                  <p>কিন্তু কল্পনা শক্তি দিয়ে আপনি </p>
                  <p>সব জায়গায় যেতে পারবেন।।"</p>
                  <p>-আলবার্ট আইনস্টাইন</p>
               </div>
            </div>
            <div class="col-sm-4">
               <p class="text-center"><strong>জিজ্ঞাসা</strong></p>
               <br>
               <a href="#demo3" data-toggle="collapse">
               <img src="image4.jpg" class="img-circle person" alt="Random Name" width="255" height="255">
               </a>
               <div id="demo3" class="collapse">
                  <p>"বই আপনাকে অতীত বর্তমান ভবিষ্যৎ</p>
                  <p>সব দিকেই নিয়ে যেতে পারে।।"</p>
                  <p>-জসীম উদ্দীন</p>
               </div>
            </div>
         </div>
      </div>
      <!-- Container (TOUR Section) -->
      <div id="contact" class="bg-1">
         <div class="container">
            <h3 class="text-center">Contact</h3>

            <div class="row">
               <div class="col-md-4">
                  <p>যোগাযোগ করুনঃ</p>
                  <p><span class="glyphicon glyphicon-map-marker"></span>SUST CSE,SYlHET</p>
                  <p><span class="glyphicon glyphicon-phone"></span>Phone: 01985240328</p>
                  <p><span class="glyphicon glyphicon-envelope"></span>Email: biswajora@gmail.com</p>
               </div>
               <div class="col-md-8">
                  <div class="row">
                     <div class="col-sm-6 form-group">
                        <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
                     </div>
                     <div class="col-sm-6 form-group">
                        <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
                     </div>
                  </div>
                  <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea>
                  <br>
                  <div class="row">
                     <div class="col-md-12 form-group">
                        <button class="btn pull-right" type="submit">Send</button>
                     </div>
                  </div>
               </div>

            </div>
         </div>
      </div>
   </body>
</html>