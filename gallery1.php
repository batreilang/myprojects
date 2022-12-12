<?php
session_start();
include "connection.php";
	$hostel_id=$_GET['hostel_id'];
?>

<!DOCTYPE HTML>

<html>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
		
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta name="google-site-verification" content="a_ND1dTPKbFD2DjOkncPfRFSStk-BoO83eLDL2evloA" />
	
		
        <script src="assets/galleryassets/jquery-3.2.1.js"></script>
		<script src="assets/galleryassets/jquery.fancybox.min.js"> </script>
		<link href="assets/galleryassets/jquery.fancybox.min.css" rel="stylesheet"></script>
		       <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>

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
      font-weight: 80px;
      line-height: 80px;
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

 
div.wrapper1 h2
{
	text-align:center;font-weight: 80px;line-height: 80px;
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
.container
{
	top: 10%;
	padding-top: 50px;
}
.list-of-posts
{

    min-height:700px;  

	-webkit-column-count: 4; /* Chrome, Safari, Opera */
    -moz-column-count: 4; /* Firefox */
    column-count: 4;
	-webkit-column-width: 200px;
     -moz-column-width: 200px;
          column-width: 200px;
	
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
 
  .col-25, .col-75
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
  .bar 
  {
    display:block;
  }
  label.lab img
  {
    display: block;
  }
  .row:hover
  {
    background-color: transparent;
    color: transparent;
  }


}/*end media 600px*/



</style>
<script>
$(document).ready(function()
{
	$('[data-fancybox="images"]').
	fancybox(
 	{
		thumbs : 
	  	{
			showOnStart : true
		}
										  
	}
										  
	);

});
</script>
<style>
img{
	width:250px;
	height:200px;
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
  		<?php
			 $s="SELECT h.*,o.* from hostel_info h, hostel_owner o where h.owner_id=o.owner_id and  hostel_id= $hostel_id; ";
			 $r=($con->query($s));
			 if($r)
			 {
			 	while($ro=mysqli_fetch_array($r))
			    {
			          	$hostel_name=$ro['hostel_name'];
			    }

			 }


		?>
 		<div class="wrapper1" style="padding-top:10%">
 			<br>
      
 			<h2  style=""><?php echo $hostel_name;?>'s Photo Gallery</h2>
      <br> <a href="view_detail.php?hostelid=<?php echo $hostel_id;?>" class="back" style="padding: 10px;"><img src="back.png" style="height:17px;width: 27px">Back</a> &nbsp;&nbsp;&nbsp;
	  		<div class="container">
	  			
				
				<div class="grid" style="height:auto;">
					
	  				<div class="list-of-posts">
		  				<?php
							                		
		            	 $sq="SELECT * from galleries where hostel_id=$hostel_id;";
					      	$re=($con->query($sq));
					      	if($re)
					      	{
					       		while($rw=mysqli_fetch_array($re))
					        	{
					          		$img=$rw['image'];
					        
		            	?>
	  					<div class="post">
	  					<a href="<?php echo $img;?>"  data-fancybox="images"><img src="<?php echo $img;?>" alt="" /> </a>
	  					
	  					</div>
	  					<?php
	  							}
	  						}?>
         

	  				</div><!-- end div list-of-post-->
  
	  			</div><!-- end div grid-->
	  		</div><!-- end container-->
	  	</div>
  		
  		 <footer style="background:white; text-align:center;padding: 50px;">
    <p></p>

        <h2>Follow us in social media</h2>

      <a href="https://www.facebook.com" style="text-decoration:none"><img src="facebook.png" style="height: 25px;width: 27px;"> </a>
 
       <a href="https://www.instagram.com"><img src="instagram.png" style="height:25px;width: 27px;"></a>
 
        <a href="https://www.youtube.com"><img src="youtube.png" style="height: 25px;width: 27px;"></a>
   
  </footer>


</body>

</html>