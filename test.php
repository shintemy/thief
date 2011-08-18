<?php

header("content-Type: text/html; charset=gbk");

$num = 600031;


$url = "http://www.baidu.com/s?wd=".$num."&rsv_bp=0&inputT=8606";


$fp = @fopen($url, "r") or die("Timeout");

$fcontents = file_get_contents($url);

$pattern = "<font color=\"#008000\" size=\"-1\">e.baidu.com</font>(.*)class=\"result\" id=\"5\"";

eregi($pattern, $fcontents, $rg);


$target = explode('<br>', $rg[1]);

	
	$link="http://stockdata.stock.hexun.com/".$num.".shtml";
	
	
	if (ereg($link, $target[1])){
		
		echo "1";
		
	}elseif (ereg($link, $target[2])){

		echo "2";
		
	}else {
		echo "nope";
	}
?>
