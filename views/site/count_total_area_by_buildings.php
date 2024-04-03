<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <p>Подсчёт общей площади учебных аудиторий по зданиям</p>
    <div class="container">

        <div class="container_1">
            <form method="get">
                <select name="building_id" placeholder="Здание">
                    <option value="">Выберите здание</option>
                    <?php
                    foreach ($roombuilding as $building) {
                        echo '<option value="' . $building->building_id . '">' . $building->name . '</option>';
                    }
                    ?>
                </select>
                <button type="submit">Подсчитать</button>
            </form>
        </div>
        <div class="container_1">
            <p>Общая площадь аудиторий</p>
            <div id="square">
                <p>
                    <?php
                    echo $totalArea . ' кв.м';
                    ?>
                </p>
            </div>
        </div>
    </div>
</body>

</html>