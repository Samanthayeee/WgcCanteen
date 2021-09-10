<?php
$con = mysqli_connect("localhost", "yeesa", "goldmark95", "yeesa_canteen");
if(mysqli_connect_errno()){
    echo "Failed to connect to MySQL:".mysqli_connect_error(); die();}
else {
    echo "connected to database";
}
if(isset($_GET['drink'])){
    $id = $_GET['drink'];
}else {
    $id = 1;
}
$all_drink_query = "SELECT DrinkID, DrinkItem FROM drink";
$all_drink_result = mysqli_query($con, $all_drink_query);
$this_drink_query = "SELECT DrinkID,DrinkItem, DrinkPrice, DrinkAvalibility FROM drink WHERE drink.DrinkID = '" .$id."'";
$this_drink_result = mysqli_query($con, $this_drink_query);
$this_drink_record = mysqli_fetch_assoc($this_drink_result);
$all_food_query = "SELECT FoodID, FItem FROM foods";


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
    <h2> Drink page </h2>
</header>
</body>
<main>
    <?php
    echo "<p> Drink ID: " .$this_drink_record['DrinkID'] . "<br>";
    echo "<p> Drink Item: " .$this_drink_record['DrinkItem'] . "<br>";
    echo "<p> Drink Price: " . $this_drink_record['DrinkPrice'] ."<br>";
    echo "<p> Drink Avalibility: " . $this_drink_record['DrinkAvalibility'] ."<br>";
    ?>
    <form name="drink_form" id="drink_form" method = "get" action ="Drinkspage2.php">
        <select id="drink" name="drink">
            <?php
            while($all_drink_record = mysqli_fetch_assoc($all_drink_result)){
                echo "<option value = '". $all_drink_record['DrinkID'] . "'>";
                echo $all_drink_record ['DrinkItem'];
                echo "</option>";
            }

            ?>

        </select>
        <input type="Submit" name="drink_button" value = "show me the drink information">
    </form>

</main>

