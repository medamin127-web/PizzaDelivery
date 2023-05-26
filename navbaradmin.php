<?php
// 86400 = 1 day
include('connection.php');  

    $id=$_COOKIE['id'];
    
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
    <title>Document</title>
    <link href="node_modules\@fortawesome\fontawesome-free\css\fontawesome.css" rel="stylesheet">
    <link href="node_modules\@fortawesome\fontawesome-free\css\brands.css" rel="stylesheet">
    <link href="node_modules\@fortawesome\fontawesome-free\css\solid.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Bayon&display=swap" rel="stylesheet">
    <style>
        body{
            background: #fffde5;
            

        }
        .sidebar{
            margin-top: 2em;
            background:white;
            height: 110vh;
            max-width: 16%;
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
        font-size: 15px;
    background: #ff0000;
    color: #fff;
    font-family: 'Roboto';
    padding: 1.5px 5px;
    vertical-align: top;
    height: fit-content;
    margin-left: -20px;
    font-weight: 500;
    margin-right: 1em;
    }
    .fa-bell:hover{
        color:#febb4b
    }
       </style>
</head>

<body>
    <div>
        <img src="media/logo2.png" style="width: 13em;">
        <div class="top first" style="float: right;
        
        margin-top:1em">
            <i class="fa-sharp fa-solid fa-bell"  style="height: 2.2em;cursor:pointer;"></i><span class='badge badge-warning' id='lblCartCount'><?php echo $count ?></span>
            <a href="purchasehistory.php" style="text-decoration:none"> <i class="fa-solid fa-message" style="width:2.2em ; height:2.2em;margin-left: 1em;"></i></a>
            <a href="login.php" ><i class="fa-solid fa-right-from-bracket" style="width:2.2em ; height:2.2em;margin-right:0"></i></a>
            
        </div>
    </div>

    
</body>
</html>