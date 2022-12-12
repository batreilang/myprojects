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
            top: 50%;
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
        .navbar
        {
            background-color: transparent;
          
            height: 80px;
            width: 100%;
            position: fixed;
            top: 0;
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
          background-color:transparent;
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
           .pop-container
    {
        width: 400px;
        height: 500px;
        display: block;
        padding: 10px 20px ;
      
    }

    .pop-container
    {
        position: absolute;
        top: 60%;
        left: 50%;
        transform: translate(-52%, -36%)
    }
    .pop-container 
    {
        position: absolute;
        right: 20px;
        top: 15px;
        font-size: 25px;
        cursor: pointer;
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
        height: 500px;
        display: block;
        padding: 10px 20px ;
      
    }

    .pop-container
    {
        position: absolute;
        top: 60%;
        left: 50%;
        transform: translate(-52%, -36%)
    }
    .pop-container 
    {
        position: absolute;
        right: 20px;
        top: 15px;
        font-size: 25px;
        cursor: pointer;
    }


   

    input
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
a:hover
{
    text-underline-position: 0px;
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
                <h1>Student Log-In Page</h1>
                <p><label style="float: left;">Email or Phone</label>
                <input type="text" name="email" required>
                <label style="float:left;">Password</label>
                <input type="password" name="pass" required>
                <a href="" style="text-decoration:none;color: white; background: transparent;">Forgot Password?</a>
                <input type="submit" name="sub" value="Log In" class="submit">
                <div class="link">New user<a href="user_register.php" style="text-decoration:none;color: white; background: transparent;">&nbsp;Sign up here</a></div><br></p>
                <br>
            </div>
        </form>
        </div>

        <?php
        include"connection.php";
            if(isset($_POST['sub']))
            {
                $email=$_POST['email'];
                $pass=$_POST['pass'];
                $sql="SELECT * from user where emai='$email' and password='$pass';";
                $re=($con->query($sql));
                $row  = mysqli_fetch_array($re);
                if($re)
                {
                    if(is_array($row))
                    {
                        if($email==$row['emai'] && $pass==$row['password'])
                        {

                            $_SESSION['email']=$email;
                            $_SESSION['user_id']=$row['id'];
                           echo '<script>window.location.href="user_page1.php"</script>';
                            
                        }
                    }
                }
                else
                {
                    echo '<script>alert("Query Failed");</script>';
                }

            }//end if isset()


        ?>
    </div>
</body>


</html>