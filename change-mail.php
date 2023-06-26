<?php include("include/config.php");  ?>
<?php include("include/header.php");  ?>
<?php 
if(isset($_POST["email"]))
{
$email=mysqli_real_escape_string($con,$_POST["email"]);
$email2=mysqli_real_escape_string($con,$_POST["email2"]);

if($email!=$email2)
{
 $error_msg=" Email and confirm email not match "; 
}
else
{
  $sql3=" SELECT *FROM `register_user` where  `email`='".$email."'   ";
  $result3=mysqli_query($con,$sql3);
  $num3=mysqli_num_rows($result3); 	
  	
  if($num3>0)
  {
   $error_msg=" Email exist , please change   "; 
  }
  else
  {	  
   $sql2=" update  `register_user`  set `email`='".$email."' where  `username`='".$_SESSION["contestuser"]."'   ";
   mysqli_query($con,$sql2);
   $success_msg="Email update success!!!";
  }
}	
   
}

?>

<style>
.contact-area::before { background-color:#139ff0;background-image:none; } 

</style>


<div class="page-banner-area">
<div class="container">
<div class="page-banner-content">
<h2>Change Email</h2>
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

<?php
$sql=" SELECT *FROM `register_user` where  `username`='".$_SESSION["contestuser"]."'    ";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
?>

<form  action="" method="post" >
<input type="hidden" name="oldmail" value="<?php echo $row["email"]; ?>"  >

<div class="row">

<div class="col-lg-12 col-md-12">
<div class="form-group">
<label>New Email</label>
<input type="email" name="email" id="password" class="form-control" required="" data-error="Please enter your new Email" placeholder="Please enter your new Email" required>
<div class="help-block with-errors"></div>
</div>
</div>

<div class="col-lg-12 col-md-12">
<div class="form-group">
<label>Confirm Email</label>
<input type="email" name="email2" id="password2" class="form-control" required="" data-error="Please enter your new Password" placeholder="Confirm Email" required>   
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

