<?php
    header("Content-Type: text/html; charset=utf-8");
	session_start();
  $_SESSION['role'] = 'admin'; 
	$name = $_SESSION['name'];
	$ident = $_SESSION['id'];
 function getFileDir(){
    $pic = array();
    $ending = array( 'JPG', 'png');
    $d = opendir("s-gallery-master/images/");
    while ($fileName = readdir($d)) {
      if ($fileName == '.' || $fileName == '..' || is_dir("s-gallery-master/images/".$fileName) ||  $fileName == 'controls-dark.png' || $fileName == 'controls-light.png' ||$fileName == 'controls-light2.png') continue;
      if (!in_array(pathinfo($fileName, PATHINFO_EXTENSION), $ending)) continue;
    $pic[] = $fileName;
  }
    
    closedir($d);
    return $pic;
 }
  function addFile ($dir){
    $fileName = time().'.'.'JPG';
      if (move_uploaded_file($_FILES['file']['tmp_name'], $dir.$fileName)) {
        // echo("Файл добавлено");
      }else{
        echo("ERROR!!! Попробуйте пізніше");
      } 
    }

  if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    if ($_FILES['file']['error'] === 0){
      $dir = "s-gallery-master/images/";
      addFile ($dir);
    }else{
        echo("ERROR");
    }
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
  <form  method="post" enctype="multipart/form-data">
    <input type="file" class="formLibel" name="file" accept="image/*"><br />
    <button class="formLibel">Добавить</button>
  </form>
</div>
<?php endif ?>
  <!--// Gallery Markup: A container that the plugin is called upon, and two lists for the images (use images with same aspect ratio) //-->
  <div id="gallery-container">

    <ul class="items--small">
    <?php if (file_exists("s-gallery-master/images")) :?>
    <?php foreach ($pic = getFileDir() as $key) :?>
      <li class="item"><a href="#"><img src="s-gallery-master/images/<?= $key;?>" alt="" /></a></li>
    <?php endforeach ?>
    <?php endif ?>

    </ul>
    <ul class="items--big">
    <?php if (file_exists("s-gallery-master/images")) :?>

    <?php foreach ($pic= getFileDir() as $key) :?>
      <li class="item--big">
        <a href="#">
          <figure>
        <img src="s-gallery-master/images/<?= $key;?>" alt="" />
          </figure>
          </a>
      </li>
    
    <?php endforeach ?>

  <!-- else echo ('404'); -->
  <?php endif ?>
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
<script id="rhlpscrtg" type="text/javascript" charset="utf-8" async="async" src="https://web.redhelper.ru/service/main.js?c=kukvitja"></script>
<div style="display: none"><a class="rc-copyright" href="http://redconnect.ru">Обратный звонок RedConnect</a></div>
<!--/RedConnect -->
<?php require_once "bloks/center.php";?>
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