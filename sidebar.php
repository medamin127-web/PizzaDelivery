<?php
// 86400 = 1 day
include('connection.php');  


    if (isset($_SESSION['id']) && !isset($_COOKIE['id']))
    {
        $id = $_SESSION['id'];
        setcookie('id', $id); 
    }

    $query = " select * from orders ";
    $result = mysqli_query($con, $query);
    $count = mysqli_num_rows($result); 
//setcookie("id", , time() - 3600);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fjalla+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">

    
    <title>Document</title>


    <style>
        body{
            background: #fffde5;


        }
        .sidebar{
            margin-top: 2em;
            background:white;
            height: 110vh;
            max-width: 16%;
            float: left;
        }
        .top{
            display: flex;
        }
        .top div {
            margin-left: 1em;
            text-align: center;

        }
        
       .menu {
           margin-top:4em;
       }
       .menu ul li {
           margin-top:3em;
           list-style-type: none;
       
           padding: 0;
           
           
       }
       a {
        text-decoration: none;
        color:grey;
        font-family:roboto
       }
       a:hover{
           color:rgb(254 161 0);

       }
       i{
        color: rgb(254 161 0);
        font-size: 2em;
        float: right;
        margin-right: 0.5em;
       }
       
       .first img {
           margin:auto;
           margin-right:3em;
           margin-top:1em ;
           cursor: pointer;

       }
       
       .buttons {
  color: white;
  display: inline-block; /* Inline elements with width and height. TL;DR they make the icon buttons stack from left-to-right instead of top-to-bottom */
  position: relative; /* All 'absolute'ly positioned elements are relative to this one */
  padding: 2px 5px; /* Add some padding so it looks nice */
}

/* Make the badge float in the top right corner of the button */
.button__badge {
  background-color: #fa3e3e;
  border-radius: 2px;
  color: white;
 
  padding: 1px 3px;
  font-size: 10px;
  
  position: absolute; /* Position the badge within the relatively positioned button */
  top: 0;
  right: 0;
}
        
    </style>
</head>


<body>

    
    
        <div class="top" style="max-width: max-content;margin-left: 1em;">
          
        <img src="media/img.jpg" style="margin-top: 0.5em;
        border-radius: 50%;
        width: 3.5em;
        height: 3.8em;
        float: left;
        margin-top: 0.8em;
        ">
        <div style="margin-top: 0.2em;"> 
            <h3 style="font-family: roboto;font-size: 0.9em;color:grey">
                Mohamed Amin Hawala               
            </h3>
            <p style="font-family:roboto;color:rgb(254 161 0);font-size: 0.8em;">Site Admin</p>

        </div>
        
        </div>
        

        <div class="menu" >
           
        <ul>
            <li>
                <a href="dashboard.php" style="text-decoration:none">Dashboard </a> 
                <i class="fa fa-home" aria-hidden="true" style="font-size: 1.85em; margin-top: -0.3em;"></i>

            </li>
            <li>
                <a href="productmangement.php" style="text-decoration:none">Product Management </a>  
                
            </li>
            <li>
                <a href="purchasehistory.php" style="text-decoration:none">Purchase History </a>
            </li>
            <li>
                <a href="feedbacks.php" style="text-decoration:none"> Reviews & Messages </a>
            </li>
        </ul>
        </div>
    
   
</body>
</html>