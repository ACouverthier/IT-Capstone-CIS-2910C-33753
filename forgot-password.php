<?php include("include/config.php");  ?>
<?php include("include/header.php");  ?>
<?php 
if(isset($_POST["email"]))
{
$email=mysqli_real_escape_string($con,$_POST["email"]);
 
$sql=" SELECT *FROM `register_user` where  `email`='".$email."'    ";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$num=mysqli_num_rows($result);  
     

if($num>0)
{
 $user=base64_encode($row["username"]);	
 $from = "info@atozweblogic.com" ;
//$from = "sales@vshopi5.com" ;
$to = $email ;
$subject = " Reset Password   ";
$message = "<b>Please Click below link to reset password   "."  "."</b><br/>"." <a href='https://atozweblogic.com/project/quiz/reset-password.php?u=".$user."' target='_blank' >Click Here</a>";                      
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
$headers .= 'From: '.$from."\r\n";
$headers .= "X-Priority: 3\r\n";
$headers .= "X-Mailer: PHP". phpversion() ."\r\n" ;
$retval = mail($to,$subject,$message,$headers);	
 //$_SESSION["contestuser"]=$username;
 //header("location:login.php"); 
 //header("location:index.php");
 $success_msg="We have sent a mail  ";
}
else
{	
 $error_msg=" Invalid Email   "; 
}
  
}

?>

<style>
.contact-area::before { background-color:#139ff0;background-image:none; } 

</style>


<div class="page-banner-area">
<div class="container">
<div class="page-banner-content">
<h2>Forgot Password</h2>
<!--
<ul>
<li>
<a href="index.php">Home</a>
</li>
<li>Forgot Password</li>
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
<label>Enter Your Email ID</label>
<input type="email" name="email" id="email" class="form-control" required="" data-error="Please enter your Username" placeholder="email" required>
<div class="help-block with-errors"></div>
</div>
</div>

<div class="col-lg-12 col-md-12">
<button type="submit" class="default-btn disabled" style="pointer-events: all; cursor: pointer;background:#139ff0;background:#066297;">Submit</button>
<div id="msgSubmit" class="h3 text-center hidden"></div>
<div class="clearfix"></div>
</div>


</div>
</form>
</div>
</div>
</section>

<?php include("include/footer.php");  ?>

