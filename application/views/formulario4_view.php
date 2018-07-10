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

  
function ocultar(){
	document.getElementById('aa').style.display='none';
	document.getElementById('ab').style.display='none';
	document.getElementById('ac').style.display='none';
	document.getElementById('ad').style.display='none';
	document.getElementById('ae').style.display='none';
	/*cument.getElementById('option2').style.visibility="hidden";
	*/
}
function myFunction(i)
{
	var codinscrip =  document.getElementById("codigo_jmj").value;
	var nombre_grupo  =  document.getElementById("nombre_grupo").value;
    var nacion  =  document.getElementById("nacion").value;
	var nombre_resp  =  document.getElementById("nombre_resp").value;
    var apellido_resp  =  document.getElementById("apellido_resp").value;
	var sexo_resp  =  document.getElementById("sexo_resp").value;
	var fecha_resp  =  document.getElementById("fecha_resp").value;
	var nombre_vice  =  document.getElementById("nombre_resp").value;
    var apellido_vice  =  document.getElementById("apellido_vice").value;
	var sexo_vice  =  document.getElementById("sexo_vice").value;
	var fecha_vice  =  document.getElementById("fecha_vice").value;
	var acepto  =  document.getElementById("acepto").value;
	var x ,y,z;
	x=1;
	y=1;
	z=1;
	if(i==1)
	{	  
		  if (nombre_grupo == "" || nombre_grupo == null){
			  alert("Debe Introducir el Nombre del Grupo")
			  x=0;
			}
		 else if (nacion == "" || nacion == null){
			  alert("Debe Introducir La Nación")
			  x=0;
			}	
		  if (x == 1 ) {
			  document.getElementById("nombre_resp").focus();
				 document.getElementById('ab').style.display = 'block';
				$('[href="#responsable"]').tab('show');
				 $("#nombre_resp").focus();
			}
	}
	else if(i==2)
	{
		
		if (nombre_resp == "" || nombre_resp == null){
			  alert("Debe Introducir el Nombre del Responsable del Grupo")
			  y=0;
			}
		 else if (apellido_resp == "" ||  apellido_resp==null){
			  alert("Debe Introducir el Apellido del Responsable del Grupo")
			  y=0;
			}	
		 else if (sexo_resp == "Seleccione El Sexo"){
			  alert("Debe Introducir el Sexo del Responsable del Grupo")
			  y=0;
			}
          else if (fecha_resp== "" || fecha_resp == null){
			  alert("Debe Introducir La Fecha de Nacimiento del Responsable")
			  y=0;
			}			
		 if (y == 1) {
				document.getElementById('ac').style.display = 'block';
				$('[href="#viceresponsable"]').tab('show');
		 }
	}
	else if(i==3)
	{	
		if (nombre_vice == "" || nombre_vice == null){
			  alert("Debe Introducir el Nombre del ViceResponsable del Grupo")
			  z=0;
			}
		 else if (apellido_vice == "" || apellido_vice==null){
			  alert("Debe Introducir el Apellido del ViceResponsable del Grupo")
			  z=0;
			}	
		 else if (sexo_vice == "Seleccione El Sexo"){
			  alert("Debe Introducir el Sexo del ViceResponsable del Grupo")
			  z=0;
			}
		 else if (fecha_vice== "" || fecha_vice == null){
			  alert("Debe Introducir La Fecha de Nacimiento del ViceResponsable")
			  z=0;
			}		
		 if (z == 1) {
		   document.getElementById('ad').style.display = 'block';
	       $('[href="#completa"]').tab('show');
		 }
	}
	else if(i==4)
	{
		
			document.getElementById('ae').style.display = 'block';
			 $('[href="#opcional"]').tab('show');
		
	}
	else if(i==5)
	{
		if (codinscrip == "" || codinscrip == null)
		{
		  alert("Debe Introducir el Codigo de Inscripción a al JMJ")
		 
		}
		else {
			 document.getElementById('aa').style.display = 'block';
			$('[href="#describe"]').tab('show');
		}
	}
	
	

}

