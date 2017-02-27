<?php
function EveryCrypt($text, $times=15, $algorithm="MD5"){
  include("utils/data.php");
  if (!$text){
	  $errorPage = "errors/text_missing.php";
	  exit(include($errorPage));
  }
  if (!in_array($algorithm,$algorithms)){
	  $errorPage = "errors/algorithm_unsupported.php";
      exit(include($errorPage));
  }
  
  if ($algorithm == "MD5"){
	  if (!$_COOKIE["encryptever_md5encrypting"]){
		$cookieName="encryptever_md5encrypting";
		setCookie($cookieName,"0");
	  }
	  $_COOKIE["encryptever_md5encrypting"] = $_COOKIE["encryptever_md5encrypting"]+1;
	  $crypted = md5($text);
	  if (!$_COOKIE["encryptever_md5encrypting"] == $times-1){
		  header("Refresh: 1; URL=?");
	  }else{
		  setCookie("encryptever_md5encrypting");
		  include("utils/finished.php");
	  }
  }
  
    if ($algorithm == "SHA512"){
	  if (!$_COOKIE["encryptever_sha512encrypting"]){
		$cookieName="encryptever_sha512encrypting";
		setCookie($cookieName,"0");
	  }
	  $_COOKIE["encryptever_sha512encrypting"] = $_COOKIE["encryptever_sha512encrypting"]+1;
	  $crypted = hash("sha512",$text);
	  if (!$_COOKIE["encryptever_sha512encrypting"] == $times-1){
		  header("Refresh: 1; URL=?");
	  }else{
		  setCookie("encryptever_sha512encrypting");
		  include("utils/finished.php");
	  }
  }
}
