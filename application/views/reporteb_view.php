<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie ie8" class="no-js" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html class="no-js" lang="en"> <!--<![endif]-->
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>JMJ Panamá 2019</title>
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
                                            <li class="active"><a href="<?php echo site_url()?>/formulario2"><b>Formulario Para Peregrinos</b></a></li>
											<li><a href="<?php echo site_url()?>formulario3"><b>Festival de la Juventud</b></a></li>
											<li><a href="<?php echo site_url()?>formulario4"><b>Formulario  Internacional</b></a></li>
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
					 <img class="img-responsive center-block" src="<?php echo base_url();?>images/paginas/peregrinos.png" width="400" height="auto"/>
			</div> 
		
    <div class="container">
				<?php $attributes = array('class' => 'form ', 'novalidate'=>'novalidate', 'role' => 'form','id' => 'form','onsubmit' => 'return validacion()');
				echo form_open('consulta_reporte/decargar', $attributes );  ?>
		         <div class="container">
			
                        <div class="row">
						    <h2 style="color:#000"><P align="left"><b>INFORMACIÓN PERSONAL</b> </h2> 
                            
                        </div>
						<?php foreach($datos->result() as $row){?>
                        <div class="row">
                            <div class="form-group">
                                <div class="col-lg-1">
                                   <h5 style="color:#000"><P align="left"><b>Nombre:</b> </h5>
                                </div>
								 <div class="col-lg-3 ">
                                  	<input name="nombre" type="text" class="form-control" id="nombre" placeholder="Nombre" value ="<?php   echo $row->nombre."  " ?>" >
                                </div>
								 <div class="col-lg-1 ">
                                   <h5 style="color:#000"><P align="left"><b>Apellido:</b> </h5>
                                </div>
								 <div class="col-lg-3 ">
                                  	<input name="apellido" type="text" class="form-control" id="apellido" placeholder="Apellido" value ="<?php   echo $row->apellido."  " ?>" >
                                </div>
								 <div class="col-lg-1 ">
								  <h5 style="color:#000"><P align="left"><b>Edad:</b> </h5>                                  
                                </div>
								 <div class="col-lg-3 ">
                                  	<input name="edad" type="text" class="form-control" id="edad" placeholder="Edad" value ="<?php   echo $row->edad."  " ?>">
                                </div>
                            </div>
                        </div>
                        <div class="row">
							<div class="col-lg-3">
                                   <h5 style="color:#000"><P align="left"><b>F. de Nacimiento (YYYY-MM-DD):</b> </h5>
                             </div>
						     <div class="col-lg-3">
							       <input name="fehca_naci" type="text" class="form-control" id="fehca_naci" placeholder="YYYY-MM-DD" value ="<?php   echo $row->fechadenac."  " ?>">
                            </div>
                        </div>
						<div class="row">
                            <div class="form-group">
                                <div class="col-lg-1 ">
                                   <h5 style="color:#000"><P align="left"><b>Nacionalidad:</b> </h5>
                                </div>
								 <div class="col-lg-3 ">
                                  	<input name="nacionalidad" type="text" class="form-control" id="nacionalidad" placeholder="Nacionalidad" value ="<?php   echo $row->nacionalidad."  " ?>">
                                </div>
								<!--
								 <div class="col-lg-1 ">
                                   <h5 style="color:#000"><P align="left"><b>Número de Pasaporte:</b> </h5>
                                </div>
								 <div class="col-lg-3 ">
                                  	<input name="num_pasap" type="text" class="form-control" id="num_pasap" placeholder="Número de Pasaporte" value ="<?php   echo $row->pasaporte."  " ?>">
                                </div>
								 <div class="col-lg-1 ">
                                   <h5 style="color:#000"><P align="left"><b>F. de Expiración:</b> </h5>
                                </div> 
								 <div class="col-lg-3 ">
									<input name="fecha_expasa" type="text" class="form-control" id="fecha_expasa" placeholder="YYYY-MM-DD"  value ="<?php   echo $row->fechadepas."  " ?>">
                                </div>-->
                            </div>
                        </div>
						<div class="row">
                            <div class="form-group">
                                <div class="col-lg-1">
                                   <h5 style="color:#000"><P align="left"><b>Cédula:</b> </h5>
                                </div>
								 <div class="col-lg-3 ">
                                  	<input name="cedula" type="text" class="form-control" id="cedula" placeholder="Cedula" value ="<?php   echo $row->cedula."  " ?>">
                                </div>
								 <div class="col-lg-1">
                                   <h5 style="color:#000"><P align="left"><b>Teléfono:</b> </h5>
                                </div>
								 <div class="col-lg-3 ">
                                  <input name="telefo" type="text" class="form-control" id="telefo" placeholder="Teléfono" value ="<?php   echo $row->telefono."  " ?>">
                                </div>
								 <div class="col-lg-1 ">
                                   <h5 style="color:#000"><P align="left"><b>Celular:</b> </h5>
                                </div>
								 <div class="col-lg-3 ">
									 <input name="Cel" type="text" class="form-control" id="Cel" placeholder="Celular" value ="<?php   echo $row->celular."  " ?>">
                                </div>
                            </div>
                        </div>
						 <div class="row">
                             <div class="col-lg-1">
                                   <h5 style="color:#000"><P align="left"><b>Dirección:</b> </h5>
                             </div>
						     <div class="col-lg-8">
								<input name="direc" type="text" class="form-control col-sm-1"  id="direc" placeholder="Dirección." value ="<?php   echo $row->direccion."  " ?>">  	
                            </div>
                        </div>
						<div class="row">
                             <div class="col-lg-1">
                                   <h5 style="color:#000"><P align="left"><b>Email:</b> </h5>
                             </div>
						     <div class="col-lg-3">
								<input name="email" type="text" class="form-control" id="email" placeholder="email" value ="<?php   echo $row->email."  " ?>">  	
                            </div>
							<div class="col-lg-1">
                                   <h5 style="color:#000"><P align="left"><b>Parroquia:</b> </h5>
                             </div>
						     <div class="col-lg-6">							 
								<input name="parroquia" type="text" class="form-control" id="paroquia"  value ="<?php   echo $row->parroquia."  " ?>">
                           </div>
                        </div>
						<div class="row">
                            <div class="form-group">
                                <div class="col-lg-1">
                                   <h5 style="color:#000"><P align="left"><b>Zona:</b> </h5>
                                </div>
								 <div class="col-lg-3 ">
                                  	<input name="vicaria" type="text" class="form-control" id="vicaria" placeholder="Zona" value ="<?php   echo $row->vicaria."  " ?>">
                                </div>
								 <div class="col-lg-1">
                                   <h5 style="color:#000"><P align="left"><b>Diócesis:</b> </h5>
                                </div>
								 <div class="col-lg-3 ">
                                  <input name="Diocesis" type="text" class="form-control" id="Diocesis" placeholder="Diócesis"   value ="<?php   echo $row->diosesis."  " ?>">
                                </div>
								 <div class="col-lg-1 ">
                                   <h5 style="color:#000"><P align="left"><b>Nivel Académico:</b> </h5>
                                </div>
								 <div class="col-lg-3 ">
									 <input name="nivel_acade" type="text" class="form-control" id="nivel_acade" placeholder="Nivel Académico" value ="<?php   echo $row->nivelaca."  " ?>">
                                </div>
                            </div>
                        </div>
						<div class="row">
                            <div class="form-group">
                                <div class="col-lg-1">
                                   <h5 style="color:#000"><P align="left"><b>Ocupación:</b> </h5>
                                </div>
								 <div class="col-lg-3 ">
                                  	<input name="ocupacion" type="text" class="form-control" id="ocupacion" placeholder="Ocupación"   value ="<?php   echo $row->ocupacion."  " ?>">
                                </div>
								 <div class="col-lg-1">
                                   <h5 style="color:#000"><P align="left"><b>Lugar de Estudio o Trabajo:</b> </h5>
                                </div>
								 <div class="col-lg-3 ">
                                     <input name="ltrabajo" type="text" class="form-control" id="ltrabajo" placeholder="Lugar de Estudio o Trabajo" value ="<?php   echo $row->lugardetrab."  " ?>">
                                </div>
								 <div class="col-lg-1 ">
                                   <h5 style="color:#000"><P align="left"><b>Dirección:</b> </h5>
                                </div>
								 <div class="col-lg-3 ">
									  <input name="direc_estu" type="text" class="form-control" id="direc_estu" placeholder="Dirección" value ="<?php   echo $row->direcciontrab."  " ?>">
                                </div>
                            </div>
                        </div>
						<div class="row">
                            <div class="form-group">
                                <div class="col-lg-3">
                                   <h5 style="color:#000"><P align="left"><b>Ha Participado en Alguna JMJ:</b> </h5>
                                </div>
								 <div class="col-lg-5">
                                  	 <input name="participo" type="text" class="form-control" id="participo" placeholder="Participo" value ="<?php   echo $row->participo."  " ?>">
								</div>
							</div> 
						</div>
						<div class="row">
                            <div class="form-group">
								 <div class="col-lg-3">
                                   <h5 style="color:#000"><P align="left"><b>El Grupo en el que Participó:</b> </h5>
                                </div>
								 <div class="col-lg-5">
                                      <input name="grupo" type="text" class="form-control" id="grupo"  value ="<?php   echo $row->grupos."  " ?>">
                                </div>
						    </div>
                        </div>
						<div class="row">
                            <div class="form-group">		
								 <div class="col-lg-3">
                                   <h5 style="color:#000"><P align="left"><b>Cuál (País y Año):</b> </h5>
                                </div>
								 <div class="col-lg-5">
									  <input name="pais_particio" type="text" class="form-control" id="pais_particio" placeholder="País y Año"  value ="<?php   echo $row->paisj."  " ?>">
                                </div>
                            </div>
                        </div>
						<div class="row">
                            <div class="form-group">
                                <div class="col-lg-3">
                                   <h5 style="color:#000"><P align="left"><b>En Caso de Emergencia LLamar A:</b> </h5>
                                </div>
								 <div class="col-lg-3 ">
                                  	   <input name="emergencia" type="text" class="form-control" id="emergencia" placeholder="LLamar A" value ="<?php   echo $row->enombre."  " ?>">
                                </div>
                            </div>
                        </div>
						<div class="row">
                            <div class="form-group">
                                <div class="col-lg-1">
                                   <h5 style="color:#000"><P align="left"><b>Parentesco:</b> </h5>
                                </div>
								 <div class="col-lg-3 ">
                                  	   <input  name="parentesco" type="text" class="form-control" id="parentesco" placeholder="Parentesco"  value ="<?php   echo $row->parentesco."  " ?>">
                                </div>
								<div class="col-lg-1">
                                   <h5 style="color:#000"><P align="left"><b>Teléfono:</b> </h5>
                                </div>
								 <div class="col-lg-3 ">
                                  	   <input  name="telefo_emerge" type="text" class="form-control" id="telefo_emerge" placeholder="Teléfono"  value ="<?php   echo $row->etel."  " ?>">
                                </div>
                            </div>                      
                        </div>
						<div class="row">
                            <div class="form-group">
                                <div class="col-lg-3">
                                   <h5 style="color:#000"><P align="left"><b>¿Padece Alguna Enfermedad?</b> </h5>
                                </div>
								 <div class="col-lg-2">
                                  	    <input name="pa_enfermedad" type="text" class="form-control" id="pa_enfermedad" value ="<?php   echo $row->enfermedad."  " ?>">
                                </div>
								<div class="col-lg-3">
                                   <h5 style="color:#000"><P align="left"><b>¿Está bajo Tratamiento Médico?</b> </h5>
                                </div>
								 <div class="col-lg-2">
                                  	   <input name="tratamiento" type="text" class="form-control" id="tratamiento" value ="<?php   echo $row->tratamiento."  " ?>">
                                </div>
						    </div>                      
                        </div>
						<div class="row">
                            <div class="form-group">
                                <div class="col-lg-1">
                                   <h5 style="color:#000"><P align="left"><b>Toma Medicamento:</b> </h5>
                                </div>
								 <div class="col-lg-3 ">
                                  	<input name="medica" type="text" class="form-control" id="medica" value ="<?php   echo $row->medicamentos."  " ?>">
                                </div>
								 <div class="col-lg-1">
                                   <h5 style="color:#000"><P align="left"><b>Tipo de Sangre:</b> </h5>
                                </div>
								 <div class="col-lg-3 ">
                                     <input name="sangre" type="text" class="form-control" id="sangre" value ="<?php   echo $row->sangre."  " ?>">
                                </div>
								 <div class="col-lg-1 ">
                                   <h5 style="color:#000"><P align="left"><b>Es alérgico (Mencione:</b> </h5>
                                </div>
								 <div class="col-lg-3 ">
									  <input name="alergico" type="text" class="form-control" id="alergico" value ="<?php   echo $row->alergia."  " ?>">
                                </div>
                            </div>
                        </div>
						
						<!--<![Información General]-->
						
						<div class="row">
						    <h2 style="color:#000"><P align="left"><b>Información General</b> </h2> 
							<h3 style="color:#000"><P align="left"><b>Qué Actividad Pastoral Realiza Actualmente:</b> </h3> 
                            <div class="form-group">
                                <div class="col-lg-2">
									<h5 style="color:#000"> 
                                         <div class="form-check">
								             <label class="form-check-label">
									          <input type="checkbox" class="form-check-input" id ="catequista" name="catequista"  <?php   if( $row->catequista) echo 'checked="checked"' ?>/>
												Catequista
								            </label>
							             </div>
									</h5> 		 
                                </div>
								<div class="col-lg-2">
									<h5 style="color:#000"> 
                                         <div class="form-check">
								             <label class="form-check-label">
												<input type="checkbox" class="form-check-input" id ="animador" name="animador"  <?php   if( $row->animador) echo 'checked="checked"' ?>/>
													Animador de Grupos
											</label>
							             </div>
									</h5> 		 
                                </div>
								<div class="col-lg-2">
									<h5 style="color:#000"> 
                                         <div class="form-check">
								             <label class="form-check-label">
												<input type="checkbox" class="form-check-input" id ="coordinador" name="coordinador"   <?php   if( $row->coordinador) echo 'checked="checked"' ?>/>
													Coordinador de Grupos 
											</label>
							             </div>
									</h5> 		 
                                </div>
								<div class="col-lg-2">
									<h5 style="color:#000"> 
                                         <div class="form-check">
								             <label class="form-check-label">
												<input type="checkbox" class="form-check-input" id ="coro" name="coro"   <?php   if( $row->coro) echo 'checked="checked"' ?>/
													Coro
											</label>
							             </div>
									</h5> 		 
                                </div>
								<div class="col-lg-2">
									<h5 style="color:#000"> 
                                         <div class="form-check">
								             <label class="form-check-label">
													<input type="checkbox" class="form-check-input" id ="servicio" name="servicio"  <?php   if( $row->servidor) echo 'checked="checked"' ?>/>
													Servidor del Altar 
											</label>
							             </div>
									</h5> 		 
                                </div>									
                            </div>
                        </div>
						<div class="row">
                            <div class="form-group">
                                <div class="col-lg-2">
									<h5 style="color:#000"> 
                                         <div class="form-check">
								            <label class="form-check-label">
												<input type="checkbox" class="form-check-input" id ="agente" name="agente"   <?php   if( $row->agente) echo 'checked="checked"' ?>/>
													Agente de Pastoral
											</label>
										</div>
									</h5> 		 
                                </div>
								<div class="col-lg-2">
									<h5 style="color:#000"> 
                                         <div class="form-check">
								            <label class="form-check-label">
												<input type="checkbox" class="form-check-input" id ="participante" name="participante"  <?php   if( $row->participante) echo 'checked="checked"' ?>/>
													Participante de Grupo
											</label>
							             </div>
									</h5> 		 
                                </div>
								<div class="col-lg-2">
									<h5 style="color:#000"> 
                                         <div class="form-check">
								             <label class="form-check-label">
												<input type="checkbox" class="form-check-input" id ="lector" name="lector"  <?php   if( $row->lector) echo 'checked="checked"' ?>/>
													Lector
											</label>
							             </div>
									</h5> 		 
                                </div>
								<div class="col-lg-1">
									<h5 style="color:#000"> 
                                         <div class="form-check">
								            <label class="form-check-label">
												<input type="checkbox" class="form-check-input" id ="otrochec" name="otrochec" <?php   if( $row->otros) echo 'checked="checked"' ?>/>
													Otras
											</label>
							             </div>
									</h5> 		 
                                </div>									
                            </div>
                        </div>
						<div class="row">
							<h3 style="color:#000"><P align="left"><b>¿ Tiene usted experiencia en?</b> </h3> 
                            <div class="form-group">
                                <div class="col-lg-2">
									<h5 style="color:#000"> 
                                         <div class="form-check">
								             <label class="form-check-label">
									          <input type="checkbox" class="form-check-input" id ="liturgia" name="liturgia"  <?php   if( $row->liturgia) echo 'checked="checked"' ?>/>
													Liturgia
								            </label>
							             </div>
									</h5> 		 
                                </div>
								<div class="col-lg-2">
									<h5 style="color:#000"> 
                                         <div class="form-check">
								             <label class="form-check-label">
												<input type="checkbox" class="form-check-input" id ="musica" name="musica" <?php   if( $row->musica) echo 'checked="checked"' ?>/>
													Música
											</label>
							             </div>
									</h5> 		 
                                </div>
								<div class="col-lg-2">
									<h5 style="color:#000"> 
                                         <div class="form-check">
								             <label class="form-check-label">
													<input type="checkbox" class="form-check-input" id ="floklore" name="floklore"  <?php   if( $row->expresiones) echo 'checked="checked"' ?>/>
														Expresiones Folklóricas
											</label>
							             </div>
									</h5> 		 
                                </div>
								<div class="col-lg-2">
									<h5 style="color:#000"> 
                                         <div class="form-check">
								             <label class="form-check-label">
												<input type="checkbox" class="form-check-input" id ="animaciones" name="animaciones" <?php   if( $row->animaciones) echo 'checked="checked"' ?>/>
													Animaciones Grupales
											</label>
							             </div>
									</h5> 		 
                                </div>
								<div class="col-lg-2">
									<h5 style="color:#000"> 
                                         <div class="form-check">
								             <label class="form-check-label">
													<input type="checkbox" class="form-check-input" id ="exp_grupal" name="exp_grupal"  <?php   if( $row->exgrupales) echo 'checked="checked"' ?>/>
														Expresiones Grupales
											</label>
							             </div>
									</h5> 		 
                                </div>									
                            </div>
                        </div>
						<div class="row">
                            <div class="form-group">
                                <div class="col-lg-2">
									<h5 style="color:#000"> 
                                         <div class="form-check">
								            <label class="form-check-label">
													<input type="checkbox" class="form-check-input" id ="exp_cultu" name="exp_cultu" <?php   if( $row->expresionescul) echo 'checked="checked"' ?>/>
														Expresiones Culturales
											</label>
										</div>
									</h5> 		 
                                </div>
								<div class="col-lg-2">
									<h5 style="color:#000"> 
                                         <div class="form-check">
								            <label class="form-check-label">
												<input type="checkbox" class="form-check-input" id ="deportes" name="deportes" <?php   if( $row->deportes) echo 'checked="checked"' ?>/>>
													Deportes
											</label>
							             </div>
									</h5> 		 
                                </div>
								<div class="col-lg-2">
									<h5 style="color:#000"> 
                                         <div class="form-check">
								             <label class="form-check-label">
												<input type="checkbox" class="form-check-input" id ="airelibre" name="airelibre"   <?php   if( $row->actividaire) echo 'checked="checked"' ?>/>
													Actividad al aire libre
											</label>
							             </div>
									</h5> 		 
                                </div>
								<div class="col-lg-2">
									<h5 style="color:#000"> 
                                         <div class="form-check">
								            <label class="form-check-label">
												<input type="checkbox" class="form-check-input" id ="campamentos" name="campamentos"   <?php   if( $row->campamentos) echo 'checked="checked"' ?>/>
														Campamentos
											</label>
							             </div>
									</h5> 		 
                                </div>
                                <div class="col-lg-2">
									<h5 style="color:#000"> 
                                         <div class="form-check">
								            <label class="form-check-label">
												<input type="checkbox" class="form-check-input" id ="ejercicio_espiri" name="ejercicio_espiri"  <?php   if( $row->ejerespirit) echo 'checked="checked"' ?>/>
													Ejercicio Espirituales
											</label>
							             </div>
									</h5> 		 
                                </div>									
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <div class="col-lg-2">
									<h5 style="color:#000"> 
                                         <div class="form-check">
								            <label class="form-check-label">
													<input type="checkbox" class="form-check-input" id ="volun_social" name="volun_social"  <?php   if( $row->volunsocial) echo 'checked="checked"' ?>/>
															Voluntariado Social
											</label>
										</div>
									</h5> 		 
                                </div>
								<div class="col-lg-2">
									<h5 style="color:#000"> 
                                         <div class="form-check">
								            <label class="form-check-label">
												<input type="checkbox" class="form-check-input" id ="act_espi" name="act_espi"  <?php   if( $row->actiespirit) echo 'checked="checked"' ?>/>
													Actividades Espirituales
											</label>
							             </div>
									</h5> 		 
                                </div>	
								<div class="col-lg-2">
									<h5 style="color:#000"> 
                                         <div class="form-check">
								            <label class="form-check-label">
												<input type="checkbox" class="form-check-input" id ="otras" name="otras"  <?php   if( $row->otras) echo 'checked="checked"' ?>/>
														Otras
											</label>
							             </div>
									</h5> 		 
                                </div>									
                            </div>
                        </div>
			            <div class="row" >
						    <h3 style="color:#000" align="center"><b>¿Qué es lo que más le llama la atención de las jornadas Juveniles?</b> </h3> 
			             </div>
						 <div class="row">
                            <div class="form-group">
									<div class="col-lg-12">
										<textarea class="form-control" rows="5" id="message1" name="message1" maxlength="500"><?php   echo $row->pregunta1."" ?></textarea>
									</div>									
                            </div> 
			             </div> 
						<div class="row" >
						    <h3 style="color:#000" align="center"><b>¿A  parte de esta información agrega algo que consideras que deber ser conocido por  el equipo organizador?</b> </h3> 
			            </div>
						<div class="row">
                            <div class="form-group">
									<div class="col-lg-12">
										<textarea class="form-control" rows="5" id="message2" name="message2" maxlength="500"><?php   echo $row->pregunta2."" ?></textarea>
									</div>									
                            </div> 
			            </div> 						 
			   
			   
                        <div class="row" align="center">
                            <div class="col-md-12">
                                <input  type="submit" data-loading-text="Loading..." class="btn btn-default btn-lg" value="Descargar Formulario">
                            </div>
                        </div>
            </form>
             <?php }?>  
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