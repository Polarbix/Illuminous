<?php
session_start();	
if (!empty($_POST['password']) and !empty($_POST['login'])) {
    $login = $_POST['login'];
    $password = $_POST['password'];
    $link=new mysqli('localhost','root','','illuminous');
    $query = "SELECT * FROM users WHERE login='$login' AND password='$password'";
    $res = mysqli_query($link, $query);
    $user = mysqli_fetch_assoc($res);
    $_SESSION['role'] = $user['role'];
    $_SESSION['id'] = $user['id'];
    if (!empty($user)) {
        $_SESSION['auth'] = true;
    }
    switch($_SESSION['role']) {
        case 'admin':
            header("Location:admin.php");
            break;
        case 'user':
            header("Location:account.php");
            break;
        default:
        exit("Введенный логин или пароль неверный");
        break;
      }
}
?>