<?php
    header("Content-Type: text/html; charset=utf-8");
	session_start();
	$name = $_SESSION['name'];
	$ident = $_SESSION['id'];
/*session_destroy();*/
?>
<!DOCTYPE html>
<html>
<head>
<?php
	$title="Розмитнення авто у Хмельницькому. Вхід на сайт ";
	require_once "bloks/head.php";
?>
	<meta name="keywords" content="Розмитнення авто у Хмельницькому, Увійти на brokerkn.net.ua, " />
	<meta name="description" content="Вхід на сайт розмитнення авто Хмельницький! Митний брокер Хмельницький" />
<script>
	var nameGlobal = '<?php echo $name?>';
	var identGlobal = '<?php echo $ident?>';
	$(document).ready (function () {
		$(".available").click (function () {
			var printer = "";
			if (nameGlobal == 0 || identGlobal == 0) {
				printer = "Ви увійшли як гість! Для повного доступу Зареєструйтесь або увійдіть під своїм Іменем";
			}
			 if (printer != ""){
				alert (printer);
				return false;
				}
		});
	});
</script>
<script type="text/javascript" >
	$(document).ready (function (){
		$('#form').submit(function () {
    	return false;
		});
		$("#sub").click (function (){
			$('#messageShow').hide();
			var name = $("#name").val();
			var password = $("#password").val();
			var resultVal = "";
				if (name.length < 4) resultVal = "Ви не ввели Логін";
				else if (password.length < 5) resultVal = "Ви не ввели пароль";
					if (resultVal != ""){
					$('#messageShow').html (resultVal);
					$('#messageShow').show ();
					return false;
					}
			$.ajax ({
				url:'ajax/testreg.php',
				type: 'POST',
				cache: 'false',
				data: {'name': name,'password': password},
				dataType: 'html',
				success: function (data){
					$('#messageShow').html (data);
					$('#messageShow').show ();
					/*var echoHello = $.POST['$echoHello]';
					alert (echoHello);
					/*if ( echoHello != "" ){*/
					setTimeout (
						function (data){
							location.assign('index.php');
						}, 3000);


				}
			});
			alert (echoHello);
		});
	});

</script>
</head>
<body>
<div id="images"></div>
<?php require_once "bloks/header.php"?>
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
	<form action="" name="register" method="post" id="form">
		<div id="messageShow"></div>
		<label for="name">Логін</label><br />
		<input type="text" name="name"  placeholder="Введіть свій Логін" id="name"><br /><br/>
		<label for="password">Введіть пароль</label><br />
		<input type="password" name="password" placeholder="Введіть пароль" id="password"><br /><br />
		<input type="submit" name="sub" id="sub" value="Ввійти" >
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