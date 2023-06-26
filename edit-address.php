<?php include("include/config.php");  ?>
<?php include("include/header.php");  ?>
<?php  if(!isset($_SESSION["contestuser"])) header("location:login.php");   ?>



<?php 
if(isset($_POST["city"]))
{
$city=mysqli_real_escape_string($con,$_POST["city"]);
$address=mysqli_real_escape_string($con,$_POST["address"]);

  $sql2=" update  `register_user`  set `address`='".$address."',`city`='".$city."' where  `username`='".$_SESSION["contestuser"]."'   ";
  mysqli_query($con,$sql2);
  $success_msg=" update success!!!";
	
   
}

?>

<style>
.contact-area::before { background-color:#139ff0;background-image:none; } 

</style>


<div class="page-banner-area">
<div class="container">
<div class="page-banner-content">
<h2>Edit Address</h2>
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


<?php
$sql=" select *from   `register_user`   where  `username`='".$_SESSION["contestuser"]."'   ";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
?>
<div class="col-lg-12 col-md-12">
<div class="form-group">
<label>City</label>
<input type="text" name="city" id="city" class="form-control" value="<?php echo $row["city"]; ?>" required="" data-error="Please enter your city" placeholder="Please enter your city" required>
<div class="help-block with-errors"></div>
</div>
</div>

<div class="col-lg-12 col-md-12">
<div class="form-group">
<label>Address</label>
<input type="text" name="address" id="address" class="form-control" value="<?php echo $row["address"]; ?>" required="" data-error="Please enter your new Address" placeholder="Please enter your new Address" required>   
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

