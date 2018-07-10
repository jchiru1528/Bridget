<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie ie8" class="no-js" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html class="no-js" lang="en"> <!--<![endif]-->
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
      <title>Colón Kuna 2019 </title>
    <meta name="description" content="">

    <!-- CSS FILES -->
    <link rel="stylesheet" href="<?php echo base_url();?>css/bootstrap.min.css"/>
    <link rel="stylesheet" href="<?php echo base_url();?>css/style.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/style.css" media="screen" data-name="skins">
    <link rel="stylesheet" href="<?php echo base_url();?>css/layout/wide.css" data-name="layout">

    <link rel="stylesheet" href="<?php echo base_url();?>css/fractionslider.css"/>
    <link rel="stylesheet" href="<?php echo base_url();?>css/style-fraction.css"/>
    <link rel="stylesheet" href="<?php echo base_url();?>css/animate.css"/>

    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/switcher.css" media="screen" />
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="home">
<header id="header">
    <div id="logo-bar">
	<?php include('titulo.php') ?>
        <div class="container">
            <div class="row">
              <!--
                <div  class="col-lg-11 col-sm-11 ">
                    <div id="logo">
                        <h1><img alt="logo" src="images/logo.jpg"/></h1>
                    </div>
                </div>
                -->
				
         
                <div class="col-lg-12 col-sm-12">
                    <div class="navbar navbar-default navbar-static-top" role="navigation">
                        <!--  <div class="container">-->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
						<div class="container" align="right">
							<a href="<?php echo site_url()?>jmj"><b>ESPAÑOL&nbsp&nbsp</b> </a>
							<a href="<?php echo site_url()?>jmj_in"><b>INGLÉS&nbsp&nbsp</b></a>
						</div>	
                        <div class="navbar-collapse collapse">
                            <ul class="nav navbar-nav">
                                <li class="active"><a href="<?php echo site_url()?>jmj"><b>Inicio</b></a>
								   <ul class="dropdown-menu">
                                            <li class="active"><a href="<?php echo site_url()?>palabras"><b>Mensaje de Monseñor</b></a></li>                                         
                                        </ul>
                                 </li>
                                <li><a href="<?php echo site_url()?>noticias"><b>Noticias</b></a></li>
								<li><a href="<?php echo site_url()?>info"><b>JMJ</b></a></li>
								<li><a href="<?php echo site_url()?>razon"><b>Días en las Diócesis</b></a>
								 <ul class="dropdown-menu">
                                            <li><a href="<?php echo site_url()?>info_logo"><b>Logo de los DED Colón Kuna yala</b> </a></li>
											<li><a href="<?php echo site_url()?>parroquias"><b>Parroquias </b></a></li>
											<li><a href="<?php echo site_url()?>historia"><b>Historia de la Diócesis</b>  </a></li>
                                </ul>
                                </li>
								<li><a href="#"><b>Inscripciones o registro</b></a>
								 <ul class="dropdown-menu">
                                            <li><a href="<?php echo site_url()?>registrate"><b>Formulario Para Voluntarios</b></a></li>
                                            <li><a href="<?php echo site_url()?>formulario2"><b>Formulario Para Peregrinos</b></a></li>
											<li><a href="<?php echo site_url()?>formulario3"><b>Festival de la Juventud</b></a></li>
											<li><a href="<?php echo site_url()?>formulario4"><b>Inscripción Dias en las Diócesis</b></a></li>
											<li ><a href="<?php echo site_url()?>verificate"><b>Verifícate</b></a></li>
                                </ul>
                                </li>								
								<li ><a href="<?php echo site_url()?>preguntas"><b>Preguntas frecuentes</b></a></li>
								<li ><a href="<?php echo site_url()?>contacto"><b>Contáctenos</b></a></li>
								<?php include('redesSociales.php') ?>
                            </ul>
                        </div>
                    </div>
                </div>
							
            </div>
        </div>
    </div>
</header>

