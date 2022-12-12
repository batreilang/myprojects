<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="form.css">
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
        <form id="contact" action="" method="post">
            <h1>Hostel Fees  </h1>
            <div class="row">
                    
                <!-- first column -->
                <div class="column"> 
                  <p>Admission Fees</p>                       
                    <fieldset>

                       <input  type="text" placeholder="Admission fees" required autofocus="" name="admission_fees">
                    </fieldset>
                    <p>Monthly Fees</p>
                    <fieldset>
                      <input   type="text" placeholder="Monthly Fees" name="monthly_fees" required autofocus="">
                    </fieldset>
                    <p>Annual Fees</p>
                    <fieldset>
                        <input    type="text" required autofocus=""  name="annual_fees" placeholder="Annual Fees">
             
                    </fieldset>
                  
                    <!-- adding all country code list -->
                    <fieldset>
                       <input  type="text" style="height:100px;width: 700px;" required  name="fees_description" placeholder="Fees Description">
                    </fieldset>
                </div>
                <!-- second column -->
                <div class="column">
                   
                    <fieldset>
                        <p>Hostel Type</p>
                        <div class="radio">
                            <input type="radio" id="male" name="hostel_type" required>
                            <label for="male">Boy's Hostel</label>
                            
                        </div>
                   
                        <div class="radio">
                            <input type="radio" id="female" name="hostel_type" required>
                            <label for="female">Girl's Hostel</label>
                        </div>
                       
                    </fieldset>
                     <fieldset>
                        <input  type="text" placeholder="hostel room" name="hostel_room" required autofocus="" >
                    </fieldset>
                   
                </div>
            </div>
            <!-- submit button -->
            <fieldset>
                <button type="submit" id="button" name="up">Add</button>
            </fieldset>
        </form>
           <?php
      include('connection.php');
      if(isset($_POST['up']))
      {
        admission_fees  monthly_fees    annual_fees fees_description
      
        $admission_fees=$_POST['admission_fees'];
        $monthly_fees=$_POST['monthly_fees'];
        $annual_fees=$_POST['annual_fees'];
        $fees_description=$_POST['fees_description'];
        
                
               if ($_SERVER["REQUEST_METHOD"] == "POST") 
               {


                $sql="INSERT into hostel_fees(admission_fees,monthly_fees,annual_fees,fees_description) 
                values($admission_fees,$monthly_fees,$annual_fees,'$fees_description');";
                $result=mysqli_query($con,$sql);
                if($result)
                {
                  echo '<script>alert("Hostel Fees Added Successfull");
                  location:href="add_images.php";window.location.href = "facilities.php";</script>';

                }
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