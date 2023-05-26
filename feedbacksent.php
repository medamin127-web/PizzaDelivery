<?php
    include('connection.php');  
    
    if (isset($_POST['submit']))  {
    
    $fullname = $_POST['fullname'];
    if(!empty($_POST['review'])) {
        $review = $_POST['review'];
    }
    else{
        $review = "";
    }
    $subject = $_POST['subject'];

    

    $sql = "insert into feedback values (0,'$fullname','$review','$subject')"; 
    $result = mysqli_query($con,$sql);
    header("location:home.php");


    }


?>