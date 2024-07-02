<?php
include '../connection.php';
session_start();

// Check if user is logged in
if (!isset($_SESSION['admin_email'])) {
    echo "Please log in to add a recipe.";
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user_id = $_SESSION['user_id'];
    $name = $_POST['name'];
    $ingredients = $_POST['ingredients'];
    $instructions = $_POST['instructions'];

    $sql = "INSERT INTO recipe (user_id, name, ingredients, instructions) VALUES ('$user_id', '$name', '$ingredients', '$instructions')";

    if ($conn->query($sql) === TRUE) {
        echo "New recipe added successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Recipe</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Add a New Recipe</h1>
    </header>
    <main>
        <form method="post" action="add_recipe.php">
            <label for="name">Recipe Name:</label>
            <input type="text" id="name" name="name" required>
            <label for="ingredients">Ingredients:</label>
            <textarea id="ingredients" name="ingredients" required></textarea>
            <label for="instructions">Instructions:</label>
            <textarea id="instructions" name="instructions" required></textarea>
            <button type="submit">Add Recipe</button>
        </form>
    </main>
</body>
</html>
