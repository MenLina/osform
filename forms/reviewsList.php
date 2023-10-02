<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location:../index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Ваши отзывы</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container mt-5">
        <div class="d-flex justify-content-between">
                    <p class="headername">Вы вошли как: <?php echo $_SESSION['username'] ?></p>
                    <a href="../logout.php" class="btn btn-danger">Выйти</a>
                </div>
            <div class="row">
                <div class="col-md-6">
                    <h2 class="text-center">Ваши отзывы</h2>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Email</th>
                                <th>Категория</th>
                                <th>Оценка</th>
                                <th>Отзыв</th>
                                <th>Действие</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            include('../db.php');
                            session_start();
                            $username = $_SESSION['username'];
                            /** @var string $conn */
                            $stmt = $conn->prepare("SELECT * FROM reviews WHERE user=?");
                            $stmt->bind_param("s", $username);
                            $stmt->execute();
                            $result = $stmt->get_result();

                            if ($result->num_rows > 0) {
                                while($row = $result->fetch_assoc()) {
                                    $id = $row['id'];
                                    echo "<tr>
                                        <td>$id</td>
                                        <td>{$row['email']}</td>
                                        <td>{$row['category']}</td>
                                        <td>{$row['mark']}</td>
                                        <td>{$row['review']}</td>
                                        <td><a href='/forms/edit_review.php?id=$id' class='btn btn-primary'>Редактировать</a></td>
                                        <td><a href='../delReview.php?id=$id' class='btn btn-danger'>Удалить</a></td>
                                    </tr>";
                                }
                            } else {
                                echo "<tr><td colspan='3'>Пользователей нет в базе данных</td></tr>";
                            }
                            $stmt->close();
                            $conn->close();
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <a href="/forms/reviewform.php" class="btn btn-success" style = "margin-top: 1em;">Создать новый отзыв</a>
        </div>
    </body>
</html>