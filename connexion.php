
<?php

	require_once __DIR__ . "/lib/config.php"; 
 	require_once __DIR__ . "/lib/pdo.php"; 
	require_once __DIR__ . "/lib/session.php"; 
	require_once __DIR__ . "/templates/header.php"; 
	
	var_dump($_SESSION["user"]["prenom"]);

		function verifyCredentials(PDO $pdo, string $email, string $password) {
		  $query = $pdo->prepare("SELECT * FROM utilisateurs WHERE email = :email");
		  $query->bindParam(':email', $email, PDO::PARAM_STR);
		  $query->execute();
		  $user = $query->fetch(); 

		  if ($user && password_verify($password, $user['password'])) {
		      return $user;
		  } else {
		      return false;
		  }
  	} 

$errors = [];


		if (isset($_POST['loginUser'])) {
		 	$user = verifyCredentials($pdo, $_POST['email'], $_POST['password']); 
		  if ($user) {
		      session_regenerate_id(true);
		      $_SESSION['user'] = $user;
		      if ($user['role'] === 'admin') {
		          header('location: admin/index.php');
		      } else {
		      		header('location: employe/index.php');
		      }
		  } else {
		      $errors[] = 'Email ou mot de passe incorrect';
		  }
		}
		

?>
			
			<div class="container-fluid">
				<div class="row">
					<h1 class="text-center">Se connecter à mon compte</h1>
					
					<!-- Formulaire de connexion -->
					<form method="POST" class="col-md-6 my-5 m-auto">
					
						<?php foreach ($errors as $error) { ?>
							<div class="mb-5 alert alert-danger" role="alert">
								<?= $error; ?>
							</div>
						<?php } ?>
					
						<div class="mb-4">
							<label for="email" class="form-label">Entrez votre adresse e-mail</label>
							<input type="email" class="form-control" id="email" name="email">	    
						</div>
						<div class="mb-4">
							<label for="password" class="form-label">Entrez votre mot de passe</label>
							<input type="password" class="form-control" id="password" name="password">
						</div>
						<input type="submit" name="loginUser" class="btn btn-success mt-1 mb-4" value="Se connecter"/>
					</form>
			    </div>
		    </div>

<?php require_once __DIR__ . "/templates/footer.php" ?>

