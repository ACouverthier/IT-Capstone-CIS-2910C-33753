<?php include("include/config.php");  ?>
<?php include("include/header.php");  ?>


<div class="page-banner-area">
<div class="container">
<div class="page-banner-content">
<h2>Notification</h2>
<!--
<ul>
<li>
<a href="index.php">Home</a>
</li>
<li>Notification</li>
</ul>-->


</div>
</div>
</div>


<section class="about-area bg-ffffff ptb-100">
<div class="container">
<div class="row">
<div class="col-lg-12">
<div class="about-content-warp">
<span> </span>
<!--<h3>Notification </h3>-->

<?php if(isset($_GET["msg"])){ if($_GET["msg"]==1){ ?>
<p style="color:green;font-size:23px;font-weight:600;text-align:center;" ><span style="color:green;font-size:34px;" >&#10004;</span>Your Answer Submit Success!!! </p>
<?php } } ?>

<?php if(isset($_GET["msg"])){ if($_GET["msg"]==2){ ?>
<p style="color:green;font-size:23px;font-weight:600;text-align:center;" ><span style="color:green;font-size:34px;" >&#10004;</span>Your Subscription Success!!! </p>
<?php } } ?>

<?php if(isset($_GET["msg"])){ if($_GET["msg"]==3){ ?>
<p style="color:green;font-size:23px;font-weight:600;text-align:center;" ><span style="color:green;font-size:34px;" >&#10004;</span>Your account delete Success!!! </p>
<?php } } ?>



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


</div>
</div>
</section>

<!--
<div class="partner-area ptb-100">
<div class="container">
<div class="partner-slider owl-carousel owl-theme">
<div class="partner-item">
<img src="assets/img/partner/partner-1.png" alt="image">
</div>
<div class="partner-item">
<img src="assets/img/partner/partner-2.png" alt="image">
</div>
<div class="partner-item">
<img src="assets/img/partner/partner-3.png" alt="image">
</div>
<div class="partner-item">
<img src="assets/img/partner/partner-4.png" alt="image">
</div>
<div class="partner-item">
<img src="assets/img/partner/partner-5.png" alt="image">
</div>
</div>
</div>
</div>-->



<?php include("include/footer.php");  ?>
