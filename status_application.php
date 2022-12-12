
<?php
session_start();
include "connection.php";
if ($_SESSION['email'])
{

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@100.6.1/dist/js/bootstrap.bundle.min.js"></script>
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
    font-family: montserrat;
  }

  select
  {
    width: 65%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    resize: vertical;
  }

  input[type=text], select, textarea 
  {
    width: 80%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    resize: vertical;
  }

  label 
  {
    padding: 12px 20px 12px 0;
    display: inline-block;
  }

  input[type=submit] 
  {
    background-color: #04AA6D;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    width: 170px;
  }

  input[type=submit]:hover 
  {
    background-color: #45a049;
  }

  .container 
  {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
  }

  .col-25 
  {
    float: left;
    width: 25%;
    margin-top: 6px;
  }

  .col-75 
  {
    float: left;
    width: 75%;
    margin-top: 6px;
  }

  .row:after 
  {
    content: "";
    display: table;
    clear: both;
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

  .row
  {
    border-radius: 4px;
    padding: 8px;
    margin: 8px;
    background-color:rgba(0, 0, 0,0);
    cursor: pointer;
    transition: 0.2s ease;
  }

  .row img
  {
    width: 100%;
    height: 300px;
    object-fit: cover;
    cursor: pointer;
    transition: 0.2s ease;
    padding: 8px;
    border-radius: 4px;
    background-color:rgba(0,0,0,0);

  }
  .row img:hover
  {
    transform: scaleX(1.04);
  }
  .row img h4
  {
    padding: 5px;
    transition: transform 0.2s;
    position: relative;
    color: black;
  }

  nav
  {
    background-color: #63a3ad;
  
    height: 80px;
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
  h2.h
  {
    padding-top: 5%;
  }
  div.ser
  {
    text-align: center;
    padding: 0 0px ;
    line-height: 80px;
  }

  .cen 
  {
    position: absolute;
    top: 50%;
    left: 15%;
    transform: translate(-50%, -50%);
  }
  a
  {
    cursor: pointer;

    color: black;
  }
  .row em
  {
    font-size: 15px;
    font-style: italic;
  }
  .button
  {
      padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    resize: vertical;
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

  @media (max-width: 680px)
  {
      p.ppp
    {
      text-align: center;
      text-align:justify;line-height: 20px; font-weight: 20px;
    }
    img.src 
    {
      display: none;
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
      top: 80px;
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
  
  img .src 
  {
    display: none;
  }
  .cen {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  }
  div.ser
  {
    text-align: center;
    padding: 0 0px ;
    line-height: 140px;
  }
  .col-25, .col-75, input[type=submit] 
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
   
    height: 80px;
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
    div.wrapper
  {
    padding-top: 50px;
  }
  .bar 
  {
    display:block;
  }
  label.lab img
  {
    display: block;
  }

}/*end media 600px*/

.bar
{
  display:none ;
}
label.lab img
{
  display: none;
}

a.back
{
   background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  width: 400px;
  text-decoration: none;
}

a.back:hover {
  background-color: #45a049;
}
table {

  border-spacing: 0;
  width: 100%;

  
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}
img .src 
{
  height:300px;width:300px
}
p.ppp
{
  text-align:justify;line-height: 30px; font-weight: 30px;
}
</style>
<meta charset="utf-8">

    <!--Jquery CDN link -->
    <script src="https://code.jquery.com/jquery-3.100.1.js"></script>
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
      <li style="font-size: 25px;"><a href="user_page1.php" >Home</a></li>
      <li style="font-size: 25px;">
        <a  href="">About Us </a>
      </li>
      <li>
        <a  href="">Our Service</a>
      </li>
       <li style="font-size: 25px;">
        <a href="user_logout.php">Log Out </a>
      </li>
      <?php
      $user_email=$_SESSION['email'];
      $sql="SELECT * from user where emai='$user_email'";
      $res=($con->query($sql));
      if($res)
      {
        while($r=mysqli_fetch_array($res))
        {
          $user_id=$r['id'];
        }
      }
      $s="SELECT * from book where user_id=$user_id;";
      $r=($con->query($s));
      if($r)
      {
        $check=mysqli_num_rows($r);
        if($check>0)
        {
          while($row=mysqli_fetch_array($r))
          {
            $book_id=$row['book_id'];
            $student_id=$row['student_id'];
            $_SESSION['student_id']=$student_id;
            $hostel_id=$row['hostel_id'];
             $_SESSION['hostel_id']=$hostel_id;
            $user_id=$row['user_id'];
          }
        

        }
        
      }

      ?>
     
    </ul>
  </nav>

<div class="wrapper" style="padding-top: 10%;">
    <div class="container">
         <!-- query to retrieve the hostel details from hostel_info and hostel_owner tables-->               
      <form action="POST">
        <!-- row1 start-->
        <?php
        
          // extract the information from user table
          $s="SELECT * from user where id=$user_id;";
          $res=($con->query($s));
          if($res)
          {
            while($row12=mysqli_fetch_array($res))
            {
              $user_email=$row12['emai'];

            }
          }
          // check if no one has been booked 
          $qq="SELECT * from book;";
          $re1=($con->query($qq));
          if($re1)
          {
            $count=mysqli_num_rows($re1);
            if($count>0)
            {


            // extract the information from student table
          $s1="SELECT * from student_form where student_id=$student_id;";
          $res1=($con->query($s1));
          if($res1)
          {
            while($row12=mysqli_fetch_array($res1))
            {
              $student_name=$row12['student_name'];
              $student_email=$row12['student_email'];

              
            }
          }
            // extract the information from hostel_info table
      

        ?>
        <?php
          $sq="SELECT * from book, payment where book.book_id=payment.book_id; ";
          $re=($con->query($sq));
          if($re)
          {
            $i=1;
            while($row=mysqli_fetch_array($re))
            {

              $student_id=$row['student_id'];
              $hostel_id=$row['hostel_id'];
              $user_id=$row['user_id'];
              $payment_type=$row['payment_method'];
              $reference_no=$row['reference_no'];
              $hostel_admission_fees=$row['hostel_addmission_fees'];
              $status_fees=$row['status_fees'];
              $inORout=$row['inORout'];
                 //$hostel_id=$_SESSION['hostel_id'];
              $ss="SELECT * from hostel_info where hostel_id=$hostel_id;";
              $ress=($con->query($ss));
              if($ress)
              {
                while($row12=mysqli_fetch_array($ress))
                {
                  $hostelname=$row12['hostel_name'];
                  $hosteladdress=$row12['hostel_address'];
                  $hostel_admission_fees=$row12['hostel_addmission_fees'];

                  
                  
                }
              }

         
          ?>
        <div class="row">
          <div style="overflow-x:auto;">
            <table>
              <thead>
                <tr>
                  <th>S.No</th>
                  <th>Hostel's Name</th>
                  <th>Student Name</th>
                  <th>Application Status</th>
                  <th>Action</th>
                  <th></th>
          
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td ><?php echo $i;?></td>
                  <td><?php echo $hostelname;echo $hostel_id;?></td>
                  <td ><?php echo $student_name;?><br></td>
                  <td><?php 
                        if($inORout==0)
                        {
                          echo 'Rejected';
                        }
                        elseif ($inORout==11) {
                          echo 'Accepted';
                          // code...
                        }
                        elseif($inORout==1)
                        {
                          echo 'On-The-Way';
                        }
                       
                 // echo $status_fees;?></td>
                    <td><a href="status_booked.php" style="color:blue;font-weight:20px">View Application</a><br><br>
                      <a href="delete_application.php?hostel_id=<?php echo  $hostel_id;?>" style="color:red">Delete Application </a></td>
                
                    </tr>
                    <hr>
              </tbody>
              <hr>
            
         </table>
           <?php
               $i=$i+1;
             }
           }
           ?>
       </div>
          
        </div>
        <?php
               }
               elseif($count==0)
               {
                echo '<script>window.location.href="user_page1.php";</script>';
               }
          }
        ?>

      </form>
      <div class="row">
        <hr>
        <h4 style="text-align:center">
            <p style="text-align:justify;font-weight:40px;line-height:40px">
              <b><un>OBJECTIVES OF HOSTEL LIFE ARE:</un></b><br>
                1.to ensure that the students are able to devote adequate time to their studies and
                research.<br>
                2.to ensure that the students coming from different parts of the country learn to live
                together and strengthen their relations with mutual co-operation and goodwill.<br>
                3.to develop a climate congenial for co-curricular and extra-curricular activities of
                students.<br>
              </p>
            </h4>
      </div>
      <br>
      <div class="row">
    
          <img src="owner_upload/0.jpg" style="height:400px; width: 100%;">
  
      </div>
    </div>
 
  </div>
  <footer style="background:white; text-align:center;padding: 50px;">
    <p></p>
    
        <h2>Follow us in social media</h2>
    
      <a href="https://www.facebook.com" style="text-decoration:none"><img src="facebook.png" style="height: 25px;width: 27px;">
   
       <a href="https://www.instagram.com"><img src="instagram.png" style="height:25px;width: 27px;"></a>
   
        <a href="https://www.youtube.com"><img src="youtube.png" style="height: 25px;width: 27px;"></a>
     
  </footer>
<script type="text/javascript">
 

</script>
<?php

  }
  else
   {
    echo '<script>window.location.href="user_login.php";</script>';
  }?>
</body>
</html>


