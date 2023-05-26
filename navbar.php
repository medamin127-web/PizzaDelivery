<?php

    include('connection.php');  


    $id=$_COOKIE['id'];

    $query = " select * from accounts where id=$id"; 

    $result = mysqli_query($con, $query);
    $data = mysqli_fetch_assoc($result);
    $fullname = $data['first_name'].' '.$data['last_name'] ;



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="node_modules\@fortawesome\fontawesome-free\css\fontawesome.css" rel="stylesheet">
    <link href="node_modules\@fortawesome\fontawesome-free\css\brands.css" rel="stylesheet">
    <link href="node_modules\@fortawesome\fontawesome-free\css\solid.css" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Bayon&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style2.css">

    <style>
    .btn{
        padding: 0.5em 1em;
    font-size: 0.6em;
    font-weight: 500;
    background: transparent;
    border: 2px solid #fff1f16e;
    border-radius: 2em;
    color: white;
    }

    .btn:hover{
       background: #fff1f16e;
    
    }
    i{
    color: grey;
    font-size: 2em;
    margin: 0.2em;
    margin-top: 0.5em;
    cursor: pointer;
    }
    i:hover{
        color:white;
    }

        .badge {
    padding-left: 9px;
    padding-right: 9px;
    -webkit-border-radius: 9px;
    -moz-border-radius: 9px;
    border-radius: 9px;
    }

    .label-warning[href],
    .badge-warning[href] {
    background-color: #c67605;
    }
    #lblCartCount {
        font-size: 14px;
    background: #ff0000;
    color: #fff;
    padding: 0 5px;
    vertical-align: top;
    height: fit-content;
    margin-left: -10px;
    font-weight: 500;
    margin-top: 0.9em;
    margin-right: 1em;
    }
    </style>

</head>
<body>
    <div style="display: flex;max-width: initial;">   
    
    <nav class="navMenu">
      <a href="home.php">Home</a>
      <a href="#">Menu</a>
      <a href="feedback.php">Feedback</a>
      <a href="#">About</a>
      <div class="dot"></div>
      
    </nav>
    <div style="display: flex;
    margin-top: -0.2em;
    margin-right: -1.5em;
}">
     <?php if (isset($_COOKIE['id'])) {
         
         
      echo "<h3 style='color:white;margin-top: 0.9em;margin-right: 0.5em; color: white;
            margin-top: 1.5em;
            margin-right: 0.5em;
            text-transform: uppercase;
            font-weight: 500;font-size: 1em;'>Welcome <span style='color:yellow' >$fullname!</span>  </h3>
            
            <img src='media/bell.png' style='height: 2.2em;width: 2.2em;margin-top: 0.9em;
            margin-right: 1.2em;'>" ;
     }?>
        <?php if (isset($_COOKIE['id'])) {
             $query2 = "select * from cart where customer_id=$id";
             $result1 = mysqli_query($con,$query2);
             $count = mysqli_num_rows($result1); 
            echo "<a href='cart.php'><i class='fa-regular fa-cart-shopping'></i></a><span class='badge badge-warning' id='lblCartCount'> $count</span>";
            
        }?>
   
    <?php if (isset($_COOKIE['id'])){
        
        echo ' <a href="login.php" id="logout" style="text-decoration: none;
        color: white;curser:pointer"> 
        <button class="btn" style="">
        Logout 
        </button> </a>';
        
        }
        else{
            echo '<a href="login.php" id="logout" style="text-decoration: none;
            color: white;curser:pointer"> 
            <button class="btn" style="">
            Login 
            </button> </a>';
        }
    ?>
     
    </div>
    </div>
   

</body>
</html>