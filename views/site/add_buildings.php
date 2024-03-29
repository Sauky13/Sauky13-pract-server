<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>Добавление нового здания</h2>
<h3><?= $message ?? ''; ?></h3>
<form method="post" method="post">
    <label><input type="text" name="login" placeholder="Название"></label>
    <label><input type="text" name="login" placeholder="Адрес"></label>
    <button id="Btn_add">Добавить</button>
</form>
</body>
</html>