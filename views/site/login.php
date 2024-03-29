<h2>Авторизация</h2>
<h3><?= $message ?? ''; ?></h3>

<h3><?= app()->auth->user()->name ?? ''; ?></h3>
<?php
if (!app()->auth::check()):
   ?>
   <form  style="display: flex; gap: 20px; flex-direction: column; width: 800px"  method="post">
   <input name="csrf_token" type="hidden" value="<?= app()->auth::generateCSRF() ?>"/>
       <label> <input type="text" name="login" placeholder="Логин"></label>
       <label> <input type="password" name="password" placeholder="Пароль"></label>
       <button>Войти</button>
   </form>
<?php endif;

