<?php
error_reporting(E_ERROR | E_PARSE);
require("contenido.php");

?>
<!DOCTYPE html>
<html class="no-parallax" lang="en">
<head>
	<meta charset="UTF-8">
	<title>Nekura</title>	
	<link rel="icon" type="image/png" href="img/fav-icon/fav-icon-144.png" sizes="144x144">

	<meta http-equiv="cleartype" content="on">
    <meta name="HandheldFriendly" content="True">
    <meta name="MobileOptimized" content="320">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
	
	<link rel="stylesheet" href="css/style.min.css">
	<script src="js/libs/modernizr.js"></script>
    <link rel="stylesheet" href="css/custom.css">
	<style>
	
	</style>
</head>
<body data-colorTheme="dark">
	<div class="preloader-block">
        <div class="ui-loader loader-blk">
            <svg viewBox="22 22 44 44" class="multiColor-loader">
                <circle cx="44" cy="44" r="20.2" fill="none" stroke-width="3.6" class="loader-circle loader-circle-animation"></circle>
            </svg>
        </div>
	</div>

	<div id="top" class="regular-header ">
		<header class="wrapper pt10 pb10 tbgc1 section-fix header-wrapper">
			<div class="row">
		 		<div class="column large-3 medium-6">
					<div class="logo component">
                        <h2 class="text fz8 fw3 ttu lsm mt20 title ac">Nekura</h2>						
					</div>
				</div>
				<div class="column large-9 medium-6">
					<div class="wrapper pt20 pb20 js-menu-container">
						<nav class="menu component">
							<ul class="list inline ar xsgutter">
								<li><a class="link fz2 fw3 ttu ctm" href="#pueblos">pueblos magicos</a></li>
								<li><a class="link fz2 fw3 ttu ctm" href="#aboutus">Nosotros</a></li>
								<li><a class="link fz2 fw3 ttu ctm" href="#internacionales">internacional</a></li>
								<li><a class="link fz2 fw3 ttu ctm" href="#mexico">méxico</a></li>
								<li><a class="link fz2 fw3 ttu ctm" href="#contacts">contacto</a></li>
								<li><a class="fz2 fw3 ttu ctm" href="socios/" target="_blank">socios</a></li>
							</ul>
							<div class="component menutoggle js-menu-toggle">
								<span class="line"></span>
							</div>
						</nav>
					</div>
				</div>
			</div>
		</header>
	</div>
    

	<section role="main" class="sections-container">

        <!-- SLIDER -->
		<section class="section-fix js-first-screen first-screen-section">
			<div class="wrapper fullheight">
				<div class="row nogutter fullwidth">
					<div class="column large-12">
						<div class="slider wrapper owl component mainslider js-main-slider" data-config='{"items": 1, "smartSpeed": 1000}'>
							<div class="slide">
								<div class="wrapper fullwidth fullheight pa">
									<div class="wrapper acc pa zim slide-title-block">
										<h3 class="text ff2 fz10 fw1 lss cw ac slidertext">Vista Pueblos Mágicos de México</h3>
									</div>
								</div>
								<img src="img/theme/slider/1.jpg" alt="Odyssey slider image" class="image">
							</div>
							<div class="slide">
								<div class="wrapper fullwidth fullheight pa">
									<div class="wrapper acc pa zim slide-title-block">
										<h3 class="text ff2 fz10 fw1 lss cw ac slidertext">Turísmo Internacional</h3>
									</div>
								</div>
								<img src="img/theme/slider/2.jpg" alt="Odyssey slider image" class="image">
							</div>
							<div class="slide">
								<div class="wrapper fullwidth fullheight pa">
									<div class="wrapper acc pa zim slide-title-block">
										<h3 class="text ff2 fz10 fw1 lss cw ac slidertext">Turísmo Mexicano</h3>
									</div>
								</div>
								<img src="img/theme/slider/3.jpg" alt="Odyssey slider image" class="image">
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
        <!-- /SLIDER -->

        <!-- PUEBLOS MAGICOS -->
		<section class="pt50 pb50 tbgc1 section-fix" id="pueblos">
			<div class="wrapper offers-section">
				<div class="component">
					<div class="row">
						<div class="column large-12">
							<h2 class="text fz8 fw3 ttu lsm mb30 title ac">PUEBLOS MÁGICOS</h2>
						</div>
					</div>
					<div class="row">
						<div class="column large-12">
							<div class="ovh pr wrapper">
								<div class="wrapper best-offers mb-40">
                                    <?=$pueblosmagicos;?>
								</div>
							</div>
						</div>
					</div>
                    <div class="row mt20">
                        <div class="column large-4">
                            <div class="wrapper mb30 deal-wrapper">
                                <div class="wrapper tbgc1 ac pt20 pb20 item-title bg-gold">
                                    <h4 class="text fw3 fz4 c6 ttu lsm text-light">Patrimonios Culturales</h4>
                                </div>
                                <div class="wrapper tbgc3 p40" height="270px">
                                    <div class="scroll-y">
                                        <?=$pmCat["culturales"];?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="column large-4">
                            <div class="wrapper mb30 deal-wrapper">
                                <div class="wrapper tbgc1 ac pt20 pb20 item-title bg-gold">
                                    <h4 class="text fw3 fz4 c6 ttu lsm text-light">Historicos</h4>
                                </div>
                                <div class="wrapper tbgc3 p40" height="270px">
                                    <div class="scroll-y">
                                        <?=$pmCat["historicos"];?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="column large-4">
                            <div class="wrapper mb30 deal-wrapper">
                                <div class="wrapper tbgc1 ac pt20 pb20 item-title bg-gold">
                                    <h4 class="text fw3 fz4 c6 ttu lsm text-light">Tradicionales</h4>
                                </div>
                                <div class="wrapper tbgc3 p40" height="270px">
                                    <div class="scroll-y">
                                        <?=$pmCat["tradicionales"];?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
					
				</div>
			</div>
		</section>
        <!-- /PUEBLOS MAGICOS -->

        <!-- NOSOTROS -->
		<section class="section-fix new-abs-section tbgc3" id="aboutus">
			<div class="wrapper">
				<div class="row fullwidth nogutter custom-row">
					<div class="column large-6">
						<div class="wrapper aboutus-slider js-aboutus-slider owl" data-config='{"items": 1, "smartSpeed": 700}'>
							<div class="place-item js-place-item" data-location="Suva, FJ" data-unit="c">
								<div class="place-view"><img src="img/theme/aboutus/1.jpg" alt=""></div>
								<div class="place-weather wrapper pa top left fullwidth ar">
									<div class="js-item-weather ar wrapper cw inline"></div>
								</div>
							</div>													
							<div class="place-item js-place-item" data-location="St. George, US" data-unit="c">
								<div class="place-view"><img src="img/theme/aboutus/2.jpg" alt=""></div>
								<div class="place-weather wrapper pa top left fullwidth ar">
									<div class="js-item-weather ar wrapper cw inline"></div>
								</div>
							</div>
							<div class="place-item js-place-item" data-location="Antananarivo, MG" data-unit="c">
								<div class="place-view"><img src="img/theme/aboutus/3.jpg" alt=""></div>
								<div class="place-weather wrapper pa top left fullwidth ar">
									<div class="js-item-weather ar wrapper cw inline"></div>
								</div>
							</div>
							<div class="place-item js-place-item" data-location="Palm Desert, US" data-unit="c">
								<div class="place-view"><img src="img/theme/aboutus/4.jpg" alt=""></div>
								<div class="place-weather wrapper pa top left fullwidth ar">
									<div class="js-item-weather ar wrapper cw inline"></div>
								</div>
							</div>	
							<div class="place-item js-place-item" data-location="Palm Desert, US" data-unit="c">
								<div class="place-view"><img src="img/theme/aboutus/5.jpg" alt=""></div>
								<div class="place-weather wrapper pa top left fullwidth ar">
									<div class="js-item-weather ar wrapper cw inline"></div>
								</div>
							</div>	
							<div class="place-item js-place-item" data-location="Palm Desert, US" data-unit="c">
								<div class="place-view"><img src="img/theme/aboutus/6.jpg" alt=""></div>
								<div class="place-weather wrapper pa top left fullwidth ar">
									<div class="js-item-weather ar wrapper cw inline"></div>
								</div>
							</div>	
							<div class="place-item js-place-item" data-location="Palm Desert, US" data-unit="c">
								<div class="place-view"><img src="img/theme/aboutus/7.jpg" alt=""></div>
								<div class="place-weather wrapper pa top left fullwidth ar">
									<div class="js-item-weather ar wrapper cw inline"></div>
								</div>
							</div>
						</div>
					</div>

					<div class="column large-6 wrapper p20 new-abs-wrapper" style="padding-top: 0 !important; margin-bottom: -10px !important;">
						<div class="row">
							<div class="column">
								<h2 class="text fz8 fw3 ttu lsm mb30 ctm ac">Nosotros</h2>
							</div>
						</div>

						<div class="row">
							<div class="column large-12 wrapper pr15 pl15">
								<div class="component al ">
									
									<p class="text fw3 fz3 fsi mb10 ctm lh14">
                                    Bienvenido a Nekura! En nuestra misión de brindar experiencias inolvidables, nos apasiona presentarte los destinos más encantadores y sorprendentes de México y del mundo. Nos especializamos en promover viajes a los maravillosos Pueblos Mágicos de México, así como en ofrecer opciones de turismo mexicano e internacional más demandadas.
									</p>
									<p class="text fw3 fz3 fsi mb10 ctm lh14">
                                    En Nekura, creemos que los viajes no solo son una forma de explorar nuevos lugares, sino también una oportunidad para sumergirse en la riqueza cultural y la historia de cada destino. Es por eso que nos hemos comprometido a resaltar los encantos de los Pueblos Mágicos de México, aquellos pintorescos y auténticos lugares llenos de tradición, folclore y belleza. Te invitamos a descubrir el corazón de México a través de nuestras excursiones cuidadosamente diseñadas, que te permitirán sumergirte en la esencia de cada lugar y vivir experiencias únicas.
									</p>
									<p class="text fw3 fz3 fsi mb10 ctm lh14">
                                    Además, entendemos que el turismo no se limita a las fronteras de México, por lo que también te ofrecemos una amplia gama de opciones de turismo internacional. Ya sea que sueñes con caminar por las calles empedradas de una ciudad europea, relajarte en playas paradisíacas del Caribe o aventurarte en exóticos destinos asiáticos, estamos aquí para hacer realidad tus deseos de viajar.
									</p>
									<p class="text fw3 fz3 fsi mb10 ctm lh14">
                                    En resumen, en Nekura te ofrecemos la oportunidad de descubrir los Pueblos Mágicos de México, experimentar el turismo mexicano en toda su gloria y explorar los destinos internacionales más solicitados. Ya sea que estés buscando aventuras, relajación o una inmersión cultural, estamos aquí para convertir tus sueños de viaje en realidades memorables.
									</p>
								</div>
							</div>
							
						</div>

						
					</div>
				</div>
			</div>
		</section>
        <!-- /NOSOTROS -->
        
        <!-- HOTELES -->
		<section class="section-fix pt50 hotels-section tbgc1">
			<div class="wrapper">
				<div class="row">
					<div class="column large-12">
						<h2 class="text fz8 fw3 ttu lsm mb30 title ac">explore hotels</h2>
					</div>
				</div>
				<div class="row">
					<div class="column medium-6 large-4">
						<div class="wrapper mb30 pr ovh ac">
							<div class="hotel-item pr al wrapper inline">
								<div class="hotel-thumb"><img src="img/theme/hotels/1.jpg" alt=""></div>
								<div class="hotel-details wrapper pa fullwidth left bottom zil">
									<div class="wrapper aj pl20 pr20 pb10 pt10 info-item">
										<h3 class="hotel-title inline vam text ttu fw3 fz4 lh1">sky tower hotel</h3>
										<div class="wrapper inline vam hotel-rating" data-stars="5">
											<span class="star-item fa"></span>
											<span class="star-item fa"></span>
											<span class="star-item fa"></span>
											<span class="star-item fa"></span>
											<span class="star-item fa"></span>
										</div>
									</div>
									<div class="wrapper pl20 pr20 info-item features-list">
										<div class="wrapper features-item inline">
											<span class="fa fa-phone"></span>
										</div>
										<div class="wrapper features-item inline">
											<span class="fa fa-wifi"></span>
										</div>
										<div class="wrapper features-item inline">
											<span class="fa fa-book"></span>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="column medium-6 large-4">
						<div class="wrapper mb30 pr ovh ac">
							<div class="hotel-item pr al wrapper inline">
								<div class="hotel-thumb"><img src="img/theme/hotels/2.jpg" alt=""></div>
								<div class="hotel-details wrapper pa fullwidth left bottom zil">
									<div class="wrapper aj pl20 pr20 pb10 pt10 info-item">
										<h3 class="hotel-title inline vam text ttu fw3 fz4 lh1">imperial hotel</h3>
										<div class="wrapper inline vam hotel-rating" data-stars="4">
											<span class="star-item fa"></span>
											<span class="star-item fa"></span>
											<span class="star-item fa"></span>
											<span class="star-item fa"></span>
											<span class="star-item fa"></span>
										</div>
									</div>
									<div class="wrapper pl20 pr20 info-item features-list">
										<div class="wrapper features-item inline">
											<span class="fa fa-phone"></span>
										</div>
										<div class="wrapper features-item inline">
											<span class="fa fa-wifi"></span>
										</div>
										<div class="wrapper features-item inline">
											<span class="fa fa-book"></span>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="column medium-6 large-4">
						<div class="wrapper mb30 pr ovh ac">
							<div class="hotel-item pr al wrapper inline">
								<div class="hotel-thumb"><img src="img/theme/hotels/3.jpg" alt=""></div>
								<div class="hotel-details wrapper pa fullwidth left bottom zil">
									<div class="wrapper aj pl20 pr20 pb10 pt10 info-item">
										<h3 class="hotel-title inline vam text ttu fw3 fz4 lh1">Sleepik hotel</h3>
										<div class="wrapper inline vam hotel-rating" data-stars="4">
											<span class="star-item fa"></span>
											<span class="star-item fa"></span>
											<span class="star-item fa"></span>
											<span class="star-item fa"></span>
											<span class="star-item fa"></span>
										</div>
									</div>
									<div class="wrapper pl20 pr20 info-item features-list">
										<div class="wrapper features-item inline">
											<span class="fa fa-phone"></span>
										</div>
										<div class="wrapper features-item inline">
											<span class="fa fa-wifi"></span>
										</div>
										<div class="wrapper features-item inline">
											<span class="fa fa-book"></span>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="column medium-6 large-4">
						<div class="wrapper mb30 pr ovh ac">
							<div class="hotel-item pr al wrapper inline">
								<div class="hotel-thumb"><img src="img/theme/hotels/1.jpg" alt=""></div>
								<div class="hotel-details wrapper pa fullwidth left bottom zil">
									<div class="wrapper aj pl20 pr20 pb10 pt10 info-item">
										<h3 class="hotel-title inline vam text ttu fw3 fz4 lh1">sky tower hotel</h3>
										<div class="wrapper inline vam hotel-rating" data-stars="5">
											<span class="star-item fa"></span>
											<span class="star-item fa"></span>
											<span class="star-item fa"></span>
											<span class="star-item fa"></span>
											<span class="star-item fa"></span>
										</div>
									</div>
									<div class="wrapper pl20 pr20 info-item features-list">
										<div class="wrapper features-item inline">
											<span class="fa fa-phone"></span>
										</div>
										<div class="wrapper features-item inline">
											<span class="fa fa-wifi"></span>
										</div>
										<div class="wrapper features-item inline">
											<span class="fa fa-book"></span>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="column medium-6 large-4">
						<div class="wrapper mb30 pr ovh ac">
							<div class="hotel-item pr al wrapper inline">
								<div class="hotel-thumb"><img src="img/theme/hotels/2.jpg" alt=""></div>
								<div class="hotel-details wrapper pa fullwidth left bottom zil">
									<div class="wrapper aj pl20 pr20 pb10 pt10 info-item">
										<h3 class="hotel-title inline vam text ttu fw3 fz4 lh1">imperial hotel</h3>
										<div class="wrapper inline vam hotel-rating" data-stars="4">
											<span class="star-item fa"></span>
											<span class="star-item fa"></span>
											<span class="star-item fa"></span>
											<span class="star-item fa"></span>
											<span class="star-item fa"></span>
										</div>
									</div>
									<div class="wrapper pl20 pr20 info-item features-list">
										<div class="wrapper features-item inline">
											<span class="fa fa-phone"></span>
										</div>
										<div class="wrapper features-item inline">
											<span class="fa fa-wifi"></span>
										</div>
										<div class="wrapper features-item inline">
											<span class="fa fa-book"></span>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="column medium-6 large-4">
						<div class="wrapper mb30 pr ovh ac">
							<div class="hotel-item pr al wrapper inline">
								<div class="hotel-thumb"><img src="img/theme/hotels/3.jpg" alt=""></div>
								<div class="hotel-details wrapper pa fullwidth left bottom zil">
									<div class="wrapper aj pl20 pr20 pb10 pt10 info-item">
										<h3 class="hotel-title inline vam text ttu fw3 fz4 lh1">Sleepik hotel</h3>
										<div class="wrapper inline vam hotel-rating" data-stars="4">
											<span class="star-item fa"></span>
											<span class="star-item fa"></span>
											<span class="star-item fa"></span>
											<span class="star-item fa"></span>
											<span class="star-item fa"></span>
										</div>
									</div>
									<div class="wrapper pl20 pr20 info-item features-list">
										<div class="wrapper features-item inline">
											<span class="fa fa-phone"></span>
										</div>
										<div class="wrapper features-item inline">
											<span class="fa fa-wifi"></span>
										</div>
										<div class="wrapper features-item inline">
											<span class="fa fa-book"></span>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
        <!-- //HOTELES -->

        <!-- TURISMO INTER -->
		<section class="pt50 pb50 tbgc1 section-fix" id="internacionales">
			<div class="wrapper offers-section">
				<div class="component">
					<div class="row">
						<div class="column large-12">
							<h2 class="text fz8 fw3 ttu lsm mb30 title ac">TURÍSMO INTERNACIONAL</h2>
						</div>
					</div>
					<div class="row">
						<div class="column large-12">
							<div class="ovh pr wrapper">
								<div class="wrapper best-offers mb-40">
                                    <?=$internacionales;?>
								</div>
							</div>
						</div>
					</div>
					
				</div>
			</div>
		</section>
        <!-- /TURISMO INTER -->

		
        <!-- TURISMO MEXICANO -->
		<section id="mexico" class="tbgc1 section-fix wrapper">
			<div class="row">
				<div class="column large-12">
					<h2 class="text fz8 fw3 ttu lsm mb30 title ac">TURISMO MÉXICANO</h2>
				</div>
			</div>			
		</section>

		<section class="parallax-fix top-offers-section">
			<div class="parallax bg3"></div>
			<div class="wrapper pt100 pb60">
				<div class="row">
					<div class="column medium-6">
						<div class="wrapper ac">
							<h4 class="text title lsm ttu fw3 cw fz8 mb40 ac">PLAYAS PARADISIACAS</h4>
						</div>
					</div>
					<div class="column medium-6">
						<div class="wrapper">
							<?=$mexico["playas"]?>							
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="parallax-fix top-offers-section mt30">
			<div class="parallax bg4"></div>
			<div class="wrapper pt100 pb60">
				<div class="row">
					<div class="column medium-6">
						<div class="wrapper ac">
							<h4 class="text title lsm ttu fw3 cw fz8 mb40 ac">CIUDADES VIBRANTES</h4>
						</div>
					</div>
					<div class="column medium-6">
						<div class="wrapper">
                            <?=$mexico["ciudades"]?>
                        </div>
					</div>
				</div>
			</div>
		</section>
        <!-- /TURISMO MEXICANO -->

		
        <!-- SOCIOS COMERCIALES-->
		<section class="tbgc1 section-fix">
			<div class="wrapper pt50 pb100">
				<div class="row">
					<div class="column large-12">
						<h2 class="text fz8 fw3 ttu lsm mb30 title ac">SOCIOS COMERCIALES</h2>
					</div>
				</div>
				<div class="row">
					<div class="column large-12">
						<div class="wrapper">
							<div class="clients component owl" data-config='{"responsive": {"1024":{"items": 4}, "500":{"items": 2}, "1025": {"items": 6}, "0":{"items": 1} } }'>
								<div class="client ac">
									<img src="img/theme/clients/darkVersion/1.png" alt="client" class="image wa ac">
								</div>
								<div class="client ac">
									<img src="img/theme/clients/darkVersion/2.png" alt="client" class="image wa ac">
								</div>
								<div class="client ac">
									<img src="img/theme/clients/darkVersion/3.png" alt="client" class="image wa ac">
								</div>
								<div class="client ac">
									<img src="img/theme/clients/darkVersion/4.png" alt="client" class="image wa ac">
								</div>
								<div class="client ac">
									<img src="img/theme/clients/darkVersion/1.png" alt="client" class="image wa ac">
								</div>
								<div class="client ac">
									<img src="img/theme/clients/darkVersion/2.png" alt="client" class="image wa ac">
								</div>
								<div class="client ac">
									<img src="img/theme/clients/darkVersion/3.png" alt="client" class="image wa ac">
								</div>
								<div class="client ac">
									<img src="img/theme/clients/darkVersion/4.png" alt="client" class="image wa ac">
								</div>
								<div class="client ac">
									<img src="img/theme/clients/darkVersion/1.png" alt="client" class="image wa ac">
								</div>
								<div class="client ac">
									<img src="img/theme/clients/darkVersion/2.png" alt="client" class="image wa ac">
								</div>
								<div class="client ac">
									<img src="img/theme/clients/darkVersion/3.png" alt="client" class="image wa ac">
								</div>
								<div class="client ac">
									<img src="img/theme/clients/darkVersion/4.png" alt="client" class="image wa ac">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
        <!-- /SOCIOS -->
        

        <!-- PARALLAX DATOS -->
		<section class="parallax-fix">
			<div class="parallax bg2"></div>
			<div class="wrapper pt70 pb70">
				<div class="row">
					<div class="column medium-3">
						<div class="numbers component">
							<div class="wrapper pt50 pb50 ac">
								<div class="wrapper dib number mb20">
									<h4 class="text ff2 fz11 fw1 cw ac odometer">
										1260
									</h4>
								</div>
								<p class="text cw icon">
									<i class="pe-7s-key"></i>
								</p>
								<p class="text fw3 fz4 ttu cw lsm">hotels</p>
							</div>
						</div>
					</div>
					<div class="column medium-3">
						<div class="numbers component">
							<div class="wrapper pt50 pb50 ac">
								<div class="wrapper dib number mb20">
									<h4 class="text ff2 fz11 fw1 cw ac odometer">
										59
									</h4>
								</div>
								<p class="text cw icon">
									<i class="pe-7s-map"></i>
								</p>
								<p class="text fw3 fz4 ttu cw lsm">destination</p>
							</div>
						</div>
					</div>
					<div class="column medium-3">
						<div class="numbers component">
							<div class="wrapper pt50 pb50 ac">
								<div class="wrapper dib number mb20">
									<h4 class="text ff2 fz11 fw1 cw ac odometer">
										25
									</h4>
								</div>
								<p class="text cw icon">
									<i class="pe-7s-like"></i>
								</p>
								<p class="text fw3 fz4 ttu cw lsm">honeymoon tours</p>
							</div>
						</div>
					</div>
					<div class="column medium-3">
						<div class="numbers component">
							<div class="wrapper pt50 pb50 ac">
								<div class="wrapper dib number mb20">
									<h4 class="text ff2 fz11 fw1 cw ac odometer">
										17
									</h4>
								</div>
								<p class="text cw icon">
									<i class="pe-7s-gleam"></i>
								</p>
								<p class="text fw3 fz4 ttu cw lsm">extreme tours</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
        <!-- //PARALLAX DATOS -->
        
		
        <!-- CONTACTO -->
		<section class="tbgc5 section-fix" id="contacts">
			<div class="wrapper pt100">
				<div class="row">
					<div class="column large-12">
						<h2 id="msgSend" class="text fz8 fw3 ttu lsm mb30 cmt title ac">CONTACTO</h2>
					</div>
				</div>
				<div class="row">
					<div class="column large-12 wrapper ovh">
						<div class="wrapper separator around">
							<div class="row">
								<div class="column large-12 wrapper pr">
									<div class="wrapper pr">
										<div class="row">
											<div class="column medium-6">
												<div class="wrapper p40 component contacts">
													<div class="wrapper mb20 logo-container">
                                                        <h2 class="text fz8 fw3 ttu lsm mt20 title al">Nekura</h2>
													</div>
													<div class="wrapper mb40">
														<p class="text fz3 fsi cmt fw3">
                                                        Bienvenido a Nekura! En nuestra misión de brindar experiencias inolvidables, nos apasiona presentarte los destinos más encantadores y sorprendentes de México y del mundo. Nos especializamos en promover viajes a los maravillosos Pueblos Mágicos de México, así como en ofrecer opciones de turismo mexicano e internacional más demandadas.
														</p>
													</div>
													<div class="wrapper">
														<div class="list">
															<li class="mb20">
																<div class="wrapper pl20 pr">
																	<div class="wrapper pa left top">
																		<span class="text cm fz3"><i class="pe-7s-mail"></i></span>
																	</div>
																	<p class="text cmt fz3 fw3 lss">direccion@nekura.com.mx</p>
																</div>
															</li>
															<li class="mb20">
																<div class="wrapper pl20 pr">
																	<div class="wrapper pa left top">
																		<span class="text cm fz3"><i class="pe-7s-phone"></i></span>
																	</div>
																	<p class="text cmt fz3 fw3 lss">+52 78432994</p>
																</div>
															</li>
															<li class="mb20">
																<div class="wrapper pl20 pr">
																	<div class="wrapper pa left top">
																		<span class="text cm fz3"><i class="pe-7s-map-marker"></i></span>
																	</div>
																	<p class="text cmt fz3 fw3 lss">Av. Morones Prieto #999, Mty, N.L.</p>
																</div>
															</li>
														</div>
													</div>
												</div>
											</div>
											<div class="column medium-6 separator left">
												<div class="wrapper pt40 pb40 pl90 pr90">
													<form action="#" class="form contact-form">
														<div class="wrapper mb10 pr">
															<input type="text" title="name" name="name" class="input required dark pt20 pb20" placeholder="Nombre">
															<span class="error-star pt20 pb20"></span>
														</div>
														<div class="wrapper mb10 pr">
															<input type="text" title="email" name="mail" class="input required dark pt20 pb20" placeholder="Correo">
															<span class="error-star pt20 pb20"></span>
														</div>
														<div class="wrapper mb40 pr">
															<textarea   name="message" class="textarea required dark pt20 pb20" placeholder="Mensaje"></textarea>
															<span class="error-star pt20 pb20"></span>
														</div>
														<div class="wrapper ac">
															<div class="button dark nopadding js-checkout wrapper pr">
																<ul class="list inline btn-components">
																	<li><span class="text ttu fw3 ff1 c6 fz4 lh24 pr30 pl30">ENVIAR</span></li>
																	<li class="form-icon"><span class="text icon c6 fz4 lh24 pl10 pr10"><i class="pe-7s-mail-open-file"></i></span></li>
																</ul>
																<div class="wrapper form-states">
																	<div class="wrapper succes pa fullwidth fullheight">
																		<svg class="wrapper pa acc" enable-background="new 0 0 24 24" version="1.0" viewBox="0 0 24 24" xml:space="preserve">
																		    <polyline points="20,6 9,17 4,12" class="check-mark"/>
																		</svg>
																	</div>
																	<div class="wrapper error-state pa fullwidth fullheight">
																		<div class="error-sign wrapper pa acc"></div>
																	</div>
																</div>
															</div>
														</div>
													</form>
												</div>

											</div>
										</div>

										<div class="wrapper">
											<div class="button wrapper pa ac zil map-pin ac js-map-toggle js-map-btn">
												<span class="pe-7s-map-marker map-icon"></span>
											</div>
											<div class="wrapper pa fullheight fullwidth map-wrapper js-map-wrapper">
												<div class="wrapper pa ac zil map-pin ac js-map-toggle">
													<span class="pe-7s-close map-icon"></span>
												</div>
												<div id="map-block" class="wrapper pa fullheight fullwidth"  data-lon="25.6636204" data-lat="-100.3315612"></div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
        <!-- /CONTACTO -->

	</section>

    <!-- FOOTER -->
	<footer class="tbgc5 section-fix">
		<div class="wrapper">
			<div class="row">
				<div class="column large-12">
					<div class="component ac pt40 pb40">
						<p class="text ctm fz3 lh1">(kod)²</p>
					</div>
				</div>
			</div>
		</div>
	</footer>
    <!-- /FOOTER -->

    <!-- UPBTN -->
    <div class="btnUp" id="btnUp"><a href="#top"><i class="fa fa-arrow-up"></i></a></div>
    <!-- /UPBTN -->

	<div class="modals">
		<div class="offer-modal">
			<div class="wrapper tbgc3 pf fullwidth fullheight top left js-details-wrapper details-wrapper">
				<div class="table-container">
					<div class="cell-container">
						<div class="row ovh wrapper">
							<div class="column medium-12 large-4 wrapper fullheight offer-slider-column">
								<div class="offers-slider-container">
								</div>
							</div>
							<div class="column medium-12 large-8">
								<div class="wrapper pa close-btn pointer ovh js-close-details fa fa-angle-left"> <span class="fw3 text">Atrás</span></div>
								<div class="wrapper pb30 pt30 pr offer-tabs-container">
									<div class="wrapper ovh js-details-container">
										<div class="row">
											<div class="column large-12">
												<div class="wrapper">
													<p class="text cm fz6 lh1 js-item-price mb20"></p>
													<h4 class="text title fw3 fz6 cmt lh1 mb15 js-item-title"></h4>
													<div class="description">
														<p class="item-description text fsi fz1 c6 lh2 mb10"></p>
													</div>
												</div>
											</div>											
										</div>
									</div>									
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	
	<script src="js/libs/require.js" data-main="js/index.min"></script>
    
    <script src="js/script.js"></script>
	

</body>
</html>