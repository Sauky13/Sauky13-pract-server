<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Аь</title>
</head>
<body>

<?php
if (app()->auth::check()) {
    $role_id = app()->auth::user()->role_id;

    if ($role_id === 1) { // Пользователь с ролью 1 (админ)
        ?>
        <ul style="list-style-type: none; padding: 0;">
            <style>
                li {
                    margin-bottom: 10px;
                }
                li a {
                    color: #808080;
                    font-weight: 600;
                }
            </style>
            <li><a href="<?= app()->route->getUrl('/signup') ?>">Добавить нового сотрудника</a></li>
            <li><a href="<?= app()->route->getUrl('/count_seats_by_buildings') ?>">Подсчёт кол-ва посадочных мест по зданиям</a></li>
            <li><a href="<?= app()->route->getUrl('/count_total_area_by_institution') ?>">Подсчёт общей площади учебных аудиторий по уч заведению</a></li>
            <li><a href="<?= app()->route->getUrl('/count_total_area_by_buildings') ?>">Подсчёт общей площади учебных аудиторий по зданиям</a></li>
        </ul>
        <?php
    } elseif ($role_id === 2) { // Пользователь с ролью 2
        ?>
        <ul style="list-style-type: none; padding: 0;">
            <style>
                li {
                    margin-bottom: 10px;
                }
                li a {
                    color: #808080;
                    font-weight: 600;
                }
            </style>
            <li><a href="<?= app()->route->getUrl('/add_rooms') ?>">Добавить новые помещения</a></li>
            <li><a href="<?= app()->route->getUrl('/add_buildings') ?>">Добавить новые здания</a></li>
            <li><a href="<?= app()->route->getUrl('/count_seats_by_buildings') ?>">Подсчёт кол-ва посадочных мест по зданиям</a></li>
            <li><a href="<?= app()->route->getUrl('/count_total_area_by_institution') ?>">Подсчёт общей площади учебных аудиторий по уч заведению</a></li>
            <li><a href="<?= app()->route->getUrl('/count_total_area_by_buildings') ?>">Подсчёт общей площади учебных аудиторий по зданиям</a></li>
            <li><a href="<?= app()->route->getUrl('/select_room_numbers_by_buildings') ?>">Выбор номера помещений по зданиям</a></li>
        </ul>
        <?php
    }
}
?>

</body>
</html>