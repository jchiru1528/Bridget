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
			  alert("You must enter the Group Name")
			  x=0;
			}
		 else if (nacion == "" || nacion == null){
			  alert("Must Introduce The Nation")
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
			  alert("You must enter the name of the Group Responsible")
			  y=0;
			}
		 else if (apellido_resp == "" ||  apellido_resp==null){
			  alert("You must enter the last name of the Group Responsible")
			  y=0;
			}	
		 else if (sexo_resp == "Select The Sex"){
			  alert("Must Introduce the Sex of the Group Responsible")
			  y=0;
			}
          else if (fecha_resp== "" || fecha_resp == null){
			  alert("You must enter the Date of Birth of the Responsible")
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
			  alert("ou must enter the name of the Group Vice Responsible")
			  z=0;
			}
		 else if (apellido_vice == "" || apellido_vice==null){
			  alert("You must enter the last name of the Group Vice Responsible")
			  z=0;
			}	
		 else if (sexo_vice == "Select The Sex"){
			  alert("Must Introduce the Sex of the Vice Responsible of the Group")
			  z=0;
			}
		 else if (fecha_vice== "" || fecha_vice == null){
			  alert("You must enter the Date of Birth of the Vice Responsible")
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
		  alert("You must enter the Registration Code to the WYD ")
		 
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
			  alert("Must Introduce The Nation")
			  valor++;
			  return false;
			}
         else if (nombre_resp == "" || nombre_resp == null){
			  alert("You must enter the name of the Group Responsible")
			  valor++;
			  return false;
			}
		 else if (apellido_resp == "" || nacion == apellido_resp){
			  alert("You must enter the last name of the Group Responsible")
			   valor++;
			  return false;
			}	
		 else if (sexo_resp == "Select The Sex"){
			  alert("Must Introduce the Sex of the Group Responsible")
			  valor++;
			  return false;
			}	
         else if (nombre_vice == "" || nombre_vice == null){
			  alert("You must enter the name of the Vice-Responsible of the Group")
			  valor++;
			  return false;
			}
		 else if (apellido_vice == "" || apellido_vice==null){
			  alert("You must enter the last name of the Vice-Responsible of the Group")
			  valor++;
			  return false;
			}	
		 else if (sexo_vice == "Select The Sex"){
			  alert("Must Introduce the Sex of the Vice-Responsible of the Group")
			  valor++;
			  return false;
			}
		 else if (fecha_vice== "" || fecha_vice == null){
			  alert("You must enter the Date of Birth of the ViceResponsible")
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
								<li ><a href="<?php echo site_url()?>razon_in"><b>Days in the Dioceses</b></a>
									 <ul class="dropdown-menu">
											 
												<li ><a href="<?php echo site_url()?>info_logo_in"><b>Logo of the DED Colón Kuna yala</b> </a></li>
												<li><a href="<?php echo site_url()?>parroquias_in"><b>Parishes </b></a></li>
												<li><a href="<?php echo site_url()?>historia_in"><b>History of the Diocese</b>  </a></li>
									</ul>
                                </li>
								<li class="active"><a href="#"><b>Inscription or Registration</b></a>
								 <ul class="dropdown-menu">
                                            <li><a href="<?php echo site_url()?>registrate_in"><b>Form For Volunteer</b></a></li>
                                            <!--  <li><a href="<?php echo site_url()?>formulario2_in"><b>Formulario Para Peregrinos</b></a></li>-->
											<li ><a href="<?php echo site_url()?>formulario3_in"><b>Form For the festival</b></a></li>
											<li class="active"><a href="<?php echo site_url()?>formulario4_in"><b>inscription days in the diocese</b></a></li>
											<!-- <li ><a href="<?php echo site_url()?>verificate_in"><b>Check It Out</b></a></li>-->
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
					 <img class="img-responsive center-block" src="<?php echo base_url();?>images/paginas/festival1-ing.png" width="500" height="auto"/>
			</div> 
		     <?php if ($error==1) {?>			
					<div class="panel panel-success">
						<div  ALIGN=center class="panel-heading"><h5><?php echo $mensaje ?></h5> </div>   
					</div>			
			<?php  }?>			
				

		<div class="container">
			<?php $attributes = array('class' => 'form ', 'novalidate'=>'novalidate', 'role' => 'form','id' => 'form','onsubmit' => 'return validacion()');
				echo form_open('insertarD/insertar_datoi', $attributes );  ?>
				
				
				   
				    <ul  class="nav nav-tabs">
					            <li ><a href="#registra" data-toggle="tab" style="color:#000">INSCRIPTION CODE</a></li>
                                <li id="aa" class=""><a href="#describe" data-toggle="tab" style="color:#000">DESCRIBE YOUR GROUP</a></li>
                                <li id='ab' class=""><a href="#responsable" data-toggle="tab" style="color:#000">GROUP RESPONSIBLE</a></li>
								<li id='ac' class=""><a href="#viceresponsable" data-toggle="tab" style="color:#000">VICE RESPONSIBLE</a></li>
								<li id='ad' class=""><a href="#completa" data-toggle="tab" style="color:#000">COMPLETE YOUR INFORMATION</a></li>
								<li id='ae' class=""><a href="#opcional" data-toggle="tab"style="color:#000">OPTIONAL</a></li>
                    </ul>
				<div  class="tab-content clearfix">
				            <div  id="registra"  class="tab-pane fade active in">   
				
								  <div class="row">
										<h2 style="color:#000"><P align="center"><b>USE THIS FORM TO DESCRIBE YOUR GROUP</b> </h2> 		
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
											   <h3 style="color:#000"><P align="left"><b>REGISTRATION CODE FOR WYD:</b> </h3>
											</div>
											 <div class="col-lg-7">
												<input name="codigo_jmj" type="text" class="form-control" id="codigo_jmj" placeholder="REGISTRATION CODE FOR WYD " maxlength="45">
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
												<input  type="" data-loading-text="Loading..." class="btn btn-default btn-lg" value="NEXT" onclick="myFunction(5)">
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
										<h2 style="color:#000"><P align="center"><b>USE THIS FORM TO DESCRIBE YOUR GROUP</b> </h2> 		
									 </div>
									<div class="row">
										<div class="form-group">
											<div class="col-lg-3">
											   <h3 style="color:#000"><P align="left"><b>GROUP NAME:</b> </h3>
											</div>
											 <div class="col-lg-7">
												<input name="nombre_grupo" type="text" class="form-control" id="nombre_grupo" placeholder="GROUP NAME" maxlength="45">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="form-group">
											<div class="col-lg-3">
											   <h3 style="color:#000"><P align="left"><b>COUNTRY :</b> </h3>
											</div>
											 <div class="col-lg-7">
												<input name="nacion" type="text" class="form-control" id="nacion" placeholder="COUNTRY " maxlength="45">
											</div>
										</div>
									</div> 
									<div class="row">
										<div class="form-group">
											<div class="col-lg-3">
											   <h3 style="color:#000"><P align="left"><b>CITY:</b> </h3>
											</div>
											 <div class="col-lg-7">
												<input name="ciudad" type="text" class="form-control" id="ciudad" placeholder="CITY" maxlength="45">
											</div>
										</div>
									</div> 
									<div class="row">
										 <div class="col-lg-3">
											   <h3 style="color:#000"><P align="left"><b>LANGUAGE:</b> </h3>
										 </div>
										 <div class="col-lg-7">
											<select class="form-control" id="lengua_ma" name="lengua_ma" placeholder="Select Your Language">
												 <option selected>Select Your Language</option>
													<option value = "1"> German </ option>
													<option value = "2"> Arabic </option>
													<option value = "3"> Bengali </option>
													<option value = "4"> Chinese </option>
													<option value = "5"> Spanish </option>
													<option value = "6"> French </option>
													<option value = "7"> Hindu </option>
													<option value = "8"> English </option>
													<option value = "9"> Italian </option>
													<option value = "10"> Japanese </option>
													<option value = "11"> Mandarin </option>
													<option value = "12"> Portuguese </option>
													<option value = "13"> Russian </option>
											</select>  	
										</div>
										<div class="col-lg-2">
											<h3 style="color:#fff"> 
												 <div class="form-check">
													<label class="form-check-label">
														<input type="checkbox" class="form-check-input" id ="multilingue" name="multilingue"  value="1">
																BILINGUAL:
													</label>
												 </div>
											</h3> 		 
										</div>			
									</div>
									
									 <div class="row">
										<h2 style="color:#000"><P align="left"><b>&nbsp&nbsp&nbspTYPE OF GROUP</b> </h2> 		
									 </div>
									
									<div class="row">
										<div class="form-group">
											<div class="col-lg-3">
											   <h3 style="color:#000"><P align="left"><b>National </b> </h3>
											</div>
											<div class="col-lg-1">
											<h3 style="color:#fff"> 
												<div class="form-check">
												<label class="form-check-label">
													<input type="checkbox" class="form-check-input" name="nacional_si" id="nacional_si" value="1" onclick="mynacionalsi()">
													YES
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
											   <h3 style="color:#000"><P align="left"><b>Diocesan:</b></h3>
											</div>
											<div class="col-lg-7">
												<a target="_blank"  data-toggle="tooltip" data-placement="top" title="Write the name of the diocese from which the group comes">
													<input name="diocesano" type="text" class="form-control" id="diocesano" placeholder="Diocesan" maxlength="45">
												</a>	
											</div>	 
										</div>	
									</div>
									<div class="row">
										<div class="form-group">
											<div class="col-lg-3">											
											   <h3 style="color:#000"><P align="left"><b>Movement / Community:</b></h3>
											</div>
											<div class="col-lg-7">
												<a target="_blank"  data-toggle="tooltip" data-placement="top" title="Write the name of the movement, community, association">
													<input name="comunidad" type="text" class="form-control" id="comunidad" placeholder="Movement / Community" maxlength="45">
												</a>	
											</div>	 
										</div>	
									</div>
									<div class="row">
										<div class="form-group">
											<div class="col-lg-3">											
											   <h3 style="color:#000"><P align="left"><b>Others:</b></h3>
											</div>
											<div class="col-lg-7">
												<a target="_blank"  data-toggle="tooltip" data-placement="top" title="Specify another type of group">
													<input name="otros_a" type="text" class="form-control" id="otros_a" placeholder="Others" maxlength="45">
												</a>	
											</div>	 
										</div>	
									</div>
									<div class="row">
										<div class="form-group">
											<div class="col-lg-3">
											   <h3 style="color:#000"><P align="left"><b>PROPOSED NUMBER OF PARTICIPANTS:</b> </h3>
											</div>
											 <div class="col-lg-7">
												<input name="total_parti" type="text" class="form-control" id="total_parti" placeholder="PROPOSED NUMBER OF PARTICIPANTS:" maxlength="45" onkeypress="return valida(event)">
											</div>
										</div>
									</div> 
									<div class="row">
										<div class="form-group">
											<div class="col-lg-3">
											   <h3 style="color:#000"><P align="left"><b>Nº OF PARTICIPANTS MEN:</b> </h3>
											</div>
											 <div class="col-lg-7">
												<input name="total_hombres" type="text" class="form-control" id="total_hombres" placeholder="Nº OF PARTICIPANTS MEN" maxlength="45" onkeypress="return valida(event)">
											</div>
										</div>
									</div> 
									<div class="row">
										<div class="form-group">
											<div class="col-lg-3">
											   <h3 style="color:#000"><P align="left"><b>Nº OF PARTICIPANTS WOMEN:</b> </h3>
											</div>
											 <div class="col-lg-7">
												<input name="total_mujeres" type="text" class="form-control" id="total_mujeres" placeholder="Nº OF PARTICIPANTS WOMEN" maxlength="45" onkeypress="return valida(event)">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="form-group">
											<div class="col-lg-3">
											   <h3 style="color:#000"><P align="left"><b>¿DO YOU TRAVEL WITH UNDER AGE? ?</b> </h3>
											</div>
											<div class="col-lg-1">
											<h3 style="color:#fff"> 
												<div class="form-check">
												<label class="form-check-label">
													<input type="checkbox" class="form-check-input" name="menor_si" id="menor_si" value="1" onclick="mymenorsi()">
													YES
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
											   <h3 style="color:#000"><P align="left"><b>IF YES, PLEASE PROVIDE THE NUMBER OF PARTICIPANTS UNDER AGE</b> </h3>
											</div>
											 <div class="col-lg-7">
												<input name="total_menor" type="text" class="form-control" id="total_menor" placeholder="Nº OF PARTICIPANTS UNDER AGE" maxlength="45" onkeypress="return valida(event)">
											</div>
										</div>
									</div> 
									<div class="row">
										<div class="form-group">
											<div class="col-lg-5">
											   <h3 style="color:#000"><P align="left"><b>¿DO YOU TRAVEL WITH PILGRIMS WITH SPECIAL NEEDS?</b> </h3>
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
										<h2 style="color:#000"><P align="left"><b>¿IF YES, PLEASE PROVIDE THE NUMBER OF PARTICIPANTS AND WHAT TYPE OF DISABILITY?</b> </h2> 		
									 </div>
									<div class="row"> 
										<div class="col-lg-2">
											<h3 style="color:#fff"> 
												 <div class="form-check">
													<label class="form-check-label">
														<input type="checkbox" class="form-check-input" id ="auditiva" name="auditiva"  value="1">
															AUDITIVE 
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
															MOTOR
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
															COGNITIVE
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
															CHRONIC DISEASE
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
											   <h3 style="color:#000"><P align="left"><b>¿DO YOU TRAVEL WITH ANY RELIGIOUS (A)?</b> </h3>
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
												<input  type="" data-loading-text="Loading..." class="btn btn-default btn-lg" value="NEXT" onclick="myFunction(1)">
										</div>
									</div>
									
							</div> 
							<div id="responsable" class="tab-pane fade">
							         <div class="row">
										<h1 style="color:#000"><P align="center"><b>Use this form to enter your informattion is you are a GROUP RESPONSIBLE</b> </h1> 		
									 </div>
									 <div class="row">
										<h2 style="color:#000"><P align="left"><b>Remember that you can be group responsible only if you are of legal age. Please pay the utmost attention when entering your e-mail, as it will be the main mean of communication with your group and also will become your user name to access the reserved area and to complete the phase 2 of the registration..</b> </h2> 		
									 </div>
									<div class="row">
											<div class="form-group">
												<div class="col-lg-3">
												   <h3 style="color:#000"><P align="left"><b>FIRST NAME</b> </h3>
												</div>
												 <div class="col-lg-6">
													<input name="nombre_resp" type="text" class="form-control" id="nombre_resp" placeholder="FIRST NAME" maxlength="45">
												</div>
											</div>
									</div>
									<div class="row">
										<div class="form-group">
												<div class="col-lg-3">
												   <h3 style="color:#000"><P align="left"><b>LAST NAME:</b> </h3>
												</div>
												 <div class="col-lg-6">
													<input name="apellido_resp" type="text" class="form-control" id="apellido_resp" placeholder="LAST NAME " maxlength="45">
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
														 <option selected>Select The Sex</option>
															<option value = "M"> Male </option>
															<option value = "F"> Female </option>
													</select>
												</div>
										</div>	
									</div>
										<div class="row">
											
											<div class="col-lg-3">
												   <h3 style="color:#fff"><P align="left"><b>BIRTHDATE (MM-DD-YYYY):</b> </h3>
											 </div>
											 <div class="col-lg-6">
													<input name="fecha_resp" type="date" class="form-control" id="fecha_resp" placeholder="BIRTHDATE"  maxlength="80">  	
											</div>
										</div>	
                                        <div class="row">
												<div class="form-group">
													<div class="col-lg-4">
													   <h3 style="color:#000"><P align="left"><b>TYPE OF DOCUMENT OF IDENTITY</b> </h3>
													</div>
													<div class="col-lg-2">
													<h3 style="color:#fff"> 
														<div class="form-check">
														<label class="form-check-label">
															<input type="checkbox" class="form-check-input" name="pasap_resp" id="pasap_resp" value="1">
															Passport
														  </label>
														</div>
													</h3>											
													</div>
													<div class="col-lg-3">
													<h3 style="color:#fff"> 
														<div class="form-check">
														<label class="form-check-label">
															<input type="checkbox" class="form-check-input" name="cedula_resp" id="cedula_resp" value="2">
															Identity card
														  </label>
														</div>
													</div>
													</h3>
												</div>
										</div>
										<div class="row">
											
											<div class="col-lg-3">
												   <h3 style="color:#fff"><P align="left"><b>DOCUMENT NUMBER:</b> </h3>
											 </div>
											 <div class="col-lg-6">
													<input name="ndoc_resp" type="text" class="form-control" id="ndoc_resp" placeholder="DOCUMENT NUMBER"  maxlength="80">  	
											</div>
										</div>	
										<div class="row">
											
											<div class="col-lg-3">
												   <h3 style="color:#fff"><P align="left"><b>POSTAL ADDRESS:</b> </h3>
											 </div>
											 <div class="col-lg-6">
													<input name="postal_resp" type="text" class="form-control" id="postal_resp" placeholder="POSTAL ADDRESS"  maxlength="80">  	
											</div>
										</div>	
										
										<div class="row">
											
											<div class="col-lg-3">
												   <h3 style="color:#fff"><P align="left"><b>CITY:</b> </h3>
											 </div>
											 <div class="col-lg-6">
													<input name="ciudad_resp" type="text" class="form-control" id="ciudad_resp" placeholder="CITY"  maxlength="80">  	
											</div>
										</div>	
										
										<div class="row">
											
											<div class="col-lg-3">
												   <h3 style="color:#fff"><P align="left"><b>COUNTRY:</b> </h3>
											 </div>
											 <div class="col-lg-6">
													<input name="nacion_resp" type="text" class="form-control" id="nacion_resp" placeholder="COUNTRY"  maxlength="80">  	
											</div>
										</div>	
										
										<div class="row">
											
											<div class="col-lg-3">
												   <h3 style="color:#fff"><P align="left"><b>Telephone :</b> </h3>
											 </div>
											 <div class="col-lg-6">
												<a target="_blank"  data-toggle="tooltip" data-placement="top" title="Home phone">
													<input name="telofi_resp" type="text" class="form-control" id="telofi_resp" placeholder="Telephone" maxlength="45">
												</a>	
											</div>	
										</div>	
										
										<div class="row">
											
											<div class="col-lg-3">
												   <h3 style="color:#fff"><P align="left"><b>Home phone:</b> </h3>
											 </div>
											 <div class="col-lg-6">
												<a target="_blank"  data-toggle="tooltip" data-placement="top" title="Home phone">
													<input name="teldom_resp" type="text" class="form-control" id="teldom_resp" placeholder="Home phone" maxlength="45">
												</a>	
											</div>	
										</div>	
										<div class="row">
											
											<div class="col-lg-3">
												   <h3 style="color:#fff"><P align="left"><b>Mobile:</b> </h3>
											 </div>
											 <div class="col-lg-6">
													<input name="movil_resp" type="text" class="form-control" id="movil_resp" placeholder="Mobile"  maxlength="80">  	
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
													<input name="remail_resp" type="text" class="form-control" id="remail_resp" placeholder="REPEAT THE EMAIL"  maxlength="80">  	
											</div>
										</div>	
										
										<div class="row">
											
											<div class="col-lg-3">
												   <h3 style="color:#fff"><P align="left"><b>PREFERRED LANGUAGE FOR COMMUNICATIONS:</b> </h3>
											 </div>
											 <div class="col-lg-6">
													<input name="idioma_resp" type="text" class="form-control" id="idioma_resp" placeholder="PREFERRED LANGUAGE FOR COMMUNICATIONS:"  maxlength="80">  	
											</div>
										</div>	
										<div class="row">
											
											<div class="col-lg-3">
												   <h3 style="color:#fff"><P align="left"><b>NOTES:</b> </h3>
											 </div>
											 <div class="col-lg-6">
													<input name="notas_resp" type="text" class="form-control" id="notas_resp" placeholder="NOTES:"  maxlength="80">  	
											</div>
										</div>	
										<div class="row" align="center">
										<div class="col-md-12">
												<input  type="" data-loading-text="Loading..." class="btn btn-default btn-lg" value="NEXT" onclick="myFunction(2)">
										</div>
									</div>
									
							</div>
							<div id="viceresponsable" class="tab-pane fade">
							         <div class="row">
										<h1 style="color:#000"><P align="center"><b>Use this form to enter the VICERRESPONSABLE informatiom</b> </h1> 		
									 </div>
									 <div class="row">
										<h2 style="color:#000"><P align="left"><b>The vice responsable will receive the same communications by Email as the person responsible and will replace him/ her if necessary. Also the vice responsable must be of legal age.</b> </h2> 		
									 </div>
									<div class="row">
											<div class="form-group">
												<div class="col-lg-3">
												   <h3 style="color:#000"><P align="left"><b>FIRST NAME</b> </h3>
												</div>
												 <div class="col-lg-6">
													<input name="nombre_vice" type="text" class="form-control" id="nombre_vice" placeholder="FIRST NAME " maxlength="45">
												</div>
											</div>
									</div>
									<div class="row">
										<div class="form-group">
												<div class="col-lg-3">
												   <h3 style="color:#000"><P align="left"><b>LAST NAME:</b> </h3>
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
														 <option selected>Select The Sex</option>
															<option value = "M"> Male </option>
															<option value = "F"> Female </option>
													</select>
												</div>
										</div>	
									</div>
										<div class="row">
											
											<div class="col-lg-3">
												   <h3 style="color:#fff"><P align="left"><b>BIRTHDATE (MM-DD-YYYY):</b> </h3>
											 </div>
											 <div class="col-lg-6">
													<input name="fecha_vice" type="date" class="form-control" id="fecha_vice" placeholder="BIRTHDATE"  maxlength="80">  	
											</div>
										</div>	
                                        <div class="row">
												<div class="form-group">
													<div class="col-lg-4">
													   <h3 style="color:#000"><P align="left"><b>TYPE OF DOCUMENT OF IDENTITY</b> </h3>
													</div>
													<div class="col-lg-2">
													<h3 style="color:#fff"> 
														<div class="form-check">
														<label class="form-check-label">
															<input type="checkbox" class="form-check-input" name="pasap_vice" id="pasap_vice" value="1">
															Passport
														  </label>
														</div>
													</h3>											
													</div>
													<div class="col-lg-3">
													<h3 style="color:#fff"> 
														<div class="form-check">
														<label class="form-check-label">
															<input type="checkbox" class="form-check-input" name="cedula_vice" id="cedula_vice" value="1">
															Identity card
														  </label>
														</div>
													</div>
													</h3>
												</div>
										</div>
										<div class="row">
											
											<div class="col-lg-3">
												   <h3 style="color:#fff"><P align="left"><b>DOCUMENT NUMBER:</b> </h3>
											 </div>
											 <div class="col-lg-6">
													<input name="ndoc_vice" type="text" class="form-control" id="ndoc_vice" placeholder="DOCUMENT NUMBER"  maxlength="80">  	
											</div>
										</div>	
										<div class="row">
											
											<div class="col-lg-3">
												   <h3 style="color:#fff"><P align="left"><b>POSTAL ADDRESS:</b> </h3>
											 </div>
											 <div class="col-lg-6">
													<input name="postal_vice" type="text" class="form-control" id="postal_vice" placeholder="POSTAL ADDRESS"  maxlength="80">  	
											</div>
										</div>	
										
										<div class="row">
											
											<div class="col-lg-3">
												   <h3 style="color:#fff"><P align="left"><b>CITY:</b> </h3>
											 </div>
											 <div class="col-lg-6">
													<input name="ciudad_vice" type="text" class="form-control" id="ciudad_vice" placeholder="CITY"  maxlength="80">  	
											</div>
										</div>	
										
										<div class="row">
											
											<div class="col-lg-3">
												   <h3 style="color:#fff"><P align="left"><b>COUNTRY:</b> </h3>
											 </div>
											 <div class="col-lg-6">
													<input name="nacion_vice" type="text" class="form-control" id="nacion_vice" placeholder="Nación"  maxlength="80">  	
											</div>
										</div>	
										
										<div class="row">
											
											<div class="col-lg-3">
												   <h3 style="color:#fff"><P align="left"><b>Telephone :</b> </h3>
											 </div>
											 <div class="col-lg-6">
												<a target="_clank"  data-toggle="tooltip" data-placement="top" title="with international prefix) ">
													<input name="telofi_vice" type="text" class="form-control" id="telofi_vice" placeholder="Telephone " maxlength="45">
												</a>	
											</div>	
										</div>	
										
										<div class="row">
											
											<div class="col-lg-3">
												   <h3 style="color:#fff"><P align="left"><b>Home phone:</b> </h3>
											 </div>
											 <div class="col-lg-6">
												<a target="_clank"  data-toggle="tooltip" data-placement="top" title="with international prefix) ">
													<input name="teldom_vice" type="text" class="form-control" id="teldom_vice" placeholder="Home phone" maxlength="45">
												</a>	
											</div>	
										</div>	
										<div class="row">
											
											<div class="col-lg-3">
												   <h3 style="color:#fff"><P align="left"><b>Mobile:</b> </h3>
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
												   <h3 style="color:#fff"><P align="left"><b>REPEAT THE EMAIL:</b> </h3>
											 </div>
											 <div class="col-lg-6">
													<input name="remail_vice" type="text" class="form-control" id="remail_vice" placeholder="REPEAT THE EMAIL"  maxlength="80">  	
											</div>
										</div>	
										
										<div class="row">
											
											<div class="col-lg-3">
												   <h3 style="color:#fff"><P align="left"><b>PREFERRED LANGUAGE FOR COMMUNICATIONS:</b> </h3>
											 </div>
											 <div class="col-lg-6">
													<input name="idioma_vice" type="text" class="form-control" id="idioma_vice" placeholder="Lengua preferida para las comunicaciones:"  maxlength="80">  	
											</div>
										</div>	
										<div class="row">
											
											<div class="col-lg-3">
												   <h3 style="color:#fff"><P align="left"><b>NOTES:</b> </h3>
											 </div>
											 <div class="col-lg-6">
													<input name="notas_vice" type="text" class="form-control" id="notas_vice" placeholder="NOTES:"  maxlength="80">  	
											</div>
										</div>	
                                        <div class="row" align="center">
											<div class="col-md-12">
													<input  type="" data-loading-text="Loading..." class="btn btn-default btn-lg" value="NEXT" onclick="myFunction(3)">
											</div>
										</div>										
							</div>
							<div id="completa" class="tab-pane fade">
							         <div class="row">
										<h1 style="color:#000"><P align="center"><b>Now complete the first phase of registration with the latest information</b> </h1> 		
									 </div>
									
									<div class="row">
											<div class="form-group">
												<div class="col-lg-3">
												   <h3 style="color:#000"><P align="left"><b>Indicate the aproximate number of participants </b> </h3>
												</div>
												 <div class="col-lg-6">
													<input name="total_orient" type="text" class="form-control" id="total_orient" placeholder="Indicate the aproximate number of participants" maxlength="45" onkeypress="return valida(event)">
												</div>
											</div>
									</div>
									<div class="row">
											
											<div class="col-lg-3">
												   <h3 style="color:#fff"><P align="left"><b>NOTES:</b> </h3>
											 </div>
											 <div class="col-lg-6">
													<input name="notas_orient" type="text" class="form-control" id="notas_orient" placeholder="NOTES:"  maxlength="80">  	
											</div>
										</div>		
									
									
									 
									 <div class="row">
										
										<div class="col-lg-2">
											<h3 style="color:#fff"> 
												 <div class="form-check">
													<label class="form-check-label">
														<input type="checkbox" class="form-check-input" id ="acepto" name="acepto"  value="1">
															I Agree
													</label>
												 </div>
											</h3> 		 
										</div>												
									 </div>
										<div class="row" align="center">
											<div class="col-md-12">
													<input  type="" data-loading-text="Loading..." class="btn btn-default btn-lg" value="NEXT" onclick="myFunction(4)">
											</div>
										</div>										 
							</div>
							<div id="opcional" class="tab-pane fade">
							         <div class="row">
										<h1 style="color:#000"><P align="center"><b>Use this form to enter the information of your pilgrims with some disability</b> </h1> 		
									 </div>
									 
									<div class="row">
											<div class="form-group">
												<div class="col-lg-3">
													<h3 style="color:#000"><P align="left"><b>FIRST NAME:</b> </h3>
												</div>
												 <div class="col-lg-6 ">
													<input name="nombre_opci" type="text" class="form-control" id="nombre_opci" placeholder="FIRST NAME" maxlength="30">
												</div>
											</div>	
									</div>
									<div class="row">
											<div class="form-group">
												 <div class="col-lg-3 ">
												   <h4 style="color:#000"><P align="left"><b>LAST NAME:</b> </h4>
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
														 <option selected>Select The Sex</option>
															<option value = "M"> Male </option>
															<option value = "F"> Female </option>
													</select>
												</div>
											</div>	
									</div>	
					
									<div class="row">
									
											<div class="col-lg-3">
												   <h4 style="color:#fff"><P align="left"><b>BIRTHDATE (MM-DD-YYYY):</b> </h4>
											 </div>
											 <div class="col-lg-3">
													<input name="fecha_opci" type="date" class="form-control" id="fecha_opci" placeholder="BIRTHDATE."  maxlength="12">  	
											</div>
									</div>
									<div class="row">
												<div class="form-group">
													<div class="col-lg-4">
													   <h3 style="color:#000"><P align="left"><b>TYPE OF DOCUMENT OF IDENTITY</b> </h3>
													</div>
													<div class="col-lg-2">
													<h3 style="color:#fff"> 
														<div class="form-check">
														<label class="form-check-label">
															<input type="checkbox" class="form-check-input" name="pasap_opci" id="pasap_opci" value="1">
															Passport
														  </label>
														</div>
													</h3>											
													</div>
													<div class="col-lg-3">
													<h3 style="color:#fff"> 
														<div class="form-check">
														<label class="form-check-label">
															<input type="checkbox" class="form-check-input" name="cedula_opci" id="cedula_opci" value="1">
															Identity card
														  </label>
														</div>
													</div>
													</h3>
												</div>
									</div>
									<div class="row">
											
											<div class="col-lg-3">
												   <h3 style="color:#fff"><P align="left"><b>DOCUMENT NUMBER:</b> </h3>
											 </div>
											 <div class="col-lg-6">
													<input name="ndoc_opci" type="text" class="form-control" id="ndoc_opci" placeholder="DOCUMENT NUMBER"  maxlength="12">  	
											</div>
										</div>
                                    <div class="row">
											
											<div class="col-lg-3">
												   <h3 style="color:#fff"><P align="left"><b>CITY:</b> </h3>
											 </div>
											 <div class="col-lg-6">
													<input name="ciudad_opc" type="text" class="form-control" id="ciudad_opc" placeholder="CITY"  maxlength="12">  	
											</div>
										</div>	
										
										<div class="row">
											
											<div class="col-lg-3">
												   <h3 style="color:#fff"><P align="left"><b>COUNTRY:</b> </h3>
											 </div>
											 <div class="col-lg-6">
													<input name="nacion_opci" type="text" class="form-control" id="nacion_opci" placeholder="COUNTRY"  maxlength="12">  	
											</div>
										</div>	
										
										<div class="row">
											
											<div class="col-lg-3">
												   <h3 style="color:#fff"><P align="left"><b>Telephone:</b> </h3>
											 </div>
											 <div class="col-lg-6">
												<a target="_opclank"  data-toggle="tooltip" data-placement="top" title="with international prefix">
													<input name="telofi_opci" type="text" class="form-control" id="telofi_opci" placeholder="Telephone" maxlength="45">
												</a>	
											</div>	
										</div>	
										
										<div class="row">
											
											<div class="col-lg-3">
												   <h3 style="color:#fff"><P align="left"><b>Home phone:</b> </h3>
											 </div>
											 <div class="col-lg-6">
												<a target="_opclank"  data-toggle="tooltip" data-placement="top" title="with international prefix">
													<input name="teldom_opci" type="text" class="form-control" id="teldom_opci" placeholder="Home phone" maxlength="45">
												</a>	
											</div>	
										</div>	
										<div class="row">
											
											<div class="col-lg-3">
												   <h3 style="color:#fff"><P align="left"><b>Mobile:</b> </h3>
											 </div>
											 <div class="col-lg-6">
													<input name="movil_opci" type="text" class="form-control" id="movil_opci" placeholder="Mobile:"  maxlength="12">  	
											</div>
										</div>											
									
									 <div class="row">
										<h2 style="color:#000"><P align="center"><b>INFORMATION OF THE LEGAL REPRESENTATIVE OR GUARDIAN <b> </h2> 		
									 </div>
									
									<div class="row">
											<div class="form-group">
												<div class="col-lg-3">
													<h3 style="color:#000"><P align="left"><b>FIRST NAME:</b> </h3>
												</div>
												 <div class="col-lg-6 ">
													<input name="nombre_tutor" type="text" class="form-control" id="nombre_tutor" placeholder="FIRST NAME" maxlength="30">
												</div>
											</div>	
									</div>
									<div class="row">
											<div class="form-group">
												 <div class="col-lg-3 ">
												   <h4 style="color:#000"><P align="left"><b>LAST NAME:</b> </h4>
												</div>
												 <div class="col-lg-6 ">
													<input name="apellido_tutor" type="text" class="form-control" id="apellido_tutor" placeholder="LAST NAME" maxlength="30">
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
												   <h3 style="color:#fff"><P align="left"><b>Telephone :</b> </h3>
											 </div>
											 <div class="col-lg-6">
												<a target="_opclank"  data-toggle="tooltip" data-placement="top" title="with international prefix">
													<input name="telofi_tutor" type="text" class="form-control" id="telofi_tutor" placeholder="Telephone " maxlength="45">
												</a>	
											</div>	
										</div>	
										
										<div class="row">
											
											<div class="col-lg-3">
												   <h3 style="color:#fff"><P align="left"><b>Home phone:</b> </h3>
											 </div>
											 <div class="col-lg-6">
												<a target="_opclank"  data-toggle="tooltip" data-placement="top" title="with international prefix">
													<input name="teldom_tutor" type="text" class="form-control" id="teldom_tutor" placeholder="Home phone" maxlength="45">
												</a>	
											</div>	
										</div>	
										<div class="row">
											
											<div class="col-lg-3">
												   <h3 style="color:#fff"><P align="left"><b>Mobile:</b> </h3>
											 </div>
											 <div class="col-lg-6">
													<input name="movil_tutor" type="text" class="form-control" id="movil_tutor" placeholder="Mobile:"  maxlength="12">  	
											</div>
									</div>	
                                    <div class="row">
										<h2 style="color:#000"><P align="left"><b>TYPE OF DISABILITY</b> </h2> 		
									 </div>
									<div class="row"> 
										<div class="col-lg-4">
											<h3 style="color:#fff"> 
												 <div class="form-check">
													<label class="form-check-label">
														<input type="checkbox" class="form-check-input" id ="auditiva_opci" name="auditiva_opci"  value="1">
															AUDITIVE 
													</label>
												 </div>
											</h3> 		 
										</div>	
										
										
										<div class="col-lg-4">
											<h3 style="color:#fff"> 
												 <div class="form-check">
													<label class="form-check-label">
														<input type="checkbox" class="form-check-input" id ="motora_opci" name="motora_opci"  value="1">
															MOTOR
													</label>
												 </div>
											</h3> 		 
										</div>	
										
								
									
									
										<div class="col-lg-2">
											<h3 style="color:#fff"> 
												 <div class="form-check">
													<label class="form-check-label">
														<input type="checkbox" class="form-check-input" id ="cognitiva_opci" name="cognitiva_opci"  value="1">
															COGNITIVE
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
															CHRONIC DISEASE
													</label>
												 </div>
											</h3> 		 
										</div>	
										
									
									</div> 	
                                    <div class="row">
										<h2 style="color:#000"><P align="center"><b>TYPE OF ADAPTATIONS NECESSARY TO CARRY OUT THE ADMISSION TESTS </b> </h2> 		
									 </div>
									<div class="row"> 
										<div class="col-lg-4">
											<h3 style="color:#fff"> 
												 <div class="form-check">
													<label class="form-check-label">
														<input type="checkbox" class="form-check-input" id ="interprete_opci" name="interprete_opci"  value="1">
															Interpreter of sign language 
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
															Wheelchair   
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