<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
<link rel= "stylesheet" href = "style.css">
</head>


<body>

<header>
<h1 class ="border"> MY PORTFOLIO </h1>
</header>

<div class="header">
<img src="SC IMG_4349.jpg">
<div class="name">
    <h1>Hi, I'm Jillian Chelzie Taño!</h1>
</div>
</div>


<a href="../history.php" style="color:white; font-size:30px;text-decoration:none; text-align:center;opacity:0.8;text-shadow: 2px 2px #ad2173;" > Click to go back</a>
<h2 id= "text">Click on each collapsible below to view my info:</h2>
<button class="collapsible">What's my Age?</button>
<div class="content">
  <p>I was born on November 9, 2006 which makes me currently at 17 years old.</p>
</div>

<button class="collapsible">My favorite color</button>
<div class="content1">
  <p>One of my most favorite color at the moment is <b>PINK.</p>
</div>

<button class="collapsible">Favorite Movie</button>
<div class="content">
  <p>Arrietty will always be my all time fave :3
  </p>
  <iframe width="420" height="245" src="https://www.youtube.com/embed/9CtIXPhPo0g?si=_POJYqTZJ7OAUJtS">
</iframe>
  </div>
<button class="collapsible">Proficiency in Computer Languages</button>
<div class="content">
  <p>These are some of the computer languages I'm familiar using:<p>
  <li>HTML</li>
  <li>CSS</li>
  <li>JavaScript</li>
  <li>C++</li>
  <li>Oracle</li>
</div>


<script>
var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.maxHeight){
      content.style.maxHeight = null;
    } else {
      content.style.maxHeight = content.scrollHeight + "px";
    } 
  });
}
</script>


</body>
</html>