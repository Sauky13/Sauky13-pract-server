<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/css/style.css">
    <title>Document</title>
</head>

<body>
    <p>Подсчёт кол-ва посадочных мест по зданиям</p>
    <div class="container">

        <div class="container_1">
            <p>Выберите здание</p>
            <form method="get">
                <select name="building_id" placeholder="Здание" onchange="this.form.submit()">
                    <option value="">Выберите здание</option>
                    <?php
                    foreach ($roombuilding as $building) {
                        echo '<option value="' . $building->building_id . '">' . $building->name . '</option>';
                    }
                    ?>
                </select>
            </form>

        </div>
        <div class="container_1">
            <p>Количество посадочных мест</p>
            <div id="count_seats">
                <p>
                    <?php
                    echo $totalPlaces;
                    ?>
                </p>
            </div>
        </div>
    </div>
</body>

</html>