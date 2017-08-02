<?php
header("Content-Type: text/html; charset=utf-8");
$url = 'https://bank.gov.ua/NBUStatService/v1/statdirectory/exchange?json';

$data1 = file_get_contents($url);
$data = json_decode($data1);
echo  $_GET['callback'] . '(' .json_encode($data) . ')';

 ?>