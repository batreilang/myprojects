

<?php
session_start();
$hs_id=$_GET['hostelid'];



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
 display: none;
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
.col1-25 {
  float: left;
  width: 45%;
  margin-top: 6px;
}
.col12-75 {
  float: left;
  width: 100%;
  margin-top: 6px;
}

.col1-75 {
  float: left;
  width: 55%;
  margin-top: 6px;
}

.col-25 {
  float: left;
  width: 30%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 55%;
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
    border-radius: 4px;
    background-color:rgba(0,0,0,0);

  }
  .row img:hover
  {
    transform: scaleX(1.04);
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
.row h5.hname
{
  font-size: 25px;
  font-style: italic;
  line-height: 30px;
  font-weight: bold;

}
.row h5
{
  font-size: 17px;
  font-style: normal;
  line-height: 20px;
  font-weight: 20px;
}
h3 a
{
  width: 200px;
  cursor: pointer;
  color: black;
  padding: 5px;
  background-color: transparent;
  object-fit: cover;
  cursor: pointer;
  transition: 0.2s ease;

  background-color:rgba(0,0,0,0);
}
h3 a:hover
{
background-color: #45a049;

}
p.detail  {
    display: block;
    margin-block-start: 1em;
    margin-block-end: 1em;
    margin-inline-start: 0px;
    margin-inline-end: 0px;
}
 p.detail {
    margin: 0 0 10px;
}
.rwo .detail
{
      margin-bottom: 30px;
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
  text-align: center;

}
.back:hover
{
   background-color: #45a049;
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
     .img_gallery
  {
    height: 50px;
    width: 100%;
  }
     .col1-25, .col1-75
   {
    width: 100%;
    margin-top: 0;

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
      top: 68px;
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
  
    #check:checked ~ ul
    {
      left: 0;
    }
  }


/*start media 600px*/
@media screen and (max-width: 600px) 
{
  .img_gallery
  {
    height: 50px;
    width: 100%;
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
   .col1-25, .col1-75
   {
    width: 100%;
    margin-top: 0;

   }
  .col-25, .col-75, input[type=submit] 
  {
    width: 100%;
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
   
    height: 68px;
    width: 100%;
    position: fixed;
    top: 0px;
  }


}/*end media 600px*/
.row p
{
    text-align: justify;
    font-size: 18px;
}
@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}
#dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}
#fade {
  animation-name: fade;
  animation-duration: 1.5s;
}
.active {
  background-color: #717171;
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
<div class="wrapper" style="padding-top: 10%;">
    <div style="" class="ser">
      <form method="POST" class="example" style="text-align: center;">
      <input type="text" placeholder="Search by address name.." name="search" class="search">
      <h2 class="">Here are the details of the Hostel</h2>
      </form>
    </div>
    <div class="container">
         <!-- query to retrieve the hostel details from hostel_info and hostel_owner tables-->               
   
         
        <form action="" method="post">
         
            <?php  
                   $sql11="SELECT * from hostel_info where   hostel_id=$hs_id;";
                  $res1=($con->query($sql11));
                  if($res1)
                  {
                    while($row1=mysqli_fetch_array($res1))
                    {
                      $owner_id=$row1['owner_id'];
                      $hostelname=$row1['hostel_name'];
                      $hosteladdress=$row1['hostel_address'];
                      $more_details=$row1['more_details'];
                      $hosteltype=$row1['hostel_type'];
                      $hostel_id=$row1['hostel_id'];
                      $img=$row1['hostel_profile'];
                      $available_room=$row1['available_room'];
                      $date=$row1['date_info'];
                      $hostel_id=$row1['hostel_id'];
                      $owner_id=$row1['owner_id'];
                       //$owner_id=$row['owner_id'];
                      
                    }
                  }
                  else
                  {
                    echo '<script>alert("Failed");</script>';
                  }

                 
                 ?>
                  <?php  
                   $sql12="SELECT * from hostel_owner where   owner_id=$owner_id;";
                  $res12=($con->query($sql12));
                  if($res12)
                  {
                    while($row12=mysqli_fetch_array($res12))
                    {
                     $name=$row12['name'];
                     $email=$row12['email'];
                     $phone=$row12['phone'];
                    }
                  }
                  else
                  {
                    echo '<script>alert("Failed");</script>';
                  }
                  
                 
                 ?>
 
        <!-- row1 start-->
        <div class="row">
          <div class="col-25">

             <img src="<?php echo $img;?>" alt="defer"  alt="View Gallery">
           
          </div>
          <div class="col-75">
            <div class="row" >
              <h5 class="hname"><?php echo $hostelname?>&nbsp; is Own by&nbsp;<?php echo $name?></h5><br>
              <h3>Hostel Descriptions:</h3>
              <p class="detail"><?php echo $more_details;?></p>
              <p>Update on.<?php echo $date;?><br>
                <?php echo $hosteltype;?><br>
                 Available Rooms.<?php echo $available_room;?>
              </p>
            </div>
          </div>
       </div><!--end row 1-->
      
      <div class="row">
         <div class="col-75">
            <p><h5>Hostel's office Contact no.&nbsp; <?php echo $phone?></h5>
              <h5>Hostel's office email Id :&nbsp;<?php echo $email?></h5></p>
         </div>
       </div>
       <br>
          <a href="gallery1.php?hostel_id=<?php echo $hs_id;?>"><h3>Browse Gallery</h3>
      <div class="row">
          <?php
                                  
                  $sq="SELECT * from galleries where hostel_id=$hs_id;";
                  $re=($con->query($sq));
                  if($re)
                  {
                    while($rw=mysqli_fetch_array($re))
                    {
                        $img=$rw['image'];
                   
                  ?>
                 
       
        <div class="col12-75" style="padding:10px;font-size:20px;color: red; background-color: transparent;" id="mySlides fade">
          <img src="<?php echo $img;?>" alt="defer"   style="height: 150px; width: 100%;" class="img_gallery"></a>
        </div>
      </div>
      <div style="text-align:center">
        <span class="dot"></span> 
              <?php
      }
      }?>  </div>
      

       
       
        <hr>
        <h2 style="text-align:center">Hostel Facilities</h2>
        <?php
              $sq="SELECT *from hostel_facilities where hostel_id=$hs_id;";
              $re=($con->query($sq));
              if($re)
              {
                $checkf=mysqli_num_rows($re);
                if($checkf==0)
                {
                  echo '<br><h3 style="text-align:center"> This Hostel has No hostel Facilities </h3><hr>';

                }
                else
                {
                  while($rw=mysqli_fetch_array($re))
                  {
                      $electric=$rw['electricity'];
                      $water=$rw['water'];
                      $internet=$rw['internet'];
                      $safety=$rw['safety'];
                  }
                  ?>
                  <div class="row"><!-- start row1-->
                    <div class="col1-25" style="border:1px solid; padding:10px">
                      <h3>Electricity</h3>
                        <p style="text-align:justify;font-size:20px;" ><?php echo $electric;?></p> <br>     
                    </div>
                    <div class="col1-75" style="border:1px solid; padding:10px" >
                      <h3>Water</h3>
                        <p style="text-align:justify;font-size:20px;"><?php echo $water;?></p> <br>
                    </div>
                  </div><!-- end row1-->

                  <div class="row"><!-- start row2-->
                    <div class="col1-25" style="border:1px solid; padding:10px" >
                      <h3>Internet</h3>
                        <p style="text-align:justify;font-size:20px;"><?php echo $internet;?></p> <br>
                    </div>
                    <div class="col1-75" style="border:1px solid; padding:10px" >
                      <h3>Safety</h3>
                        <p style="text-align:justify;font-size:20px;"><?php echo $safety;?></p> <br>
                     </div>
                  </div><!-- end row2-->
                  <br>
                  <hr>
                  <?php
               
              }
            }
              else
              {
                echo '<script>alert("The query Failed to fetch data from hostel_facilities");</script>';
              }
        ?>
      <br>
      <h2 style="text-align:center"> Hostel Rule and Regulations</h2>
       <?php
          $sq1="SELECT *from hostel_rules where hostel_id=$hs_id;";
          $re1=($con->query($sq1));
          if($re1)
          {
            $rule=mysqli_num_rows($re1);
            if($rule==0)
            {
              echo '<br><h3 style="text-align:center"> This Hostel has No rules and regulations<hr> </h3>';
            }
            else
            {
              while($rw1=mysqli_fetch_array($re1))
              {
                  $rule_re=$rw1['hostel_rule_regulation'];
              }
              ?>
              <div class="row" style="border: 1px solid;">
                <div class="col1-75">
                  <p style="text-align: justify;padding: 10px;">
        
                  <?php 
                    $splitted_text = explode("\n",  $rule_re);
                    for($i = 1; $i < count($splitted_text); $i++)
                    {
                      echo '<hr>';
                        file_put_contents("file_$i", $splitted_text[$i].'');

                        //to display a file just use echo file_get_contents($file_name) as such :
                        echo "$i .";
                        ?>
                        <p style="font-size:20px;color: black;">
                        <?php echo file_get_contents("file_$i"); //note that you could echo $splitted_text[$i]
                       echo '</p><br>';
                    }
                  ?></p>
                </div>
              </div>
              <br>


              <?php
            }
           
          }
          else
          {
            echo '<script>alert("Failed");</script>';
          }
        ?>
      <div class="row">
        <div class="col-25">
          <input type="submit" name="back" value="Back">
              <br>
        </div>
          <div class="col-75">
              <!--<a href="user_page1.php" class="" style="background-color:transparent">Back</a>-->&nbsp;&nbsp;&nbsp;

            <input type="submit" name="up" value="Book Now ">
          </div>
      </div>
       <?php
       if(isset($_POST['up']))
       {
          if($available_room==0)
          {
            echo '<script>alert("Try another one since there is no more seat.. ");
            window.location.href="user_page1.php";</script>';


          }
          else
          {
            $_SESSION['hostel_id']=$hostel_id;
            $_SESSION['owner_id']=$owner_id;
            echo '<script>window.location.href="book_room.php"</script>';
          }

       }
       elseif(isset($_POST['back']))
       {
        echo '<script>window.location.href="user_page1.php"</script>';
       }


       ?>

      
      </form>
    </div>
 
  </div>
  <footer style="background:white; text-align:center;padding: 50px;">
    <p></p>
    
        <h2>Follow us in social media</h2>
    
      <a href="https://www.facebook.com" style="text-decoration:none"><img src="facebook.png" style="height: 25px;width: 27px;">
   
       <a href="https://www.instagram.com"><img src="instagram.png" style="height:25px;width: 27px;"></a>
   
        <a href="https://www.youtube.com"><img src="youtube.png" style="height: 25px;width: 27px;"></a>
     
  </footer>
 
<script>
let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("col12-75");
  let dots = document.getElementsByClassName("dot");

  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>

</body>
</html>


