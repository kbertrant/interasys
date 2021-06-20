<?php
$title = "Porteurs de projets";
include_once "inc/header.php";
?>

<div id="banner-area">
		<img src="images/banner/banner2.jpg" alt ="" />
		<div class="parallax-overlay"></div>
			<!-- Subpage title start -->
			<div class="banner-title-content">
	        	<div class="text-center">
		        	<h2>Porteur de projets</h2>
		        	<ul class="breadcrumb">
			            <li>Accueil</li>
                        <li> Contact</li>
                        <li><a href="#"> Porteur de projets</a></li>
		          	</ul>
	          	</div>
          	</div><!-- Subpage title end -->
	</div><!-- Banner area end -->

	<!-- Main container start -->

	<section id="main-container">
		<div class="container">
			<h2>Vous avez un pprojet ?</h2>
			<span>Pour toute information, vous pouvez nous contacter aux adresses info@interasys.net ou renseigner le formulaire ci-dessous :</span>
			<div class="row">
			<h3>Identification</h3>
			<form id="contact-form" action="contact-form.php" method="post" role="form">
						<div class="row">
						<div class="col-lg-10 col-md-4">
								<div class="form-group">
									<label>Société*</label>
								<input class="form-control" name="societe" id="societe" placeholder="Nom de l'entreprise" type="text" required>
								</div>
							</div>
							<div class="col-lg-10 col-md-4">
								<div class="form-group">
									<label>Noms et prénoms*</label>
								<input class="form-control" name="name" id="name" placeholder="Noms et prénoms" type="text" required>
								</div>
							</div>
							<div class="col-lg-10 col-md-4">
								<div class="form-group">
									<label>Email</label>
									<input class="form-control" name="email" id="email" 
									placeholder="Votre email" type="email" required>
								</div>
							</div>
							<div class="col-lg-10 col-md-4">
								<div class="form-group">
									<label>Fonction</label>
									<input class="form-control" name="fonction" id="fonction" 
									placeholder="Votre fonction" required>
								</div>
							</div>
							<div class="col-lg-10 col-md-4">
							<h3>Votre projet</h3>
							</div>
							<div class="col-lg-10">
							<label>Intitulé du projet</label>
							<textarea class="form-control " name="projet" id="projet" placeholder="Décrivez votre projet en quelques mots" rows="10" required></textarea>
						</div>
                            <div class="col-lg-10 col-md-4">
								<div class="form-group">
									<label>Joindre un document</label>
									<input class="form-control" name="document" id="document" 
									placeholder="Votre C.V." type="file" required>
								</div>
							</div>
						</div>

						
						<div class="col-lg-10 text-right"><br>
							<button class="btn btn-primary solid blank" type="submit">Envoyer Candidature</button> 
						</div>
					</form>
			</div><!--/ Content row end -->

			<div class="gap-40"></div>
			<h2>Ecrivez-nous</h2>
			<div class="row">
	    		<div class="col-md-7">
	    			<form id="contact-form" action="send_contact.php" method="post" role="form">
						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
									<label>Nom</label>
								<input class="form-control" name="name" id="name" placeholder="" type="text" required>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label>Email</label>
									<input class="form-control" name="email" id="email" 
									placeholder="" type="email" required>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label>Sujet</label>
									<input class="form-control" name="subject" id="subject" 
									placeholder="" required>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label>Message</label>
							<textarea class="form-control" name="message" id="message" placeholder="" rows="10" required></textarea>
						</div>
						<div class="text-right"><br>
							<button class="btn btn-primary solid blank" type="submit">Envoyer Message</button> 
						</div>
					</form>
	    		</div>
	    		<div class="col-md-5">
	    			<div class="contact-info">
		    			<h3>Contact Details</h3>
			    		<p>Retrouvez-nous à cette adresse</p>
			    		<br>
			    		<p><i class="fa fa-home info"></i>  1251 Bld BESSEKE, Douala, CMR </p>
						<p><i class="fa fa-phone info"></i> +(237) 334 256 16 </p>
						<p><i class="fa fa-envelope-o info"></i>  contact@interasys.net</p>
						<p><i class="fa fa-globe info"></i>  www.interasys.net</p>
    				</div>
	    		</div>
	    	</div>

		</div><!--/ container end -->

	</section><!--/ Main container end -->
	<script style="javascript/text">
  document.getElementById('contact').style.color = 'orange';
  </script>
    <?php 
include_once "inc/footer.php";
?>