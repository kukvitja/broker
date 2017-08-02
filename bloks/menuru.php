<div class="menuShow"><img src="img/menu.ico" id="menuShow" alt="Меню" title ="Меню"/></div>

	<div id="menuHrefs" >
	<a href="indexru.php">Главная</a>
	<a href="about.php">О нас</a>
	<a href="news.php">Новости</a>
	<a href="#" class="ourSer">Наши услуги</a>
	<a href="onlinekordon.php"  class="available">Граница онлайн</a>
	<a href="kalk.php" class="available"  title="калькулятор платежей" >Калькулятор</a>
	<a href="search1.php" class="available">Поиск автомобилей</a>
	<a href="galeri.php">Галерея</a>
	<a href="communication.php">Связаться с нами</a>
	</div>
<!--<div class="divAurServices">
<div class="divAurServicesCenter">
	<li> Растаможка автомобилей</li>
	<li>Растаможка всех видов техники</li>
	<li>Растаможка товаров</li>
	<li>Экспорт товаров</li>
	<li>Консультации в таможенные деле</li>
	<li>Акридитации предприятий </li>
	<li>Подготовка документов для ВЭД</li>
	<li> Любой вид транспортных средств под заказ</li>
	<li>Негабаритные перевозки по Украине и за рубежом</li>
	<li>Оформление договоров купли-продажи</li>
</div>
</div>-->
	<div id="ourServices">
		<ul type="disc">
			<li> Растаможка автомобилей</li>
			<li>Растаможка всех видов техники</li>
			<li>Растаможка товаров</li>
			<li>Экспорт товаров</li>
			<li>Бесплатная консультация в таможенном деле</li>
			<li>Акридитации предприятий </li>
			<li>Подготовка документов для ВЭД</li>
			<li> Любой вид транспортных средств под заказ</li>
			<li>Негабаритные перевозки по Украине и за рубежом</li>
			<li>Оформление договоров купли-продажи</li>
		</ul>
	</div>
<div id="mobilMenu">
		<a href="indexru.php">Главная</a><br />
		<a href="about.php">О нас</a><br />
		<a href="news.php" >Новости</a><br />
		<a href="#" class="ourSer">Наши услуги</a><br />
		<a href="" class="available">Граница онлайн</a><br />
		<a href="kalk.php" class="available"  title="калькулятор платежей">Калькулятор</a><br />
		<a href="search1.php" class="available">Поиск автомобилей</a><br />
		<a href="galeri.php">Галерея</a><br />
		<a href="communication.php">Связаться с нами</a>
</div>

	<script >
		$(".menuShow").click(function (){
			if ($("#mobilMenu").is(':visible'))
				$("#mobilMenu").hide();
			else
				$("#mobilMenu").show();
		});
		$(document).scroll (function (){
			if ($(document).width() > 999){
				if ($(document).scrollTop() > 300)
					$("#menuHrefs").addClass("menuHrefs");
				else
					$("#menuHrefs").removeClass("menuHrefs");
			}
		});
		$(".ourSer").click (function (){
			if ($("#ourServices").is(':hidden'))
				$("#ourServices").show();
			else
				$("#ourServices").hide();
		});
		$("#ourServices").click (function (){
			if ($("#ourServices").is(':visible'))
				$("#ourServices").hide();

		});
		window.onresize = function (event) {
			$('#mobilMenu').hide();
		}; <!-- Якщо міняється ширина екрану визивається функція
	</script>