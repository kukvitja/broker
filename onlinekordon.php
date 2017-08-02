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
$title="Кордон онлайн. Черги на кордоні. Розмитнення авто Хмельницький.";
	require_once "bloks/head.php";
?>
	<link rel="stylesheet" type="text/css" href="https://s1.gismeteo.ua/static/css/informer2/gs_informerClient.min.css">
	<meta name="keywords" content="online, кордон, онлайн, черги на кордоні" />
	<meta name="description" content="Кордон онлайн. Черги на кордоні. Кордон online. Розмитнення авто Хмельницький. " />
	<meta http-equiv="Content-Language" Content="ua" />
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
		<div id='outerdiv'>
			
<iframe src="http://ipolsha.com/kamery-na-kordoni-polsha" id='innerIframe' scrolling=no >

</iframe>
			
		</div>
		<script>
			$(document).ready (function () {
				$("#outerdiv").click (function (){
					$("#innerIframe").css({height:'500px'});
				});
			});
		</script>
	</div>
	<div class="pos">	<a href="http://www.warlog.ru/" target="_blank"><img border="0" src="http://www.warlog.ru/counter/?i=172" 				alt="счетчик посещений"  title="счетчик посещений" /></a></div>
<!-- RedConnect -->
<script id="rhlpscrtg" type="text/javascript" charset="utf-8" async="async"
src="https://web.redhelper.ru/service/main.js?c=kukvitja"></script>
<div style="display: none"><a class="rc-copyright"
href="http://redconnect.ru">Обратный звонок RedConnect</a></div>
<!--/RedConnect -->
<?php require_once "bloks/center.php"?>
	<div class="divUp"><img src="/img/up.ico" alt="Прокрутка в гору" title="Прокрутка в гору" /> <!--Блок прокрутки--></div>
	<script>
		$(document).ready (function () {
			$(document).scroll (function () {
				if ($(document).scrollTop () > 300)
					$(".divUp").show (300);
				$(".divUp").click (function (){
					$("body").scrollTop (1);
				});

				if ($(document).scrollTop () < 300)
					$(".divUp").hide (500);
			});
		});
	</script>
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