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
var nombre, contacto,miembros;
nombre = document.getElementById("nombre").value;
contacto = document.getElementById("contacto").value;
miembros= document.getElementById("miembros").value;

if (nombre =="" || nombre==null)
{
	alert("No Puede Dejar el Nombre del cantante o Grupo en Blanco")
	valor++;
	return false;
}

else if (contacto == "" || contacto==null )
{
	alert("No Puede Dejar La Persona de Contacto en blanco")
	valor++;
	return false;
}
else if (miembros == "" || miembros==null )
{
	alert("No Puede Dejar Total de miembros en blanco")
	valor++;
	return false;
}


 if (valor==0)
 {return true;}	 
}


function valida(e){
    tecla = (document.all) ? e.keyCode : e.which;

    //Tecla de retroceso para borrar, siempre la permite
    if (tecla==8){
        return true;
    }
        
    // Patron de entrada, en este caso solo acepta numeros
    patron =/[0-9]/;
    tecla_final = String.fromCharCode(tecla);
    return patron.test(tecla_final);
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
								<li><a href="<?php echo site_url()?>info"><b>JMJ</b></a></li>
								<li><a href="<?php echo site_url()?>razon"><b>Días en las Diócesis</b></a>
								 <ul class="dropdown-menu">
                                            <li><a href="<?php echo site_url()?>info_logo"><b>Logo de los DED Colón Kuna yala</b> </a></li>
											<li><a href="<?php echo site_url()?>parroquias"><b>Parroquias </b></a></li>
											<li><a href="<?php echo site_url()?>historia"><b>Historia de la Diócesis</b>  </a></li>
                                </ul>
                                </li>
								<li class="active"><a href="#"><b>Inscripciones o registro</b></a>
								 <ul class="dropdown-menu">
                                            <li><a href="<?php echo site_url()?>registrate"><b>Formulario Para Voluntarios</b></a></li>
                                            <li><a href="<?php echo site_url()?>formulario2"><b>Formulario Para Peregrinos</b></a></li>
											<li class="active"><a href="<?php echo site_url()?>formulario3"><b>Festival de la Juventud</b></a></li>
											<li><a href="<?php echo site_url()?>formulario4"><b>Inscripción Dias en las Diócesis</b></a></li>
											<li><a href="<?php echo site_url()?>verificate"><b>Verifícate</b></a></li>
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
    
<div class="grey-content">	
			
			
			
			
			<div class="container">	
					 <img class="img-responsive center-block" src="<?php echo base_url();?>images/paginas/festival.png" width="500" height="auto"/>
			</div> 
		     <?php if ($error==1) {?>			
					<div class="panel panel-success">
						<div  ALIGN=center class="panel-heading"><h5><?php echo $mensaje ?></h5> </div>   
					</div>			
			<?php  }?>			
				

    <div class="container">
			<?php $attributes = array('class' => 'form ', 'novalidate'=>'novalidate', 'role' => 'form','id' => 'form','onsubmit' => 'return validacion()');
				echo form_open('insertarC/insertar_dato', $attributes );  ?>
				
				<div class="container">
		                 <div class="row">
								<h2 style="color:#000"><P align="left"><b>INFORMACIÓN DEL PARTICIPANTE</b> </h2> 
								
							</div>
							<div class="row">
								<div class="form-group">
									<div class="col-lg-3">
									   <h4 style="color:#000"><P align="left"><b>Nombre del Cantante o Grupo :</b> </h4>
									</div>
									 <div class="col-lg-7">
										<input name="nombre" type="text" class="form-control" id="nombre" placeholder="Nombre del Cantante o Grupo " maxlength="45">
									</div>
								</div>
							</div>
							
							<div class="row">
								<div class="form-group">
									<div class="col-lg-3">
									   <h4 style="color:#000"><P align="left"><b>Persona De Contacto  :</b> </h4>
									</div>
									 <div class="col-lg-7">
										<input name="contacto" type="text" class="form-control" id="contacto" placeholder="Persona De Contacto " maxlength="45">
									</div>
								</div>
							</div>
							
							<div class="row">
								<div class="form-group">
									<div class="col-lg-3">
									   <h4 style="color:#000"><P align="left"><b>Total De Miembros  :</b> </h4>
									</div>
									 <div class="col-lg-7">
										<input name="miembros" type="text" class="form-control" id="miembros" placeholder="Total De Miembros  " maxlength="45" onkeypress="return valida(event)">
									</div>
								</div>
							</div>
							<div class="row">
									 <div class="col-lg-3">
										   <h4 style="color:#000"><P align="left"><b>Dirección (País, Provincia) :</b> </h4>
									 </div>
									 <div class="col-lg-7">
										<input name="direc" type="text" class="form-control col-sm-1"  id="direc" placeholder="Dirección (País, Provincia)" maxlength="100">   	
									</div>
							</div>
								
							<div class="row">
									 <div class="col-lg-3">
										   <h4 style="color:#000"><P align="left"><b>Teléfonos:</b> </h4>
									 </div>
									 <div class="col-lg-4">
										<input name="telefono1" type="text" class="form-control col-sm-1"  id="telefono1" placeholder="Telefono 1" maxlength="100">   	
									</div>
									<div class="col-lg-3">
										<input name="telefono2" type="text" class="form-control col-sm-1"  id="telefono2" placeholder="Telefono 2" maxlength="100">   	
									</div>
							</div>
								
							<div class="row">
									 <div class="col-lg-3">
										   <h4 style="color:#000"><P align="left"><b>Email:</b> </h4>
									 </div>
									 <div class="col-lg-7">
										<input name="email" type="text" class="form-control" id="email" placeholder="Em@il" maxlength="40">  	
									</div>
							</div>
														
							<div class="row">
									 <div class="col-lg-3">
										   <h4 style="color:#000"><P align="left"><b>Guía Espiritual :</b> </h4>
									 </div>
									 <div class="col-lg-7">
										<input name="guia" type="text" class="form-control" id="guia" placeholder="Guía Espiritual " maxlength="40">  	
									</div>
							</div>
							
							
							<div class="row">
									 <div class="col-lg-3">
										   <h4 style="color:#000"><P align="left"><b>Parroquia:</b> </h4>
									 </div>
									 <div class="col-lg-7">
										<select class="form-control" id="parro" name="parro" placeholder="Seleccione la Parroquia">
											 <option selected>Seleccione la Parroquia</option>
											 <option value="1">Cuasi parroquia San Lorenzo</option>
											 <option value="2">Cuasi parroquia Santo Cristo de Esquipulas</option>
											 <option value="3">Parroquia Inmaculada Concepción de </option>
											 <option value="4">Parroquia Inmaculado Corazón de María</option>
											 <option value="5">Parroquia Jesús Pan de Vida</option>
											 <option value="6">Parroquia María Auxiliadora - Santa Rita abajo
											 <option value="7">Parroquia Medalla Milagrosa</option>
											 <option value="8">Parroquia Niño Jesús de Praga</option>
											 <option value="9">Parroquia Sagrada Familia - Margarita</option>
											 <option value="10">Parroquia Sagrada Familia - Puerto Pilón</option>
											 <option value="11">Parroquia San Francisco Javier </option>
											 <option value="12">Parroquia San Jacinto</option>
											 <option value="13">Parroquia San José</option>
											 <option value="14">Parroquia San Judas Tadeo </option>
											 <option value="15">Parroquia san Vicente de Paúl </option>
											 <option value="16">Parroquia Santa María de Belén - Escobal</option>
											 <option value="17">Parroquia Santa María de Belén -Villa del Caribe</option>
											 <option value="18">Parroquia Santa Rita de Cascia</option>
											 <option value="19">Parroquia Virgen de Fátima</option>
											 <option value="20">Parroquia Virgen de Lourdes</option>
											 <option value="21">Santuario Jesús Nazareno</option>
											 <option value="22">Santuario Nuestra Señora</option>
										</select>  	
									</div>
							</div>
							
							
							<div class="row">
									 <div class="col-lg-3">
										   <h4 style="color:#000"><P align="left"><b>Otra  :</b> </h4>
									 </div>
									 <div class="col-lg-7">
										<input name="otrasparro" type="text" class="form-control" id="otrasparro" placeholder="Otras" maxlength="40">  	
									</div>
							</div>
							
							
							
								
							  <div class="row">
								<h2 style="color:#000"><P align="left"><b>OTROS DATOS</b> </h2> 
								
							</div>
							
							
							<div class="row">
									 <div class="col-lg-3">
										   <h4 style="color:#000"><P align="left"><b>Tiempo De Servicio Musical :</b> </h4>
									 </div>
									 <div class="col-lg-7">
										<input name="tiempo" type="text" class="form-control" id="tiempo" placeholder="Tiempo De Servicio Musical " maxlength="40">  	
									</div>
							</div>
							
							<div class="row">
									 <div class="col-lg-3">
										   <h4 style="color:#000"><P align="left"><b>Géneros Musicales :</b> </h4>
									 </div>
									 <div class="col-lg-7">
										<input name="musica1" type="text" class="form-control" id="musica1" placeholder="Géneros Musicales" maxlength="40">  	
									</div>
							</div>
							<div class="row">
									 <div class="col-lg-3">
										   <h4 style="color:#000"> </h4>
									 </div>
									 <div class="col-lg-7">
										<input name="musica2" type="text" class="form-control" id="musica2" placeholder="Géneros Musicales" maxlength="40">  	
									</div>
							</div>
							
                             <div class="row">
								<h2 style="color:#000"><P align="left"><b>EXPERIENCIA MUSICAL</b> </h2> 
								
							</div>

						<div class="row" >
						    <h3 style="color:#fff" align="center"><b>Explique de manera breve su experiencia musical y alguna de las actividades en las que ha participado </b> </h3> 
			             </div>
						 <div class="row">
                            <div class="form-group">
									<div class="col-lg-12">
										<textarea class="form-control" rows="5" id="message1" name="message1" maxlength="500"></textarea>
									</div>									
                            </div> 
			             </div> 
						 
						 <div class="row" align="center">
                            <div class="col-md-12">
                                <input  type="submit" data-loading-text="Loading..." class="btn btn-default btn-lg" value="Enviar Información">
                            </div>
						</div>
						
						<?php include('footer2.php') ?>
                 </div>
						
				</div>
    </div> 
	
</div>
	
             </form>	
			 
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