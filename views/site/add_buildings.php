<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Добавление нового здания</title>
</head>

<body>
    <h2>Добавление нового здания</h2>
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
    <form method="post" class="title form_add" enctype="multipart/form-data">
        <input name="csrf_token" type="hidden" value="<?= app()->auth::generateCSRF() ?>" />
        <input type="text" name="name" placeholder="Название">
        <input type="text" name="address" placeholder="Адрес">
        <div>
            <p>Добавить схему здания</p>
            <input type="file" name="image">
        </div>

        <button>Добавить</button>
    </form>
</body>

</html>