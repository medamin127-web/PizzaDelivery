<?php

include('connection.php');  


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
        .container {
            width: 70%;
            height: 85%;
            background-color: #ffffff;
            border-radius: 20px;
            box-shadow: 0px 25px 40px #1687d933;
            margin: auto;
            margin-top: 3em;    
        }
            .Header{
            margin: auto;
            width: 90%;
            height: 15%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            }
            .Heading{
            font-size: 20px;
            font-weight: 700;
            color: #2F3841;
            }
            .Action{
            font-size: 14px;
            font-weight: 600;
            color: #E44C4C;
            cursor: pointer;
            border-bottom: 1px solid #E44C4C;
            }
            .Cart-Items{
            margin: auto;
            width: 90%;
            margin-bottom: 4em;
            display: flex;
            justify-content: space-between;
            align-items: center;
            }
            .image-box{
            width: 15%;
            text-align: center;
            }

            .counter{
            width: 15%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            }
            .btn3{
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background-color: #d9d9d9;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 20px;
           
            font-weight: 900;
            color: #202020;
            cursor: pointer;
            }
            .count{
            font-size: 20px;
            
            font-weight: 900;
            color: #202020;
            }
            
            .prices{
            
            text-align: right;
            }
            .amount{
            padding-top: 20px;
            font-size: 26px;
          
            font-weight: 800;
            color: #202020;
            }
            .save{
            padding-top: 5px;
            font-size: 14px;
           
            font-weight: 600;
            color: #1687d9;
            cursor: pointer;
            }
            .remove{
            padding-top: 5px;
            font-size: 14px;
           
            font-weight: 600;
            color: #E44C4C;
            cursor: pointer;
            }
        hr{
        width: 66%;
        float: right;
        margin-right: 5%;
        }
        .checkout{
        float: right;
        margin-right: 5%;
        width: 28%;
        }
        .total{
        width: 100%;
        display: flex;
        justify-content: space-between;
        }
        .Subtotal{
        font-size: 22px;

        font-weight: 700;
        color: #202020;
        }
        .items{
        font-size: 16px;

        font-weight: 500;
        color: #909090;
        line-height: 10px;
        }
        .total-amount{
        font-size: 36px;
        
        font-weight: 900;
        color: #202020;
        }
        .button{
        margin-top: 5px;
        width: 100%;
        height: 40px;
        border: none;
        background: linear-gradient(to bottom right, #B8D7FF, #8EB7EB);
        border-radius: 20px;
        cursor: pointer;
        font-size: 16px;
        
        font-weight: 600;
        color: #202020;
        }
    </style>
</head>
<body>
    <?php include('navbar.php'); ?>
   
    <div class="container" style="margin-bottom:2em">
        <div class="Header">
            <h3 class="Heading">Shopping Cart</h3>
            <a href="cartcrud.php?deleteall=yes" style="text-decoration:none"><h5 class="Action">Remove all</h5></a>
        </div>
        <?php
            $id = $_COOKIE['id'];
            $sql="select * from cart where customer_id= $id " ;
            $result = mysqli_query($con, $sql);
            $count = mysqli_num_rows($result); 
            $fullprice = 0 ; 
            while ($data = mysqli_fetch_assoc($result)) {
              
              $item_id = $data['item_id'];
              
              $sql2 = "select * from products where id = $item_id" ;
              $result2 = mysqli_query($con, $sql2);
              $data2 = mysqli_fetch_assoc($result2);
              $fullprice =  $fullprice + ($data['quantity'] * $data2['price']); 
                   
              
              ?>
        <div class="Cart-Items">
            <div class="image-box">
                <img src="./media/<?php echo $data2['image'] ?>" style="width:9vw;;border-radius: 1em;"  />
            </div>
            <div class="about">
                <h1 class="title" style="color: #202020;padding-top: 5px;
                
                font-size: 32px;
                font-weight: 800;
                padding:0;text-align: unset;"><?php echo ucfirst($data2['name'])  ?></h1>
                <h3 class="subtitle" style="
                    font-size: 18px;
                    font-weight: 600;
                    color: #909090;"><?php echo ucfirst($data2['type'])  ?></h3>
                
            </div>
            <div class="counter">
            <a href="cartcrud.php?item_id=<?php echo $data2['id']?> & plus=yes"  style="text-decoration:none"><div class="btn3">+</div></a>
            <div class="count"><?php echo $data['quantity'] ?></div>
            <a href="cartcrud.php?item_id=<?php echo $data2['id']?>& minus=yes"  style="text-decoration:none"> <div class="btn3">-</div></a>
            </div>
            <div class="prices">
                <div class="amount"><?php echo number_format($data2['price'] * $data['quantity'], 2) ?>DT</div>
                <a href="cartcrud.php?item_id=<?php echo $data2['id']?>& delete=yes"  style="text-decoration:none"><div class="remove"><u>Remove</u></div></a>
            </div>

            
        </div> 
        <?php }?> 
        <hr> 
        <div class="checkout" >
            <div class="total">
                <div>
                    <div class="Subtotal">Sub-Total</div>
                    <div class="items">
                    <?php 
                     $count = mysqli_num_rows($result);  
                    echo $count
                    ?> items</div>
                </div>
                <div class="total-amount"><?php echo number_format($fullprice,2) ?>DT</div>
            </div>
            
            <a href ="confirmation.php?total_price=<?php echo $fullprice ?>" ><button class="button" <?php if ($count == 0){ echo "style='background: #e8f3fdf5;color: #c5c5c5;' " ?> disabled <?php   } ?>>Checkout</button></a>
        </div>      
    </div>
</body>

    <?php include('footer.php'); ?>

</html>