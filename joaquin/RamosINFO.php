<!DOCTYPE html>
<html lang = "en">

<head>

<title> Watakushi</title>

<?php
$background_video = "RaidenShogun.mp4";
$name = "Joaquin Andrei L. Ramos";
$birthdate = "31st of March 2007";
$favorite_color = "purple";
$profile_image = "https://scontent.fmnl5-2.fna.fbcdn.net/v/t1.15752-9/444788889_349794971543640_6856404760394178311_n.jpg?_nc_cat=107&ccb=1-7&_nc_sid=9f807c&_nc_eui2=AeGAaWdqoSWN9fWWPhYiQU2Z4fSBzOQLO9_h9IHM5As7362f_CVre5uhpmuBpfby8gqpKOOp3BIH0gnRdUl1OnkS&_nc_ohc=gehakvbiCoIQ7kNvgHoGAhg&_nc_ht=scontent.fmnl5-2.fna&cb_e2o_trans=t&gid=AZe5_k7sUO9ABJN8IibzMoW&oh=03_Q7cD1QHpr5MUU8XB3JhD7WIgUBb_2kRY-oSY7lIKWHLDq-4bZQ&oe=66D1A1E6";
$favorite_color_image = "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRnVUPNqtPjrBuSbUznwaPAXtLjYDokWUXPBA&s";
$favorite_movie ="I want to eat your pancreas";
$favorite_movie_video = "Favemovie.mp4";
$age = 17;
$favorite_anime_image = "https://i.ebayimg.com/images/g/aFQAAOSwhnZf15w7/s-l1200.webp";
$hobbies = "My hobbies is cooking, Sleeping and watching anime";
$favorite_anime_text = "This is my all-time favorite anime (series)";

?>
<<video autoplay muted loop id="bg" src="RaidenShogun.mp4" type="video/mp4"></video>
<style>

#bg {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: -1;
    object-fit:cover;
}
body{
    margin: 0;
    padding: 0;
    font-family: Arial, sans-serif;

}
.container{
    padding: 20px;
}

</style>


</head>


<body>

<div class= "container">
    
<h2 style = "color:rgb(172, 131, 163)">My name is <?php echo $name; ?></h2>
<img src="<?php echo $profile_image; ?>" alt="Profile Picture" width= "200" height =" 100"> 

<h2 style = "color:rgb(172, 131, 163)">I was born on <?php echo $birthdate; ?></h2>

<h2 style = "color:rgb(172, 131, 163)">My favorite color is <?php echo $favorite_color; ?></h2>
<img src="<?php echo $favorite_color_image; ?>" alt="Favorite color" width="170" height="70">

<h3 style="color:rgb(172, 131, 163)">The greatest movie of all time for me is "<a href="<?php echo $favorite_movie; ?>"></a>"</h3>

<video width="500" controls>
        <source src="<?php echo $favorite_movie_video; ?>" type="video/mp4">
    </video>

    <h2 style="color:rgb(172, 131, 163)">I am <?php echo $age; ?> years old</h2>

 <h2 style="color:rgb(172, 131, 163)">My hobbies are <?php echo $hobbies; ?></h2>

<img src="<?php echo $favorite_anime_image; ?>" alt="Favorite anime" width="170" height="80">

<h2 style="color:rgb(172, 131, 163)"><?php echo $favorite_anime_text; ?></h2>
</div>

</body>
</html>