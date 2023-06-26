<?php include("include/config.php");  ?>
<?php if(!isset($_SESSION["contestuser"])) header("location:login.php"); ?>

<?php 
if(isset($_POST["answer"]))
{
 $qid=mysqli_real_escape_string($con,$_POST["qid"]);
 $answer=mysqli_real_escape_string($con,$_POST["answer"]);
 
 $sql=" insert into `quiz_answer` set `quiz_id`='".$qid."',username='".$_SESSION["contestuser"]."',answer='".$answer."'  ";
 mysqli_query($con,$sql);
 header("location:notification.php?msg=1");
 
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
    height: 21px;
    width: 21px;
    line-height: 20px;
    background-color: #4865ff;
    color: #fff;
    font-size: 11px;
    text-align: center;
    border-radius: 50px;
    -webkit-transition: .5s;
    transition: .5s;
}

.goals-content .goals-inner-content h4 {
    font-weight: 500;
    font-size: 18px;
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
  Quizhub
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
   Quizhub
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
<h2>Submit Answer</h2>

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


<section class="about-area bg-ffffff ptb-100">
<div class="container">
<?php 
$sql=" SELECT * FROM `quiz` where id='".base64_decode($_GET["qid"])."'  ";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
?>
<form action="" method="post" id="myform" name="myform">
<input type="hidden" name="qid" value="<?php echo $row["id"]; ?>">
<div class="table-responsive" style="border:1px solid #139ff0;">
<table class="table table-bordered table-striped">


<tbody>

<tr>
<td style="text-align:center;color:#09101f;font-size:20px;"> <?php echo $row["title"]; ?> </td>
<td><input type="text" name="answer" id="answer" style="height:47px;width:100%;" placeholder="Answer:" required=""> </td>
<td> <a href="javascript:void(0);" class="default-btn" style="background:#139ff0;" onclick="submitanswer(<?php echo $row["id"]; ?>);">Submit Answer</a> </td>
</tr>


</tbody>
</table>
</div>
</form>


</div>
</section>



<section class="footer-area pt-100 pb-70">
<div class="container">
<div class="row">
<div class="col-lg-3 col-sm-6">
<div class="single-footer-widget">
<div class="footer-logo">
<h2><a href="index.php">Astute Loot</a></h2>
<p>Lorem ipsum dolor sit amet, consec tetur adipiscing elit, sed do eiusmod tempor incididunt labore et dolore magna aliqua.</p>
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
<li>
<i class='bx bxs-phone'></i>
<span>Phone</span>
<a href="tel:15147939-357">+1 (514) 7939-357</a>
</li>
<li>
<i class='bx bx-envelope'></i>
<span>Email</span>
<a href="https://templates.envytheme.com/cdn-cgi/l/email-protection#4129242d2d2e012d2437246f222e2c"><span class="__cf_email__" data-cfemail="6b030e0707042b070e1d0e45080406">[email&#160;protected]</span></a>
</li>
 <li>
<i class='bx bx-map'></i>
<span>Address</span>
6890 Blvd, The Bronx, NY 1058 <br> New York, USA
</li>
</ul>
</div>
</div>
<div class="col-lg-3 col-sm-6">
<div class="single-footer-widget pl-5">
<h3>Usefull Links</h3>
<ul class="quick-links">
<li>
<a href="#">Home</a>
</li>
<li>
<a href="#">Register</a>
</li>
<li>
<a href="#">Login</a>
</li>
<li>
<a href="#">Result</a>
</li>
<li>
<a href="#">Quiz</a>
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
<a href="#">Contact</a>
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
<script>
function submitanswer(a)
{
 var ans= document.getElementById("answer").value;	
  $.post('submit-answer2.php', {

        pid: a // Use fname.value
		
    }).done(function (msg) {

      //alert(msg);
	//	location.reload();
	if(msg==2)
	{
      alert("Please Login , Then Submit "); 
    }
	
	if(msg==3)
	{
      alert("You Already Submit Answer "); 
    }
		
	if(msg==5)
	{
	  if(ans=="")
      {
        alert("Please write answer");
      }
	  else
	  {	  
       document.myform.submit(); 
      }
	}

    });  	
}	
</script>

</body>


</html>
