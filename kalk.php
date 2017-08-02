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
	$title="Послуги митного брокера у Хмельницькому! Калькулятор розмитнення авто";
	$contentk="Послуги, митного брокера, Хмельницькому, Калькулятор, розмитнення авто";
	$contentd="Розмитнемо Ваше авто по пільговому акцизі у Хмельницьку. Послуги митного брокера у Хмельницькому! Калькулято розмитнення авто";
	require_once "bloks/head.php";
?>
	<link rel="stylesheet" type="text/css" href="https://s1.gismeteo.ua/static/css/informer2/gs_informerClient.min.css">
	<script>

		/*var numbers =("https://bank.gov.ua/NBUStatService/v1/statdirectory/exchange?json");
		 numbers = JSON.parse(numbers);

alert( numbers.txt[1] ); */


	</script>
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
	<div id="wrapperkalk">
<form class = "kalk">
		<div class="nameForm">
			<label for="stavka">Виберіть ставку:</label><br /><br />
			<label for="typ">Виберіть тип двигуна:</label><br />
			<label for="vik">Виберіть вік авто:</label><br />
			<label for="obem">Введіть об'єм двигуна:</label><br />
			<label for="valyt">Виберіть валюту:</label><br />
			<label for="pres">Вкажіть вартість авто:</label>
		</div>
		<div class="funcForm">
			<input type="radio" name="stavka" value="povna" id="povna" checked="checked"/>Повна<br /><input type="radio" name="stavka" value="pilg" id="pilg" />Пільгова<br />
			<select  name="typ" class="formLebe" id="typ">
				<option disabled class="formLebe">Вкажіть тип</option>
				<option value="Дизель">Дизель</option>
				<option value="Бензин">Бензин</option>
			</select><br />
			<select  name="vik" class="formLebe" id="vik">
				<option disabled class="formLebe">Вкажіть вік</option>
				<option value="Новий">Новий</option>
				<option value="Менше п'яти років">Менше п'яти років</option>
				<option value="Більше п'яти років">Більше п'яти років</option>
			</select><br />
			<input type="number" name="obem" id="obem" /><br />
			<select  name="valyt" class="formLebe" id="valyt">
				<option disabled class="formLebe">Виберіть валюту</option>
				<option value="EUR">EUR</option>
				<option value="USD">USD</option>
				<option value="PLN">PLN</option>
			</select><br />
				<input type="number" name="pres" id="pres" />
		</div>
		<input type="button" name="don" id="don" class="button" value="Підрахувати"/>
		<input type="button" name="cler" id="cler" class="button" value="Очистити" onclick="this.form.reset();"/>
		<div class="rezkalk">
			Митні платежжі = <span id="txt1"></span> <span id="valut"></span>
		</div>
		<div id="textkalk" >
			Пам'ятайте!!! калькулятор рахує від указаної Вами вартості Авто! і показує тільки митні платежжі!!
			<p>Вас чикають ще постороні витрати такі як:</p>
			<li>Постановка на Облік</li>
			<li>Оплата Брокерських послуг</li>
			<li>Оплата оцінки експерта</li>
			<li>Оплата термінала</li>
			<li>Оплата Сертифіката Відповідності</li>
			<p>Для більш точного розрахунку скористайтесь</p><h1> Послугами митного брокера у Хмельницькому</h1><p>Зв'яжіця з нами любим зручним способом прямо з нашого сайту перейдучи в розділ "Зв'язатись з нами".</p>
		</div>
	</form>
	<script>
			var USD;
			var EUR;
			var PLN;

			 $.ajax ({
				url:'ajax/kurs.php',
				dataType: 'jsonp',
				async:false,/*Что б переменая била видна за ajax*/
				success: function (data){
					function getValue(array, cc) {
						var obj = array.filter(function(data, i){
							return data.cc === cc ? data.cc : '';
						});
						return obj;

					}

					var objUSD = (getValue(data, "USD"));
					USD = (objUSD[0].rate);
					var objEUR = (getValue(data, "EUR"));
					EUR = (objEUR[0].rate);
					var objPLN = (getValue(data, "PLN"));
					PLN = (objPLN[0].rate);
				}
				});
		$(document).ready (function () {


			$("#don").click (function () {
				var typ = $("#typ").val();
				var vik = $("#vik").val();
				var obem = $("#obem").val();
				var valyt = $("#valyt").val();
				var pres = $("#pres").val();
				var stavka = $('input[name=stavka]:checked').val();
				
				if (valyt == "EUR"){
					pres=pres;
				}
				else if (valyt == "USD"){
					pres=(pres*USD/EUR);
				}
				else if (valyt == "PLN"){
					pres=(pres*PLN/EUR);
					
				}

				if (typ !="" && vik !="" && obem !="" && valyt !="" && pres !="" && stavka !="" ){
					
					if (stavka == "povna") {
						if (typ =="Дизель" && vik =="Новий" && obem < 1500 ){
							var rezultobem =(obem * 0.103 );
							var pres10 = (pres * 0.1);
							var rezpdv = (+pres +  pres10 + rezultobem);
							var rezpdv1 = (rezpdv * 0.2);
							var rezult = (+rezultobem + pres10 + rezpdv1 );
							
						}
						else if (typ =="Дизель" && vik =="Менше п'яти років" && obem < 1500 ){
							var rezultobem =(obem * 1.367);
							var pres10 = (pres * 0.1);
							var rezpdv = (+pres +  pres10 + rezultobem);
							var rezpdv1 = (rezpdv * 0.2);
							var rezult = (+rezultobem + pres10 + rezpdv1 );

						}
						else if (typ =="Дизель" && vik =="Більше п'яти років" && obem < 1500 ){
							var rezultobem =(obem * 1.761);
							var pres10 = (pres * 0.1);
							var rezpdv = (+pres +  pres10 + rezultobem);
							var rezpdv1 = (rezpdv * 0.2);
							var rezult = (+rezultobem + pres10 + rezpdv1 );

						}
						else if (typ =="Дизель" && vik =="Новий" && obem > 1500 && obem < 2500 ){
							var rezultobem =(obem * 0.327);
							var pres10 = (pres * 0.1);
							var rezpdv = (+pres +  pres10 + rezultobem);
							var rezpdv1 = (rezpdv * 0.2);
							var rezult = (+rezultobem + pres10 + rezpdv1 );

						}
						else if (typ =="Дизель" && vik =="Менше п'яти років" && obem > 1500 && obem < 2500  ){
							var rezultobem =(obem * 1.923);
							var pres10 = (pres * 0.1);
							var rezpdv = (+pres +  pres10 + rezultobem);
							var rezpdv1 = (rezpdv * 0.2);
							var rezult = (+rezultobem + pres10 + rezpdv1 );

						}
						else if (typ =="Дизель" && vik =="Більше п'яти років" && obem > 1500 && obem < 2500 ){
							var rezultobem =(obem * 2.441);
							var pres10 = (pres * 0.1);
							var rezpdv = (+pres +  pres10 + rezultobem);
							var rezpdv1 = (rezpdv * 0.2);
							var rezult = (+rezultobem + pres10 + rezpdv1 );

						}
						else if (typ =="Дизель" && vik =="Новий" && obem > 2500){
							var rezultobem =(obem * 2.209);
							var pres10 = (pres * 0.1);
							var rezpdv = (+pres +  pres10 + rezultobem);
							var rezpdv1 = (rezpdv * 0.2);
							var rezult = (+rezultobem + pres10 + rezpdv1 );

						}
						else if (typ =="Дизель" && vik =="Менше п'яти років" && obem > 2500 ){
							var rezultobem =(obem * 2.779);
							var pres10 = (pres * 0.1);
							var rezpdv = (+pres +  pres10 + rezultobem);
							var rezpdv1 = (rezpdv * 0.2);
							var rezult = (+rezultobem + pres10 + rezpdv1 );

						}
						else if (typ =="Дизель" && vik =="Більше п'яти років" && obem > 2500 ){
							var rezultobem =(obem * 4.715);
							var pres10 = (pres * 0.1);
							var rezpdv = (+pres +  pres10 + rezultobem);
							var rezpdv1 = (rezpdv * 0.2);
							var rezult = (+rezultobem + pres10 + rezpdv1 );

						}
						else if (typ =="Бензин" && vik =="Новий" && obem < 1000 ){
							var rezultobem =(obem * 0.102);
							var pres10 = (pres * 0.1);
							var rezpdv = (+pres +  pres10 + rezultobem);
							var rezpdv1 = (rezpdv * 0.2);
							var rezult = (+rezultobem + pres10 + rezpdv1 );

						}
						else if (typ =="Бензин" && vik =="Менше п'яти років" && obem < 1000 ){
							var rezultobem =(obem * 1.094);
							var pres10 = (pres * 0.1);
							var rezpdv = (+pres +  pres10 + rezultobem);
							var rezpdv1 = (rezpdv * 0.2);
							var rezult = (+rezultobem + pres10 + rezpdv1 );

						}
						else if (typ =="Бензин" && vik =="Більше п'яти років" && obem < 1000 ){
							var rezultobem =(obem * 1.438);
							var pres10 = (pres * 0.1);
							var rezpdv = (+pres +  pres10 + rezultobem);
							var rezpdv1 = (rezpdv * 0.2);
							var rezult = (+rezultobem + pres10 + rezpdv1 );

						}
						else if (typ =="Бензин" && vik =="Новий" && obem > 1000 && obem < 1500 ){
							var rezultobem =(obem * 0.063);
							var pres10 = (pres * 0.1);
							var rezpdv = (+pres +  pres10 + rezultobem);
							var rezpdv1 = (rezpdv * 0.2);
							var rezult = (+rezultobem + pres10 + rezpdv1 );

						}
						else if (typ =="Бензин" && vik =="Менше п'яти років" && obem > 1000 && obem < 1500 ){
							var rezultobem =(obem * 1.367);
							var pres10 = (pres * 0.1);
							var rezpdv = (+pres +  pres10 + rezultobem);
							var rezpdv1 = (rezpdv * 0.2);
							var rezult = (+rezultobem + pres10 + rezpdv1 );

						}
						else if (typ =="Бензин" && vik =="Більше п'яти років" && obem > 1000 && obem < 1500 ){
							var rezultobem =(obem * 1.761);
							var pres10 = (pres * 0.1);
							var rezpdv = (+pres +  pres10 + rezultobem);
							var rezpdv1 = (rezpdv * 0.2);
							var rezult = (+rezultobem + pres10 + rezpdv1 );

						}
						else if (typ =="Бензин" && vik =="Новий" && obem > 1500 && obem < 2200 ){
							var rezultobem =(obem * 0.267);
							var pres10 = (pres * 0.1);
							var rezpdv = (+pres +  pres10 + rezultobem);
							var rezpdv1 = (rezpdv * 0.2);
							var rezult = (+rezultobem + pres10 + rezpdv1 );

						}
						else if (typ =="Бензин" && vik =="Менше п'яти років" && obem > 1500 && obem < 2200 ){
							var rezultobem =(obem * 1.643);
							var pres10 = (pres * 0.1);
							var rezpdv = (+pres +  pres10 + rezultobem);
							var rezpdv1 = (rezpdv * 0.2);
							var rezult = (+rezultobem + pres10 + rezpdv1 );

						}
						else if (typ =="Бензин" && vik =="Більше п'яти років" && obem > 1500 && obem < 2200 ){
							var rezultobem =(obem * 2.441);
							var pres10 = (pres * 0.1);
							var rezpdv = (+pres +  pres10 + rezultobem);
							var rezpdv1 = (rezpdv * 0.2);
							var rezult = (+rezultobem + pres10 + rezpdv1 );

						}
						else if (typ =="Бензин" && vik =="Новий" && obem > 2200 && obem < 3000 ){
							var rezultobem =(obem * 0.276);
							var pres10 = (pres * 0.1);
							var rezpdv = (+pres +  pres10 + rezultobem);
							var rezpdv1 = (rezpdv * 0.2);
							var rezult = (+rezultobem + pres10 + rezpdv1 );

						}
						else if (typ =="Бензин" && vik =="Менше п'яти років" && obem > 2200 && obem < 3000 ){
							var rezultobem =(obem * 2.213);
							var pres10 = (pres * 0.1);
							var rezpdv = (+pres +  pres10 + rezultobem);
							var rezpdv1 = (rezpdv * 0.2);
							var rezult = (+rezultobem + pres10 + rezpdv1 );

						}
						else if (typ =="Бензин" && vik =="Більше п'яти років" && obem > 2200 && obem < 3000 ){
							var rezultobem =(obem * 4.985);
							var pres10 = (pres * 0.1);
							var rezpdv = (+pres +  pres10 + rezultobem);
							var rezpdv1 = (rezpdv * 0.2);
							var rezult = (+rezultobem + pres10 + rezpdv1 );

						}
						else if (typ =="Бензин" && vik =="Новий" && obem > 3000){
							var rezultobem =(obem * 2.209);
							var pres10 = (pres * 0.1);
							var rezpdv = (+pres +  pres10 + rezultobem);
							var rezpdv1 = (rezpdv * 0.2);
							var rezult = (+rezultobem + pres10 + rezpdv1 );

						}
						else if (typ =="Бензин" && vik =="Менше п'яти років" && obem > 3000 ){
							var rezultobem =(obem * 3.329);
							var pres10 = (pres * 0.1);
							var rezpdv = (+pres +  pres10 + rezultobem);
							var rezpdv1 = (rezpdv * 0.2);
							var rezult = (+rezultobem + pres10 + rezpdv1 );

						}
						else if (typ =="Бензин" && vik =="Більше п'яти років" && obem > 3000 ){
							var rezultobem =(obem * 4.985);
							var pres10 = (pres * 0.1);
							var rezpdv = (+pres +  pres10 + rezultobem);
							var rezpdv1 = (rezpdv * 0.2);
							var rezult = (+rezultobem + pres10 + rezpdv1 );

						}

					}
					else {

						if (typ =="Дизель" && obem < 1500 ){
							var rezultobem =(obem * 0.103);
							var pres10 = (pres * 0.1);
							var rezpdv = (+pres +  pres10 + rezultobem);
							var rezpdv1 = (rezpdv * 0.2);
							var rezult = (+rezultobem + pres10 + rezpdv1 );

						}
					else if (typ =="Дизель" && obem > 1500 && obem < 2500){
							var rezultobem =(obem * 0.327);
							var pres10 = (pres * 0.1);
							var rezpdv = (+pres +  pres10 + rezultobem);
							var rezpdv1 = (rezpdv * 0.2);
							var rezult = (+rezultobem + pres10 + rezpdv1 );

						}
					else if (typ =="Дизель" && obem > 2500 ){
							var rezultobem =(obem * 2.209);
							var pres10 = (pres * 0.1);
							var rezpdv = (+pres +  pres10 + rezultobem);
							var rezpdv1 = (rezpdv * 0.2);
							var rezult = (+rezultobem + pres10 + rezpdv1 );

						}
					else if (typ =="Бензин"  && obem < 1000 ){
							var rezultobem =(obem * 0.102);
							var pres10 = (pres * 0.1);
							var rezpdv = (+pres +  pres10 + rezultobem);
							var rezpdv1 = (rezpdv * 0.2);
							var rezult = (+rezultobem + pres10 + rezpdv1 );

						}
					else if (typ =="Бензин"  && obem > 1000 && obem < 1500){
							var rezultobem =(obem * 0.063);
							var pres10 = (pres * 0.1);
							var rezpdv = (+pres +  pres10 + rezultobem);
							var rezpdv1 = (rezpdv * 0.2);
							var rezult = (+rezultobem + pres10 + rezpdv1 );

					}
					
					else if (typ =="Бензин" && obem > 1500 && obem < 2200){
							var rezultobem =(obem * 0.267);
							var pres10 = (pres * 0.1);
							var rezpdv = (+pres +  pres10 + rezultobem);
							var rezpdv1 = (rezpdv * 0.2);
							var rezult = (+rezultobem + pres10 + rezpdv1 );

					}
					else if (typ =="Бензин"  && obem > 2200 && obem < 3000){
							var rezultobem =(obem * 0.276);
							var pres10 = (pres * 0.1);
							var rezpdv = (+pres +  pres10 + rezultobem);
							var rezpdv1 = (rezpdv * 0.2);
							var rezult = (+rezultobem + pres10 + rezpdv1 );

						}
					else if (typ =="Бензин" &&  obem > 3000){
							var rezultobem =(obem * 2.209);
							var pres10 = (pres * 0.1);
							var rezpdv = (+pres +  pres10 + rezultobem);
							var rezpdv1 = (rezpdv * 0.2);
							var rezult = (+rezultobem + pres10 + rezpdv1);

						}
					}

					
					rezult =(rezult*EUR);
					
					rezult=rezult.toPrecision(7);
					document.getElementById('txt1').innerHTML = rezult;
					document.getElementById('valut').innerHTML = "ГРН.";
				}
			});
		});
</script>
		<div id="viget">
			<div class="grafic">
				<div class="titlegrafic"><h2>Брокер в Хмельницькому</h2></div>
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
	</div>
</div>
<?php require_once "bloks/center.php"?>
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