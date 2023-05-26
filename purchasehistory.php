<?php
include('connection.php');  

$query = " select * from orders ";
$result = mysqli_query($con, $query);
$number = mysqli_num_rows($result); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.no-icons.min.css" rel="stylesheet">
<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
    <title>Document</title>
    <style>
        body{
            margin: 0;
            padding: 0;
        }
        .sidebar{
            margin-top: 2em;
            background:white;
            height: 110vh;
            max-width: 16%;
            float:left
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
      .container{
          
        position: relative;
    float: right;
    height: min-content;
    text-align: center;
    margin: 2em;
    width: 80%;
    background: white;
    border-radius: 10px;
    box-shadow: 5px 8px 9px 3px rgb(0 0 0 / 35%);
    margin-top: -3em;
    transform: scale(0.8, 0.8);
    padding: 3em;

      }
      .flex-container {
        display: flex;
        width: 100%;
      }

      
        input {
            width: 22em;
            padding: 1.2em;
            font-family:roboto;
            border: 0;
            box-shadow:0 0 15px 4px rgba(0,0,0,0.06);
            margin-top: 0.5em;
            
        }
        
        input:hover {
            outline: 2px solid #ffa101;  
        }
        
        input:focus{
            outline: none; 
        }
        /* HIDE RADIO */
        [type=radio] { 
            position: absolute;
            opacity: 0;
            width: 0;
            height: 0;
        }

        /* IMAGE STYLES */
        [type=radio] + img {
                cursor: pointer;
                margin-right:1em;
                border-radius:5px
        }

        /* CHECKED STYLES */
        [type=radio]:checked + img {
            outline: 4px solid #ffa101;  
            
        }

        form div{
            max-width:min-width;
            margin-top:2em
        }
        
       
        .products {
            
            width: 100%;
            margin: auto;
            margin-top:4em;
            background: #fde075; 
            border-radius: 10px;
        }
        h4 , h5{
            font-family: 'Poppins', sans-serif;
        }
        .products  tbody{
            background: #ffd22e; 
        }

        td i{
            font-size: 2.5em;
            color: #e3dab8;
            text-shadow: 0 0 3px black;
            cursor:pointer;

        }
       .addnew button{
        margin-top:1em;   
        padding: 0.7em;
        font-family: poppins;
        font-size: 1.3em;
        border: none;
        border-radius: 0.4em;
        background: #fde075;
       }

       /* Clear floats */

       td{
           padding:0;
           margin:0;
           max-width: 1em;
       }

       .icon-edit:hover{
            color:grey;
       }
        .fa-trash:hover{
            color:grey;
       }
       .fa-check:hover{
        color:green;

       }
    </style>
<body>

    <?php include('navbaradmin.php'); ?>
    <div class="flex-container">
        <div class="sidebar">
            <?php include('sidebar.php'); ?>
        </div>
        <div class="container" >
            
            <div class="addnew " style="margin-top:2em">
            <h1 style="color: #ffa101;">Purchase History </h1>   
            <h4 style="margin-top: 2em;">There are <?php echo $number?> orders that haven't been delivered yet!</h4>
            </div>
            <table class="products" style="border-collapse:collapse;">
                <thead>
                    <tr>
                        <th><h4>#</h4></th>
                        <th><h4>Client</h4></th>
                        <th><h4 style="font-size: 1.8em;">☎️</h4></th>
                        <th><h4>Shipped To</h4></th>
                        <th><h4>Order</h4></th>
                        <th><h4>Price</h4></th>
                        <th><h4>Ordered</h4></th>
                        <th><h4>Delivered?</h4></th>
                    </tr>
                </thead>   
                <tbody>
                        <?php
                            
 
                            while ($data = mysqli_fetch_assoc($result)) {
                        ?>
                        <tr>
                        <td><h5><?php echo $data['id']?></h5></td>
                        <td><h5><?php echo $data['username']?></h5></td>
                        <td><h5><?php echo $data['phone_number']?></h5></td>
                        <td><h5><?php echo $data['shipping_adress']?> </h5></td>
                        <td><h5><?php echo $data['order_list']?></h5></td>
                        <td><h5><?php echo number_format($data['total_price'],2)?>DT</h5></td>
                        <td><h5><?php echo $data['ordered']?></h5></td>
                        <td>
                        <div style="max-width: max-content;margin: auto">
                            
                            <a href="crudadmin.php?id=<?php echo $data['id'] ?>&verify=yes" ><i class="fa-solid fa-check"></i></a>
                        </div>
                        </td>
                    </tr>
                    <?php
                        }
                        ?>
                </tbody>
            </table> 
           
            </div>              
        </div>
    </div>
</body>
</html>