<?php
include"connection.php";
$hostel_id=$_GET['hostelid'];
$q1="DELETE from  hostel_rules where hostel_id=$hostel_id;";
$r1=($con->query($q1));
$q11="DELETE from  hostel_facilities where hostel_id=$hostel_id;";
$r11=($con->query($q11));
$q="DELETE from hostel_info where hostel_id=$hostel_id;";
$r=($con->query($q));

if($r1 and $r11 and $r)
{
  echo '<script>alert("Hostel Successfull deleted");
   window.location.href="tes.php";
 </script>';
 

}
?>