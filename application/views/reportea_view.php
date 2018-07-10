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
                                            <li class="active"><a href="<?php echo site_url()?>/registrate"><b>Formulario Para Voluntarios</b></a></li>
                                            <li><a href="<?php echo site_url()?>formulario2"><b>Formulario Para Peregrinos</b></a></li>
											<li ><a href="<?php echo site_url()?>formulario3"><b>Festival de la Juventud</b></a></li>
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
						<img class="img-responsive center-block" src="<?php echo base_url();?>images/paginas/voluntariado.png" width="500" height="auto"/>
				</div> 

    <div class="container">
			<?php $attributes = array('class' => 'form ', 'novalidate'=>'novalidate', 'role' => 'form','id' => 'form','onsubmit' => 'return validacion()');
				echo form_open('reportea/decargar', $attributes );  ?>
		              <div class="container">	
                        <div class="row">
						    <h2 style="color:#fff"><P align="left"><b>DATOS PERSONALES</b> </h2> 
                            <?php foreach($datos->result() as $row){?>
							<div class="form-group">
                                <div class="col-lg-1 ">
                                   <h4 style="color:#fff"><P align="left"><b>Parroquia</b> </h4>
                                </div>
                                <div class="col-lg-6 ">
										<select class="form-control" id="parroquia" name="parroquia" placeholder="Selecione la Parroquia">
											 <option selected>Selecione la Parroquia</option>
											 <option value="1"  <?php if ($row->parroquia == '1'){echo 'selected';}; ?>>Cuasi parroquia San Lorenzo</option>
											 <option value="2"  <?php if ($row->parroquia == '2'){echo 'selected';}; ?>>Cuasi parroquia Santo Cristo de Esquipulas</option>
											 <option value="3"  <?php if ($row->parroquia == '3'){echo 'selected';}; ?>>Parroquia Inmaculada Concepción de </option>
											 <option value="4"  <?php if ($row->parroquia == '4'){echo 'selected';}; ?>>Parroquia Inmaculado Corazón de María</option>
											 <option value="5"  <?php if ($row->parroquia == '5'){echo 'selected';}; ?>>Parroquia Jesús Pan de Vida</option>
											 <option value="6"  <?php if ($row->parroquia == '6'){echo 'selected';}; ?>>Parroquia María Auxiliadora - Santa Rita abajo
											 <option value="7"  <?php if ($row->parroquia == '7'){echo 'selected';}; ?>>Parroquia Medalla Milagrosa</option>
											 <option value="8"  <?php if ($row->parroquia == '8'){echo 'selected';}; ?>>Parroquia Niño Jesús de Praga</option>
											 <option value="9"  <?php if ($row->parroquia == '9'){echo 'selected';}; ?>>Parroquia Sagrada Familia - Margarita</option>
											 <option value="10" <?php if ($row->parroquia == '10'){echo 'selected';}; ?>>Parroquia Sagrada Familia - Puerto Pilón</option>
											 <option value="11" <?php if ($row->parroquia == '11'){echo 'selected';}; ?>>Parroquia San Francisco Javier </option>
											 <option value="12" <?php if ($row->parroquia == '12'){echo 'selected';}; ?>>Parroquia San Jacinto</option>
											 <option value="13" <?php if ($row->parroquia == '13'){echo 'selected';}; ?>>Parroquia San José</option>
											 <option value="14" <?php if ($row->parroquia == '14'){echo 'selected';}; ?>>Parroquia San Judas Tadeo </option>
											 <option value="15" <?php if ($row->parroquia == '15'){echo 'selected';}; ?>>Parroquia san Vicente de Paúl </option>
											 <option value="16" <?php if ($row->parroquia == '16'){echo 'selected';}; ?>>Parroquia Santa María de Belén - Escobal</option>
											 <option value="17" <?php if ($row->parroquia == '17'){echo 'selected';}; ?>>Parroquia Santa María de Belén -Villa del Caribe</option>
											 <option value="18" <?php if ($row->parroquia == '18'){echo 'selected';}; ?>>Parroquia Santa Rita de Cascia</option>
											 <option value="19" <?php if ($row->parroquia == '19'){echo 'selected';}; ?>>Parroquia Virgen de Fátima</option>
											 <option value="20" <?php if ($row->parroquia == '20'){echo 'selected';}; ?>>Parroquia Virgen de Lourdes</option>
											 <option value="21" <?php if ($row->parroquia == '21'){echo 'selected';}; ?>>Santuario Jesús Nazareno</option>
											 <option value="22" <?php if ($row->parroquia == '22'){echo 'selected';}; ?>>Santuario Nuestra Señora</option>										 
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
                                  	<input name="nombre" type="text" class="form-control" id="nombre" placeholder="Nombre" value ="<?php   echo $row->nombre."  " ?>">
                                </div>
								 <div class="col-lg-1 ">
                                   <h4 style="color:#fff"><P align="left"><b>Apellido:</b> </h4>
                                </div>
								 <div class="col-lg-3 ">
                                  	<input name="apellido" type="text" class="form-control" id="apellido" placeholder="Apellido" value ="<?php   echo $row->apellido."  " ?>">
                                </div>
								 <div class="col-lg-1 ">
                                   <h4 style="color:#fff"><P align="left"><b>Sexo:</b> </h4>
                                </div>
								 <div class="col-lg-3 ">
									<select class="form-control" id="combosexo" name="combosexo">
										 <option selected>Selecione El Sexo</option>
										 <option value="M"  <?php if ($row->sexo == "M"){echo 'selected';}; ?>>Masculino</option>
										 <option value="F"  <?php if ($row->sexo == "F"){echo 'selected';}; ?>>Femenino</option>
									</select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                             <div class="col-lg-1">
                                   <h4 style="color:#fff"><P align="left"><b>Cédula:</b> </h4>
                             </div>
						     <div class="col-lg-3 ">
							        <input name="cedula" type="text" class="form-control" id="cedula" placeholder="Cedula." value ="<?php   echo $row->cedula."  " ?>">    	
                            </div>
							<div class="col-lg-3">
                                   <h4 style="color:#fff"><P align="left"><b>F. de Nacimiento (yyyy-mm-dd):</b> </h4>
                             </div>
						     <div class="col-lg-3">
							        <input name="fecha" type="text" class="form-control" id="fecha" placeholder="Fecha de Nacimiento."  value ="<?php   echo $row->fehca_naci."  " ?>">  	
                            </div>
                        </div>
						  <div class="row">
                             <div class="col-lg-3">
                                   <h4 style="color:#fff"><P align="left"><b>Domicilio/Dirección Completa:</b> </h4>
                             </div>
						     <div class="col-lg-8">
						<input name="domicilio" type="text" class="form-control col-sm-1"  id="domicilio" placeholder="Dirección Completa."  value ="<?php   echo $row->domicilio."  " ?>">   	
                            </div>
                        </div>
						<div class="row">
                            <div class="form-group">
                                <div class="col-lg-1 ">
                                   <h4 style="color:#fff"><P align="left"><b>Teléfono:</b> </h4>
                                </div>
								 <div class="col-lg-3 ">
                                  	<input name="telefono" type="text" class="form-control" id="telefono" placeholder="Teléfono" value ="<?php   echo $row->telefono."  " ?>">
                                </div>
								 <div class="col-lg-1 ">
                                   <h4 style="color:#fff"><P align="left"><b>Celular:</b> </h4>
                                </div>
								 <div class="col-lg-3 ">
                                  	<input name="celular" type="text" class="form-control" id="celular" placeholder="Celular" value ="<?php   echo $row->celular."  " ?>">
                                </div>
								 <div class="col-lg-1 ">
                                   <h4 style="color:#fff"><P align="left"><b>Email:</b> </h4>
                                </div>
								 <div class="col-lg-3 ">
									<input name="email" type="text" class="form-control" id="email" placeholder="email" value ="<?php   echo $row->email."  " ?>">
                                </div>
                            </div>
                        </div>
						<div class="row">
                            <div class="form-group">
                                <div class="col-lg-1">
                                   <h4 style="color:#fff"><P align="left"><b>T. de Doc:</b> </h4>
                                </div>
								 <div class="col-lg-3 ">
                                  	<input name="tipodoc" type="text" class="form-control" id="tipodoc" placeholder="Tipo de Documento"value ="<?php   echo $row->tipo_doc."  " ?>">
                                </div>
								 <div class="col-lg-1">
                                   <h4 style="color:#fff"><P align="left"><b>N. d Doc:</b> </h4>
                                </div>
								 <div class="col-lg-3 ">
                                  	<input name="numdoc" type="text" class="form-control" id="numdoc" value ="<?php   echo $row->numero_doc."  " ?>">
                                </div>
								 <div class="col-lg-1 ">
                                   <h4 style="color:#fff"><P align="left"><b>T. de Sangre:</b> </h4>
                                </div>
								 <div class="col-lg-3 ">
									<select class="form-control" id="combosangre" name="combosangre">
										 <option selected>Selecione Su Tipo de Sangre</option>
										 <option value="1" <?php if ($row->tipo_sangre == '1'){echo 'selected';}; ?>>O-</option>
										 <option value="2" <?php if ($row->tipo_sangre == '2'){echo 'selected';}; ?>>O+</option>
										 <option value="3" <?php if ($row->tipo_sangre == '3'){echo 'selected';}; ?>>A−</option>
										 <option value="4" <?php if ($row->tipo_sangre == '4'){echo 'selected';}; ?>>A+</option>
										 <option value="5" <?php if ($row->tipo_sangre == '5'){echo 'selected';}; ?>>B−</option>
										 <option value="6" <?php if ($row->tipo_sangre == '6'){echo 'selected';}; ?>>B+</option>
										 <option value="7" <?php if ($row->tipo_sangre == '7'){echo 'selected';}; ?>>AB−</option>
										 <option value="8" <?php if ($row->tipo_sangre == '8'){echo 'selected';}; ?>>AB+</option>
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
									            <input type="checkbox" class="form-check-input" id ="preparacion" name="preparacion"  <?php   if( $row->pre_pasto) echo 'checked="checked"' ?>/>
										       Preparación Pastoral 
								            </label>
							             </div>
									</h4> 		 
                                </div>
								<div class="col-lg-3">
									<h4 style="color:#fff"> 
                                         <div class="form-check">
								             <label class="form-check-label">
												<input type="checkbox" class="form-check-input" id="acogida" name="acogida" <?php   if( $row->acodiga) echo 'checked="checked"' ?>/>
													Acogida
											</label>
							             </div>
									</h4> 		 
                                </div>
								<div class="col-lg-3">
									<h4 style="color:#fff"> 
                                         <div class="form-check">
								             <label class="form-check-label">
												<input type="checkbox" class="form-check-input" id="voluntarios" name="voluntarios"  <?php   if( $row->voluntario) echo 'checked="checked"' ?>/>
													Discapacitados
											</label>
							             </div>
									</h4> 		 
                                </div>
								<div class="col-lg-3">
									<h4 style="color:#fff"> 
                                         <div class="form-check">
								             <label class="form-check-label">
												<input type="checkbox" class="form-check-input"id="logistica"  name="logistica"  <?php   if( $row->logistica) echo 'checked="checked"' ?>/>
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
												<input type="checkbox" class="form-check-input" id="catequesis" name="catequesis"  <?php   if( $row->catequesis) echo 'checked="checked"' ?>/>
													Catequesis 
											</label>
										</div>
									</h4> 		 
                                </div>
								<div class="col-lg-3">
									<h4 style="color:#fff"> 
                                         <div class="form-check">
								            <label class="form-check-label">
												<input type="checkbox" class="form-check-input" id="festival"  name="festival"  <?php   if( $row->festival) echo 'checked="checked"' ?>/>
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
															<input type="radio" class="form-check-input" name="optionsRadios" id="si"  <?php   if( $row->si) echo 'checked="checked"' ?>/>
															SI
														  </label>
														</div>
													</h3>											
													</div>
													<div class="col-lg-3">
													<h3 style="color:#fff"> 
														<div class="form-check">
														<label class="form-check-label">
															<input type="radio" class="form-check-input" name="optionsRadios" id="no" <?php   if( $row->no) echo 'checked="checked"' ?>/>
															NO
														  </label>
														</div>
													</div>
													</h3>
										
											</div>
										</div>
										
						
						
						
						
						<!--<![Disponibilidad]-->
						<div class="row">
						    <h2 style="color:#fff"><P align="left"><b>Disponibilidad</b> </h2> 
                            <div class="form-group">
                                <div class="col-lg-3">
									<h4 style="color:#fff"> 
                                         <div class="form-check">
								             <label class="form-check-label">
									           <input type="checkbox" class="form-check-input" id="dispo1" name="dispo1" <?php   if( $row->fin_semana) echo 'checked="checked"' ?>/>
													Fines de Semana
								            </label>
							             </div>
									</h4> 		 
                                </div>
								<div class="col-lg-3">
									<h4 style="color:#fff"> 
                                         <div class="form-check">
								             <label class="form-check-label">
													<input type="checkbox" class="form-check-input" id="dispo2"  name="dispo2" <?php   if( $row->lun_a_vier) echo 'checked="checked"' ?>/>
														De Lunes a Viernes
											</label>
							             </div>
									</h4> 		 
                                </div>
								<div class="col-lg-3">
									<h4 style="color:#fff"> 
                                         <div class="form-check">
								             <label class="form-check-label">
												<input type="checkbox" class="form-check-input" id="dispo3" name="dispo3" <?php   if( $row->toda_semana) echo 'checked="checked"' ?>/>
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
									           <input type="checkbox" class="form-check-input" id="horarioM"  name="horarioM" <?php   if( $row->manana) echo 'checked="checked"' ?>/>
													Mañana 
								            </label>
							             </div>
									</h4> 		 
                                </div>
								<div class="col-lg-3">
									<h4 style="color:#fff"> 
                                         <div class="form-check">
								             <label class="form-check-label">
													<input type="checkbox" class="form-check-input" id="horarioT" name="horarioT"  <?php   if( $row->tarde) echo 'checked="checked"' ?>/>
														Tarde 
											</label>
							             </div>
									</h4> 		 
                                </div>
								<div class="col-lg-3">
									<h4 style="color:#fff"> 
                                         <div class="form-check">
								             <label class="form-check-label">
												<input type="checkbox" class="form-check-input" id="horarioI" name="horarioI" <?php   if( $row->independiente) echo 'checked="checked"' ?>/>
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
									           <input type="checkbox" class="form-check-input"  id="volun1"  name="volun1"<?php   if( $row->volun_ante) echo 'checked="checked"' ?>/>
													Antes de la JMJ
								            </label>
							             </div>
									</h4> 		 
                                </div>
								<div class="col-lg-3">
									<h4 style="color:#fff"> 
                                         <div class="form-check">
								             <label class="form-check-label">
													<input type="checkbox" class="form-check-input" id="volun2"  name="volun2" <?php   if( $row->volun_desp) echo 'checked="checked"' ?>/>
														Después de la JMJ
											</label>
							             </div>
									</h4> 		 
                                </div>
								<div class="col-lg-3">
									<h4 style="color:#fff"> 
                                         <div class="form-check">
								             <label class="form-check-label">
												<input type="checkbox" class="form-check-input"  id="volun3" name="volun3" <?php   if( $row->volun_todo) echo 'checked="checked"' ?>/>
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
									           <input type="checkbox" class="form-check-input" id="estudio1" name="estudio1"  <?php   if( $row->estu_basico) echo 'checked="checked"' ?>/>
													Estudios Básicos
								            </label>
							             </div>
									</h4> 		 
                                </div>
								<div class="col-lg-3">
									<h4 style="color:#fff"> 
                                         <div class="form-check">
								             <label class="form-check-label">
													<input type="checkbox" class="form-check-input" id="estudio2" name="estudio2" <?php   if( $row->estu_bachiller) echo 'checked="checked"' ?>/>
														Bachiller
											</label>
							             </div>
									</h4> 		 
                                </div>
								<div class="col-lg-3">
									<h4 style="color:#fff"> 
                                         <div class="form-check">
								             <label class="form-check-label">
												<input type="checkbox" class="form-check-input"  id="estudio3" name="estudio3" <?php   if( $row->estu_profesional) echo 'checked="checked"' ?>/>
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
									           <input type="checkbox" class="form-check-input" id="estudio4"  name="estudio4" <?php   if( $row->estu_tecnico) echo 'checked="checked"' ?>/>
													Técnico
								            </label>
							             </div>
									</h4> 		 
                                </div>
								<div class="col-lg-3">
									<h4 style="color:#fff"> 
                                         <div class="form-check">
								             <label class="form-check-label">
													<input type="checkbox" class="form-check-input" id="estudio5" name="estudio5" <?php   if( $row->estu_pregrado) echo 'checked="checked"' ?>/>
														Licenciatura  o Ingeneria
											</label>
							             </div>
									</h4> 		 
                                </div>
								<div class="col-lg-3">
									<h4 style="color:#fff"> 
                                         <div class="form-check">
								             <label class="form-check-label">
												<input type="checkbox" class="form-check-input"  id="otroest" name="otroest"  <?php   if( $row->estu_otro) echo 'checked="checked"' ?>/>
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
									           <input type="checkbox" class="form-check-input" id="idioma1"  name="idioma1" <?php   if( $row->idioma_ingles) echo 'checked="checked"' ?>/>
													Ingles
								            </label>
							             </div>
									</h4> 		 
                                </div>
								<div class="col-lg-2">
									<select class="form-control" id="comboIngles" name="comboIngles">
										 <option selected>Selecione el Nivel</option>
										 <option value="1" <?php if ($row->nivel_ingles == '1'){echo 'selected';}; ?>>Bajo</option>
										 <option value="2" <?php if ($row->nivel_ingles == '2'){echo 'selected';}; ?>>Medio</option>
										 <option value="3" <?php if ($row->nivel_ingles == '3'){echo 'selected';}; ?>>Alto</option>
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
									          <input type="checkbox" class="form-check-input" id="idioma2" name="idioma2" <?php   if( $row->idioma_frances) echo 'checked="checked"' ?>/>
												Francés
								            </label>
							             </div>
									</h4> 		 
                                </div>
								<div class="col-lg-2">
									<select class="form-control" id="comboFrances" name="comboFrances">
										 <option selected>Selecione el Nivel</option>
										 <option value="1" <?php if ($row->nivel_frances == '1'){echo 'selected';}; ?>>Bajo</option>
										 <option value="2" <?php if ($row->nivel_frances == '2'){echo 'selected';}; ?>>Medio</option>
										 <option value="3" <?php if ($row->nivel_frances == '3'){echo 'selected';}; ?>>Alto</option>
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
									           <input type="checkbox" class="form-check-input"  id="idioma3"  name="idioma3" <?php   if( $row-> idioma_aleman) echo 'checked="checked"' ?>/>
													Alemán
								            </label>
							             </div>
									</h4> 		 
                                </div>
								<div class="col-lg-2">
									<select class="form-control" id="comboAleman" name="comboAleman">
										 <option selected>Selecione el Nivel</option>
										 <option value="1" <?php if ($row->nivel_aleman == '1'){echo 'selected';}; ?>>Bajo</option>
										 <option value="2" <?php if ($row->nivel_aleman == '2'){echo 'selected';}; ?>>Medio</option>
										 <option value="3" <?php if ($row->nivel_aleman == '3'){echo 'selected';}; ?>>Alto</option>
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
									          <input type="checkbox" class="form-check-input" id="idioma4" name="idioma4" <?php   if( $row->idioma_italiano) echo 'checked="checked"' ?>/>
													Italiano
								            </label>
							             </div>
									</h4> 		 
                                </div>
								<div class="col-lg-2">
									<select class="form-control" id="comboItaliano" name="comboItaliano">
										 <option selected>Selecione el Nivel</option>
										 <option value="1" <?php if ($row->nivel_italiano == '1'){echo 'selected';}; ?>>Bajo</option>
										 <option value="2" <?php if ($row->nivel_italiano == '2'){echo 'selected';}; ?>>Medio</option>
										 <option value="3" <?php if ($row-nivel_italiano == '3'){echo 'selected';}; ?>>Alto</option>
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
									          <input type="checkbox" class="form-check-input" id="idioma5" name="idioma5" <?php   if( $row->idioma_portu) echo 'checked="checked"' ?>/>
													Portugués
								            </label>
							             </div>
									</h4> 		 
                                </div>
								<div class="col-lg-2">
									<select class="form-control" id="comboItaliano" name="comboItaliano">
										 <option selected>Selecione el Nivel</option>
										 <option value="1" <?php if ($row->nivel_portu == '1'){echo 'selected';}; ?>>Bajo</option>
										 <option value="2" <?php if ($row->nivel_portu== '2'){echo 'selected';}; ?>>Medio</option>
										 <option value="3" <?php if ($row-nivel_portu == '3'){echo 'selected';}; ?>>Alto</option>
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
									          	<input type="checkbox" class="form-check-input" id="idioma6" name="idioma6" <?php   if( $row->idioma_otro) echo 'checked="checked"' ?>/>
													Otro
								            </label>
							             </div>
									</h4> 		 
                                </div>
								<div class="col-lg-2">
									<select class="form-control" id="comboOtro" name="comboOtro">
										 <option selected>Selecione el Nivel</option>
										 <option value="1" <?php if ($row->nivel_otro == '1'){echo 'selected';}; ?>>Bajo</option>
										 <option value="2" <?php if ($row->nivel_otro == '2'){echo 'selected';}; ?>>Medio</option>
										 <option value="3" <?php if ($row->nivel_otro == '3'){echo 'selected';}; ?>>Alto</option>
									</select>		 
                               	</div>
								<div class="col-lg-2">
									<input name="idioma7" type="text" class="form-control" id="idioma7" value ="<?php   echo $row->otro_idioma."  " ?>">		 
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
									           <input type="checkbox" class="form-check-input" id="administracion" name="administracion" <?php   if( $row->exp_admin) echo 'checked="checked"' ?>/>
													Administración
								            </label>
							             </div>
									</h4> 		 
                                </div>
								<div class="col-lg-3">
									<h4 style="color:#fff"> 
                                         <div class="form-check">
								             <label class="form-check-label">
												<input type="checkbox" class="form-check-input" id="turismo"  name="turismo" <?php   if( $row->exp_turismos) echo 'checked="checked"' ?>/>
													Turismo
											</label>
							             </div>
									</h4> 		 
                                </div>
								<div class="col-lg-3">
									<h4 style="color:#fff"> 
                                         <div class="form-check">
								             <label class="form-check-label">
												<input type="checkbox" class="form-check-input" id="informatica" name="informatica" <?php   if( $row->exp_informatica) echo 'checked="checked"' ?>/>
													Informática
											</label>
							             </div>
									</h4> 		 
                                </div>
								<div class="col-lg-3">
									<h4 style="color:#fff"> 
                                         <div class="form-check">
								             <label class="form-check-label">
												<input type="checkbox" class="form-check-input"  id="seguridad" name="seguridad" <?php   if( $row->exp_seguridad) echo 'checked="checked"' ?>/>
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
									           <input type="checkbox" class="form-check-input" id="educacion" name="educacion" <?php   if( $row->exp_educacion) echo 'checked="checked"' ?>/>
												Educación
								            </label>
							             </div>
									</h4> 		 
                                </div>
								<div class="col-lg-3">
									<h4 style="color:#fff"> 
                                         <div class="form-check">
								             <label class="form-check-label">
												<input type="checkbox" class="form-check-input"  id="sanidad" name="sanidad" <?php   if( $row->exp_sanidad) echo 'checked="checked"' ?>/>
													Sanidad
											</label>
							             </div>
									</h4> 		 
                                </div>
								<div class="col-lg-3">
									<h4 style="color:#fff"> 
                                         <div class="form-check">
								             <label class="form-check-label">
												<input type="checkbox" class="form-check-input"  id="traduccion" name="traduccion" <?php   if( $row->exp_traduccion) echo 'checked="checked"' ?>/>
													Traducción
											</label>
							             </div>
									</h4> 		 
                                </div>
								<div class="col-lg-3">
									<h4 style="color:#fff"> 
                                         <div class="form-check">
								             <label class="form-check-label">
												<input type="checkbox" class="form-check-input"  id="recursohumano" name="recursohumano" <?php   if( $row->exp_recurso_h) echo 'checked="checked"' ?>/>
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
									          <input type="checkbox" class="form-check-input"  id="conducir" name="conducir" <?php   if( $row->exp_conducir) echo 'checked="checked"' ?>/>
												Lic. De Conducir 
								            </label>
							             </div>
									</h4> 		 
                                </div>
								<div class="col-lg-3">
									<h4 style="color:#fff"> 
                                         <div class="form-check">
								             <label class="form-check-label">
												<input type="checkbox" class="form-check-input" id="auto" name="auto" <?php   if( $row->tien_auto) echo 'checked="checked"' ?>/>
												Tiene Auto
											</label>
							             </div>
									</h4> 		 
                                </div>
								<div class="col-lg-3">
									<h4 style="color:#fff"> 
                                         <div class="form-check">
								             <label class="form-check-label">
												<input type="checkbox" class="form-check-input" id="discapa"name="discapa" <?php   if( $row->exp_con_discapacitado) echo 'checked="checked"' ?>/>
													Exp. Con Discapacitados
											</label>
							             </div>
									</h4> 		 
                                </div>
								<div class="col-lg-3">
									<h4 style="color:#fff"> 
                                         <div class="form-check">
								             <label class="form-check-label">
												<input type="checkbox" class="form-check-input" id="otro" name="otro" <?php   if( $row->exp_otro) echo 'checked="checked"' ?>/>
													Otros
											</label>
							             </div>
									</h4> 		 
                                </div>								
                            </div>
                        </div>
                        <div class="row" align="center">
                            <div class="col-md-12">
                                <input  type="submit" data-loading-text="Loading..." class="btn btn-default btn-lg" value="Descargar">
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