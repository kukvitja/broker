<?php
	$name = htmlspecialchars($_POST['name']);
	$meil = htmlspecialchars($_POST['meil']);
	$tema = htmlspecialchars($_POST['tema']);
	$mesech = htmlspecialchars($_POST['mesech']);
	if ($name == '' || $meil == '' || $tema == '' || $mesech == ''){
		echo 'Заповніть всі поля';
		exit;
	}
	// Отправка
	$tema = "=?utf-8?B?".base64_encode($tema)."?=";
	$headers = "From: $meil\r\nReply-to: $meil\r\nContent-type: text/html; charset=utf-8\r\n";
	if(mail("narsavto@ukr.net", $tema, $mesech, $headers))
		echo "Повідомлення відправлено!! Ми з Вами зв'яжемся";
	else
		echo "Повідомлення не відправлено!!";
?>