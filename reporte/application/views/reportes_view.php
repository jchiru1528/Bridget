<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
   	<title>Reportes Colón Kuna </title>
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
  <body>
    	<?php include('titulo.php') ?>
  </body>
  
  
  <div class="container">
                
                   	<?php $attributes = array('class' => 'form ', 'novalidate'=>'novalidate', 'role' => 'form','id' => 'form','onsubmit' => 'return validacion()');
					echo form_open('reporte/buscar', $attributes );  ?>

                    
					<div class="container">
							
                           
							<div class="row">
								<div class="form-group">
									
                                
								   <h2><P ALIGN=center><b>Reportes del Formulario<b>  </p> </h2>
								   
								    <div class="col-lg-4" align="center" >
                                     </div> 
                                 
						           <div class="col-lg-4" align="center" >
							        <select class="form-control" id="comboparroquia" name="comboparroquia" placeholder="Selecione El Formulario">
												 <option selected>Selecione El Formulario</option>
												 <option value="1">Formulario Para Voluntarios</option>
												 <option value="2">Formulario Para Peregrinos</option>
												 <option value="3">Festival de la Juventud</option>
												 <option value="4">Días en la Diocesis</option>
									</select> 	
                                   </div> 
								  
								</div>  
                            </div>
				         
						 <div class="row" align="center">
                            <div class="col-md-12">
                                <input  type="submit" data-loading-text="Loading..." class="btn btn-default btn-lg" value="DESCARGAR REPORTE">
                            </div>
                        </div>

						  </form>
					</div>
</div>	
  
</html>