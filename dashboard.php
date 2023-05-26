<?php
    include('connection.php'); 
    
    
    if (isset($_SESSION['id']))
    {
        $id = $_SESSION['id'];
        setcookie('id', $id); 
    }
    $id = $_COOKIE['id'];	
    
    $query = " select * from accounts where id=$id"; 

    $result = mysqli_query($con, $query);
    $data = mysqli_fetch_assoc($result);
    $fullname = $data['first_name'].' '.$data['last_name'] ;

    $siteid = 1;
    $sql = "select * from siteinfo where id=$siteid";
    $result2 = mysqli_query($con, $sql);
    $data2 = mysqli_fetch_assoc($result2);

    $query2 = "select * from accounts";
    $result3 = mysqli_query($con, $query2);
    $count = mysqli_num_rows($result3);  



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="node_modules\@fortawesome\fontawesome-free\css\fontawesome.css" rel="stylesheet">
    <link href="node_modules\@fortawesome\fontawesome-free\css\brands.css" rel="stylesheet">
    <link href="node_modules\@fortawesome\fontawesome-free\css\solid.css" rel="stylesheet">
    <title>Document</title>
    <style>
    
    .container{
        width: 70%;
    position: relative;
    float: right;
    height: min-content;
    text-align: center;
    background: white;
    border-radius: 10px;
    box-shadow: 5px 8px 9px 3px rgb(0 0 0 / 35%);
    padding: 1em;
    font-family: 'Fjalla One';
    letter-spacing: 0.1em;
    transform: scale(0.7, 0.7);
    margin-top: -5em;
       
    }
    .flex-container {
        display: flex;
      }

    .viewers {
        display: flex;
        padding: 3em;
      
       
        
       
    }
    .box {
        width: 50%;
        margin: auto;
        background: rgb(254 161 0);
        margin-right: 1.1em;
    }
    .users {
        display: flex;
        padding: 3em;
        margin-right: 3em;
        background: rgb(254 161 0);
        
    }

    .layout div {
        margin-bottom:1em;
    }
    .box h4{
        font-size: 2.5em;
        color: white;
        text-shadow: 2px 2px black;
    }
    .prod{
        display: flex;
    max-width: 100%;
    width: 100%;
    margin: auto;
    margin-right: 1.1em;
    }
    .review {
        display: flex;
    max-width: 100%;
    width: 100%;
    margin: auto;
    margin-right: 1.1em;
    }
    .container2{
        display: flex;
    max-width: inherit;
    width: inherit;
    margin: auto;
    padding: 2em;
    
    }
    .container2 i{
        margin-right:2em;
        box-shadow: -1px 2px 16px 0px #ffd994
    }
    .container i:hover{
        color: rgb(255 205 120);
        cursor:pointer;
    }
    </style>
</head>
<body>
<?php include('navbaradmin.php'); ?>
<div class="flex-container">
    <div class="sidebar">
            <?php include('sidebar.php'); ?>
    </div>
    <div class="container ">

        <h1>Welcome back admin <span style="color: rgb(254 161 0);"><?php echo  $fullname ?> </span>! </h1>
        <div class="container2" style="display: flex;max-width: max-content;margin:auto;padding: 2em;max-width: max-content;
    margin: auto;
    padding: 1em 3em;
    background: antiquewhite;
    margin-bottom: 2em;border-radius: 3em">
            <a href="feedbacks.php" style="text-decoration:none"><i class="fa-solid fa-envelope" ></i></a>
            <a href="productmangement.php" style="text-decoration:none"><i class="fa-solid fa-pen-to-square"></i></a>
            <a href="purchasehistory.php" style="text-decoration:none"><i class="fas fa-check" style="margin-right: 0;"></i></a>
        </div>

        <div class="layout" style="display:flex; max-width: inherit;
    width: inherit;
    margin: auto;">
            <div class="box">
                <div class="viewers" >
                <i class="fa-sharp fa-solid fa-dollar-sign" style=" margin: auto;color:white;margin-right: -1.7em;"></i>
                    <h3 style="margin: auto" >Revenue</h3>
                </div>
                <h4><?php echo number_format($data2['totatrevenu'],2)?>DT</h4>
            </div>
            <div class="box">
                <div class="users">
                    <i class="fa-solid fa-truck" style=" margin: auto;color:white;" ></i>
                    <h3 style="margin: auto; margin-left: -2.9em;">Delivery Total</h3>
                </div>
                <h4><?php echo $data2['delivery_num']?></h4>
            </div>
        </div>
        <div style="display:flex; max-width: inherit;
    width: inherit;
    margin: auto;">
            <div class="box">
                <div class="viewers" >
                    <i class="fa-sharp fa-solid fa-eye" style=" margin: auto;color:white;"></i>
                    <h3 style="margin: auto;margin-left: -2.7em;">Visitors</h3>
                    
                </div>  
                <h4><?php echo $data2['visit_num']?> vues</h4> 
            </div>
            <div class="box">
                <div class="users">
                    <i class="fa-solid fa-user" style=" margin: auto;color:white;" ></i>
                    <h3 style="margin: auto;margin-left: -4em;">Users</h3>
                </div>
                <h4><?php echo $count?> Accounts</h4> 
            </div>
            
        </div>
       

</div>
    </div>
    
   
    </div>
</body>
</html>