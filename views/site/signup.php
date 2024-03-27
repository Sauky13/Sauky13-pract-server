<h2 style="     display: flex;
    justify-content: center;">Регистрация нового пользователя</h2>
<h3><?= $message ?? ''; ?></h3>
<form method="post" style=" display: flex; gap: 10px; flex-direction: column;
    align-items: center;">
   <label>Имя <input type="text" name="name"></label>
   <label>Логин <input type="text" name="login"></label>
   <label>Пароль <input type="password" name="password"></label>
   <button>Зарегистрироваться</button>
</form>