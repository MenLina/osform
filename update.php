<?php
include('db.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $newReview = $_POST['review'];
    /** @var string $conn */
    $stmt = $conn->prepare("UPDATE reviews SET review=? WHERE id=?");
    $stmt->bind_param("si", $newReview, $id);
    $stmt->execute();

    if ($stmt->affected_rows > 0) {
        header("Location: /forms/reviewsList.php");
    } else {
       echo "Ошибка при обновлении информации: " . $conn->error;
    }
    $stmt->close();
    $conn->close();
}
