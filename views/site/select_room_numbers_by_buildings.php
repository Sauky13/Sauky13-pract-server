<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<body>
    <p>Выбор помещений по зданиям</p>
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
                <button type="submit">Выбрать</button>
            </form>
        </div>
        <div class="container_1">
            <p>Помещения в выбранном здании:</p>
            <div id="rooms">
                <?php
                foreach ($rooms as $room) {
                    echo '<p>№' . $room->id . ' Название: ' . $room->title . '</p>';
                }
                ?>
            </div>
        </div>
    </div>
</body>
</html>
</html>