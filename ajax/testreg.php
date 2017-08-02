<?php
session_start();
	$name = htmlspecialchars($_POST['name']);
	$password = htmlspecialchars($_POST['password']);
	

	if ($name == '' || $password == ''){
		echo 'Заповніть всі поля';
		exit;
	}
include ("../function/users.php");
	$result = mysql_query("SELECT * FROM users WHERE logins='$name'",$db);
		$myrow = mysql_fetch_array($result);
		if (empty($myrow['password'])){
			exit ("<p class='p2'> Вибачте, введений Вам Логін або Пароль невірні!!! </p>");

		}
		else {
			if ($myrow['password'] == $password){
				$_SESSION['name'] = $myrow['logins'];
				$_SESSION['id'] = $myrow['id'];
				$_SESSION['role'] = $myrow['role'];
				$echoHello = "<p id='p1'> Ми Вас вітаємо " .$_POST['name']. "</p>";
				echo $echoHello;
			}
			else {
				exit ("<p class='p2'> Пароль або логін введено невірно!</p>");
			}
		}
?>