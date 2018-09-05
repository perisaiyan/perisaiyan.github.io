<?php
include("../res/x5engine.php");
$nameList = array("pj5","8y4","nut","jxr","n5m","pym","2le","cr2","4w3","n7p");
$charList = array("S","A","U","D","P","Y","V","L","F","7");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
