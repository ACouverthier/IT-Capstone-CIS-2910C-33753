
<section class="footer-area pt-100 pb-70">
<div class="container">
<div class="row">
<div class="col-lg-3 col-sm-6">
<div class="single-footer-widget">
<div class="footer-logo">
<h2><a href="index.php">Astute Loot</a></h2>
<?php 
$sql=" SELECT *FROM `about_us` limit 1  ";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
?>
<p><?php echo substr($row["text"],0,300); ?></p>
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

<?php 
$sql=" SELECT *FROM `contact_information` limit 1  ";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
?>
<li>
<i class='bx bxs-phone'></i>
<span>Phone</span>
<a href="tel:<?php echo $row["phone"]; ?>">+<?php echo $row["phone"]; ?></a>
</li>
<li>
<i class='bx bx-envelope'></i>
<span>Email</span>
<a href="javascript:void(0);"><span class="__cf_email__" data-cfemail="6b030e0707042b070e1d0e45080406">[<?php echo $row["email"]; ?>]</span></a>
</li>
 <li>
<i class='bx bx-map'></i>
<span>Address</span>
<?php echo $row["address"]; ?>
</li>
</ul>
</div>
</div>
<div class="col-lg-3 col-sm-6">
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
<a href="quiz.php">Quiz</a>
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
<a href="help.php">Contact</a>
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
</body>


</html>
