<?php
session_start();

  $mobileNumber = $_POST['number'];
  $password = $_POST['password'];
 
  
  //database connection 
  $con = new mysqli("localhost", "root", "","registrationDetails");
  if($con->connect_error){
    die("Failed to connect : ".$con->connect_error);

  }else{
    $stmt = $con->prepare("select * from Registration where mobileNumber = ?");
    $stmt->bind_param("i",$mobileNumber);
    $stmt->execute();
    $stmt_result = $stmt->get_result();
    if($stmt_result ->num_rows>0){
        $data = $stmt_result->fetch_assoc();
        if($data['password']=== $password){
           $_SESSION['user_name'] = $mobileNumber;
            echo "<h2>Login Successfully</h2>";
            header('location:menu.php');
        }else{
            echo "<h2>Invalid username or password</h2>";
        }

    }else{
        echo "<h2>Invalid username or password</h2>";
    }
  }
  

?>