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
	$title="Брокер Хмельницький! Зв'язатись з нами";
	require_once "bloks/head.php";
?>
	<meta name="keywords" content="Зв'язатись з нами, брокер в хмельницькому, Митний брокер Хмельницкий" />
	<meta name="description" content="Брокер у Хмельницькому зв'яжіця з Нами і ми допоможемо розмитнити авто" />
<script>
	$(document).ready (function () {
		$(".available").click (function () {
			$('#div_available').hide ();
			var name = '<?php echo $name;?>';
			var ident = '<?php echo $ident?>';
			var printer = "";
			if (name == 0 || ident == 0) {
				printer = "Ви війшли як гість! Для повного доступу Зареєструйтесь або війдіть під всоїм Іменем";
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
		$("#done").click (function () {
			$('#messageShow').hide ();
			var name = $("#name").val();
			var meil = $("#meil").val();
			var tema = $("#tema").val();
			var mesech = $("#mesech").val();
			var fail = "";
			if (name.length < 3) fail="Введіть своє Ім'я";
			else if (meil.length < 5) fail="Введіть свій Емейл або телефон";
			else if (tema.length < 5) fail="Введіть тему повідомлення";
			else if (mesech.length < 10) fail="Введіть текст повідомлення";
				if (fail != ""){
					$('#messageShow').html (fail);
					$('#messageShow').show ();
					return false;
				}
				$.ajax ({
				url:'ajax/messeg.php',
				type: 'POST',
				cache: 'false',
				data: {'name': name, 'meil': meil, 'tema': tema, 'mesech': mesech},
				dataType: 'html',
				success: function (data){
					$('#messageShow').html (data);
					$('#messageShow').show ();
				}
			});
		});

	});

</script>
	<!-- Скріп карти -->
<script type="text/javascript"
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDSU02eYsMGH9qCjCgusXaXK-lbuVKqTOE&sensor=false">
</script>
<script>
	function initialize() {
    //получаем наш div куда будем карту добавлять
    var mapCanvas = document.getElementById('map_canvas');
    // задаем параметры карты
    var mapOptions = {
        //Это центр куда спозиционируется наша карта при загрузке
        center: new google.maps.LatLng( 49.442890, 26.950999 ),
        //увеличение под которым будет карта, от 0 до 18
        // 0 - минимальное увеличение - карта мира
        // 18 - максимально детальный масштаб
        zoom: 18,
        //Тип карты - обычная дорожная карта
        mapTypeId: google.maps.MapTypeId.ROADMAP
    };
    //Инициализируем карту
    var map = new google.maps.Map(mapCanvas, mapOptions);

    //Объявляем массив с нашими местами и маркерами
    var markers = [],
        myPlaces = [];
    //Добавляем места в массив
    myPlaces.push(new Place('ТОВ Нарс Авто', 49.442890, 26.950999 , 'Розмитнення Хмельницький'));

    //Теперь добавим маркеры для каждого места
    for (var i = 0, n = myPlaces.length; i < n; i++) {
        var marker = new google.maps.Marker({
            //расположение на карте
            position: new google.maps.LatLng(myPlaces[i].latitude, myPlaces[i].longitude),
            map: map,
            //То что мы увидим при наведении мышкой на маркер
            title: myPlaces[i].name
        });
        //Добавим попап, который будет появляться при клике на маркер
        var infowindow = new google.maps.InfoWindow({
            content: '<h1>'+ myPlaces[i].name +'</h1><br/>' + myPlaces[i].description
        });
        //привязываем попап к маркеру на карте
        makeInfoWindowEvent(map, infowindow, marker);
        markers.push(marker);
    }
}
function makeInfoWindowEvent(map, infowindow, marker) {
    //Привязываем событие КЛИК к маркеру
    google.maps.event.addListener(marker, 'click', function() {
        infowindow.open(map, marker);
    });
}
//Это класс для удобного манипулирования местами
function Place(name, latitude, longitude, description){
    this.name = name;  // название
    this.latitude = latitude;  // широта
    this.longitude = longitude;  // долгота
    this.description = description;  // описание места
}
//Когда документ загружен полностью - запускаем инициализацию карты.
google.maps.event.addDomListener(window, 'load', initialize);
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
		printer = "Ви війшли як: "+name;
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
<div id="communication_us">
	<center>
		<h1>Брокер у Хмельницькому завжди раді допомогти Вам!</h1><br />
		<p>Зв'яжіця з нами любим зручним для Вас способом і ми обов'язково Вам допоможемо!</p>
	<p>Генеральний директор<span> Пономарьов Сергій Вікторович: </span> +380673836505</p>
	<p>Регіональний директор <span>Нараєвький Олексі Юрійович: </span>+380977097894</p>
	<p>Брокер <span>Віктор: </span>+380967513649</p>
	<p>Менеджер <span>Юрій: </span>+380979044259</p>
		<p>Тел/Факс: +30382753020</p>
	<p><span>Email: </span>narsavto@ukr.net</p>
	<p><span id="cen"><img src="img/viber.ico" alt="viber" class = "social" /> <img src="img/Whatsapp-C.ico" alt="Whatsapp-C" class = "social"/> </span></p>
	</center>
	<div id="social"><p>+380967513649</p><p>+380673836505</p></div>
	<script>
	<!-- якчо при нажатії обєкт скрит то показуєм його і на впаки
	$(".social").click(function (){
		if ($("#social").is(':hidden'))
		$("#social").show(1000);
			else
			$("#social").hide(1000);
	});
	</script>
</div>
<div class="form">
	<form action="" method="post" name="form1">
	<p>Вкажіть ваше Ім'я:</p>
		<input type= "text" name= "name" id="name" placeholder="Вкажіть ваше Ім'я"/><br /><br />
	<p>Вкажіть Вашу пошту або телефон:</p>
		<input type= "text" name= "meil" id="meil" placeholder="Вкажіть  пошту або телефон"/><br /><br />
	<p>Вкажіть тему Вашого повідомлення:</p>
		<input type= "text" name= "tema" id="tema"  placeholder="Вкажіть тему "/><br /><br />
	<p>Введіть Ваше повідомлення:</p>
		<textarea type="message" name= "mesech" id="mesech" ></textarea><br /><br />
	<div id="messageShow"></div>
	<input type="button" name="done" id="done" value="Відправити"/>

	</form>
</div>
	<div class="maps" id="map_canvas"></div>
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