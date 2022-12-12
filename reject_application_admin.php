<?php
include"connection.php";
$hostel_id=$_GET['hostelid'];

$sq="DELETE  from payment where hostel_id=$hostel_id;";
$re=($con->query($sq));

$sq1="DELETE  from book where hostel_id=$hostel_id;";
$re1=($con->query($sq1));

if($re and $re1 )
{
  echo '<script>alert("Application Successfull deleted");
  window.location.href="tes.php"
  </script>';
}
?>