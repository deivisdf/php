<?php

function ola(){
	$argumentos = func_get_args();
	return $argumentos;
}


var_dump(ola("oila", 10, array(10,20,40)));