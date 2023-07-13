<?php 
	
		require_once __DIR__ . "/lib/config.php";
		require_once __DIR__ . "/lib/pdo.php";
	
    $sql = "SELECT * FROM vehicules_occasion";
		$query = $pdo->prepare($sql);
    $query->execute();
    $result = $query->fetchAll(PDO::FETCH_ASSOC);

		$cars = $result;
	
		require_once __DIR__ . "/templates/header.php"
	
?>

			
			<div class="container-fluid">
				<!-- <div class="row"> -->
				    <h1 class="text-center mt-5">Véhicules d'occasion disponibles</h1>
				    
				    <div class="row mx-1 mt-5 gx-5 justify-content-center">
				        <div class="col-md-3">
                            <!-- <label for="kilometrage" class="form-label">Kilométrage</label> -->
                            <p class="opacity-75">Kilométrage</p>
                            <p class="opacity-75">50 000 km - 200 000 km</p>
                            <label for="km_min" class="form-label opacity-75">Kilométrage minimum</label>
                            <input name="km_min" type="number" class="form-control mb-3" id="km_min" step="10000" min="50000" max="200000" value="50000">
                            <label for="km_max" class="form-label opacity-75">Kilométrage maximum</label>
                            <input name="km_max" type="number" class="form-control" id="km_max" step="10000" min="50000"  max="200000" value="200000">
                        </div>
					    <div class="col-md-3">
                            <!-- <label for="prix" class="form-label">Prix</label> -->
                            <p class="opacity-75">Prix</p>
                            <p class="opacity-75">40 000 € - 300 000 €</p>
                            <label for="prix_min" class="form-label opacity-75">Prix minimum</label>
                            <input name="prix_min" type="number" class="form-control mb-3" id="prix_min" step="10000" min="40000" max="300000" value="40000">
                            <label for="prix_max" class="form-label opacity-75">Prix maximum</label>
                            <input name="prix_max" type="number" class="form-control" id="prix_max" step="10000" min="40000" max="300000" value="300000">
                        </div>
                        <div class="col-md-3">
                            <!-- <label for="annee" class="form-label">Années</label> -->
                            <p class="opacity-75">Années</p>
                            <p class="opacity-75">2015 - 2023</p>
                            <label for="annee_min" class="form-label opacity-75">Année minimum</label>
                            <input name="annee_min" type="number" class="form-control mb-3" id="annee_min" min="2015" max="2023" value="2015">
                            <label for="annee_max" class="form-label opacity-75">Année maximum</label>
                            <input name="annee_max" type="number" class="form-control" id="annee_max" min="2015"  max="2023" value="2023">
                        </div>
                        <div class="d-flex justify-content-center mt-4">
                            <button id="btn-filtre" type="button" class="btn btn-primary" id="filtre">Filtrer</button> 
                            <!-- <input id="btn-filtre" type="submit" class="btn btn-primary" value="Filtrer" /> -->
                        </div>
				    </div>
				    
					<article id="cars-show" class="row mt-5">
					    
					    <?php
					    	
								foreach ($cars as $key => $car) {
											
											echo ("
														 <div class='col-md-4'>
																<div class='card rounded-4 m-3'>
																	<img
																		src=images/images-vehicules/".$car['image_voiture']." 
																		style='opacity: 0.7; height: 100%; width: auto;'
																		class='card-img-top'
																		alt='Image voiture'>
																	<div class='card-body'>
																		<h2 class='card-title text-center'>".$car['titre_voiture']."</h2>
																		<div class='card-text fw-semibold' style='opacity: 0.8'>
																			<p>
																				Prix: ".$car['prix_voiture']." €
																			</p> 
																			<p>
																				Année de mise en circulation: ".$car['annee_voiture']."
																			</p>
																			<p>
																				Kilométrage: ".$car['km_voiture']." km 
																			</p>
																		</div>
																		<div class='text-center'>
																				<button type='button' class='btn btn-secondary'>Détails</button>
																		</div>
																	</div>
																</div>
															</div> 
													");
									} 							
					    
					    ?>
		
					</article>

			</div>
			
			 <script>
			 
			 				let km_min = document.querySelector('#km_min');
			 				let km_min_val = km_min.valueAsNumber;
			 				km_min.addEventListener('input', () => {
			 					km_min_val = km_min.valueAsNumber;
			 				});
			 				
			 				let km_max = document.querySelector('#km_max');
			 				let km_max_val = km_max.valueAsNumber;
			 				km_max.addEventListener('input', () => {
			 					km_max_val = km_max.valueAsNumber;
			 				});
			 				
			 				let prix_min = document.querySelector('#prix_min');
			 				let prix_min_val = prix_min.valueAsNumber;
			 				prix_min.addEventListener('input', () => {
			 					prix_min_val = prix_min.valueAsNumber;
			 				});
			 				
			 				let prix_max = document.querySelector('#prix_max');
			 				let prix_max_val = prix_max.valueAsNumber;
			 				prix_max.addEventListener('input', () => {
			 					prix_max_val = prix_max.valueAsNumber;
			 				});
			 				
			 				let annee_min = document.querySelector('#annee_min');
			 				let annee_min_val = annee_min.valueAsNumber;
			 				annee_min.addEventListener('input', () => {
			 					annee_min_val = annee_min.valueAsNumber;
			 				});
			 				
			 				let annee_max = document.querySelector('#annee_max');
			 				let annee_max_val = annee_max.valueAsNumber;
			 				annee_max.addEventListener('input', () => {
			 					annee_max_val = annee_max.valueAsNumber;
			 				});

							$(document).ready(function() {
								$("#btn-filtre").click(function() {
									$("#cars-show").load("vehicules-occasion-filtrage.php", {
										km_min_val: Number(km_min_val),
										km_max_val: km_max_val,
										
										prix_min_val: prix_min_val,
										prix_max_val: prix_max_val,
										
										annee_min_val: annee_min_val,
										annee_max_val: annee_max_val
										
									});
								});
						});
            
        </script>
			

<?php require_once __DIR__ . "/templates/footer.php" ?>

