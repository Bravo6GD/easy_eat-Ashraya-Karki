<?php

include "logic.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Add dish and Recipe | Easy eat</title>
</head>
<body>

<div class="container mt-5">
    <form method="POST">
        <input type="text" placeholder="Enter dish name" class="form-control my-3 bg-dark text-white text-center" name="dish">
        <textarea name="recipe" class="form-control my-3 bg-black text-white" cols="30" rows="10"></textarea>
        <button class="btn btn-dark" name="new_post">Add Recipe</button>
    </form>
</div>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


</body>
</html>
