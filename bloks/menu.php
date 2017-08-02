<div class="menuShow"><img src="img/menu.ico" id="menuShow" alt="Меню" title ="Меню"/></div>

	<div id="menuHrefs" >
	<a href="index.php">Головна</a>
	<a href="about.php">Про Нас</a>
	<a href="news.php">Новини</a>
	<a href="#" class="ourSer">Наші послуги</a>
	<a href="onlinekordon.php" class="available">Кордон онлайн</a>
	<a href="kalk.php" class="available"  title="Калькулятор платежів" >Калькулятор</a>
	<a href="search1.php" class="available">Пошук автомобілів</a>
	<a href="galeri.php">Галерея</a>
	<a href="communication.php">Зв'язатись з нами</a>
	</div>
	<div id="ourServices">
		<ul type="disc">
			<li>Розмитнення автомобілів</li>
			<li>Розмитнення всіх видів техніки</li>
			<li>Розмитнення товарів</li>
			<li>Експорт товарів</li>
			<li>Безкоштовна консультація в митні справі</li>
			<li>Акридитація підприємств</li>
			<li>Підготовка документів для ЗЕД</li>
			<li>Любий вид транспортних засобів під замовлення</li>
			<li>Негабаритні перевезення по україні і закордоном</li>
			<li>Оформлення договорів купівлі-продажу</li>
		</ul>
	</div>
<div id="mobilMenu">
		<a href="index.php">Головна</a><br />
		<a href="about.php">Про Нас</a><br />
		<a href="news.php">Новини</a><br />
		<a href="#" class="ourSer">Наші послуги</a><br />
		<a href="onlinekordon.php" class="available">Кордон онлайн</a><br />
		<a href="kalk.php" class="available"  title="Калькулятор платежів">Калькулятор</a><br />
		<a href="search1.php" class="available">Пошук автомобілів</a><br />
		<a href="galeri.php">Галерея</a><br />
		<a href="communication.php">Зв'язатись з нами</a>
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