<section class="wrapper">
    <div class="slider-wrapper">
        <div class="slider">
            <div class="fs_loader"></div>
            <div class="slide">
                <img src="<?php echo base_url();?>images/j_fondos/fondo.jpg" width="1920" height="auto" data-in="fade" data-out="fade" />
              
             </div>
			  <div class="slide">
                <img src="<?php echo base_url();?>images/j_fondos/fondo.jpg" width="1920" height="auto" data-in="fade" data-out="fade" />
              
             </div>
<!--			<div class="slide">
                <img src="<?php echo base_url();?>images/j_fondos/fondo2.jpg" width="1920" height="auto" data-in="fade" data-out="fade" />
           </div>
		   <div class="slide">
                <img src="<?php echo base_url();?>images/j_fondos/fondo3.jpg" width="1920" height="auto" data-in="fade" data-out="fade" />
           </div>
		   <div class="slide">
                <img src="<?php echo base_url();?>images/j_fondos/fondo4.jpg" width="1920" height="auto" data-in="fade" data-out="fade" />
           </div>
		   <div class="slide">
                <img src="<?php echo base_url();?>images/j_fondos/fondo5.jpg" width="1920" height="auto" data-in="fade" data-out="fade" />
           </div>
		   <div class="slide">
                <img src="<?php echo base_url();?>images/j_fondos/fondo6.jpg" width="1920" height="auto" data-in="fade" data-out="fade" />
           </div>
		   <div class="slide">
                <img src="<?php echo base_url();?>images/j_fondos/fondo7.jpg" width="1920" height="auto" data-in="fade" data-out="fade" />
           </div>
		   <div class="slide">
                <img src="<?php echo base_url();?>images/j_fondos/fondo8.jpg" width="1920" height="auto" data-in="fade" data-out="fade" />
           </div>
		  <div class="slide">
                <img src="<?php echo base_url();?>images/j_fondos/fondo9.jpg" width="1920" height="auto" data-in="fade" data-out="fade" />
           </div>
  -->
				
        </div>
    </div>
	
	<!--
    <div align="center" style="background:#003885;">
	 <h2 style="color:#FFF"><P align="center"><b>FALTAN<b> </h2>
        <div align="center">
            <div class="row sub_content" align="center">
				<?php include('reloj.php') ?>
            </div>
        </div>
    </div>
-->


    <div class="grey-content">
           
			<div class="container">	
					 <img class="img-responsive center-block" src="<?php echo base_url();?>images/paginas/saludo.png" width="500" height="auto"/>
				
			
			</div> 
		
		    <div class="container">
				<div class="row">
					&nbsp
				</div>
						<div class="row">
							<div class="col-sm-5 feature-block">
								<img class="img-responsive center-block" src="<?php echo base_url();?>images/obispo.jpg"/>
							</div>

							<div class="feature-block col-sm-7">
							 
								<h2  style="color:#fff" align="justify">
								
									Queridos todos. 
								</h2>
								
								
								
								
								<h2  style="color:#fff" align="justify">
								
									El Papa Francisco ha designado a Panamá como la sede de la Jornada Mundial de la Juventud 2019. El Papa viene a visitarnos, pero no viene solo.
									Esta fiesta de la juventud, que iniciara el muy querido Papa San Juan Pablo II, reúne jóvenes de todo el mundo, y nosotros seremos los anfitriones,
									con ellos compartiremos la Palabra y el mismo Encuentro con el Señor Jesucristo, celebraremos nuestra fe, compartiremos nuestros anhelos y esperanzas, 
									así como el dolor y las realidades en las que vivimos, donde la guerra, la indiferencia, el egoísmo, la exclusión y la injusticia, roban la alegría. 
									Es convocarnos para renovar nuestro deseo de un mundo como lo pensó Jesús, donde todos nos sintamos hermanos. 
								</h2>
							
							 
							 <h2  style="color:#fff" align="justify">
									2019 está cerca, y son muchas las cosas que hay que preparar, hagamos nuestra parte, para que todos los que nos visiten puedan descubrir nuestra iglesia,
									nuestra cultura y tradiciones, nuestra alegría, y llevarse un pedacito de nosotros en sus corazones. Les invito a todos para ponernos manos a la obra, y 
									elevando las manos al Dios oremos por la JMJ Panamá 2019.
							 </h2>
												
							</div>
							  
						</div>
						<div class="row">
								<h2  style="color:#fff" align="justify">
									A todos los que piensan en venir, desde ya les decimos que los estamos esperando. Nuestra casa será vuestra casa. Nuestra diócesis a orillas del hermoso
									mar Caribe, llena de sol y la alegría de nuestra gente, les brindan la acogida fraterna de una tierra hermosa.
							 </h2>
							 <h2  style="color:#fff" align="justify">
									Que el Señor les bendiga, y nuestra Madre María les guíe siempre. Un abrazo a todos.
							</h2>
							
							<h2  style="color:#fff" align="center">
									Mons. Manuel Ochogavía B. osa
							</h2>
							<h2  style="color:#fff" align="center">
									Obispo de Colón – Kuna Yala
							</h2>
						
						</div>
            </div>
    </div>

   



  
