
<?php
include "connection.php";
session_start();

if($_SESSION['email'])
{
   //$_SESSION['student_id']=$student_id;
  $user_email=$_SESSION['email'];
  $student_id=$_SESSION['student_id'];
  $hostel_id=$_SESSION['hostel_id'];
  $user_id=$_SESSION['user_id'];


          

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
  margin-top: 0px;
  font-weight: 40px;
  line-height: 40px;

}
input[type=text], select, textarea {
  width: 50%;
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
 

/*start media 600px*/
@media screen and (max-width: 600px) 
{

  #back::after{
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
    width: 200px;
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
    div.wrapper h2
  {
    text-align:center;font-weight: 50px;line-height: 20px;
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
  div.wrapper h2
  {
    text-align:center;font-weight: 50px;line-height: 20px;
  }
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
#hidden_div {
    display: none;
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
   <h2 style="text-align:center;font-weight: 80px;line-height: 80px;">Addmission Fees  can  be paid online/offline.</h2>
    <div class="container">       
            <?php
            /* query for retrieving details from student table*/
            $q2="SELECT * from student_form where hostel_id=$hostel_id;";
            $r2=($con->query($q2));
            if($r2)
            {
              while($row12=mysqli_fetch_array($r2))
              {
             //   $student_id=$row12['student_id'];
               // $_SESSION['student_id']=$student_id;
              
              }
            }
            else
            {
              echo '<script>alert("Query failed");</script>';
            }
            /* query for retrieving details from book table*/
            $q2="SELECT * from book where hostel_id=$hostel_id;";
            $r2=($con->query($q2));
            if($r2)
            {
              while($row12=mysqli_fetch_array($r2))
              {
                $book_id=$row12['book_id'];
                  //$_SESSION['book_id']=$book_id;
        


              }
            }
            else
            {
              echo '<script>alert("Query failed");</script>';
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

              }
            }
            else
            {
              echo '<script>alert("Query failed");</script>';
            }
             

            ?>
           
       <form method="POST" enctype="multipart/form-data">
       <!-- start row 3-->
          <div class="row">
            <div class="col-75">
              <label>Hostel Addimission Fees</label>
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="fees" value="<?php echo $hostel_admission_fees;?>" readonly>
              
            </div>
            <div class="col-75">
              <label>Monthly Mess Fees</label>
           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="mess" value="<?php echo $mess_fees?>" readonly>
             
            </div>

          </div>
         <!-- end row 3-->
         <div class="row">
           <div class="col-75">
            <label>Monthly Establishment Fees</label>
             &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="esta" value="<?php echo $esta;?>" readonly>
            
             
           </div>
           <div class="col-75">
             <label  >Select Payment Types</label><span style="color:red">*</span>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;
                    <select name="payment" onchange="showDiv('hidden_div', this)">
                       <option value="0">By Cash</option>
                       <option value="1">Online Payment</option>
                    </select>
                    <br>
                    <br>
                    <div style="text-align:center" id="cash">
                       &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;<span style="text-align:center;color: red;">Offline payment for Hostel Addmission Fees  is to be made directly at the Hostel Office. We will give you only 10 days to pay the hostel addmission fees after you booked the seat otherwise we will cancell your seat..</span>
                    </div>
                     <?php
                      
                        ?>
                       
            </div>
          </div><br>
          <div class="row">
            <div class="col-75" >
              <div id="hidden_div" style="text-align: center;">
                  <br><b>Note:</b><em style="font-size:13px;color: black; text-align: center;" >Online Payment for Hostel Addmission we accept Only UPI like<br>
                    Gpay here below this there is a QR code of Gpay you can scan it and pay<br> the hostel addmission fee.Remember to enter the reference number after paid the <br>hostel addmission fees through Gpay.</em><br>
                    <br>
                    <img src="g.jpg" style="height:300px;width:300px">
                    <br>
                    <br><input type="text" name="ref" placeholder="reference number after paid using the above qr code">

              </div>
              
            </div>
          </div>
    <!-- start row 10-->
          <div class="row">
            <br>
            <div class="col-75">
              <a href="studen_form_edit.php" class="back" id="back">Back</a>&nbsp;&nbsp;&nbsp;
              <input type="submit" value="Complete Booking" name="submit"  id="sub">
              <br>
            </div>
           
          </div><!--end row 10 -->

          </form>
          <?php
          if(isset($_POST['submit']))
          {
            
            $fees=$_POST['fees'];
            $mess=$_POST['mess'];
            $esta=$_POST['esta'];
            $payment_type=$_POST['payment'];
            $reference_no=$_POST['ref'];
            //echo $payment_type;
            $owner_id=$_SESSION['owner_id'];
            if($payment_type=='0')
            {
              $payment_type='By Cash';
              $status=0;
              /* check if the user already placeed the payment for hostel addmission or not*/
             $ch="SELECT * from payment where hostel_id=$hostel_id and student_id=$student_id;";
             $re12=($con->query($ch));
             $check=mysqli_num_rows($re12);
              if($check>0)
              {
                 echo '<script>//alert("You already booked the seat...");
                 window.location.href="user_page1.php";</script>';
             }
             else
              {
                $inORout=1;
                $s="INSERT into payment(payment_method,hostel_addmission_fees,student_id,hostel_id,book_id,status_fees,owner_id,inORout) 
                values('$payment_type',$fees,$student_id,$hostel_id,$book_id,$status,$owner_id,$inORout);";
                $re=($con->query($s));
                if($re)
                {
                  echo '<script>alert("Your seat is Placed");
                  window.location.href="addmission_fees_cash.php";
                  
                 </script>';

                }
                else
                {
                  echo '<script>alert("query failed");</script>';
                  //echo $student_id;
                  error_reporting(0);

                }
              }
              
            }
            elseif($payment_type=='1')
            {
              $payment_type='Online payment';
              $status=1;
               /* check if the user already placeed the payment for hostel addmission or not*/
             $ch="SELECT * from payment where hostel_id=$hostel_id and student_id=$student_id;";
              $re12=($con->query($ch));
              $check=mysqli_num_rows($re12);
              if($check>0)
             {
                  echo '<script>alert("You already booked the seat...");
                 window.location.href="user_page1.php";</script>';
             }
             else
              {
                $inORout=11;
                $s="INSERT into payment(payment_method,reference_no,hostel_addmission_fees,student_id,hostel_id,book_id,status_fees,owner_id,inORout) 
                values('$payment_type','$reference_no',$fees,$student_id,$hostel_id,$book_id,$status,$owner_id,$inORout);";
                $re=($con->query($s));
                if($re)
                {
                  echo '<script>alert("Your seat is Placed and done addmission fees")
                  window.location.href="addmission_fees_UPI.php";
                  
                 </script>';

                }
                else
                {
                  echo '<script>alert("query failed");</script>';
                  error_reporting(0);

                }
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

<script>
  function showDiv(divId, element)
{
  //document.getElementById("cash").style.visibility="visible";
  
    document.getElementById(divId).style.display = element.value == 1 ? 'block' : 'none';
   // document.getElementById("cash").style.visibility="hidden";
  
}
/*
function myFunction() {
document.getElementById("online").style.visibility="hidden";
 var x = document.getElementById("mySelect");
 if(x.value=="By Cash")
 {
  document.getElementById("demo").innerHTML = "Offline payment for Hostel Addmission Fees  is to be made directly at the Hostel Office: ";

 }
 else if(x.value=="UPI")
 {
  document.getElementById("online").style.visibility="visible";
  document.getElementById("demo").innerHTML = "Online payment for Hostel Addmission Fees  we accepted Visa and UPI to.: ";

 }
}*/
</script>

<?php
}
else
  { //window.location.href = "user_login.php";
echo '<script>window:location.href="user_login.php";</script>';
   }?>
</body>
</html>


