<?php require_once __DIR__ . "/templates/header.php" ?>
			
			<div class="container-fluid">
				<div class="row">
					<h1 class="text-center">Se connecter à mon compte</h1>
					<!-- Formulaire de connexion -->
					<form class="col-md-6 my-5 m-auto">
						<div class="mb-4">
							<label for="email" class="form-label">Entrez votre adresse e-mail</label>
							<input type="email" class="form-control" id="email" name="email">	    
						</div>
						<div class="mb-4">
							<label for="password" class="form-label">Entrez votre mot de passe</label>
							<input type="password" class="form-control" id="password" name="password">
						</div>
						<button type="button" class="btn btn-success mt-1 mb-4">Se connecter</button>
					</form>
			    </div>
		    </div>

<?php require_once __DIR__ . "/templates/footer.php" ?>
