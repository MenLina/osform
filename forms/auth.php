<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Авторизация</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container mt-5">
            <div class="col-md-6">
                <h2>Авторизация</h2>
                 <form action="../login.php" method="post">
                    <div class="form-group">
                        <label for="username">Имя пользователя</label>
                        <input type="text" class="form-control" id="username" name="username" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Пароль</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Войти</button>
                    <span>Нет аккаунта?</span>
                    <a href="/forms/formreg.php" class="btn btn-link" style="text-decoration:underline">Зарегистрироваться</a>
                </form>
            </div>
        </div>
    </body>
</html>