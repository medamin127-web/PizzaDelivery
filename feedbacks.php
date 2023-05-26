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
           .container{
          
          
          position: relative;
          float: right;
          height: min-content;
          text-align:center;
          margin: 2em;
         
          background: white;
          border-radius: 10px;
          box-shadow: 5px 8px 9px 3px rgb(0 0 0 / 35%);
          padding: 3em;
  
        }
        .flex-container {
          display: flex;
        }
        
        .sub-container{
            
        }
    </style>
</head>
<body>
    <?php include('navbaradmin.php'); ?>
    <div class="flex-container">
        <div class="sidebar">
            <?php include('sidebar.php'); ?>
        </div>
        
        <?php 
        $sql = "select * from feedback ";
        $result = mysqli_query($con, $sql);
        while ($data = mysqli_fetch_assoc($result)) {
            ?>
    <div class="container">
        
       

            <div class="sub-container">
                <img src="media/user.png" style="width:4em;float:left">
                
                <div class="content" style="float:left">
                <h4 ><?php echo $data['fullname'] ?></h4>
                <h5><?php echo $data['review'] ?></h5>
                <p><?php echo $data['subject'] ?></p>
                </div>
                
            
    </div>

      
        
    </div>
    <?php
            }?>
    </div>
</body>
</html>