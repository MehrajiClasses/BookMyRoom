<?php
  $Email = $_POST['email'];
  $password = $_POST['Password'];
  
  //database connection 
  $conn = new mysqli("localhost", "root", "","registrationDetails");
  if($conn->connect_error){
    die("Failed to connect : ".$conn->connect_error);

  }else{
    $stmt = $conn->prepare("select * from OwnerRegistration where Email = ?");
    $stmt->bind_param("s",$Email);
    $stmt->execute();
    $stmt_result = $stmt->get_result();
    if($stmt_result ->num_rows>0){
        $data = $stmt_result->fetch_assoc();
        if($data['Password']=== $password){
            header('location:OwnerMenu.php');
        }

    }
  }

?>