<?php
 $img1 = "assets/kler.jpg";
 $img2 = "assets/gab.jpg";
 $img3 = "assets/jergi.jpg";
 $img4 = "assets/joaquin.jpg";
 $img5 = "assets/miles.jpg";

?>


<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <h1> Students Data</h1><br><br>

        <style>
            @import url('https://fonts.googleapis.com/css2?family=Lexend+Peta:wght@100..900&display=swap');
            @import url('https://fonts.googleapis.com/css2?family=Major+Mono+Display&display=swap');
            *{
                margin:0;
            }
            h1{
                color: #733e12;
                background-color: #faddb7;
                font-size: 70px;
                font-family:"Major Mono Display", monospace;
                margin-top: 3%;
            }
            #gt{
                color: #733e12;
                background-color: #eeceb2;
                text-align:right;
                font-family: "Lexend Peta";
                font-size: 40px;
                font-weight: 200;
            }
            body{
                background-color: #fff5ed;
            }
            img{
                width: 24vw;
                height: 50vh;
                border-radius: 50% ;
                border-width: 5px;
                background-color: #6d3c07bd;
                margin-top: 14%;
                margin-left: 13%;
                padding: 6px;  
                transition: 0.3s;
                display: flexbox;

            }img:hover{
                width: 25vw;
                height: 52vh;
                padding: 15px;
                background-color: rgba(85, 38, 5, 0.83);
            }
            #h{
                font-family: "Lexend Peta";
                color: #733e12;
                font-size: 15px;
            } 
            #p{
                display: inline-block;
                text-align: right;
            }
            #rows {
                flex-direction: row;
                gap: 60px;
                display: flex;
                flex-wrap: wrap;
            }
            .navbar{
                background-color:#eeceb2; 
                overflow: hidden;
            }
            .navbar a#h {
                float:right;
                padding: 14px 20px;
                text-align: center;
                text-decoration: none;
                font-size: 20px;
                font-family:  "Lexend Peta";
                font-weight: 200;
                border-left: 1px solid #733e12 ;
                transition: 0.2s;
            }
            .navbar a#h1{
                float:right;
                padding: 14px 20px;
                text-align: center;
                text-decoration: none;
                font-size: 25px;
                font-weight: 900;
            }
            .navbar #h:hover{
                background-color: #E2B791;
            }
            .menu-popup{
                background-color: aqua;
                display: none;
                position: absolute;
                padding: 50px;
                right: 30px;             
            }
            #btn{
                background-color: transparent ;
                border: none;
                float: right;   
                padding: 14px 20px;
                text-align: center;
                font-size: 20px;
                font-family:  "Lexend Peta";
                font-weight: 200;
                color:#733e12;
                transition: 0.2s;
            }
            #btn:hover{
                background-color: #E2B791;
            }
            .navbar #h:hover,#btn:hover{
                font-size: 25px;
            }
            .pop-up-con, #title-pop-up, .mem-pop-up{
                text-decoration: none;
            }
    
        </style>
    </head>



    <body>
        <p id="gt">Get to know us</p><br><br>
        <div style="font-family: Lexend Peta ;font-weight: 200 ; font-size: 30px; background-color: #faddb7; color: #733e12;"> Pick one to open :> </div><br><br>

        <div class="navbar">
            <a href="./history/history.php" class="nav" id="h"> history</a> 

            <button class="open-button" onclick="openForm()" id="btn">menu</button>

                <div class="menu-popup" id="my-form">

                    <form class="menu-con"> 
                        <a href="./history/history.php" class="pop-up-con"> Our history</a> <br>

                        <div id="title-pop-up"> Members:</div> <br>

                        <div>
                            <a href="./clare/clare.php" class="mem-pop-up"> Clare's pfp</a> 
                        </div>
                        
                        <div>
                            <a href="./jergi/jergi.php" class="mem-pop-up"> Jergi's pfp</a> 
                        </div>

                        <div>
                            <a href="./miles/dport.php" class="mem-pop-up">Mile's pfp</a> 
                        </div> 

                        <div>
                            <a href="./joaquin/RamosINFO.php" class="mem-pop-up"> Joaquin's pfp</a> 
                        </div>
                       
                    </form>

                    <button type="button" class="btn-cancel" onclick="closeForm()"> close</button>
                    
                </div>  
            
        </div>

        <script>

            function openForm() {
                document.getElementById("my-form").style.display = "block";
            }
            function closeForm(){
                document.getElementById("my-form").style.display = "none";
            }

        </script>
        
        <div id="rows">

                <a href="./clare/clare.php">
                    <img src=<?= $img1 ?>>
                </a>
        
                <a href="./jergi/jergi.php">
                    <img src=<?= $img3 ?>>
                </a>
        
                <a href="./joaquin/RamosINFO.php">
                    <img src=<?= $img4 ?>>
                </a>

                <a href="./miles/dport.php">
                    <img src=<?= $img5 ?>>
                </a>
        </div>

        
        

        
    
    
    </body>
    </html>