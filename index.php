<?php include("include/config.php");  ?>

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

<?php 
$sql=" SELECT * FROM `contact_information` limit 1  ";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
?>

<li>
<i class='bx bx-envelope'></i>
<a href=""><span class="__cf_email__" data-cfemail="fa929f969695ba9d979b9396d4999597">[<?php echo $row["email"]; ?>]</span></a>
</li>
<li>
<i class='bx bxs-phone'></i>
<a href="tel:15553125678"><?php echo $row["phone"]; ?></a>
</li>
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

<div class="option-item">
<a href="quiz.php" class="default-btn" style="background:#139ff0;" >Join Contest</a>
</div>

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

<div class="option-item">
<a href="" class="default-btn" style="background:#139ff0;" >Join Contest</a>
</div>

</div>
</div>
</div>
</div>
</div>
</div>


<div class="main-banner">
<div class="main-banner-item">
<div class="container">
<div class="row align-items-center">
<div class="col-lg-6">
<div class="main-banner-content">
<?php 
$sql="  SELECT *FROM `slider` order by id desc limit 1   ";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
?>

<h1><?php echo $row["heading"]; ?> </h1>
<p>   </p>
<div class="banner-btn">
<a href="https://astuteloot.net/register.php" class="default-btn" style="background-color:#139ff0;" >Get started</a>
</div>
</div>
</div>
<div class="col-lg-6">
<div class="main-banner-image">
<img src="admin/<?php echo $row["image"]; ?>" alt="image">
<!--
<div class="banner-mobile">
<img src="assets/img/main-banner/banner-mobile.png" alt="image">
</div>-->

</div>
</div>
</div>
</div>
</div>
<div class="main-banner-shape">
<div class="shape-1">
<img src="assets/img/main-banner/banner-shape-1.png" alt="image">
</div>
</div>
</div>


<section class="protect-area pt-100 pb-70">
<div class="container-fluid">
<div class="row">
<div class="col-lg-6">
<div class="protect-content">
<span>Interested?</span>
<h3>How to get started</h3>
<p>  </p>
<div class="protect-inner-content">
<div class="number">
<span>1</span>
</div>
<h4>Register</h4>
<p>First register your account to our platform!</p>
</div>
<div class="protect-inner-content">
<div class="number">
<span>2</span>
</div>
<h4>Choose a quiz which is open </h4>
<p>Browse our selection of quizzes and submit an answer if you know it!</p>
</div>
<div class="protect-inner-content">
<div class="number">
 <span>3</span>
</div>
<h4>Win Prize</h4>
<p>Check Result when quiz closes to see if you answered correctly and win your gold!</p>
</div>
</div>
</div>
<div class="col-lg-6">
<div class="protect-image"></div>
</div>
</div>
</div>
</section>


<section class="blog-area pt-100 pb-100">
<div class="container-fluid">
<div class="row">

<?php 
$sql=" SELECT * FROM `quiz`  where `start_date`<now() and `end_date`>now()  ";
$result=mysqli_query($con,$sql);
while($row=mysqli_fetch_assoc($result))
{
?>
<div class="col-lg-3 col-md-6">
<div class="single-blog-item">
<div class="post-image">
<img src="admin/<?php echo $row["image"]; ?>" alt="image">
</div>
<div class="post-content">
<h3>
<a href="javascript:void(0);">Prize Pool <span><?php echo $row["credit"]; ?>cr</span></a>
</h3>
<ul class="post-meta">

<li>
<i class="bx bx-time"></i>
Closes: <?php echo $row["end_date"]; ?>
</li>
</ul>
<p>  </p>
<a href="submit-answer.php?qid=<?php echo base64_encode($row["id"]); ?>" class="default-btn" style="background:#139ff0;" >Play Now <i class="flaticon-right-arrow"></i></a>
</div>
</div>
</div>
<?php } ?>



</div>
</div>
</section>


