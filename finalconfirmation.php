<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style2.css">
    <title>Document</title>

    <style>
    
        .btnreturn{
            border: none;
            padding: 1em 2em;
            border-radius: 5px;
            background: #1361a5;
            color: white;
            font-weight: 700;
            font-size: 1em;"
            
        }
        .btnreturn:hover{
            background: #54a4eb;
        }
    </style>
</head>
<body>
<?php include('navbar.php'); ?>
  <div class="container" style="    padding: 5em;max-width: max-content;margin: auto;
}">
    <h1>
        👏 Congrats your order has been finalized! <br>
        Your order will arrive within half an hour 😀 
    </h1>
       <div style="    text-align: center;">
       <a href="home.php" ><button class="btnreturn" style="cursor: pointer;" >Return to Homepage</button></a>
       </div> 
    </div>

    <div style="background: #161616;
        position: absolute;
    bottom: 0;
    width: 100%;
    height: 60px;">
        <div style="  margin-top: 1em;width: 50%;float: left;">
            <h3 style="color: #919191;    margin-left: 2em;">Copyright © 2022 Mohamed Amin Hawala </h3>
        </div>
        <nav class="navMenu" style="width: 50%;float: left;max-width: inherit;margin: inherit;margin-top: 1em;">
        <a href="home.php">Home</a>
        <a href="#">Menu</a>
        <a href="#">Feedback</a>
        <a href="#">About</a>
        <div class="dot"></div>
        </nav>
    </div>
</body>

</html>