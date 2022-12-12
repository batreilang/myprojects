<?php
include"connection.php";
session_start();

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <style type="text/css">
        .banner
        {
            width: 100%;
            height: 100vh;
            background-image: linear-gradient(rgba(0,0,0,0.75),rgba(0,0,0,0.75)),url(owner_upload/0.jpg);
            background-size: cover;
            background-position: center;
        }
        .navbar
        {
            width: 85%;
            margin: auto;
            padding: 35px 0;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        .logo
        {
            width: 120px;
            cursor: pointer;
            font-size: 28px;
            color: white;
        }
        .navbar ul li
        {
            list-style: none;
            display: inline-block;
            margin: 0 20px;
            position: relative;

        }
        .navbar ul li a
        {
            text-decoration: none;
            color: white;
            text-transform: uppercase;
        }
        .navbar ul li::after
        {
            content: '';
            height: 3px;
            width:0;
            background: #009688;
            position: absolute;
            left: 0;
            bottom: -10px;
            transition: 0.5s;
        }
        .navbar ul li:hover::after
        {
            width: 100%;

        }
        .content
        {
            width: 100%;
            position: absolute;
            top: 45%;
            transform: translateY(-50%);
            text-align: center;
            color: white;
        }
        .content h1 
        {
            font-size: 40px;
            margin-top: 70px;
        }
        .content p
        {
            margin: 20px auto;
            font-weight: 100px;
            line-height: 25px;
        }
    
        
        /*start media 600px*/
        @media screen and (max-width: 600px) 
        {
            
        }
        .navbar
        {
            background-color: transparent;
          
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

      .navbar ul
      {
        float: left;
        margin-right: 20px;
      }

      .navbar ul li
      {
        display: inline-block;
        line-height: 80px;
        margin: 0 5px;
      }
      .navbar ul li a
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
        float: left;
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
        .pop-container
        {
            width: 400px;
            display: block;
            padding: 10px 20px ;
            background: transparent;
        }
        label.logo
        {
          font-size: 30px;
          padding-left: 50px;
        }
        .navbar ul li a
        {
          font-size: 16px;
        }
        div.banner div.pop-container
        {
            position: absolute;
            top: 70%;
            left: 50%;
            
        }
      }

      @media (max-width: 680px)
      {
        .pop-container
        {
            width: 400px;
            display: block;
            padding: 10px 20px ;
            background: transparent;
        }
        div.banner div.pop-container
        {
            position: absolute;
            top: 70%;
            left: 50%;
            
        }
          
        .checkbtn{
          display: block;
        }
        .checkbtn
        {
            padding: 10px 5px;
        }
        ul
        {
          position: absolute;
          width: 80%;
          top:0px;
          height: 5vh;
          background-color: transparent;
          left: -100%;
          transition: all .5s ease;
          display: inline-block;
        }
       .navbar ul li {
          display: inline-block;
          margin: 10px ;
          line-height: 15px;
          
        }
        .navbar ul li a {
          font-weight: 20px;
          line-height: 20px;
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
        .content h1 p 
        {
            text-align: justify;
            font-size: 20px;
        }
      }
   .content h1 p 
    {
        text-align: justify;
        font-size: 20px;
    }
    p 
    {
        font-size: 20px;
    }

 
   .pop-container
    {
        width: 400px;
        height: 600px;
        display: block;
        padding: 10px 20px ;
        background: transparent;
        border-radius: 20px;
    }

    .pop-container
    {
        position: absolute;
        top: 60%;
        left: 50%;
        transform: translate(-54%, -36%)
    }
    .pop-container 
    {
        position: absolute;
        right: 20px;
        top: 15px;
        font-size: 25px;
        cursor: pointer;
    }


   

    input,select
    {
        display: block;
        width: 90%;
        background: transparent;
        border: none;
        outline: none;
        border-bottom: 1px solid white;
        padding: 10px;
        color: white;
    }
    .submit
    {
        display: block;
        width: 90%;
        background: transparent;
        border: none;
        outline: none;
      
        padding: 10px;
        color: white;
        display: block;
    width: 95%;
    padding: 8px;
    border: none;
    outline: none;
    background: linear-gradient(to right, #cbb4d4, 
    #20002c);
    color: white;
    font-size: 18px;
    cursor: pointer;
    margin-top: 20px;

    }
  

    .link
    {
        margin-top: 30px;
        text-align: center;
        color:white;
    }

    a:hover
    {
        text-decoration: underline;
    }
    button{
    display: block;
    width: 95%;
    padding: 8px;
    border: none;
    outline: none;
    background: linear-gradient(to right, #cbb4d4, 
    #20002c);
    color: white;
    font-size: 18px;
    cursor: pointer;
    margin-top: 20px;

}
select
{
    width: 360px;
    height: 36px;
}
    </style>
        <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>
<body>
    <div class="banner">
        <div class="navbar">
            <input type="checkbox" id="check" name="">
                <label for="check" class="checkbtn">
                  <i class="fas fa-bars"></i>
                </label>
                <label class="logo">MegHostel</label>
                
                <ul>
               
                  <li style="font-size: 17px;">
                    <a  href="">About Us </a>
                  </li>
                  <li  style="font-size: 17px;">
                    <a  href="">Our Service</a>
                  </li>
                   
                </ul>
        </div>
         <div class="content">
            <form method="POST">
            <div class="pop-container">
                <h3>Hostel Owner Register Page</h3>
                <label style="float: left;">Fullname</label>
                <input   type="text" placeholder="Enter your name" name="name" required>
                <label style="float: left;">Email </label>
                <input type="text" placeholder="Enter your email" name="email" required>
                <label style="float: left;">Contact No. </label>
                <input type="text" placeholder="Enter your number" name="phone" required>
                <label style="float: left;">Address </label>
                <input type="text" placeholder="home address" name="address" required>
                <label style="float:left;">Password</label>
                <input type="password" name="pass1" required="" id="pass1" >
                <label style="float:left;">Gender</label>
                  <select name="gen" style="color:white;">
              <option value="Male" style="color:black;">Male</option>
              <option value="Female" style="color:black;">Female</option>
              <option value="Other" style="color:black;">Other</option>
            </select>
                <div id="pas" style="color:red">
                    
                  </div>
               
              
                <a href="#" style="text-decoration:none;background:transparent;color: white;">Forgot Password?</a>
                <input type="submit" name="sub" value="Register" class="submit">
                <div class="link"> <a href="owner_login.php" style="text-decoration:none">Already Have an account</a></div><br>
                <br>
            </div>
        </form>
        </div>

        <?php
            include "connection.php";
            if(isset($_POST['sub']))
            {
              $name=$_POST['name'];
              $email=$_POST['email'];
              $phone=$_POST['phone'];
              $add=$_POST['address'];
              $password1=$_POST['pass1'];
              $gender=$_POST['gen'];
        
              $sql1="SELECT * from hostel_owner where email='$email' and phone=$phone;";
              $result1=mysqli_query($con,$sql1);
              $check=mysqli_num_rows($result1);
              if($check>0)
              {
                echo '<script>alert("User eamil already registered");</script>';

              }
              else
              {
                 if ($_SERVER["REQUEST_METHOD"] == "POST") 
                 {
                    $sql="INSERT into hostel_owner(name,email,phone,address,password,gender) values('$name','$email',$phone,'$add','$password1','$gender');";
                      $result=mysqli_query($con,$sql);
                    if($result)
                    {
                        echo '<script>alert("Successfull"); window.location.href = "owner_login.php";</script>';
                     }
                  }
              }//end of check user

          }//end main if..isset()



            ?>
    </div>
</body>
<script type="text/javascript">


</script>


</html>