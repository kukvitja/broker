<?php
    header("Content-Type: text/html; charset=utf-8");
	session_start();
	$name = $_SESSION['name'];
	$ident = $_SESSION['id'];
?>
<!DOCTYPE html>
<html>
<head>
<?php
	$title="Купити і розмитненти авто допоможе ТОВ Нарс Авто";
	require_once "bloks/head.php";
?>
	<meta name="keywords" content="розмитення авто, розмитнення автомобілів, авто за кордону, ТОВ Нарс Авто" />
	<meta name="description" content="ТОВ Нарс Авто єдиний надійний брокер в Хмельницьку який допоможе розмитнить Ваше авто під ключ" />
<script>
	$(document).ready (function () {
		$(".available").click (function () {
			var name1 = '<?php echo $name;?>';
			var ident1 = '<?php echo $ident?>';
			var printer = "";
			if (name1 == 0 || ident1 == 0) {
				printer = "Ви увійшли як гість! Для повного доступу Зареєструйтесь або увійдіть під своїм Іменем";
			}
			 if (printer != ""){
				alert (printer);
				return false;
				}
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

<br />
<center class="clear" id="clear">
	<div class="search_car" id = "md">
		<h1>Авто в Німеччині</h1>
	    <a href="http://www.mobile.de/?lang=ru" id="car" title="Силка на Mobile.de">Mobile.de</a>
	</div><br />
	<div class="search_car" id="ot">
		<h1>Авто в Польщі</h1>
		<a href="http://otomoto.pl/" id="car" title="Силка на Otomoto.pl">Otomoto.pl</a>
	</div><br />
	<div class="search_car" id="ar">
		<h1>Авто в Україні</h1>
		<a href="https://auto.ria.com/" id="car" title="Силка на Auto.ria.com">Auto.ria.com</a>
	</div>
</center>

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