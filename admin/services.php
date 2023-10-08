<?php 

	require_once __DIR__ . "/../lib/config.php";
	require_once __DIR__ . "/../lib/session.php";
	require_once __DIR__ . "/../lib/pdo.php";
	adminOnly();
	
	$sql = "SELECT * FROM services";
	$query = $pdo->prepare($sql);
  $query->execute();
  $result = $query->fetchAll(PDO::FETCH_ASSOC);
	$services = $result; 
	
	
	$messages = [];
	
	if (isset($_POST['enregistrer'])) 
	{
		$sql = ("UPDATE services 
						SET titre_service = :titre_service, 
								titre1 = :titre1,
								paragraphe1 = :paragraphe1, 
								titre2 = :titre2, 
								paragraphe2 = :paragraphe2 
						WHERE id = :id"); 
		$query = $pdo->prepare($sql);
		$query->bindValue(":titre_service", $_POST['titre_service'], PDO::PARAM_STR);
		$query->bindValue(":titre1", $_POST['titre1'], PDO::PARAM_STR);
		$query->bindValue(":paragraphe1", $_POST['paragraphe1'], PDO::PARAM_STR); 
		$query->bindValue(":titre2", $_POST['titre2'], PDO::PARAM_STR);
		$query->bindValue(":paragraphe2", $_POST['paragraphe2'], PDO::PARAM_STR); 
		$query->bindValue(":id", $_POST['id'], PDO::PARAM_STR); 
		$query->execute(); 		
	}
		
	
	require_once __DIR__ . "/templates/header.php"; 

?>

<div class="mt-2 text-left">
  <h1 class="display-5 text-body-emphasis fs-2">Services de réparation automobile</h1>
  <div class="col-lg-12">
    <p class="lead mt-2">Mettre à jour les services de réparation automobile proposés par le garage automobile V. Parrot.</p>
    
    <div class="row justify-content-center"> 
		  		<!-- <div class="col-md-4"> -->
		  		
		  		
							
							<?php if ( isset($_POST['id']) ) { 
							
										$message = "Le contenu des services a bien été mise à jour."; ?>
							
										<div class="alert alert-success" role='alert'><?=$message?></div>

							<?php } ?>
																	
                        
		            <?php
		                     
		                      
		                      	foreach ($services as $key => $service) { ?>
		                      				<form class="my-4" method='POST'>
																	
																	<input type="hidden" name="id" value=<?=$service['id']?>>
				                    			
				 <textarea class='form-control my-2' rows="1" type='text' name='titre_service'> <?=$service['titre_service']?></textarea>
				        
				 <textarea class='form-control my-2' rows="1" type='text' name='titre1'> <?=$service['titre1']?> </textarea>
				        
				 <textarea class='form-control my-2' rows="7" type='text' name='paragraphe1'><?=$service['paragraphe1'] ?></textarea>
				 
				 <textarea class='form-control my-2' rows="1" type='text' name='titre2'> <?=$service['titre2']?> </textarea>
				 
				 <textarea class='form-control my-2' rows="7" type='text' name='paragraphe2'><?=$service['paragraphe2']?></textarea>
				 
				 <input type='submit' name='enregistrer' class="btn btn-success mt-2" value='Enregistrer'>
				 
				 													
		                          		</form>
		                          		
		                          		
		                      			<?php } ?>
				        
				        	
		                      		
    </div>
    
  </div>
</div>


<?php require_once __DIR__ . "/templates/footer.php"; ?>

