<h2>Авторизация</h2>
<h3><?= app()->auth->user()->name ?? ''; ?></h3>
<?php
if (!app()->auth::check()):
   ?>
   <form  style="display: flex; gap: 20px; flex-direction: column; width: 800px"  method="post">
       <label> <input type="text" name="login" placeholder="Логин" style="background: rgba(236, 236, 236, 1);border: none;border-radius: 5px;height: 22px;font-weight: 600;"></label>
       <label> <input type="password" name="password" placeholder="Пароль" style="background: rgba(236, 236, 236, 1);border: none;border-radius: 5px;height: 22px;font-weight: 600;"></label>
       <button style="width: 170px; border: none;border-radius: 5px; background-color: rgba(170, 170, 170, 1); color: white; font-weight: 600;">Войти</button>
   </form>
<?php endif;

