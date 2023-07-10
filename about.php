<?php include("include/config.php");  ?>
<?php include("include/header.php");  ?>


<div class="page-banner-area">
<div class="container">
<div class="page-banner-content">
<h2>About Us</h2>

</div>
</div>
</div>



<section class="blog-area bg-container-width pt-100 pb-100">
<div class="container">
<div class="row">


<div class="col-lg-9 col-md-9">
<div class="single-blog-item">
<div class="post-content">
<h3 style="padding-bottom:30px;" >Our Story</h3>
<?php 
$sql="SELECT * FROM `about_us` limit 1 ";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
?>
<p>
<?php  echo $row["text"]; ?>
</p>

</div>
<div class="post-image">
<img src="admin/<?php  echo $row["image"]; ?>" alt="image">
</div>
</div>
</div>




</div>
</div>
</section>



<section class="banking-area bg-ffffff ptb-100">
<div class="container-fluid">
<div class="row">
<div class="col-lg-8" style="text-align:center;" >
<div class="banking-image-warp" style="background-image:none;" >


</div>
</div>

</div>
</div>
</section>

<?php include("include/footer.php");  ?>
