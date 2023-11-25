<?php
// Подключение к базе данных
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "illuminous";
$conn = new mysqli($servername, $username, $password, $dbname);
// Инициализация корзины
session_start();
if (!isset($_SESSION["cart"])) {
    $_SESSION["cart"] = array();
}
// Добавление товара в корзину
if (isset($_POST["film_id"])) {
    $film_id = $_POST["film_id"];
    if (isset($_SESSION["cart"][$film_id])) {
        $_SESSION["cart"][$film_id]++;
    } else {
        $_SESSION["cart"][$film_id] = 1;
    }
}
header("Location: favorites.php");
exit();
?>
