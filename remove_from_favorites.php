<?php
session_start();
$conn = new mysqli('localhost','root','','illuminous');
if (isset($_POST["film_id"])) {
    $film_id = $_POST["film_id"];
    unset($_SESSION["cart"][$film_id]);
}
header("Location: favorites.php");
exit();
?>
