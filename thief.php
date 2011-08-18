<?php


header("content-Type: text/html; charset=gbk");

if (isset($_POST['code'])) // the form has been submitted
	// assign values from the form
	$code = trim($_POST['code']);

	$url = "http://www.baidu.com/s?wd=".$code."&rsv_bp=0&inputT=8606";


$fp = @fopen($url, "r") or die("Timeout");

$fcontents = file_get_contents($url);

$pattern = "<font color=\"#008000\" size=\"-1\">e.baidu.com</font>(.*)class=\"result\" id=\"3\"";

eregi($pattern, $fcontents, $rg);

$target = explode('<br>', $rg[1]);

$link="http://stockdata.stock.hexun.com/".$code.".shtml";
		
	if (ereg($link, $target[1])){
		
		echo $target[1];
		
	}elseif (ereg($link, $target[2])){

		echo $target[2];
		
	}elseif (ereg($link, $target[3])){
		
		echo $target[3];
	}

?>