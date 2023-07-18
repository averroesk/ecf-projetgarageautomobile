<?php 

	require_once __DIR__ . "/../lib/config.php";
	require_once __DIR__ . "/../lib/session.php";
	employeOnly();
	
	require_once __DIR__ . "/templates/header.php"; 

?>

<div class="px-4 py-5 my-5 text-left">
  <h1 class="display-5 text-body-emphasis fs-2">Approuver les commentaires.</h1>
  <div class="col-lg-12">
    <p class="lead mb-4">Approuver les commentaires des clients.</p>
  </div>
</div>


<?php require_once __DIR__ . "/templates/footer.php"; ?>
