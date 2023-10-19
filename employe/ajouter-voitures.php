<?php 

	require_once __DIR__ . "/../lib/config.php";
	require_once __DIR__ . "/../lib/pdo.php";
	require_once __DIR__ . "/../lib/session.php";
	require_once __DIR__ . "/../lib/tools.php";
	employeOnly();
	
	require_once __DIR__ . "/templates/header.php"; 
	
	$errors = [];
	$messages = [];
	
	function addCar(PDO $pdo, string|null $image_voiture, string $titre_voiture, int $prix_voiture, int $annee_voiture, int $km_voiture) {
		   
  $sql = "INSERT INTO vehicules_occasion (image_voiture, titre_voiture, prix_voiture, annee_voiture, km_voiture) VALUES (:image_voiture, :titre_voiture, :prix_voiture, :annee_voiture, :km_voiture);";
    
    $query = $pdo->prepare($sql);
    
    $query->bindParam(':image_voiture', $image_voiture, PDO::PARAM_STR);
    $query->bindParam(':titre_voiture', $titre_voiture, PDO::PARAM_STR);
    $query->bindParam(':prix_voiture', $prix_voiture, PDO::PARAM_INT);
    $query->bindParam(':annee_voiture', $annee_voiture, PDO::PARAM_INT);
    $query->bindParam(':km_voiture', $km_voiture, PDO::PARAM_INT); 
    
    return $query->execute();
}
	
	if (isset($_POST['addCar']) ) {
	
	
    if ( isset($_FILES["file"]["tmp_name"]) 
    		&& $_FILES["file"]["error"] === 0 
    		&& ( $_FILES["file"]["type"] === "image/jpeg"
      		|| $_FILES["file"]["type"] === "image/png" ) 
      	&& getimagesize($_FILES["file"]["tmp_name"]) !== false
      ) {
          
		     	$fileName = slugify(basename($_FILES["file"]["name"]));
		     	// Renomme le fichier téléchargé
		      $fileName = round(microtime(true)).mt_rand() . '-' . $fileName;  
		      $test = move_uploaded_file($_FILES["file"]["tmp_name"], 
		        														"../images/images-vehicules/" . $fileName);
        	if ($test){
          	if (isset($_POST['image'])) {
            	// On supprime l'ancienne image si on a posté une nouvelle
              /* dirname(__DIR__) permet de cibler le 
                 dossier parent car on se trouve dans admin. */
               unlink(dirname(__DIR__)."/images/images-vehicules/" . $_POST['image']);
             }
           } else {
           	$errors[] = 'Le fichier n\'a pas été uploadé';
           } 
       	} else {
       		$errors[] = 'Le fichier doit être une image';
       	}
     
    	
    
    
     if (!$errors) {

        $res = addCar($pdo, $fileName, $_POST['titre_voiture'], $_POST['prix_voiture'], $_POST['annee_voiture'], $_POST['km_voiture']);

    		if ($res) {
        	$messages[] = "Nouvelle voiture ajoutée.";
    		} else {
        	$errors[] = "Une erreur s'est produite lors de l'enregistrement.";
    		}
    }
    
  } 

?>



<div class="px-4 my-3 text-left">
  <!-- <h1 class="display-5 fw-bold text-body-emphasis">Générer un compte employé</h1> -->

		<div class="container-fluid">
				<div class="row">
					<h1 class="text-center">Ajouter une nouvelle voiture</h1>
					
					<!-- Formulaire d'ajout d'une nouvelle voiture' -->
					<form method="POST" class="col-md-6 my-3 m-auto" enctype="multipart/form-data">
						
						<?php foreach ($messages as $message) { ?>
							<div class="mb-4 alert alert-success" role="alert">
								<?= $message; ?>
							</div>
						<?php } ?>
					
						<?php foreach ($errors as $error) { ?>
							<div class="mb-4 alert alert-danger" role="alert">
								<?= $error; ?>
							</div>
						<?php } ?>
						
						<div class="mb-4">
							<label for="titre_voiture" class="form-label">Entrez le titre de la nouvelle voiture</label>
							<input type="text" class="form-control" id="titre_voiture" name="titre_voiture">	    
						</div>
						<div class="mb-4">
							<label for="prix_voiture" class="form-label">Entrez le prix de la nouvelle voiture</label>
							<input type="text" class="form-control" id="prix_voiture" name="prix_voiture">	    
						</div>
						<div class="mb-4">
							<label for="annee_voiture" class="form-label">Entrez l'année de mise en circulation de la nouvelle voiture</label>
							<input type="text" class="form-control" id="annee_voiture" name="annee_voiture">	    
						</div>
						<div class="mb-4">
							<label for="km_voiture" class="form-label">Entrez le kilométrage de la nouvelle voiture</label>
							<input type="text" class="form-control" id="km_voiture" name="km_voiture">
						</div>
						
						<?php if ( isset($fileName) ) { ?>
            	<p>
                <img src="../images/images-vehicules/<?=$fileName ?>" alt="<?= $_POST['titre_voiture'] ?>" width="100">
                <input type="hidden" name="image" value="<?= $fileName; ?>">
            	</p>

       		 <?php } ?> 
						
						
						<p>
    					<input type="file" name="file" id="file">
						</p>
						
						<input type="submit" name="addCar" class="btn btn-success mt-1 mb-4" value="Enregistrer" />
						
					</form>
					
			    </div>
		    </div>
</div>


<?php require_once __DIR__ . "/templates/footer.php"; ?>

