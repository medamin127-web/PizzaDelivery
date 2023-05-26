<?php

include('connection.php'); 

$id = $_COOKIE['id'];	

$query = "select * from accounts where id = $id " ; 
$result = mysqli_query($con,$query);
$data = mysqli_fetch_assoc($result);
$username = $data['first_name'] . ' ' . $data['last_name'];

$date = date('Y/m/d H:i:s');
$fullprice = $_GET['total_price'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
         body{
          
        background: #272727;
          font-family: "Montserrat", sans-serif;
          height: 100vh;

      }
      .Header{
            
            margin: auto;
            width: 94%;
            padding: 2em;
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 4em;
            
            
        }
            }
            .Heading{
           
            font-size: 1.2em;
            text-transform: uppercase;
            font-weight: 500;
            color: white;
            }
            .Action{
            font-size: 14px;
            font-weight: 600;
            color: #E44C4C;
            cursor: pointer;
            border-bottom: 1px solid #E44C4C;
            }
            .confirm {
                border: none;
                padding: 0.9em 5em;
                border-radius: 0.2em;
                font-size: 1em;
                font-family: roboto;
                font-weight: 400;
                background: #219644;
               cursor:pointer;
               
                text-transform: uppercase;
                font-weight: 500;
                color: white;
            }
            .confirm:hover {
                background: #82e39f;
            }
            .container {
                padding: 3em;
                height: inherit;
                background: #403f3f;

            }
            #text{
                margin-bottom: 0.8em;
            }
            .top{
                margin: auto;
                width: 60%;
                margin-top: 1em;
                height: 70%;
                box-shadow: -2px -1px 20px 0px black;
                border-radius: 5px;
                background: #272727;
            }
            .cancel{
                padding: 1em 3em;
                margin-top: 1em;
                margin-right: 2em;
                border: none;
                background: #e44c4c;
                color: white;
                font-weight: 600;
                text-transform: uppercase;
                border-radius: 5px;
                font-family: inherit;   
                float: right;
                cursor:pointer;
            }
            .cancel:hover{
                background: #ec7d7d;

            }
    </style>
</head>
<body>
        <?php include('navbar.php'); ?>
      
        <div class="top">
        <div class="Header">
                <h3 class="Heading" style="font-size: 1.2em;
            text-transform: uppercase;
            font-weight: 500;
            color: white;">Order Confirmation</h3>
                <h5 style="font-size: 20px;
    font-weight: 500;
    text-transform: uppercase;
    color:grey;">Order Total:  <span style="color:white"><?php echo number_format($fullprice, 2) ?>DT</span></h5>
                <a href ="confirmorder.php?date=<?php echo $date ?>&fullprice=<?php echo $fullprice?>" style="text-decoration:none"> <button class="confirm">Place Order</button></a>
            </div>
            <div class="container">
                <div class="info" style="float:left;padding: 1em;width: 50%;text-align: center;">
                    
                    <h3 style="color: white;font-weight: 300;font-size: 1.5em;">Your Information</h3>
                    
                    <div style="padding: 1.5em;color: #ffffff7d;">
                        <h5 style="font-size: 1.1em;font-weight: 500;" id="text"> <?php echo $username?></h5>
                        <h6 style="font-size: 1em;font-weight: 500;" id="text"><?php echo $data['email']?></h6>
                        <h6 style="font-size: 1em;font-weight: 500;" id="text"><?php echo $data['phone_number']?></h6>
                    </div>
                </div>

                <div class="address" style="float:left;padding: 1em;width: 50%;text-align: center;color: #ffffff7d;">
                    <h3 style="color: white;font-weight: 300;font-size: 1.5em;">Shipping Address</h3>

                    <h6 style="padding: 1.5em;font-size: 1em;font-weight: 500;">
                        <?php echo $data['address']?>
                    </h6>
                </div>
                <div class="footer">
                <a href="confirmorder.php?cancel=yes" ><button class="cancel">Cancel</button></a>
            </div>
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