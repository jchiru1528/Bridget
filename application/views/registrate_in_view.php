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
else if (combosexo == "Selecione El Sexo")
{
	alert("Selecione Su Sexo")
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
	<?php include('titulo2.php') ?>
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
							<a href="<?php echo site_url()?>jmj"><b>Spanish&nbsp&nbsp</b> </a>
							<a href="<?php echo site_url()?>jmj_in"><b>English&nbsp&nbsp</b></a>
						</div>					
						<div class="navbar-collapse collapse">
                            <ul class="nav navbar-nav">
                                <li ><a a href="<?php echo site_url()?>jmj_in"><b>Home</b></a>
								   <ul class="dropdown-menu">
                                          <!--    <li class="active"><><b>Video Promocional De La Diócesis</b></a></li>-->
                                            <li><a href="<?php echo site_url()?>palabras_in"><b>Message from The bishop</b></a></li>                                         
                                        </ul>
                                 </li>
                                <li><a href="<?php echo site_url()?>noticias_in"><b>news</b></a></li>
								<li><a href="<?php echo site_url()?>info_in"><b>WYD</b></a></li>
								<li><a href="<?php echo site_url()?>razon_in"><b>Days in the Dioceses</b></a>
								 <ul class="dropdown-menu">
                                         
                                            <li><a href="<?php echo site_url()?>info_logo_in"><b>Logo of the DED Colón Kuna yala</b> </a></li>
											<li><a href="<?php echo site_url()?>parroquias_in"><b>Parishes </b></a></li>
											<li><a href="<?php echo site_url()?>historia_in"><b>History of the Diocese</b>  </a></li>
                                </ul>
                                </li>
								<li class="active"><a href="#"><b>Inscription or Registration</b></a>
								 <ul class="dropdown-menu">
                                            <li class="active"><a href="<?php echo site_url()?>registrate_in"><b>Form For Volunteer</b></a></li>
                                            <!--  <li><a href="<?php echo site_url()?>formulario2_in"><b>Formulario Para Peregrinos</b></a></li>-->
											<li><a href="<?php echo site_url()?>formulario3_in"><b>Form For the festival</b></a></li>
											<li><a href="<?php echo site_url()?>formulario4_in"><b>inscription days in the diocese</b></a></li>
											 <!-- <li ><a href="<?php echo site_url()?>verificate_in"><b>Check It Out</b></a></li> --> 
                                </ul>
                                </li>								
								<li ><a href="<?php echo site_url()?>preguntas_in"><b>Frequent questions</b></a></li>
								<li ><a href="<?php echo site_url()?>contacto_in"><b>Contact Us</b></a></li>
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
						<img class="img-responsive center-block" src="<?php echo base_url();?>images/paginas/voluntariado-ing.png" width="500" height="auto"/>
				</div> 
	 <?php if ($error==1) {?>			
			<div class="panel panel-success">
                 <div  ALIGN=center class="panel-heading"><h4><?php echo $mensaje ?></h4> </div>   
			</div>			
    <?php  }?>	

    <div class="container">
			<?php $attributes = array('class' => 'form ', 'novalidate'=>'novalidate', 'role' => 'form','id' => 'form','onsubmit' => 'return validacion()');
				echo form_open('insertar/insertar_datoi', $attributes );  ?>
		<div class="container">
									<div class="row">
										<h2 style="color:#fff"><P align="left"><b>PERSONAL INFORMATION	</b> </h2> 
										<div class="form-group">
											<div class="col-lg-1 ">
											   <h4 style="color:#fff"><P align="left"><b>PARISH CHURCH</b> </h4>
											</div>
											<div class="col-lg-6 ">
													<select class="form-control" id="parroquia" name="parroquia" placeholder="Selecione la Parroquia">
														 <option selected>Selecione la Parroquia</option>
														 <option value="1">Cuasi parroquia San Lorenzo</option>
														 <option value="2">Cuasi parroquia Santo Cristo de Esquipulas</option>
														 <option value="3">Parroquia Inmaculada Concepción de </option>
														 <option value="4">Parroquia Inmaculado Corazón de María</option>
														 <option value="5">Parroquia Jesús Pan de Vida</option>
														 <option value="6">Parroquia María Auxiliadora - Santa Rita aBasic
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
												   <h4 style="color:#fff"><P align="left"><b>First name</b> </h4>
												</div>
												 <div class="col-lg-3 ">
													<input name="nombre" type="text" class="form-control" id="nombre" placeholder="First name" maxlength="30">
												</div>
												 <div class="col-lg-1 ">
												   <h4 style="color:#fff"><P align="left"><b>Last name:</b> </h4>
												</div>
												 <div class="col-lg-3 ">
													<input name="apellido" type="text" class="form-control" id="apellido" placeholder="Last name" maxlength="30">
												</div>
												 <div class="col-lg-1 ">
												   <h4 style="color:#fff"><P align="left"><b>Gender:</b> </h4>
												</div>
												 <div class="col-lg-3 ">
													<select class="form-control" id="combosexo" name="combosexo">
														 <option selected>Gender</option>
														 <option value="M">Masculino</option>
														 <option value="F">Femenino</option>
													</select>
												</div>
											</div>
										</div>
										<div class="row">
											 <div class="col-lg-1">
												   <h4 style="color:#fff"><P align="left"><b>ID type:</b> </h4>
											 </div>
											 <div class="col-lg-3 ">
													<input name="cedula" type="text" class="form-control" id="cedula" placeholder="ID type." maxlength="30">    	
											</div>
											<div class="col-lg-3">
												   <h4 style="color:#fff"><P align="left"><b>Date of birth (MM-DD-YYYY):</b> </h4>
											 </div>
											 <div class="col-lg-3">
													<input name="fecha" type="date"  class="form-control" id="fecha" placeholder="Date of birth"  maxlength="12">  	
											</div>
										</div>
										<div class="row">
											 <div class="col-lg-3">
												   <h4 style="color:#fff"><P align="left"><b>Address:</b> </h4>
											 </div>
											 <div class="col-lg-8">
												<input name="domicilio" type="text" class="form-control col-sm-1"  id="domicilio" placeholder="Address"  maxlength="100">   	
											</div>
										</div>
										<div class="row">
											<div class="form-group">
												<div class="col-lg-1 ">
												   <h4 style="color:#fff"><P align="left"><b>Phone number:</b> </h4>
												</div>
												 <div class="col-lg-3 ">
													<input name="telefono" type="text" class="form-control" id="telefono" placeholder="Phone number: maxlength="20">
												</div>
												 <div class="col-lg-1 ">
												   <h4 style="color:#fff"><P align="left"><b>Cellphone number:</b> </h4>
												</div>
												 <div class="col-lg-3 ">
													<input name="celular" type="text" class="form-control" id="celular" placeholder="Cellphone number:" maxlength="20">
												</div>
												 <div class="col-lg-1 ">
												   <h4 style="color:#fff"><P align="left"><b>E-mail address:</b> </h4>
												</div>
												 <div class="col-lg-3 ">
													<input name="email" type="text" class="form-control" id="email" placeholder="email" maxlength="50">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="form-group">
												<div class="col-lg-1">
												   <h4 style="color:#fff"><P align="left"><b>ID type:</b> </h4>
												</div>
												 <div class="col-lg-3 ">
													<input name="tipodoc" type="text" class="form-control" id="tipodoc" placeholder="ID type" maxlength="30">
												</div>
												 <div class="col-lg-1">
												   <h4 style="color:#fff"><P align="left"><b>ID number:</b> </h4>
												</div>
												 <div class="col-lg-3 ">
													<input name="numdoc" type="text" class="form-control" id="numdoc" placeholder="ID number">
												</div>
												 <div class="col-lg-1 ">
												   <h4 style="color:#fff"><P align="left"><b>Blood type:</b> </h4>
												</div>
												 <div class="col-lg-3 ">
													<select class="form-control" id="combosangre" name="combosangre">
														 <option selected>Select Your Type of Blood</option>
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
											<h2 style="color:#fff"><P align="left"><b>Area</b> </h2> 
											<div class="form-group">
												<div class="col-lg-3">
													<h4 style="color:#fff"> 
														 <div class="form-check">
															 <label class="form-check-label">
																<input type="checkbox" class="form-check-input" id ="preparacion" name="preparacion"  value="1">
															   Pastoral Preparation
															</label>
														 </div>
													</h4> 		 
												</div>
												<div class="col-lg-3">
													<h4 style="color:#fff"> 
														 <div class="form-check">
															 <label class="form-check-label">
																<input type="checkbox" class="form-check-input" id="acogida" name="acogida" value="1">
																	Placement
															</label>
														 </div>
													</h4> 		 
												</div>
												<div class="col-lg-3">
													<h4 style="color:#fff"> 
														 <div class="form-check">
															 <label class="form-check-label">
																<input type="checkbox" class="form-check-input" id="voluntarios" name="voluntarios"  value="1">
																	Volunteers
															</label>
														 </div>
													</h4> 		 
												</div>
												<div class="col-lg-3">
													<h4 style="color:#fff"> 
														 <div class="form-check">
															 <label class="form-check-label">
																<input type="checkbox" class="form-check-input"id="logistica"  name="logistica"  value="1">
																	Logistics
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
																	Catechesis
															</label>
														</div>
													</h4> 		 
												</div>
												<div class="col-lg-3">
													<h4 style="color:#fff"> 
														 <div class="form-check">
															<label class="form-check-label">
																<input type="checkbox" class="form-check-input" id="festival"  name="festival"  value="1">
																	Youth festival
															</label>
														 </div>
													</h4> 		 
												</div>
												
																			
											</div>
										</div>
										
										
										<div class="row">
											<h2 style="color:#fff"><P align="left"><b>Area representative </b> </h2> 
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
											<h2 style="color:#fff"><P align="left"><b>AVAILABILITY</b> </h2> 
											<div class="form-group">
												<div class="col-lg-3">
													<h4 style="color:#fff"> 
														 <div class="form-check">
															 <label class="form-check-label">
															   <input type="checkbox" class="form-check-input" id="dispo1" name="dispo1" value="1">
																Weekends
															</label>
														 </div>
													</h4> 		 
												</div>
												<div class="col-lg-3">
													<h4 style="color:#fff"> 
														 <div class="form-check">
															 <label class="form-check-label">
																	<input type="checkbox" class="form-check-input" id="dispo2"  name="dispo2" value="1">
															   Monday to Friday	
															</label>
														 </div>
													</h4> 		 
												</div>
												<div class="col-lg-3">
													<h4 style="color:#fff"> 
														 <div class="form-check">
															 <label class="form-check-label">
																<input type="checkbox" class="form-check-input" id="dispo3" name="dispo3" value="1">
																	All week	
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
																	Morning	
															</label>
														 </div>
													</h4> 		 
												</div>
												<div class="col-lg-3">
													<h4 style="color:#fff"> 
														 <div class="form-check">
															 <label class="form-check-label">
																	<input type="checkbox" class="form-check-input" id="horarioT" name="horarioT"  value="1">
																	Afternoon
															</label>
														 </div>
													</h4> 		 
												</div>
												<div class="col-lg-3">
													<h4 style="color:#fff"> 
														 <div class="form-check">
															 <label class="form-check-label">
																<input type="checkbox" class="form-check-input" id="horarioI" name="horarioI" value="1">
																	Indifferent
															</label>
														 </div>
													</h4> 		 
												</div>							
											</div>
										</div>
						<!--<![Disponibilidad]-->
										<div class="row">
											<h2 style="color:#fff"><P align="left"><b>VOLUNTEERING</b> </h2> 
											<div class="form-group">
												<div class="col-lg-3">
													<h4 style="color:#fff"> 
														 <div class="form-check">
															 <label class="form-check-label">
															   <input type="checkbox" class="form-check-input"  id="volun1"  name="volun1" value="1">
																	Before the WYD
															</label>
														 </div>
													</h4> 		 
												</div>
												<div class="col-lg-3">
													<h4 style="color:#fff"> 
														 <div class="form-check">
															 <label class="form-check-label">
																	<input type="checkbox" class="form-check-input" id="volun2"  name="volun2" value="1">
																	After the WYD
															</label>
														 </div>
													</h4> 		 
												</div>
												<div class="col-lg-3">
													<h4 style="color:#fff"> 
														 <div class="form-check">
															 <label class="form-check-label">
																<input type="checkbox" class="form-check-input"  id="volun3" name="volun3" value="1">
																	All the time
															</label>
														 </div>
													</h4> 		 
												</div>							
											</div>
										</div>
						<!--<![Disponibilidad]-->
										<div class="row">
											<h2 style="color:#fff"><P align="left"><b>EDUCATION</b> </h2> 
											<div class="form-group">
												<div class="col-lg-3">
													<h4 style="color:#fff"> 
														 <div class="form-check">
															 <label class="form-check-label">
															   <input type="checkbox" class="form-check-input" id="estudio1" name="estudio1"  value="1">																
																	Basic Studies
															</label>
														 </div>
													</h4> 		 
												</div>
												<div class="col-lg-3">
													<h4 style="color:#fff"> 
														 <div class="form-check">
															 <label class="form-check-label">
																	<input type="checkbox" class="form-check-input" id="estudio2" name="estudio2" value="1">
																	High School
															</label>
														 </div>
													</h4> 		 
												</div>
												<div class="col-lg-3">
													<h4 style="color:#fff"> 
														 <div class="form-check">
															 <label class="form-check-label">
																<input type="checkbox" class="form-check-input"  id="estudio3" name="estudio3" value="1">
																	Vocational Training
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
																	Technical	
															</label>
														 </div>
													</h4> 		 
												</div>
												<div class="col-lg-3">
													<h4 style="color:#fff"> 
														 <div class="form-check">
															 <label class="form-check-label">
																	<input type="checkbox" class="form-check-input" id="estudio5" name="estudio5" value="1">
																		Bachelor´s degree or Engineering
															</label>
														 </div>
													</h4> 		 
												</div>
												<div class="col-lg-3">
													<h4 style="color:#fff"> 
														 <div class="form-check">
															 <label class="form-check-label">
																<input type="checkbox" class="form-check-input"  id="otroest" name="otroest"  value="1">
																	  Others
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
																	English
															</label>
														 </div>
													</h4> 		 
												</div>
												<div class="col-lg-2">
													<select class="form-control" id="comboIngles" name="comboIngles">
														 <option selected>Select the level</option>
														 <option value="1">Basic</option>
														 <option value="2">Average</option>
														 <option value="3"> Fluent</option>
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
																French
															</label>
														 </div>
													</h4> 		 
												</div>
												<div class="col-lg-2">
													<select class="form-control" id="comboFrances" name="comboFrances">
														 <option selected>Select the level</option>
														 <option value="1">Basic</option>
														 <option value="2">Average</option>
														 <option value="3"> Fluent</option>
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
																	German
															</label>
														 </div>
													</h4> 		 
												</div>
												<div class="col-lg-2">
													<select class="form-control" id="comboAleman" name="comboAleman">
														 <option selected>Select the level</option>
														 <option value="1">Basic</option>
														 <option value="2">Average</option>
														 <option value="3"> Fluent</option>
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
																	Italian
															</label>
														 </div>
													</h4> 		 
												</div>
												<div class="col-lg-2">
													<select class="form-control" id="comboItaliano" name="comboItaliano">
														 <option selected>Select the level</option>
														 <option value="1">Basic</option>
														 <option value="2">Average</option>
														 <option value="3"> Fluent</option>
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
																	Portuguese 
															</label>
														 </div>
													</h4> 		 
												</div>
												<div class="col-lg-2">
													<select class="form-control" id="comboPortu" name="comboPortu">
														 <option selected>Select the level</option>
														 <option value="1">Basic</option>
														 <option value="2">Average</option>
														 <option value="3"> Fluent</option>
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
														 <option selected>Select the level</option>
														 <option value="1">Basic</option>
														 <option value="2">Average</option>
														 <option value="3"> Fluent</option>
													</select>		 
												</div>
												<div class="col-lg-2">
													<input name="idioma6" type="text" class="form-control" id="idioma7" placeholder="Indique el Otro Idioma">		 
												</div>								
											</div>
										</div>
						<!--<![Experiencia]-->
										<div class="row">
											<h2 style="color:#fff"><P align="left"><b>EXPERIENCE</b> </h2> 
											<div class="form-group">
												<div class="col-lg-3">
													<h4 style="color:#fff"> 
														 <div class="form-check">
															 <label class="form-check-label">
															   <input type="checkbox" class="form-check-input" id="administracion" name="administracion" value="1">
																	Administration
															</label>
														 </div>
													</h4> 		 
												</div>
												<div class="col-lg-3">
													<h4 style="color:#fff"> 
														 <div class="form-check">
															 <label class="form-check-label">
																<input type="checkbox" class="form-check-input" id="turismo"  name="turismo" value="1">
																	Tourism
															</label>
														 </div>
													</h4> 		 
												</div>
												<div class="col-lg-3">
													<h4 style="color:#fff"> 
														 <div class="form-check">
															 <label class="form-check-label">
																<input type="checkbox" class="form-check-input" id="informatica" name="informatica" value="1">
																	IT
															</label>
														 </div>
													</h4> 		 
												</div>
												<div class="col-lg-3">
													<h4 style="color:#fff"> 
														 <div class="form-check">
															 <label class="form-check-label">
																<input type="checkbox" class="form-check-input"  id="seguridad" name="seguridad" value="1">
																	Security		
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
																Education
															</label>
														 </div>
													</h4> 		 
												</div>
												<div class="col-lg-3">
													<h4 style="color:#fff"> 
														 <div class="form-check">
															 <label class="form-check-label">
																<input type="checkbox" class="form-check-input"  id="sanidad" name="sanidad" value="1">
																	Health service
															</label>
														 </div>
													</h4> 		 
												</div>
												<div class="col-lg-3">
													<h4 style="color:#fff"> 
														 <div class="form-check">
															 <label class="form-check-label">
																<input type="checkbox" class="form-check-input"  id="traduccion" name="traduccion" value="1">
																	Translation
															</label>
														 </div>
													</h4> 		 
												</div>
												<div class="col-lg-3">
													<h4 style="color:#fff"> 
														 <div class="form-check">
															 <label class="form-check-label">
																<input type="checkbox" class="form-check-input"  id="recursohumano" name="recursohumano" value="1">
																	HH.RR.	
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
																Driver’s  license
															</label>
														 </div>
													</h4> 		 
												</div>
												<div class="col-lg-3">
													<h4 style="color:#fff"> 
														 <div class="form-check">
															 <label class="form-check-label">
																<input type="checkbox" class="form-check-input" id="auto" name="auto" value="1">
																Do you have a car
															</label>
														 </div>
													</h4> 		 
												</div>
												<div class="col-lg-3">
													<h4 style="color:#fff"> 
														 <div class="form-check">
															 <label class="form-check-label">
																<input type="checkbox" class="form-check-input" id="discapa"name="discapa" value="1">
																	Experience with disabled	
															</label>
														 </div>
													</h4> 		 
												</div>
												<div class="col-lg-3">
													<h4 style="color:#fff"> 
														 <div class="form-check">
															 <label class="form-check-label">
																<input type="checkbox" class="form-check-input" id="otro" name="otro" value="1">
																Others
															</label>
														 </div>
													</h4> 		 
												</div>								
											</div>
										</div>
										<div class="row" align="center">
											<div class="col-md-12">
												<input  type="submit" data-loading-text="Loading..." class="btn btn-default btn-lg" value="Send Information">
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