<?php 
	
	require_once __DIR__ . "/lib/config.php";
	require_once __DIR__ . "/lib/pdo.php";
	
	require_once __DIR__ ."/templates/header.php"; 
	
	$sql = "SELECT * FROM services";
	$query = $pdo->prepare($sql);
  $query->execute();
  $result = $query->fetchAll(PDO::FETCH_ASSOC);
	$services = $result; 
	
?>
			
			<div class="container-fluid"> 

				<div class="row">
					<h1 class="text-center mt-4 mb-2 fs-3">Bienvenue au garage V. Parrot !</h1> 
					
					<!-- Carrousel -->
					 <div id="carouselExampleIndicators" class="carousel slide col-md-4 my-4" style="margin: auto">
						<div class="carousel-indicators">
							<button 
								type="button" 
								data-bs-target="#carouselExampleIndicators" 
								data-bs-slide-to="0" 
								class="active" 
								aria-current="true" 
								aria-label="Slide 1"></button>
							<button 
								type="button"
								data-bs-target="#carouselExampleIndicators"
								 data-bs-slide-to="1" 
								 aria-label="Slide 2"></button>
							<button type="button" 
								data-bs-target="#carouselExampleIndicators" 
								data-bs-slide-to="2"
								aria-label="Slide 3"></button>
						</div>
						<div class="carousel-inner">
						    <div class="carousel-item active">
								<img src="./images/images-vehicules/garage-image-1.jpg" class="d-block w-100 rounded" alt="Image 1 garage">
							</div>
							<div class="carousel-item">
								<img src="./images/images-vehicules/garage-image-3.jpg" class="d-block w-100 rounded" alt="Image 2 garage">
							</div>
							<div class="carousel-item">
								<img src="./images/images-vehicules/garage-image-2.jpg" class="d-block w-100 rounded" alt="Image 3 garage">
							</div>
						</div>
						<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
							<span class="carousel-control-prev-icon" aria-hidden="true"></span>
							<span class="visually-hidden">Previous</span>
						</button>
						<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
							<span class="carousel-control-next-icon" aria-hidden="true"></span>
							<span class="visually-hidden">Next</span>
						</button>
					</div> 
					
					<h2 class="mb-3 mt-5 col-md-9" style="margin: auto">Présentation des services</h2>
					<section class="my-4 col-md-9" style="margin: auto">
							<!-- <h3>Service de réparation de véhicules</h3> -->
					    <h3> <?=$services[0]['titre_service'] ?> </h3>
					    <article class="mb-4 mt-4">
						    <h4> <?=$services[0]['titre1'] ?> </h4>
							<img
								class="img-1-a-propos"
								src="./images/images-vehicules/reparation-vehicules.jpg" 
								alt="Image reparation véhicules" 
								height="300vh" 
								width="auto" 
							/>
							<!-- <p>
								Integer ornare a mauris eget lobortis. Praesent sapien risus, pharetra a justo id,
								volutpat ultrices diam. Sed felis lectus, egestas non justo et, lobortis gravida
								justo. Ut sed odio sollicitudin, consectetur mauris sit amet, egestas leo.
								Vestibulum at varius ligula. Nunc rhoncus justo ut faucibus semper.
								Phasellus mattis porta nunc, ac interdum sem elementum non. Pellentesque pulvinar
								egestas lectus eget elementum. Nam nec porta lectus. Sed tempor posuere enim. Proin
								at ultricies diam, non vehicula diam. Pellentesque hendrerit sapien ultrices accumsan
								pellentesque. Suspendisse felis nulla, rhoncus ac fringilla id, placerat a dui.
								Curabitur rutrum erat libero, et semper erat consectetur vitae. Integer porttitor
								leo nec mauris pharetra, in luctus diam volutpat. Aliquam mollis iaculis nisl a lacinia.
								Sed eget elementum nibh. Sed sed tincidunt dui. Duis ut fringilla augue.
							</p> -->
							<p>
								<?=$services[0]['paragraphe1'] ?>
							</p>
						</article>
						<article>
							<h4> <?=$services[0]['titre2'] ?> </h4>
							<!-- <p>
								Maecenas eu mauris vel nibh tempus faucibus. Integer in accumsan magna.
								Nam quis lacinia elit. Proin consequat pellentesque odio in rutrum.
								Donec eu aliquet nunc. Pellentesque ut arcu justo. Duis ut nulla nibh.
								Etiam dignissim venenatis blandit. Aliquam erat volutpat. Quisque viverra
								in lacus vel consequat. Cras ultrices aliquet purus, sit amet dignissim
								felis sollicitudin non. Vestibulum in nulla porta, consequat nisi a,
								porta ipsum. Sed quis mi a mi pharetra dapibus id ac felis. Integer
								viverra varius elit a pharetra.
							</p> -->
							<p>
								<?=$services[0]['paragraphe2'] ?>
							</p>
						</article>
					</section>
					<section class="my-4 col-md-9" style="margin: auto">
							<!-- <h3>Service d'entretien de véhicules</h3> -->
					    <h3> <?=$services[1]['titre_service'] ?> </h3>
					    <article class="mb-4 mt-4">
						    <h4> <?=$services[1]['titre1'] ?> </h4>
							<img
								class="img-2-a-propos"
								src="./images/images-vehicules/entretien-vehicules.jpg" 
								alt="Image entretien véhicules" 
								height="330vh" 
								width="auto" 
							/>
							<!-- <p>
								Sed ut ante at lorem feugiat sagittis. Orci varius natoque penatibus et
								magnis dis parturient montes, nascetur ridiculus mus. Phasellus posuere
								est a magna feugiat consequat. Nam id tortor quis est tempus tempor. Sed 
								vitae tortor elit. Sed congue in lacus a blandit. Integer posuere lobortis
								accumsan. Proin ante neque, sagittis sit amet tellus quis, ullamcorper 
								fringilla velit. Sed sit amet quam non leo tempor venenatis. Quisque facilisis,
								purus commodo eleifend bibendum, lacus lorem tincidunt augue, eu ullamcorper
								nisl purus a orci. In hac habitasse platea dictumst.
							</p> -->
							<p>
								<?=$services[1]['paragraphe1'] ?>
							</p>
						</article>
						<article>
							<h4> <?=$services[1]['titre2'] ?> </h4>
							<!-- <p>
								Aenean risus purus, accumsan id rhoncus nec, commodo quis neque.
								Sed ullamcorper quam nec lectus rhoncus pellentesque. Vivamus mattis
								quam nibh, nec mollis orci fringilla et. Vivamus quis porttitor orci.
								Integer dignissim at felis et bibendum. Proin non elit consequat,
								dignissim justo sed, pellentesque augue. Phasellus mollis viverra
								sollicitudin. Duis iaculis ut nisi interdum placerat. Quisque tristique
								ornare diam ac ultricies. Proin ante nisl, condimentum sed mi nec, 
								interdum bibendum lorem. Duis tincidunt fringilla mauris, sed scelerisque
								urna porta at. Etiam sem diam, vehicula eu hendrerit in, finibus sit
								amet ex. Nunc sed eros sagittis, dictum libero et, egestas metus.
								Maecenas vestibulum augue vitae lobortis ullamcorper.
							</p> -->
							<p>
								<?=$services[1]['paragraphe2'] ?>
							</p>
						</article>
					</section>
					<section class="my-4 col-md-9" style="margin: auto">
					    <!-- <h3>Service d'achat de véhicules d'occasion</h3> -->
					    <h3> <?=$services[2]['titre_service'] ?> </h3>
					    <article class="mb-4 mt-4">
						    <h4> <?=$services[2]['titre1'] ?> </h4>
							<img
								class="img-1-a-propos"
								src="./images/images-vehicules/achat-vehicules.jpg" 
								alt="Image achat véhicules" 
								height="300vh" 
								width="auto" 
							/>
							<!-- <p>
                                Cras pretium dignissim tellus. Aliquam a finibus sem, et mollis mi. 
                                Maecenas faucibus urna non tellus cursus, eget dictum libero tempor. 
                                Praesent quis fermentum elit. Integer bibendum, tellus eu imperdiet pharetra, 
                                erat dolor vulputate arcu, sed aliquet est ante ac sem. Sed vel dolor sed erat
                                pharetra gravida at rhoncus arcu. Curabitur eu urna sed tortor tempus tempus.
                                Maecenas rutrum placerat nulla ultrices sodales. Nam imperdiet est ex, vel 
                                mattis leo lacinia eget. Ut ornare enim id lorem feugiat sagittis. Pellentesque
                                dictum magna id mi condimentum, rutrum venenatis lacus commodo. Quisque faucibus 
                                odio porttitor fermentum fermentum. Duis nisi augue, sodales a est sed, feugiat
                                pulvinar lorem. Praesent congue convallis nunc in auctor. Sed sed euismod sem,
                                at volutpat urna.
                            </p> -->
              <p>
              	<?=$services[2]['paragraphe1'] ?>
              </p>
						</article>
						<article>
							<h4> <?=$services[2]['titre2'] ?> </h4>
							<!-- <p>
							    Sed fermentum fringilla arcu, accumsan tempus ligula feugiat quis. Nam lacinia
							    scelerisque lectus, at hendrerit leo auctor vitae. Mauris tempus mauris a 
							    dignissim euismod. Duis ut dolor aliquet quam dignissim viverra quis at risus.
							    Duis id mollis libero. In condimentum, felis ut ullamcorper maximus, risus 
							    lectus bibendum nisl, vitae bibendum nisl lectus quis nulla. Nam quis massa 
							    urna. Fusce non erat eu mi sodales ultricies eget a dolor. Integer ante ligula,
							    pellentesque ac tellus nec, laoreet luctus magna. Donec sed ante urna. Sed eu 
							    turpis id ante elementum posuere eget id lectus. Donec aliquet volutpat mi, a 
							    sodales diam rhoncus sed. Nam sed justo feugiat neque molestie pulvinar. 
							    Integer at nisl ac risus luctus congue. Sed dignissim mattis convallis.
							</p> -->
							<p>
								<?=$services[2]['paragraphe2'] ?>
							</p>
						</article>
					</section>
					
					<section class="mt-5 col-md-9" style="margin: auto">
					    <h2 class="mb-4 fs-5">Ecrire un commentaire client</h2>
					    <form class="col-md-6 mb-5">
					        <div class="mb-4">
					            <p style="opacity: 0.8">Note générale</p> 
					            <div 
					                id="rateYo" 
					                data-rateyo-half-star="true"
					                data-rateyo-rating='0'
					                data-rateyo-star-width="25px"></div>
					        </div>
    						<div class="mb-4">
    							<label for="name" class="form-label">Entrez votre prénom</label>
    							<input type="text" class="form-control" id="name" name="name">	    
    						</div>
    						<div class="mb-4">
    							<label for="comment" class="form-label">Ajoutez un commentaire écrit</label>
    							<textarea class="form-control" id="comment" rows="4"></textarea>
    						</div>
    						<button type="button" class="btn btn-success mt-1 mb-4">Envoyer</button>
					    </form>
					</section>
					
				</div>
			</div>
			
			 <script>
            $(function () {
    
                $("#rateYo").rateYo({
                    rating: 0
                });
            }); 
        </script> 
			
<?php require_once __DIR__ . "/templates/footer.php" ?>

