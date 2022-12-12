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
                <h3>Student Register Page</h3>
                <label style="float: left;">Username</label>
                <input type="text" name="username"  required>
                <label style="float: left;">Email </label>
                <input type="text" name="email" required >
                <label style="float: left;">Contact No. </label>
                <input type="text" name="phone" required >
                <label style="float:left;">Password</label>
                <input type="password" name="pass1" required="" id="pass1" onkeyup="check()">
                <div id="pas" style="color:red">
                    
                  </div>
                <label style="float:left;">Confirm Password</label>
                <input type="password" name="pass2" required="" id="pass2" onkeyup="checkPasswordMatch();">
              
                <a href="#" style="text-decoration:none;background:transparent;color: white;">Forgot Password?</a>
                <input type="submit" name="sub" value="Register" class="submit">
                <div class="link"> <a href="user_login.php" style="text-decoration:none">Already Have an account</a></div><br>
                <br>
            </div>
        </form>
        </div>

        <?php
            include "connection.php";
            if(isset($_POST['sub']))
            {
              $username=$_POST['username'];
              $phone=$_POST['phone'];
              $email=$_POST['email'];
              $password1=$_POST['pass1'];
              $password2=$_POST['pass2'];

              $sql="SELECT * from user where  emai='$email';";
              $result=($con->query($sql));
              $check=mysqli_num_rows($result);
              if($check>0)
              {
                echo '<script>alert("phone no. or email id Already Registered...try another");</script>';
              }
              else
              {
                if($password1 == $password2)
                {
                  $sql1="INSERT into user(id,uname,phoneno,emai,password) values(NULL,'$username','$phone','$email','$password1');";
                  $result2=($con->query($sql1));
                  if($result2)
                  {
                     echo '<script>alert("Register Successfull..You can Login now");
                      window.location.href = "user_login.php";
                     </script>';

                  }
                  else
                  {
                     echo '<script>alert("Register Failed..Try again");</script>';
                  }
                }// end if ..check confirm password
              }// end else ..check user
           
          }//end main if..isset()



            ?>
    </div>
</body>
<script type="text/javascript">
    function check() 
      {
        $("#pas").html("password must contain numbers,alphabets,special symbols * and the length must be < 8 or ==8").addClass('text-danger').removeClass('text-success');

       
      }
    function checkPasswordMatch() {
         $("#pas").html("Successfull").addClass('text-success').removeClass('text-danger');
        var password = $("#pass1").val();
        var confirmPassword = $("#pass2").val();

        if (password != confirmPassword)
            //document.getElementById(message).innerHTML="Passwords do not match!";
           $("#message").html("Passwords do not match!").addClass('text-danger').removeClass('text-success');

        else
            // document.getElementById(message).innerHTML="Passwords do  match!";
            $("#message").html("Passwords match.").addClass('text-success').removeClass('text-danger');
    }

  const validateEmail = (email) => {
  return email.match(
    /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
  );
};

const validate = () => {
  const $result = $('#result');
  const email = $('#email').val();
  $result.text('');

  if (validateEmail(email)) {
    $result.text(email + ' is valid ');
    $result.css('color', 'green');
  } else {
    $result.text(email + ' is not valid.. try the right one..');
    $result.css('color', 'red');
  }
  return false;
}

$('#email').on('input', validate)

</script>


</html>