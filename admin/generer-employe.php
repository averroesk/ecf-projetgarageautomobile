<?php 

	require_once __DIR__ . "/../lib/config.php";
	require_once __DIR__ . "/../lib/pdo.php";
	require_once __DIR__ . "/../lib/session.php";
	adminOnly();
	
	require_once __DIR__ . "/templates/header.php"; 
	
	$errors = [];
	$messages = [];
	
	
	function addUser(PDO $pdo, string $prenom, 
									string $nom, string $email, 
									string $password, $role = "employe") 
	{
  	$sql = ("INSERT INTO utilisateurs (prenom, nom, email, password, role)
  	 				VALUES (:prenom, :nom, :email, :password, :role);");
    $query = $pdo->prepare($sql);
    $password = password_hash($password, PASSWORD_DEFAULT);
    $query->bindParam(':prenom', $prenom, PDO::PARAM_STR);
    $query->bindParam(':nom', $nom, PDO::PARAM_STR);
    $query->bindParam(':email', $email, PDO::PARAM_STR);
    $query->bindParam(':password', $password, PDO::PARAM_STR);
    $query->bindParam(':role', $role, PDO::PARAM_STR);
    return $query->execute();
	}

	
	if (isset($_POST['addUser'])) {
    /*
        @todo ajouter la vérification sur les champs
    */
    
    $res = addUser($pdo, $_POST['prenom'], $_POST['nom'], $_POST['email'], $_POST['password']);
    if ($res) {
        $messages[] = "Compte employé ajouté.";
    } else {
        $errors[] = "Une erreur s'est produite lors de l'enregistrement.";
    }
}

?>

<div class="px-4 my-3 text-left">
  <!-- <h1 class="display-5 fw-bold text-body-emphasis">Générer un compte employé</h1> -->

		<div class="container-fluid">
				<div class="row">
					<h1 class="text-center">Ajouter un compte employé</h1>
					
					<!-- Formulaire de connexion -->
					<form method="POST" class="col-md-6 my-3 m-auto">
						
						<?php foreach ($messages as $message) { ?>
							<div class="mb-5 alert alert-success" role="alert">
								<?= $message; ?>
							</div>
						<?php } ?>
					
						<?php foreach ($errors as $error) { ?>
							<div class="mb-5 alert alert-danger" role="alert">
								<?= $error; ?>
							</div>
						<?php } ?>
						
						<div class="mb-4">
							<label for="prenom" class="form-label">Entrez un prénom</label>
							<input type="text" class="form-control" id="prenom" name="prenom">	    
						</div>
						<div class="mb-4">
							<label for="nom" class="form-label">Entrez un nom</label>
							<input type="text" class="form-control" id="nom" name="nom">	    
						</div>
						<div class="mb-4">
							<label for="email" class="form-label">Entrez une adresse e-mail</label>
							<input type="email" class="form-control" id="email" name="email">	    
						</div>
						<div class="mb-4">
							<label for="password" class="form-label">Entrez un mot de passe</label>
							<input type="password" class="form-control" id="password" name="password">
						</div>
						<input type="submit" name="addUser" class="btn btn-success mt-1 mb-4" value="Enregistrer" />
					</form>
			    </div>
		    </div>
</div>


<?php require_once __DIR__ . "/templates/footer.php"; ?>

