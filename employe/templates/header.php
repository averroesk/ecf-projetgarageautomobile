<?php

	// include "../../lib/config.php";
	// include "../../lib/session.php";
	require_once "../lib/config.php";
	require_once "../lib/session.php";
	employeOnly(); 

	$adminMenu = [
		  'index.php' => 'Accueil',
		  'approuver.php' => 'Approuver commentaires clients',
		  'ajouter-voitures.php' => 'Ajouter une nouvelle voiture'
	];

?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
		<link rel="stylesheet" href="../style.css">
		
    <title>Compte employé Garage V. Parrot</title>
</head>



<body>
    <div class="container d-flex">

        <div class="d-flex flex-column flex-shrink-0 p-3 text-bg-secondary" style="width: 280px; height: 570px">
            <a href="/admin" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                <span class="fs-4">Compte employé</span>
            </a>
            <hr>
            <ul class="nav nav-pills flex-column mb-auto">
                <?php foreach ($adminMenu as $page => $titre) { ?>
                    <li class="nav-item my-2"><a href="<?= $page; ?>" class="text-white <?php if (basename($_SERVER['SCRIPT_NAME']) === $page) {
                                                                                        echo 'active';
                                                                                    } ?>"><?= $titre; ?></a></li>
                <?php } ?>
            </ul>
            <hr>
            <div class="dropdown">
                <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    <strong><?= $_SESSION["user"]["prenom"]." ".$_SESSION["user"]["nom"]; ?></strong>
                </a>
                <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
                    <li><a class="dropdown-item" href="../deconnexion.php">Déconnexion</a></li>
                </ul>
            </div>
        </div>
        <main class="d-flex flex-column px-4">
        
