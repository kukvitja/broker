<?php
    header("Content-Type: text/html; charset=utf-8");
	session_start();
	$name = $_SESSION['name'];
	$ident = $_SESSION['id'];
function addFile ($dir, $nameFile){
    	$fileName = $nameFile.'.'.pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);
      	if (move_uploaded_file($_FILES['file']['tmp_name'], $dir.$fileName)) {
        // echo("Файл добавлено");
      	}else{
        echo("ERROR!!! Попробуйте пізніше");
	 	}
    }

// $mysqli=false;
// 	function connectDB () {
// 		global $mysqli;
// 		$mysqli=new mysqli ("brokerkh.mysql.ukraine.com.ua", "brokerkh_base", "kuk28011988", "brokerkh_base");
// 		$mysqli->query("SET NAMES 'utf8'");

// 	}
// function closeDB () {
// 		global $mysqli;
// 		$mysqli->close;
// 	}

	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		$nameSteti = trim(htmlspecialchars($_POST["nameSteti"]));
		$teme = trim(htmlspecialchars($_POST['teme']));
		$steti = trim(htmlspecialchars($_POST['steti']));
	 	$dir = "img/neus/";
	 	if (!empty($nameSteti) && !empty($teme) && !empty($steti)) {
	 		if (is_array($_FILES)) {
	 			include ("function/users.php");
	 			$query = mysql_query("INSERT INTO `neus`(`title`, `entry`, `article`) VALUES ('$nameSteti','$teme','$steti')");
	 				$name = mysql_query ("SELECT `id` FROM `neus` WHERE `title` = '$nameSteti'",$db);
	 				$name1 = mysql_fetch_assoc($name);
	 				$nameFile = $name1['id'];
	 				addFile($dir, $nameFile);
	 				echo "Add Neus";
	 			
	 		}else{
	 			echo('add image');
	 		}
	 		
	 	}else{
	 		echo("Заповніть всі поля");
	 	}
	 	
	} 
?>

<!DOCTYPE html>

<html>
<head>

	<meta name="keywords" content="Новини, розмитненні авто в хмельницькому, розмитнети, " />
	<meta name="description" content="Новини у законодавстві які пов'язані з розмитненням авто в Україні" />
<?php
	require_once "function/function.php";
	$title="Новини у світі розмитнення авто ";
	require_once "bloks/head.php";
	$neus=getNeus (50,0);
?>

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
<div id="news"><br />
<?php if ($_SESSION['role'] == 'admin' || $_SESSION['role'] == 'moderator'): ?>
<div id='addNeus'>
	<span>Добавить Новость</span>
	<form method="post" enctype="multipart/form-data">
		<input type="file" class="formLibel" name="file" accept="image/*"><br />
		<input type="text" class="formLibel" name="nameSteti" placeholder="Заглавление"><br />
		<input type="text" class="formLibel" name="teme" placeholder="Краткое описание"><br />
		<textarea name="steti" class="formLibel" placeholder="Статия"></textarea><br />
		<button class="formLibel">Добавить</button>

	</form>
</div>
<?php endif ?>
	<h1>Новини у розмитнені авто </h1><br />
<?php
	for($i=0; $i<count($neus); $i++) {

			echo "<article>";
		echo '<h2>'.$neus[$i]["title"].'</h2>
			<p> '.$neus[$i]["entry"].' </p><br />
			<a href="article.php?id='.$neus[$i][id].'" title="Продовження статьї">Читати далі...</a>
		</article>';
	}
?>

</div>
<?php require_once "bloks/center.php";?>
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