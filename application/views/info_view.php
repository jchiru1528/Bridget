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
   
</head>
<script type = 'text/javascript'>
function validacion() {
var valor =0;
var parroquia;
parroquia = document.getElementById("comboparroquia").value;


if (parroquia =="Selecione El Formulario" )
{
	alert("Selecione Por Favor El Formulario")
	valor++;
	return false;
}

 if (valor==0)
 {return true;}	 
}
</script> 
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
                                <li ><a href="<?php echo site_url()?>jmj"><b>Inicio</b></a>
								   <ul class="dropdown-menu">
                                            <li><a href="<?php echo site_url()?>palabras"><b>Mensaje de Monseñor</b></a></li>                                         
                                        </ul>
                                 </li>
                                <li><a href="<?php echo site_url()?>noticias"><b>Noticias</b></a></li>
								<li class="active"><a href="<?php echo site_url()?>info"><b>JMJ</b></a></li>
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


  

<section class="wrapper">


	
    <div class="grey-content">
           
			<div class="container">	
					 <img class="img-responsive center-block" src="<?php echo base_url();?>images/paginas/jmj.png" width="500" height="auto"/>
				
			</div> 
		
		    <div class="container">
				<div class="row">
					&nbsp
				</div>
						<div class="row">
							<div class="col-sm-4 feature-block">
								<img class="img-responsive center-block" src="<?php echo base_url();?>images/jmj_logo.jpg" width="700" height="auto"/>
							</div>

							<div class="feature-block col-sm-7">
							 
								
								
								<h2  style="color:#fff" align="justify">
								
									Es un evento organizado por la Iglesia Católica que convoca a los jóvenes de todo el mundo en torno a la figura del papa.
									La Jornada Mundial de la Juventud se realiza anualmente en cada diócesis del mundo el día de Domingo de Ramos, con una ceremonia principal en el Vaticano. 
									Sin embargo, cada dos o tres años, se realiza un gran encuentro internacional realizado en una ciudad sede.
								</h2>
							
							 
							 <h2  style="color:#fff" align="justify">
									Esta ceremonia es presidida por el papa. Este último encuentro, de varios días de duración, es el que se asocia habitualmente con el nombre de Jornada Mundial de la Juventud.
							 </h2>
												
							</div>
							  
						</div>
						
						
						<div class="container">
								<div class="row">
										<div class="form-group">
											<div class="col-lg-1">
											   
											</div>
											 <div class="col-lg-3 ">
												 
											</div>
											<div class="col-lg-1">
											   
											</div>
											 <div class="col-lg-3 ">
												   
											</div>
										</div>                      
								 </div>
								 <div class="row">
										<div class="form-group">
											<div class="col-lg-1">
											   
											</div>
											 <div class="col-lg-3 ">
												 
											</div>
											<div class="col-lg-1">
											   
											</div>
											 <div class="col-lg-3 ">
												   
											</div>
										</div>                      
								 </div>
						</div>
						<div class="row">
							<div class="feature-block col-sm-7">
								<h2  style="color:#fff" align="center">
											<b>LA CRUZ PEREGRINA</b>
								</h2>
							</div>
						</div>
						<div class="row">
							

							<div class="feature-block col-sm-7">
							 
								
								
								<h2  style="color:#fff" align="justify">
								
									Es conocida como la "Cruz del Año Santo", la "Cruz del Jubileo", la "Cruz de la JMJ", la "Cruz peregrina"; 
									muchos la llaman la "Cruz de los jóvenes", porque ha sido entregada a los jóvenes para que la llevasen por 
									todo el mundo, a todos los lugares y en todo tiempo. Ésta es su historia: En el año jubilar de 1984,
									Juan Pablo II decidió que tenía que haber una cruz, como símbolo de la auténtica fe cristiana,
									cerca del altar mayor de la Basílica de San Pedro, donde todos pudiesen verla. Así, 
									fue instalada una gran cruz de madera, de 3,8 metros de altura, como él deseaba. Al final del Año Santo, 
									después de cerrar la Puerta Santa, el Papa entregó esa misma cruz a la juventud del mundo, con estas palabras:
									"Queridos jóvenes, al clausurar el Año Santo os confío el signo de este Año Jubilar: ¡la Cruz de Cristo!
									Llevadla por el mundo como signo del amor del Señor Jesús a la humanidad y anunciad a todos que sólo en 
									Cristo muerto y resucitado hay salvación y redención" (Roma, 22 de abril de 1984). 
								</h2>
						
												
							</div>
							<div class="col-sm-4 feature-block">
								<img class="img-responsive center-block" src="<?php echo base_url();?>images/cruz.jpg" width="250" height="auto"/>
							</div>
							  
						</div>
						
						<div class="container">
								<div class="row">
										<div class="form-group">
											<div class="col-lg-1">
											   
											</div>
											 <div class="col-lg-3 ">
												 
											</div>
											<div class="col-lg-1">
											   
											</div>
											 <div class="col-lg-3 ">
												   
											</div>
										</div>                      
								 </div>
								 <div class="row">
										<div class="form-group">
											<div class="col-lg-1">
											   
											</div>
											 <div class="col-lg-3 ">
												 
											</div>
											<div class="col-lg-1">
											   
											</div>
											 <div class="col-lg-3 ">
												   
											</div>
										</div>                      
								 </div>
						</div>
						<div class="container">
								<div class="row">
										<div class="form-group">
											<div class="col-lg-1">
											   
											</div>
											 <div class="col-lg-3 ">
												 
											</div>
											<div class="col-lg-1">
											   
											</div>
											 <div class="col-lg-3 ">
												   
											</div>
										</div>                      
								 </div>
								 <div class="row">
										<div class="form-group">
											<div class="col-lg-1">
											   
											</div>
											 <div class="col-lg-3 ">
												 
											</div>
											<div class="col-lg-1">
											   
											</div>
											 <div class="col-lg-3 ">
												   
											</div>
										</div>                      
								 </div>
						</div>
						
						<div class="row">
								<div class="feature-block col-sm-12">
									<h2  style="color:#fff" align="center">
												<b>ICONO DE NUESTRA SEÑORA SALUS POPULI ROMANI</b>
									</h2>
								</div>
						</div>
						
						
						
						
						<div class="row">
							<div class="col-sm-3 feature-block">
								<img class="img-responsive center-block" src="<?php echo base_url();?>images/senora.jpg" width="400" height="auto"/>
							</div>

							<div class="feature-block col-sm-7">
							 
								
								
								<h2  style="color:#fff" align="justify">
								
									Desde la XV Jornada Mundial de la Juventud celebrada en Roma durante el Jubileo de 2000, San Juan Pablo II declaró 
									a esta advocación mariana como Patrona de las Jornadas Mundiales de la Juventud, y desde entonces una réplica del 
									icono acompaña a la Cruz de los Jóvenes, que preside las jornadas desde la primera (año 1984).
									La imagen de Nuestra Señora Salus Populi Romani ha estado presente en las jornadas de Roma (Jubileo 2000), 
									Toronto (2002), Colonia (2005), Sidney (2008), Madrid(2011), Río de Janeiro (2013) y Cracovia (2016).


								</h2>
							
							 
							
												
							</div>
							  
						</div>
						
						<div class="container">	
						<a href="https://www.youtube.com/watch?v=tdI-15_viMk"><img class="img-responsive center-block" src="<?php echo base_url();?>images/video.png" width="120" height="auto"/></a>
				
						</div> 
						
						
						<a href="https://panama2019.pa/es/home/"><h1><P ALIGN=center><b>PAGINA OFICIAL DE LA JORNADA MUNDIAL DE LA JUVENTUD PANAMA 2019</b>  </p> </h1></a>
						<div class="container">
								<div class="row">
										<div class="form-group">
											<div class="col-lg-1">
											   
											</div>
											 <div class="col-lg-3 ">
												 
											</div>
											<div class="col-lg-1">
											   
											</div>
											 <div class="col-lg-3 ">
												   
											</div>
										</div>                      
								 </div>
								 <div class="row">
										<div class="form-group">
											<div class="col-lg-1">
											   
											</div>
											 <div class="col-lg-3 ">
												 
											</div>
											<div class="col-lg-1">
											   
											</div>
											 <div class="col-lg-3 ">
												   
											</div>
										</div>                      
								 </div>
						</div>
						
            </div>
    </div>	


  
</section>
</header>



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