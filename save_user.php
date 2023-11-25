<?php
if (!empty($_POST['login']) and !empty($_POST['password'])) {
    $login = $_POST['login'];
    $email = $_POST['email'];
    $password = $_POST['password'];
}
include("dbconnect.php");
$result = $mysqli -> query("SELECT * FROM users WHERE login='$login'");
$myrow = $result -> fetch_assoc();
if(!empty($myrow['id'])){
    exit("уже зарегистрирован");
}
$result2 = $mysqli -> query("INSERT INTO users SET login='$login', email='$email', password='$password'");
if($result2 == 'TRUE'){
  header("Location:complite.html");
}
?>