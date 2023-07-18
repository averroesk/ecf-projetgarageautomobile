<?php

	$sql = "SELECT * FROM horaires_ouverture";
	$query = $pdo->prepare($sql);
  $query->execute();
  $result = $query->fetchAll(PDO::FETCH_ASSOC);
	$jours = $result; 

	$mainMenu = [
		  'index.php' => 'Accueil',
		  'vehicules-occasion.php' => 'Acheter un véhicule',
		  'contact.php' => 'Contact',
		  'connexion.php' => 'Connexion',
	];

	
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Garage V. Parrot</title>
        <meta 
            name="description" 
            content="Vivamus malesuada nec massa quis venenatis. 
                    Nunc ultrices nulla magna. Proin maximus orci
                    a urna viverra fringilla.">
         <script 
	  			src="https://code.jquery.com/jquery-3.7.0.min.js" 
	    		integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" 
	    		crossorigin="anonymous"></script>
        
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD"
            crossorigin="anonymous">
            
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.css"> 
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.js"></script> 
        
        <link rel="stylesheet" href="style.css">
        
    </head>
    
    <body>
        
			<header>
			
				<nav class="navbar navbar-expand-lg mb-4 py-4" style="background-color: #e3f2fd;"> 
					<div class="container-fluid">
						<a class="navbar-brand" href="#">
							<img src="images/ev-front-fill.svg" alt="Logo voiture" width="auto" height="28px">
						</a>
						<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
						</button>
						<div class="collapse navbar-collapse justify-content-end" id="navbarNav">
						
							<ul class="navbar nav">
		              <?php foreach ($mainMenu as $page => $titre) { ?>
		                  <li class="nav-item">
		                  	<a href="<?= $page; ?>" 
		                  		class="nav-link <?php if (basename($_SERVER['SCRIPT_NAME']) === $page) 
		                  														echo 'active text-success'; ?>">
		                      <?= $titre; ?>
		                    </a>
		                  </li>
		              	<?php } ?>
		          </ul>
						
						</div>
					</div>
				</nav>
			
			</header>
		
		<main>
		
