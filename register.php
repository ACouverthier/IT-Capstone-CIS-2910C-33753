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
.page-banner-area {background-image:none;}
.page-banner-content ul li {color: #fff;}
.page-banner-content ul li::before {background:#fff;}

.page-banner-area {padding-top:60px;padding-bottom:66px;}

.bxl-instagram:before {    
    font-size: 40px;
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
<h2>Register</h2>
<!--
<ul>
<li>
<a href="index.php">Home</a>
</li>
<li>Register</li>
</ul>
-->

</div>
</div>
</div>


<section class="contact-area ptb-100">
<div class="container">
<div class="section-title">
<h2>Create An Account</h2>
<?php if(isset($error_msg)){ ?><p style="color:red;font-size:20px;font-weight:800;" > <?php echo $error_msg; ?> </p> <?php } ?>

<!--<p>To Join Quiz Contest , Please enter your personal information city , zip , address and register. </p>-->
</div>
<div class="contact-form">

<?php if(isset($success_msg)){ ?><p style="color:green;font-size:20px;font-weight:800;" > <?php echo $success_msg; ?> </p> <?php } ?>

<form  action="" method="post" >

<div class="row">

<div class="col-lg-6 col-md-6">
<div class="form-group">
<label>Full name</label>
<input type="text" name="fullname" id="fullname" class="form-control" required="" data-error="Please enter your name" placeholder="Full name">
<div class="help-block with-errors"></div>
</div>
</div>

<div class="col-lg-6 col-md-6">
<div class="form-group">
<label>Email</label>
<input type="email" name="email" id="email" class="form-control" required="" data-error="Please enter your email" placeholder="Email">
<div class="help-block with-errors"></div>
</div>
</div>

<div class="col-lg-6 col-md-6">
<div class="form-group">
<label>Country</label>
<select name="country" id="country"  class="form-control">
<?php 
$sql=" SELECT *FROM `countries` order by `name`  ";
$result=mysqli_query($con,$sql);
while($row=mysqli_fetch_assoc($result))
{
?>
<option value="<?php echo $row["id"]; ?>" ><?php echo $row["name"]; ?></option>
<?php } ?>

</select>
<div class="help-block with-errors"></div>
</div>
</div>

<div class="col-lg-6 col-md-6">
<div class="form-group">
<label>City</label>
<input type="text" name="city" required="" data-error="Please enter your city" class="form-control" placeholder="City">
<div class="help-block with-errors"></div>
</div>
</div>

<div class="col-lg-6 col-md-6">
<div class="form-group">
<label>Address</label>
<input type="text" name="address" required="" data-error="Please enter your address" class="form-control" placeholder="Address">
<div class="help-block with-errors"></div>
</div>
</div>

<div class="col-lg-6 col-md-6">
<div class="form-group">
<label>Username</label>
<input type="text" name="username" id="username" required="" data-error="Please enter your username" class="form-control" placeholder="Username">
<div class="help-block with-errors"></div>
</div>
</div>

<div class="col-lg-6 col-md-6">
<div class="form-group">
<label>Password</label>
<input type="text" name="password" id="password" required="" data-error="Please enter your password" class="form-control" placeholder="Password">
<div class="help-block with-errors"></div>
</div>
</div>



<div class="col-lg-12">
<div class="form-check">
<input type="checkbox" class="form-check-input" id="checkme" required>
<label class="form-check-label" for="checkme">
Accept <a href="terms-of-service.html">Terms of Services</a> and <a href="privacy-policy.html">Privacy Policy.</a>
</label>
</div>
</div>


<div class="col-lg-12 col-md-12">
<button type="submit" class="default-btn disabled" style="pointer-events: all; cursor: pointer;background:#139ff0;background:#066297;">Register</button>
<div id="msgSubmit" class="h3 text-center hidden"></div>
<div class="clearfix"></div>
</div>


</div>
</form>
</div>
</div>
</section>


<section class="footer-area pt-100 pb-70">
<div class="container">
<div class="row">


<div class="col-lg-4 col-sm-6">
<div class="single-footer-widget">
<h3>Contact</h3>
<ul class="footer-contact-info">

<!--
<li>
<i class='bx bxs-phone'></i>
<span>Phone</span>
<a href="tel:15147939-357">+1 (514) 7939-357</a>
</li>-->


<li>
<i class='bx bx-envelope'></i>
<span>Email</span>
info@quizygold.com
</li>
 <li>
<i class='bx bx-map'></i>
<span>Address</span>
United Kingdom <br> Edinburgh

</li>
</ul>
</div>
</div>
<div class="col-lg-4 col-sm-6">
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
<a href="result.php">Result</a>
</li>
<li>
<a href="about.php">About</a>
</li>
<li>
<a href="help.php">Help</a>
</li>

</ul>
</div>
</div>
<div class="col-lg-4 col-sm-6">
<div class="single-footer-widget">
<h3>Legal</h3>
<ul class="quick-links">


<li>
<a href="terms.php">Terms of Use</a>
</li>
<li>
<a href="privacy.php">Privacy Policy</a>
</li>
<li>
<a href="cookies.php">Cookies</a>
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

