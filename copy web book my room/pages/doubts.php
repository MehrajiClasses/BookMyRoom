<?php
$Doubts =$_POST['query'];
//connection
$con2 = new mysqli('localhost','root','','registrationDetails');
   if($con2 ->connect_error){
      die('Connection failed : ' . $con2->connect_error);
   }else{
      $stmt = $con2->prepare("insert into Queries(Doubts)
      values(?)");
      $stmt->bind_param("s",$Doubts );
      $stmt ->execute();
      echo "message sent successfully";
     
      $stmt ->close();
      $con2 -> close();
   }

   ?>