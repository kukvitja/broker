<?php
    header("Content-Type: text/html; charset=utf-8");
	session_start();
	$name = $_SESSION['name'];
	$ident = $_SESSION['id'];
  // function getFileDir(){
    $pic = array();
    $ending = array( 'JPG', 'png');
    //var_dump($ending);
    $d = opendir("s-gallery-master/images/");
    while ($fileName = readdir($d)) {
      if ($fileName == '.' || $fileName == '..' || is_dir("s-gallery-master/images/".$fileName) ||  $fileName == 'controls-dark.png' || $fileName == 'controls-light.png' ||$fileName == 'controls-light2.png') continue;
      if (!in_array(pathinfo($fileName, PATHINFO_EXTENSION), $ending)) continue;
      // var_dump(pathinfo($fileName, PATHINFO_EXTENSION));
    $pic[] = $fileName;
  }
    
    closedir($d);
  // }
  function showImg($value=''){
    # code...
  }
?>
<!DOCTYPE html>
<html>
<head>
<?php
	$title="Розмитнення Хмельницький Фото галерея";
	require_once "bloks/head.php";
?>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta name="keywords" content="Розмитнити автомобіль, авто, техніку, хмельницький " />
	<meta name="description" content="Розмитнення авто Хмельницький, короткий звіт наших робіт " />
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
<?php require_once "bloks/header.php";?>
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
<?php require_once "bloks/menu.php";?>
<div id="center_block">
<div id="wrapper">
<div class="demo-wrapper">
<?php if ($_SESSION['role'] == 'admin' || $_SESSION['role'] == 'moderator'): ?>
<div id='addNeus'>
  <span>Добавить Фото</span>
  <form action="#" method="get" enctype="multipart/form-data">
    <input type="file" class="formLibel" name="file" accept="image/*"><br />
    <button class="formLibel">Добавить</button>
  </form>
