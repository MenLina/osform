<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Регистрация</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container mt-5">
            <div class="col-md-6">
                <h2>Регистрация</h2>
                <form action="../register.php" method="post">
                    <div class="form-group">
                        <label for="reg_username">Имя пользователя</label>
                        <input type="text" class="form-control" id="reg_username" name="reg_username" required>
                    </div>
                    <div class="form-group">
                        <label for="reg_password">Пароль</label>
                        <input type="password" class="form-control" id="reg_password" name="reg_password" required>
                    </div>
                    <button type="submit" class="btn btn-success">Зарегистрироваться</button>
                    <span>Есть аккаунт?</span>
                    <a href="/forms/auth.php" class="btn btn-link" style="text-decoration:underline">Войти</a>
                </form>
            </div>
        </div>
    </body>
</html>