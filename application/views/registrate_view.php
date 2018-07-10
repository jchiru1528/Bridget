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
var nombre, cedula, apellido ,combosexo;
nombre = document.getElementById("nombre").value;
combosexo= document.getElementById("combosexo").value;
cedula = document.getElementById("cedula").value;
apellido= document.getElementById("apellido").value;

if (nombre =="" || nombre==null)
{
	alert("No Puede Dejar el Nombre en blanco")
	valor++;
	return false;
}
else if (combosexo == "Seleccione El Sexo")
{
	alert("Seleccione Su Sexo")
	valor++;
	return false;
}
else if (cedula == "" || cedula==null )
{
	alert("No Puede Dejar La Cedula en blanco")
	valor++;
	return false;
}

else if (apellido == "" || apellido==null )
{
	alert("No Puede Dejar El Apellido En Blanco")
	valor++;
	return false;
}



 if (valor==0)
 {return true;}	 
}
</script> 
<body class="home">
<header id="header">
    <div class="container">
            <div class="row">
                <div class="col-sm-8 top-info hidden-xs">
                  </div>
                
                </div>
    </div>
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
                                            <li class="active"><a href="<?php echo site_url()?>registrate"><b>Formulario Para Voluntarios</b></a></li>
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
    


<div class="grey-content">				  
				<div class="container">	
						<img class="img-responsive center-block" src="<?php echo base_url();?>images/paginas/voluntariado.png" width="500" height="auto"/>
				</div> 
	 <?php if ($error==1) {?>			
			<div class="panel panel-success">
                 <div  ALIGN=center class="panel-heading"><h4><?php echo $mensaje ?></h4> </div>   
			</div>			
    <?php  }?>	

    <div class="container">
			<?php $attributes = array('class' => 'form ', 'novalidate'=>'novalidate', 'role' => 'form','id' => 'form','onsubmit' => 'return validacion()');
				echo form_open('insertar/insertar_dato', $attributes );  ?>
		<div class="container">
									<div class="row">
										<h2 style="color:#fff"><P align="left"><b>DATOS PERSONALES</b> </h2> 
										<div class="form-group">
											<div class="col-lg-1 ">
											   <h4 style="color:#fff"><P align="left"><b>Parroquia</b> </h4>
											</div>
											<div class="col-lg-6 ">
													<select class="form-control" id="parroquia" name="parroquia" placeholder="Seleccione la Parroquia">
														 <option selected>Seleccione la Parroquia</option>
														 <option value="1">Cuasi parroquia San Lorenzo</option>
														 <option value="2">Cuasi parroquia Santo Cristo de Esquipulas</option>
														 <option value="3">Parroquia Inmaculada Concepción  </option>
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
									</div>
										<div class="row">
											<div class="form-group">
												<div class="col-lg-1">
												   <h4 style="color:#fff"><P align="left"><b>Nombre:</b> </h4>
												</div>
												 <div class="col-lg-3 ">
													<input name="nombre" type="text" class="form-control" id="nombre" placeholder="Nombre" maxlength="30">
												</div>
												 <div class="col-lg-1 ">
												   <h4 style="color:#fff"><P align="left"><b>Apellido:</b> </h4>
												</div>
												 <div class="col-lg-3 ">
													<input name="apellido" type="text" class="form-control" id="apellido" placeholder="Apellido" maxlength="30">
												</div>
												 <div class="col-lg-1 ">
												   <h4 style="color:#fff"><P align="left"><b>Sexo:</b> </h4>
												</div>
												 <div class="col-lg-3 ">
													<select class="form-control" id="combosexo" name="combosexo">
														 <option selected>Seleccione El Sexo</option>
														 <option value="M">Masculino</option>
														 <option value="F">Femenino</option>
													</select>
												</div>
											</div>
										</div>
										<div class="row">
											 <div class="col-lg-1">
												   <h4 style="color:#fff"><P align="left"><b>Cédula:</b> </h4>
											 </div>
											 <div class="col-lg-3 ">
													<input name="cedula" type="text" class="form-control" id="cedula" placeholder="Cedula." maxlength="30">    	
											</div>
											<div class="col-lg-3">
												   <h4 style="color:#fff"><P align="left"><b>F. de Nacimiento (MM-DD-YYYY):</b> </h4>
											 </div>
											 <div class="col-lg-3">
													<input name="fecha" type="date" class="form-control" id="fecha" placeholder="Fecha de Nacimiento."  maxlength="12">  	
											</div>
										</div>
										<div class="row">
											 <div class="col-lg-3">
												   <h4 style="color:#fff"><P align="left"><b>Domicilio/Dirección Completa:</b> </h4>
											 </div>
											 <div class="col-lg-8">
												<input name="domicilio" type="text" class="form-control col-sm-1"  id="domicilio" placeholder="Dirección Completa."  maxlength="100">   	
											</div>
										</div>
										<div class="row">
											<div class="form-group">
												<div class="col-lg-1 ">
												   <h4 style="color:#fff"><P align="left"><b>Teléfono:</b> </h4>
												</div>
												 <div class="col-lg-3 ">
													<input name="telefono" type="text" class="form-control" id="telefono" placeholder="Teléfono" maxlength="20">
												</div>
												 <div class="col-lg-1 ">
												   <h4 style="color:#fff"><P align="left"><b>Celular:</b> </h4>
												</div>
												 <div class="col-lg-3 ">
													<input name="celular" type="text" class="form-control" id="celular" placeholder="Celular" maxlength="20">
												</div>
												 <div class="col-lg-1 ">
												   <h4 style="color:#fff"><P align="left"><b>Email:</b> </h4>
												</div>
												 <div class="col-lg-3 ">
													<input name="email" type="text" class="form-control" id="email" placeholder="email" maxlength="50">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="form-group">
												<div class="col-lg-1">
												   <h4 style="color:#fff"><P align="left"><b>T. de Doc:</b> </h4>
												</div>
												 <div class="col-lg-3 ">
													<input name="tipodoc" type="text" class="form-control" id="tipodoc" placeholder="Tipo de Documento" maxlength="30">
												</div>
												 <div class="col-lg-1">
												   <h4 style="color:#fff"><P align="left"><b>N. d Doc:</b> </h4>
												</div>
												 <div class="col-lg-3 ">
													<input name="numdoc" type="text" class="form-control" id="numdoc" placeholder="Número de Documento">
												</div>
												 <div class="col-lg-1 ">
												   <h4 style="color:#fff"><P align="left"><b>T. de Sangre:</b> </h4>
												</div>
												 <div class="col-lg-3 ">
													<select class="form-control" id="combosangre" name="combosangre">
														 <option selected>Seleccione Su Tipo de Sangre</option>
														 <option value="1">O-</option>
														 <option value="2">O+</option>
														 <option value="3">A−</option>
														 <option value="4">A+</option>
														 <option value="5">B−</option>
														 <option value="6">B+</option>
														 <option value="7">AB−</option>
														 <option value="8">AB+</option>
													</select>
												</div>
											</div>
										</div>
						
						<!--<![Area]-->
										<div class="row">
											<h2 style="color:#fff"><P align="left"><b>Área</b> </h2> 
											<div class="form-group">
												<div class="col-lg-3">
													<h4 style="color:#fff"> 
														 <div class="form-check">
															 <label class="form-check-label">
																<input type="checkbox" class="form-check-input" id ="preparacion" name="preparacion"  value="1">
															   Preparación Pastoral 
															</label>
														 </div>
													</h4> 		 
												</div>
												<div class="col-lg-3">
													<h4 style="color:#fff"> 
														 <div class="form-check">
															 <label class="form-check-label">
																<input type="checkbox" class="form-check-input" id="acogida" name="acogida" value="1">
																	Acogida
															</label>
														 </div>
													</h4> 		 
												</div>
												<div class="col-lg-3">
													<h4 style="color:#fff"> 
														 <div class="form-check">
															 <label class="form-check-label">
																<input type="checkbox" class="form-check-input" id="voluntarios" name="voluntarios"  value="1">
																	Discapacitados
															</label>
														 </div>
													</h4> 		 
												</div>
												<div class="col-lg-3">
													<h4 style="color:#fff"> 
														 <div class="form-check">
															 <label class="form-check-label">
																<input type="checkbox" class="form-check-input"id="logistica"  name="logistica"  value="1">
																	Logística
															</label>
														 </div>
													</h4> 		 
												</div>								
											</div>
										</div>
										<div class="row">
											<div class="form-group">
												<div class="col-lg-3">
													<h4 style="color:#fff"> 
														 <div class="form-check">
															<label class="form-check-label">
																<input type="checkbox" class="form-check-input" id="catequesis" name="catequesis"  value="1">
																	Catequesis 
															</label>
														</div>
													</h4> 		 
												</div>
												<div class="col-lg-3">
													<h4 style="color:#fff"> 
														 <div class="form-check">
															<label class="form-check-label">
																<input type="checkbox" class="form-check-input" id="festival"  name="festival"  value="1">
																	Festival de la Juventud
															</label>
														 </div>
													</h4> 		 
												</div>
												
																			
											</div>
										</div>
										
										
										<div class="row">
											<h2 style="color:#fff"><P align="left"><b>Responsable de Área</b> </h2> 
											<div class="form-group">
												<div class="col-lg-1">
													<h3 style="color:#fff"> 
														<div class="form-check">
														<label class="form-check-label">
															<input type="radio" class="form-check-input" name="optionsRadios" id="si" value="1">
															SI
														  </label>
														</div>
													</h3>											
													</div>
													<div class="col-lg-3">
													<h3 style="color:#fff"> 
														<div class="form-check">
														<label class="form-check-label">
															<input type="radio" class="form-check-input" name="optionsRadios" id="no" value="1">
															NO
														  </label>
														</div>
													</div>
													</h3>
										
											</div>
										</div>
										
										
										
										
										
										
										
										
						<!--<![Disponibilidad]-->
										<div class="row" >
											<h2 style="color:#fff"><P align="left"><b>Disponibilidad</b> </h2> 
											<div class="form-group">
												<div class="col-lg-3">
													<h4 style="color:#fff"> 
														 <div class="form-check">
															 <label class="form-check-label">
															   <input type="checkbox" class="form-check-input" id="dispo1" name="dispo1" value="1">
																	Fines de Semana
															</label>
														 </div>
													</h4> 		 
												</div>
												<div class="col-lg-3">
													<h4 style="color:#fff"> 
														 <div class="form-check">
															 <label class="form-check-label">
																	<input type="checkbox" class="form-check-input" id="dispo2"  name="dispo2" value="1">
																		De Lunes a Viernes
															</label>
														 </div>
													</h4> 		 
												</div>
												<div class="col-lg-3">
													<h4 style="color:#fff"> 
														 <div class="form-check">
															 <label class="form-check-label">
																<input type="checkbox" class="form-check-input" id="dispo3" name="dispo3" value="1">
																	Toda la Semana
															</label>
														 </div>
													</h4> 		 
												</div>							
											</div>
										</div>
										<div class="row">
											<div class="form-group">
												<div class="col-lg-3">
													<h4 style="color:#fff"> 
														 <div class="form-check">
															 <label class="form-check-label">
															   <input type="checkbox" class="form-check-input" id="horarioM"  name="horarioM" value="1">
																	Mañana 
															</label>
														 </div>
													</h4> 		 
												</div>
												<div class="col-lg-3">
													<h4 style="color:#fff"> 
														 <div class="form-check">
															 <label class="form-check-label">
																	<input type="checkbox" class="form-check-input" id="horarioT" name="horarioT"  value="1">
																		Tarde 
															</label>
														 </div>
													</h4> 		 
												</div>
												<div class="col-lg-3">
													<h4 style="color:#fff"> 
														 <div class="form-check">
															 <label class="form-check-label">
																<input type="checkbox" class="form-check-input" id="horarioI" name="horarioI" value="1">
																	Indiferente
															</label>
														 </div>
													</h4> 		 
												</div>							
											</div>
										</div>
						<!--<![Disponibilidad]-->
										<div class="row">
											<h2 style="color:#fff"><P align="left"><b>Voluntariado</b> </h2> 
											<div class="form-group">
												<div class="col-lg-3">
													<h4 style="color:#fff"> 
														 <div class="form-check">
															 <label class="form-check-label">
															   <input type="checkbox" class="form-check-input"  id="volun1"  name="volun1" value="1">
																	Antes de la JMJ
															</label>
														 </div>
													</h4> 		 
												</div>
												<div class="col-lg-3">
													<h4 style="color:#fff"> 
														 <div class="form-check">
															 <label class="form-check-label">
																	<input type="checkbox" class="form-check-input" id="volun2"  name="volun2" value="1">
																		Después de la JMJ
															</label>
														 </div>
													</h4> 		 
												</div>
												<div class="col-lg-3">
													<h4 style="color:#fff"> 
														 <div class="form-check">
															 <label class="form-check-label">
																<input type="checkbox" class="form-check-input"  id="volun3" name="volun3" value="1">
																	Todo el Tiempo
															</label>
														 </div>
													</h4> 		 
												</div>							
											</div>
										</div>
						<!--<![Disponibilidad]-->
										<div class="row">
											<h2 style="color:#fff"><P align="left"><b>Estudios</b> </h2> 
											<div class="form-group">
												<div class="col-lg-3">
													<h4 style="color:#fff"> 
														 <div class="form-check">
															 <label class="form-check-label">
															   <input type="checkbox" class="form-check-input" id="estudio1" name="estudio1"  value="1">
																	Estudios Básicos
															</label>
														 </div>
													</h4> 		 
												</div>
												<div class="col-lg-3">
													<h4 style="color:#fff"> 
														 <div class="form-check">
															 <label class="form-check-label">
																	<input type="checkbox" class="form-check-input" id="estudio2" name="estudio2" value="1">
																		Bachiller
															</label>
														 </div>
													</h4> 		 
												</div>
												<div class="col-lg-3">
													<h4 style="color:#fff"> 
														 <div class="form-check">
															 <label class="form-check-label">
																<input type="checkbox" class="form-check-input"  id="estudio3" name="estudio3" value="1">
																	Formación Profesional
															</label>
														 </div>
													</h4> 		 
												</div>							
											</div>
										</div>
										<div class="row">
											<div class="form-group">
												<div class="col-lg-3">
													<h4 style="color:#fff"> 
														 <div class="form-check">
															 <label class="form-check-label">
															   <input type="checkbox" class="form-check-input" id="estudio4"  name="estudio4" value="1">
																	Técnico
															</label>
														 </div>
													</h4> 		 
												</div>
												<div class="col-lg-3">
													<h4 style="color:#fff"> 
														 <div class="form-check">
															 <label class="form-check-label">
																	<input type="checkbox" class="form-check-input" id="estudio5" name="estudio5" value="1">
																		Licenciatura  o Ingeneria
															</label>
														 </div>
													</h4> 		 
												</div>
												<div class="col-lg-3">
													<h4 style="color:#fff"> 
														 <div class="form-check">
															 <label class="form-check-label">
																<input type="checkbox" class="form-check-input"  id="otroest" name="otroest"  value="1">
																	Otros
															</label>
														 </div>
													</h4> 		 
												</div>							
											</div>
										</div>
						<!--<![Idiomas]-->
										<div class="row">
											<h2 style="color:#fff"><P align="left"><b>Idiomas</b> </h2> 
											<div class="form-group">
												<div class="col-lg-2">
													<h4 style="color:#fff"> 
														 <div class="form-check">
															 <label class="form-check-label">
															   <input type="checkbox" class="form-check-input" id="idioma1"  name="idioma1"  value="1">
																	Ingles
															</label>
														 </div>
													</h4> 		 
												</div>
												<div class="col-lg-2">
													<select class="form-control" id="comboIngles" name="comboIngles">
														 <option selected>Seleccione el Nivel</option>
														 <option value="1">Bajo</option>
														 <option value="2">Medio</option>
														 <option value="3">Alto</option>
													</select>		 
												</div>						
											</div>
										</div>
										<div class="row">
											<div class="form-group">
												<div class="col-lg-2">
													<h4 style="color:#fff"> 
														 <div class="form-check">
															 <label class="form-check-label">
															  <input type="checkbox" class="form-check-input" id="idioma2" name="idioma2" value="1">
																Francés
															</label>
														 </div>
													</h4> 		 
												</div>
												<div class="col-lg-2">
													<select class="form-control" id="comboFrances" name="comboFrances">
														 <option selected>Seleccione el Nivel</option>
														 <option value="1">Bajo</option>
														 <option value="2">Medio</option>
														 <option value="3">Alto</option>
													</select>		 
												</div>						
											</div>
										</div>
										<div class="row">
											<div class="form-group">
												<div class="col-lg-2">
													<h4 style="color:#fff"> 
														 <div class="form-check">
															 <label class="form-check-label">
															   <input type="checkbox" class="form-check-input"  id="idioma3"  name="idioma3" value="1">
																	Alemán
															</label>
														 </div>
													</h4> 		 
												</div>
												<div class="col-lg-2">
													<select class="form-control" id="comboAleman" name="comboAleman">
														 <option selected>Seleccione el Nivel</option>
														 <option value="1">Bajo</option>
														 <option value="2">Medio</option>
														 <option value="3">Alto</option>
													</select>		 
												</div>						
											</div>
										</div>
										<div class="row">
											<div class="form-group">
												<div class="col-lg-2">
													<h4 style="color:#fff"> 
														 <div class="form-check">
															 <label class="form-check-label">
															  <input type="checkbox" class="form-check-input" id="idioma4" name="idioma4" value="1">
																	Italiano
															</label>
														 </div>
													</h4> 		 
												</div>
												<div class="col-lg-2">
													<select class="form-control" id="comboItaliano" name="comboItaliano">
														 <option selected>Seleccione el Nivel</option>
														 <option value="1">Bajo</option>
														 <option value="2">Medio</option>
														 <option value="3">Alto</option>
													</select>		 
												</div>						
											</div>
										</div>
										<div class="row">
											<div class="form-group">
												<div class="col-lg-2">
													<h4 style="color:#fff"> 
														 <div class="form-check">
															 <label class="form-check-label">
															  <input type="checkbox" class="form-check-input" id="idioma5" name="idioma5" value="1">
																	Portugués
															</label>
														 </div>
													</h4> 		 
												</div>
												<div class="col-lg-2">
													<select class="form-control" id="comboPortu" name="comboPortu">
														 <option selected>Seleccione el Nivel</option>
														 <option value="1">Bajo</option>
														 <option value="2">Medio</option>
														 <option value="3">Alto</option>
													</select>		 
												</div>						
											</div>
										</div>
										<div class="row">
											<div class="form-group">
												<div class="col-lg-2">
													<h4 style="color:#fff"> 
														 <div class="form-check">
															 <label class="form-check-label">
																<input type="checkbox" class="form-check-input" id="idioma6" name="idioma6" value="1">
																	Otro
															</label>
														 </div>
													</h4> 		 
												</div>
												<div class="col-lg-2">
													<select class="form-control" id="comboOtro" name="comboOtro">
														 <option selected>Seleccione el Nivel</option>
														 <option value="1">Bajo</option>
														 <option value="2">Medio</option>
														 <option value="3">Alto</option>
													</select>		 
												</div>
												<div class="col-lg-2">
													<input name="idioma6" type="text" class="form-control" id="idioma7" placeholder="Indique el Otro Idioma">		 
												</div>								
											</div>
										</div>
						<!--<![Experiencia]-->
										<div class="row">
											<h2 style="color:#fff"><P align="left"><b>Experiencia</b> </h2> 
											<div class="form-group">
												<div class="col-lg-3">
													<h4 style="color:#fff"> 
														 <div class="form-check">
															 <label class="form-check-label">
															   <input type="checkbox" class="form-check-input" id="administracion" name="administracion" value="1">
																	Administración
															</label>
														 </div>
													</h4> 		 
												</div>
												<div class="col-lg-3">
													<h4 style="color:#fff"> 
														 <div class="form-check">
															 <label class="form-check-label">
																<input type="checkbox" class="form-check-input" id="turismo"  name="turismo" value="1">
																	Turismo
															</label>
														 </div>
													</h4> 		 
												</div>
												<div class="col-lg-3">
													<h4 style="color:#fff"> 
														 <div class="form-check">
															 <label class="form-check-label">
																<input type="checkbox" class="form-check-input" id="informatica" name="informatica" value="1">
																	Informática
															</label>
														 </div>
													</h4> 		 
												</div>
												<div class="col-lg-3">
													<h4 style="color:#fff"> 
														 <div class="form-check">
															 <label class="form-check-label">
																<input type="checkbox" class="form-check-input"  id="seguridad" name="seguridad" value="1">
																	Seguridad
															</label>
														 </div>
													</h4> 		 
												</div>								
											</div>
										</div>
										<div class="row">
											<div class="form-group">
												<div class="col-lg-3">
													<h4 style="color:#fff"> 
														 <div class="form-check">
															 <label class="form-check-label">
															   <input type="checkbox" class="form-check-input" id="educacion" name="educacion" value="1">
																Educación
															</label>
														 </div>
													</h4> 		 
												</div>
												<div class="col-lg-3">
													<h4 style="color:#fff"> 
														 <div class="form-check">
															 <label class="form-check-label">
																<input type="checkbox" class="form-check-input"  id="sanidad" name="sanidad" value="1">
																	Sanidad
															</label>
														 </div>
													</h4> 		 
												</div>
												<div class="col-lg-3">
													<h4 style="color:#fff"> 
														 <div class="form-check">
															 <label class="form-check-label">
																<input type="checkbox" class="form-check-input"  id="traduccion" name="traduccion" value="1">
																	Traducción
															</label>
														 </div>
													</h4> 		 
												</div>
												<div class="col-lg-3">
													<h4 style="color:#fff"> 
														 <div class="form-check">
															 <label class="form-check-label">
																<input type="checkbox" class="form-check-input"  id="recursohumano" name="recursohumano" value="1">
																	Recursos Humano
															</label>
														 </div>
													</h4> 		 
												</div>								
											</div>
										</div>
										<div class="row">
											<div class="form-group">
												<div class="col-lg-3">
													<h4 style="color:#fff"> 
														 <div class="form-check">
															 <label class="form-check-label">
															  <input type="checkbox" class="form-check-input"  id="conducir" name="conducir" value="1">
																Lic. De Conducir 
															</label>
														 </div>
													</h4> 		 
												</div>
												<div class="col-lg-3">
													<h4 style="color:#fff"> 
														 <div class="form-check">
															 <label class="form-check-label">
																<input type="checkbox" class="form-check-input" id="auto" name="auto" value="1">
																Tiene Auto
															</label>
														 </div>
													</h4> 		 
												</div>
												<div class="col-lg-3">
													<h4 style="color:#fff"> 
														 <div class="form-check">
															 <label class="form-check-label">
																<input type="checkbox" class="form-check-input" id="discapa"name="discapa" value="1">
																	Exp. Con Discapacitados
															</label>
														 </div>
													</h4> 		 
												</div>
												<div class="col-lg-3">
													<h4 style="color:#fff"> 
														 <div class="form-check">
															 <label class="form-check-label">
																<input type="checkbox" class="form-check-input" id="otro" name="otro" value="1">
																	Otros
															</label>
														 </div>
													</h4> 		 
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