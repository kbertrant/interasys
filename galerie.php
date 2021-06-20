<?php
$title = "Galerie";
include_once "inc/header.php";
?>

<div id="banner-area">
		<img src="images/banner/banner2.jpg" alt ="" />
		<div class="parallax-overlay"></div>
			<!-- Subpage title start -->
			<div class="banner-title-content">
	        	<div class="text-center">
		        	<h2>Galerie</h2>
		        	<ul class="breadcrumb">
			            <li>Accueil</li>
                        <li>Actualités</li>
                        <li><a href="#"> Galerie</a></li>
		          	</ul>
	          	</div>
          	</div><!-- Subpage title end -->
	</div><!-- Banner area end -->

    <!-- Main container start -->
    	<!-- Portfolio start -->
	<section id="main-container" class="portfolio portfolio-box">
		<div class="container">
			<!--Isotope filter start -->
			<div class="row text-center">
				<div class="isotope-nav" data-isotope-nav="isotope">
					<ul>
						<li><a href="#" class="active" data-filter="*">Tout</a></li>
						<li><a href="#" data-filter=".web-design">Fete du travail</a></li>
						<li><a href="#" data-filter=".development">Journée internationale de la femme</a></li>
						<li><a href="#" data-filter=".joomla">Actualités</a></li>
						<li><a href="#" data-filter=".wordpress">Formations</a></li>
					</ul>
				</div>
			</div><!-- Isotope filter end -->
			
			<div class="row">
				<div id="isotope" class="isotope">
					<div class="col-sm-3 web-design isotope-item">
						<div class="grid">
							<figure class="effect-oscar">
								<img src="images/portfolio/portfolio1.jpg" alt="">
								<figcaption>
									<h3> Formation de nos ingénieurs</h3>
									<a class="link icon-pentagon" href="portfolio-item.html"><i class="fa fa-link"></i></a>
									<a class="view icon-pentagon" data-rel="prettyPhoto" href="images/portfolio/portfolio-bg1.jpg"><i class="fa fa-search"></i></a>            
								</figcaption>			
							</figure>
						</div>
					</div><!-- Isotope item end -->

					<div class="col-sm-3 development isotope-item">
						<div class="grid">
							<figure class="effect-oscar">
								<img src="images/portfolio/portfolio2.jpg" alt="">
								<figcaption>
									<h3>Fete du travail 2019</h3>
									<a class="link icon-pentagon" href="portfolio-item.html"><i class="fa fa-link"></i></a>
									<a class="view icon-pentagon" data-rel="prettyPhoto" href="images/portfolio/portfolio-bg2.jpg"><i class="fa fa-search"></i></a>            
								</figcaption>				
							</figure>
						</div>
					</div><!-- Isotope item end -->

					<div class="col-sm-3 joomla isotope-item">
						<div class="grid">
							<figure class="effect-oscar">
								<img src="images/portfolio/portfolio3.jpg" alt="">
								<figcaption>
									<h3>Remise des prix aux enfants du personnel</h3>
									<a class="link icon-pentagon" href="portfolio-item.html"><i class="fa fa-link"></i></a>
									<a class="view icon-pentagon" data-rel="prettyPhoto" href="images/portfolio/portfolio-bg3.jpg"><i class="fa fa-search"></i></a>            
								</figcaption>				
							</figure>
						</div>
					</div><!-- Isotope item end -->

					<div class="col-sm-3 wordpress isotope-item">
						<div class="grid">
							<figure class="effect-oscar">
								<img src="images/portfolio/portfolio4.jpg" alt="">
								<figcaption>
									<h3>Reception du projets</h3>
									<a class="link icon-pentagon" href="portfolio-item.html"><i class="fa fa-link"></i></a>
									<a class="view icon-pentagon" data-rel="prettyPhoto" href="images/portfolio/portfolio-bg4.jpg"><i class="fa fa-search"></i></a>            
								</figcaption>					
							</figure>
						</div>
					</div><!-- Isotope item end -->

					<div class="col-sm-3 joomla isotope-item">
						<div class="grid">
							<figure class="effect-oscar">
								<img src="images/portfolio/portfolio5.jpg" alt="">
								<figcaption>
									<h3>Partenariat entre InterAsys Conseils et... </h3>
									<a class="link icon-pentagon" href="portfolio-item.html"><i class="fa fa-link"></i></a>
									<a class="view icon-pentagon" data-rel="prettyPhoto" href="images/portfolio/portfolio-bg5.jpg"><i class="fa fa-search"></i></a>            
								</figcaption>					
							</figure>
						</div>
					</div><!-- Isotope item end -->

					<div class="col-sm-3 development isotope-item">
						<div class="grid">
							<figure class="effect-oscar">
								<img src="images/portfolio/portfolio6.jpg" alt="">
								<figcaption>
									<h3>Fete de fin d'années en images</h3>
									<a class="link icon-pentagon" href="portfolio-item.html"><i class="fa fa-link"></i></a>
									<a class="view icon-pentagon" data-rel="prettyPhoto" href="images/portfolio/portfolio-bg1.jpg"><i class="fa fa-search"></i></a>            
								</figcaption>					
							</figure>
						</div>
					</div><!-- Isotope item end -->

					<div class="col-sm-3 development isotope-item">
						<div class="grid">
							<figure class="effect-oscar">
								<img src="images/portfolio/portfolio7.jpg" alt="">
								<figcaption>
									<h3>Visite de l'orphélinat</h3>
									<a class="link icon-pentagon" href="portfolio-item.html"><i class="fa fa-link"></i></a>
									<a class="view icon-pentagon" data-rel="prettyPhoto" href="images/portfolio/portfolio-bg2.jpg"><i class="fa fa-search"></i></a>            
								</figcaption>					
							</figure>
						</div>
					</div><!-- Isotope item end -->

					<div class="col-sm-3 development isotope-item">
						<div class="grid">
							<figure class="effect-oscar">
								<img src="images/portfolio/portfolio8.jpg" alt="">
								<figcaption>
									<h3>Tournoi de football</h3>
									<a class="link icon-pentagon" href="portfolio-item.html"><i class="fa fa-link"></i></a>
									<a class="view icon-pentagon" data-rel="prettyPhoto" href="images/portfolio/portfolio-bg3.jpg"><i class="fa fa-search"></i></a>            
								</figcaption>					
							</figure>
						</div>
					</div><!-- Isotope item end -->
				</div><!-- Isotope content end -->
			</div><!-- Content row end -->
		</div><!-- Container end -->
	</section><!-- Portfolio end -->

	<div class="gap-40"></div>
    <?php 
include_once "inc/footer.php";
?>