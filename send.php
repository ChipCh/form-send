<?php
	
	// Получаю данные с формы и сразу их обрабатываю

	$login = $_POST['login'];
	$login = htmlspecialchars($login);
	$login = urldecode($login);
	$login = trim($login);

	$pass = $_POST['password'];
	$pass = htmlspecialchars($pass);
	$pass = urldecode($pass);
	$pass = trim($pass);

	$email = $_POST['email'];
	$email = htmlspecialchars($email);
	$email = urldecode($email);
	$email = trim($email);

	// Отправляю данные на почту

	if (mail(
		"aleksandr-3565@mail.ru",
		"Новое сообщение с сайта бистро 'Дежавю'",
		"Логин: ".$login."\n".
		"Пароль: ".$pass."\n".
		"Email: ".$email,
		"From: no-reply@mydomain.ru \r\n")) 
		{
		echo ('Письмо успешно отправлено!');
	} else {
		echo ('Заполните все поля');
	}
?>
