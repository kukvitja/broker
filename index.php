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
$title="Розмитнення Хмельницький. Розмитнення авто Хмельницький.";
	require_once "bloks/head.php";
?>
	<link rel="stylesheet" type="text/css" href="https://s1.gismeteo.ua/static/css/informer2/gs_informerClient.min.css">
	<meta name="keywords" content="розмитнення авто, розмитнення авто хмельницький,брокер, Хмельницький" />
	<meta name="description" content="Розмитнення автомобілів та техніки Хмельницький.  Розмитнення авто в Україні, як відбувається і куди звернутися. " />
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
	
		<style>
		/*div - контейнер для новости*/
		.rss{margin:0px;  padding-bottom: 15px;}

		/*div - контейнер для всей ленты*/
			.rss_container{padding:0px; /*background: #fff;*/}

		/*div - контейнер для медиа-файлов*/
			.media{ display:none;background-color:#f0f0f0; background-image:url(https://www.rss-script.ru/img/skrepka.gif); background-repeat:no-repeat; padding-top: 5px;padding-bottom: 5px; padding-left: 13px}

		/*div - ссылка на медиа-файл*/
		.media a{display:none;color:#000000;font-size:0.7em}

		/*div - изображение медиа-файл*/
		.media a img{height:26px; border:0px; vertical-align: middle; text-decoration: none; margin:0px}

		/*div - контейнер даты новости и заголовка rss-канала*/
		.rssdate{font-size:0.7em; color:#c0c0c0; margin:7px; }

		/*div - ссылка даты новости и заголовка rss-канала*/
		.rssdate a{color:#c0c0c0;}

		</style>

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

		<div class="articles">
	<p id="ph">	&emsp;Кожен українець мріє про своє <strong>власне авто</strong>. Але, на жаль, сучасна вітчизняна економіка мало сприяє покупці нової і, навіть уживаної машини. У більшості випадків, люди можуть дозволити собі <strong>купити автомобіль</strong> або низької якості, або середнього або навіть високого класу, але, м'яко кажучи, не в ідеальному стані.</p><br/>
		<img  src="img/a3.jpg" alt="купити автомобіль" title="купити автомобіль" id="imgleft"/><br />
<p> &emsp; Саме тоді, коли бажання <strong>покупки автомобіля</strong> зростає до максимуму, а на українському ринку пропозиції не зовсім влаштовують - багато людей купують <strong>авто з Європи</strong>. Не секрет, що європейські б/у автомобілі кращої якості, ніж ці ж марки і моделі в Україні. На їх кращий стан впливає: дбайливе ставлення, якісне обслуговування в авторизованих центрах, хороші дороги.</p>
<p>&emsp;А для того, щоб на всіх законних правах <strong>ввезти автомобіль</strong> в Україну і їздити на ньому, необхідно скористатися послугою з <em>розмитнення авто</em>.</p>
<h1>Розмитнення авто в Україні, як відбувається і куди звернутися</h1>
<img  src="img/a4.jpg" alt="Розмитнення авто в Україні" title="Розмитнення авто в Україні" id="imgright"/><br />
<p> &emsp; В Україні <strong>розмитненням автомобілів</strong> займаються спеціалізовані компанії. Саме такою організацією і є наша фірма <h3>НАРС АВТО</h3>. Ми допоможемо вам легально ввезти <strong>автомобіль в Україну</strong>, <h3>розмитнити авто</h3>. Ми сміливо беремо на себе зобов'язання по повному <strong>розмитненню транспортного засобу</strong>!
<p>&emsp;Навіть більше того! Ви можете просто прийти до нас в офіс або зателефонувати нам і показати, який автомобіль ви хочете пригнати з Європи. Далі, ми все зробимо за вас! При вашому бажанні, ми можемо надіслати за машиною вашої мрії нашого досвідченого водія. Тим самим: ви економите свій дорогоцінний час, а головне - нерви.</p>
<img  src="img/a2.jpg" alt="Ніяких черг на митниці" title="Ніяких черг на митниці" /><br />
<p>&emsp;Ніяких черг на митниці і повна відсутність паперових клопотів. Наші фахівці все зроблять за вас! Вам залишиться лише отримати свою машину з повним пакетом документів і з українською реєстрацією.</p><br/><br/><br/>
<h2>Які є варіанти розмитнення автомобіля в Хмельницьку та області</h2><br/>
<ol type="1">
<li>Розмитнення авто на фізичну особу.</li>
<li>Розмитнення автомобіля на юридичну особу, фірму.</li>
<li>Розмитнення машини за пільговим акцизом. Умови пільгового  розмитнення:
	<ul type="disc">
		<li>автомобіль повинен бути випущений не раніше 01.01.2010 і відповідати нормам ЄВРО-5;</li>
		<li>знадобиться підтвердження країни походження машини;</li>
		<li>документ про купівлю авто повинен бути з мокрою печаткою (печатка фірми, нотаріальна печатка);</li>
		<li>машину необхідно зняти з обліку;</li>
		<li>здійснити оплату в установленій сумі на рахунок Хмельницької Митниці.</li>
	</ul></li>
</ol>
<p>&emsp;Слід врахувати, що машину, яка пригнана за пільговим акцизом, протягом року не можна продати або подарувати.</p>
<h2>Вартість розмитнення автомобіля</h2><br/>
<img  src="img/a1.jpg" alt="Вартість розмитнення автомобіля" title="Вартість розмитнення автомобіля" id="imgright"/><br />
<p>&emsp;На вартість <strong>розмитнення автомобіля</strong> впливає ряд важливих факторів: об'єм двигуна, рік випуску машини, її початкова ціна.</p>
<p>&emsp;Точну ціну можна назвати тільки в разі знання всіх необхідних даних.</p>
<p>&emsp;Приблизно, але максимально точно, ви можете <strong>розрахувати вартість розмитнення автомобіля в Україні та Хмельницькому</strong>, скориставшись <strong>калькулятором розмитнення автомобілів</strong>, який знаходиться на нашому сайті.</p><br/>
<h2>5 причин обрати НАРС АВТО</h2><br/>
<ol type="1">
	<li>Вигідні умови співпраці з нами.</li>
	<li>Тільки персональний підхід до кожного клієнта.</li>
	<li>У нас великий досвід роботи, який допоміг нам отримати потрібні навички і професіоналізм у питанні розмитнення авто.</li>
	<li>Пропонуємо різні варіанти розмитнення.</li>
	<li>Ваш автомобіль буде розмитнений повністю на законних умовах, відповідно до законодавства України.</li>
</ol><br/>
<img  src="img/a7.jpg" alt="НАРС АВТО" title="НАРС АВТО" /><br />

</div>
	<div id="viget">
			<div class="grafic">
				<div class="titlegrafic"><h3>Брокер в Хмельницькому</h3></div>
				<table border="1" width="100%" cellpadding="5">
				   <tr>
					<td>Понеділок</td>
					<td>9:00 - 19:00</td>
				   </tr>
				   <tr>
					<td>Вівторок</td>
					<td>9:00 - 19:00</td>
					</tr>
					<tr>
					<td>Середа</td>
					<td>9:00 - 19:00</td>
					</tr>
					<tr>
					<td>Четвер</td>
					<td>9:00 - 19:00</td>
					</tr>
					<tr>
					<td>Пятниця</td>
					<td>9:00 - 19:00</td>
					</tr>
					<tr>
					<td>Субота</td>
					<td>11:00 - 16:00</td>
					</tr>
					<tr>
					<td>Неділя</td>
					<td>Вихідний</td>
					</tr>
				</table>
			</div>
			<div id="neusj">
				<!--<style>.ya-news__title{font-size:100%;font-weight:700;margin-bottom:.5em}.ya-news__date{font-size:85%;margin-right:.5em}.ya-news__informer{font-size:85%;margin-bottom:.3em}.ya-news__description{font-size:85%;margin-bottom:.5em}.ya-news__all{font-size:80%;margin-top:.3em}</style>-->
				<script type="text/javascript">var charset='UTF-8';var t=document.getElementsByTagName('meta');for(var i=0; i<t.length; i++){var rg=/charset=["']?([^"']*)/g;if(t[i].content.indexOf('charset')!=-1){charset=rg.exec(t[i].content)[1];break;}}document.write('<script type="text/javascript" src="https://www.rss-script.ru/rss-script.php?charset='+charset+'&rss[]=http%3A%2F%2Fnews.infocar.ua%2Frss%2Fnews.php&count=5"><\/script>');</script><noscript> </noscript>
			</div>
			<div class="kurs">
				<!--Kurs.com.ua regional 240x270 Хмельницкий blue-->
					<div id='kurs-com-ua-informer-regional-240x270-10-hmelnickiy-blue-container'><a href="//kurs.com.ua/informer" id="kurs-com-ua-informer-regional-240x270-10-hmelnickiy-blue" title="Курс валют информер Украина" rel="nofollow" target="_blank">Информер курса валют</a></div>
					<script type='text/javascript'>
					(function() {var iframe = '<ifr'+'ame src="//kurs.com.ua/informer/regional2/10/2260?color=blue" width="240" height="270" frameborder="0" vspace="0" scrolling="no" hspace="0"></ifr'+'ame>';var container = document.getElementById('kurs-com-ua-informer-regional-240x270-10-hmelnickiy-blue');container.parentNode.innerHTML = iframe;})();
					</script>
					<noscript><img src='//kurs.com.ua/static/images/informer/kurs.png' width='52' height='26' alt='kurs.com.ua: курс валют в Украине!' title='Курс валют' border='0' /></noscript>
					<!--//Kurs.com.ua regional 240x270 Хмельницкий blue-->
				<br />
				<!--Kurs.com.ua comm 240x130 Киев blue-->
					<div id='kurs-com-ua-informer-comm-240x130-kiev-blue-container'><a href="//kurs.com.ua/informer" id="kurs-com-ua-informer-comm-240x130-kiev-blue" title="Курс валют информер Украина" rel="nofollow" target="_blank">Информер курса валют</a></div>
					<script type='text/javascript'>
					(function() {var iframe = '<ifr'+'ame src="//kurs.com.ua/informer/comm2/908?color=blue" width="240" height="130" frameborder="0" vspace="0" scrolling="no" hspace="0"></ifr'+'ame>';var container = document.getElementById('kurs-com-ua-informer-comm-240x130-kiev-blue');container.parentNode.innerHTML = iframe;})();
					</script>
					<noscript><img src='//kurs.com.ua/static/images/informer/kurs.png' width='52' height='26' alt='kurs.com.ua: курс валют в Украине!' title='Курс валют' border='0' /></noscript>
					<!--//Kurs.com.ua comm 200x130 Киев blue-->
			</div>

			<div class="gismeteo">
			<div id="gsInformerID-5s0mVLTaefMo7h" class="gsInformer"style="width:300px;height:253px" >
			  <div class="gsIContent">
			   <div id="cityLink">
				 <a href="https://www.gismeteo.ua/ua/weather-khmelnytskyi-4952/" target="_blank">Погода у Хмельницькому</a>
			   </div>
			   <div class="gsLinks">
				 <table>
				   <tr>
					 <td>
					   <div class="leftCol">
						 <a href="https://www.gismeteo.ua/ua" target="_blank">
						   <img alt="Gismeteo" title="Gismeteo" src="https://s1.gismeteo.ua/static/images/informer2/logo-mini2.png" align="absmiddle" border="0" />
						   <span>Gismeteo</span>
						 </a>
					   </div>
					   <div class="rightCol">
						 <a href="https://www.gismeteo.ua/ua/weather-khmelnytskyi-4952/" target="_blank">Погода на 2 тижні</a>
					   </div>
					   </td>
					</tr>
				  </table>
				</div>
			  </div>
			</div>
			<script src="https://www.gismeteo.ua/ajax/getInformer/?hash=5s0mVLTaefMo7h" type="text/javascript"></script>
			</div>

	</div>
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