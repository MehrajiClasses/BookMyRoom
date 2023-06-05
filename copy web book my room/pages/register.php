<?php
   $firstName =$_POST['fname'];
   $lastName =$_POST['lname'];
   $mobileNumber =$_POST['number'];
   $locality =$_POST['local'];
   $password =$_POST['password'];

   //database connection -
   $con = new mysqli('localhost','root','','registrationDetails');
   if($con ->connect_error){
      die('Connection failed : ' . $con->connect_error);
   }else{
      $stmt = $con->prepare("insert into Registration(firstName , lastName , mobileNumber , locality , password )
      values(?, ?, ?, ?, ?)");
      $stmt->bind_param("ssiss",$firstName, $lastName ,$mobileNumber, $locality, $password, );
      $stmt ->execute();
      echo "Registration Successfully...";
      //sending control into login page
      header('location:login.html');
      $stmt ->close();
      $con -> close();
   }
  
?>