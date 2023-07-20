<?php 
		
		require_once __DIR__ . "/lib/config.php";
		require_once __DIR__ . "/lib/pdo.php";
	
		$error = false;
		
		if ( isset($_POST['km_min_val']) && $_POST['km_min_val'] != 'NaN' 
				&& isset($_POST['km_max_val']) && $_POST['km_max_val'] != 'NaN'
				&& isset($_POST['prix_min_val']) && $_POST['prix_min_val'] != 'NaN' 
				&& isset($_POST['prix_max_val']) && $_POST['prix_max_val'] != 'NaN'
				&& isset($_POST['annee_min_val']) && $_POST['annee_min_val'] != 'NaN'
				&& isset($_POST['annee_max_val']) && $_POST['annee_max_val'] != 'NaN' )
		{ 
			$km_min_val = $_POST['km_min_val'];
			$km_max_val = $_POST['km_max_val'];
			$prix_min_val = $_POST['prix_min_val'];
			$prix_max_val = $_POST['prix_max_val'];
			$annee_min_val = $_POST['annee_min_val'];
			$annee_max_val = $_POST['annee_max_val'];
			
		} else {
			$error = true;
		}
				 
	if (!$error) {		
		
		  $sql = "SELECT * FROM vehicules_occasion WHERE km_voiture >= :km_min_val
		  	AND km_voiture <= :km_max_val
		  	AND prix_voiture >= :prix_min_val
		  	AND prix_voiture <= :prix_max_val
		  	AND annee_voiture >= :annee_min_val
		  	AND annee_voiture <= :annee_max_val"; 

			$query = $pdo->prepare($sql);
			$query->bindValue(":km_min_val", $_POST['km_min_val'], PDO::PARAM_INT);
			$query->bindValue(":km_max_val", $_POST['km_max_val'], PDO::PARAM_INT);
			$query->bindValue(":prix_min_val", $_POST['prix_min_val'], PDO::PARAM_INT); 
			$query->bindValue(":prix_max_val", $_POST['prix_max_val'], PDO::PARAM_INT);
			$query->bindValue(":annee_min_val", $_POST['annee_min_val'], PDO::PARAM_INT);
			$query->bindValue(":annee_max_val", $_POST['annee_max_val'], PDO::PARAM_INT);
		  $query->execute();
		  $result = $query->fetchAll(PDO::FETCH_ASSOC); 
		 
		$carsFiltered = $result;
	
		foreach ($carsFiltered as $key => $car) {
											
												echo ("
															 <div class='col-md-4 h-100'>
																	<div class='card rounded-4 m-3'>
																		<img
																			src=images/images-vehicules/".htmlentities($car['image_voiture'])." 
																			style='opacity: 0.7; height: 100%; width: auto;'
																			class='card-img-top'
																			alt='Image voiture'>
																		<div class='card-body'>
																			<h2 class='card-title text-center mb-3'>".htmlentities($car['titre_voiture'])."</h2>
																			<div class='card-text fw-semibold' style='opacity: 0.8'>
																				<p>
																					Prix: ".htmlentities($car['prix_voiture'])." €
																				</p> 
																				<p>
																					Année de mise en circulation: ".htmlentities($car['annee_voiture'])."
																				</p>
																				<p>
																					Kilométrage: ".htmlentities($car['km_voiture'])." km 
																				</p>
																			</div>
																			
																		</div>
																	</div>
																</div> 
														");
										} 			
			
	} else {
		echo "<h1 class='text-center my-5'>Eléments introuvables. Vérifiez les saisies.</h1>"; 
	}
					    
?>

