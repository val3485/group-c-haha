<?php
    $person = [
        "name" => "Villanueva, Jergi Hary V.",
        "age" => 17,
        "color" => "gray and black",
        "favorite_movie" => "Sword Art Online Ordinal Scale the Movie, Kimi no nawa, A silent voice",
        "expertise" => "playing sports and drawing",
        "hobies" => "watching anime, sleeping, drawing, and eating",
    ];
    $response = '';
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $dropdown = trim($_POST['dropdown'] ?? '');

        switch ($dropdown) {
            case "name":
                $response = "Name: " . $person['name'];
                break;
            case "age":
                $response = "Age: " . $person['age'];
                break;
            case "color":
                $response = "Color: " . $person['color'];
                break;
            case "movie":
                $response = "Favorite Movie: " . $person['favorite_movie'];
                break;
            case "expertise":
                $response = "My Expertise: " . $person['expertise'];
                break;
            case "hobbies":
                $response = "My Hobies: " . $person['hobies'];
                break;
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Myself</title>
</head>
<body>
    <h1>ABOUT ME</h1>
    <form method="post" action="">
        <select name="dropdown">
            <option value="">Choose an option</option>
            <option value="name">naame</option>
            <option value="age">age</option>
            <option value="color">color</option>
            <option value="movie">favorite movie</option>
            <option value="expertise">expertise</option>
            <option value="hobbies">hobbies</option>
        </select>
        <input type="submit" name="submit" value="Enter" />
    </form>
    <?php if (!empty($response)): ?>
        <p><?php echo htmlspecialchars($response); ?></p>
    <?php endif; ?>

    <a href="../main.php" style = "font-size: 15px;text-align: center;"> click to go back</a>
</body>
</html>

           

