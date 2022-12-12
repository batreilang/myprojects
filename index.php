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
          top:10px;
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
    .show-btn
    {
        text-align: center;
        width: 120px;
        padding: 10px 20px;
        font-size: 20px;
        font-weight: 500;
        color: white;
        cursor: pointer;
        border-radius: 20px;
        background: rgba(255, 255, 255, 0.25);

    }

    .show-btn
    {
        position: absolute;
        top: 80%;
        left: 50%;
        transform: translate(-50%, -50%);
    }

    input[type="checkbox"]
    {
        display: none;
    }

    #show:checked ~ .pop-container
    {
        display: block;
    }

    .pop-container
    {
        display:none;
        width: 350px;
        padding: 20px;
        border-radius: 4px;
        background:#ecb3ff;
        border: 1px solid rgba(255, 255, 255, 0.18);

    }
    .pop-container
    {
        position: absolute;
        top: 45%;
        left: 50%;
        transform: translate(-50%, -50%)
    }
    .pop-container .close-btn
    {
        position: absolute;
        right: 20px;
        top: 15px;
        font-size: 25px;
        cursor: pointer;
    }

    .close-btn:hover
    {
        color: red;
    }

    h1.login
    {
        text-align: center;
        color: white;
        text-transform: uppercase;
    }

    form
    {
        margin: 20px;
    }
    label
    {
        display: block;
        color: white;
        font-size: 18px;
        margin-top: 10px;
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
    .radio
    {
        display: block;
        padding: 10px;
        color: white;


    }

    a
    {
        text-decoration: none;
        color: #20002c;

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
#hidden_div {
    display: none;
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

        <div class="content" >
            <h1>Welcome To Our Service MeghaHostel</h1>
            <p>We provides a services for both the  students who's looking <br>for the hostel in Meghalaya and the Owner of the Hostel to Highlight their Hostel <br></p>
                        <br>
        </div>
        
            <br><input type="checkbox" id="show">
            <label for="show" class="show-btn">Sign In</label>
            <div class="pop-container">
                <label for="show" class="close-btn" title="close">×</label>
                <h1 class="login" style="color:black">Log In Page</h1>
                <label style="color:black">Log In as </label>
                <select name="type"  onchange="showDiv('hidden_div', this)">
                    <option value="0">Student</option>
                    <option value="1">Hostel's Owner</option>
                </select>
                <div id="students" >
                    <label style="color:black">Student Login Page </label>
                    <form action="" method="post">
                        <label style="color:black">Email or Phone</label>
                        <input type="text" name="email" required placeholder="enter student email id">
                        <label style="color:black">Password</label>
                        <input type="password" name="pass" required>
                        <a href="#" style="color:black;text-decoration: none">Forgot Password?</a>
                        <input type="submit" name="sub1" value="Student Log In" class="submit">
                        <div class="link" style="color:black">Not a member? <a href="user_register.php">Sigup here</a></div>
                    </form>
                </div>
                <div id="hidden_div" >
                    <label style="color:black">Hostel's Owner Login Page </label>
                    <form action="" method="post">
                        <label style="color:black">Email or Phone</label>
                        <input type="text" name="email" required placeholder="enter hostel's Owner email id">
                        <label style="color:black">Password</label>
                        <input type="password" name="pass" required>
                        <a href="#" style="color:black;text-decoration: none">Forgot Password?</a>
                        <input type="submit" name="sub2" value="Log In" class="submit">
                        <div class="link" style="color:black">Not a member? <a href="owner_register.php">Sigup here</a></div>
                    </form>
                </div>
                  
                    
                    
              
            </div>
        </form>
        <?php
        include"connection.php";
            if(isset($_POST['sub1']))
            {
                $type=$_POST['type'];
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
                            session_start();
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
            }
            elseif (isset($_POST['sub2']))
            {
                $sql="SELECT * from hostel_owner where email='$email' and password='$pass';";
                $result=mysqli_query($con,$sql);
                 $row  = mysqli_fetch_array($result);
                 if ($re) 
                 {
                    if(is_array($row))
                    {
                        if($email==$row['email'] && $pass==$row['password'])
                        {
                            $_SESSION['email']=$email;
                            $_SESSION['owner_id']=$row['owner_id'];
                            echo '<script> window.location.href="tes.php";</script>';      
                        }
                        else
                        {
                            echo '<script>alert("Query Failed");</script>';
                        }
                    }// end if array
                }
                else
                {
                    echo '<script>alert("Query Failed");</script>';
                }

                 
            }//end elseif

  


        ?>
    </div>
</body>
<script type="text/javascript">
function showDiv(divId, element)
{
  //document.getElementById("cash").style.visibility="visible";
  //document.getElementById("students").style.display = element.value == 1 ? 'block' : 'none';
    document.getElementById(divId).style.display = element.value == 1 ? 'block' : 'none';
     document.getElementById("students").style.display = element.value == 0 ? 'none' : 'none';
   // document.getElementById("cash").style.visibility="hidden";
  
}
</script>
</html>