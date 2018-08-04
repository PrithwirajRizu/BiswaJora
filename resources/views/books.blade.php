<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
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

<div class="container">
  
  <h2>২০১৮ শিক্ষাবর্ষের সকল স্তরের পাঠ্যপুস্তকের তালিকা</h2>
  
  <div class="list-group">
    
    <h4>ষষ্ঠ শ্রেণি :</h4>

    <a href="https://drive.google.com/file/d/1rV2_BTSieVUPlSE6C4Mdl1px89HlZ2Hn/view" class="list-group-item list-group-item-success">ষষ্ঠ শ্রেণি-আনন্দ পাঠ(বাংলা দ্রুত পঠন)</a>
    <a href="https://drive.google.com/file/d/19Qnu9xABrV3q_JtBvGa4Jv5WX9_sHGLp/view" class="list-group-item list-group-item-info">ষষ্ঠ শ্রেণি-English for Today</a>
    <a href="https://drive.google.com/file/d/15TNsZYlVmy92hRcH6rgmGMXg9xtDy2rL/view" class="list-group-item list-group-item-warning">ষষ্ঠ শ্রেণি-গণিত</a>

    <h4>সপ্তম শ্রেণি :</h4>

    <a href="https://drive.google.com/file/d/1xlKZ6HELOSoKcL4F-jWIfzpVprAyabi0/view" class="list-group-item list-group-item-danger">সপ্তম শ্রেণি-আনন্দ পাঠ(বাংলা দ্রুত পঠন)</a>
    <a href="https://drive.google.com/file/d/1VAamLGfZsido46So5-_CZZRPr3BxkJcQ/view" class="list-group-item list-group-item-success">সপ্তম শ্রেণি-English for Today</a>
    <a href="https://drive.google.com/file/d/14U6yHDbIc0zo4_7UJCGUYimMG7K7lfJJ/view" class="list-group-item list-group-item-info">সপ্তম শ্রেণি-গণিত</a>

    <h4>অষ্টম শ্রেণি :</h4>

    <a href="https://drive.google.com/file/d/1V0SIQg2nFOCk0uDfMPF0dxsxdNn51OVB/view" class="list-group-item list-group-item-warning">অষ্টম শ্রেণি-আনন্দ পাঠ(বাংলা দ্রুত পঠন)</a>
    <a href="https://drive.google.com/file/d/1US4ZF6tcF4agIcth114_79XQETP6Hsbz/view" class="list-group-item list-group-item-danger">অষ্টম শ্রেণি-English for Today</a>
    <a href="https://drive.google.com/file/d/15oO-ygDQeXIyskE8-DlFSqEhu2r6Vmyp/view" class="list-group-item list-group-item-success">অষ্টম শ্রেণি-গণিত</a>

    <h4>নবম ও দশম শ্রেণি :</h4>

    <a href="https://drive.google.com/file/d/1dOQAVB6usKCoZ7_4HXYvPq7Eb16ihi1z/view" class="list-group-item list-group-item-info">নবম ও দশম শ্রেণি-বাংলা সাহিত্য</a>
    <a href="https://drive.google.com/file/d/18Ks9vG3sZZmsaYd9L5C43Di5mt_vfKQg/view" class="list-group-item list-group-item-warning">নবম ও দশম শ্রেণি-বাংলা সহপাঠ</a>
    <a href="https://drive.google.com/file/d/1Lz44Rw9btpgvBONTWYtDiagkkBwj_QNw/view" class="list-group-item list-group-item-danger">নবম ও দশম শ্রেণি-বাংলা ভাষার ব্যাকরণ</a>
    <a href="https://drive.google.com/file/d/1WS_5YsT7e6vTvv3e1VFEixnOGM1FaTM3/view" class="list-group-item list-group-item-success">নবম ও দশম শ্রেণি-English for Toady</a>
    <a href="https://drive.google.com/file/d/12E6qEgPnF9AwYDwRg24IYwfr8U82MnE5/view" class="list-group-item list-group-item-info">নবম ও দশম শ্রেণি-গণিত</a>
    <a href="https://drive.google.com/file/d/1gL8g0QrjMKYG1kRMsocm0ar9Cm6HxOYe/view" class="list-group-item list-group-item-warning">নবম ও দশম শ্রেণি-উচ্চতর গণিত</a>
    
  </div>
</div>

</body>
</html>