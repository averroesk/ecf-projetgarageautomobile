<?php

	session_set_cookie_params([
    'lifetime' => 3600,
    'path' => '/',
    'domain' => _DOMAIN_,
    'httponly' => true
	]);

	session_start();
	
	function adminOnly() {
  	if (!isset($_SESSION['user']) || $_SESSION['user']['role'] != 'admin') {
        // Rediriger vers la page de connexion
        header("Location: ../connexion.php");
        exit();
    }
	}
	
	function employeOnly() {
  	if (!isset($_SESSION['user']) || $_SESSION['user']['role'] != 'employe') {
        // Rediriger vers la page de connexion
        header("Location: ../connexion.php");
        exit();
    }
	}

?>
