
<?php
include "connection.php";
session_start();

if($_SESSION['email'])
{
  $user_email=$_SESSION['email'];
  $hostel_id=$_SESSION['hostel_id'];
  $user_id=$_SESSION['user_id'];
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
  width: 250px;
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

  /* css for the Navigation bar*/
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
    line-height: 80px;
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
  /* css for navigation*/


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

  @media (max-width: 680px)
  {
    input[type=submit] {
    background-color: #04AA6D;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    width: 250px;
  }
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
      line-height: 20px;
      
    }
    nav ul li a {
      font-size: 20px;
      font-weight: 80px;
      line-height: 80px;
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
  }

/*start media 600px*/
@media screen and (max-width: 600px) 
{
  .cen {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  }
  #button1::after
  {
    content: "\a";
    white-space: pre;
  }
  #button2::before
  {
    content: "\a";
    white-space: pre;
  }
   #button2::after
  {
    content: "\a";
    white-space: pre;
  }
  #button3::before
  {
    content: "\a";
    white-space: pre;
  }
   input[type=submit]
  {
    width: 100px;
  }
 
  .col-25, .col-75
  {
    width: 50%;
    margin-top: 0;

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

  label.lab
  {
    display:block;
  }
   label.lab
  {
    color: white;
    font-size: 30px;
    line-height: 80px;
    padding: 0 50px;
    font-weight: bold;
    padding-left: 160px;
  }

}/*end media 600px*/

div.wrapper
{
  padding-top: 10%;
}
ul.footer li
{
  text-decoration: none;
  display: inline-block;
   color: white;
  font-size: 20px;
  text-decoration: none;
  background-color: transparent;
  border-radius: 3px;
  padding: 7px 13px;
}
</style>
<meta charset="utf-8">

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
   <h2 style="text-align:center;font-weight: 80px;line-height: 80px;">Check Your Details</h2>
    <div class="container">
        <?php
                
                $sql1="SELECT * from student_form where hostel_id=$hostel_id;";
                $result1=($con->query($sql1));
                if($result1)
                {
                  while($row1=mysqli_fetch_array($result1))
                  {
                    $student_id=$row1['student_id'];
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
                    $passport=$row1['passport_size'];

                  }
                }
                else
                {
                  echo '<script>alert("Query failed");</script>';
                }
                ?>
      <form  method="post" enctype="multipart/form-data">
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
          <input type="text" name="hadd" value="<?php echo $_SESSION['hostel_name'];?>" readonly  >
        </div>

        <div class="col-25">
          <!--empty column-->
        </div>

        <div class="col-25">
          <label>Hostel's Owner</label>
          &nbsp;<input type="text" name="owner" value="<?php echo $_SESSION['hostel_type'];?>" readonly>
        </div>
      </div><!--end row 2-->


      <!-- start row 3-->
      <div class="row">

        <div class="col-25">
         <label>Student's Name</label>
          <input type="text" name="sname" placeholder="enter student fullname" value="<?php echo $student_name;?>" >
        </div>

        <div class="col-25">
          <!--empty column-->
        </div>

        <div class="col-25">
          <label  for="country">Gender</label>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select id="country" name="gender"  value="<?php echo $student_gender;?>">
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
          <label>Institution's Name</label>
          <input type="text" name="sin" value="<?php echo $student_institution;?>"  placeholder="enter student institution/university's name" required>
        </div>

        <div class="col-25">
          <!--empty column-->
        </div>

        <div class="col-25">
           <label>Institution's Address</label>
            <input type="text" name="in_add" value="<?php echo $institute_address ;?>" placeholder="enter institution/university's  address" required>
        </div>
      </div>
   <!-- end row 5-->

    <!-- start row 6-->
      <div class="row">

        <div class="col-25">
          <label>Class/Semester's Name</label>
                  <input type="text" name="sclass"   value="<?php echo $student_class;?>" placeholder="enter student class/semester" >
        </div>

        <div class="col-25">
          <!--empty column-->
        </div>

        <div class="col-25">
          <label>Course's Name</label>
                  <input type="text" name="cname"  value="<?php echo $student_course ;?>"  placeholder="enter student course name" >
        </div>
      </div>
   <!-- end row 6-->

    <!-- start row 7-->
      <div class="row">

        <div class="col-25">
          <label>Student Current Address</label>
          <input type="text" name="cadd1" id="cadd" value="<?php echo $student_curr_address ;?>" placeholder="enter the address" style="">
          
        </div>

        <div class="col-25">
          <!--empty column-->
          <label>Current District</label>
           <input type="text" name="dadd1" id="dadd" value="<?php echo $student_curr_district ;?>" placeholder="enter the district" >
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
          <input type="text" name="cadd" id="cadd"  value="<?php echo $student_per_address ;?>" placeholder="enter the address" style="">
          
        </div>

        <div class="col-25">
          <!--empty column-->
          <label>Permanent District</label>
           <input type="text" name="dadd" id="dadd" value="<?php echo $student_per_district;?>" placeholder="enter the district" >
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
          <label>Father's Name</label>
          <input type="text" name="fname" value="<?php echo $student_father;?>"  placeholder="enter your father's name" >
        </div>

        <div class="col-25">
          <!--empty column-->
           <label>Mother's Name</label>
          <input type="text" name="mname" value="<?php echo $student_mother;?>" placeholder="enter student mother's name" >
          
        </div>

        <div class="col-25">
          <label>Guardian/Parent's Contact No.</label>
          <input type="text" name="p_g_phone" value="<?php echo $student_parent_contact; echo $owner_id?>" placeholder="enter student guardian/parents contact nos." >
      
        </div>
      </div>
     
   <!-- end row 9-->

    <!-- start row 10-->
    <br>
    <div class="row">
      <div class="col-75">
         &nbsp;&nbsp;<a href="book_room.php?hostelid=<?php echo $hostel_id;?>">Back</a><br>
        
      </div>
      <div class="col-75">
        
      </div><br>
      
    </div>
      <div class="row" >
        <div class="col-75" >

           &nbsp;&nbsp;<input type="submit" value="Edit" id="button2" name="edit">
           &nbsp;&nbsp;<input type="submit" value="Proceed" id="button3" name="proceed" style="float:right;">
         
        </div>
        
      </div><!--end row 10 -->
      <?php



   

    /* query for retrieving details from student table*/
    $q2="SELECT * from student_form where hostel_id=$hostel_id;";
    $r2=($con->query($q2));
    if($r2)
    {
      while($row12=mysqli_fetch_array($r2))
      {
        $student_id=$row12['student_id'];
        $student_name=$row12['student_name'];
        $student_class=$row12['student_class'];

      }
    }
    else
    {
      echo '<script>alert("Query failed");</script>';
    }
    /* query for retrieving details from hostel info table*/
    $q3="SELECT * from hostel_info where hostel_id=$hostel_id;";
    $r3=($con->query($q3));
    if($r3)
    {
      while($row13=mysqli_fetch_array($r3))
      {
        $hostelname=$row13['hostel_name'];
        $hosteltype=$row13['hostel_type'];
        $hosteladdress=$row13['hostel_address'];

      }
    }
    else
    {
      echo '<script>alert("Query failed");</script>';
    }

            

    if(isset($_POST['edit']))
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
        $query1="UPDATE  student_form 
                  set 
                    student_name='$student_name',
                    student_gender='$student_gender', 
                    student_contact_no='$student_phone',
                    student_email='$student_email', 
                    student_curr_address='$student_curr_address',  
                    student_curr_district='$student_curr_district', 
                    student_curr_pin='$student_curr_pincode',  
                    student_per_address='$student_per_addres', 
                    student_per_district='$student_per_district',  
                    student_per_pin='$student_per_pincode', 
                    student_institution='$institute_name', 
                    institute_address='$institute_address',
                    student_class='$student_class', 
                    student_course='$student_course',  
                    student_father='$student_father',
                    student_mother='$student_mother',  
                    student_parent_contact='$student_parent_contact'  
                  where student_id=$student_id; ";
          $res1=($con->query($query1));
          if($res1)
          {
            echo '<script>alert("Editting Your Details is Succeddfull You may procced with Booking");
            window.location.href="studen_form_edit.php";</script>';

          }
          else
          {
             echo '<h3 style="text-align:center;font-size:30px;font-weight:70px;line-weight:70px;top:50%;padding-top:200px">
          404 Error in the Server<br>
         
          <a href="studen_form_edit.php" style="text-decoration:none; color: blue; font-size:25px">Click here to go back to last page</a>
      </h3>';

          }


    }
  elseif (isset($_POST['proceed']))
  {
    //check if the student already booked the hostel
    $s="SELECT * from book where student_id=$student_id and hostel_id=$hostel_id;";
    $sq=($con->query($s));
    $check=mysqli_num_rows($sq);
    if($check>0)
    {
      echo '<script>alert("You already booked the this Hostel");</script>';
    }
    else
    {
      $date=date("Y-m-d");
      $q4="INSERT into book(student_id,hostel_id, user_id,date_book,owner_id)values($student_id,$hostel_id,$user_id,'$date',$owner_id);";
      $r4=($con->query($q4));
      if($r4)
      {
        echo '<script>window.location.href="final_booking.php";</script>';
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
      </form>
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
</script>
<?php
}
else
  { //window.location.href = "user_login.php";
echo '<script>window:location.href="user_login.php";</script>';
   }?>
</body>
</html>


