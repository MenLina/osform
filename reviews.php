<?php
include ("db.php");
session_start();

$email = $_POST['email'];
$category = $_POST['category'];
$mark = $_POST['inlineRadioOptions'];
$review	= $_POST['review'];
$user = $_SESSION['username'];
$stmt = $conn->prepare("INSERT INTO reviews (email, category, mark, review, user) VALUES (?, ?, ?, ?, ?)");
$stmt->bind_param("ssiss", $email, $category, $mark, $review, $user);
$stmt->execute();

if ($stmt->affected_rows > 0) {
    header("Location:/forms/thx.php");
}
$stmt->close();
$conn->close();