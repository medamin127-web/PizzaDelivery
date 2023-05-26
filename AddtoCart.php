<?php

include('connection.php');  



if(isset($_GET['item_id']) && isset($_GET['customer_id']))
        $item_id = $_GET['item_id'];
        $id = $_GET['customer_id'] ;

        $sql = "select * from cart where customer_id=$id and item_id=$item_id";
        $result = mysqli_query($con,$sql);
        $count = mysqli_num_rows($result);  

        if ($count == 0 )
        {
            $sql1 = "insert into cart values(0 , $id, $item_id,1)"; 
            $result1 = mysqli_query($con,$sql1);
        }
        else{
            $data = mysqli_fetch_assoc($result);
            $quantity = $data['quantity'] + 1 ;
            $sql2 = "update cart set quantity = $quantity where customer_id=$id and item_id=$item_id";
            $result2 = mysqli_query($con,$sql2);

        }
        header("location:home.php");
?>