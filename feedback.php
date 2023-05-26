

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        body{
            background:#2e2d2d;
        }
        .radio{
            margin-bottom:1.5em;
        }
        .container {  
            padding: 3em;
            background: #323232;
            color: white;
        }
        form{
            width: 60em;
            margin: auto;
        }
        input{
            width: inherit;
        }
        textarea{
            width: inherit;
            height: 182px;
            width: 985px;
            border: none;
            padding:1em;
        }
        .question {
            padding: 2em 1px;
        }
        .subject {
            width: inherit;
            padding: 1em 0em;
        }
        .subject h3 {
            margin-bottom: 1.5em;
        }
        .btn3{
            max-width: max-content;
            margin: auto;
            padding: 2em;

        }
        .btn3 button {
            padding: 1em 7em;
            border-radius: 2em;
            border: none;
            font-weight: 600;
            font-size: 1em;
            cursor:pointer;
            background: #272727;
            color: #fffefe;
            box-shadow: 2px 3px white;
        }
        .btn3 button:hover{
            background:white;
            color:black;
        }
        input[type="radio"] {
            float: right;
        }
        input[type="text"]{
            border: none;
            padding: 1em 2em;
            border-radius: 15px;
        }
    </style>
</head>
<body>
    <?php include('navbar.php'); ?>
    <div class="container">
        <form action="feedbacksent.php" method="post">
            <input type="text" name="fullname" placeholder="Write your full name here....">
            <div class="question">
                <h3 style="margin-bottom:1em">How would you describe the quality of our service?</h3>
                <div class="radio">
                    <label >Great</label><br>
                    <input type="radio" id="html" name="review" value="Great">
                </div>

                <div class="radio">
                    <label >Good</label><br>
                    <input type="radio" id="html" name="review" value="Good">
                </div>

                <div class="radio">
                    <label>Alright</label><br>
                    <input type="radio" id="html" name="review" value="Alright">
                </div>

                <div class="radio">
                    <label >Not Good</label><br>
                    <input type="radio" id="html" name="review" value="Not Good">
                </div>        

                <div class="radio">
                    <label >Awful</label><br>
                    <input type="radio" id="html" name="review" value="Awful">
                </div>
            </div>
            <div class="subject">
                <h3>Do you like our service? Do you have any suggestion
                that can help as improve it or any complaint with our delivery?
                Leave your feedback here!</h3>
                <textarea name="subject" placeholder="write your feedback here...."></textarea>    
            </div>
            <div class="btn3">
                <button type="submit" name="submit">Submit</button>
            </div>

       
        </form>
    </div>
  
</body>

    
        <div style="background: #161616;
        
    bottom: 0;
    width: 100%;
    height: 60px;">
        <div style="  margin-top: 1em;width: 50%;float: left;">
            <h3 style="color: #919191;    margin-left: 2em;">Copyright © 2022 Mohamed Amin Hawala </h3>
        </div>
        <nav class="navMenu" style="width: 50%;float: left;max-width: inherit;margin: inherit;margin-top: 1em;">
        <a href="home.php">Home</a>
        <a href="#">Menu</a>
        <a href="#">Feedback</a>
        <a href="#">About</a>
        <div class="dot"></div>
        </nav>
    </div>
</html>