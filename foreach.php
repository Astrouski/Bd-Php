<?php
$output;
$output["Pavel"] = "28";
$output["Mark"] = "16";
$output["Sasha"] = "35";
$output["Misha"] = "21";
$output["Kira"] = "31";
$output["Masha"] = "28";
foreach( $output as $key => $value){
	echo "Name: $key, Age: $value <br />";
}