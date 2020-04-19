<?php

//Block 1
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Table";
$table = "Tablica";

//Block 2
$restaurant_name = $_POST['RestaurantName'];
$item_name = $_POST['ItemName'];
$description = $_POST['Description'];
$price = $_POST['Price'];

//Block 3
$connection = mysqli_connect ($servername, $username, $password, $dbname);
if (!$connection) {
    die ('Could not connect:' . mysqli_error($connection));
}
mysqli_select_db($connection, $dbname);

$sql ="INSERT INTO $table (RestaurantName, ItemName, Description, Price) VALUES ('$restaurant_name', '$item_name', '$description', '$price')";

if(mysqli_query($connection, $sql)){
    echo "Records inserted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($connection);
}
//Block 7
mysqli_close($connection);