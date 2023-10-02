<?php
include('db.php');

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    if(isset($_GET['id'])){
        $id = $_GET['id'];

        /** @var string $conn */
        $stmt = $conn->prepare("DELETE FROM reviews WHERE id=?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        
        if ($stmt->affected_rows > 0) {
            header("Location: /forms/reviewsList.php");
        } else {
            echo "Ошибка при удалении отзыва: " . $conn->error;
        }
    } else {
        echo "Не указан ID отзыва";
    }
    $stmt->close();
    $conn->close();
}
