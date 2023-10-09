<?php
include ("db.php");
session_start();

$email = $_POST['email'];
$category = $_POST['category'];
$mark = $_POST['inlineRadioOptions'];
$review	= $_POST['review'];
//$agreeTermsCheck = isset($_POST['agreeTermsCheck']) ? true : false;
//$emailCheck = isset($_POST['emailCheck']) ? true : false;
//$fastAnswerCheck = isset($_POST['fastAnswerCheck']) ? true : false;
$user = $_SESSION['username'];

//$checkboxData = [
//    'agreeTermsCheck' => $agreeTermsCheck,
//    'emailCheck' => $emailCheck,
//    'fastAnswerCheck' => $fastAnswerCheck
//];
$checkboxData = $_POST['checkboxData'];
$jsonData = json_encode($checkboxData);


/** @var string $conn */
$stmt = $conn->prepare("INSERT INTO reviews (email, category, mark, review, user, checkbox) VALUES (?, ?, ?, ?, ?, ?)");
$stmt->bind_param("ssssss", $email, $category, $mark, $review, $user,$jsonData);
$stmt->execute();

if ($stmt->affected_rows > 0) {
    header("Location:/forms/thx.php");
}
$stmt->close();
$conn->close();