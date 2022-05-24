<?php

ini_set("display_errors", "off");


$conn = mysqli_connect("localhost", "root", "", "easyeat");

if(!$conn){
    echo "<h3 class='container bg-dark p-3 text-center text-warning rounded-lg mt-5'>Not able to establish Database Connection<h3>";
}


$sql = "SELECT * FROM dish_data";
$query = mysqli_query($conn, $sql);


if(isset($_REQUEST['new_post'])){
    $dish = $_REQUEST['dish'];
    $recipe = $_REQUEST['recipe'];

    $sql = "INSERT INTO dish_data(dish, recipe) VALUES('$dish', '$recipe')";
    mysqli_query($conn, $sql);

    echo $sql;

    header("Location: index.php?info=added");
    exit();
}


if(isset($_REQUEST['id'])){
    $id = $_REQUEST['id'];
    $sql = "SELECT * FROM dish_data WHERE id = $id";
    $query = mysqli_query($conn, $sql);
}

// Delete
if(isset($_REQUEST['delete'])){
    $id = $_REQUEST['id'];

    $sql = "DELETE FROM dish_data WHERE id = $id";
    mysqli_query($conn, $sql);

    header("Location: index.php");
    exit();
}

// Update
if(isset($_REQUEST['update'])){
    $id = $_REQUEST['id'];
    $dish = $_REQUEST['dish'];
    $recipe = $_REQUEST['recipe'];

    $sql = "UPDATE dish_data SET dish = '$dish', recipe = '$recipe' WHERE id = $id";
    mysqli_query($conn, $sql);

    header("Location: index.php");
    exit();
}

?>

