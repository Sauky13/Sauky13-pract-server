<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2 style="font-size: x-small">Добавление нового помещения</h2>
<h3><?= $message ?? ''; ?></h3>
<form method="post" style="display: flex; gap: 20px; flex-direction: column; width: 800px"  method="post">
    <label><input type="text" name="login" placeholder="Название" style="background: rgba(236, 236, 236, 1);border: none;height: 22px;font-weight: 600;"></label>
    <label> <input type="text" name="password" placeholder="Вид помещения" style="background: rgba(236, 236, 236, 1);border: none;height: 22px;font-weight: 600;"></label>
    <label> <input type="text" name="name" placeholder="Площадь" style="background: rgba(236, 236, 236, 1);border: none;height: 22px;font-weight: 600;"></label>
    <label> <input type="text" name="name" placeholder="Количество посадочных мест" style="background: rgba(236, 236, 236, 1);border: none;height: 22px;font-weight: 600;"></label>
    <label> <input type="text" name="name" placeholder="Здание" style="background: rgba(236, 236, 236, 1);border: none;height: 22px;font-weight: 600;"></label>
    <button style="width: 99px;border: none;background-color: rgba(170, 170, 170, 1);color: white;font-weight: 600;height: 28px;">Добавить</button>
</form>
</body>
</html>