</section>



<script type="text/javascript" src="<?php echo base_url();?>js/jquery-1.10.2.min.js"></script>
<script src="<?php echo base_url();?>js/bootstrap.min.js"></script>
<script src="<?php echo base_url();?>js/jquery.easing.1.3.js"></script>
<script src="<?php echo base_url();?>js/retina-1.1.0.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/jquery.cookie.js"></script> <!-- jQuery cookie -->
<script type="text/javascript" src="<?php echo base_url();?>js/styleswitch.js"></script> <!-- Style Colors Switcher -->
<script src="<?php echo base_url();?>js/jquery.fractionslider.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/jquery.smartmenus.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/jquery.smartmenus.bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/owl.carousel.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/jflickrfeed.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/jquery.magnific-popup.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/jquery.isotope.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/jquery-hoverdirection.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/jquery.easypiechart.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/swipe.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/jquery.matchHeight-min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/jquery-scrolltofixed-min.js"></script>
<script src="<?php echo base_url();?>js/main.js"></script>

<!-- Start Style Switcher -->

<!-- End Style Switcher -->

<script>
      /*portfolio*/
    (function($) {
        "use strict";
        var $container = $('.portfolio'),
                $items = $container.find('.portfolio-item'),
                portfolioLayout = 'fitRows';

        if( $container.hasClass('portfolio-centered') ) {
            portfolioLayout = 'masonry';
        }

        $container.isotope({
            filter: '*',
            animationEngine: 'best-available',
            layoutMode: portfolioLayout,
            animationOptions: {
                duration: 750,
                easing: 'linear',
                queue: false
            },
            masonry: {
            }
        }, refreshWaypoints());

        function refreshWaypoints() {
            setTimeout(function() {
            }, 1000);
        }

        $('ul#filter li').on('click', function() {
            var selector = $(this).attr('data-filter');
            $container.isotope({ filter: selector }, refreshWaypoints());
            $('ul#filter li').removeClass('selected');
            $(this).addClass('selected');
            return false;
        });

        function getColumnNumber() {
            var winWidth = $(window).width(),
                    columnNumber = 1;

            if (winWidth > 1200) {
                columnNumber = 5;
            } else if (winWidth > 950) {
                columnNumber = 4;
            } else if (winWidth > 600) {
                columnNumber = 3;
            } else if (winWidth > 400) {
                columnNumber = 2;
            } else if (winWidth > 250) {
                columnNumber = 1;
            }
            return columnNumber;
        }

        function setColumns() {
            var winWidth = $(window).width(),
                    columnNumber = getColumnNumber(),
                    itemWidth = Math.floor(winWidth / columnNumber);

            $container.find('.portfolio-item').each(function() {
                $(this).css( {
                    width : itemWidth + 'px'
                });
            });
        }

        function setPortfolio() {
            setColumns();
            $container.isotope('reLayout');
        }

        $container.imagesLoaded(function () {
            setPortfolio();
        });

        $(window).on('resize', function () {
            setPortfolio();
        });
    })(jQuery);
</script>

<!-- WARNING: Wow.js doesn't work in IE 9 or less -->
<!--[if gte IE 9 | !IE ]><!-->
<script type="text/javascript" src="<?php echo base_url();?>js/wow.min.js"></script>
<script>
    // WOW Animation
    new WOW().init();
</script>

<![endif]-->

</body>
</html>