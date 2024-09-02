<?php
    $name= "Miles Joveda Delfino";
    $fclr=["blue", "grey"];
    $age= 17;
    $fmovie=["Your Name", "Silent Voice"];
    $langprof=["C++", "HTML", "CSS"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delfino's Portfolio</title>
    <link rel="stylesheet" href="dport.css">
</head>
<body  id="your-element-selector">
    <div>
        <h1>Deflino's Protfolio</h1>
        <h3 id="section">12 - Computer Programming</h3>
    </div>
    <div>
        <h3>Hello! My name is <?= $name ?></h3>
        <h3>I am <?= $age ?> years old</h3>
        <h3>My favorite colors are:</h3>
        <ul>
            <li><?= $fclr[0] ?></li>
            <li><?= $fclr[1] ?></li>
        </ul>
        <h3>My favorite movies are:</h3>
        <ul>
            <li><?= $fmovie[0] ?></li>
            <li><?= $fmovie[1] ?></li>
        </ul>
        <h3>I am also proficient in computer languages such as:</h3>
        <ul>
            <li><?= $langprof[0] ?></li>
            <li><?= $langprof[1] ?></li>
            <li><?= $langprof[2] ?></li>
        </ul>
    </div>
    <a href ="../main.php" id="h" style="text-decoration: none;color: lightblue;" > click to go back </a>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r134/three.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/vanta@latest/dist/vanta.net.min.js"></script>
<script>
VANTA.NET({
  el: "#your-element-selector",
  mouseControls: true,
  touchControls: true,
  gyroControls: false,
  minHeight: 10.00,
  minWidth: 10.00,
  scale: 0.25,
  scaleMobile: 1.00,
  color: 0x73e173,
  backgroundColor: 0x141431,
})
</script>


</body>
</html>