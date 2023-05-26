<?php

    include('connection.php'); 

    $id = $_COOKIE['id'];	

    $query = "select * from accounts where id = $id " ; 
    
    
    $result = mysqli_query($con,$query);
    $data = mysqli_fetch_assoc($result);

  
    $username = $data['first_name'] . ' ' . $data['last_name'];
    $address = $data['address'];
    $ordered = $_GET['date'];
    $fullprice = $_GET['fullprice'];
    $phone_number = $data['phone_number'];

    $query2 = "select * from cart where customer_id = $id";
    $result2 = mysqli_query($con,$query2);

    $order_list = "";
    while ($data2 = mysqli_fetch_assoc($result2)) {

        $item_id = $data2['item_id'];
        
        $query3 = "select * from products where id = $item_id" ;
        $result3 = mysqli_query($con, $query3);
        $data3 = mysqli_fetch_assoc($result3);

        $order_list = $order_list . "-".$data2['quantity']." ".$data3['name']."\r\n" ;

         
    }
    
    $fullprice = floatval($fullprice);

    
    $sql = "insert into orders values(0 ,'$username','$ordered','$address','$fullprice','$order_list','$phone_number')";
    $result4 = mysqli_query($con,$sql);
    $sql2 = "delete from cart where customer_id=$id";
    $result = mysqli_query($con,$sql2);
    $id=1;
    $query3="select * from siteinfo where id = $id ";
    $result5 = mysqli_query($con, $query3);  
    $row1 = mysqli_fetch_array($result5);
    $delivery = $row1['delivery_num'] + 1 ;
    $sql3="update siteinfo set delivery_num ='$delivery'";
    $result6=mysqli_query($con, $sql3);

    $command="select * from siteinfo where id = $id ";
    $res = mysqli_query($con, $command);  
    $row2 = mysqli_fetch_array($res);
    $revenu = $row2['totatrevenu'] + $fullprice ;
    $sql3="update siteinfo set totatrevenu ='$revenu'";
    $result6=mysqli_query($con, $sql3);

    header("location:finalconfirmation.php");

    if (isset($_GET['cancel']))
    {
        $id = $_COOKIE['id'];	
        $sql = "delete from cart where customer_id=$id";
        $result = mysqli_query($con,$sql);
        header("location:home.php");
    }

    

?>