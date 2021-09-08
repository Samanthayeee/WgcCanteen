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
              <h2> Home page </h2>
          </header>

      </body>
    <main>


</main>
