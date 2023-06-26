<?php include("include/config.php");  ?>
<?php  if(!isset($_SESSION["contestuser"])) header("location:login.php");   ?>
<?php
$sql=" delete from  `register_user`   where  `username`='".$_SESSION["contestuser"]."'  ";
mysqli_query($con,$sql);
unset($_SESSION["contestuser"]);
header("location:notification.php?msg=3");
?>
