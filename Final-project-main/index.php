<?php

include "logic.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>Easy Eat | Add Recipe</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

</head>
<body>
<div class="Create_area">
<h1 class="main_title1">Easy</h1>
        <h1 class="main_title2">Eat</h1>
        <div class="nav_bar" style="z-index: 3;">
          <span onclick="window.location.href='www.google.com';">HOME</span>
          <span class="a">ABOUT US</span>
          <span class="b">Add Recipe</span>
          <span class="c">View Recipe</span>
        </div>
        <div class="overlay">
</div>
        <a href="create.php"><button class="create_jane">+ Add Your Recipe</button></a>
        <br><br>
    <?php if(isset($_REQUEST['info'])){ ?>
        <?php if($_REQUEST['info'] == "added"){?>
            <div class="alert alert-success" role="alert">
                Recipe has been added successfully
            </div>
        <?php }?>
    <?php } ?>

    <div class="row">
        <?php foreach($query as $q){ ?>
            <div class="col-12 col-lg-4 d-flex justify-content-center">
                <div class="card text-white bg-dark mt-5" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $q['dish'];?></h5>
                        <p class="card-text"><?php echo substr($q['recipe'], 0, 50);?>...</p>
                        <a href="view.php?id=<?php echo $q['id']?>" class="btn btn-light">Edit <span class="text-danger">&rarr;</span></a>
                    </div>
                </div>
            </div>
        <?php }?>
    </div>

</div>


<a href="main.php" class="btn btn-outline-dark my-3">Go Home</a>
</body>
</html>