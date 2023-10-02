<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location:../index.php");
}
?>
<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Напишите отзыв</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container">
            <div class="headerform">
                <h1 class=review>Оставте отзыв</h1>
                <div class="d-flex justify-content-between">
                    <p class="headername">Вы вошли как: <?php echo $_SESSION['username'] ?></p>
                    <a href="logout.php" class="btn btn-danger">Выйти</a>
                </div>
            </div>
            <form action="../reviews.php" method="post">
                <div class="form-group">
                    <label for="exampleFormControlInput1">Email address. Напишите Ваш email для обратной связи</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" name="email" required>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Выберите категорию</label>
                    <select class="form-control" id="exampleFormControlSelect1" name="category">
                        <option>Работа тех.поддержки</option>
                        <option>Отзыв о компании</option>
                        <option>Другое</option>
                    </select>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="good">
                    <label class="form-check-label" for="inlineRadio1">Хорошо</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="normal">
                    <label class="form-check-label" for="inlineRadio2">Нормально</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="bad">
                    <label class="form-check-label" for="inlineRadio3">Плохо</label>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Напишите отзыв</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="review"></textarea>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1" required>
                        <label class="form-check-label" for="defaultCheck1">
                        Принимаю согласие на обработку данных
                        </label>
                    </div>
                    <div class="buttons_container d-flex justify-content-between">
                        <div class="buttons">
                            <button type="submit" class="btn btn-success" style = "margin-top: 1em;">Отправить</button>
                            <button type="reset" class="btn btn-danger" style = "margin-top: 1em;">Отчистить</button>
                        </div>
                            <a href="/forms/reviewsList.php" class="btn btn-info"style = "margin-top: 1em;">Ваши отзывы</a>
                    </div>
                </div>
            </form>
        </div>
    </body>
</html>