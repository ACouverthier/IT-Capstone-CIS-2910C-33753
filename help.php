<?php include("include/config.php");  ?>

<?php 
if(isset($_POST["fullname"]))
{
$fullname=mysqli_real_escape_string($con,$_POST["fullname"]);
$email=mysqli_real_escape_string($con,$_POST["email"]);
$country=mysqli_real_escape_string($con,$_POST["country"]);
$city=mysqli_real_escape_string($con,$_POST["city"]);
$address=mysqli_real_escape_string($con,$_POST["address"]);
$username=mysqli_real_escape_string($con,$_POST["username"]);
$password=mysqli_real_escape_string($con,$_POST["password"]);
 
$sql=" SELECT *FROM `register_user` where  `username`='".$username."'   ";
$result=mysqli_query($con,$sql);
$num=mysqli_num_rows($result);  
  
$sql2=" SELECT *FROM `register_user` where  `email`='".$email."'   ";
$result2=mysqli_query($con,$sql2);
$num2=mysqli_num_rows($result2);  

if($num>0)
{
 $error_msg=" Username Exist ";
}	
else if($num2>0)
{
 $error_msg2=" Email  Exist ";
}
else
{	
 $sql2=" insert into `register_user` set `name`='".$fullname."',email='".$email."',country='".$country."',city='".$city."',address='".$address."',username='".$username."',password='".$password."'  ";  
 mysqli_query($con,$sql2);
 $success_msg="Register Success!!!";
}
  
}

if(isset($_POST["yourname"]))
{
  $success_msg="Message Success!!!";
}
?>

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

<style>
.goals-content .goals-inner-content .number span {
    display: inline-block;
    height: 30px;
    width: 30px;
    line-height: 31px;
    background-color: #4865ff;
    color: #fff;
    font-size: 17px;
    text-align: center;
    border-radius: 50px;
    -webkit-transition: .5s;
    transition: .5s;
}

.goals-content .goals-inner-content h4 {
    font-weight: 500;
    font-size: 26px;
    margin-bottom: 10px;
}

</style>

<style>
.contact-form {
    padding-top: 0;
    box-shadow: none;
}
</style>


<body>

<!--
<div class="preloader">
<div class="loader">
<div class="shadow"></div>
<div class="box"></div>
</div>
</div> -->


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


<style>
.contact-area::before { background-color:#139ff0;background-image:none; } 

</style>


<div class="page-banner-area">
<div class="container">
<div class="page-banner-content">
<h2>Help</h2>

<!--
<ul>
<li>
<a href="index.php">Home</a>
</li>
<li>Help</li>
</ul>-->

</div>
</div>
</div>


<section class="about-area bg-ffffff ptb-100" style="padding-top:0;" >
<div class="container">
<div class="row">
<div class="col-lg-4  contact-form">
<div class="about-content-warp">
<h3 style="text-align:center;">Contact: </h3>

<form action="" method="post">
<div class="form-group">
<label>Name</label>
<input type="text" name="yourname" id="yourname" class="form-control"  data-error="Please enter your Name" placeholder="your Name" required >
<div class="help-block with-errors"></div>
</div>



<div class="form-group">
<label>Email</label>
<input type="email" name="email" id="email" class="form-control"  data-error="Please enter your email" placeholder="Email" required >
<div class="help-block with-errors"></div>
</div>



<div class="form-group">
<label>Subject</label>
<input type="text" name="subject" id="subject" class="form-control"  data-error="Please enter subject" placeholder="Subject" required>
<div class="help-block with-errors"></div>
</div>



<div class="col-lg-12 col-md-12">
<div class="form-group">
<label>Message</label>
<textarea class="form-control" name="msg" style="height:150px;" required></textarea>
<div class="help-block with-errors"></div>
</div>
</div>



<button type="submit" class="default-btn disabled" style="pointer-events: all; cursor: pointer;background:#139ff0;background:#066297;">Submit</button>
<div id="msgSubmit" class="h3 text-center hidden"></div>
<div class="clearfix"></div>
</form>
</div>
</div>


<div class="col-lg-5">
<div class="about-content-warp">
<span> </span>
<h3 style="text-align:center;"  >FAQ: </h3>

<div class="accordion" id="accordionExample">
  
  <?php 
  $d=1;
  $sql="SELECT *FROM `question_answer`  ";
  $result=mysqli_query($con,$sql);
  while($row=mysqli_fetch_assoc($result))
  {
  ?>
  
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingOne<?php echo $d; ?>">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne<?php echo $d; ?>" aria-expanded="true" aria-controls="collapseOne<?php echo $d; ?>">
        <?php echo $row["question"]; ?>
      </button>
    </h2>
    <div id="collapseOne<?php echo $d; ?>" class="accordion-collapse collapse " aria-labelledby="headingOne<?php echo $d; ?>" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <?php echo $row["answer"]; ?>
      </div>
    </div>
  </div>
  <?php $d++; } ?>
  
    
  
</div>




<!--
<ul class="about-warp-list">
<li>
<i class="flaticon-check"></i>
consectetur adipiscing elit
</li>
<li>
<i class="flaticon-check"></i>
Labore et dolore magna aliqua.
</li>
 <li>
<i class="flaticon-check"></i>
Quis ipsum suspendisse ultrices gravida.
</li>
<li>
<i class="flaticon-check"></i>
Risus commodo viverra maecenas accumsan.
</li>
</ul>
-->

</div>
</div>
<div class="col-lg-3">

<div class="goals-content" style="padding-top:50px;padding-bottom:50px;" >
<h3 style="text-align:center;" >Tips:</h3>

<?php 
$c=1;
$sql=" SELECT *FROM `tips` order by id asc   ";
$result=mysqli_query($con,$sql);
while($row=mysqli_fetch_assoc($result))
{	
?>
<div class="goals-inner-content">
<div class="number">
<span><?php echo $c; ?></span>
</div>
<h4><?php echo $row["title"]; ?></h4>
<!--<p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>-->
</div>
<?php $c++; } ?>

</div>

</div>
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
<h3>Usefull Links</h3>
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
Copyright © <?php echo date('Y'); ?> Astute Loot. All Rights Reserved by
<span style="color:#f59019;" >Astute Loot</span>
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

<!--<script src="assets/js/jquery.nice-select.min.js"></script> -->

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

