<?php

	session_start();

	   echo"Ol� Mundoooo";

	   echo"<br>";

	   echo $_SESSION['nome'];

	 // limpar a variavel de sess�o
	  session_unset($_SESSION['nome']);

	  echo"<br>";

	  echo $_SESSION['nome'];

	// destroi a sess�o
	session_destroy();
   
   
  