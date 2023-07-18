</main>
		
		
		 
		<footer class="container-fluid bg-secondary pt-5 mt-4">
			
			<div class="row justify-content-center">
		  		<div class="col-md-4"> 
    		  	<table class="table table-borderless text-light caption-top">
    		            <caption class="text-light fs-5 ms-1 mb-2">Horaires d'ouverture</caption>
                        <tbody>
                        
                       <?php
                        
                        	foreach ($jours as $key => $jour) {
                        			echo ("
		                      			<tr>
		                              <td>".htmlentities($jour['nom_jour'])."</td>
		                              <td>".htmlentities($jour['horaires_matin'])."</td>
		                              <td>".htmlentities($jour['horaires_soir'])."</td>
                            		</tr>
                        			"); 

                        		} 
                        	
                        ?> 
                           
                           
                        </tbody>
                    </table>	 
                </div>
			</div>

			<div class="row mt-4 pb-4">
				<div class="col d-flex justify-content-center">
					<span class="text-light">@2023</span>
				</div>
			</div>
			
		</footer>
		
     <script
     		src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
      	integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
        
        
    </body>
    
</html>

