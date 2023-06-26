<?php include("include/config.php");  ?>
<?php include("include/header.php");  ?>
<?php 
if(isset($_POST["password"]))
{
$password2=mysqli_real_escape_string($con,$_POST["password2"]);
$password=mysqli_real_escape_string($con,$_POST["password"]);

if($password!=$password2)
{
 $error_msg=" Password and confirm password not match "; 
}
else
{
  $sql2=" update  `register_user`  set `password`='".$password."' where  `username`='".$_SESSION["contestuser"]."'   ";
  mysqli_query($con,$sql2);
  $success_msg="Password update success!!!";
}	
   
}

?>

<style>
.contact-area::before { background-color:#139ff0;background-image:none; } 

</style>


<div class="page-banner-area">
<div class="container">
<div class="page-banner-content">
<h2>Change Password</h2>
<!--
<ul>
<li>
<a href="index.php">Home</a>
</li>
<li>Change Password</li>
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
<label>New Password</label>
<input type="text" name="password" id="password" class="form-control" required="" data-error="Please enter your new Password" placeholder="Password" required>
<div class="help-block with-errors"></div>
</div>
</div>

<div class="col-lg-12 col-md-12">
<div class="form-group">
<label>Confirm Password</label>
<input type="password" name="password2" id="password2" class="form-control" required="" data-error="Please enter your new Password" placeholder="Confirm Password" required>   
<div class="help-block with-errors"></div>
</div>
</div>


<div class="col-lg-12 col-md-12">
<button type="submit" class="default-btn disabled" style="pointer-events: all; cursor: pointer;background:#066297;">Submit</button>
<div id="msgSubmit" class="h3 text-center hidden"></div>
<div class="clearfix"></div>
</div>


</div>
</form>
</div>
</div>
</section>

<?php include("include/footer.php");  ?>

