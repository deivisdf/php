<?php
     $frase = "O rato roeu a roupa do rei de roma";
     
     $upper = strtoupper($frase);
     
     echo $upper;
     
     $pos = strpos($frase, "roupa");
     
     
     echo"<br>";
     
     
     $fraseNova = substr($frase,$pos+5,strlen($frase));
     
     
     echo $fraseNova ;
?>