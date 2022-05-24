<?php

include "logic.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Easy Eat | View Recipe</title>
</head>
<body>

<div class="container mt-5">

    <?php foreach($query as $q){?>
        <div class="bg-dark p-5 rounded-lg text-white text-center">
            <h1><?php echo $q['dish'];?></h1>

           <div class="d-flex mt-2 justify-content-center align-items-center">
                <a href="edit.php?id=<?php echo $q['id']?>" class="btn btn-light btn-sm" name="edit">Edit</a>
                <form method="POST">
                    <input type="text" hidden value='<?php echo $q['id']?>' name="id">
                    <button class="btn btn-danger btn-sm ml-2" name="delete">Delete</button>
                </form>
            </div>

        </div>
        <p class="mt-5 border-left border-dark pl-3"><?php echo $q['recipe'];?></p>
    <?php } ?>

    <a href="main.php" class="btn btn-outline-dark my-3">Go Home</a>
</div>



</body>
</html>