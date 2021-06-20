<?php
$title = "Carrière";
include_once "inc/header.php";
?>

<div id="banner-area">
		<img src="images/banner/banner2.jpg" alt ="" />
		<div class="parallax-overlay"></div>
			<!-- Subpage title start -->
			<div class="banner-title-content">
	        	<div class="text-center">
		        	<h2>Carrière</h2>
		        	<ul class="breadcrumb">
			            <li>Accueil</li>
                        <li> Contact</li>
                        <li><a href="#"> Carrière</a></li>
		          	</ul>
	          	</div>
          	</div><!-- Subpage title end -->
	</div><!-- Banner area end -->

	<!-- Main container start -->

	<section id="main-container">
		<div class="container">
			
			<div class="row">
				<div class="col-md-6 col-sm-6">
					<div class="team team-list wow slideInLeft">
						<div class="img-hexagon">
						<a href="offres-emploi.php"><img src="images/offres.png" alt=""></a>
							<span class="img-top"></span>
							<span class="img-bottom"></span>
						</div>
						<div class="team-content">
							<h3>Offres d'emploi</h3>
							<p class="desc"> Consultez régulièrement nos offres d'emploi afin de ne pas rater des opportunités</p>
						</div>
					</div>	
				</div><!--/ Team 1 end -->
				<div class="col-md-6 col-sm-6">
					<div class="team team-list wow slideInRight">
						<div class="service-icon img-hexagon ">
						<a href="candidature.php"> <img src="images/candidature.png" alt=""></a>
							<span class="img-top"></span>
							<span class="img-bottom"></span>
						</div>
						<div class="team-content">
							<h3>Candidature spontanée</h3>
							<p>Une carrière avec nous ?</p>
							<p class="desc">Rejoignez une équipe jeune et dynamique sur des projets innovants. Postulez instantanément.</p>
						</div>
					</div>
				</div><!--/ Team 2 end -->
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