<?php
session_start();
	$name = htmlspecialchars($_POST['name']);
	$email = htmlspecialchars($_POST['email']);
	$password = htmlspecialchars($_POST['password']);
	if ($name == '' || $email == '' || $password == ''){
		echo 'Заповніть всі поля';
		exit;
	}

include ("../function/users.php");
	$result = mysql_query("SELECT id FROM users WHERE logins='$name'",$db);
	$myrow = mysql_fetch_array ($result);
	if (!empty($myrow['id'])){
	exit ("Вибачте, користувач з таким Логіном зареєстрований. Ведіть другий Логін");
	}
	$result2 = mysql_query ("INSERT INTO users (logins, mail, password) VALUES ('$name','$email','$password')");
	$result3 = mysql_query("SELECT * FROM users WHERE logins='$name'",$db);
	$myrow2 = mysql_fetch_array ($result3);
	if (!empty ($myrow2['logins']) || $result2=='TRUE'){
	$_SESSION['name'] = $myrow2['logins'];
	$_SESSION['id'] = $myrow2['id'];
	echo "Ви успішно зареєструвались! ".$_SESSION['name'];
	}
else {
echo "Помилка!!! Ви не зареєстровані";
}
?>