<?php 

	require_once __DIR__ . "/../lib/config.php";
	require_once __DIR__ . "/../lib/session.php";
	require_once __DIR__ . "/../lib/pdo.php";
	adminOnly();
	
	$sql = "SELECT * FROM horaires_ouverture";
	$query = $pdo->prepare($sql);
  $query->execute();
  $result = $query->fetchAll(PDO::FETCH_ASSOC);
	$jours = $result; 
	
	
	$messages = [];
	if (isset($_POST['enregistrer'])) {
		$sql = "UPDATE horaires_ouverture SET horaires_matin = :horaires_matin, horaires_soir = :horaires_soir WHERE nom_jour = :nom_jour"; 
				$query = $pdo->prepare($sql);
				$query->bindValue(":horaires_matin", $_POST['horaires_matin'], PDO::PARAM_STR);
				$query->bindValue(":horaires_soir", $_POST['horaires_soir'], PDO::PARAM_STR);
				$query->bindValue(":nom_jour", $_POST['nom_jour'], PDO::PARAM_STR); 
				$query->execute(); 
				
		}
	
	require_once __DIR__ . "/templates/header.php"; 

?>

<div class="mt-2 text-left">
  <h1 class="display-5 text-body-emphasis fs-2">Horaires d'ouverture</h1>
  <div class="col-lg-12">
    <p class="lead mt-2">Définir les horaires d'ouverture du garage automobile V. Parrot.</p>
    
    <!-- <div class="row justify-content-center"> 
		  		<div class="col-md-4"> -->

    		  	<table class="table table-borderless text-dark caption-top mt-5">
    		            <!--<caption class="text-light fs-5 ms-1 mb-2">Horaires d'ouverture</caption> -->
                        <tbody>
                        
		                     <?php
		                     
		                      
		                      	foreach ($jours as $key => $jour) { ?>
		                      				<form method='POST'>
																	
				                    			<tr>
				                      <td><input class='form-control' type='text' name='nom_jour' value=<?=$jour['nom_jour']?> ></td>
				        <td><textarea class='form-control' type='text' name='horaires_matin'><?=$jour['horaires_matin'] ?></textarea></td>
				        <td><textarea class='form-control' type='text' name='horaires_soir'><?=$jour['horaires_soir']?></textarea></td>
				        <td><input type='submit' name='enregistrer' class="btn btn-success mt-1 mb-4" value='Enregistrer' ></td>
				        
				        	<?php if ( isset($_POST['nom_jour']) && $_POST['nom_jour'] == $jour['nom_jour'] ) { 
										$message = "L'horaire du ".$jour['nom_jour']." a bien été mise à jour."; ?>
											<td>
												<div class="alert alert-success" role='alert'><?=$message?></div>
											</td>
										<?php } ?>
				        
		                          		</tr>
		                          		</form>
		                      			<?php } ?>
		                      		

		                      	
		                      	
		                      
		                      
                        

                        
                            <!-- > <tr>
                                <td>Lundi</td> 
                                <td>08:45 - 12:00</td> 
                                <td>14:00 - 18:00</td> 
                            </tr> -->
                            <!-- <tr>
                                <td>Mardi</td>
                                <td>08:45 - 12:00</td>
                                <td>14:00 - 18:00</td>
                            </tr>
                            <tr>
                                <td>Mercredi</td>
                                <td>08:45 - 12:00</td>
                                <td>14:00 - 18:00</td>
                            </tr>
                            <tr>
                                <td>Jeudi</td>
                                <td>08:45 - 12:00</td>
                                <td>14:00 - 18:00</td>
                            </tr>
                            <tr>
                                <td>Vendredi</td>
                                <td>08:45 - 12:00</td>
                                <td>14:00 - 18:00</td>
                            </tr>
                            <tr>
                                <td>Samedi</td>
                                <td>08:45 - 12:00</td>
                                <td>14:00 - 18:00</td>
                            </tr>
                            <tr>
                                <td>Dimanche</td>
                                <td>Fermé</td>
                                <td></td>
                            </tr> -->
                        </tbody>
                    </table>	


               <!--  </div>
			</div> -->
    
  </div>
</div>


<?php require_once __DIR__ . "/templates/footer.php"; ?>
