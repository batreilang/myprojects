

<?php
session_start();
include"connection.php";
    if(!isset($_SESSION['use'])) // If session is not set then redirect to Login Page
       {
           header("Location:owner_login.php");  
       }
       else
       {
        $owner_id=$_SESSION['owner_id'];
        $user=$_SESSION['use'];





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
  .col-25, .col-75
  {
    width: 100%;
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
  table tr th td
  {
    font-size: 15px;
  }
  table
  {
    display:inline-grid;
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
table {
  border-collapse: collapse;
  border-spacing: 0;
  width: 100%;

  
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}
p.ppp
{
  text-align:justify;line-height: 30px; font-weight: 30px;
}
thead.thead tr th
{
  color: green;

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
        <a href="owner_logout.php">Log Out </a>
      </li>
    </ul>
  </nav>
<div class="wrapper">
  
  <br><h2> Welcome Mr/Ms.&ensp;<b style="color: red;"><?php 
                    $sq="SELECT * from hostel_owner where email='$user';";
                    $res=($con->query($sq));
                    if($res)
                    {
                      while($row=mysqli_fetch_array($res))
                      {
                        echo $row['name'];
                     
                    }
                  }
                  else
                  {
                    echo 'Query failed';
                  }
                ?></b></h2>
 
    <div class="container">
         <!-- query to retrieve the hostel details from hostel_info and hostel_owner tables-->               
      
      <form method="POST"> 
        <br>
         
        <br>
        <div class="row">
          <div style="overflow-x:auto;">
            
         
                 <?php
                      include"connection.php";
                      $sql="SELECT *  from hostel_info where owner_id=$owner_id;";
                      $result=($con->query($sql));
                      if($result)
                      { 
                          $check=mysqli_num_rows($result);
                          if($check==0)
                          {
                            echo '<div class="row">
                                  <div class="col-25"></div>
                                  <div class="col-75"> <p style="text-align:center; font-size: 30px;">No data has been sets...<br> </p></div>
                                </div>';
                                ?>
                                <div class="row">
                                  <div class="col-25"></div>
                                  <div class="col-75">
                                   
                                     <h3 style="text-align:center">Click here to add register your hostel info <a style="font-size:20px; text-decoration: none; color: blue;" href="hostel_info.php?owner_id=<?php echo $_SESSION['owner_id'];?>">Add Hostel</a></h3>
                                    
                                  </div>
                                </div>
    
                                
                                <?php

                          }
                          else
                          {
                            ?>
                        
                            <div class="row">
                              <div class="col-75">
                                <h3 style="text-align:center"> <a style="font-size:20px; text-decoration: none; color: blue;" href="hostel_info.php?owner_id=<?php echo $_SESSION['owner_id'];?>">Add Hostel </a></h3>
                              </div>
                            </div>
                            <br>
                            <?php


                          $i=1;
                          while($row=mysqli_fetch_array($result))
                          {
                            $hostelname=$row['hostel_name'];
                            $hosteltype=$row['hostel_type'];
                            $hosteladdress=$row['hostel_address'];
                            $hostelroom=$row['hostel_room'];
                            $a_room=$row['available_room'];
                            $img=$row['hostel_profile'];
                            $hostel_id=$row['hostel_id'];
                        ?>
                            <table>
                              <thead class="thead">
                                <tr>
                                  <th>S.No</th>
                                  <th>Hostel's Name</th>
                                  <th>Hostel's Type</th>
                                  <th>Hostel's Address</th>
                                  <th>Available Room</th>
                                  <th>Action </th>
                                </tr>
                              </thead>
                              <thead>
                              <tr>
                                <th ><?php echo $i;?></th>
                                <th><?php echo $hostelname;?></th>
                                <th ><?php echo $hosteltype;?></th>
                                <th ><?php echo $hosteladdress;?><br></th>
                                <th ><?php echo $a_room;?><br><a href="add_available_room.php?hostel_id=<?php echo $hostel_id;?>">Add Room</a></th>
                                <th>
                                  <a href="delete_hostel.php?hostelid=<?php echo $hostel_id;?>" onclick='return checkdelete()'>Delete Hostel</a></th>
                                <hr>
                              </tr>
                              </thead>
                            </table>
                        <?php
                            $i=$i+1;
                            }//end if while loop
                                
                            }

                          }

                        }


                     ?>
                   
                   </div>
                 </div>

 
      </form>
      <br>
      <hr><hr>
      <?php 
      if($check!=0)
      {


      ?>
      <div class="row">
        <div class="col-25">
          <?php
          $sq="SELECT * from payment where owner_id=$owner_id;";
          $res=($con->query($sq));
          if($res)
          {
            $check=mysqli_num_rows($res);
            if($check==0)
            {
              echo '';

            }
            else
            {


          ?>
          <input type="submit" name="answer" onclick="ShowDiv()"  value="View Student Responses" style="width:200px;height: 40px;background:blue;color: white;border-radius: 10px;>
          
          <?php
        }
      }
      ?>
        </div>
        </div>
        <div class="col-75">
        </div>
      </div>
      <br>
      <hr>
      <div class="row">
        <div class="" style="overflow-x:auto;">
        <?php
       
        //retrieves data from table book
        $sq="SELECT * from payment where owner_id=$owner_id;";
        $res=($con->query($sq));
        if($res)
        {
          $i=1;
          while($row=mysqli_fetch_array($res))
          {
            /* data from table book*/
          //  $book_id=$row['book_id'];
            $student_id=$row['student_id'];
            //$user_id=$row['user_id'];
            $hostel_id=$row['hostel_id'];
           // $date=$row['date_book'];
            /* end data from book*/
            $inORout=$row['inORout'];

            /* data from table payment*/
            //$payment_id=$row['payment_id'];
            $payment_type=$row['payment_method'];
            $reference_no=$row['reference_no'];
            $status_fees=$row['status_fees'];
            /* end data from table payment*/
              $qq="SELECT * from student_form where student_id=$student_id;";
              $rr=($con->query($qq));
              if($rr)
              {
                while($ro=mysqli_fetch_array($rr))
                {
                  $student_name=$ro['student_name'];
                  $student_address=$ro['student_curr_address'];

                  $q1="SELECT * from book where owner_id=$owner_id;";
                  $r=($con->query($q1));
                  if($r)
                  {
                    while($rw=mysqli_fetch_array($r))
                    {
                      $date=$rw['date_book'];
                    
              

            /* data from table student_form */
          //  $student_name=$row['student_name'];
            //$student_curr_address=$row['student_curr_address'];

       ?>
       <table id="myDiv" style="display:none;" class="answer_list">
        <thead class="thead">
          <tr>
            <th>S.No</th>
            <th>Student Name</th>
            <th>Student Address</th>
            <th>Payment Method</th>
            <th>Payment Status</th>
            <th>Date of Application</th>
            <th>Accept Application</th>
          </tr>
        </thead>
        <tr>
          <td ><?php echo $i;?></td>
          <td><?php echo  $student_name?></td>
          <td ><?php echo $student_address;?></td>
          <td ><?php echo $payment_type;?></td>
          <td ><?php
          if($status_fees==0)
          {
            echo 'NULL';

          }
          else
          {
           echo 'Paid<br>';
           echo $reference_no;
          }?></td>
          <td><?php echo $date;?></td>
          <td>
           <a href="accept_application.php?hostelid=<?php echo $hostel_id;?>" onclick='return checkdelete()'>Accept Application</a><br><br>
            <a href="reject_application_admin.php?hostelid=<?php echo $hostel_id;?>" onclick='return checkdelete()'>Reject Application</a></td>
          
       

           

        
        </tr>

      </table>
  
      <?php
      $i=$i+1;
    }}
    }
  }
        }
        }
        ?>
    </div>
    </div>
    <?php
      }
        ?>
        <!-- to delete,edit hostel info and admit Accept and rehect application--> 
       
      <div class="row">
        <div class="col-75">
           <p style="padding: 20px;" class="ppp" >
            <b>OBJECTIVES OF HOSTEL LIFE ARE:</b><br>
          1.to ensure that the students are able to devote adequate time to their studies and
research.<br>
2.to ensure that the students coming from different parts of the country learn to live
together and strengthen their relations with mutual co-operation and goodwill.<br>
3.to develop a climate congenial for co-curricular and extra-curricular activities of
students.<br></p>
        </div>
      </div>
    <div class="row">
       <img src="owner_upload/0.jpg" style="height:400px;width:100%">
      </div>
      
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
function ShowDiv() {
    document.getElementById("myDiv").style.display = "";
}
function  checkdelete() {
   return confirm('Are You Sure to delete this ..?');
  // body...
}
</script>
<?php}?>
</body>
</html>


