<?php
  error_reporting(0);
   $Name =$_POST['name'];
   $mobileNumber =$_POST['number'];
   $Email =$_POST['email'];
   $Address =$_POST['address'];
   $Hnum =$_POST['house'];
   $Password =$_POST['password'];
   $Image =$_POST['photo'];
   $RoomType =$_POST['rooms'];

   //database connection -
   $con = new mysqli('localhost','root','','registrationDetails');
   if($con ->connect_error){
      die('Connection failed : ' .$con->connect_error);
   }else{
      $stmt = $con->prepare("insert into OwnerRegistration(Name , mobileNumber , Email , Address , Hnum , Password , Image ,RoomType )
      values(?, ?, ?, ?, ?, ?, ?, ?)");
      $stmt->bind_param("sississs",$Name , $mobileNumber , $Email , $Address , $Hnum , $Password , $Image ,$RoomType );
      $stmt ->execute();
      echo "Registration Successfully...";
      header('location:login1.html');
      $stmt ->close();
      $con -> close();
   }
  
?>
