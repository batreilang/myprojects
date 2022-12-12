<?php
    session_start();
     if(!isset($_SESSION['use']) && $_SESSION['owner_id']) // If session is not set then redirect to Login Page
       {
           header("Location:owner_log.php");  
       }
       else
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
  width: 200px;
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
    float: left;

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
      <li style="font-size: 25px;"><a href="tes.php">Home</a></li>
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
  <br>
    <div class="container">    
      <form method="POST">
        <div class="row">
          <div class="col-25">
            
          </div>
          <div class="col-25"><label>Update Room</label></div>
          <div class="col-25">
            <input    type="text" required autofocus=""  name="a_room" placeholder="">
          </div>
        </div>
        <br>
        <div class="row">
          <div class="col-75">
            <input type="submit" name="up" value="Update Available Room"/> 
          </div>
        </div>
      </form>
        <?php
          include('connection.php');
          $owner_id=$_SESSION['owner_id'];
          $sq="SELECT * from hostel_info where owner_id=$owner_id and hostel_id=$hostel_id;";
          $result11=mysqli_query($con,$sq);
          if($num1=mysqli_num_rows($result11)>0)
          {
              $row1 = mysqli_fetch_array($result11);
              if(is_array($row1))
              {
                  $hostel_id=$row1['hostel_id'];
                  $available_room=$row1['available_room'];
                  $hostelroom=$row1['hostel_room'];
              }
          }
          if(isset($_POST['up']))
          {

              $a_room=$_POST['a_room'];
              $total_available=$a_room+$available_room;
            
                 $sqq="UPDATE hostel_info set available_room=$total_available where hostel_id=$hostel_id;";
                $re=($con->query($sqq));
                if($re)
                {
                   echo '<script>alert("Update Room successfull");
                    window.location.href = "tes.php";
                    </script>';
                }
             // }
          }
        ?>
    </div>
 
  </div>
 
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
?>
</body>
</html>