<section class="fun-facts-area ptb-100" style="background-color:#139ff0!important;" >
<div class="container">
<div class="section-title">
<span>Why choose us</span>
<h2>This is by far the most fun you will have filling out a quiz! It's gonna have all the subjects you love!</h2>
</div>
<div class="fun-facts-inner">
<div class="row">
<div class="col-lg-3 col-md-6 col-sm-6">
<div class="single-fun-fact">
<h3>
<span class="odometer" data-count="13">00</span>
</h3>
<p>Happy users</p>
</div>
</div>
<div class="col-lg-3 col-md-6 col-sm-6">
<div class="single-fun-fact">
<h3>
<span class="odometer" data-count="10">00</span>
</h3>
<p>Quizzes every week</p>
</div>
</div>
<div class="col-lg-3 col-md-6 col-sm-6">
<div class="single-fun-fact">
<h3>
<span class="odometer" data-count="10">00</span>
</h3>
<p>Prizes</p>
</div>
</div>
<div class="col-lg-3 col-md-6 col-sm-6">
<div class="single-fun-fact">
<h3>
<span class="odometer" data-count="13">00</span>
</h3>
<p>Register Users</p>
</div>
</div>
</div>
</div>
</div>
</section>

<section class="team-area bg-ffffff pt-100 pb-70">
<div class="container">
<div class="section-title">
<span>  </span>
<h2 style="color:#f59019;" > Latest Winners </h2>
</div>
<div class="row">

<div class="col-lg-4 col-md-6">
<div class="single-team-box">
<div class="team-image">
<img src="assets/img/team/team-1.jpg" alt="image">
</div>
<div class="team-content">
<ul class="social">
</ul>
<h3>Mark Torres</h3>
<span>100 Gold</span>
</div>
</div>
</div>


<div class="col-lg-4 col-md-6">
<div class="single-team-box">
<div class="team-image">
<img src="assets/img/team/team-2.jpg" alt="image">
</div>
<div class="team-content">
<ul class="social">
</ul>
<h3>Gabbie Reyes</h3>
<span>300 Gold</span>
</div>
</div>
</div>


<div class="col-lg-4 col-md-6">
<div class="single-team-box">
<div class="team-image">
<img src="assets/img/team/team-3.jpg" alt="image">
</div>
<div class="team-content">
<ul class="social">
</ul>
<h3>Riley Dougherty</h3>
<span>9001 gold</span>
</div>
</div>
</div>

<div class="col-lg-4 col-md-6">
<div class="single-team-box">
<div class="team-image">
<img src="assets/img/team/team-4.jpg" alt="image">
</div>
<div class="team-content">
<ul class="social">
</ul>
<h3>Angela Yella</h3>
<span>1200 Gold</span>
</div>
</div>
</div>

<div class="col-lg-4 col-md-6">
<div class="single-team-box">
<div class="team-image">
<img src="assets/img/team/team-5.jpg" alt="image">
</div>
<div class="team-content">
<ul class="social">
</ul>
<h3>Kelley Miles</h3>
<span>100 Gold</span>
</div>
</div>
</div>

<div class="col-lg-4 col-md-6">
<div class="single-team-box">
<div class="team-image">
<img src="assets/img/team/team-6.jpg" alt="image">
</div>
<div class="team-content">
<ul class="social">
</ul>
<h3>Connie Wilder</h3>
<span>600 Gold</span>
</div>
</div>
</div>

</div>
</div>
</section>

<div class="table-area pb-100">
<div class="container">
<div class="section-title">
<h3 style="color:#f59019;" > Check out this week's quizzes </h3>
</div>
<div class="table-responsive">
<table class="table table-bordered table-striped">
<thead>
<tr>
<th>
##
</th>
<th>
Quiz
</th>
<th>
 
</th>
</tr>
</thead>
<tbody>
<?php
$c=1; 
$sql=" SELECT * FROM `quiz`  where `start_date`<now() and `end_date`>now()  ";
$result=mysqli_query($con,$sql);
while($row=mysqli_fetch_assoc($result))
{
?>
<tr>
<th>#<?php echo $c; ?></th>
<td><?php echo $row["title"]; ?></td>
<td> <a href="submit-answer.php?qid=<?php echo base64_encode($row["id"]); ?>" class="default-btn" style="background:#139ff0;">Submit Answer</a>  </td>
</tr>
<?php $c++; } ?>

</tbody>
</table>
 </div>
</div>
</div>



<section class="customer-area ptb-100">
<div class="container">
<div class="section-title">
<span> </span>
<h2>What Users say about Us</h2>
</div>
<div class="customer-slider owl-carousel owl-theme">

