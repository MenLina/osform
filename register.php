<?php
session_start();
include ("db.php");

$username = $_POST['reg_username'];
$password = password_hash($_POST['reg_password'], PASSWORD_DEFAULT);
$_SESSION["username"] = $username;

$check_query = $conn->prepare("SELECT * FROM users WHERE username = ?");
$check_query->bind_param("s", $username);
$check_query->execute();
$check_result = $check_query->get_result();

if ($check_result->num_rows > 0) {
    echo "Пользователь с таким именем уже существует. Выберите другое имя.";
    $check_query->close();
} else {

    $check_query->close();

    $stmt = $conn->prepare("INSERT INTO users (username, password) VALUES (?, ?)");
    $stmt->bind_param("ss", $username, $password);
    $stmt->execute();

    if ($stmt->affected_rows > 0) {
        echo "Пользователь успешно зарегистрирован.";
        header('Location: index.php');
    } else {
        echo "Ошибка при регистрации: " . $conn->error;
    }

    $stmt->close();
}

$conn->close();