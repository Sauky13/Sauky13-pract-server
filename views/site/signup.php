<h2>Добавление нового сотрудника</h2>
<p><?= $message ?? ''; ?></p>
<form method="post" method="post">
    <input name="csrf_token" type="hidden" value="<?= app()->auth::generateCSRF() ?>"/>
    <label><input type="text" name="login" placeholder="Логин"></label>
    <label> <input type="password" name="password" placeholder="Пароль"></label>
    <label> <input type="text" name="name" placeholder="Имя"></label>
    <button id="Btn_add">Добавить</button>
</form>