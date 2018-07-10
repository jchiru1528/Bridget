<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="author" content="Kodinger">
	<title>Reportes Colón Kuna </title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/my-login.css">
	  <link rel="stylesheet" href="<?php echo base_url();?>css/bootstrap.min.css"/>
    <link rel="stylesheet" href="<?php echo base_url();?>css/style.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/style.css" media="screen" data-name="skins">
    <link rel="stylesheet" href="<?php echo base_url();?>css/layout/wide.css" data-name="layout">

    <link rel="stylesheet" href="<?php echo base_url();?>css/fractionslider.css"/>
    <link rel="stylesheet" href="<?php echo base_url();?>css/style-fraction.css"/>
    <link rel="stylesheet" href="<?php echo base_url();?>css/animate.css"/>

    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/switcher.css" media="screen" />
</head>
<body class="my-login-page">
	<section class="h-100">
		<div class="container h-100">
			<div class="row justify-content-md-center h-100">
				<div class="card-wrapper">
					<div class="brand">
						<img src="<?php echo base_url();?>images/logo_diocesis.jpg">
					</div>
					
					  <?php if ($error==1) {?>			
						<div class="panel panel-success">
							 <div  ALIGN=center class="panel-heading"><h4><?php echo $mensaje ?></h4> </div>   
						</div>			
				<?php  }?>			
				
					<div class="card fat">
						<div class="card-body">
							<h4  align="center" class="card-title">Login</h4>
				<?php $attributes = array('class' => 'form ',  'role' => 'form','id' => 'form');
				echo form_open('verifica/loginVerifica', $attributes );  ?>
							 
								<div class="form-group">
									<label for="email">Usuario</label>

									<input id="usuario" type="usuario" class="form-control" name="usuario" value="" required>
								</div>

								<div class="form-group">
									<label for="password">Password
									</label>
									<input id="password" type="password" class="form-control" name="password" required data-eye>
								</div>

								

								<div class="form-group no-margin">
									<button type="submit" class="btn btn-primary btn-block">
										Login
									</button>
								</div>
							
							</form>
						</div>
					</div>
					<div  align="center" >
						Copyright &copy; Colón Kuna 2019 
					</div>
				</div>
			</div>
		</div>
	</section>

	<script src="js/jquery.min.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
	<script src="js/my-login.js"></script>
</body>
</html>