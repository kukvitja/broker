<?php
    header("Content-Type: text/html; charset=utf-8");
	session_start();
	$name = $_SESSION['name'];
	$ident = $_SESSION['id'];
?>
<!DOCTYPE html>
<html>
<head>
	<meta name="keywords" content="розмитнення авто,розмитнення авто в Хмельницькому, розмитнення Україна" />
	<meta name="description" content="Розмитнення авто в Хмельницькоту , Надаємо митно брокерських послуг в Хмельницькому" />
<?php
	$title="Розмитнення авто Хмельницький! Реєстрація на сайті";
	require_once "bloks/head.php";
?>
<script>
	$(document).ready (function () {
		$(".available").click (function () {
			var name = '<?php echo $name;?>';
			var ident = '<?php echo $ident?>';
			var printer = "";
			if (name == 0 || ident == 0) {
				printer = "Ви увійшли як гість! Для повного доступу Зареєструйтесь або увійдіть під своїм Іменем";
			}
			 if (printer != ""){
				alert (printer);
				return false;
				}
		});
	});
</script>
<script>
	$(document).ready (function () {
		$('#form').submit(function () {
    	return false;
		});
		$("#done1").click (function () {
			$('#messageShow').hide ();
			var name = $("#name").val();
			var email = $("#email").val();
			var password = $("#password").val();
			var password2 = $("#password2").val();
			var printer = "";
			if (name.length < 4) printer = "Логін повинен бути більше 4 символа";
			else if (email.length < 5) printer = "Ви ввели не коректний mail";
			else if (password.length < 5) printer = "Пароль повинен бути не менше 5 символів";
			else if (password != password2) printer = "Паролі повині співпадати";
				if (printer != ""){
					$('#messageShow').html (printer);
					$('#messageShow').show ();
					return false;
				}
			$.ajax ({
				url:'ajax/useres.php',
				type: 'POST',
				cache: 'false',
				data: {'name': name, 'email': email, 'password': password},
				dataType: 'html',
				success: function (data){
					$('#messageShow').html (data);
					$('#messageShow').show ();
					setTimeout (
					function (){
					location.assign('index.php');	/*перезагрузка сторінки*/
					}, 3000);
				}
			});
		});
	});
</script>

</head>
<body>
<div id="images"></div>
<?php require_once "bloks/header.php";?><!-- Підключення файлів-->
<div id="div_available">
<script>
	var name = '<?php echo $name;?>';
	var ident = '<?php echo $ident?>';
	var printer = "";
	if (name != 0 || ident != 0) {
		printer = "Ви увійшли як: "+name;
	}
		else {
			$('#div_available').hide();
		}
	if (printer != ""){
	document.write (printer);
	}
</script>
</div>
<?php require_once "bloks/menu.php"?>
<div id="center_block">
<div id="wrapper">
<div id="articles"><br />
<div id="register">
<form method="post" id="ajax_form" action="">
	<div id="messageShow"></div>
	<label for="name">Логін</label><br />
	<input type="text" name="name"  placeholder="Придумайте Логін" id="name"/><br /><br />
	<label for="email">Email</label><br />
	<input type="text" name="email" placeholder="Введіть свій Email" id="email"/><br /><br />
	<label for="password">Введіть пароль</label><br />
	<input type="password" name="password" placeholder="Придумайте пароль" id="password"/><br /><br />
	<label for="password2">Повторіть пароль</label><br />
	<input type="password" name="password2" placeholder="Підтвердіть пароль" id="password2"/><br /><br />
	<span>Укажіть свою стать </span><br /><br />
		<label for="men" > Чоловіча </label>
		<input type="radio" name="state" value="Чоловіча" id="men"/>
		<label for="women"> Жіноча</label>
	<input type="radio" name="state" value="Жіноча" id="women" /><br /><br />
	<input type="submit" name="done1" id="done1" value="Зареєструватись"/>

</form>
</div>
</div>
<?php require_once "bloks/center.php"?>

</div>
</div>
<aside> 
	<div id = "mob_right_block">Контакти</div>
	<div id="right_block"> <h3>Контактні дані:</h3><br /><p><b>Генеральний директор</b></p><p> Пономарьов Сергій Вікторович</p><p> тел. +380673836505 </p><p><b>Брокер Віктор</b> тел. +380967513649</p>
	<p><strong>Менеджер Юрій</strong></p><p> тел. +380979044259</p>
	</div>
</aside>
<script>
	$(document).scroll (function (){
			if ($(document).scrollTop() > 300)
			$("#right_block").addClass("right_block");
			else
				$("#right_block").removeClass("right_block");
		});
	$("#mob_right_block").click (function(){
		$("#mob_right_block").hide();
		$("#right_block").show();
		if (parseInt(getComputedStyle(center_block).width) < 999 && $("#right_block").is (':visible')) {
			$("#right_block").click (function(){
			$("#right_block").hide();
			$("#mob_right_block").show();
			});
			
		}
	});

</script>
<?php require_once "bloks/footer.php"?>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-87956689-1', 'auto');
  ga('send', 'pageview');

</script>
</body>
</html>