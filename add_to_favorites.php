<?php
$conn = new mysqli('localhost','root','','illuminous');
session_start();
if (!isset($_SESSION["cart"])) {
    $_SESSION["cart"] = array();
}
if (isset($_POST["film_id"])) {
    $film_id = $_POST["film_id"];
    if (isset($_SESSION["cart"][$film_id])) {
        $_SESSION["cart"][$film_id]++;
    } else {
        $_SESSION["cart"][$film_id] = 1;
    }
    $sql = "INSERT INTO films SET film_id='$film_id'";
    $result = $conn->query($sql);
}
header("Location: favorites.php");
exit();
?>
