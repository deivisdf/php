<form>
	<input type="text" name="nome">
	<input type="date" name="nascimento">
	<input type="submit" name="ok">
</form>

<?php


if (isset($_GET)) {
	foreach ($_GET as $key => $value) {

		if ($key === "ok") continue;
		
		echo "Nome do campo: ". $key."<br>";
		echo "Valor do campo ". $value;
		echo "<hr>";
	}
}

  $carros = array("Monza","Fiat 147","Escorte", "Fusca");

		foreach ($carros as $index=> $carro) {
			       echo $index." ".$carro.'<br>';
		       
		}



		


?>