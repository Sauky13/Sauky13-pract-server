<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <p>Подсчёт общей площади учебных аудиторий по уч заведению</p>
    <div class="container">

        <div class="container_1">
            <p>Общая площадь всех аудиторий</p>
            <div id="total_area">
                <p>
                    <?php
                    echo $totalArea . ' кв.м';
                    ;
                    ?>
                </p>
            </div>
        </div>
    </div>
</body>

</html>