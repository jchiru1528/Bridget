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


if (parroquia =="SELECIONE EL FORMULARIO" )
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
                                <li ><a href="#"><b>Inicio</b></a>
								   <ul class="dropdown-menu">
                                            <li><a href="<?php echo site_url()?>jmj"><b>Video Promocional De La Diócesis</b></a></li>
                                            <li><a href="<?php echo site_url()?>palabras"><b>Mensaje de Monseñor</b></a></li>                                         
                                        </ul>
                                 </li>
                                <li><a href="<?php echo site_url()?>noticias"><b>Noticias</b></a></li>
								<li><a href="<?php echo site_url()?>info"><b>JMJ</b></a></li>
								<li><a href="#"><b>Días en las Diócesis</b></a>
								 <ul class="dropdown-menu">
                                            <li><a href="<?php echo site_url()?>razon"><b>Razón de ser</b> </a></li>
                                            <li><a href="<?php echo site_url()?>info_logo"><b>Logo de los DED Colón Kuna yala</b> </a></li>
											<li><a href="<?php echo site_url()?>parroquias"><b>Parroquias </b></a></li>
											<li><a href="<?php echo site_url()?>historia"><b>Historia de la Diócesis</b>  </a></li>
                                </ul>
                                </li>
								<li class="active"><a href="#"><b>Inscripciones o registro</b></a>
								 <ul class="dropdown-menu">
                                            <li><a href="<?php echo site_url()?>registrate"><b>Formulario Para Voluntarios</b></a></li>
                                            <li><a href="<?php echo site_url()?>formulario2"><b>Formulario Para Peregrinos</b></a></li>
											<li><a href="<?php echo site_url()?>formulario3"><b>Festival de la Juventud</b></a></li>
											<li><a href="<?php echo site_url()?>formulario4"><b>Inscripción Dias en las Diócesis</b></a></li>
											<li class="active" ><a href="<?php echo site_url()?>/verificate"><b>Verifícate</b></a></li>
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



    <div  class="grey-content">		


	
			<div class="container">	
					 <img class="img-responsive center-block" src="<?php echo base_url();?>images/paginas/verifica.png" width="500" height="auto"/>
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
								<h2 style="color:#000"><P align="left"><b></b> </h2> 
								<div class="form-group">
								 <div class="col-lg-2">
                               
									</div>
									 <div class="col-lg-1">
									   <h4 style="color:#000"><P align="left"><b>ID :</b> </h4>
									</div>
									   <div class="col-lg-5">
										<input name="cedula" type="text" class="form-control" id="cedula" placeholder="COLOQUE EL ID DEL FORMULARIO." maxlength="30">    	
									   </div> 
								  
								</div>  
                            </div>
							<div class="row">
								<div class="form-group">
									<div class="col-lg-2">
									</div>
                                  <div class="col-lg-1">
                                   <h4 style="color:#000"><P align="left"><b>Formulario:</b> </h4>
                                  </div>
						           <div class="col-lg-5">
							        <select class="form-control" id="comboparroquia" name="comboparroquia" placeholder="Selecione El Formulario">
												 <option selected>SELECIONE EL FORMULARIO</option>
												 <option value="1">FORMULARIO PARA VOLUNTARIOS</option>
												 <option value="2">FORMULARIO PARA PEREGRINOS</option>
												 <option value="3">FESTIVAL DE LA JUVENTUD</option>
												 <option value="4">INSCRIPCIÓN DÍAS EN LAS DIÓCESIS</option>
									</select> 	
                                   </div> 
								  
								</div>  
                            </div>
				         
						 <div class="row" align="center">
                            <div class="col-md-12">
                                <input  type="submit" data-loading-text="Loading..." class="btn btn-default btn-lg" value="Enviar Información">
                            </div>
                        </div>

						  </form>
					</div>
                     <div class="container">
						<div class="row" align="center">
                            <div class="col-md-12">
                                &nbsp
                            </div>
                        </div>
						<div class="row" align="center">
                            <div class="col-md-12">
                                &nbsp
                            </div>
                        </div>
						<div class="row" align="center">
                            <div class="col-md-12">
                                &nbsp
                            </div>
                        </div>	
                        <div class="row" align="center">
                            <div class="col-md-12">
                                &nbsp
                            </div>
                        </div>
						<div class="row" align="center">
                            <div class="col-md-12">
                                &nbsp
                            </div>
                        </div>
						<div class="row" align="center">
                            <div class="col-md-12">
                                &nbsp
                            </div>
                        </div>
                        <div class="row" align="center">
                            <div class="col-md-12">
                                &nbsp
                            </div>
                        </div>
						<div class="row" align="center">
                            <div class="col-md-12">
                                &nbsp
                            </div>
                        </div>
						<div class="row" align="center">
                            <div class="col-md-12">
                                &nbsp
                            </div>
                        </div>		
						<div class="row" align="center">
                            <div class="col-md-12">
                                &nbsp
                            </div>
                        </div>
						<div class="row" align="center">
                            <div class="col-md-12">
                                &nbsp
                            </div>
                        </div>
						<div class="row" align="center">
                            <div class="col-md-12">
                                &nbsp
                            </div>
                        </div>	
					<div class="row" align="center">
                            <div class="col-md-12">
                                &nbsp
                            </div>
                        </div>
						<div class="row" align="center">
                            <div class="col-md-12">
                                &nbsp
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