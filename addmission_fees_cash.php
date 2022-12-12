
<?php
include "connection.php";
session_start();

if($_SESSION['email'])
{
  $user_email=$_SESSION['email'];
  $hostel_id=$_SESSION['hostel_id'];
  $student_id=$_SESSION['student_id'];
          

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" type="text/css" href="print.css" media="print">
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
   <?php
            /* query for retrieving details from student table*/
            $q2="SELECT * from student_form where hostel_id=$hostel_id;";
            $r2=($con->query($q2));
            if($r2)
            {
              while($row12=mysqli_fetch_array($r2))
              {
                $student_id=$row12['student_id'];
                $_SESSION['student_id']=$student_id;
              
              }
            }
            else
            {
              echo '<script>alert("Query failed student form");</script>';
            }
            /* query for retrieving details from book table*/
            $q2="SELECT * from book where hostel_id=$hostel_id;";
            $r2=($con->query($q2));
            if($r2)
            {
              while($row12=mysqli_fetch_array($r2))
              {
                $book_id=$row12['book_id'];
                  $_SESSION['book_id']=$book_id;
        


              }
            }
            else
            {
              echo '<script>alert("Query failed book");</script>';
            }
            /* query for retrieving details from hostel info table*/
            $q2="SELECT * from hostel_info where hostel_id=$hostel_id;";
            $r2=($con->query($q2));
            if($r2)
            {
              while($row12=mysqli_fetch_array($r2))
              {
                $mess_fees=$row12['monthly_mess_fees'];
                $esta=$row12['monthly_establishment_fees'];
                $hostel_admission_fees=$row12['hostel_addmission_fees'];
                $hostel_name=$row12['hostel_name'];
                $hosteladdress=$row12['hostel_address'];
                $hosteltype=$row12['hostel_type'];

              }
            }
            else
            {
              echo '<script>alert("Query failed hostel info");</script>';
            }
             

            ?>
<div class="wrapper">
  <br>

           
              <?php
              $hostelname = explode(' ', trim($hostel_name));
              $hostelname1=$hostelname[0];
              $rand_num=rand(200,5000);
              $id=$hostelname1.$rand_num;
             
  
              
              ?>
            
 
    <div class="container">
         <!-- query to retrieve the hostel details from hostel_info and hostel_owner tables-->               
                
       <form method="POST" action="" enctype="multipart/form-data">
         <?php
            

            $q_stu="SELECT * from student_form where student_id=$student_id;";
            $q=($con->query($q_stu));
            if($q)
            {

              while($row1=mysqli_fetch_array($q))
              {
                  $student_id=$row1['student_id'];
                  $student_name=$row1['student_name'];
                  $student_gender=$row1['student_gender'];
                  $student_phone=$row1['student_contact_no'];
                  $student_email=$row1['student_email'];
                  $student_address=$row1['student_curr_address'];
                  $student_district=$row1['student_curr_district'];
                  $student_institution=$row1['student_institution'];
                  $institute_address=$row1['institute_address'];
                  $student_class=$row1['student_class'];
                  $student_course=$row1['student_course'];
                  $student_father=$row1['student_father'];
                  $student_mother=$row1['student_mother'];
                  $student_parent_contact=$row1['student_parent_contact'];
                  $passport=$row1['passport_size'];


              

            ?>
      <div class="row">
        <h3 style="text-align:center"><?php echo $hostel_name?>,&ensp; Address-
        <?php echo $hosteladdress?><br>
      Hostel Type-<?php echo $hosteltype?><br></h3>
        

      </div><br>

      <div class="row">

        <div class="col-75">
          <img src="<?php echo $passport;?>" style="height: 100px;width: 100px;padding: 5px;float: left; background: #63a3ad; margin: 0 10px;">
          
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col-25">
          <label>Student Name:</label>
        </div>
        <div class="col-75">
          <input type="text" name="student_name" value="<?php echo $student_name;?>"><br>
        </div>
      </div><br>

      <div class="row">
        <div class="col-25">
          <label>Student Gender:</label>
        </div>
        <div class="col-75">
          <input type="text" name="student_gen" value="<?php echo $student_gender;?>"><br>
        </div>
      </div>
      <br>


      <!-- row2 start-->
      <div class="row">
        <div class="col-25">
          <label>Student Contact No.:</label>
        </div>
        <div class="col-75">
          <input type="text" name="student_contact" value=" <?php echo $student_phone;?>"><br>
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label>Student Eamil ID:</label>
        </div>
        <div class="col-75">
          <input type="text" name="student_email" value="<?php echo $student_email;?>">
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col-25">
          <label>Student's Address:</label>
        </div>
        <div class="col-75">
         <input type="text" name="student_address" value="<?php echo $student_address;?>"><br>
        </div><!--end row 2-->
      </div>
      <br>


      <!-- start row 3-->
      <div class="row">
        <div class="col-25">
          <label>Student's District:</label>
        </div>
        <div class="col-75">
         <input type="text" name="student_district" value="<?php echo $student_district;?>"><br>
        </div>
      </div>
      <br>

      <div class="row">
        <div class="col-25">
          <label>Institution Name:</label>
        </div>
        <div class="col-75">
          <input type="text" name="student_institute" value="<?php echo $student_institution;?>"><br>
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label>Institute Address:</label>
        </div>
        <div class="col-75">
          <input type="text" name="institute_address" value="<?php echo $institute_address;?>"><br>
        </div>
      </div>
      <br>

      <div class="row">
        <div class="col-25">
          <label>Student Class:</label>
        </div>
        <div class="col-75">
          <input type="text" name="student_class" value="<?php echo $student_class;?>"><br>
        </div>
      </div>
      <br>

      <div class="row">
        <div class="col-25">
          <label>Student Course Name:</label>
        </div>
        <div class="col-75">
          <input type="text" name="student_course" value="<?php echo $student_course;?>"><br>
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col-25">
          <label>Student Father's Name:</label>
        </div>
        <div class="col-75">
          <input type="text" name="student_father" value="<?php echo $student_father;?>"><br>
        </div>
      </div>
      <br>

      <div class="row">
        <div class="col-25">
          <label>Student Mother's Name:</label>
        </div>
        <div class="col-75">
         <input type="text" name="student_mother" value="<?php echo $student_mother?>"><br>
        </div>
      </div>
      <br>

      <div class="row">
        <div class="col-25">
          <label> Student Parent Contact No.:</label>
        </div>
        <div class="col-75">
         <input type="text" name="parent_contact" value="<?php echo $student_parent_contact?>"><br>
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col-25">
          <label> Booked Seat ID:</label>
        </div>
        <div class="col-75">
         <input type="text" name="parent_contact" value="<?php echo $id;?>"><br>
        </div>
      </div>
      <br>

      <div class="row">
        <div class="col-75">
          <button id="btn-print" onclick="window.print();" class="back" style="float:right;" name="print">Print</button>
        </div>
      </div>
   <!-- end row 5-->
   <?php
   //$application="applied";

   if(isset($_POST['print']))
   {
    echo '<script>window.location.href="status_booked.php";</script>';
   }
   ?>

   
      </form>
     <?php
         
      }//end main if(isset)
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
  function showDiv(divId, element)
{
  //document.getElementById("cash").style.visibility="visible";
  
    document.getElementById(divId).style.display = element.value == 1 ? 'block' : 'none';
   // document.getElementById("cash").style.visibility="hidden";
  
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


