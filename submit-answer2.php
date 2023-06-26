<?php include("include/config.php"); 
if(!isset($_SESSION["contestuser"]))
{
 echo "2";
}
else
{
  $sql2=" SELECT *FROM `quiz_answer`  where  `quiz_id`='".$_POST["pid"]."' and `username`='".$_SESSION["contestuser"]."'	  ";                
  $result2=mysqli_query($con,$sql2);
  $num2=mysqli_num_rows($result2);

  
  if($num2>0)
  {
   echo "3";
  }
  else
  {
   echo "5";	
  }	  
  
}	


?>


