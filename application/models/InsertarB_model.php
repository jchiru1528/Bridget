<?php
Class InsertarB_model extends CI_Model
{
//-funcion inserta detallado --------------------------------------------------------------------	
 function insertar_datos ($nombre,$apellido ,$edad, $fehca_naci,$nacionalidad,
						  $num_pasap ,$fecha_expasa, $cedula, $direc,
						  $telefo , $Cel,$email,$parro,
						  $vicaria ,$Diocesis ,$nivel_acade ,$ocupacion ,
						  $ltrabajo  ,$direc_estu,$participo,$grupo,
						  $pais_particio ,$emergencia ,$parentesco ,$telefo_emerge ,
						  $pa_enfermedad ,$tratamiento,$medica ,$combosangre ,
						  $alergico ,$catequista,$animador ,$coordinador ,
						  $coro,$servicio,$agente , $participante,
						  $lector,$otrochec,$liturgia,$musica,
						  $floklore,$animaciones,$exp_grupal,$exp_cultu ,
						  $deportes, $airelibre ,$campamentos,$ejercicio_espiri,
						  $volun_social,$act_espi,$otras,$message1,$message2                                                                          
						 )
	{
	
    $query="INSERT INTO tbl_formulario_b(  nombre ,apellido  , edad  ,fechadenac , nacionalidad , 
													pasaporte  ,fechadepas ,  cedula , direccion ,  
													telefono ,  celular , email , parroquia  , 
													vicaria ,diosesis , nivelaca , ocupacion , 
													lugardetrab , direcciontrab ,participo ,grupos , 
													paisj ,   enombre , parentesco , etel , 
													enfermedad , tratamiento  , medicamentos , sangre  ,
													alergia  , catequista  , animador ,coordinador ,
													coro , servidor ,  agente ,participante , 
													lector ,otros  ,liturgia , musica ,
													expresiones ,  animaciones ,exgrupales ,expresionescul ,
													deportes , actividaire ,campamentos  ,ejerespirit ,
													volunsocial ,actiespirit ,otras, pregunta1 , pregunta2 
							 )  
	        VALUES (      '$nombre','$apellido' ,'$edad', '$fehca_naci','$nacionalidad',
						  '$num_pasap' ,'$fecha_expasa', '$cedula', '$direc',
						  '$telefo' , '$Cel','$email','$parro',
						  '$vicaria' ,'$Diocesis' ,'$nivel_acade' ,'$ocupacion',
						  '$ltrabajo'  ,'$direc_estu','$participo','$grupo',
						  '$pais_particio' ,'$emergencia' ,'$parentesco' ,'$telefo_emerge' ,
						  '$pa_enfermedad' ,'$tratamiento','$medica' ,'$combosangre' ,
						  '$alergico' ,'$catequista','$animador' ,'$coordinador' ,
						  '$coro','$servicio','$agente' , '$participante',
						  '$lector','$otrochec','$liturgia','$musica',
						  '$floklore','$animaciones','$exp_grupal','$exp_cultu' ,
						  '$deportes', '$airelibre' ,'$campamentos','$ejercicio_espiri',
						  '$volun_social','$act_espi','$otras','$message1','$message2'    	
		           )";
						//$contador =$this->db->query($query);	
                            $this->db->trans_begin();
							$this->db->query($query);

							if ($this->db->trans_status() === FALSE)
							{
									$this->db->trans_rollback();
							}
							else
							{
									$this->db->trans_commit();
							}						
					
	} 
			
	
}
?>