
<?php
include "connection.php";
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

.row{
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
a.active, a:hover
{
  background: #1b9bff;
  transition: .5s;
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
        line-height: 80px;
      font-weight: 80px;
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
  label.lab img
  {
    display: block;
  }

}/*end media 600px*/

.cen {
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
  div.wrapper
  {
    padding-top: 50px;
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
      <li style="font-size: 25px;"><a href="" >Home</a></li>
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
<div class="wrapper" style="padding-top: 10%;">
    <div style="" class="ser">
      <form method="POST" action="search_city.php" class="example" style="text-align: center;">
      <input type="text" placeholder="Search by address name.." name="city" class="search">
     <button name="search" class="button">Search</button>
      </form>
    </div>
    <div class="container">
         <!-- query to retrieve the hostel details from hostel_info and hostel_owner tables-->               
               <?php
              include"connection.php";
   
           if (isset($_POST['search'])) 
           {
            $city=$_POST['city'];
            $sql="SELECT  * from hostel_info where city='$city';";
            $result=($con->query($sql));
            if($result)
            {
              while($row=mysqli_fetch_array($result))
              {
                $hostelname=$row['hostel_name'];
                $hosteltype=$row['hostel_type'];
                $hosteladdress=$row['hostel_address'];
                $hostelroom=$row['hostel_room'];
                $available=$row['available_room'];
                $img=$row['hostel_profile'];
                $hid=$row['hostel_id'];
               // $im=$row['image_id'];
                //$more_details=$row['more_details'];
             
                $i=1;

          ?>
        <form action="/action_page.php">

        <!-- row1 start-->
        <div class="row">
          <div class="col-25">
            <a  href="view_detail.php?hostelid=<?php echo $hid?>" style="text-decoration: none;font-size: 20px;">
            <img src="<?php echo $img;?>" alt="defer" >
          </div>
          <div class="col-25">
            <div class="row" style="width:100%">
              
                  <em>Hostel Name:&emsp;&emsp;<?php echo $hostelname;?></em><br>
                 <em>Hostel Type:&emsp;&emsp;&nbsp;&nbsp;<?php echo $hosteltype;?></em><br>
                  <em>Available Room:&emsp;&nbsp;<?php echo $available;?></em><br>
                  
             
            
            </div>
            <br>
            <br><br><br>
            <br><br><br>
             <a href="book_room.php" class="back">Book Room</a>
          </div>
         </a>

       </div><!--end row 1-->
        
         <?php
  }
  $check=mysqli_num_rows($result);
  if($check==0)
  {
    echo 'No data....';
  }
}
}
else
  {
    echo '<script>alert("select city");
    window.location.href="user_page1.php";</script>';

}?>
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
 
</script>

</body>
</html>


