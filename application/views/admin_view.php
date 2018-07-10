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
                        <div class="navbar-collapse collapse">
                            <ul class="nav navbar-nav">
                                <li ><a href="#">Inicio</a>
								   <ul class="dropdown-menu">
                                            <li><a href="<?php echo site_url()?>/jmj">Video Promocional De La Diócesis</a></li>
                                            <li><a href="<?php echo site_url()?>/palabras">Mensaje de Monseñor</a></li>                                         
                                        </ul>
                                 </li>
                                <li><a href="<?php echo site_url()?>/noticias">Noticias</a></li>
								<li><a href="<?php echo site_url()?>/info">JMJ</a></li>
								<li><a href="#">Días en las Diócesis</a>
								 <ul class="dropdown-menu">
                                            <li><a href="<?php echo site_url()?>/razon">Razón de ser </a></li>
                                            <li><a href="<?php echo site_url()?>/info_logo">Logo de los DED Colón Kuna yala </a></li>
											<li><a href="<?php echo site_url()?>/parroquias">Parroquias </a></li>
											<li><a href="<?php echo site_url()?>/historia">Historia de la Diócesis  </a></li>
                                </ul>
                                </li>
								<li><a href="#">Inscripciones o registro</a>
								 <ul class="dropdown-menu">
                                            <li><a href="<?php echo site_url()?>/registrate">Formulario Para Voluntarios</a></li>
                                            <li><a href="<?php echo site_url()?>/formulario2">Formulario Para Peregrinos</a></li>
											<li><a href="<?php echo site_url()?>/formulario3">Festival de la Juventud</a></li>
											<li ><a href="<?php echo site_url()?>/verificate">Verifícate</a></li>
                                </ul>
                                </li>
								<li ><a href="<?php echo site_url()?>/preguntas">Preguntas frecuentes</a></li>
								<li><a href="<?php echo site_url()?>/contacto">Contáctenos</a></li>
								<li class="active" ><a href="<?php echo site_url()?>/admin">Adminstración</a></li>
                            </ul>
                        </div>
                    </div>
					<?php include('redesSociales.php') ?>
					
                </div>
				
            </div>
			
			
			
        </div>
		
    </div>


  

<section class="wrapper">



    <div  class="grey-content">		


	
			<div class="container">	
					<h2 style="color:#FFF"><P align="center"><b>ADMINISTRACIÓN </b> </h2> 
			</div> 
				  <?php if ($error==1) {?>			
						<div class="panel panel-success">
							 <div  ALIGN=center class="panel-heading"><h4><?php echo $mensaje ?></h4> </div>   
						</div>			
				<?php  }?>			
				
            <div class="container">
                
                   	<?php $attributes = array('class' => 'form ', 'novalidate'=>'novalidate', 'role' => 'form','id' => 'form','onsubmit' => 'return validacion()');
					echo form_open('consulta/buscar', $attributes );  ?>

                    <div class="container">
							<div class="row">
								<div class="col-md-6 col-md-offset-3">
									<div class="panel panel-login">
										
										<div class="panel-body">
											<div class="row">
												<div class="col-lg-12">
													
														<div class="form-group">
															<input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Usuario" value="">
														</div>
														<div class="form-group">
															<input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Contraseña">
														</div>
														<div class="form-group text-center">
																		 <div class="col-md-12">
																<input  type="submit" data-loading-text="Loading..." class="btn btn-default btn-lg" value="Iniciar Seción">
															</div>
															
														</div>
														
													
												
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
					</div>
									
					</form>
					
                    
            </div>
			<?php include('footer2.php') ?>
			<?php include('footer2.php') ?>
				<?php include('footer2.php') ?>
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