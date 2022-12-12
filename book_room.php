
<?php
include "connection.php";
session_start();

if($_SESSION['email'])
{
  $user_email=$_SESSION['email'];
 // $hostel_id=$_GET['hostelid'];
  $hostel_id=$_SESSION['hostel_id'];
  //$user_id= $_SESSION['user_id'];
  $owner_id=$_SESSION['owner_id'];

          

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
<style>
  *{
    padding: 0;
    margin: 0;
    text-decoration: none;
    list-style: none;
    box-sizing: border-box;
  }
  body
  {
    scroll-behavior: smooth;
  }
select
{
  width: 65%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;

}
input[type=text], select, textarea {
  width: 80%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 20px 12px 0;
  display: inline-block;
}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  width: 170px;
  float: right;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;

}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
 .reset
 {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  width: 170px;
 }

/*start media 600px*/
@media screen and (max-width: 600px) 
{

  #back::after{
    content: "\a";
    white-space: pre;
  }
  .reset 
  {
     background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  width: 100px;


  }
  .reset::before
  {
    content: "\a";
    white-space: pre;
  }
  #sub::before{
    content: "\a";
    white-space: pre;
  }
  .col-25, .col-75, input[type=submit] 
  {
    width: 100%;
    margin-top: 0;

  }
  input[type=submit] 
  {
    float: right;
    width: 150px;
    margin-top: 0;

  }
  .back
  {
     background-color: #04AA6D;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    width:100%;
    padding: 5px;

  }
  input[type=text], select, textarea
  {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    resize: vertical;
  }
  nav.main-nav.nav-icon
  {
    width: 40px;
    display: block;
  }
  nav ul li 
  {
    margin: 0 0 0 15px;
    font-size: 16px;
  }
  nav ul li a.active
  {
    display: none;
  }

  nav
  {
     background-color: #63a3ad;
   
    height: 70px;
    width: 100%;
    position: fixed;
    top: 0px;
  }
}/* end media 600px*/

nav
{
  background-color: #63a3ad;

  height: 70px;
  width: 100%;
  position: fixed;
  top: 0px;
}

label.logo
{
  color: white;
  font-size: 30px;
  line-height: 80px;
  padding: 0 100px;
  font-weight: bold;
}

nav ul
{
  float: right;
  margin-right: 20px;
}

nav ul li
{
  display: inline-block;
  line-height: 70px;
  margin: 0 5px;
}
nav ul li a
{
  color: white;
  font-size: 20px;
  text-decoration: none;
  background-color: transparent;
  border-radius: 3px;
  padding: 7px 13px;
}

  a.active, a:hover
  {
    background: #1b9bff;
    transition: .5s;
  }
  .checkbtn
  {
    font-size: 30px;
    color: white;
    float: right;
    line-height: 80px;
    margin-right:40px ;
    cursor: pointer;
    display: none;
    padding-right: 0px;
  }
  #check
  {
    display: none;
  }

@media (max-width: 952px)
  {
    label.logo
    {
      font-size: 30px;
      padding-left: 50px;
    }
    nav ul li a
    {
      font-size: 16px;
    }
  }

/*start mdedia 680px*/
 @media (max-width: 680px)
  {
    .checkbtn{
      display: block;
    }
    ul
    {
      position: fixed;
      width: 50%;
      height: 100vh;
      background-color: #2c3e50;
      top: 70px;
      left: -100%;
      transition: all .5s ease;
      top: 0 px;
    }
    nav ul li {
      display: block;
      margin: 50px 0;
      line-height: 10px;
      
    }
    nav ul li a {
      font-size: 20px;
      font-weight: 50px;
      line-height: 60px;
    }
    a:hover,a.active
    {
      background: none;
      color: #0082e6;

    }
    #check:checked ~ ul
    {
      left: 0;
    }
  }/*end media 680px*/

/*start  media 650 px*/
@media screen and (max-width: 650px)
{
  a.back
  {
     background-color:transparent;
    color: #04AA6D;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    width:100%;

  }
  #sub::before{
    content: "\a";
    white-space: pre;
  }
  #back::after{
    content: "\a";
    white-space: pre;
  }

}/* end media 650px*/

div.wrapper
{
  padding-top: 10%;
}

.back
{
   background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  width: 170px;

}

</style>
<meta charset="utf-8">

    <!--Jquery CDN link -->
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
      <!--Jquery CDN link -->
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
       <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>
