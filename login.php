<?php include("include/config.php");  ?>
<?php include("include/header.php");  ?>
<?php 
if(isset($_POST["username"]))
{
$username=mysqli_real_escape_string($con,$_POST["username"]);
$password=mysqli_real_escape_string($con,$_POST["password"]);
 
$sql=" SELECT *FROM `register_user` where  `username`='".$username."' and `password`='".$password."'   ";
$result=mysqli_query($con,$sql);
$num=mysqli_num_rows($result);  
     

if($num>0)
{
 $_SESSION["contestuser"]=$username;
 //header("location:login.php"); 
 header("location:index.php");
}
else
{	
 $error_msg=" Invalid Login Details  "; 
}
  
}

?>

<style>
.contact-area::before { background-color:#139ff0;background-image:none; } 

</style>


<div class="page-banner-area">
<div class="container">
<div class="page-banner-content">
<h2>Login</h2>
<!--
<ul>
<li>
<a href="index.php">Home</a>
</li>
<li>Login</li>
</ul>-->


</div>
</div>
</div>


<section class="contact-area ptb-100">
<div class="container">

<?php if(isset($error_msg)){ ?><p style="color:red;font-size:20px;font-weight:800;text-align:center;" ><?php echo $error_msg; ?> </p> <?php } ?> 

<!--
<div class="section-title">
<h2>Login</h2>
<p style="color:red;font-size:20px;font-weight:800;" > </p> 
<p>To Join Quiz Contest , Please enter your personal information city , zip , address and register. </p>
</div>
-->

<div class="contact-form">

<?php if(isset($success_msg)){ ?><p style="color:green;font-size:20px;font-weight:800;" > <?php echo $success_msg; ?> </p> <?php } ?>

<form  action="" method="post" >

<div class="row">

<div class="col-lg-12 col-md-12">
<div class="form-group">
<label>Username</label>
<input type="text" name="username" id="username" class="form-control" required="" data-error="Please enter your Username" placeholder="Username">
<div class="help-block with-errors"></div>
</div>
</div>

<div class="col-lg-12 col-md-12">
<div class="form-group">
<label>Password</label>
<input type="password" name="password" id="password" class="form-control" required="" data-error="Please enter your Password" placeholder="Password">
<div class="help-block with-errors"></div>
</div>
</div>


<div class="col-lg-12 col-md-12">
<button type="submit" class="default-btn disabled" style="pointer-events: all; cursor: pointer;background:#139ff0;background:#066297;">Submit</button>
<div id="msgSubmit" class="h3 text-center hidden"></div>
<div class="clearfix"></div>
</div>

<p style="padding-top:40px;" ><a href="forgot-password.php" style="color:#f59019;font-weight:600;" >Forgot your Password ?</a></p>


</div>
</form>
</div>
</div>
</section>

<?php include("include/footer.php");  ?>

