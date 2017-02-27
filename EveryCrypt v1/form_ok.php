<?php
$times = $_POST['times'];
$text = $_POST['text'];
$algorithm = $_POST['algorithm'];
if ($times > 1 and $text and $algorithm){
	include("EveryCrypt.php");
	setCookie("text",$text);
	setCookie("times",$times);
	setCookie("algorithm",$algorithm);
	EveryCrypt($_COOKIE['text'],$_COOKIE['times'],$_COOKIE['algorithm']);
}else{
	exit("error");
}
