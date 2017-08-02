<?php
	$mysqli=false;
	function connectDB () {
		global $mysqli;
		$mysqli=new mysqli ("brokerkh.mysql.ukraine.com.ua", "brokerkh_base", "kuk28011988", "brokerkh_base");
		$mysqli->query("SET NAMES 'utf8'");

	}
	function closeDB () {
		global $mysqli;
		$mysqli->close;
	}

	function getNeus ($limit, $id  ){
		global $mysqli;
		connectDB ();
		if($id)
			$where = "WHERE `id` = ".$id;
		$result=$mysqli->query("SELECT * FROM `neus`$where ORDER BY `id` DESC LIMIT $limit" );
		closeDB ();
		if(!$id)
			return resultToArray ($result);
		else
			return $result->fetch_assoc();
	}

	function resultToArray ($result) {
		$array = array ();
		while (($row = $result->fetch_assoc()) !=false)
			$array[] = $row;
		return $array;
	}


?>