<?php 
$sql=" SELECT * FROM `testimonial`   ";
$result=mysqli_query($con,$sql);
while($row=mysqli_fetch_assoc($result))
{
?>

<div class="customer-item">
<img src="admin/<?php echo $row["image"]; ?>" alt="image">
<p> <?php echo $row["description"]; ?>  </p>
<div class="customer-info">
<h3> <?php echo $row["name"]; ?>  </h3>
<span><?php echo $row["city"]; ?></span>
</div>
<div class="icon">
<i class="flaticon-right-quotation-mark"></i>
</div>
</div>

<?php } ?>




</div>
</div>
</section>



<section class="footer-area pt-100 pb-70">
<div class="container">
<div class="row">
<div class="col-lg-3 col-sm-6">
<div class="single-footer-widget">
<div class="footer-logo">
<h2><a href="index.php">Quizhub</a></h2>
<?php 
$sql=" SELECT *FROM `about_us` limit 1  ";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
?>
<p><?php echo substr($row["text"],0,300); ?></p>
<ul class="social">
<li>
<a href="#" class="facebook" target="_blank">
<i class='bx bxl-facebook'></i>
</a>
</li>
<li>
<a href="#" class="twitter" target="_blank">
<i class='bx bxl-twitter'></i>
</a>
</li>
<li>
<a href="#" class="pinterest" target="_blank">
<i class='bx bxl-instagram'></i>
</a>
</li>
<li>
<a href="#" class="linkedin" target="_blank">
<i class='bx bxl-linkedin'></i>
</a>
</li>
</ul>
</div>
</div>
</div>
<div class="col-lg-3 col-sm-6">
<div class="single-footer-widget">
<h3>Contact</h3>
<ul class="footer-contact-info">

<?php 
$sql=" SELECT *FROM `contact_information` limit 1  ";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
?>
<li>
<i class='bx bxs-phone'></i>
<span>Phone</span>
<a href="tel:<?php echo $row["phone"]; ?>">+<?php echo $row["phone"]; ?></a>
</li>
<li>
<i class='bx bx-envelope'></i>
<span>Email</span>
<a href="javascript:void(0);"><span class="__cf_email__" data-cfemail="6b030e0707042b070e1d0e45080406">[<?php echo $row["email"]; ?>]</span></a>
</li>
 <li>
<i class='bx bx-map'></i>
<span>Address</span>
<?php echo $row["address"]; ?>
</li>
</ul>
</div>
</div>
<div class="col-lg-3 col-sm-6">
<div class="single-footer-widget pl-5">
<h3>Quick Links</h3>
<ul class="quick-links">
<li>
<a href="index.php">Home</a>
</li>
<li>
<a href="register.php">Register</a>
</li>
<li>
<a href="login.php">Login</a>
</li>

<li>
<a href="quiz.php">Quiz</a>
</li>

</ul>
</div>
</div>
<div class="col-lg-3 col-sm-6">
<div class="single-footer-widget">
<h3>Help & guidance</h3>
<ul class="quick-links">
<li>
<a href="#">Terms and Conditions</a>
</li>
<li>
<a href="help.php">Contact</a>
</li>
<li>
<a href="#">Support</a>
</li>
<li>
<a href="#">Managing your money</a>
</li>

</ul>
</div>
</div>
</div>
</div>
</section>


<div class="copyright-area">
<div class="container">
<div class="copyright-area-content">
<p>
Copyright © 2023 Astute Loot. All Rights Reserved by
<a href="" target="_blank">Astute Loot</a>
</p>
</div>
</div>
</div>


<div class="go-top">
<i class='bx bx-up-arrow-alt'></i>
</div>


<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/js/jquery.min.js"></script>

<script src="assets/js/popper.min.js"></script>

<script src="assets/js/bootstrap.min.js"></script>

<script src="assets/js/jquery.meanmenu.js"></script>

<script src="assets/js/jquery.nice-select.min.js"></script>

<script src="assets/js/owl.carousel.min.js"></script>

<script src="assets/js/jquery.magnific-popup.min.js"></script>

<script src="assets/js/odometer.min.js"></script>

<script src="assets/js/jquery.appear.min.js"></script>

<script src="assets/js/jquery.ajaxchimp.min.js"></script>

<script src="assets/js/form-validator.min.js"></script>

<script src="assets/js/contact-form-script.js"></script>

<script src="assets/js/wow.min.js"></script>

<script src="assets/js/main.js"></script>
</body>


</html>