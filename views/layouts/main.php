<!doctype html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport"
         content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Pop it MVC</title>

</head>
<body style="margin:10px;   font-size:14px;
    font-family:Verdana;">
<header>
    <nav>
        <?php
        if (!app()->auth::check()):
            ?>
            <a style="text-decoration: none; color: #3d3d3d; font-weight:600" href="<?= app()->route->getUrl('/login') ?>">Авторизация</a>
        <?php
        else:
            ?>
            <a style="text-decoration: none; color: #3d3d3d; font-weight:600" href="<?= app()->route->getUrl('/logout') ?>">Выйти</a>
            <?php
            if (app()->auth::user()->role_id === 1):
                ?>
                <p style="font-weight: 600; color: #9E9E9E; font-size: xx-small;">Вы вошли как админ</p>
            <?php
            elseif (app()->auth::user()->role_id === 2):
                ?>
                <p style="font-weight: 600; color: #9E9E9E; font-size: xx-small;">Вы вошли как сотрудник</p>
            <?php
            endif;
        endif;
        ?>
    </nav>
</header>
<main>
   <?= $content ?? '' ?>
</main>

</body>
</html>
