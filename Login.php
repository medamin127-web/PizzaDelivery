<?php
    session_start();
    setcookie('id', "", time() - 3600);
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fjalla+One&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
    <title>Document</title>
    <style>

        body{
            background:url('media/cuisine.jpg');
        }
        h4{
            color:red;
            font-family: 'Montserrat', sans-serif;
            margin-top:0.5em
        }
    </style>
</head>
<body>
    
    
    <div class="flex-container" style=>
        <div class="logo">
            <img src="media/logo.png" style=" width: 30em;" >
        </div> 
        <div class="login">
            
            <h2 style="text-align: center;">Login</h2>
            <form action="authenticate.php" method="post">
                <div class="email">
                    <input type="email" name="email"  placeholder="Email">
                </div>    
                <input type="password" name="password" placeholder="*********">   
            
                <div class="button1"> 
                    <button type="submit" value="Login">Login</button>
                </div>
                <?php
                    if(isset($_SESSION["error"])){
                        $error = $_SESSION["error"];
                        echo "<span>$error</span>";
                        
                    }
                    
                ?>  
            </form>
            <div style="width: 100%;
            height: 10px;
            border-bottom: 1px solid #918e8e;
            text-align: center;margin-top: 1.3em;">
                <span style="font-size: 15px;
                background-color: #ffffff;
                padding: 0 10px;
                font-family: roboto;
                color: grey;">
                 Or <!--Padding is optional-->
                </span>
              </div>
              <div class="button2" style="margin-top: 2em";>  
                <a href="signin.html"><button type="button">Signin</button></a>
              </div> 
        </div>
    </div>
</body>
</html>

<?php
    unset($_SESSION["error"]);
?>