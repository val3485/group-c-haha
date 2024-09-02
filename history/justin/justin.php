<?php
$Justin = [
    "name" => "Justin Eward D. Nalog",
    "Age" => "17 yrs old",
    "fav-color" => "Yellow",
    "prof" => ["C++", "JAVA", "HTML", "CSS"]
];
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>group clare</title>
    <style>
        *{
            margin:0;
        }
        #profficiency {
            color: white;
            font-family: Courier;
            text-align: center;
            display: flex;
            align-items: center;
            justify-content: flex-start;
            flex-direction: column;
            flex-wrap: wrap;
            background-color: darkblue;
            width: 300px;
            margin: auto;
        }

        p {
            color: white;
            text-align: center;
            font-size: 25px;

        }

        body {
            background-image: url("https://static.vecteezy.com/system/resources/previews/000/526/472/large_2x/vector-a-moonlight-view.jpg");
            background-color: #191835;
            font-family: 'arial narrow';
        }

        #head {
            font-size: 80px;
            background-color: #4DB1FF;
        }

        img {
            width: 100px;
            height: 100px;
            margin: 0 auto;
            display: block;
        }

        h1 {
            color: white;
            text-align: center;
        }

        #image-bg {
            min-width: 0 auto;
            width: 1000px;
            height: 500px;
        }
    </style>
</head>

<body>
    <header id="head" style="color: white; font-family: Courier New; text-align: center;">Introduction</header>
    <a href="../history.php" style="color:white; font-size:30px;text-decoration:none; text-align:center;opacity:0.6;" > Click to go back</a>
    <h1>HELLO EVERYONE!</h1>
    <p>&#128526; name is <?= $Justin["name"] ?> &#128526; </p>
    <p>I am <?= $Justin["Age"] ?></p>
    <p>My favorite color is <<?= $Justin["fav-color"] ?></p>
    <br>
    <img src="https://assets.bonappetit.com/photos/5fd134d5e4009dfec306c19f/16:9/w_1920,c_limit/Basically-Lemon.jpg"
        alt="yellow">
    <p>My favorite movie is<br></br><a style="color: grey" href="https://www.youtube.com/watch?v=V5L9wZGJiSg">the boy,
            the mole, the fox and the horse</a></p>
            <br>
    <ul id="profficiency">Coding Language Profficiency:
        <li><?= $Justin["prof"]["0"] ?></li>
        <li><?= $Justin["prof"]["1"] ?></li>
        <li><?= $Justin["prof"]["2"] ?></li>
        <li><?= $Justin["prof"]["3"] ?></li>
    </ul>
    <br>
    <img id="image-bg"
        src="https://64.media.tumblr.com/f076979a17955ce58f458d42c0ded5f4/515dcd0d2a581c43-70/s540x810/a4c6c5e160fd6cefe0fcd45ccb436374e3ebf069.gifv">

        
    </body>


</html>