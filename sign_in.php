<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Авторизация</title>
		<link rel="stylesheet" href="style.css">
	</head>
	<body>
		<h1>Это основное содержимое страницы "Авторизации пользователя".</h1>
		<div class="nav-links">
			<a href="index.php" class="link">Главная</a>
			<a href="about.php" class="link">О нас</a>
			<a href="sign_in.php" class="link link_active">Войти</a>
		</div>
		<div class="auth_form">
		    <form action="check_user.php" method="post">
		      <label>Введите Ваш Email</label>
		      <input name="email" type="email" placeholder="Введите Ваш имейл" required ><br><br>
		      <label>Введите Ваш пароль</label>
		      <input name="password" type="password" placeholder="Введите пароль" required ><br><br>
		      <button type="submit" name="button">Войти</button>
		    </form>
		</div>
	</body>
</html>