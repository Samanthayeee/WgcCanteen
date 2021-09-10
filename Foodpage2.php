<?php
$con = mysqli_connect("localhost", "yeesa", "goldmark95", "yeesa_canteen");
if(mysqli_connect_errno()){
    echo "Failed to connect to MySQL:".mysqli_connect_error(); die();}
else{
    echo "connected to database";
}

if(isset($_GET['food'])){
    $id = $_GET['food'];
}else {
    $id = 1;
}

$all_food_query = "SELECT FoodID, FoodItem FROM food";
$all_food_result = mysqli_query($con, $all_food_query);
$this_food_query = "SELECT FoodID, FoodItem, FoodPrice, FoodAvalibility FROM food WHERE food.FoodID = '" .$id."'";
$this_food_result = mysqli_query($con, $this_food_query);
$this_food_record = mysqli_fetch_assoc($this_food_result);

?>
<!DOCTYPE html>

<html lang ="en"
<head>
    <title> WGC CANTEEN </title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="styleV2.css">
</head>

<body>
<header>
    <h1> WGC CANTEEN </h1>
    <nav>
        <ul>
            <a href="Homepage2.php">Home</a>
            <a href="Foodpage2.php">Food </a>
            <a href="Drinkspage2.php">Drinks </a>
            <a href="Specialspage2.php">Specials </a>
        </ul>
    </nav>
    <h2> Food page </h2>
</header>
</body>
<main>
    <?php
        echo "<p> Food ID: " .$this_food_record['FoodID'] . "<br>";
        echo "<p> Food Item: " .$this_food_record['FoodItem'] . "<br>";
        echo "<p> Food Price: " . $this_food_record['FoodPrice'] ."<br>";
        echo "<p> Food Avalibility: " . $this_food_record['FoodAvalibility'] ."<br>";
    ?>
    <form name="food_form" id="food_form" method = "get" action ="Foodpage2.php">
        <select id="food" name="food">
            <?php
            while($all_food_record = mysqli_fetch_assoc($all_food_result)){
                echo "<option value = '". $all_food_record['FoodID'] . "'>";
                echo $all_food_record ['FoodItem'];
                echo "</option>";
            }

            ?>

        </select>
        <input type="Submit" name="food_button" value = "show me the food information">
    </form>

</main>
