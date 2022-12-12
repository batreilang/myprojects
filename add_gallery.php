<?php
    session_start();
     if(!isset($_SESSION['use']) && $_SESSION['owner_id']) // If session is not set then redirect to Login Page
       {
           header("Location:owner_log.php");  
       }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.tutorialjinni.com/intl-tel-input/17.0.8/css/intlTelInput.css"/>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.tutorialjinni.com/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
 <style type="text/css">

fieldset {
 border: medium none !important;
 margin:  0 0 10px;
 min-width: 100%;
 width: 100%;
}
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
    <div class="container" style="background-color:ghostwhite;">
        <form id="contact" action="" method="post" enctype="multipart/form-data">
            <h1 style="text-align:center">Adding The Photo Gallery  </h1>
            <div class="row" style="text-align:center;">
                <!-- first column -->
                <div class="column">                        
                   <fieldset>
                    

                        <input type="file"  name="file" required>
                   </fieldset>
                </div>
                <!-- second column -->
            
            <!-- submit button -->
            <fieldset>
                <button type="submit" id="button" name="up" style="width:100px;border-radius:10px;height: 30px;">Upload</button>
            </fieldset>
            </div>
        </form>
           <?php
        include('connection.php');
        // to get the hostel id
        $hostel_id=$_SESSION['hostel_id'];
        $owner_id=$_SESSION['owner_id'];
    
    if(isset($_POST['up']))
    {
        $targetDir = "gallery/";
        $fileName = $_FILES["file"]["name"];
        $targetFilePath = $targetDir . $fileName;
        $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
        if(!empty($_FILES["file"]["name"]))
        {
            //allow the images to upload only these extension
            $allowTypes = array('jpg','png','jpeg','gif','pdf');
            if(in_array($fileType, $allowTypes))
            {
            
                if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath))
                {
                
                    if ($_SERVER["REQUEST_METHOD"] == "POST") 
                    {
                       $insert = $con->query("INSERT into galleries (image,hostel_id) VALUES ('$fileName',$hostel_id)");
                        if($insert)
                        {
                           echo '<script>alert("Hostel Register Successfull");
                            if (confirm("Do you want to add some more?")) 
                            {
                                location.href = "add_gallery.php";
                            }
                            else
                            {
                                 location.href = "hostel_facilities.php";

                            }</script>';
                        }
                        else
                        {
                            echo '<script>alert("File upload failed, please try again.");</script>';
                        exit(1);
                            
                        } 

                        
                    }
                    
                }
                else
                {
                     echo '<script>alert("Sorry, there was an error uploading your file.");</script>';
                   exit(1);
                }
            }
            else
            {
                echo '<script>alert("Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload..");</script>';
                   exit(1);
                
            }
        }
        else
        {
              echo '<script>alert("Please select a file to upload..");</script>';
                   exit(1);
       
        }
    }
    

        
      ?>
    </div>
</div>
 
 
    <!-- Javascript to initialize the code list -->
    <script>
    var input = document.querySelector("#phone");
    window.intlTelInput(input, {
     separateDialCode: true
     });
  </script>
  <!-- Javascript to initialize the code list -->


</body>
</html>