<?php
$con = mysqli_connect("localhost", "yeesa", "goldmark95", "yeesa_canteen");
if(mysqli_connect_errno()){
    echo "Failed to connect to MySQL:".mysqli_connect_error(); die();}
else{
    echo "connected to database";
}
if(isset($_GET['special'])){
    $id = $_GET['special'];
}else {
    $id = 1;
}
$all_specials_query = "SELECT Weekday FROM specials ";
$all_specials_result = mysqli_query($con, $all_specials_query);
$this_specials_query = "SELECT specials.Weekday, specials.FoodID, food.FoodItem , food.FoodID, specials.DrinkID, drink.DrinkItem , drink.DrinkID, specials.Special
FROM specials, food, drink
WHERE specials.FoodID = drink.DrinkID
AND specials.DrinkID = food.FoodID
AND specials.Weekday = '" .$id."'";
$this_specials_result = mysqli_query($con, $this_specials_query);
$this_specials_record = mysqli_fetch_assoc($this_specials_result);
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
    <h2> Specials page </h2>
</header>
</body>
<main>

    <?php
        echo "<p> Weekday: " . $this_specials_record['Weekday'] . "<br>";
        echo "<p> Special: " . $this_specials_record['Special'] . "<br>";
        echo "<p> FoodID: " . $this_specials_record['FoodID'] . "<br>";
        echo "<p> DrinkID: " . $this_specials_record['DrinkID'] . "<br>";
    ?>

    <form name="specials_form" id="specials_form" method = "get" action ="Specialspage2.php">
        <select id="specials" name="specials">
        <?php
            while($all_specials_record = mysqli_fetch_assoc($all_specials_result)) {
                echo "<option value = '" . $all_specials_record['Weekday'] . "'>";
                echo $all_specials_record ['Weekday'];
                echo "</option>";
            }
            ?>


        </select>
        <input type="Submit" name="specials_button" value = "show me the specials information">
    </form>

</main>
