<?php include("include/config.php");  ?>
<?php include("include/header.php");  ?>


<div class="page-banner-area">
<div class="container">
<div class="page-banner-content">
<h2>Play Quiz Now</h2>
<!--
<ul>
<li>
<a href="index.php">Home</a>
</li>
<li>About us</li>
</ul>-->

</div>
</div>
</div>


<div class="table-area pb-100">
<div class="container">
<div class="section-title">
<!--<h3 style="color:#f59019;" > Play Quiz Now </h3>-->
</div>
<div class="table-responsive">
<table class="table table-bordered table-striped">
<thead>
<tr>
<th>
##
</th>
<th>
Quiz
</th>
<th>
 
</th>
</tr>
</thead>
<tbody>
<?php
$c=1; 
$sql=" SELECT * FROM `quiz`  where `start_date`<now() and `end_date`>now()  ";
$result=mysqli_query($con,$sql);
while($row=mysqli_fetch_assoc($result))
{
?>
<tr>
<th>#<?php echo $c; ?></th>
<td><?php echo $row["title"]; ?></td>
<td> <a href="submit-answer.php?qid=<?php echo base64_encode($row["id"]); ?>" class="default-btn" style="background:#139ff0;">Submit Answer</a>  </td>
</tr>
<?php $c++; } ?>

</tbody>
</table>
 </div>
</div>
</div>



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


<section class="banking-area bg-ffffff ptb-100">
<div class="container-fluid">
<div class="row">
<div class="col-lg-8" style="text-align:center;" >
<div class="banking-image-warp" style="background-image:none;" >

<!--<iframe width="560" height="315" src="https://www.youtube.com/embed/lMh56KlHgmo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>-->                    

</div>
</div>


<!--
<div class="col-lg-6">
<div class="banking-content">
<span>Business banking</span>
<h3>We operate our banking services in many countries around the world</h3>
<p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>
<ul class="banking-list">
<li><i class="flaticon-check"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
<li><i class="flaticon-check"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do eiusmod.</li>
<li><i class="flaticon-check"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
<li><i class="flaticon-check"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod incididunt ut labore et dolore magna aliqua.</li>
</ul>
</div>
</div>-->


</div>
</div>
</section>

<?php include("include/footer.php");  ?>
