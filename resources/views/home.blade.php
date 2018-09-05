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
  <script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById('myImg');
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
  modal.style.display = "block";
  modalImg.src = this.src;
  captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
  modal.style.display = "none";
}
</script>
<script src="{{ asset('js/app.js') }}" defer></script>

<!-- Fonts -->
<link rel="dns-prefetch" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

<!-- Styles -->

<style type="text/css">
.buttong {
  padding: 15px 25px;
  font-size: 24px;
  text-align: center;
  cursor: pointer;
  outline: none;
  color: #fff;
  background-color: #4CAF50;
  border: none;
  border-radius: 15px;
  box-shadow: 0 9px #999;
}

.buttong:hover {background-color: #3e8e41}

.buttong:active {
  background-color: #3e8e41;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}
#myImg {
  border-radius: 5px;
  cursor: pointer;
  transition: 0.3s;
}

#myImg:hover {opacity: 0.7;}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
}

/* Modal Content (image) */
.modal-content {
  margin: auto;
  display: block;
  width: 80%;
  max-width: 700px;
}

/* Caption of Modal Image */
#caption {
  margin: auto;
  display: block;
  width: 80%;
  max-width: 700px;
  text-align: center;
  color: #ccc;
  padding: 10px 0;
  height: 150px;
}

/* Add Animation */
.modal-content, #caption {    
  -webkit-animation-name: zoom;
  -webkit-animation-duration: 0.6s;
  animation-name: zoom;
  animation-duration: 0.6s;
}

@-webkit-keyframes zoom {
  from {-webkit-transform:scale(0)} 
  to {-webkit-transform:scale(1)}
}

@keyframes zoom {
  from {transform:scale(0)} 
  to {transform:scale(1)}
}

/* The Close Button */
.close {
  position: absolute;
  top: 15px;
  right: 35px;
  color: #f1f1f1;
  font-size: 40px;
  font-weight: bold;
  transition: 0.3s;
}

.close:hover,
.close:focus {
  color: #bbb;
  text-decoration: none;
  cursor: pointer;
}

/* 100% Image Width on Smaller Screens */
@media only screen and (max-width: 700px){
  .modal-content {
    width: 100%;
  }
}

.person {
  border: 10px solid transparent;
  margin-bottom: 25px;
  width: 65%;
  height: 65%;
  opacity: ;
}
.person:hover {
  border-color: lightblue;
}
.bg-1 {

  background: lightblue;
  color:black ;
}

