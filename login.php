<?php
	
  /*Cada vez que incluyamos este código, se validará si hay una sesión iniciada.
  	Si no hay sesión iniciada nos redirige al formulario inicial de registro de jugador.*/	
  require_once './lib/player.php';
  session_start();
      
      if(!isset($_SESSION['player'])) {    

	        header('location: index.php');      
    
		}else{

		  $player = $_SESSION['player'];

		}

		
?>

