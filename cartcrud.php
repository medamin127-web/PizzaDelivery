<?php 

include('connection.php');  



    
if(isset($_GET['item_id']) && isset($_GET['plus']))

{   
    
    $id = $_COOKIE['id'];		
    $item_id = $_GET['item_id'];
    $sql = "select * from cart where item_id = $item_id " ;
    $result = mysqli_query($con,$sql);
    $data = mysqli_fetch_assoc($result);
    $newquantity = $data['quantity'] + 1 ;
    $query = "update cart set quantity = $newquantity where customer_id=$id and item_id=$item_id";
    $result = mysqli_query($con,$query);
    header("location:cart.php");
}

if(isset($_GET['item_id']) && isset($_GET['minus']))

{   
    
    $id = $_COOKIE['id'];	
    $item_id = $_GET['item_id'];
    $sql = "select * from cart where customer_id=$id and item_id = $item_id " ;
    $result = mysqli_query($con,$sql);
    $data = mysqli_fetch_assoc($result);
    $newquantity = $data['quantity'] - 1 ;
    $query = "update cart set quantity = $newquantity where customer_id=$id and item_id=$item_id";
    $result2 = mysqli_query($con,$query);
    
    if ($newquantity == 0)
    {
        $sql2 = "delete from cart where customer_id=$id and item_id=$item_id";
        $result3 = mysqli_query($con,$sql2 );
    }
    header("location:cart.php");
}

if(isset($_GET['item_id']) && isset($_GET['delete']))

{   
    
    $id = $_COOKIE['id'];	
    $item_id = $_GET['item_id'];
    $sql = "delete from cart where customer_id=$id and item_id=$item_id";
    $result = mysqli_query($con,$sql);
    
    header("location:cart.php");
}

if(isset($_GET['deleteall']))

{   
    
    $id = $_COOKIE['id'];	
    
    $sql = "delete from cart where customer_id=$id";
    $result = mysqli_query($con,$sql);
    header("location:home.php");
}


?>