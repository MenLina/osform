<?php
session_start();
include ("db.php");
$username = $_POST['username'];
$password = $_POST['password'];
$_SESSION["username"] = $username;

$stmt = $conn->prepare("SELECT * FROM users WHERE username=?");
$stmt->bind_param("s", $username);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows == 1) {
    $row = $result->fetch_assoc();
    if (password_verify($password, $row['password'])) {
        echo "Авторизация успешна";
        header('Location: index.php');
    } else {
        echo "Неправильный пароль или логин";
    }
} else {
    echo "не работаит";
}
$stmt->close();
$conn->close();
