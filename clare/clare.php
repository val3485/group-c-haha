<?php
$name = "Clare Lubiano";
$age=17;
$color = "Black & Red";
$movie = "Beauty & the Beast";
$language = ["C++","Java", "HTML","Oracle"];
?>


<!DOCTYPE html>
<html lang = "en">
    <head>
       <p style = "font-family: 'Courier New' ;text-align: center ; background-color: rgb(245, 179, 206); color:rgb(219, 35, 81)" id="head"> KNOW  MORE  ABOUT  ME  !</p>
       
       <style>
        *{
            margin: 0;
        }
       #head{
        font-size: 60px;
        position: sticky;
        top: 0;
        padding:15px;
        
         }
         #name{
            font-size: 30px;
            color: rgb(226, 43, 98);
            margin-top: 25px;
         }
         #fb{
            font-size: 25px;
         }
         #n2{
            font-size: 30px;
            color: rgb(226, 43, 98);
         }
         #vid {
             width: 600px;
             height:300px;
            display: block;    
            margin :auto;
            }
        body{
            background-color: rgb(255, 233, 251);
        }
        #h{
            font-family:cursive;
            font-size: 15PX;
        }#bg{
            position: absolute;
            z-index: -1;
            height: 150vh;
            width:98vw;
            opacity: 0.1;
            display: flex;
        }
       </style>


    </head>


    <body>
        <img id="bg"src="bgClare.png">
 
    
        <p id = "name"  style="font-family: cursive; text-align:center"> Hi my name is <?= $name ?> </p>
        
        <a href="https://www.facebook.com/clare.lubiano"> <p id="fb" style="font-family: cursive; text-align:center" >you can add me here!</p></a> <br>
        <p id = "n2"  style="font-family: cursive; text-align:center"> Currently <?= $age ?> years old &#128151; &#128151; 
        <br><br>
        My favorite colors are: <?= $color ?>
        <br><br>
        Proficient languages in: <br>
        <?= $language [0]?><br>
        <?= $language [1]?><br>
        <?= $language [2]?><br>
        <?= $language [3]?><br><br>

        My favorite movie is <?= $movie ?>
        <br>
        <a href ="../main.php" id="h" style="text-decoration: none;" > click to go back </a>

        <div class="container">
            <iframe id="vid"class="responsive-iframe" src="https://www.youtube.com/embed/Ff59cu_Z1yw?autoplay=1&loop=1&controls=0"> </iframe>

        </div>
        
        </p>

        <div style="padding-bottom: 130px;"></div>
        

       
    </body>
      
</html>