<body>
   <nav class="main-nav">
    <input type="checkbox" id="check" name="">
    <label for="check" class="checkbtn">
      <i class="fas fa-bars"></i>
    </label>
    <label class="logo">MegHostel</label>
    
    <ul>
      <li style="font-size: 25px;"><a href="user_page1.php">Home</a></li>
      <li style="font-size: 25px;">
        <a  href="">About Us </a>
      </li>
      <li>
        <a  href="">Our Service</a>
      </li>
       <li style="font-size: 25px;">
        <a href="user_logout.php">Log Out </a>
      </li>
    </ul>
  </nav>
<div class="wrapper">
   <h2 style="text-align:center;font-weight: 80px;line-height: 80px;">Complete this Form</h2>
    <div class="container">
         <!-- query to retrieve the hostel details from hostel_info and hostel_owner tables-->               
                <?php
                $query1="SELECT * from user where emai='$user_email';";
                $res2=($con->query($query1));
                if($res2)
                {
                  while($row12=mysqli_fetch_array($res2))
                  {
                    $user_id=$row12['id'];
                  }

                }
                else
                {
                  echo '<script>alert("User Session failed or no user");
                  window.location.href="user_login.php";</script>';
                }
                $sql1="SELECT * from hostel_info,hostel_owner where hostel_id=$hostel_id and hostel_info.owner_id=hostel_owner.owner_id;";
                $result1=($con->query($sql1));
                if($result1)
                {
                  while($row1=mysqli_fetch_array($result1))
                  {
                    $hostelname=$row1['hostel_name'];
                    $hosteltype=$row1['hostel_type'];
                    $hosteladdress=$row1['hostel_address'];
                    $hostelowner=$row1['name'];
                    $available_room=$row1['available_room'];
                   // $hostel_id=$row1['hostel_id'];
                  
                    
                  }
                }
                else
                {
                  echo '<script>alert("Query failed");</script>';
                }
                    $_SESSION['hostel_name'] = $hostelname;
                    $_SESSION['hostel_address']=$hosteladdress;
                    $_SESSION['hostel_type']= $hosteltype;
                    $_SESSION['hostel_owner']= $hostelowner;
                ?>
               
       <form method="POST" action="" enctype="multipart/form-data">

        <!-- row1 start-->
      <div class="row">

        <div class="col-25">
          <label>Hostel's Name</label>
         &nbsp; <input type="text" name="hname" value="<?php echo $_SESSION['hostel_name'];?>" readonly  >
        </div>

        <div class="col-25">
          <!--empty column-->
        </div>

        <div class="col-25">
          <label>Hostel's Type</label>
          &nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="htype" value="<?php echo $_SESSION['hostel_type'];?>" readonly>
        </div>
      </div><!--end row 1-->


      <!-- row2 start-->
        <div class="row">

        <div class="col-25">
          <label>Hostel's Addess</label>
          <input type="text" name="hadd" value="<?php echo $_SESSION['hostel_address'];?>" readonly  >
        </div>

        <div class="col-25">
          <!--empty column-->
        </div>

        <div class="col-25">
          <label>Hostel's Owner</label>
          &nbsp;<input type="text" name="owner" value="<?php echo $_SESSION['hostel_owner'];?>" readonly>
        </div>
      </div><!--end row 2-->


      <!-- start row 3-->
       <?php
      
        // to check if the student already registered or not if yes then they dnt need to register again..
        $s="SELECT * from student_form where  user_id=$user_id; ";
        $r=($con->query($s));
        $c=mysqli_num_rows($r);
        if($c>0)
        {
          while($row1=mysqli_fetch_array($r))
          {
            $student_name=$row1['student_name'];
            $student_gender=$row1['student_gender'];
            $student_phone=$row1['student_contact_no'];
            $student_email=$row1['student_email'];
            $student_curr_address=$row1['student_curr_address'];
            $student_curr_district=$row1['student_curr_district'];
            $student_curr_pincode=$row1['student_curr_pin'];
            $student_per_address=$row1['student_per_address'];
            $student_per_district=$row1['student_per_district'];
            $student_per_pincode=$row1['student_per_pin'];
            $student_institution=$row1['student_institution'];
            $institute_address=$row1['institute_address'];
            $student_class=$row1['student_class'];
            $student_course=$row1['student_course'];
            $student_father=$row1['student_father'];
            $student_mother=$row1['student_mother'];
            $student_parent_contact=$row1['student_parent_contact'];
            $student_id=$row1['student_id'];
            $_SESSION['student_id']=$student_id;
            $passport_size=$row1['passport_size'];

          }
        ?>
        <div class="row">
       
      

        <div class="col-25">
         <label>Student Name</label>
          <input type="text" name="sname" placeholder="enter student fullname" onchange="uppercase()" value="<?php echo $student_name;?>" >
        </div>

        <div class="col-25">
          <!--empty column-->
        </div>

        <div class="col-25">
          <label  for="country">Gender</label>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select id="country" name="gender"  value="<?php echo $student_gender;?>">
            <option value="male">Male</option>
            <option value="female">Female</option>
            <option value="tri-gender">Tri-Gender</option>
          </select>
        </div>
      </div>
   <!-- end row 3-->

      <!-- start row 4-->
      <div class="row">

        <div class="col-25">
          <label> Contact No.</label>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="sphone" value="<?php echo $student_phone ;?>" placeholder="enter student contact no." required>
        </div>

        <div class="col-25">
          <!--empty column-->
        </div>

        <div class="col-25">
          <label> Email Id</label>
         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;<input type="text" name="semail" placeholder="enter student email id" value="<?php echo $student_email;?>" required>
        </div>
      </div>
   <!-- end row 4-->

   <!-- start row 5-->
      <div class="row">

        <div class="col-25">
          <label>Institution Name</label>
          <input type="text" name="sin" value="<?php echo $student_institution;?>" onchange="uppercase()" placeholder="enter student institution/university name" required>
        </div>

        <div class="col-25">
          <!--empty column-->
        </div>

        <div class="col-25">
           <label>Institution Address</label>
            <input type="text" name="in_add" onchange="uppercase()" value="<?php echo $institute_address ;?>" placeholder="enter institution/university address" required>
        </div>
      </div>
   <!-- end row 5-->

    <!-- start row 6-->
      <div class="row">

        <div class="col-25">
          <label>Class/Semester Name</label>
                  <input type="text" name="sclass"   value="<?php echo $student_class;?>" placeholder="enter student class/semester" >
        </div>

        <div class="col-25">
          <!--empty column-->
        </div>

        <div class="col-25">
          <label>Course Name</label>
                  <input type="text" name="cname" onchange="uppercase()" value="<?php echo $student_course ;?>"  placeholder="enter student course name" >
        </div>
      </div>
   <!-- end row 6-->

    <!-- start row 7-->
      <div class="row">

        <div class="col-25">
          <label>Student Current Address</label>
          <input type="text" name="cadd1" id="cadd" onchange="uppercase()" value="<?php echo $student_curr_address ;?>" placeholder="enter the address" style="">
          
        </div>

        <div class="col-25">
          <!--empty column-->
          <label>Current District</label>
           <input type="text" name="dadd1" id="dadd" onchange="uppercase()" value="<?php echo $student_curr_district ;?>" placeholder="enter the district" >
        </div>

        <div class="col-25">
          <label>Pincode</label>
          <input type="text" name="padd1" id="padd" value="<?php echo $student_curr_pincode;?>" placeholder="enter the pincode" >
        </div>
      </div>
   <!-- end row 7-->
   <di class="row">
    <div class="col-25">
      <label>Student Permannet Address Same as current</label>
           <input type="checkbox"  id="checkBox" onclick="filladd()"  >
      
    </div>
   </di>

   <!-- start row 8-->
      <div class="row">

        <div class="col-25">
          <label>Permanent Address</label>
          <input type="text" name="cadd" id="cadd" onchange="uppercase()"  value="<?php echo $student_per_address ;?>" placeholder="enter the address" style="">
          
        </div>

        <div class="col-25">
          <!--empty column-->
          <label>Permanent District</label>
           <input type="text" name="dadd" id="dadd" onchange="uppercase()" value="<?php echo $student_per_district;?>" placeholder="enter the district" >
        </div>

        <div class="col-25">
          <label>Pincode</label>
          <input type="text" name="padd" id="padd" value="<?php echo $student_per_pincode;?>"  placeholder="enter the pincode" >
        </div>
      </div>
   <!-- end row 8-->

   <!-- start row 9-->
      <div class="row">

        <div class="col-25">
          <label>Father Name</label>
          <input type="text" name="fname"  onchange="uppercase()" value="<?php echo $student_father;?>"  placeholder="enter your father name" >
        </div>

        <div class="col-25">
          <!--empty column-->
           <label>Mother Name</label>
          <input type="text" name="mname" onchange="uppercase()" value="<?php echo $student_mother;?>" placeholder="enter student mother name" >
          
        </div>

        <div class="col-25">
          <label>Guardian/Parent Contact No.</label>
          <input type="text" name="p_g_phone" value="<?php echo $student_parent_contact;?>" placeholder="enter student guardian/parents contact nos." >
      
        </div>
      </div>
      <div class="row">
        <div class="col-25">
         <label>Student Passport Photo</label>

          <img src="<?php echo $passport_size;?>" style="height: 100px;width: 100px;padding: 5px; background: #63a3ad; margin: 0 10px;">
           <input type="file" name="file"/>
          
        </div>
        <br> 
      </div>
      <div class="row">
        <div class="col-75">
           <input type="submit" name="proceed" value="Proceed">
        </div>
      </div>
<?php
      }


      else
      {
  ?>
    
      <div class="row">

        <div class="col-25">
          <label>Student  Name</label><span style="color:red;">*</span>
          <input type="text" name="sname" placeholder="enter student fullname"  onchange="uppercase()"  required>
        </div>

        <div class="col-25">
          <!--empty column-->
        </div>

        <div class="col-25">
          <label  for="country">Gender</label><span style="color:red;">*</span>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select id="country" name="gender" required>
            <option value="australia">Male</option>
            <option value="canada">Female</option>
            <option value="usa">Tri-Gender</option>
          </select>
        </div>
      </div>
   <!-- end row 3-->

      <!-- start row 4-->
      <div class="row">

        <div class="col-25">
          <label> Contact No.</label><span style="color:red;">*</span>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="sphone" placeholder="enter student contact no." required>
        </div>

        <div class="col-25">
          <!--empty column-->
        </div>

        <div class="col-25">
          <label> Email Id</label><span style="color:red;">*</span>
         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;<input type="text" name="semail" placeholder="enter student email id" required>
        </div>
      </div>
   <!-- end row 4-->

   <!-- start row 5-->
      <div class="row">

        <div class="col-25">
          <label>Institution Name</label><span style="color:red;">*</span>
          <input type="text" name="sin" placeholder="enter student institution/university name" onchange="uppercase()"  required>
        </div>

        <div class="col-25">
          <!--empty column-->
        </div>

        <div class="col-25">
           <label>Institution Address</label><span style="color:red;">*</span>
            <input type="text" name="in_add" placeholder="enter institution/university  address" onchange="uppercase()"  required>
        </div>
      </div>
   <!-- end row 5-->

    <!-- start row 6-->
      <div class="row">

        <div class="col-25">
          <label>Class/Semester Name</label>
                  <input type="text" name="sclass" placeholder="enter student class/semester" >
        </div>

        <div class="col-25">
          <!--empty column-->
        </div>

        <div class="col-25">
          <label>Course Name</label>
                  <input type="text" name="cname" onchange="uppercase()"  placeholder="enter student course name" >
        </div>
      </div>
   <!-- end row 6-->

    <!-- start row 7-->
      <div class="row">

        <div class="col-25">
          <label>Student Current Address</label><span style="color:red;">*</span>
          <input type="text" name="cadd1" id="cadd" placeholder="enter the address" onchange="uppercase()"  style="" required>
          
        </div>

        <div class="col-25">
          <!--empty column-->
          <label>Current District</label>
           <input type="text" name="dadd1" id="dadd" onchange="uppercase()"  placeholder="enter the district" >
        </div>

        <div class="col-25">
          <label>Pincode</label>
          <input type="text" name="padd1" id="padd" placeholder="enter the pincode" >
        </div>
      </div>
   <!-- end row 7-->

   <!-- start row 8-->
      <div class="row">

        <div class="col-25">
          <label>Student Permannet Address Same as current</label><span style="color:red;">*</span>
           <input type="checkbox"  id="checkBox" onclick="filladd()"  >
          <input type="text" name="cadd" id="cadd" onchange="uppercase()"  placeholder="enter the address" style="">
          
        </div>

        <div class="col-25">
          <!--empty column-->
          <label>Permanent District</label>
           <input type="text" name="dadd" id="dadd" onchange="uppercase()"  placeholder="enter the district" >
        </div>

        <div class="col-25">
          <label>Pincode</label>
          <input type="text" name="padd" id="padd" placeholder="enter the pincode" >
        </div>
      </div>
   <!-- end row 8-->

   <!-- start row 9-->
      <div class="row">

        <div class="col-25">
          <label>Father Name</label><span style="color:red;">*</span>
          <input type="text" name="fname" onchange="uppercase()"  placeholder="enter your father name" required >
        </div>

        <div class="col-25">
          <!--empty column-->
           <label>Mother Name</label><span style="color:red;">*</span>
          <input type="text" name="mname" onchange="uppercase()"  placeholder="enter student mother name" required >
          
        </div>

        <div class="col-25">
          <label>Guardian/Parent Contact No.</label><span style="color:red;">*</span>
          <input type="text" name="p_g_phone" placeholder="enter student guardian/parents contact nos." required >
      
        </div>
        <br>
         
      </div>
   <!-- end row 9-->
   <div class="row">
    <div class="col-25">
          <label>Student Passport Photo</label><span style="color:red;">*</span>
          <input type="file" name="file" value="Browse" required >
      
        </div>
     
   </div>
<?php
 }

   ?>


    <!-- start row 10-->
      <div class="row">
        <div class="col-75">
          <label for="subject"><input type="checkbox" name="declaration" id="de"><span style="color:red;">*</span> I here by declare that all the information aboves are true in my true identity. If there is wrong in my identity I will take responsibility for that. </label>
        </div>
        <br>
        <div class="col-75">
          <a href="view_detail.php?hostelid=<?php echo $hostel_id?>" class="back" id="back">Back</a>&nbsp;&nbsp;&nbsp;
          <input type="reset" name="reset" value="Reset" id="back" class="reset">
          <input type="submit" value="Submit" name="sub"  id="sub">
        </div>
      </div><!--end row 10 -->
      </form>
      <?php
      if(isset($_POST['sub']))
      {
        $student_name=$_POST['sname'];
        $student_gender=$_POST['gender'];
        $student_phone=$_POST['sphone'];
        $student_email=$_POST['semail'];
        $student_curr_address=$_POST['cadd1'];
        $student_curr_district=$_POST['dadd1'];
        $student_curr_pincode=$_POST['padd1'];
        $student_per_addres=$_POST['cadd'];
        $student_per_district=$_POST['dadd'];
        $student_per_pincode=$_POST['padd'];
        $institute_name=$_POST['sin'];
        $institute_address=$_POST['in_add'];
        $student_class=$_POST['sclass'];
        $student_course=$_POST['cname'];
        $student_father=$_POST['fname'];
        $student_mother=$_POST['mname'];
        $student_parent_contact=$_POST['p_g_phone'];
        //$passport=$_POST['file'];
        $owner_id=$_SESSION['owner_id'];
        if ($_SERVER["REQUEST_METHOD"] == "POST") 
        {
            $targetDir = "student_photo/";
            $fileName = $_FILES["file"]["name"];
            $targetFilePath = $targetDir . $fileName;
            $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
            if(!empty($_FILES["file"]["name"]))
            {
              //allow the images to upload only these extension
              $allowTypes = array('jpg','png','jpeg','gif','pdf');
              if(in_array($fileType, $allowTypes))
              {
                  if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath))
                  {
                
                    if ($_SERVER["REQUEST_METHOD"] == "POST") 
                    {
                      /* if the student email already register*/
                      $s="SELECT * from student_form where student_email='$student_email';";
                      $q=($con->query($s));
                      $c=mysqli_num_rows($q);
                      if($c>0)
                      {
                        echo '<script>alert("This email already registered by other student...please chose another one");</script>';
                      }
                      else
                      {
                        $s="INSERT into student_form
                        (
                          student_name,
                          student_gender,
                          student_contact_no,
                          student_email, 
                          student_curr_address,  
                          student_curr_district, 
                          student_curr_pin,  
                          student_per_address, 
                          student_per_district,  
                          student_per_pin, 
                          student_institution, 
                          institute_address,
                          student_class, 
                          student_course,  
                          student_father,
                          student_mother,  
                          student_parent_contact,  
                          passport_size,
                          hostel_id,
                          user_id,
                          owner_id
                        ) 
                        values
                        (
                           '$student_name','$student_gender','$student_phone', '$student_email', '$student_curr_address','$student_curr_district','$student_curr_pincode', '$student_per_addres','$student_per_district','$student_per_pincode', '$institute_name','$institute_address','$student_class', '$student_course','$student_father','$student_mother','$student_parent_contact','$fileName',$hostel_id,$user_id,$owner_id
                         );";
                        $re=($con->query($s));
                        if($re)
                        {
                          echo '<script>alert("Student Form  Succefully Saved...");
                            window.location.href = "studen_form_edit.php";
                           </script>';


                        }
                        else
                        {
                          echo '<script>alert("Register failed");</script>';
                          error_reporting(0);

                        }
                      }
                    }
                    else
                    {
                        echo '<script>alert("Sorry, No Post method.");</script>';
                    }
                  }
                  else
                  {
                      echo '<script>alert("Sorry, there was an error uploading your file.");</script>';
                      exit(1);
                  }
            }
            else
            {
                echo '<script>alert("Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload..");</script>';
                   exit(1);
                
            }
        }
        else
        {
              echo '<script>alert("Please select a file to upload..");</script>';
                   exit(1);
       
        }
         
      }//end main if(isset)
    }
    elseif(isset($_POST['proceed']))
    {

      $date=date("Y-m-d");
      $s="SELECT * from book where student_id=$student_id and hostel_id=$hostel_id;";
      $sq=($con->query($s));
      $check=mysqli_num_rows($sq);
      if($check>0)
      {
        echo '<script>alert("You already booked this Hostel...");
        window.location.href="user_page1.php";</script>';
      }
      else
      {

        $q4="INSERT into book(student_id,hostel_id, user_id, date_book,owner_id)values($student_id,$hostel_id,$user_id,'$date',$owner_id);";
        $r4=($con->query($q4));
        if($r4)
        {
          $book_room=1;
          $qe="SELECT * from hostel_info where hostel_id=$hostel_id;";
          $res=($con->query($qe));
          if($res)
          {
            while($r=mysqli_fetch_array($res))
            {
              $available_room=$r['available_room'];

            }
            $total_available_room=$available_room-$book_room;
            $qee="UPDATE hostel_info set available_room=$total_available_room where hostel_id=$hostel_id;";
            $ress=($con->query($qee));
            if($ress)
            {
              echo '<script>window.location.href="final_booking.php";</script>';

            }
          }
          
        }
        else
        {
          
          echo '<h3 style="text-align:center;font-size:30px;font-weight:70px;line-weight:70px;top:50%;padding-top:200px">
              404 Error in the Server<br>
              Try to reachs us afted Sometimes
              <a href="studen_form_edit.php" style="text-decoration:none; color: blue; font-size:25px">Click here to go back to last page</a><br>
          ';
           echo '</h3>';
        }
      }
    }

      ?>
    </div>
 
  </div>
  <footer style="background:white; text-align:center;padding: 50px;">
    <p></p>

        <h2>Follow us in social media</h2>
 
      <a href="https://www.facebook.com" style="text-decoration:none"><img src="facebook.png" style="height: 25px;width: 27px;"> </a>
  
       <a href="https://www.instagram.com"><img src="instagram.png" style="height:25px;width: 27px;"></a>
  
        <a href="https://www.youtube.com"><img src="youtube.png" style="height: 25px;width: 27px;"></a>
      
  </footer>
<script type="text/javascript">
 
function filladd()
    {
       let checkBox= document.getElementById('checkBox');
       let curr_address = document.getElementById("cadd");
       let curr_district = document.getElementById("dadd");
       let curr_pincode = document.getElementById("padd");

       let per_address = document.getElementById("cadd1");
       let per_district = document.getElementById("dadd1");
       let per_pincode = document.getElementById("padd1");
  
        if (checkBox.checked == true)
        {
        
       let cur_a  = curr_address.value;
       let cur_d = curr_district.value;
       let cur_p= curr_pincode.value;
       per_address.value = cur_a; 
       per_district.value = cur_d; 
       per_pincode.value  = cur_p;   
            
       }
        else
        {
        per_address.value = "";
        per_district.value = ""; 
        per_pincode.value     = "";     
          }
    }
    function uppercase() {
  var x = document.getElementById("fname");
  x.value = x.value.toUpperCase();
}
</script>
<?php
}
else
  { //window.location.href = "user_login.php";
echo '<script>window:location.href="user_login.php";</script>';
   }?>
</body>
</html>


