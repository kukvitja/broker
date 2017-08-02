<?php
	$db = mysql_connect ("brokerkh.mysql.ukraine.com.ua", "brokerkh_base", "kuk28011988");
	mysql_select_db ("brokerkh_base",$db);
	mysql_query ("set_client='utf8'");
		mysql_query ("set character_set_results='utf8'");
        mysql_query ("set collation_connection='utf8_general_ci'");
		mysql_query ("SET NAMES utf8");

?>