</div>
<?php endif ?>
  <!--// Gallery Markup: A container that the plugin is called upon, and two lists for the images (use images with same aspect ratio) //-->
  <div id="gallery-container">

    <ul class="items--small">
    <?php foreach ($pic as $key) :?>
      <?php if ( pathinfo($key, PATHINFO_EXTENSION) != 'png') continue ?>
      <li class="item"><a href="#"><img src="s-gallery-master/images/<?= $key;?>" alt="" /></a></li>
    
    <?php endforeach ?>
   <!-- //    <li class="item"><a href="#"><img src="s-gallery-master/images/2.png" alt="" /></a></li>
   //    <li class="item"><a href="#"><img src="s-gallery-master/images/3.png" alt="" /></a></li>
   //    <li class="item"><a href="#"><img src="s-gallery-master/images/4.png" alt="" /></a></li>
   //    <li class="item"><a href="#"><img src="s-gallery-master/images/5.png" alt="" /></a></li>
   //    <li class="item"><a href="#"><img src="s-gallery-master/images/6.png" alt="" /></a></li>
   //    <li class="item"><a href="#"><img src="s-gallery-master/images/7.png" alt="" /></a></li>
   //    <li class="item"><a href="#"><img src="s-gallery-master/images/8.png" alt="" /></a></li>
   //    <li class="item"><a href="#"><img src="s-gallery-master/images/9.png" alt="" /></a></li>
   //    <li class="item"><a href="#"><img src="s-gallery-master/images/10.png" alt="" /></a></li>
   //    <li class="item"><a href="#"><img src="s-gallery-master/images/11.png" alt="" /></a></li>
   //    <li class="item"><a href="#"><img src="s-gallery-master/images/12.png" alt="" /></a></li>
	  // <li class="item"><a href="#"><img src="s-gallery-master/images/13.png" alt="" /></a></li>
	  // <li class="item"><a href="#"><img src="s-gallery-master/images/14.png" alt="" /></a></li>
	  // <li class="item"><a href="#"><img src="s-gallery-master/images/15.png" alt="" /></a></li>
	  // <li class="item"><a href="#"><img src="s-gallery-master/images/16.png" alt="" /></a></li>
	  // <li class="item"><a href="#"><img src="s-gallery-master/images/17.png" alt="" /></a></li>
	  // <li class="item"><a href="#"><img src="s-gallery-master/images/18.png" alt="" /></a></li>
	  // <li class="item"><a href="#"><img src="s-gallery-master/images/19.png" alt="" /></a></li>
	  // <li class="item"><a href="#"><img src="s-gallery-master/images/20.png" alt="" /></a></li>
	  // <li class="item"><a href="#"><img src="s-gallery-master/images/21.png" alt="" /></a></li>
	  // <li class="item"><a href="#"><img src="s-gallery-master/images/22.png" alt="" /></a></li>
	  // <li class="item"><a href="#"><img src="s-gallery-master/images/23.png" alt="" /></a></li>
	  // <li class="item"><a href="#"><img src="s-gallery-master/images/24.png" alt="" /></a></li>
	  // <li class="item"><a href="#"><img src="s-gallery-master/images/25.png" alt="" /></a></li>
	  // <li class="item"><a href="#"><img src="s-gallery-master/images/26.png" alt="" /></a></li>
	  // <li class="item"><a href="#"><img src="s-gallery-master/images/27.png" alt="" /></a></li>
	  // <li class="item"><a href="#"><img src="s-gallery-master/images/28.png" alt="" /></a></li>
	  // <li class="item"><a href="#"><img src="s-gallery-master/images/29.png" alt="" /></a></li>
	  // <li class="item"><a href="#"><img src="s-gallery-master/images/30.png" alt="" /></a></li>
	  // <li class="item"><a href="#"><img src="s-gallery-master/images/31.png" alt="" /></a></li>
	  // <li class="item"><a href="#"><img src="s-gallery-master/images/32.png" alt="" /></a></li>
	  // <li class="item"><a href="#"><img src="s-gallery-master/images/33.png" alt="" /></a></li>
	  // <li class="item"><a href="#"><img src="s-gallery-master/images/34.png" alt="" /></a></li>
	  // <li class="item"><a href="#"><img src="s-gallery-master/images/35.png" alt="" /></a></li>
	  // <li class="item"><a href="#"><img src="s-gallery-master/images/36.png" alt="" /></a></li>
	  // <li class="item"><a href="#"><img src="s-gallery-master/images/37.png" alt="" /></a></li> -->
    </ul>
    <ul class="items--big">
    <?php foreach ($pic as $key) :?>
      <?php if ( pathinfo($key, PATHINFO_EXTENSION) != 'JPG') continue ?>
      <li class="item--big">
        <a href="#">
          <figure>
        <img src="s-gallery-master/images/<?= $key;?>" alt="" />
          </figure>
          </a>
      </li>
    
    <?php endforeach ?>
      
      <!-- <li class="item--big">
        <a href="#">
          <figure>
            <img src="s-gallery-master/images/2.JPG" alt="" />
         </figure>
          </a>
      </li>
      <li class="item--big">
        <a href="#">
          <figure>
            <img src="s-gallery-master/images/3.JPG" alt="" />
          </figure>
          </a>
      </li>
      <li class="item--big">
        <a href="#">
          <figure>
            <img src="s-gallery-master/images/4.JPG" alt="" />

          </figure>
          </a>
      </li>
      <li class="item--big">
        <a href="#">
          <figure>
            <img src="s-gallery-master/images/5.JPG" alt="" />

          </figure>
          </a>
      </li>
      <li class="item--big">
        <a href="#">
          <figure>
            <img src="s-gallery-master/images/6.JPG" alt="" />

          </figure>
          </a>
      </li>
      <li class="item--big">
        <a href="#">
          <figure>
            <img src="s-gallery-master/images/7.JPG" alt="" />

          </figure>
          </a>
      </li>
      <li class="item--big">
        <a href="#">
          <figure>
            <img src="s-gallery-master/images/8.JPG" alt="" />

          </figure>
          </a>
      </li>
      <li class="item--big">
        <a href="#">
          <figure>
            <img src="s-gallery-master/images/9.JPG" alt="" />

          </figure>
          </a>
      </li>
      <li class="item--big">
        <a href="#">
          <figure>
            <img src="s-gallery-master/images/10.JPG" alt="" />

          </figure>
          </a>
      </li>
      <li class="item--big">
        <a href="#">
          <figure>
            <img src="s-gallery-master/images/11.JPG" alt="" />

          </figure>
          </a>
      </li>
      <li class="item--big">
        <a href="#">
          <figure>
            <img src="s-gallery-master/images/12.JPG" alt="" />

          </figure>
          </a>
      </li>
	  <li class="item--big">
        <a href="#">
          <figure>
            <img src="s-gallery-master/images/13.JPG" alt="" />

          </figure>
          </a>
      </li>
	  <li class="item--big">
        <a href="#">
          <figure>
            <img src="s-gallery-master/images/14.JPG" alt="" />

          </figure>
          </a>
      </li>
	  <li class="item--big">
        <a href="#">
          <figure>
            <img src="s-gallery-master/images/15.JPG" alt="" />

          </figure>
          </a>
      </li>
	  <li class="item--big">
        <a href="#">
          <figure>
            <img src="s-gallery-master/images/16.JPG" alt="" />

          </figure>
          </a>
      </li>
	  <li class="item--big">
        <a href="#">
          <figure>
            <img src="s-gallery-master/images/17.JPG" alt="" />

          </figure>
          </a>
      </li>
	  <li class="item--big">
        <a href="#">
          <figure>
            <img src="s-gallery-master/images/18.JPG" alt="" />

          </figure>
          </a>
      </li>
	  <li class="item--big">
        <a href="#">
          <figure>
            <img src="s-gallery-master/images/19.JPG" alt="" />

          </figure>
          </a>
      </li>
	  <li class="item--big">
        <a href="#">
          <figure>
            <img src="s-gallery-master/images/20.JPG" alt="" />

          </figure>
          </a>
      </li>
	  <li class="item--big">
        <a href="#">
          <figure>
            <img src="s-gallery-master/images/21.JPG" alt="" />

          </figure>
          </a>
      </li>
	  <li class="item--big">
        <a href="#">
          <figure>
            <img src="s-gallery-master/images/22.JPG" alt="" />

          </figure>
          </a>
      </li>
	  <li class="item--big">
        <a href="#">
          <figure>
            <img src="s-gallery-master/images/23.JPG" alt="" />

          </figure>
          </a>
      </li>
	  <li class="item--big">
        <a href="#">
          <figure>
            <img src="s-gallery-master/images/24.JPG" alt="" />

          </figure>
          </a>
      </li>
	  <li class="item--big">
        <a href="#">
          <figure>
            <img src="s-gallery-master/images/25.JPG" alt="" />

          </figure>
          </a>
      </li>
	  <li class="item--big">
        <a href="#">
          <figure>
            <img src="s-gallery-master/images/26.JPG" alt="" />

          </figure>
          </a>
      </li>
	  <li class="item--big">
        <a href="#">
          <figure>
            <img src="s-gallery-master/images/27.JPG" alt="" />

          </figure>
          </a>
      </li>
	  <li class="item--big">
        <a href="#">
          <figure>
            <img src="s-gallery-master/images/28.JPG" alt="" />

          </figure>
          </a>
      </li>
	  <li class="item--big">
        <a href="#">
          <figure>
            <img src="s-gallery-master/images/29.JPG" alt="" />

          </figure>
          </a>
      </li>
	  <li class="item--big">
        <a href="#">
          <figure>
            <img src="s-gallery-master/images/30.JPG" alt="" />

          </figure>
          </a>
      </li>
	  <li class="item--big">
        <a href="#">
          <figure>
            <img src="s-gallery-master/images/31.JPG" alt="" />

          </figure>
          </a>
      </li>
	  <li class="item--big">
        <a href="#">
          <figure>
            <img src="s-gallery-master/images/32.JPG" alt="" />

          </figure>
          </a>
      </li>
	  <li class="item--big">
        <a href="#">
          <figure>
            <img src="s-gallery-master/images/33.JPG" alt="" />

          </figure>
          </a>
      </li>
	  <li class="item--big">
        <a href="#">
          <figure>
            <img src="s-gallery-master/images/34.JPG" alt="" />

          </figure>
          </a>
      </li>
	  <li class="item--big">
        <a href="#">
          <figure>
            <img src="s-gallery-master/images/35.JPG" alt="" />

          </figure>
          </a>
      </li>
	  <li class="item--big">
        <a href="#">
          <figure>
            <img src="s-gallery-master/images/36.JPG" alt="" />

          </figure>
          </a>
      </li>
	  <li class="item--big">
        <a href="#">
          <figure>
            <img src="s-gallery-master/images/37.JPG" alt="" />

          </figure>
          </a>
      </li> -->
    </ul>
    <div class="controls">
      <span class="control icon-arrow-left" data-direction="previous"></span>
      <span class="control icon-arrow-right" data-direction="next"></span>
      <span class="grid icon-grid"></span>
      <span class="fs-toggle icon-fullscreen"></span>
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
</div>
  <script src="s-gallery-master/js/jquery-1.8.2.min.js"></script>
  <script src="s-gallery-master/js/plugins.js"></script>
  <script src="s-gallery-master/js/scripts.js"></script>
  <script>
    $(document).ready(function(){
     $('#gallery-container').sGallery({
        fullScreenEnabled: true
      });
    });
  </script>
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