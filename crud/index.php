<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Регистрация</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <section class="reg-form mt-2">
        <form action="test.script.php" method="POST" class="d-flex flex-column align-items-center">
            <div class="form-title">
                <h3>Регистрация</h3>
            </div>
            <div class="form-item d-flex flex-column col-4 mt-2">
                <label>Введите ваше ФИО:</label>
                <input type="text" name="username" pattern="[А-Яа-яЁё]+" required>
            </div>
            <div class="form-item d-flex flex-column col-4 mt-2">
                <label>Введите ваш адрес электронной почты:</label>
                <input type="email" name="user-email" required>
            </div>
            <div class="form-item d-flex flex-column col-4 mt-2">
                <label>Введите номер телефона</label>
                <input type="tel" name="user-number" required pattern="\+7\-[0-9]{3}\-[0-9]{3}-[0-9]{2}-[0-9]{2}" placeholder="+7-000-000-00-00">
            </div>
            <div class="form-item mt-2">
                <button class="btn bg-primary p-2 text-white">
                    Отправить
                </button>
            </div>
        </form>
    </section>
</body>
</html>