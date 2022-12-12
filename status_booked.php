
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
<div class="wrapper">
  <br>
    <div class="container">    
                
       <form method="POST">
     
      <br>

       <?php 
      
       //
       $s="SELECT * from book where hostel_id=$hostel_id and student_id=$student_id;";
       $r=($con->query($s));
       $c=mysqli_num_rows($r);
       if($c>0)
       {
      
        $q2="SELECT * from payment where student_id=$student_id and hostel_id=$hostel_id ;";
        $q3=($con->query($q2));
        if($q3)
        {
          while($row=mysqli_fetch_array($q3))
          {
            $status_fees=$row['status_fees'];
            $reference_no=$row['reference_no'];
          }
          //get the hostel name
           $qq="SELECT * from hostel_info where hostel_id=$hostel_id;";
           $rr=($con->query($qq));
           if($rr)
           {
            while($row1=mysqli_fetch_array($rr))
            {
              $hostelname=$row1['hostel_name'];
              $hosteltype=$row1['hostel_type'];
            }
           }
          if($status_fees==1)
          {

            echo '
                <div class="row">
    
                  <h4 style="font-size:17px; text-align: center;">Thank You for Choosing our Hostel<br>
                    We will do everything to make our Hostel runs in a good ways.
                  </h4>
                </div>
                <br>
                <div class="row"> 
                  <div class="col-25">
                    <h4 style="text-align:justify; color: red; font-style: italic;">Noted: For those Students who have been paid the Hostel Addmision or those students who  paid online for the Hostel addmission, remember  there is no refund system will give you only 20 days after you paid the hostel addmission fees. Otherwise we will cancell your application.   </h4>
                    
                  </div>
                </div>
                <br>
                <hr><hr>
                 <div class="row">
                    <div class="col-25"><label>Hostel Name</label></div>
                    <div class="col-75"><label>';?><?php echo $hostelname;?><?php echo '</label></div>
                  </div>
                  <div class="row">
                    <div class="col-25"><label>Hostel Type</label></div>
                    <div class="col-75"><label>';?><?php echo $hosteltype;?><?php echo '</label></div>
                  </div>
                  <br>
                 <div class="row">
                  <div class="col-25">
                    <label>Hostel Addmission Fees:</label>
                  </div>
                  <div class="col-75">
                    <label>Has been Paid</label>
                    <input type="checkbox" name="applied"  checked><br> 
                    <label>Reference No. </label>';?><?php echo $reference_no?>
                  <?php echo '</div>
                </div>
                <br> 
                <div class="row">
                  <div class="col-25">
                    <label>Payment Mode:</label>
                  </div>
                <div class="col-75">
                  <label>Online</label>
                  <input type="checkbox" name="online" checked ><br>   
                  <label>Offline</label>
                  <input type="checkbox" name="offline" ><br>   
                </div>
              </div>
              <br>
              <div class="row">
                <div class="col-25">
                  <label>Application on the Way</label>
                </div>
                <div class="col-75">
                  <label>Applied</label>
                  <input type="checkbox" name="applied" checked><br>
                  <label>Accepted</label>
                  <input type="checkbox" name="accept" checked>
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
                <div class="col-75">
                  <input type="submit"     name="cancel" value="Cancel Application">
                </div>
              </div>
              <br>
               <hr><hr>
          </form>';
          }//end if(status==1)
          else
          {
            echo '
      <div class="row">
    
    
   
          <h4 style="font-size:17px; text-align: center;">
            
          Thank You for Choosing our Hostel<br>
            We will do everything to make our Hostel runs in a good ways.

          </h4>
          
     
      </div>
      <br>
      <div class="row">
        
        <div class="col-25">
          <h4 style="text-align:justify; color: red; font-style: italic;">Noted: For those Students who have not been paid the Hostel Addmision or those students who chosed to pay offline for the Hostel addmission, remember  we will give you only 5 days after you booked the seat. Otherwise we will cancell your application.   </h4>
          
        </div>
      </div>
      <br>
      <hr><hr>
       <div class="row">
          <div class="col-25"><label>Hostel Name</label></div>
          <div class="col-75"><label>';?><?php echo $hostelname;?><?php echo '</label></div>
        </div>
        <div class="row">
          <div class="col-25"><label>Hostel Type</label></div>
          <div class="col-75"><label>';?><?php echo $hosteltype;?><?php echo '</label></div>
        </div>
        <br>
       <div class="row">
        <div class="col-25">
          <label>Hostel Addmission Fees:</label>
        </div>
        <div class="col-75">
          <label>Not yet Paid</label>
          <input type="checkbox" name="applied" checked><br>   
          <label>Paid</label>
          <input type="checkbox" name="applied" ><br>   

        </div>
      </div><br> 
        <div class="row">
        <div class="col-25">
          <label>Payment Mode:</label>
        </div>
        <div class="col-75">
          <label>Online</label>
          <input type="checkbox" name="online" ><br>   
          <label>Offline</label>
          <input type="checkbox" name="offline" checked ><br>   
        </div>
      </div><br>


      <div class="row">
        <div class="col-25">
          <label>Application on the Way</label>
        </div>
        <div class="col-75">
          <label>Applied</label>
          <input type="checkbox" name="applied" checked><br>
          <label>Rejected</label>
          <input type="checkbox" name="reject"><br>
          <label>Accepted</label>
          <input type="checkbox" name="accept">
          
        </div>
      </div><br>

     <hr><hr>
   





  ';
          }
        }//end if(q3)
      }//end if($c)
    else
    {
      echo '
        <div class="row">
        
        <div class="col-75">
          <h4 style="text-align:justify; color: red; font-style: italic;"> No APPLICATION<BR>
          GO TO THE HOME PAGE..... <a href="user_page1.php"> home page</a> </h4>
          
        </div>
      </div>';

    }
  ?>
      <div class="row">
        <div class="col-25">
          <label>Click here to see your applications</label>
          <a href="status_application.php"> My Applications </a>
        </div>
      </div>
      <?php
      $s="SELECT * from book;";
      $res=($con->query($s));
      if($res)
      {
        $num=mysqli_num_rows($res);
        if($num==0)
        {
          echo '<script>window.location.href="user_page1.php";</script>';
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


