<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<form action="../update.php" method="post">
<?php
include('../db.php');
if(isset($_GET['id'])) {
    $id = $_GET['id'];

    /** @var string $conn */
    $stmt = $conn->prepare("SELECT * FROM reviews WHERE id=?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        echo "<input type='hidden' name='id' value='$id'>";
        echo "<div class='form-group'>
        <label for='review'>Отзыв</label>
        <textarea class='form-control' style='width:300px; height: 150px' name='review'>" . $row['review'] . "</textarea>
        </div>";
        echo "<button type='submit' class='btn btn-primary'>Сохранить</button>";
    } else {
        echo "Отзыв не найден";
    }
    $stmt->close();
} else {
    echo "Не указан ID отзыва";
}
$conn->close();
?>
</form>
</body>
</html>