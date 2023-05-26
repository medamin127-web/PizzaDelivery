<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fjalla+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <title>Document</title>

    <style>

    body{
        font-family:roboto;
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
          background: aliceblue;
          margin: auto;

      }
      
      input {
            width: 30em;
            padding: 1.2em;
           
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
            background: #d94040;
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
            background: #09a509;
            color: white;
            cursor : pointer; 
        }
        #btn2:hover {
            background: #0acf0a;
        }
        </style>
</head>
<body>
<div class="newproduct" id="id01">
            <div class="form">
                <h3 style="font-family:poppins ; text-align : center; font-size: 2em;" >Add A New Product</h3>
                <form  action="insertproduct.php" method="post" enctype="multipart/form-data">
                    <div class="input">
                        <input type="text" name="name" placeholder="enter product name...." style=" font-family:roboto;">
                    </div>
                    <div class="input">
                        <input type="number" name="price" placeholder="enter product price...." style=" font-family:roboto;">
                    </div>
                    <div class="input" >        
                        <input type="file" name="uploadfile"   style="background: white;" ><br><br>
                    </div>
                    <div>
                        <h4 style="font-family:poppins;text-align: center;font-size: 1.5em;">
                            Choose Product Type:
                        </h4>
                    </div>
                    <div>
                        <label>
                            <input type="radio" name="test" value="burger" checked >
                            <img src="media/burger1.png" style="width:8em" alt="Option 1">
                        </label>

                        <label>
                            <input type="radio" name="test" value="pizza">
                            <img src="media/pizza1.png" style="width:8em" alt="Option 2">
                        </label>
                        <label>
                            <input type="radio" name="test" value="sandwich">
                            <img src="media/sandwich2.png" style="width:8em"alt="Option 3">
                        </label>
                    </div>
                        <div  style="text-align: center;">
                            <a href="productmangement.php" id="btn1">Cancel</a>
                            <button type="submit"  name="submit" id="btn2">Submit</button>
                           
                        </div>
                </form>
                </div>
</body>
</html>