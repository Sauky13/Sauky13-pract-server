<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>Добавление нового помещения</h2>
<h3><?= $message ?? ''; ?></h3>
<form method="post"  method="post">
    <label><input type="text" name="login" placeholder="Название"></label>
    <select placeholder="Вид помещения" plaid="select_room_types">
            <option>Аудитория</option>
            <option>Лабаратория</option>
            <option>Подсобное помещение</option>
            <option>Актовый зал</option>
            <option>Склад</option>
        </select>
    <label> <input type="text" name="name" placeholder="Площадь"></label>
    <label> <input type="text" name="name" placeholder="Кол-во посадочных мест"></label>
    <select>
            <option>Здание</option>
    </select> 
    <button id="Btn_add">Добавить</button>
</form>
</body>
</html>