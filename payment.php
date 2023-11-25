<?php
session_start();
$id = $_SESSION['id'];
$query = "SELECT * FROM users WHERE id='$id'";
$res = mysqli_query($conn, $query);
$user = mysqli_fetch_assoc($res);
$name = $_POST['name'];
$surname = $_POST['surname'];
$card_number = $_POST['card_number'];
$card_date = $_POST['card_date'];
$cvv = $_POST['cvv'];
$sub_id = $_POST['sub_id'];
include("dbconnect.php");
$result2 = $mysqli -> query("UPDATE users SET name='$name', surname='$surname', card_number='$card_number', card_date='$card_date', cvv='$cvv', sub_id='$sub_id', role='sub' WHERE id='$id'");
if($result2 == 'TRUE'){
  header("Location:complite1.html");
}
?>