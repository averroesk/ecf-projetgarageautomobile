
<?php 

	require_once __DIR__ . "/lib/config.php";
	require_once __DIR__ . "/lib/pdo.php";

	require_once __DIR__ . "/templates/header.php" 
	
?>
			
			<div class="container-fluid">
				<div class="row">
					<h1 class="text-center">Contacter l'atelier</h1>
					
					<!-- Formulaire de contact -->
					<form class="col-md-6 my-5 m-auto">
						<div class="mb-4">
							<label for="lastname" class="form-label">Entrez votre nom</label>
							<input type="text" class="form-control" id="lastname" name="lastname">
						</div>
						<div class="mb-4">
							<label for="firstname" class="form-label">Entrez votre prénom</label>
							<input type="text" class="form-control" id="firstname" name="firstname">
						</div>
						<div class="mb-4">
							<label for="email" class="form-label">Entrez votre adresse e-mail</label>
							<input type="email" class="form-control" id="email" name="email">	    
						</div>
						<div class="mb-4">
							<label for="phone" class="form-label">Entrez votre numéro de téléphone</label>
							<input type="tel" class="form-control" id="phone" name="phone">
						</div>
						<div class="mb-4">
							<label for="message" class="form-label">Entrez votre message</label>
							<textarea class="form-control" id="message" name="message" rows="5"></textarea>
						</div>
						<button type="button" class="btn btn-success mt-2 mb-4">Envoyer</button>
					</form>
				</div>
			</div>
			
<?php require_once __DIR__ . "/templates/footer.php" ?>

