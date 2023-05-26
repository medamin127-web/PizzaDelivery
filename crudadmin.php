<?php
 include('connection.php');  

//Delete product
 if(isset($_GET['id']) && isset($_GET['delete']))
 {
    $id = $_GET['id'] ;
    $result = mysqli_query($con, "delete from products where id=$id");
    header("location:productmangement.php");

    
 }
 
if(isset($_GET['id']) && isset($_GET['verify']))
 {
    $id = $_GET['id'] ;
    $result = mysqli_query($con, "delete from orders where id=$id");
    header("location:purchasehistory.php");

    
 } 

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
        background: #fffde5;
    position: relative;
    float: right;
    height: min-content;
    text-align: center;
    width: 80%;
    border-radius: 10px;
    box-shadow: 5px 8px 9px 3px rgb(0 0 0 / 35%);
    padding: 1em;
    margin-top: -3em;
    transform: scale(0.8, 0.8);
  
        }
        .flex-container {
          display: flex;
        }
        .newproduct{
          
        

          position: fixed; /* Stay in place */
          z-index: 1; /* Sit on top */
          left: 0;
              top: 0;
          width: 100%; /* Full width */
              height: 100%; /* Full height */
          overflow: auto; /* Enable scroll if needed */
          background-color: #474e5d;
          padding-top: 50px;
          
      }
      .form {
        max-width: max-content;
    padding: 5em;
    background: #fffde5;
    margin: auto;
    border-radius: 10px;
    transform: scale(1, 1);

      }
      
      input {
            width: 30em;
            padding: 1.2em;
           
            border: 0;
            box-shadow:0 0 15px 4px rgba(0,0,0,0.06);
            margin-top: 0.5em;
           
            border-radius: 2em;
            
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
        
        .input {
         text-align : center
        }
        
        #btn1{
            padding: 0.3em 1em;
            font-family: poppins;
            font-weight: 600;
            font-size: 1em;
            border-radius: 5px;
            border: none;
            background: #ffa500;
            color: white;
            margin-right: 0.8em;
            cursor : pointer;
            text-decoration: none;


        }
        #btn1:hover {
            background: #c05858;
            
        }
        #btn2{
            padding: 0.3em 1em;
            font-family: poppins;
            font-weight: 600;
            font-size: 1em;
            border-radius: 5px;
            border: none;
            background:  #3ea937;;
            color: white;
            cursor : pointer; 
        }
        #btn2:hover {
            background: #0acf0a;
        }

        .align{
            margin: auto;
            margin-top: -1.2em;
           
        }
        h3{
            
            font-family:poppins;
        }
        h1{
            text-align: center;
            font-family: poppins;
            background: #fea100;
            color: white;
            max-width: fit-content;
            margin: auto;
            padding: 0.5em 2em;
            border-radius: 2em;
        }
        
    </style>
</head>
<body>
    <?php include('navbaradmin.php'); ?>
    <div class="flex-container">
        <div class="sidebar">
            <?php include('sidebar.php'); ?>
        </div>
        <div class="container">
        <h1>Edit Product</h1>
        <?php
                            $id = $_GET['id'];
                            $query = " select * from products where id=$id  ";
                            $result = mysqli_query($con, $query);
                            $data = mysqli_fetch_assoc($result);
        
        ?>
        <div class="form">
            <form action="updateadmin.php" method="post" enctype="multipart/form-data">
             <div style="display: flex;background: #fea100;color: white;">
                <img src="./media/<?php echo $data['image']; ?>" style="width: 9em;
                box-shadow: 4px 3px 8px black;
            float: left;
            border-radius: 5px;
            height: 6em;">
                <div class="align">
                <h3 ><?php echo strtoupper($data['name']) ?> <?php echo strtoupper($data['type'])?></h3> 
                <h3 ><?php echo strtoupper($data['price'])?> DT</h3>
                
                </div>
             </div>                    
            <div class="input">
                        <input type="text" name="name" placeholder="enter product name...." style=" font-family:roboto;" value="<?php echo $data['name'] ?>">
                    </div>
                    <div class="input">
                        <input type="number" name="price" value="<?php echo $data['price'] ?>" placeholder="enter product price...." style=" font-family:roboto;">
                    </div>
                    <div class="input" >        
                        <input type="file" name="uploadfile"   value="<?php echo $data['image'] ?>" style="background: white;" ><br><br>
                    </div>
                        <div  style="text-align: center;">
                            <a href="productmangement.php" id="btn1">Cancel</a>
                            <button type="submit"  name="submit" id="btn2">Submit</button>
                            <input type="hidden" name="id" value="<?php echo $data['id'] ?>">
                        </div>                 
            </form>                     
        </div>                
        </div>
    </div>
</body>
</html>