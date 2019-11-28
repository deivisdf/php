<?php

	session_start();

	   echo"Olá Mundoooo";

	   echo"<br>";

	   echo $_SESSION['nome'];

	 // limpar a variavel de sessão
	  session_unset($_SESSION['nome']);

	  echo"<br>";

	  echo $_SESSION['nome'];

	// destroi a sessão
	session_destroy();
   
   
  