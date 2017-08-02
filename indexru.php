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
$title="Растаможка хмельницкий.Растаможка авто хмельницкий";
	require_once "bloks/head.php";
?>
	<link rel="stylesheet" type="text/css" href="https://s1.gismeteo.ua/static/css/informer2/gs_informerClient.min.css">
	<meta name="keywords" content="растаможка авто украина, растаможка авто, растаможка,растаможка авто Хмельницький" />
	<meta name="description" content="Растаможка автомобилей и техники Хмельницкий. Растаможка Хмельницкий" />
	<meta http-equiv="Content-Language" Content="ru">
<script>
	$(document).ready (function () {
		$(".available").click (function () {
			var name = '<?php echo $name;?>';
			var ident = '<?php echo $ident?>';
			var printer = "";
			if (name == 0 || ident == 0) {
				printer = "Вы вошли как гость! Для полного доступа Зарегистрируйтесь или войдите под своим именем";
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
<?php require_once "bloks/headerru.php"?>
<div id="div_available">
<script>
	var name = '<?php echo $name;?>';
	var ident = '<?php echo $ident?>';
	var printer = "";
	if (name != 0 || ident != 0) {
		printer = "Вы вошли как: "+name;
	}
	else {
			$('#div_available').hide();
		}
	if (printer != ""){
	document.write (printer);
	}
</script>
</div>
<?php require_once "bloks/menuru.php"?>
<div id="center_block">
	<div id="wrapper">

		<div class="articles">

		<p id="ph">	&emsp;Каждый украинец мечтает о своём <strong>собственном автомобиле</strong>. Но, к сожалению, современная отечественная экономика мало способствует покупке новой и, даже подержанной машины. В большинстве случаев, люди могут позволить себе <strong>купить автомобиль</strong> либо низкого качества, либо среднего или даже высокого класса, но, мягко говоря, не в идеальном состоянии.</p><br/>
		<img  src="img/a3.jpg" alt="" title="" id="imgleft"/><br />
<p> &emsp; Именно тогда, когда желание <strong>покупки автомобиля</strong> возрастает до максимума, а на украинском рынке предложения не совсем устраивают - многие люди покупают <strong>авто c Европы</strong>. Не секрет, что европейские б/у автомобили лучшего качества, чем эти же марки и модели в Украине. На их лучшее состояние влияет: бережное отношение, качественное обслуживание в авторизованных центрах, хорошие дороги.</p>
<p>&emsp;А для того, чтобы на всех законных правах <strong>ввезти автомобиль</strong> в Украину и ездить на нём, необходимо воспользоваться услугой по <em>растаможке авто</em>.</p>
<h1>Растаможка авто в Украине, как происходит и куда обратиться</h1>
<img  src="img/a4.jpg" alt="" title="" id="imgright"/><br />
<p> &emsp; В Украине <strong>растаможкой автомобилей</strong> занимаются специализированные компании. Именно такой организацией и является наша фирма <h3>НАРС АВТО</h3>. Мы поможем вам легально ввезти <strong>автомобиль в Украину</strong>, <h3>растаможить авто</h3>. Мы смело берём на себя обязательства по полной <strong>растаможке транспортного средства</strong>!
<p>&emsp;Даже более того! Вы можете просто прийти к нам в офис или позвонить нам и показать, какой автомобиль вы хотите пригнать из Европы. Далее, мы всё сделаем за вас! При вашем желании, мы можем отправить за машиной вашей мечты нашего опытного водителя. Тем самым: вы экономите своё драгоценное время, а главное - нервы.</p>
<img  src="img/a2.jpg" alt="" title="" /><br />
<p>&emsp;Никаких очередей на таможне и полное отсутствие бумажных хлопот. Наши специалисты всё сделают за вас! Вам останется лишь получить свою машину с полным пакетом документов и с украинской регистрацией.</p><br/><br/><br/>
<h2>Какие есть варианты растаможки автомобиля в Хмельницке и области</h2><br/>
<ol type="1">
<li>Растаможка авто на физическое лицо.</li>
<li>Растаможивание автомобиля на юридическое лицо, фирму.</li>
<li>Растаможка машины по льготному акцизу. Условия льготных условий растаможки:
	<ul type="disc">
		<li>автомобиль должен быть выпущен не ранее 01.01.2010 и соответствовать нормам ЕВРО-5;</li>
		<li>понадобится подтверждение страны происхождения машины;</li>
		<li>документ о покупке авто должен быть с мокрой печатью (печать фирмы, нотариальная печать);</li>
		<li>машину необходимо снять с учёта;</li>
		<li>произвести оплату в установленной сумме на счёт Хмельницкой Таможни.</li>
	</ul></li>
</ol>
<p>&emsp;Следует учесть, что машину пригнанную по льготному акцизу в течение года нельзя продать или подарить.</p>
<h2>Стоимость растаможки автомобиля</h2><br/>
<img  src="img/a1.jpg" alt="" title="" id="imgright"/><br />
<p>&emsp;На стоимость <strong>растаможки автомобиля</strong> влияет ряд важных факторов: объём двигателя, год выпуска машина, её изначальная цена.</p>
<p>&emsp;Точную цену можно назвать только в случае знания всех необходимых данных.</p>
<p>&emsp;Приблизительно, но максимально точно, вы можете <strong>рассчитать стоимость растаможки автомобиля в Украине и Хмельницком</strong>, воспользовавшись <strong>калькулятором растаможки автомобилей</strong>, который находится на нашем сайте.</p><br/>
<h2>5 причин выбрать НАРС АВТО</h2><br/>
<ol type="1">
	<li>Выгодные условия работы с нами.</li>
	<li>Только персональный подход к каждому клиенту.</li>
	<li>У нас большой опыт работы, который помог обрести нам нужные навыки и профессионализм в вопросе растаможки авто.</li>
	<li>Предлагаем различные варианты растаможки.</li>
	<li>Ваш автомобиль будет растаможен на полностью законных условиях, согласно законодательству Украины.</li>
</ol><br/>
<img  src="img/a7.jpg" alt="" title="" /><br />
		</div>
	<div id="viget">
			<div class="grafic">
				<div class="titlegrafic"><h2>Брокер в Хмельницькому</h2></div>
				<table border="1" width="100%" cellpadding="5">
				   <tr>
					<td>Понедельник</td>
					<td>9:00 - 19:00</td>
				   </tr>
				   <tr>
					<td>Вторник</td>
					<td>9:00 - 19:00</td>
					</tr>
					<tr>
					<td>Среда</td>
					<td>9:00 - 19:00</td>
					</tr>
					<tr>
					<td>Четверг</td>
					<td>9:00 - 19:00</td>
					</tr>
					<tr>
					<td>Пятница</td>
					<td>9:00 - 19:00</td>
					</tr>
					<tr>
					<td>Суббота</td>
					<td>11:00 - 16:00</td>
					</tr>
					<tr>
					<td>Воскресенье</td>
					<td>Выходной</td>
					</tr>
				</table>
			</div>
			<div id="neusj">
				<!--<style>.ya-news__title{font-size:100%;font-weight:700;margin-bottom:.5em}.ya-news__date{font-size:85%;margin-right:.5em}.ya-news__informer{font-size:85%;margin-bottom:.3em}.ya-news__description{font-size:85%;margin-bottom:.5em}.ya-news__all{font-size:80%;margin-top:.3em}</style>-->
			<script src="//news.yandex.ua/ua/auto5.utf8.js" charset="utf-8"></script>
				<script>(function(w,rubric){var data=w[rubric];if(!data||!data.length){return;}function formatDate(ts){var d=new Date(ts*1000);return d.getHours()+':'+ ('0'+d.getMinutes()).substr(-2);}var html=' <div class="ya-news__title"><a href="//news.yandex.ua/" target="_blank"> Новини </a></div>';for(var i=0;i<data.length;i++){var item=data[i];html+= '<div><span class="ya-news__date"> ' +item.date+ '&nbsp; ' +item.time+ ' </span><br /><span class="ya-news__title"><a href="'+item.url+ ' " target="_blank"> ' +item.title+ ' </a></span></div><div class="ya-news__description"> ' +item.descr+ ' </div><br />';}html+='<div class="ya-news__all"><a href="//news.yandex.ua/" target="_blank">Усі новини на '+formatDate(w.update_time_t)+'</a></div>';document.write(html);}(window, 'm_auto'));</script>
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
<?php require_once "bloks/centerru.php"?>
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
<?php require_once "bloks/footerru.php"?>
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