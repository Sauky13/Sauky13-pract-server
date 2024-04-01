<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>Добавление нового помещения</h2>
    <?php
    if (!empty($errors)) {
        echo '<div class="errors">';
        foreach ($errors as $field => $fieldErrors) {
            foreach ($fieldErrors as $error) {
                echo '<p class="error">' . $error . '</p>';
            }
        }
        echo '</div>';
    }
    ?>
    <form method="post">
        <input name="csrf_token" type="hidden" value="<?= app()->auth::generateCSRF() ?>" />
        <label><input type="text" name="title" placeholder="Название"></label>
        <select name="room_types_id" placeholder="Вид помещения">
            <option value="">Выберите вид помещения</option>
            <?php
            foreach ($roomtypes as $roomtype) {
                echo '<option value="' . $roomtype->room_types_id . '">' . $roomtype->title . '</option>';
            }
            ?>
        </select>
        <label> <input type="number" name="square" placeholder="Площадь"></label>
        <label> <input type="number" name="places" placeholder="Кол-во посадочных мест"></label>
        <select name="building_id" placeholder="Здание">
            <option value="">Выберите здание</option>
            <?php
            foreach ($roombuilding as $building) {
                echo '<option value="' . $building->building_id . '">' . $building->name . '</option>';
            }
            ?>
        </select>
        <button id="Btn_add">Добавить</button>
    </form>
</body>

</html>