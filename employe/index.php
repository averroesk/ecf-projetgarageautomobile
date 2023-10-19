<?php 

	require_once __DIR__ . "/../lib/config.php";
	require_once __DIR__ . "/../lib/session.php";
	employeOnly();
	
	require_once __DIR__ . "/templates/header.php"; 
	
	var_dump($_SESSION["user"]["prenom"]);

?>

<div class="px-4 py-5 my-5 text-left">
  <h1 class="display-5 text-body-emphasis">Compte employé</h1>
  <div class="col-lg-12">
    <p class="lead mb-4">Compte employé du site garage automobile V. Parrot.</p>
  </div>
</div>


<?php require_once __DIR__ . "/templates/footer.php"; ?>
