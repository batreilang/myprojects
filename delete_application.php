
<?php
include "connection.php";
session_start();

if($_SESSION['email'])
{
  $hostel_id=$_GET['hostel_id'];
          

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
<div class="wrapper">
  <br>
 
    <div class="container">
         <!-- query to retrieve the hostel details from hostel_info and hostel_owner tables-->               
                
       <form method="POST">
     
      <br>

       <?php 
        $sq="SELECT * from hostel_info where hostel_id=$hostel_id;";
        $res=($con->query($sq));
        if($res)
        {
          while ($row=mysqli_fetch_array($res))
          {
            $hostelname=$row['hostel_name'];
            $hosteladdress=$row['hostel_address'];
            $hosteltype=$row['hostel_type'];
            $hostel_city=$row['city'];
            $hostel_admission_fees=$row['hostel_addmission_fees'];
            // code...
          }
        }
        else
        {
          echo 'Query failed';
        }
        ?>
                <div class="row">
    
                  <h4 style="font-size:17px; text-align: center;">Delete Your application
                  </h4>
                </div>
                <br>
                <div class="row"> 
                  <div class="col-75">
                    <h4 style="text-align:justify; color: red; font-style: italic;">Noted: For those Students who have been paid the Hostel Addmision if you cancell the application  remember  there is no refund system.  </h4>
                    
                  </div>
                </div>
                <br>
                <hr><hr>
                 <div class="row">
                  <div class="col-25">
                    <label>Hostel Name:</label>
                  </div>
                  <div class="col-75">
                    <label><?php echo $hostelname;?></label>
                    
                  </div>
                </div>
                <div class="row">
                <div class="col-25">
                  <label>Hostel City</label>
                </div>
                <div class="col-75">
                  
                  <label><?php echo $hostel_city;?></label>
                  
                </div>
              </div>
              <br>
                <br> 
                <div class="row">
                  <div class="col-25">
                    <label>Hostel Address</label>
                  </div>
                <div class="col-75">
               
                  <label><?php echo $hosteladdress;?></label>
                 
                </div>
              </div>
              <br>
              <div class="row">
                <div class="col-25">
                  <label>Hostel Type</label>
                </div>
                <div class="col-75">
                  
                  <label><?php echo $hosteltype;?></label>
                  
                </div>
              </div>
              <br>
              <div class="row">
                <div class="col-25">
                  <label>Hostel Addmission Fees</label>
                </div>
                <div class="col-75">
                  
                  <label><?php echo $hostel_admission_fees;?></label>
                  
                </div>
              </div>
              <br>
              <div class="row">
                <div class="col-25">
                  <label>Cancell Application Due to:</label>
                </div>
                <div class="col-75">
                 <select name="cancel">
                   <option>I got addmission to the other Hostel with low cost</option>
                   <option>Too far from my institute</option>
                  
                   <option></option>
                 </select><br>

                </div>
              </div>

              <br>
              <div class="row">
                <div class="col-25"><a href="status_application.php" style="text-decoration:none;font-size: 15px;padding: 20px;">Back</a></div>
                <div class="col-75">
                  <input type="submit"     name="cancel" value="Cancel Application">
                </div>
              </div>
              <br>
              <hr><hr>
          </form>

    </div>
 
  </div>
  <?php
  if(isset($_POST['cancel']))
   {
    $sq="DELETE  from payment where hostel_id=$hostel_id;";
    $re=($con->query($sq));

    $sq1="DELETE  from book where hostel_id=$hostel_id;";
    $re1=($con->query($sq1));

    if($re and $re1 )
    {
      echo '<script>alert("Application Successfull deleted");
      window.location.href="status_application.php"
      </script>';
    }
   
  }
   ?>
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