function validacion() {
var valor =0;

    var nombre_grupo  =  document.getElementById("nombre_grupo").value;
    var nacion  =  document.getElementById("nacion").value;
	var nombre_resp  =  document.getElementById("nombre_resp").value;
    var apellido_resp  =  document.getElementById("apellido_resp").value;
	var sexo_resp  =  document.getElementById("sexo_resp").value;
	var nombre_vice  =  document.getElementById("nombre_resp").value;
    var apellido_vice  =  document.getElementById("apellido_resp").value;
	var sexo_vice  =  document.getElementById("sexo_resp").value;
	var fecha_vice  =  document.getElementById("fecha_resp").value;
		
		 if (nombre_grupo == "" || nombre_grupo == null){
			  alert("Debe Introducir el Nombre del Grupo")
			  valor++;
			  return false;
			}
		 else if (nacion == "" || nacion == null){
			  alert("Debe Introducir La Nación")
			  valor++;
			  return false;
			}
         else if (nombre_resp == "" || nombre_resp == null){
			  alert("Debe Introducir el Nombre del Responsable del Grupo")
			  valor++;
			  return false;
			}
		 else if (apellido_resp == "" || nacion == apellido_resp){
			  alert("Debe Introducir el Apellido del Responsable del Grupo")
			   valor++;
			  return false;
			}	
		 else if (sexo_resp == "Seleccione El Sexo"){
			  alert("Debe Introducir el Sexo del Responsable del Grupo")
			  valor++;
			  return false;
			}	
         else if (nombre_vice == "" || nombre_vice == null){
			  alert("Debe Introducir el Nombre del ViceResponsable del Grupo")
			  valor++;
			  return false;
			}
		 else if (apellido_vice == "" || apellido_vice==null){
			  alert("Debe Introducir el Apellido del ViceResponsable del Grupo")
			  valor++;
			  return false;
			}	
		 else if (sexo_vice == "Seleccione El Sexo"){
			  alert("Debe Introducir el Sexo del ViceResponsable del Grupo")
			  valor++;
			  return false;
			}
		 else if (fecha_vice== "" || fecha_vice == null){
			  alert("Debe Introducir La Fecha de Nacimiento del ViceResponsable")
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
function mynacionalsi() {
    if (document.getElementById("nacional_si").checked == true )
	{
		document.getElementById("nacional_no").disabled = true;
	}
	else {document.getElementById("nacional_no").disabled = false}
}
function mynacionalno() {
    if (document.getElementById("nacional_no").checked == true )
	{
		document.getElementById("nacional_si").disabled = true;
	}
	else {document.getElementById("nacional_si").disabled = false;}
}
function mymenorsi() {
    if (document.getElementById("menor_si").checked == true )
	{
		document.getElementById("menor_no").disabled = true;
	}
	else {document.getElementById("menor_no").disabled = false}
}
function mymenorno() {
    if (document.getElementById("menor_no").checked == true )
	{
		document.getElementById("menor_si").disabled = true;
	}
	else {document.getElementById("menor_si").disabled = false;}
}
function mynecesidadsi() {
    if (document.getElementById("necesidad_si").checked == true )
	{
		document.getElementById("necesidad_no").disabled = true;
	}
	else {document.getElementById("necesidad_no").disabled = false}
}
function mynecesidadno() {
    if (document.getElementById("necesidad_no").checked == true )
	{
		document.getElementById("necesidad_si").disabled = true;
	}
	else {document.getElementById("necesidad_si").disabled = false;}
}
function myreligiososi() {
    if (document.getElementById("religioso_si").checked == true )
	{
		document.getElementById("religioso_no").disabled = true;
	}
	else {document.getElementById("religioso_no").disabled = false}
}
function myreligiosono() {
    if (document.getElementById("religioso_no").checked == true )
	{
		document.getElementById("religioso_si").disabled = true;
	}
	else {document.getElementById("religioso_si").disabled = false;}
}
</script> 
<body class="home" onload="ocultar();" >
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
				
         
                <div class="col-lg-80 col-sm-80">
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
											<li><a href="<?php echo site_url()?>formulario3"><b>Festival de la Juventud</b></a></li>
											<li  class="active"><a href="<?php echo site_url()?>/formulario4"><b>Inscripción Dias en las Diócesis</b></a></li>
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
					 <img class="img-responsive center-block" src="<?php echo base_url();?>images/paginas/festival1.png" width="500" height="auto"/>
			</div> 
		     <?php if ($error==1) {?>			
					<div class="panel panel-success">
						<div  ALIGN=center class="panel-heading"><h5><?php echo $mensaje ?></h5> </div>   
					</div>			
			<?php  }?>			
				

		<div class="container">
			<?php $attributes = array('class' => 'form ', 'novalidate'=>'novalidate', 'role' => 'form','id' => 'form','onsubmit' => 'return validacion()');
				echo form_open('insertarD/insertar_dato', $attributes );  ?>
				
				
				   
				    <ul  class="nav nav-tabs">
					            <li ><a href="#registra" data-toggle="tab" style="color:#000">CÓDIGO DE INSCRIPCIÓN</a></li>
                                <li id="aa" class=""><a href="#describe" data-toggle="tab" style="color:#000">DESCRIBE TU GRUPO</a></li>
                                <li id='ab' class=""><a href="#responsable" data-toggle="tab" style="color:#000">RESPONSABLE DEL GRUPO</a></li>
								<li id='ac' class=""><a href="#viceresponsable" data-toggle="tab" style="color:#000">VICE RESPONSABLE</a></li>
								<li id='ad' class=""><a href="#completa" data-toggle="tab" style="color:#000">COMPLETA TU INFORMACIÓN</a></li>
								<li id='ae' class=""><a href="#opcional" data-toggle="tab"style="color:#000">OPCIONAL</a></li>
                    </ul>
				<div  class="tab-content clearfix">
				            <div  id="registra"  class="tab-pane fade active in">   
				
								  <div class="row">
										<h2 style="color:#000"><P align="center"><b>UTILIZA ESTE FORMULARIO PARA DESCRIBIR A TU GRUPO</b> </h2> 		
									 </div>
								
								
								<div class="row">
										<div class="form-group">
											<div class="col-lg-4">
											  </div>
										</div>
								</div>
								<div class="row">
										<div class="form-group">
											<div class="col-lg-4">
											  </div>
										</div>
								</div>
								
								<div class="row">
										<div class="form-group">
											<div class="col-lg-4">
											  </div>
										</div>
								</div>
								
								
								
								
								<div class="row">
										<div class="form-group">
											<div class="col-lg-4">
											   <h3 style="color:#000"><P align="left"><b>CÓDIGO DE INSCRIPCIÓN A LA JMJ:</b> </h3>
											</div>
											 <div class="col-lg-7">
												<input name="codigo_jmj" type="text" class="form-control" id="codigo_jmj" placeholder="CÓDIGO DE INSCRIPCIÓN A LA JMJ " maxlength="45">
											</div>
										</div>
								</div>
									
								
                                <div class="row">
										<div class="form-group">
											<div class="col-lg-4">
											  </div>
										</div>
								</div>
								<div class="row">
										<div class="form-group">
											<div class="col-lg-4">
											  </div>
										</div>
								</div>
								
								<div class="row">
										<div class="form-group">
											<div class="col-lg-4">
											  </div>
										</div>
								</div>
								 
								<div class="row">
										
				                    <div class="row" align="center">
										<div class="col-md-12">
												<input  type="" data-loading-text="Loading..." class="btn btn-default btn-lg" value="SIGUIENTE" onclick="myFunction(5)">
										</div>
								    </div>
								</div>
								<div class="row">
										<div class="form-group">
											<div class="col-lg-4">
											  </div>
										</div>
								</div>
								<div class="row">
										<div class="form-group">
											<div class="col-lg-4">
											  </div>
										</div>
								</div>
								<div class="row">
										<div class="form-group">
											<div class="col-lg-4">
											  </div>
										</div>
								</div>
								<div class="row">
										<div class="form-group">
											<div class="col-lg-4">
											  </div>
										</div>
								</div>
								<div class="row">
										<div class="form-group">
											<div class="col-lg-4">
											  </div>
										</div>
								</div>
								<div class="row">
										<div class="form-group">
											<div class="col-lg-4">
											  </div>
										</div>
								</div>
								<div class="row">
										<div class="form-group">
											<div class="col-lg-4">
											  </div>
										</div>
								</div>
								<div class="row">
										<div class="form-group">
											<div class="col-lg-4">
											  </div>
										</div>
								</div>
								<div class="row">
										<div class="form-group">
											<div class="col-lg-4">
											  </div>
										</div>
								</div>
				
				            </div>
				             
						
								
								
								
				
							<div  id="describe"  class="tab-pane fade">
							
                                     <div class="row">
										<h2 style="color:#000"><P align="center"><b>UTILIZA ESTE FORMULARIO PARA DESCRIBIR A TU GRUPO</b> </h2> 		
									 </div>
									<div class="row">
										<div class="form-group">
											<div class="col-lg-3">
											   <h3 style="color:#000"><P align="left"><b>Nombre del  Grupo :</b> </h3>
											</div>
											 <div class="col-lg-7">
												<input name="nombre_grupo" type="text" class="form-control" id="nombre_grupo" placeholder="Nombre del Cantante o Grupo " maxlength="45">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="form-group">
											<div class="col-lg-3">
											   <h3 style="color:#000"><P align="left"><b>Nación :</b> </h3>
											</div>
											 <div class="col-lg-7">
												<input name="nacion" type="text" class="form-control" id="nacion" placeholder="Nación " maxlength="45">
											</div>
										</div>
									</div> 
									<div class="row">
										<div class="form-group">
											<div class="col-lg-3">
											   <h3 style="color:#000"><P align="left"><b>Ciudad :</b> </h3>
											</div>
											 <div class="col-lg-7">
												<input name="ciudad" type="text" class="form-control" id="ciudad" placeholder="Ciudad" maxlength="45">
											</div>
										</div>
									</div> 
									<div class="row">
										 <div class="col-lg-3">
											   <h3 style="color:#000"><P align="left"><b>Lengua Materna :</b> </h3>
										 </div>
										 <div class="col-lg-7">
											<select class="form-control" id="lengua_ma" name="lengua_ma" placeholder="Seleccione su Lengua Materna">
												 <option selected>Seleccione Su Lengua Materna</option>
												 <option value="1">Alemán</option>
												 <option value="2">Árabe</option>
												 <option value="3">Bengali</option>
												 <option value="4">Chino</option>
												 <option value="5">Español</option>
												 <option value="6">Francés</option>
												 <option value="7">Hindú</option>
												 <option value="8">Inglés</option>
												 <option value="9">Italiano</option>
												 <option value="10">Japonés</option>
												 <option value="11">Mandarín</option>
												 <option value="80">Portugués</option>
												 <option value="13">Ruso</option>
											</select>  	
										</div>
										<div class="col-lg-2">
											<h3 style="color:#fff"> 
												 <div class="form-check">
													<label class="form-check-label">
														<input type="checkbox" class="form-check-input" id ="multilingue" name="multilingue"  value="1">
																Multilingüe
													</label>
												 </div>
											</h3> 		 
										</div>			
									</div>
									
									 <div class="row">
										<h2 style="color:#000"><P align="left"><b>&nbsp&nbsp&nbspTIPO DE  GRUPO</b> </h2> 		
									 </div>
									
									<div class="row">
										<div class="form-group">
											<div class="col-lg-3">
											   <h3 style="color:#000"><P align="left"><b>Nacional </b> </h3>
											</div>
											<div class="col-lg-1">
											<h3 style="color:#fff"> 
												<div class="form-check">
												<label class="form-check-label">
													<input type="checkbox" class="form-check-input" name="nacional_si" id="nacional_si" value="1" onclick="mynacionalsi()">
													SI
												  </label>
												</div>
											</h3>											
											</div>
											<div class="col-lg-3">
											<h3 style="color:#fff"> 
												<div class="form-check">
												<label class="form-check-label">
													<input type="checkbox" class="form-check-input" name="nacional_no" id="nacional_no" value="2" onclick="mynacionalno()">
													NO
												  </label>
												</div>
											</div>
											</h3>
										</div>
									</div>
									 
									<div class="row">
										<div class="form-group">
											<div class="col-lg-3">											
											   <h3 style="color:#000"><P align="left"><b>Diocesano:</b></h3>
											</div>
											<div class="col-lg-7">
												<a target="_blank"  data-toggle="tooltip" data-placement="top" title="Escribir el nombre de la diócesis de la que proviene el grupo">
													<input name="diocesano" type="text" class="form-control" id="diocesano" placeholder="Diocesano" maxlength="45">
												</a>	
											</div>	 
										</div>	
									</div>
									<div class="row">
										<div class="form-group">
											<div class="col-lg-3">											
											   <h3 style="color:#000"><P align="left"><b>Movimiento/Comunidad:</b></h3>
											</div>
											<div class="col-lg-7">
												<a target="_blank"  data-toggle="tooltip" data-placement="top" title="Escribir el nombre del movimiento, comunidad, asociación">
													<input name="comunidad" type="text" class="form-control" id="comunidad" placeholder="Movimiento/Comunidad:" maxlength="45">
												</a>	
											</div>	 
										</div>	
									</div>
									<div class="row">
										<div class="form-group">
											<div class="col-lg-3">											
											   <h3 style="color:#000"><P align="left"><b>Otros:</b></h3>
											</div>
											<div class="col-lg-7">
												<a target="_blank"  data-toggle="tooltip" data-placement="top" title="Especificar otro tipo de grupo">
													<input name="otros_a" type="text" class="form-control" id="otros_a" placeholder="Otros" maxlength="45">
												</a>	
											</div>	 
										</div>	
									</div>
									<div class="row">
										<div class="form-group">
											<div class="col-lg-3">
											   <h3 style="color:#000"><P align="left"><b>Nº Previsto De Participantes:</b> </h3>
											</div>
											 <div class="col-lg-7">
												<input name="total_parti" type="text" class="form-control" id="total_parti" placeholder="Previsto De Participantes:" maxlength="45" onkeypress="return valida(event)">
											</div>
										</div>
									</div> 
									<div class="row">
										<div class="form-group">
											<div class="col-lg-3">
											   <h3 style="color:#000"><P align="left"><b>Nº de Participantes Hombres:</b> </h3>
											</div>
											 <div class="col-lg-7">
												<input name="total_hombres" type="text" class="form-control" id="total_hombres" placeholder="Nº de participantes hombres" maxlength="45" onkeypress="return valida(event)">
											</div>
										</div>
									</div> 
									<div class="row">
										<div class="form-group">
											<div class="col-lg-3">
											   <h3 style="color:#000"><P align="left"><b>Nº de Participantes Mujeres:</b> </h3>
											</div>
											 <div class="col-lg-7">
												<input name="total_mujeres" type="text" class="form-control" id="total_mujeres" placeholder="Nº de participantes mujeres" maxlength="45" onkeypress="return valida(event)">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="form-group">
											<div class="col-lg-3">
											   <h3 style="color:#000"><P align="left"><b>¿Viaja Con Menores De Edad?</b> </h3>
											</div>
											<div class="col-lg-1">
											<h3 style="color:#fff"> 
												<div class="form-check">
												<label class="form-check-label">
													<input type="checkbox" class="form-check-input" name="menor_si" id="menor_si" value="1" onclick="mymenorsi()">
													SI
												  </label>
												</div>
											</h3>											
											</div>
											<div class="col-lg-3">
											<h3 style="color:#fff"> 
												<div class="form-check">
												<label class="form-check-label">
													<input type="checkbox" class="form-check-input" name="menor_no" id="menor_no" value="1" onclick="mymenorno()">
													NO
												  </label>
												</div>
											</div>
											</h3>
										</div>
									</div>
									<div class="row">
										<div class="form-group">
											<div class="col-lg-3">
											   <h3 style="color:#000"><P align="left"><b>Nº de Participantes Menores de Edad:</b> </h3>
											</div>
											 <div class="col-lg-7">
												<input name="total_menor" type="text" class="form-control" id="total_menor" placeholder="Nº de Participantes Menores de Edad:" maxlength="45" onkeypress="return valida(event)">
											</div>
										</div>
									</div> 
									<div class="row">
										<div class="form-group">
											<div class="col-lg-5">
											   <h3 style="color:#000"><P align="left"><b>¿Viaja con Peregrinos con Necesidades Especiales?</b> </h3>
											</div>
											<div class="col-lg-1">
											<h3 style="color:#fff"> 
												<div class="form-check">
												<label class="form-check-label">
													<input type="checkbox" class="form-check-input" name="necesidad_si" id="necesidad_si" value="1" onclick="mynecesidadsi()">
													SI
												  </label>
												</div>
											</h3>											
											</div>
											<div class="col-lg-3">
											<h3 style="color:#fff"> 
												<div class="form-check">
												<label class="form-check-label">
													<input type="checkbox" class="form-check-input" name="necesidad_no" id="necesidad_no" value="1" onclick="mynecesidadno()">
													NO
												  </label>
												</div>
											</div>
											</h3>
										</div>
									</div>
									<div class="row">
										<h2 style="color:#000"><P align="left"><b>¿NÚMERO DE PARTICIPANTES Y QUÉ TIPO DE DISCAPACIDAD?</b> </h2> 		
									 </div>
									<div class="row"> 
										<div class="col-lg-2">
											<h3 style="color:#fff"> 
												 <div class="form-check">
													<label class="form-check-label">
														<input type="checkbox" class="form-check-input" id ="auditiva" name="auditiva"  value="1">
															Auditiva
													</label>
												 </div>
											</h3> 		 
										</div>	
										 <div class="col-lg-2">
												<input name="total_audi" type="text" class="form-control" id="total_audi" placeholder="" maxlength="45" onkeypress="return valida(event)">
										</div>
										<div class="col-lg-1">
										</div>
										<div class="col-lg-2">
											<h3 style="color:#fff"> 
												 <div class="form-check">
													<label class="form-check-label">
														<input type="checkbox" class="form-check-input" id ="motora" name="motora"  value="1">
															Motora
													</label>
												 </div>
											</h3> 		 
										</div>	
										 <div class="col-lg-2">
												<input name="total_motora" type="text" class="form-control" id="total_motora" placeholder="" maxlength="45" onkeypress="return valida(event)">
										</div>
									</div>	
									
									<div class="row"> 
										<div class="col-lg-2">
											<h3 style="color:#fff"> 
												 <div class="form-check">
													<label class="form-check-label">
														<input type="checkbox" class="form-check-input" id ="cognitiva" name="cognitiva"  value="1">
															Cognitiva
													</label>
												 </div>
											</h3> 		 
										</div>	
										 <div class="col-lg-2">
												<input name="total_cogn" type="text" class="form-control" id="total_cogn" placeholder="" maxlength="45" onkeypress="return valida(event)">
										</div>
										<div class="col-lg-1">
										</div>
										<div class="col-lg-2">
											<h3 style="color:#fff"> 
												 <div class="form-check">
													<label class="form-check-label">
														<input type="checkbox" class="form-check-input" id ="visual" name="visual"  value="1">
															Visual
													</label>
												 </div>
											</h3> 		 
										</div>	
										 <div class="col-lg-2">
												<input name="total_visual" type="text" class="form-control" id="total_visual" placeholder="" maxlength="45" onkeypress="return valida(event)">
										</div>
									</div>	
									
									
									<div class="row"> 
										<div class="col-lg-2">
											<h3 style="color:#fff"> 
												 <div class="form-check">
													<label class="form-check-label">
														<input type="checkbox" class="form-check-input" id ="mental" name="mental"  value="1">
															Mental
													</label>
												 </div>
											</h3> 		 
										</div>	
										 <div class="col-lg-2">
												<input name="total_mental" type="text" class="form-control" id="total_mental" placeholder="" maxlength="45" onkeypress="return valida(event)">
										</div>
										<div class="col-lg-1">
										</div>
										<div class="col-lg-2">
											<h3 style="color:#fff"> 
												 <div class="form-check">
													<label class="form-check-label">
														<input type="checkbox" class="form-check-input" id ="visceral" name="visceral"  value="1">
															Visceral
													</label>
												 </div>
											</h3> 		 
										</div>	
										 <div class="col-lg-2">
												<input name="total_visceral" type="text" class="form-control" id="total_visceral" placeholder="" maxlength="45" onkeypress="return valida(event)">
										</div>
									</div>	
									
									<div class="row"> 
										<div class="col-lg-2">
											<h3 style="color:#fff"> 
												 <div class="form-check">
													<label class="form-check-label">
														<input type="checkbox" class="form-check-input" id ="cronica" name="cronica"  value="1">
															Enfermedad Crónica
													</label>
												 </div>
											</h3> 		 
										</div>	
										<div class="col-lg-2">
												<input name="total_cronica" type="text" class="form-control" id="total_cronica" placeholder="" maxlength="45" onkeypress="return valida(event)">
										</div>
										
									</div>
									<div class="row">
										<div class="form-group">
											<div class="col-lg-5">
											   <h3 style="color:#000"><P align="left"><b>¿Viaja con Algún Religioso(A)?</b> </h3>
											</div>
											<div class="col-lg-1">
											<h3 style="color:#fff"> 
												<div class="form-check">
												<label class="form-check-label">
													<input type="checkbox" class="form-check-input" name="religioso_si" id="religioso_si" value="1" onclick="myreligiososi()" >
													SI
												  </label>
												</div>
											</h3>											
											</div>
											<div class="col-lg-3">
											<h3 style="color:#fff"> 
												<div class="form-check">
												<label class="form-check-label">
													<input type="checkbox" class="form-check-input" name="religioso_no" id="religioso_no" value="1" onclick="myreligiosono()">
													NO
												  </label>
												</div>
											</div>
											</h3>
										</div>
									</div>
									<div class="row" align="center">
										<div class="col-md-12">
												<input  type="" data-loading-text="Loading..." class="btn btn-default btn-lg" value="SIGUIENTE" onclick="myFunction(1)">
										</div>
									</div>
									
							</div> 
							<div id="responsable" class="tab-pane fade">
							         <div class="row">
										<h1 style="color:#000"><P align="center"><b>Utiliza este formulario para introducir tus datos como RESPONSABLE DEL GRUPO</b> </h1> 		
									 </div>
									 <div class="row">
										<h2 style="color:#000"><P align="left"><b>Recuerda que puedes ser responsable de grupo sólo si eres mayor de edad. Por favor, presta la máxima atención al introducir tu Email, puesconstituirá el medio principal de comunicación con tu grupo y se convertiráen tu nombre de usuario para acceder al área reservada y para completarla fase 2 de la inscripción.</b> </h2> 		
									 </div>
									<div class="row">
											<div class="form-group">
												<div class="col-lg-3">
												   <h3 style="color:#000"><P align="left"><b>Nombre</b> </h3>
												</div>
												 <div class="col-lg-6">
													<input name="nombre_resp" type="text" class="form-control" id="nombre_resp" placeholder="Nombre " maxlength="45">
												</div>
											</div>
									</div>
									<div class="row">
										<div class="form-group">
												<div class="col-lg-3">
												   <h3 style="color:#000"><P align="left"><b>Apellido:</b> </h3>
												</div>
												 <div class="col-lg-6">
													<input name="apellido_resp" type="text" class="form-control" id="apellido_resp" placeholder="apellido " maxlength="45">
												</div>
										</div>
									</div>	
									<div class="row">	
										<div class="form-group">
												 <div class="col-lg-3 ">
												   <h3 style="color:#fff"><P align="left"><b>Sexo:</b> </h3>
												</div>
												 <div class="col-lg-3 ">
													<select class="form-control" id="sexo_resp" name="sexo_resp">
														 <option selected>Seleccione El Sexo</option>
														 <option value="M">Masculino</option>
														 <option value="F">Femenino</option>
													</select>
												</div>
										</div>	
									</div>
										<div class="row">
											
											<div class="col-lg-3">
												   <h3 style="color:#fff"><P align="left"><b>F. de Nacimiento (MM-DD-YYYY):</b> </h3>
											 </div>
											 <div class="col-lg-6">
													<input name="fecha_resp" type="date" class="form-control" id="fecha_resp" placeholder="Fecha de Nacimiento."  maxlength="80">  	
											</div>
										</div>	
                                        <div class="row">
												<div class="form-group">
													<div class="col-lg-4">
													   <h3 style="color:#000"><P align="left"><b>Tipo de documento de identidad</b> </h3>
													</div>
													<div class="col-lg-2">
													<h3 style="color:#fff"> 
														<div class="form-check">
														<label class="form-check-label">
															<input type="checkbox" class="form-check-input" name="pasap_resp" id="pasap_resp" value="1">
															Pasaporte
														  </label>
														</div>
													</h3>											
													</div>
													<div class="col-lg-3">
													<h3 style="color:#fff"> 
														<div class="form-check">
														<label class="form-check-label">
															<input type="checkbox" class="form-check-input" name="cedula_resp" id="cedula_resp" value="2">
															Tarjeta de identidad
														  </label>
														</div>
													</div>
													</h3>
												</div>
										</div>
										<div class="row">
											
											<div class="col-lg-3">
												   <h3 style="color:#fff"><P align="left"><b>Número de documento:</b> </h3>
											 </div>
											 <div class="col-lg-6">
													<input name="ndoc_resp" type="text" class="form-control" id="ndoc_resp" placeholder="Número de documento"  maxlength="80">  	
											</div>
										</div>	
										<div class="row">
											
											<div class="col-lg-3">
												   <h3 style="color:#fff"><P align="left"><b>Dirección postal:</b> </h3>
											 </div>
											 <div class="col-lg-6">
													<input name="postal_resp" type="text" class="form-control" id="postal_resp" placeholder="Dirección postal"  maxlength="80">  	
											</div>
										</div>	
										
										<div class="row">
											
											<div class="col-lg-3">
												   <h3 style="color:#fff"><P align="left"><b>Ciudad:</b> </h3>
											 </div>
											 <div class="col-lg-6">
													<input name="ciudad_resp" type="text" class="form-control" id="ciudad_resp" placeholder="Ciudad"  maxlength="80">  	
											</div>
										</div>	
										
										<div class="row">
											
											<div class="col-lg-3">
												   <h3 style="color:#fff"><P align="left"><b>Nación:</b> </h3>
											 </div>
											 <div class="col-lg-6">
													<input name="nacion_resp" type="text" class="form-control" id="nacion_resp" placeholder="Nación"  maxlength="80">  	
											</div>
										</div>	
										
										<div class="row">
											
											<div class="col-lg-3">
												   <h3 style="color:#fff"><P align="left"><b>Teléfono Oficina:</b> </h3>
											 </div>
											 <div class="col-lg-6">
												<a target="_blank"  data-toggle="tooltip" data-placement="top" title="Con prefijo internacional de su País">
													<input name="telofi_resp" type="text" class="form-control" id="telofi_resp" placeholder="Teléfono Oficina" maxlength="45">
												</a>	
											</div>	
										</div>	
										
										<div class="row">
											
											<div class="col-lg-3">
												   <h3 style="color:#fff"><P align="left"><b>Teléfono Domicilio:</b> </h3>
											 </div>
											 <div class="col-lg-6">
												<a target="_blank"  data-toggle="tooltip" data-placement="top" title="Con prefijo internacional de su País">
													<input name="teldom_resp" type="text" class="form-control" id="teldom_resp" placeholder="Teléfono Domicilio" maxlength="45">
												</a>	
											</div>	
										</div>	
										<div class="row">
											
											<div class="col-lg-3">
												   <h3 style="color:#fff"><P align="left"><b>Móvil:</b> </h3>
											 </div>
											 <div class="col-lg-6">
													<input name="movil_resp" type="text" class="form-control" id="movil_resp" placeholder="Movil:"  maxlength="80">  	
											</div>
										</div>	
										<div class="row">
											
											<div class="col-lg-3">
												   <h3 style="color:#fff"><P align="left"><b>Fax</b> </h3>
											 </div>
											 <div class="col-lg-6">
													<input name="fax_resp" type="text" class="form-control" id="fax_resp" placeholder="Fax"  maxlength="80">  	
											</div>
										</div>	
										<div class="row">
											
											<div class="col-lg-3">
												   <h3 style="color:#fff"><P align="left"><b>Email:</b> </h3>
											 </div>
											 <div class="col-lg-6">
													<input name="email_resp" type="text" class="form-control" id="email_resp" placeholder="Email"  maxlength="80">  	
											</div>
										</div>	
										
										<div class="row">
											
											<div class="col-lg-3">
												   <h3 style="color:#fff"><P align="left"><b>Repetir Email:</b> </h3>
											 </div>
											 <div class="col-lg-6">
													<input name="remail_resp" type="text" class="form-control" id="remail_resp" placeholder="Repetir Email"  maxlength="80">  	
											</div>
										</div>	
										
										<div class="row">
											
											<div class="col-lg-3">
												   <h3 style="color:#fff"><P align="left"><b>Lengua preferida para las comunicaciones:</b> </h3>
											 </div>
											 <div class="col-lg-6">
													<input name="idioma_resp" type="text" class="form-control" id="idioma_resp" placeholder="Lengua preferida para las comunicaciones:"  maxlength="80">  	
											</div>
										</div>	
										<div class="row">
											
											<div class="col-lg-3">
												   <h3 style="color:#fff"><P align="left"><b>Notas:</b> </h3>
											 </div>
											 <div class="col-lg-6">
													<input name="notas_resp" type="text" class="form-control" id="notas_resp" placeholder="Notas:"  maxlength="80">  	
											</div>
										</div>	
										<div class="row" align="center">
										<div class="col-md-12">
												<input  type="" data-loading-text="Loading..." class="btn btn-default btn-lg" value="SIGUIENTE" onclick="myFunction(2)">
										</div>
									</div>
									
							</div>
							<div id="viceresponsable" class="tab-pane fade">
							         <div class="row">
										<h1 style="color:#000"><P align="center"><b>Utiliza este formulario para introducir los datos del VICERRESPONSABLE</b> </h1> 		
									 </div>
									 <div class="row">
										<h2 style="color:#000"><P align="left"><b>El vicerresponsable recibirá las mismas comunicaciones por Email que el
responsable y lo sustituirá en caso de necesidad. También el vicerresponsable tiene que ser mayor de edad. Nota: El responsable se encargará de introducir los datos del vicerresponsable, previo consentimiento del interesado, y los utilizará con el fin exclusivo de la participación en los DED 2019.</b> </h2> 		
									 </div>
									<div class="row">
											<div class="form-group">
												<div class="col-lg-3">
												   <h3 style="color:#000"><P align="left"><b>Nombre</b> </h3>
												</div>
												 <div class="col-lg-6">
													<input name="nombre_vice" type="text" class="form-control" id="nombre_vice" placeholder="Nombre " maxlength="45">
												</div>
											</div>
									</div>
									<div class="row">
										<div class="form-group">
												<div class="col-lg-3">
												   <h3 style="color:#000"><P align="left"><b>Apellido:</b> </h3>
												</div>
												 <div class="col-lg-6">
													<input name="apellido_vice" type="text" class="form-control" id="apellido_vice" placeholder="apellido " maxlength="45">
												</div>
										</div>
									</div>	
									<div class="row">	
										<div class="form-group">
												 <div class="col-lg-3 ">
												   <h3 style="color:#fff"><P align="left"><b>Sexo:</b> </h3>
												</div>
												 <div class="col-lg-3 ">
													<select class="form-control" id="sexo_vice" name="sexo_vice">
														 <option selected>Seleccione El Sexo</option>
														 <option value="M">Masculino</option>
														 <option value="F">Femenino</option>
													</select>
												</div>
										</div>	
									</div>
										<div class="row">
											
											<div class="col-lg-3">
												   <h3 style="color:#fff"><P align="left"><b>F. de Nacimiento (MM-DD-YYYY):</b> </h3>
											 </div>
											 <div class="col-lg-6">
													<input name="fecha_vice" type="date" class="form-control" id="fecha_vice" placeholder="Fecha de Nacimiento."  maxlength="80">  	
											</div>
										</div>	
                                        <div class="row">
												<div class="form-group">
													<div class="col-lg-4">
													   <h3 style="color:#000"><P align="left"><b>Tipo de documento de identidad</b> </h3>
													</div>
													<div class="col-lg-2">
													<h3 style="color:#fff"> 
														<div class="form-check">
														<label class="form-check-label">
															<input type="checkbox" class="form-check-input" name="pasap_vice" id="pasap_vice" value="1">
															Pasaporte
														  </label>
														</div>
													</h3>											
													</div>
													<div class="col-lg-3">
													<h3 style="color:#fff"> 
														<div class="form-check">
														<label class="form-check-label">
															<input type="checkbox" class="form-check-input" name="cedula_vice" id="cedula_vice" value="1">
															Tarjeta de identidad
														  </label>
														</div>
													</div>
													</h3>
												</div>
										</div>
										<div class="row">
											
											<div class="col-lg-3">
												   <h3 style="color:#fff"><P align="left"><b>Número de documento:</b> </h3>
											 </div>
											 <div class="col-lg-6">
													<input name="ndoc_vice" type="text" class="form-control" id="ndoc_vice" placeholder="Número de documento"  maxlength="80">  	
											</div>
										</div>	
										<div class="row">
											
											<div class="col-lg-3">
												   <h3 style="color:#fff"><P align="left"><b>Dirección postal:</b> </h3>
											 </div>
											 <div class="col-lg-6">
													<input name="postal_vice" type="text" class="form-control" id="postal_vice" placeholder="Dirección postal"  maxlength="80">  	
											</div>
										</div>	
										
										<div class="row">
											
											<div class="col-lg-3">
												   <h3 style="color:#fff"><P align="left"><b>Ciudad:</b> </h3>
											 </div>
											 <div class="col-lg-6">
													<input name="ciudad_vice" type="text" class="form-control" id="ciudad_vice" placeholder="Ciudad"  maxlength="80">  	
											</div>
										</div>	
										
										<div class="row">
											
											<div class="col-lg-3">
												   <h3 style="color:#fff"><P align="left"><b>Nación:</b> </h3>
											 </div>
											 <div class="col-lg-6">
													<input name="nacion_vice" type="text" class="form-control" id="nacion_vice" placeholder="Nación"  maxlength="80">  	
											</div>
										</div>	
										
										<div class="row">
											
											<div class="col-lg-3">
												   <h3 style="color:#fff"><P align="left"><b>Teléfono Oficina:</b> </h3>
											 </div>
											 <div class="col-lg-6">
												<a target="_clank"  data-toggle="tooltip" data-placement="top" title="Con prefijo internacional de su País">
													<input name="telofi_vice" type="text" class="form-control" id="telofi_vice" placeholder="Teléfono Oficina" maxlength="45">
												</a>	
											</div>	
										</div>	
										
										<div class="row">
											
											<div class="col-lg-3">
												   <h3 style="color:#fff"><P align="left"><b>Teléfono Domicilio:</b> </h3>
											 </div>
											 <div class="col-lg-6">
												<a target="_clank"  data-toggle="tooltip" data-placement="top" title="Con prefijo internacional de su País">
													<input name="teldom_vice" type="text" class="form-control" id="teldom_vice" placeholder="Teléfono Domicilio" maxlength="45">
												</a>	
											</div>	
										</div>	
										<div class="row">
											
											<div class="col-lg-3">
												   <h3 style="color:#fff"><P align="left"><b>Móvil:</b> </h3>
											 </div>
											 <div class="col-lg-6">
													<input name="movil_vice" type="text" class="form-control" id="movil_vice" placeholder="Movil:"  maxlength="80">  	
											</div>
										</div>	
										<div class="row">
											
											<div class="col-lg-3">
												   <h3 style="color:#fff"><P align="left"><b>Fax</b> </h3>
											 </div>
											 <div class="col-lg-6">
													<input name="fax_vice" type="text" class="form-control" id="fax_vice" placeholder="Fax"  maxlength="80">  	
											</div>
										</div>	
										<div class="row">
											
											<div class="col-lg-3">
												   <h3 style="color:#fff"><P align="left"><b>Email:</b> </h3>
											 </div>
											 <div class="col-lg-6">
													<input name="email_vice" type="text" class="form-control" id="email_vice" placeholder="Email"  maxlength="80">  	
											</div>
										</div>	
										
										<div class="row">
											
											<div class="col-lg-3">
												   <h3 style="color:#fff"><P align="left"><b>Repetir Email:</b> </h3>
											 </div>
											 <div class="col-lg-6">
													<input name="remail_vice" type="text" class="form-control" id="remail_vice" placeholder="Repetir Email"  maxlength="80">  	
											</div>
										</div>	
										
										<div class="row">
											
											<div class="col-lg-3">
												   <h3 style="color:#fff"><P align="left"><b>Lengua preferida para las comunicaciones:</b> </h3>
											 </div>
											 <div class="col-lg-6">
													<input name="idioma_vice" type="text" class="form-control" id="idioma_vice" placeholder="Lengua preferida para las comunicaciones:"  maxlength="80">  	
											</div>
										</div>	
										<div class="row">
											
											<div class="col-lg-3">
												   <h3 style="color:#fff"><P align="left"><b>Notas:</b> </h3>
											 </div>
											 <div class="col-lg-6">
													<input name="notas_vice" type="text" class="form-control" id="notas_vice" placeholder="Notas:"  maxlength="80">  	
											</div>
										</div>	
                                        <div class="row" align="center">
											<div class="col-md-12">
													<input  type="" data-loading-text="Loading..." class="btn btn-default btn-lg" value="SIGUIENTE" onclick="myFunction(3)">
											</div>
										</div>										
							</div>
							<div id="completa" class="tab-pane fade">
							         <div class="row">
										<h1 style="color:#000"><P align="center"><b>Ahora completa la primera fase de inscripción con las últimas informaciones</b> </h1> 		
									 </div>
									
									<div class="row">
											<div class="form-group">
												<div class="col-lg-3">
												   <h3 style="color:#000"><P align="left"><b>Indica el Número Orientativo de Participantes</b> </h3>
												</div>
												 <div class="col-lg-6">
													<input name="total_orient" type="text" class="form-control" id="total_orient" placeholder="Indica el Número Orientativo de Participante" maxlength="45" onkeypress="return valida(event)">
												</div>
											</div>
									</div>
									<div class="row">
											
											<div class="col-lg-3">
												   <h3 style="color:#fff"><P align="left"><b>Notas:</b> </h3>
											 </div>
											 <div class="col-lg-6">
													<input name="notas_orient" type="text" class="form-control" id="notas_orient" placeholder="Notas:"  maxlength="80">  	
											</div>
										</div>		
									
									 <div class="row">
										<h3 style="color:#000"><P align="center"><b>Ahora completa la primera fase de inscripción con las últimas informaciones</b> </h3> 		
									 </div>
									 
									 <div class="row">
										
										<div class="col-lg-2">
											<h3 style="color:#fff"> 
												 <div class="form-check">
													<label class="form-check-label">
														<input type="checkbox" class="form-check-input" id ="acepto" name="acepto"  value="1">
															Acepto
													</label>
												 </div>
											</h3> 		 
										</div>												
									 </div>
										<div class="row" align="center">
											<div class="col-md-12">
													<input  type="" data-loading-text="Loading..." class="btn btn-default btn-lg" value="SIGUIENTE" onclick="myFunction(4)">
											</div>
										</div>										 
							</div>
							<div id="opcional" class="tab-pane fade">
							         <div class="row">
										<h1 style="color:#000"><P align="center"><b>Utiliza este formulario para introducir los datos de tus peregrinos con alguna discapacidad</b> </h1> 		
									 </div>
									 
									<div class="row">
											<div class="form-group">
												<div class="col-lg-3">
													<h3 style="color:#000"><P align="left"><b>Nombre:</b> </h3>
												</div>
												 <div class="col-lg-6 ">
													<input name="nombre_opci" type="text" class="form-control" id="nombre_opci" placeholder="Nombre" maxlength="30">
												</div>
											</div>	
									</div>
									<div class="row">
											<div class="form-group">
												 <div class="col-lg-3 ">
												   <h4 style="color:#000"><P align="left"><b>Apellido:</b> </h4>
												</div>
												 <div class="col-lg-6 ">
													<input name="apellido_opci" type="text" class="form-control" id="apellido_opci" placeholder="Apellido" maxlength="30">
												</div>
											</div>	
									</div>		
									
									<div class="row">
											<div class="form-group">
												<div class="col-lg-3 ">
												   <h4 style="color:#fff"><P align="left"><b>Sexo:</b> </h4>
												</div>
												 <div class="col-lg-6 ">
													<select class="form-control" id="sexo_opci" name="sexo_opci">
														 <option selected>Seleccione El Sexo</option>
														 <option value="M">Masculino</option>
														 <option value="F">Femenino</option>
													</select>
												</div>
											</div>	
									</div>	
					
									<div class="row">
									
											<div class="col-lg-3">
												   <h4 style="color:#fff"><P align="left"><b>F. de Nacimiento (MM-DD-YYYY):</b> </h4>
											 </div>
											 <div class="col-lg-3">
													<input name="fecha_opci" type="date" class="form-control" id="fecha_opci" placeholder="Fecha de Nacimiento."  maxlength="12">  	
											</div>
									</div>
									<div class="row">
												<div class="form-group">
													<div class="col-lg-4">
													   <h3 style="color:#000"><P align="left"><b>Tipo de documento de identidad</b> </h3>
													</div>
													<div class="col-lg-2">
													<h3 style="color:#fff"> 
														<div class="form-check">
														<label class="form-check-label">
															<input type="checkbox" class="form-check-input" name="pasap_opci" id="pasap_opci" value="1">
															Pasaporte
														  </label>
														</div>
													</h3>											
													</div>
													<div class="col-lg-3">
													<h3 style="color:#fff"> 
														<div class="form-check">
														<label class="form-check-label">
															<input type="checkbox" class="form-check-input" name="cedula_opci" id="cedula_opci" value="1">
															Tarjeta de identidad
														  </label>
														</div>
													</div>
													</h3>
												</div>
									</div>
									<div class="row">
											
											<div class="col-lg-3">
												   <h3 style="color:#fff"><P align="left"><b>Número de documento:</b> </h3>
											 </div>
											 <div class="col-lg-6">
													<input name="ndoc_opci" type="text" class="form-control" id="ndoc_opci" placeholder="Número de documento"  maxlength="12">  	
											</div>
										</div>
                                    <div class="row">
											
											<div class="col-lg-3">
												   <h3 style="color:#fff"><P align="left"><b>Ciudad:</b> </h3>
											 </div>
											 <div class="col-lg-6">
													<input name="ciudad_opc" type="text" class="form-control" id="ciudad_opc" placeholder="Ciudad"  maxlength="12">  	
											</div>
										</div>	
										
										<div class="row">
											
											<div class="col-lg-3">
												   <h3 style="color:#fff"><P align="left"><b>Nación:</b> </h3>
											 </div>
											 <div class="col-lg-6">
													<input name="nacion_opci" type="text" class="form-control" id="nacion_opci" placeholder="Nación"  maxlength="12">  	
											</div>
										</div>	
										
										<div class="row">
											
											<div class="col-lg-3">
												   <h3 style="color:#fff"><P align="left"><b>Teléfono Oficina:</b> </h3>
											 </div>
											 <div class="col-lg-6">
												<a target="_opclank"  data-toggle="tooltip" data-placement="top" title="Con prefijo internacional de su País">
													<input name="telofi_opci" type="text" class="form-control" id="telofi_opci" placeholder="Teléfono Oficina" maxlength="45">
												</a>	
											</div>	
										</div>	
										
										<div class="row">
											
											<div class="col-lg-3">
												   <h3 style="color:#fff"><P align="left"><b>Teléfono Domicilio:</b> </h3>
											 </div>
											 <div class="col-lg-6">
												<a target="_opclank"  data-toggle="tooltip" data-placement="top" title="Con prefijo internacional de su País">
													<input name="teldom_opci" type="text" class="form-control" id="teldom_opci" placeholder="Teléfono Domicilio" maxlength="45">
												</a>	
											</div>	
										</div>	
										<div class="row">
											
											<div class="col-lg-3">
												   <h3 style="color:#fff"><P align="left"><b>Móvil:</b> </h3>
											 </div>
											 <div class="col-lg-6">
													<input name="movil_opci" type="text" class="form-control" id="movil_opci" placeholder="Movil:"  maxlength="12">  	
											</div>
										</div>											
									
									 <div class="row">
										<h2 style="color:#000"><P align="center"><b>DATOS DEL REPRESENTANTE LEGAL O TUTOR<b> </h2> 		
									 </div>
									
									<div class="row">
											<div class="form-group">
												<div class="col-lg-3">
													<h3 style="color:#000"><P align="left"><b>Nombre:</b> </h3>
												</div>
												 <div class="col-lg-6 ">
													<input name="nombre_tutor" type="text" class="form-control" id="nombre_tutor" placeholder="Nombre" maxlength="30">
												</div>
											</div>	
									</div>
									<div class="row">
											<div class="form-group">
												 <div class="col-lg-3 ">
												   <h4 style="color:#000"><P align="left"><b>Apellido:</b> </h4>
												</div>
												 <div class="col-lg-6 ">
													<input name="apellido_tutor" type="text" class="form-control" id="apellido_tutor" placeholder="Apellido" maxlength="30">
												</div>
											</div>	
									</div>
									<div class="row">
											
											<div class="col-lg-3">
												   <h3 style="color:#fff"><P align="left"><b>Dirección </b> </h3>
											 </div>
											 <div class="col-lg-6">
													<input name="direc_tutor" type="text" class="form-control" id="direc_tutor" placeholder="Dirección "  maxlength="45">  	
											</div>
									</div>	
									<div class="row">
											
											<div class="col-lg-3">
												   <h3 style="color:#fff"><P align="left"><b>Teléfono Oficina:</b> </h3>
											 </div>
											 <div class="col-lg-6">
												<a target="_opclank"  data-toggle="tooltip" data-placement="top" title="Con prefijo internacional de su País">
													<input name="telofi_tutor" type="text" class="form-control" id="telofi_tutor" placeholder="Teléfono Oficina" maxlength="45">
												</a>	
											</div>	
										</div>	
										
										<div class="row">
											
											<div class="col-lg-3">
												   <h3 style="color:#fff"><P align="left"><b>Teléfono Domicilio:</b> </h3>
											 </div>
											 <div class="col-lg-6">
												<a target="_opclank"  data-toggle="tooltip" data-placement="top" title="Con prefijo internacional de su País">
													<input name="teldom_tutor" type="text" class="form-control" id="teldom_tutor" placeholder="Teléfono Domicilio" maxlength="45">
												</a>	
											</div>	
										</div>	
										<div class="row">
											
											<div class="col-lg-3">
												   <h3 style="color:#fff"><P align="left"><b>Móvil:</b> </h3>
											 </div>
											 <div class="col-lg-6">
													<input name="movil_tutor" type="text" class="form-control" id="movil_tutor" placeholder="Movil:"  maxlength="12">  	
											</div>
									</div>	
                                    <div class="row">
										<h2 style="color:#000"><P align="left"><b>¿TIPO DE DISCAPACIDAD?</b> </h2> 		
									 </div>
									<div class="row"> 
										<div class="col-lg-4">
											<h3 style="color:#fff"> 
												 <div class="form-check">
													<label class="form-check-label">
														<input type="checkbox" class="form-check-input" id ="auditiva_opci" name="auditiva_opci"  value="1">
															Auditiva
													</label>
												 </div>
											</h3> 		 
										</div>	
										
										
										<div class="col-lg-4">
											<h3 style="color:#fff"> 
												 <div class="form-check">
													<label class="form-check-label">
														<input type="checkbox" class="form-check-input" id ="motora_opci" name="motora_opci"  value="1">
															Motora
													</label>
												 </div>
											</h3> 		 
										</div>	
										
								
									
									
										<div class="col-lg-2">
											<h3 style="color:#fff"> 
												 <div class="form-check">
													<label class="form-check-label">
														<input type="checkbox" class="form-check-input" id ="cognitiva_opci" name="cognitiva_opci"  value="1">
															Cognitiva
													</label>
												 </div>
											</h3> 		 
										</div>	
									</div>		
									<div class="row"> 	

										<div class="col-lg-4">
											<h3 style="color:#fff"> 
												 <div class="form-check">
													<label class="form-check-label">
														<input type="checkbox" class="form-check-input" id ="visual_opci" name="visual_opci"  value="1">
															Visual
													</label>
												 </div>
											</h3> 		 
										</div>	
								
										<div class="col-lg-4">
											<h3 style="color:#fff"> 
												 <div class="form-check">
													<label class="form-check-label">
														<input type="checkbox" class="form-check-input" id ="mental_opci" name="mental_opci"  value="1">
															Mental
													</label>
												 </div>
											</h3> 		 
										</div>	
									
									
										<div class="col-lg-2">
											<h3 style="color:#fff"> 
												 <div class="form-check">
													<label class="form-check-label">
														<input type="checkbox" class="form-check-input" id ="visceral_opci" name="visceral_opci"  value="1">
															Visceral
													</label>
												 </div>
											</h3> 		 
										</div>	
										
									</div>	
									
									<div class="row"> 
										<div class="col-lg-4">
											<h3 style="color:#fff"> 
												 <div class="form-check">
													<label class="form-check-label">
														<input type="checkbox" class="form-check-input" id ="cronica_opci" name="cronica_opci"  value="1">
															Enfermedad Crónica
													</label>
												 </div>
											</h3> 		 
										</div>	
										
									
									</div> 	
                                    <div class="row">
										<h2 style="color:#000"><P align="center"><b>TIPO DE ADAPTACIONES NECESARIAS PARA REALIZAR LAS PRUEBAS DE ADMISIÓN</b> </h2> 		
									 </div>
									<div class="row"> 
										<div class="col-lg-4">
											<h3 style="color:#fff"> 
												 <div class="form-check">
													<label class="form-check-label">
														<input type="checkbox" class="form-check-input" id ="interprete_opci" name="interprete_opci"  value="1">
															Interprete de lenguaje de señas
													</label>
												 </div>
											</h3> 		 
										</div>										
                                    </div> 
									<div class="row"> 
										<div class="col-lg-3">
											<h3 style="color:#fff"> 
												 <div class="form-check">
													<label class="form-check-label">
														<input type="checkbox" class="form-check-input" id ="sruedas_opci" name="sruedas_opci"  value="1">
															Silla de ruedas
													</label>
												 </div>
											</h3> 		 
										</div>										
                                    </div>  
									<div class="row" align="center">
										<div class="col-md-12">
											<input  type="submit" data-loading-text="Loading..." class="btn btn-default btn-lg" value="ENVIAR INFORMACIÓN">
										</div>
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

            if (winWidth > 8000) {
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