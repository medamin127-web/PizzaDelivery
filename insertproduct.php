<?php  
include('connection.php');  


if (isset($_POST['submit'])) {


    $name = $_POST['name']; 
    $price = $_POST['price'];
    $type = $_POST['test'];
    $filename = $_FILES["uploadfile"]["name"];
    $tempname = $_FILES["uploadfile"]["tmp_name"];
    $folder = "./media/" . $filename;


       // Get all the submitted data from the form
       $sql = "insert into products (name,price,type,image) values ('$name','$price','$type','$filename')";

        // Execute query

        mysqli_query($con, $sql);

          // Now let's move the uploaded image into the folder: image
    if (move_uploaded_file($tempname, $folder)) {
        echo "<h3>  Image uploaded successfully!</h3>";
        header("location:productmangement.php");
        
    } else {
        echo "<h3>  Failed to upload image!</h3>";
    }
    }
?>