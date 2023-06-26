<!doctype html>
<html lang="zxx">

<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link rel="stylesheet" href="assets/css/bootstrap.min.css">

<link rel="stylesheet" href="assets/css/animate.min.css">

<link rel="stylesheet" href="assets/css/meanmenu.css">

<link rel="stylesheet" href="assets/css/boxicons.min.css">

<link rel="stylesheet" href="assets/css/flaticon.css">

<link rel="stylesheet" href="assets/css/nice-select.min.css">

<link rel="stylesheet" href="assets/css/owl.carousel.min.css">

<link rel="stylesheet" href="assets/css/owl.theme.default.min.css">

<link rel="stylesheet" href="assets/css/odometer.min.css">

<link rel="stylesheet" href="assets/css/magnific-popup.min.css">

<link rel="stylesheet" href="assets/css/style.css">

<link rel="stylesheet" href="assets/css/responsive.css">
<title>Astute Loot</title>
<link rel="icon" type="image/png" href="assets/img/favicon.png">
</head>

<style>
.top-header-information li i { color: #f59019;  }
.top-header-others li i {color: #f59019;}
.navbar-light .navbar-brand, .navbar-light .navbar-brand:hover { color: #f59019; }
.main-navbar .navbar .navbar-nav .nav-item a:hover, .main-navbar .navbar .navbar-nav .nav-item a:focus, .main-navbar .navbar .navbar-nav .nav-item a.active {color:#f59019;}  
.main-navbar .navbar .navbar-nav .nav-item a {color: #f59019;}         
.navbar-brand {font-size:1.40rem;}
.protect-content .protect-inner-content .number span {background-color:#f59019; }
.protect-content span {color:#139ff0;}
.preloader {background:#f59019;}
.protect-image {background-image: url(assets/img/hhh.png);}
.single-blog-item .post-content h3 a {
    color: #f59019;
}

.fun-facts-area::before {background-image:none!important;}
.single-fun-fact h3 {color: #f59019;}

.team-area.bg-ffffff .single-team-box .team-content .social li a i { background-color:#139ff0!important;border:1px solid #139ff0!important; }
.single-footer-widget .footer-contact-info li i {     color: #f59019; }
.copyright-area .copyright-area-content p a { color: #f59019; }

.mean-container .mean-nav ul li a {color: #f59019;}

.page-banner-content ul li {color: #fff;}
.page-banner-content ul li::before {background:#fff;}

.page-banner-area {padding-top:60px;padding-bottom:66px;}

.bxl-instagram:before {    
    font-size: 40px;
}

</style>


<body>

<div class="preloader">
<div class="loader">
<div class="shadow"></div>
<div class="box"></div>
</div>
</div>


<div class="top-header-area">
<div class="container">
<div class="row align-items-center">
<div class="col-lg-6">
<ul class="top-header-information">
<!--
<li>
<i class='bx bx-envelope'></i>
<a href=""><span class="__cf_email__" data-cfemail="fa929f969695ba9d979b9396d4999597">[info@Quizygold.com]</span></a>
</li>
<li>
<i class='bx bxs-phone'></i>
<a href="tel:15553125678">+1 (521) 312-5678</a>
</li>
-->
</ul>
</div>
<div class="col-lg-6">
<ul class="top-header-others">

<?php 
if(isset($_SESSION["contestuser"]))
{
?>
<li>
<i class='bx bxs-user'></i>
<a href="logout.php">Logout</a>
</li>
<?php }else{?>

<li>
<i class='bx bxs-user'></i>
<a href="register.php">Register</a>
</li>

<li>
<i class='bx bx-user'></i>
<a href="login.php">Sign In</a>
</li>
<?php } ?>

</ul>
</div>
</div>
</div>
</div>


<div class="navbar-area">
<div class="main-responsive-nav">
<div class="container">
<div class="main-responsive-menu">
<div class="logo">
<a href="index.php" style="color:#f59019;font-size:22px;font-weight:800;"  >
  <!--<img src="assets/img/logo-1.png" alt="image"> -->
  Astute Loot
</a>
</div>
</div>
</div>
</div>
<div class="main-navbar">
<div class="container">
<nav class="navbar navbar-expand-md navbar-light">
<a class="navbar-brand" href="index.php" style="color:#f59019;font-size:24px;" >
   <!--<img src="assets/img/logo-1.png" alt="image"> -->
Astute Loot
</a>
<div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
<ul class="navbar-nav">
<li class="nav-item">
<a href="index.php" class="nav-link">
Home
</a>
</li>

<li class="nav-item">
<a href="quiz.php" class="nav-link">
Quiz
</a>
</li>

<li class="nav-item">
<a href="about.php" class="nav-link">
About
</a>
</li>

<?php 
if(isset($_SESSION["contestuser"]))
{
?>
<li class="nav-item">
<a href="account.php" class="nav-link">
Account
</a>
</li>
<?php } ?>

<li class="nav-item">
<a href="help.php" class="nav-link">
Help
</a>
</li>



</ul>
<div class="others-options d-flex align-items-center">
<!--
<div class="option-item">
<form class="search-box">
<input type="text" class="form-control" placeholder="Search for..">
<button type="submit"><i class="flaticon-loupe"></i></button>
</form>
</div>-->

<!--
<div class="option-item">
<a href="join-contest.php" class="default-btn" style="background:#139ff0;" >Join Contest</a>
</div>-->

</div>
</div>
</nav>
</div>
</div>
<div class="others-option-for-responsive">
<div class="container">
<div class="dot-menu">
<div class="inner">
<div class="circle circle-one"></div>
<div class="circle circle-two"></div>
<div class="circle circle-three"></div>
</div>
</div>
<div class="container">
<div class="option-inner">
<div class="others-options d-flex align-items-center">
<!--
<div class="option-item">
<form class="search-box">
<input type="text" class="form-control" placeholder="Search for..">
<button type="submit"><i class="flaticon-loupe"></i></button>
</form>
</div>-->

<!--
<div class="option-item">
<a href="join-contest.php" class="default-btn" style="background:#139ff0;" >Join Contest</a>
</div>-->

</div>
</div>
</div>
</div>
</div>
</div>