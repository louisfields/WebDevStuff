<?php
$str = 'Peru';
$i = 0;

while($str[$i] != 'r'){
	print substr($str, $i) . PHP_EOL;
	$i += 1;
}
?>