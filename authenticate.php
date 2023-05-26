<?php
      
   
   include('connection.php');  

   $email = $_POST['email'];  
   $password = $_POST['password']; 
   
   $email = stripcslashes($email);  
   $password = stripcslashes($password);  
   $email = mysqli_real_escape_string($con, $email);  
   $password = mysqli_real_escape_string($con, $password);  

// Now we check if the data from the login form was submitted, isset() will check if the data exists.
if ( !isset($email, $password) ) {
	// Could not get the data that should have been sent.
	exit('Please fill both the email and password fields!');
}

$sql = "select * from accounts where email = '$email' and password = '$password'";  

$result = mysqli_query($con, $sql);  
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
$count = mysqli_num_rows($result);  
$data = mysqli_fetch_assoc($result);

$error = "<h4>username/password incorrect</h4>";

if($count == 1){  

	$_SESSION['id']= $row['id'];
   setcookie('id', $row['id']); 
   $_SESSION['name']= $row['last_name'];
   if ($row['role']=='admin')
   {

      header("location:dashboard.php"); 
   }
	if ($row['role']=='client')
   {
      $id=1;
      $query="select * from siteinfo where id = $id ";
      $result1 = mysqli_query($con, $query);  
      $row1 = mysqli_fetch_array($result1);
      $visitors = $row1['visit_num'] + 1 ;
      $sql="update siteinfo set visit_num ='$visitors'";
      $result2=mysqli_query($con, $sql);
      header("location:home.php"); 
   }
}  
else{  
   $_SESSION["error"] = $error;
	header("location: Login.php"); //send user back to the login page.
}     
?>
