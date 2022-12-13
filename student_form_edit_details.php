<?php
include"connection.php";
  session_start();
    $hostel_id=$_SESSION['hostel_id'];
    $user_email=$_SESSION['email'];
    $user_id=$_SESSION['user_id'];
    $owner_id=$_SESSION['owner_id'];
    $student_id_$_SESSION['student_id'];

   

    /* query for retrieving details from student table*/
    $q2="SELECT * from student_form where hostel_id=$hostel_id;";
    $r2=($con->query($q2));
    if($r2)
    {
      while($row12=mysqli_fetch_array($r2))
      {
        $student_id=$row12['student_id'];
        $student_name=$row12['student_name'];
        $student_class=$row12['student_class'];

      }
    }
    else
    {
      echo '<script>alert("Query failed");</script>';
    }
    /* query for retrieving details from hostel info table*/
    $q3="SELECT * from hostel_info where hostel_id=$hostel_id;";
    $r3=($con->query($q3));
    if($r3)
    {
      while($row13=mysqli_fetch_array($r3))
      {
        $hostelname=$row13['hostel_name'];
        $hosteltype=$row13['hostel_type'];
        $hosteladdress=$row13['hostel_address'];

      }
    }
    else
    {
      echo '<script>alert("Query failed");</script>';
    }

            

    if(isset($_POST['edit']))
    {
        $student_name=$_POST['sname'];
        $student_gender=$_POST['gender'];
        $student_phone=$_POST['sphone'];
        $student_email=$_POST['semail'];
        $student_curr_address=$_POST['cadd1'];
        $student_curr_district=$_POST['dadd1'];
        $student_curr_pincode=$_POST['padd1'];
        $student_per_addres=$_POST['cadd'];
        $student_per_district=$_POST['dadd'];
        $student_per_pincode=$_POST['padd'];
        $institute_name=$_POST['sin'];
        $institute_address=$_POST['in_add'];
        $student_class=$_POST['sclass'];
        $student_course=$_POST['cname'];
        $student_father=$_POST['fname'];
        $student_mother=$_POST['mname'];
        $student_parent_contact=$_POST['p_g_phone'];
        $query1="UPDATE  student_form 
                  set 
                    student_name='$student_name',
                    student_gender='$student_gender', 
                    student_contact_no='$student_phone',
                    student_email='$student_email', 
                    student_curr_address='$student_curr_address',  
                    student_curr_district='$student_curr_district', 
                    student_curr_pin='$student_curr_pincode',  
                    student_per_address='$student_per_addres', 
                    student_per_district='$student_per_district',  
                    student_per_pin='$student_per_pincode', 
                    student_institution='$institute_name', 
                    institute_address='$institute_address',
                    student_class='$student_class', 
                    student_course='$student_course',  
                    student_father='$student_father',
                    student_mother='$student_mother',  
                    student_parent_contact='$student_parent_contact'  
                  where student_id=$student_id; ";
          $res1=($con->query($query1));
          if($res1)
          {
            echo '<script>alert("Editting Your Details is Succeddfull You may procced with Booking");
            window.location.href="studen_form_edit.php";</script>';

          }
          else
          {
             echo '<h3 style="text-align:center;font-size:30px;font-weight:70px;line-weight:70px;top:50%;padding-top:200px">
          404 Error in the Server<br>
         
          <a href="studen_form_edit.php" style="text-decoration:none; color: blue; font-size:25px">Click here to go back to last page</a>
      </h3>';

          }


    }
  elseif (isset($_POST['proceed']))
  {
    //check if the student already booked the hostel
    $s="SELECT * from book where student_id=$student_id and hostel_id=$hostel_id;";
    $sq=($con->query($s));
    $check=mysqli_num_rows($sq);
    if($check>0)
    {
      echo '<script>alert("You already booked the this Hostel");
      window.location.href="final_booking.php";</script>';
    }
    else
    {
      $date=date("Y-m-d");
     // $owner_id=$_SESSION['owner_id'];
      $q4="INSERT into book(student_id,hostel_id, user_id,date_book,owner_id)values($student_id,$hostel_id,$user_id,'$date',$owner_id);";
      $r4=($con->query($q4));
      if($r4)
      {
        $_SESSION['student_id']=$student_id;
        echo '<script>window.location.href="final_booking.php";</script>';
      }
      else
      {
        
        echo '<h3 style="text-align:center;font-size:30px;font-weight:70px;line-weight:70px;top:50%;padding-top:200px">
            404 Error in the Server<br>
            Try to reachs us afted Sometimes
            <a href="studen_form_edit.php" style="text-decoration:none; color: blue; font-size:25px">Click here to go back to last page</a><br>
        ';
         echo '</h3>';
      }

    }
    


  }


    ?>
