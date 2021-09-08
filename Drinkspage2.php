<?php
$con = mysqli_connect("localhost", "yeesa", "goldmark95", "yeesa_canteen");
if(mysqli_connect_errno()){
    echo "Failed to connect to MySQL:".mysqli_connect_error(); die();}
else{
    echo "connected to database";
}
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
    <h2> Drinks page </h2>
</header>
</body>
<main>
    <form name="drink_form" id="drink_form" method = "get" action ="Drinkspage2.php">
        <select id="drink" name="drink">

        </select>
        <input type="Submit" name="drink_button" value = "show me the drink information">
    </form>

    <form name="food_form" id="food_form" method = "get" action ="Foodpage2.php">
        <select id="food" name="food">

        </select>
        <input type="Submit" name="food_button" value = "show me the food information">
    </form>

    <form name="specials_form" id="specials_form" method = "get" action ="Specialspage22.php">
        <select id="speicals" name="specials">

        </select>
        <input type="Submit" name="specials_button" value = "show me the specials information">
    </form>

</main>

