<?php

function ola(){
	$argumentos = func_get_args();
	return $argumentos;
}


var_dump(ola("oila", 10, array(10,20,40)));



$a = 10;
$x = 10;

//passagem parametros por valor
function trocaValorParametro($b){

$b += 50;

return $b;
}



//passagem parametros por Referencia
function trocaValorReferencia(&$b){

$b += 50;

return $b;
}

echo trocaValorParametro($a);
echo $a;

echo'<br>';

echo trocaValorReferencia($x);
echo $x;


echo '<hr>';

$pessoa = array(
   'nome'=> 'januario',
   'idade' => 20
);

foreach ($pessoa as &$value) {
	 if(gettype($value) === 'integer') $value +=10;

	 echo $value.'<br>';
}


print_r($pessoa);