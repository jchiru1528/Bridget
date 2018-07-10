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
cedula = document.getElementById("cedula").value;
apellido= document.getElementById("apellido").value;
if (nombre =="" || nombre==null)
{
	alert("No Puede Dejar el Nombre en blanco")
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
                                            <li><a href="<?php echo site_url()?>registrate"><b>Formulario Para Voluntarios</b></a></li>
                                            <li class="active"><a href="<?php echo site_url()?>formulario2"><b>Formulario Para Peregrinos</b></a></li>
											<li><a href="<?php echo site_url()?>formulario3"><b>Festival de la Juventud</b></a></li>
											<li><a href="<?php echo site_url()?>formulario4"><b>Formulario  Internacional</b></a></li>
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
			
		<?php if ($error==1) {?>			
			<div class="panel panel-success">
                 <div  ALIGN=center class="panel-heading"><h4><?php echo $mensaje ?></h4> </div>   
			</div>			
		<?php  }?>			
					
			<div class="container">	
					 <img class="img-responsive center-block" src="<?php echo base_url();?>images/paginas/peregrinos.png" width="400" height="auto"/>
			</div> 
		

    <div class="container">
			<?php $attributes = array('class' => 'form ', 'novalidate'=>'novalidate', 'role' => 'form','id' => 'form','onsubmit' => 'return validacion()');
				echo form_open('insertarB/insertar_dato', $attributes );  ?>
				
				<div class="container">
		                 <div class="row">
								<h2 style="color:#000"><P align="left"><b>INFORMACIÓN PERSONAL</b> </h2> 
								
							</div>
							<div class="row">
								<div class="form-group">
									<div class="col-lg-1">
									   <h4 style="color:#000"><P align="left"><b>Nombre:</b> </h4>
									</div>
									 <div class="col-lg-3 ">
										<input name="nombre" type="text" class="form-control" id="nombre" placeholder="Nombre" maxlength="30">
									</div>
									 <div class="col-lg-1 ">
									   <h4 style="color:#000"><P align="left"><b>Apellido:</b> </h4>
									</div>
									 <div class="col-lg-3 ">
										<input name="apellido" type="text" class="form-control" id="apellido" placeholder="Apellido" maxlength="30">
									</div>
									 <div class="col-lg-1 ">
									  <h4 style="color:#000"><P align="left"><b>Edad:</b> </h4>                                  
									</div>
									 <div class="col-lg-3 ">
										<input name="edad" type="text" class="form-control" id="edad" placeholder="Edad" maxlength="30">
									</div>
								</div>
							</div>
							<div class="row">
									<div class="col-lg-3">
										   <h4 style="color:#000"><P align="left"><b>F. de Nacimiento (MM-DD-YYYY):</b> </h4>
									 </div>
									 <div class="col-lg-3">
										   <input name="fehca_naci" type="date" class="form-control" id="fehca_naci" placeholder="YYYY-MM-DD"> 	
									</div>
								</div>
								<div class="row">
									<div class="form-group">
										<div class="col-lg-1 ">
										   <h4 style="color:#000"><P align="left"><b>Nacionalidad:</b> </h4>
										</div>
										 <div class="col-lg-3 ">
											<input name="nacionalidad" type="text" class="form-control" id="nacionalidad" placeholder="Nacionalidad" maxlength="30">
										</div>
										<!--
										 <div class="col-lg-1 ">
										   <h4 style="color:#000"><P align="left"><b>Número de Pasaporte:</b> </h4>
										</div>
										 <div class="col-lg-3 ">
											<input name="num_pasap" type="text" class="form-control" id="num_pasap" placeholder="Número de Pasaporte" maxlength="60">
										</div>
										 <div class="col-lg-1 ">
										   <h4 style="color:#000"><P align="left"><b>F. de Expiración:</b> </h4>
										</div> 
										 <div class="col-lg-3 ">
											<input name="fecha_expasa" type="text" class="form-control" id="fecha_expasa" placeholder="YYYY-MM-DD"  maxlength="12">
										</div>-->
									</div>
								</div>
								<div class="row">
									<div class="form-group">
										<div class="col-lg-1">
										   <h4 style="color:#000"><P align="left"><b>Cédula:</b> </h4>
										</div>
										 <div class="col-lg-3 ">
											<input name="cedula" type="text" class="form-control" id="cedula" placeholder="Cedula" maxlength="30">
										</div>
										 <div class="col-lg-1">
										   <h4 style="color:#000"><P align="left"><b>Teléfono:</b> </h4>
										</div>
										 <div class="col-lg-3 ">
										  <input name="telefo" type="text" class="form-control" id="telefo" placeholder="Teléfono" maxlength="30">
										</div>
										 <div class="col-lg-1 ">
										   <h4 style="color:#000"><P align="left"><b>Celular:</b> </h4>
										</div>
										 <div class="col-lg-3 ">
											 <input name="Cel" type="text" class="form-control" id="Cel" placeholder="Celular"  maxlength="30">
										</div>
									</div>
								</div>
								<div class="row">
									 <div class="col-lg-1">
										   <h4 style="color:#000"><P align="left"><b>Dirección:</b> </h4>
									 </div>
									 <div class="col-lg-8">
										<input name="direc" type="text" class="form-control col-sm-1"  id="direc" placeholder="Dirección." maxlength="100">   	
									</div>
								</div>
								<div class="row">
									 <div class="col-lg-1">
										   <h4 style="color:#000"><P align="left"><b>Email:</b> </h4>
									 </div>
									 <div class="col-lg-3">
										<input name="email" type="text" class="form-control" id="email" placeholder="email" maxlength="40">  	
									</div>
									<div class="col-lg-1">
										   <h4 style="color:#000"><P align="left"><b>Parroquia:</b> </h4>
									 </div>
									<div class="col-lg-6">
										<select class="form-control" id="parro" name="parro" placeholder="Seleccione la Parroquia">
											 <option selected>Seleccione la Parroquia</option>
											 <option value="1">Cuasi parroquia San Lorenzo</option>
											 <option value="2">Cuasi parroquia Santo Cristo de Esquipulas</option>
											 <option value="3">Parroquia Inmaculada Concepción </option>
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
											 <option value="14">Parroquia san Vicente de Paúl </option>
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
										<div class="form-group">
											<div class="col-lg-1">
											   <h4 style="color:#000"><P align="left"><b>Zona:</b> </h4>
											</div>
											 <div class="col-lg-3 ">
												<input name="vicaria" type="text" class="form-control" id="vicaria" placeholder="Zona" maxlength="80">
											</div>
											 <div class="col-lg-1">
											   <h4 style="color:#000"><P align="left"><b>Diócesis:</b> </h4>
											</div>
											 <div class="col-lg-3 ">
											  <input name="Diocesis" type="text" class="form-control" id="Diocesis" placeholder="Diócesis"  maxlength="40">
											</div>
											 <div class="col-lg-1 ">
											   <h4 style="color:#000"><P align="left"><b>Nivel Académico:</b> </h4>
											</div>
											 <div class="col-lg-3 ">
												 <input name="nivel_acade" type="text" class="form-control" id="nivel_acade" placeholder="Nivel Académico">
											</div>
										</div>
								</div>
								
								<div class="row">
									<div class="form-group">
										<div class="col-lg-1">
										   <h4 style="color:#000"><P align="left"><b>Ocupación:</b> </h4>
										</div>
										 <div class="col-lg-3 ">
											<input name="ocupacion" type="text" class="form-control" id="ocupacion" placeholder="Ocupación"  maxlength="40">
										</div>
										 <div class="col-lg-1">
										   <h4 style="color:#000"><P align="left"><b>Lugar de Estudio o Trabajo:</b> </h4>
										</div>
										 <div class="col-lg-3 ">
											 <input name="ltrabajo" type="text" class="form-control" id="ltrabajo" placeholder="Lugar de Estudio o Trabajo" maxlength="40">
										</div>
										 <div class="col-lg-1 ">
										   <h4 style="color:#000"><P align="left"><b>Dirección:</b> </h4>
										</div>
										 <div class="col-lg-3 ">
											  <input name="direc_estu" type="text" class="form-control" id="direc_estu" placeholder="Dirección" maxlength="70"> 
										</div>
									</div>
								</div>
								<div class="row">
									<div class="form-group">
										<div class="col-lg-3">
										   <h4 style="color:#000"><P align="left"><b>Ha Participado en Alguna JMJ:</b> </h4>
										</div>
										 <div class="col-lg-4">
											 <input name="participo" type="text" class="form-control" id="participo" placeholder="Participo" maxlength="4">
										</div>
									</div> 
								</div>
								<div class="row">
									<div class="form-group">
										 <div class="col-lg-3">
										   <h4 style="color:#000"><P align="left"><b>El Grupo en el que Participó:</b> </h4>
										</div>
										 <div class="col-lg-4">
											  <input name="grupo" type="text" class="form-control" id="grupo" placeholder="Grupo Que Participo">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="form-group">		
										 <div class="col-lg-3">
										   <h4 style="color:#000"><P align="left"><b>Cuál (País y Año):</b> </h4>
										</div>
										 <div class="col-lg-4">
											  <input name="pais_particio" type="text" class="form-control" id="pais_particio" placeholder="País y Año"  maxlength="20">
										</div>
									</div>
								</div>
								<div class="row">
								<div class="form-group">
									<div class="col-lg-3">
									   <h4 style="color:#000"><P align="left"><b>En Caso de Emergencia LLamar A:</b> </h4>
									</div>
									 <div class="col-lg-3 ">
										   <input name="emergencia" type="text" class="form-control" id="emergencia" placeholder="LLamar A"  maxlength="20">
									</div>
								</div>
							</div>
								<div class="row">
									<div class="form-group">
												<div class="col-lg-1">
												   <h4 style="color:#000"><P align="left"><b>Parentesco:</b> </h4>
												</div>
												 <div class="col-lg-3 ">
													   <input  name="parentesco" type="text" class="form-control" id="parentesco" placeholder="Parentesco"  maxlength="20">
												</div>
												<div class="col-lg-1">
												   <h4 style="color:#000"><P align="left"><b>Teléfono:</b> </h4>
												</div>
												 <div class="col-lg-3 ">
													   <input  name="telefo_emerge" type="text" class="form-control" id="telefo_emerge" placeholder="Teléfono"  maxlength="20">
												</div>
											</div>                      
										</div>
										<div class="row">
											<div class="form-group">
												<div class="col-lg-3">
												   <h4 style="color:#000"><P align="left"><b>¿Padece Alguna Enfermedad?</b> </h4>
												</div>
												 <div class="col-lg-2">
														<input name="pa_enfermedad" type="text" class="form-control" id="pa_enfermedad" placeholder="SI o NO">
												</div>
												<div class="col-lg-3">
												   <h4 style="color:#000"><P align="left"><b>¿Está bajo Tratamiento Médico?</b> </h4>
												</div>
												 <div class="col-lg-2">
													   <input name="tratamiento" type="text" class="form-control" id="tratamiento" placeholder="SI o NO">
												</div>
											</div>                      
										</div>
										   <div class="row">
									<div class="form-group">
										<div class="col-lg-1">
										   <h4 style="color:#000"><P align="left"><b>Toma Medicamento:</b> </h4>
										</div>
										 <div class="col-lg-3 ">
											<input name="medica" type="text" class="form-control" id="medica" placeholder="SI o NO">
										</div>
										 <div class="col-lg-1">
										   <h4 style="color:#000"><P align="left"><b>Tipo de Sangre:</b> </h4>
										</div>
										 <div class="col-lg-3 ">
											 <select class="form-control" id="combosangre" name="combosangre">
												 <option selected>Seleccione Su Tipo de Sangre</option>
												 <option value="1">O-</option>
												 <option value="2">O+</option>
												 <option value="3">A−</option>
												 <option value="4">A+</option>
												 <option value="4">B−</option>
												 <option value="6">B+</option>
												 <option value="7">AB−</option>
												 <option value="8">AB+</option>
											</select>
										</div>
										 <div class="col-lg-1 ">
										   <h4 style="color:#000"><P align="left"><b>Es alérgico (Mencione):</b> </h4>
										</div>
										 <div class="col-lg-3 ">
											  <input name="alergico" type="text" class="form-control" id="alergico" placeholder="Es alérgico (Mencione).">
										</div>
									</div>
								</div>
								  <!--<![Información General]-->
						
						<div class="row">
						    <h2 style="color:#fff"><P align="left"><b>Información General</b> </h2> 
							<h3 style="color:#fff"><P align="left"><b>Qué Actividad Pastoral Realiza Actualmente:</b> </h3> 
                            <div class="form-group">
                                <div class="col-lg-2">
									<h4 style="color:#fff"> 
                                         <div class="form-check">
								             <label class="form-check-label">
									          <input type="checkbox" class="form-check-input" id ="catequista" name="catequista"  value="1">
												Catequista
								            </label>
							             </div>
									</h4> 		 
                                </div>
								<div class="col-lg-2">
									<h4 style="color:#fff"> 
                                         <div class="form-check">
								             <label class="form-check-label">
												<input type="checkbox" class="form-check-input" id ="animador" name="animador"  value="1">
													Animador de Grupos
											</label>
							             </div>
									</h4> 		 
                                </div>
								<div class="col-lg-2">
									<h4 style="color:#fff"> 
                                         <div class="form-check">
								             <label class="form-check-label">
												<input type="checkbox" class="form-check-input" id ="coordinador" name="coordinador"  value="1">
													Coordinador de Grupos 
											</label>
							             </div>
									</h4> 		 
                                </div>
								<div class="col-lg-2">
									<h4 style="color:#fff"> 
                                         <div class="form-check">
								             <label class="form-check-label">
												<input type="checkbox" class="form-check-input" id ="coro" name="coro"  value="1">
													Coro
											</label>
							             </div>
									</h4> 		 
                                </div>
								<div class="col-lg-2">
									<h4 style="color:#fff"> 
                                         <div class="form-check">
								             <label class="form-check-label">
													<input type="checkbox" class="form-check-input" id ="servicio" name="servicio"  value="1">
													Servidor del Altar 
											</label>
							             </div>
									</h4> 		 
                                </div>									
                            </div>
                        </div>
                        
						
						
						<div class="row">
                            <div class="form-group">
                                <div class="col-lg-2">
									<h4 style="color:#fff"> 
                                         <div class="form-check">
								            <label class="form-check-label">
												<input type="checkbox" class="form-check-input" id ="agente" name="agente"  value="1">
													Agente de Pastoral
											</label>
										</div>
									</h4> 		 
                                </div>
								<div class="col-lg-2">
									<h4 style="color:#fff"> 
                                         <div class="form-check">
								            <label class="form-check-label">
												<input type="checkbox" class="form-check-input" id ="participante" name="participante"  value="1">
													Participante de Grupo
											</label>
							             </div>
									</h4> 		 
                                </div>
								<div class="col-lg-2">
									<h4 style="color:#fff"> 
                                         <div class="form-check">
								             <label class="form-check-label">
												<input type="checkbox" class="form-check-input" id ="lector" name="lector"  value="1">
													Lector
											</label>
							             </div>
									</h4> 		 
                                </div>
								<div class="col-lg-1">
									<h4 style="color:#fff"> 
                                         <div class="form-check">
								            <label class="form-check-label">
												<input type="checkbox" class="form-check-input" id ="otrochec" name="otrochec"  value="1">
													Otras
											</label>
							             </div>
									</h4> 		 
                                </div>									
                            </div>
                        </div>
						<div class="row">
							<h3 style="color:#fff"><P align="left"><b>¿ Tiene usted experiencia en?</b> </h3> 
                            <div class="form-group">
                                <div class="col-lg-2">
									<h4 style="color:#fff"> 
                                         <div class="form-check">
								             <label class="form-check-label">
									          <input type="checkbox" class="form-check-input" id ="liturgia" name="liturgia"  value="1">
													Liturgia
								            </label>
							             </div>
									</h4> 		 
                                </div>
								<div class="col-lg-2">
									<h4 style="color:#fff"> 
                                         <div class="form-check">
								             <label class="form-check-label">
												<input type="checkbox" class="form-check-input" id ="musica" name="musica"  value="1">
													Música
											</label>
							             </div>
									</h4> 		 
                                </div>
								<div class="col-lg-2">
									<h4 style="color:#fff"> 
                                         <div class="form-check">
								             <label class="form-check-label">
													<input type="checkbox" class="form-check-input" id ="floklore" name="floklore"  value="1">
														Expresiones Folklóricas
											</label>
							             </div>
									</h4> 		 
                                </div>
								<div class="col-lg-2">
									<h4 style="color:#fff"> 
                                         <div class="form-check">
								             <label class="form-check-label">
												<input type="checkbox" class="form-check-input" id ="animaciones" name="animaciones"  value="1">
													Animaciones Grupales
											</label>
							             </div>
									</h4> 		 
                                </div>
								<div class="col-lg-2">
									<h4 style="color:#fff"> 
                                         <div class="form-check">
								             <label class="form-check-label">
													<input type="checkbox" class="form-check-input" id ="exp_grupal" name="exp_grupal"  value="1">
														Expresiones Grupales
											</label>
							             </div>
									</h4> 		 
                                </div>									
                            </div>
                        </div>
						
						<div class="row">
                            <div class="form-group">
                                <div class="col-lg-2">
									<h4 style="color:#fff"> 
                                         <div class="form-check">
								            <label class="form-check-label">
													<input type="checkbox" class="form-check-input" id ="exp_cultu" name="exp_cultu"  value="1">
														Expresiones Culturales
											</label>
										</div>
									</h4> 		 
                                </div>
								<div class="col-lg-2">
									<h4 style="color:#fff"> 
                                         <div class="form-check">
								            <label class="form-check-label">
												<input type="checkbox" class="form-check-input" id ="deportes" name="deportes"  value="1">
													Deportes
											</label>
							             </div>
									</h4> 		 
                                </div>
								<div class="col-lg-2">
									<h4 style="color:#fff"> 
                                         <div class="form-check">
								             <label class="form-check-label">
												<input type="checkbox" class="form-check-input" id ="airelibre" name="airelibre"  value="1">
													Actividad al aire libre
											</label>
							             </div>
									</h4> 		 
                                </div>
								<div class="col-lg-2">
									<h4 style="color:#fff"> 
                                         <div class="form-check">
								            <label class="form-check-label">
												<input type="checkbox" class="form-check-input" id ="campamentos" name="campamentos"  value="1">
														Campamentos
											</label>
							             </div>
									</h4> 		 
                                </div>
                                <div class="col-lg-2">
									<h4 style="color:#fff"> 
                                         <div class="form-check">
								            <label class="form-check-label">
												<input type="checkbox" class="form-check-input" id ="ejercicio_espiri" name="ejercicio_espiri"  value="1">
													Ejercicio Espirituales
											</label>
							             </div>
									</h4> 		 
                                </div>									
                            </div>
                        </div>
						    <div class="row">
                            <div class="form-group">
                                <div class="col-lg-2">
									<h4 style="color:#fff"> 
                                         <div class="form-check">
								            <label class="form-check-label">
													<input type="checkbox" class="form-check-input" id ="volun_social" name="volun_social"  value="1">
															Voluntariado Social
											</label>
										</div>
									</h4> 		 
                                </div>
								<div class="col-lg-2">
									<h4 style="color:#fff"> 
                                         <div class="form-check">
								            <label class="form-check-label">
												<input type="checkbox" class="form-check-input" id ="act_espi" name="act_espi"  value="1">
													Actividades Espirituales
											</label>
							             </div>
									</h4> 		 
                                </div>	
								<div class="col-lg-2">
									<h4 style="color:#fff"> 
                                         <div class="form-check">
								            <label class="form-check-label">
												<input type="checkbox" class="form-check-input" id ="otras" name="otras"  value="1">
														Otras
											</label>
							             </div>
									</h4> 		 
                                </div>									
                            </div>
                        </div>
						<div class="row" >
						    <h3 style="color:#fff" align="center"><b>¿Qué es lo que más le llama la atención de las jornadas Juveniles?</b> </h3> 
			             </div>
						 <div class="row">
                            <div class="form-group">
									<div class="col-lg-12">
										<textarea class="form-control" rows="4" id="message1" name="message1" maxlength="400"></textarea>
									</div>									
                            </div> 
			             </div> 
						<div class="row" >
						    <h3 style="color:#fff" align="center"><b>¿A  parte de esta información agrega algo que consideras que deber ser conocido por  el equipo organizador?</b> </h3> 
			            </div>
						<div class="row">
                            <div class="form-group">
									<div class="col-lg-12">
										<textarea class="form-control" rows="4" id="message2" name="message2" maxlength="400"></textarea>
									</div>									
                            </div> 
			            </div> 	
						
                        <div class="row" align="center">
                            <div class="col-md-12">
                                <input  type="submit" data-loading-text="Loading..." class="btn btn-default btn-lg" value="Enviar Información">
                            </div>
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
                duration: 740,
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
                columnNumber = 4;
            } else if (winWidth > 940) {
                columnNumber = 4;
            } else if (winWidth > 600) {
                columnNumber = 3;
            } else if (winWidth > 400) {
                columnNumber = 2;
            } else if (winWidth > 240) {
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