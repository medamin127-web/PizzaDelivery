<?php  
    include('connection.php');  

    $first_name = $_POST['firstname'];
    $last_name = $_POST['lastname'];
    $tel = (int)$_POST['tel'];
    $email = $_POST['email'];  
    $password = $_POST['password']; 
    $streetad = $_POST['street_adr'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $zip = $_POST['zip'];
    $role = 'client';
    $address= $streetad . ' , ' . $zip . '/n' . $state . ' ' . $city ; 
   
    $sql = "insert into accounts values ('' , '$first_name' , '$last_name' , '$email', '$tel' ,'$password' , '$address', '$role') " ;  
    $result = mysqli_query($con, $sql); 

    if ($result) {
        header("location:Login.php");
      } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }
      
      mysqli_close($con);


?>