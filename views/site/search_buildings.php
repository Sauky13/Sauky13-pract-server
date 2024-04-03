<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <style>
        #search_buildings {
            display: flex;
            flex-direction: row;
            gap: 20px;
            align-items: center;
        }
    </style>
    <form class="search_buildings" id="search_buildings">
        <input type="search" name="search" placeholder="Название здания">
        <button>Поиск</button>
    </form>
    <div>
        <div class="build_cont">
            <p>Найденное здание:</p>
            <ul class="search_builds" id="ul_search">
                <?php
                if (!empty($builds)):
                    foreach ($builds as $build) {
                        echo '<li>Название здания: ' . $build->name . '</li>';
                        echo '<li>Адрес здания: ' . $build->address . '</li>';
                        if (!empty($build->image)):
                            echo '<li><img class="img" src="public/img/' . $build->image . '"></li>';
                        endif;
                    }
                endif
                ?>
            </ul>
        </div>
    </div>

</body>

</html>