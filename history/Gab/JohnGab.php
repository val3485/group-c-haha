<?php
$person = [
    "Name" => "John Gabriel P. Evangelista",
    "Age" => "18",
    "Color" => "Blue"
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    body{
    background-color: #72a9d1;
    text-align: center;




    } </style>
</head>
<body>
 <h1>Hello! My name is <?php echo $person ["Name"]?><h1>
 <div>Age:<?php echo $person ["Age"] ?></div>
 <p>My favorite color is
    <p style = "color: blue;"><?php echo $person ["Color"] ?> </p> </p>
 <div>My favorite Movie is</div>
 <img src= "https://www.dreamworks.com/storage/cms-uploads/kung-fu-panda-4-he-poster.jpg">
 <a href="../history.php" style="color:white; font-size:30px;text-decoration:none; text-align:center;opacity:0.6;" > Click to go back</a>
 

</body>
</html>