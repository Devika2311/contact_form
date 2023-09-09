<?php
  include 'connect.php';
    $name=$_POST['name'];
    $email=$_POST['email'];
    $subject=$_POST['subject'];
    $message=$_POST['message'];


    $sql="insert into contact_form_info(name,email,subject,message)values('$name','$email','$subject','$message')";
    $result=mysqli_query($con,$sql);
    if($result)
    {
      echo "Thank you for contacting me !! ";
      
    }
    
  //   if($result)
  //   {
  //     header('location:display.php');
  //   }
  //   else
  //   {
  //     die(mysqli_error($con));
  //   }
  // ?>