<?php 
  include('connection.php');  

  include('connection.php');  
  if (isset($_SESSION['id']))
{
  $id = $_SESSION['id'];
  setcookie('id', $id); 
}

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
    <link rel="stylesheet" href="style2.css">
    <title>Document</title>

    <style>

        .card {
            box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
            transition: 0.3s;
            width: 25%;
            background:white;
        }

        /* On mouse-over, add a deeper shadow */
        .card:hover {
        box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
        }

        /* Add some padding inside the card container */
        .cover {
        padding: 2px 16px;
        text-align:center
        }
        .card button {
            padding: 0.5em 1em;
            border-radius: 1em;
            border: none;
            background: black;
            color: white;
            font-weight: 700;
        }
        .card img {
                box-shadow : 1px -4px 13px 0px black;
        }

        .product {
            height: 100%;
            padding: 0;
            margin: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            padding-bottom: 5em;
        }
        .product > div {
            
            margin-right:3em
            
            }
        #btn{
            cursor:pointer;
        }    
        #btn button:hover {
            background:grey
        }
    </style>
</head>
<body>
<?php include('navbar.php'); ?>
    <div class="header" >
        <div style="display: flex;max-width: max-content;margin: auto;">
        <img src="media/chef.png" ">
        <div>
        <h2>InstantFood</h2>
        <p>Deliveing Tasty Food Quickly! </p>
        </div>
        </div> 
    </div> 
    <div class="container ">
        <h1>MENU</h1>
        <div class="sub-container" >
                <div class="text" style="margin-bottom: 3em;">
                    <img src="media/pizzaslice.png">
                    <h2 style="font-family: bayon;
                    font-size:3vw;
                    max-width: 100%;
                    font-weight: 100;
                    letter-spacing: 0.05em;">Pizza</h2>
                </div>    
                <div class="product" >
                <?php 
                  $query = " select * from products where type = 'pizza' ";
                  $result = mysqli_query($con, $query);
                while ($data = mysqli_fetch_assoc($result)) {?>
                        <div class="card">
                            <img src="./media/<?php echo $data['image'] ?>" alt="Avatar" style="width: 100%">
                            <div class="cover">
                                <h4><b><?php echo ucfirst($data['name'])?></b></h4>
                                <p style="color: #661313;
                                        font-size: 1.2em;
                                        font-weight: 700;
                                        margin-top: 0.3em;
                                        margin-bottom: 0.2em;"> <?php echo  number_format($data['price'],2)?>DT</p>
                                <a href="AddtoCart.php?item_id=<?php echo $data['id']?> & customer_id=<?php echo $_COOKIE['id'] ?>" id="btn" style="cursor:pointer"><button>Add to Cart</button></a>
                            </div>
                        </div>
                    <?php
                        }
                        ?>
                </div>
        </div> 
           
       
        <div class="sub-container"  style="margin-top:2em;max-width:none" >
                <div class="text" style="margin-bottom: 3em;">
                    <img src="media/burgerlogo.png">
                    <h2 style="font-family: bayon;
                    font-size:3vw;
                    max-width: 100%;
                    font-weight: 100;
                    letter-spacing: 0.05em;">Burger</h2>
                </div>    
                <div class="product" >
                    <?php 
                     $query2 = " select * from products where type = 'burger' ";
                     $result2 = mysqli_query($con, $query2);
                    while ($data1 = mysqli_fetch_assoc($result2)) {?>
                            <div class="card">
                                <img src="./media/<?php echo $data1['image'] ?>" alt="Avatar" style="width: 100%;">
                                <div class="cover">
                                    <h4><b><?php echo ucfirst($data1['name'])?></b></h4>
                                    <p style="color: #661313;
                                            font-size: 1.2em;
                                            font-weight: 700;
                                            margin-top: 0.3em;
                                            margin-bottom: 0.2em;"> <?php echo number_format($data1['price'],2)?>DT</p>
                                    <a href="AddtoCart.php?item_id=<?php echo $data1['id']?> & customer_id=<?php echo $_COOKIE['id'] ?>" id="btn" style="cursor:pointer"><button>Add to Cart</button></a>
                                </div>
                            </div>
                        <?php
                            }
                            ?>
                </div>
        </div> 
        <div class="sub-container"  style="margin-top:2em;max-width:none;margin-bottom: 3em;" >
                <div class="text" style="margin-bottom: 3em;">
                    <img src="media/sandwichlogo.png" style="width: 7em; margin-top: -0.8em;">
                    <h2 style="font-family: bayon;
                    font-size:3vw;
                    max-width: 100%;
                    font-weight: 100;
                    letter-spacing: 0.05em;">Sandwich</h2>
                </div>    
                <div class="product" >
                    <?php 
                    $query3 = " select * from products where type = 'sandwich' ";
                    $result3 = mysqli_query($con, $query3);
                    while ($data2 = mysqli_fetch_assoc($result3)) {?>
                            <div class="card">
                                <img src="./media/<?php echo $data2['image'] ?>" alt="Avatar" style="width: 100%;">
                                <div class="cover">
                                    <h4><b><?php echo ucfirst($data2['name'])?></b></h4>
                                    <p style="color: #661313;
                                            font-size: 1.2em;
                                            font-weight: 700;
                                            margin-top: 0.3em;
                                            margin-bottom: 0.2em;"> <?php echo number_format($data2['price'],2)?>DT</p>
                                    <a href="AddtoCart.php?item_id=<?php echo $data2['id']?> & customer_id=<?php echo $_COOKIE['id'] ?>" id="btn" style="cursor:pointer"><button name="addtocart">Add to Cart</button></a>
                                </div>
                            </div>
                        <?php
                            }
                            ?>
                </div>
        </div> 
    </div>                         
</body>


<?php include('footer.php'); ?>

</html>