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
     /* import google font family */
@import url('https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,600;1,600&display=swap');
/* selecting everything */
* {
 padding: 0;
 margin: 0;
 box-sizing: border-box;
}
body {
 font-family: 'Open Sans', sans-serif, helvetica, Arial;
 font-weight: 400;
 font-size: 14px;
 color: black;
 /* body background image */
 background-color: ghostwhite;
 background-attachment: fixed;
 background-size: cover;
  
}
.container {
 max-width: 800px;
 width: 100%;
 margin: 0 auto;
}
#contact {
 background-color: ghostwhite;
 padding: 20px;
 margin: 50px 0;
}
#contact input, button {
 font: 400 15px 'Open Sans', sans-serif, helvetica, Arial;
}
#contact h1 {
 font-size: 35px;
 font-weight: bold;
 text-align: center;
 color: blue;
}
#contact h3 {
 margin: 5px 0px 15px;
 text-align: center;
}
.row {
 display: flex;
 width: 100% !important;
 padding: 20px 0px;
}
.row .column {
 margin: 0px 20px;
 width: 50%;
}
fieldset {
 border: medium none !important;
 margin:  0 0 10px;
 min-width: 100%;
 width: 100%;
}
#contact input {
 width: 100%;
 border: 1px solid rgb(150, 150, 150);
 background-color: white;
 padding: 10px;
 margin: 5px 0;
}
input[type = "radio"] {
 width: 10% !important;
}
#contact .row .radio {
 border: 1px solid rgb(150, 150, 150);
 background-color: white;
 margin: 7px 0 10px;
 padding: 5px;
}
#contact .row .idCard{
 display: flex;
 height: 45px !important;
 margin: 5px 0;
}
#contact .row .idCard :first-child {
 width: 80px;
}
#contact .row .idCard :last-child {
 width: 40px;
}
#contact .row #phone {
 max-width: 100% !important;
 padding-right: 80px;
}
#contact input:hover {
 transition: border-color 0.3s ease-in-out;
 border: 1px solid rgb(68, 68, 68);
}
#contact button {
 outline: none;
 border: none;
 background-color: blue;
 color: white;
 margin: 0 0 5px 40%;
 padding: 10px;
 font-size: 17px;
 width: 150px;
}
 
#contact button:hover {
 background-color: rgba(0, 0, 255, 0.8);
}
 
#contact input:focus {
 outline: 0;
 border: 1px solid red;
}
 
/* mobile responsive mode */
@media screen and (max-width: 580px)  {
 .row {
  flex-direction: column;
 }
 .row .column {
  width: 90% !important;
 }
 #contact .row #phone {
 padding-right: 180px;
}
}
 </style>
</head>
<body>
    <div class="w3-top">
  <div class="w3-bar w3-white w3-padding w3-card" style="font-size: 20px;">
    <h2><a href="#home" class="w3-bar-item w3-button">MegHostel</a></h2>
    <!-- Right-sided navbar links. Hide them on small screens -->
    <div class="w3-right w3-hide-small">
      <a href="#about" class="w3-bar-item w3-button">About</a>
      <a href="#menu" class="w3-bar-item w3-button">Menu</a>
      <a href="#contact" class="w3-bar-item w3-button">Contact</a>
    </div>
  </div>
</div>
<p></p>
<p></p>
<br>
    <div class="container" style="background-color:ghostwhite;">
        <form id="contact" action="" method="post" enctype="multipart/form-data">
            <h1>Adding Images </h1>
            <div class="row">
                <!-- first column -->
                <div class="column">                        
                   <fieldset>
                        <p>Upload File</p>
                        <input type="file"  name="file" required>
                   </fieldset>
                </div>
                <!-- second column -->
            </div>
            <!-- submit button -->
            <fieldset>
                <button type="submit" id="button" name="up">Upload</button>
            </fieldset>
        </form>
           <?php
        include('connection.php');
    if(isset($_POST['up']))
    {
        $targetDir = "owner_upload/";
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
                        $sql="SELECT * from images where image='$fileName'";
                        $result=mysqli_query($con,$sql);
                        if($check=mysqli_num_rows($result)>0)
                        {
                            echo '<script>alert("Image already there in Datsbase");</script>';
                            exit(1);
                        }
                        else
                        {
                            $insert = $con->query("INSERT into images (image) VALUES ('$fileName')");
                            if($insert)
                            {
                               echo '<script>alert("Hostel Register Successfull");window.location.href = "add_more_details.php";</script>';
                            }
                            else
                            {
                                echo '<script>alert("File upload failed, please try again.");</script>';
                            exit(1);
                                
                            } 

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