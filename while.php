<?php

$condicao = true;
$cont = 0;

while ($condicao) {
	++$cont;
	
	$numero =  rand(1,20);

	if($numero === 5){

		echo "CINCO"."<br>";
		$condicao = false;
		break;

	}


	echo $numero."<br>";
}

echo "executou ".$cont." vezes";