.bg-2 {

  background: black;
  color: #bdbdbd;
}
.bg-1 h3 {color: black;}
.bg-1 p {font-style: bold;}
.list-group-item:first-child {
  border-top-right-radius: 100;
  border-top-left-radius: 100;
}
.list-group-item:last-child {
  border-bottom-right-radius: 100;
  border-bottom-left-radius: 100;
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
.button, input[type="submit"] {
  padding: 20px 70px;
  box-shadow: 0 2px 1px rgba(0, 0, 0, 0.4);
  text-decoration: none;
  border-radius: 50px;
  border: none;
  display: inline-block;
  margin-bottom: 20px;
  font-size: 30px;
}
.button.primary, input.primary[type="submit"] {
  background: white;
  background: -webkit-linear-gradient(270deg, green, green);
  background: linear-gradient(180deg, green, green);
  color: white;
  font-size: 400px;
}



.button.large, input.large[type="submit"] {
  font-size: 40px;
  font-size: 1.125rem;
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


<div id="myCarousel" class="carousel slide" data-ride="carousel">
 <!-- Indicators -->
 <ol class="carousel-indicators">
  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
  <li data-target="#myCarousel" data-slide-to="1"></li>
  <li data-target="#myCarousel" data-slide-to="2"></li>
</ol>
<!-- Wrapper for slides -->

<div class="item">
 <img src="image10.jpg"  width="1500" height="700">
 <div class="carousel-caption">
  <a href="#shikhun" class="button primary large" ><font size="30px">চলুন শিখি</font></a>
  <h2>কল্পনাশক্তি জ্ঞানের পরিধিকে করে বিশাল.</h2>
</div>
</div>
</div>
 <div id="about" class="container text-center">
         <h3>বিশ্বজোড়া পাঠশালা এর</h3>
         <p><b>সংরক্ষিত বইসমূহ,</b></p>
         <p><b>""আমাদের বই পড়তে হবে,কেননা বই পড়া ছাড়া সাহিত্যচর্চার উপায়ান্তর নেই।ধর্মের চর্চা চাই কি মন্দিরের বাইরেও করা চলে, দর্শনের চর্চা গুহায়,নীতির চর্চা ঘরে এবং বিজ্ঞানের চর্চা জাদুঘর; কিন্তু সাহিত্যের চর্চার জন্য চাই লাইব্রেরি;ও-চর্চা মানুষে কারখানাতেও করতে পারে না; চিড়িয়াখানাতেও নয়।""</b></p>
         <p><b><font size="10px">-প্রমথ চৌধুরী</font></b></p>
            <p>
আমাদের রিসোর্স এর মধ্যে অন্যতম রিসোর্স হল এনসিটিভি কর্তৃক অনুমোদিত ষষ্ঠ থেকে দশম শ্রেণী পর্যন্ত সকল পাঠ্যবই এর পিডিএফ এখানে পাওয়া যাবে।। এখানে সকল অনুমোদিত বইয়ের লিংক দেওয়া আছে।। 
</p>

         <br>
         <div class="row">
            <div class="col-sm-4">
               <p class="text-center"><strong>English For Today,নবম-দশম শ্রেণী </strong></p>
               <br>
               <a href="https://drive.google.com/file/d/1WS_5YsT7e6vTvv3e1VFEixnOGM1FaTM3/view" class="list-group-item list-group-item-success">
               <img src="english9.jpg" class="img-circle person" alt="Random Name" width="100" height="100">
               </a>
              
            </div>
            <div class="col-sm-4">
               <p class="text-center"><strong>চারু ও কারুকলা, অষ্টম শ্রেণী</strong></p>
               <br>
               <a href="https://drive.google.com/file/d/1zGoZ-5i_IKkBZsFc5QSLLKx7Ez_1881W/view
">
               <img src="charukaru.jpg" class="img-circle person" alt="Random Name" width="255" height="255">
               </a>
               
            </div>
            <div class="col-sm-4">
               <p class="text-center"><strong>আনন্দপাঠ,সপ্তম শ্রেণী</strong></p>
               <br>
               <a href="https://drive.google.com/file/d/1xlKZ6HELOSoKcL4F-jWIfzpVprAyabi0/view" class="list-group-item list-group-item-danger" >
               <img src="anondo7.jpg" class="img-circle person" alt="Random Name" width="255" height="255">
               </a>
               
            </div>
         </div>
         <div><p><b>এনসিটিভি এর সকল শ্রেণীর বই পাবেন <a href="/book"> <button class="buttong">এখানে</button></a></b></p></div>
      </div>



<div class="bg-1">
  <div id="shikhun" class="container">
    <h1 class="text-center">পাঠশালায় কি শিখব চলুন দেখি</h1>
    <p class="text-center"><b>""থাকব না কো বদ্ধ ঘরে, দেখব এবার জগৎটাকে,<br>
      কেমন করে ঘুরছে মানুষ যুগান্তরের ঘুর্ণিপাকে।""</b></p>
    <ul class="list-group">
      <li class="list-group-item list-group-item-info">“যাঁরা বলেন বাংলায় বিজ্ঞান চর্চা সম্ভব নয় তাঁরা হয় বাংলা জানেন না অথবা বিজ্ঞান বোঝেন না””<span class="label label-danger">সত্যেন্দ্রনাথ বসু</span></li>
      <li class="list-group-item list-group-item-success">“”তত্ত্বগতভাবে তত্ত্ব ও অনুশীলন  একই জিনিস।অনুশীলনগত ভাবে তারা তা নয়।।””
 <span class="label label-danger">আলবার্ট আইনস্টাইন </span></li> 
      <li class=list-group-item list-group-item-danger">“ স্বপ্ন সেটা নয় যেটা মানুষ, ঘুমিয়ে ঘুমিয়ে দেখে;
স্বপ্ন সেটাই যেটা পূরনের প্রত্যাশা, মানুষকে ঘুমাতে দেয় না। ” <span class="label label-danger">এ পি জে আব্দুল কালাম</span></li> 
    </ul>

    <div class="row text-center">
      <div class="col-sm-4">
        <div class="thumbnail">
          <img id="myImg" alt="Snow" src="videoschool.jpg"  width="400" height="200">
          <p><strong>
এখানে পাবেন বিভিন্ন এক্সপার্টদের বিভিন্ন বিষয়ে আপ্লুড করা ভিডিও টিউটরিয়াল।। ভিডিওগুলো থেকে বাচ্চা থেকে বড়রা সবাই অনেক কিছু শিখতে পারবেন।। ভিডিও গুলো সম্পূর্ণ জ্ঞান এবং শিক্ষার প্রসারে সদস্যরা আপ্লুড করে থাকেন।।
</strong></p>
          <p>এখানে দেখুন</p>
        <a href="/archive/video">  <button class="btn">ভিডিও টিউটরিয়াল</button>
        </a></div>
      </div>
      
      <div class="col-sm-4">
        <div class="thumbnail">
          <img id="myImg" alt="Snow" src="qs.jpg"  width="400" height="300">
          <p><strong>এখানে আপনি যেকোনো বিষয়ে আপনার যেকোন জিজ্ঞাসা থাকলে করতে পারবেন।। হতে পারে তা বিজ্ঞান,সমাজ,দর্শন,স্থাপত্য এছাড়াও বিবিধ।। আমাদের শিক্ষকেরা উত্তর দিবেন আপনার এই জিজ্ঞাসার।।জানার কোন শেষ নাই,জানার চেষ্টা করুন তাই।।
</strong></p>
          <p>এখানে</p>
         <a href="/askquestion"> <button class="btn">জিজ্ঞাসা করুন</button></a>
        </div>
      </div>

      <div class="col-sm-4">
        <div class="thumbnail">
          <img id="myImg" alt="Snow"  src="blgg.jpg" width="400" height="200">
          <p><strong>এখানে পাবেন বিভিন্ন টপিকের উপর শিক্ষণীয়  ব্লগ।। এগুলো পড়ে জানতে পারবেন অনেক অজানা জিনিস।।ব্লগ গুলো খুবই মজাদার এবং চাইলে এখানে আপনি আপভোট এবং ভালো না লাগলে ডাউনভোট ও দিতে পারেন ।। 
          </strong></p>
          <p>এখানে</p>
        <a href="/archive/blog">  <button class="btn">ব্লগ পড়ুন</button></a>
        </div>
      </div>
      <div id="myModal" class="modal">
        <span class="close">&times;</span>
        <img class="modal-content" id="img01">
        <div id="caption"></div>
      </div>
    </div>
  </div>
</div>

<div  class="bg-2">
 <div class="container">
  <h3 class="text-center">যোগাযোগ করুনঃ</h3>

            <div class="row">
               <div class="col-md-4">
                  <p>যোগাযোগ করুনঃ</p>
                  <p><span class="glyphicon glyphicon-map-marker"></span>SUST CSE,SYlHET</p>
                  <p><span class="glyphicon glyphicon-phone"></span>Phone: 01985240328</p>
                  <p><span class="glyphicon glyphicon-envelope"></span>Email: biswajorapathshala@gmail.com</p>
               </div>
             

               <form method="post" action="">
                  @csrf
               <div class="col-md-8">
                  <div class="row">
                     <div class="col-sm-6 form-group">
                        <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
                     </div>
                     <div class="col-sm-6 form-group">
                        <input class="form-control" id="email" name="email" placeholder="Your Email" type="email" required>
                     </div>
                  </div>
                  <textarea class="form-control" id="sms" name="sms" placeholder="Comment" rows="5" required></textarea>
                  <br>
                  <div class="row">
                     <div class="col-md-12 form-group">
                        <button class="btn pull-right" type="submit">Send</button>
                     </div>
                  </div>
               </div>
            </form>

            </div>
</div>
</div>

</body>
</html>