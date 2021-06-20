<?php
$title = "Nos services";
include_once "inc/header.php";
?>

<div id="banner-area">
		<img src="images/banner/banner4.jpg" alt ="" />
		<div class="parallax-overlay"></div>
			<!-- Subpage title start -->
			<div class="banner-title-content">
	        	<div class="text-center">
		        	<h2>Services</h2>
		        	<ul class="breadcrumb">
			            <li>Accueil</li>
			            <li><a href="#">Services</a></li>
		          	</ul>
	          	</div>
          	</div><!-- Subpage title end -->
	</div><!-- Banner area end -->

<!-- Service box start -->
<section id="service" class="service angle">
		<div class="container">
			<div class="row">
				<div class="col-md-12 heading">
					<span class="title-icon pull-left"><i class="fa fa-cogs"></i></span>
					<h2 class="title">Services<span class="title-desc">La qualité de 4 années d'expérience à votre service</span></h2>
				</div>
			</div><!-- Title row end -->

			<div class="row">
				<div class="col-md-12">
					<div class="col-md-3 col-sm-3 wow fadeInDown" data-wow-delay=".5s">
						<div class="service-content text-center">
							<span class="service-icon icon-pentagon"><i class="fa fa-tachometer"></i></span>
							<h3>CONSEIL</h3>
							<p>AMOA, SECURITE DES SI, MANAGEMENT DES PROJETS IT, FORMATION ET CERTIFICATION</p>
						</div>
					</div><!--/ End first service -->

					<div class="col-md-3 col-sm-3 wow fadeInDown" data-wow-delay=".8s" >
						<div class="service-content text-center">
							<span class="service-icon icon-pentagon"><i class="fa fa-android"></i></span>
							<h3>LOGICIEL</h3>
							<p>MY E-SESAME ERP, SESAME BI, SESAME MAIL MANAGER, SESAME DATA MANAGER, DEVELOPPEMENT AU FORFAIT</p>
						</div>
						
					</div><!--/ End Second service -->

					<div class="col-md-3 col-sm-3 wow fadeInDown" data-wow-delay="1.1s">
						<div class="service-content text-center">
							<span class="service-icon icon-pentagon"><i class="fa fa-puzzle-piece"></i></span>
							<h3>INFOGERANCE</h3>
							<p>MAINTENANCE ET ASSISTANCE, MANAGED PRINT SERVICE, LOCATION PC ET IMPRIMANTE</p>
						</div>
					</div><!--/ End Third service -->

					<div class="col-md-3 col-sm-3 wow fadeInDown" data-wow-delay="1.4s">
						<div class="service-content text-center">
							<span class="service-icon icon-pentagon"><i class="fa fa-lightbulb-o"></i></span>
							<h3>INTEGRATION</h3>
							<p>RESEAU ET SECURITE, VIRTUALISATION, STOCKAGE ET SAUVEGARDE, COMMUNICATION UNIFIEE, PROTECTION ELECTRIQUE, ECM / GED, BASE DE DONNEES</p>
						</div>
					</div><!--/ End 4th service -->
				</div>
			</div><!-- Content row end -->
		</div><!--/ Container end -->
	</section><!--/ Service box end -->
			
		<div class="gap-60"></div>

		<div class="gap-60"></div>

        <section class="call-to-action">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<h3>Rejoignez InterAsys Conseils et donnez vie à vos projets</h3>
					<a href="contact.php" class="pull-right btn btn-primary white"> Contactez-nous</a>
				</div>
			</div>
		</div>
	</section>
	<script style="javascript/text">
  document.getElementById('service').style.color = 'orange';
  </script>
    <?php 
include_once "inc/footer.php";
?>