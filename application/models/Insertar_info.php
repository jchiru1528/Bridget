<?php
Class Insertar_info extends CI_Model
{
//-funcion inserta detallado --------------------------------------------------------------------	
 function insertar_datos ($parroquia,$nombre ,$apellido ,$cedula,$combosexo,$fecha,
						  $domicilio,$telefono,$celular, $email  ,$tipodoc,$numdoc,
                          $combosangre,$preparacion ,$acogida,$voluntarios , $logistica ,$catequesis,
						  $festival ,$area,$si ,$no, $dispo1 ,$dispo2,
						  $dispo3,$horarioM,$horarioT , $horarioI, $volun1,$volun2 ,
						  $volun3, $estudio1 ,$estudio2 ,$estudio3 ,$estudio4 ,$estudio5 ,
                          $otroest , $idioma1 ,$comboIngles, $idioma2 ,  $comboFrances ,$idioma3 , $comboAleman, 
                          $idioma4 ,$comboItaliano,$idioma5 ,$comboPortu,$idioma6 ,$comboOtro , $idioma7, $administracion , $turismo,
						  $informatica  ,$seguridad, $educacion, $sanidad ,$traduccion,$recursohumano ,
						  $otro,$conducir , $auto  ,$discapa  					  
						  )
    {
	
		$query="INSERT  INTO tbl_formulario_a(   parroquia, nombre, apellido, cedula, sexo, fehca_naci, 
												 domicilio, telefono, celular, email, tipo_doc, numero_doc,
												 tipo_sangre, pre_pasto, acodiga, voluntario, logistica, catequesis, 
												 festival, resp_area, si, no, fin_semana, lun_a_vier, 
												 toda_semana, manana, tarde, independiente, volun_ante, volun_desp, 
												 volun_todo, estu_basico, estu_bachiller, estu_profesional, estu_tecnico, estu_pregrado, 
												 estu_otro, idioma_ingles, nivel_ingles, idioma_frances, nivel_frances, idioma_aleman, nivel_aleman,
												 idioma_italiano, nivel_italiano,idioma_portu, nivel_portu, idioma_otro, nivel_otro,otro_idioma, exp_admin, exp_turismos, 
												 exp_informatica, exp_seguridad, exp_educacion, exp_sanidad, exp_traduccion, exp_recurso_h, 
												 exp_otro, exp_conducir, tien_auto, exp_con_discapacitado
								             )  
				VALUES (  '$parroquia','$nombre' ,'$apellido' ,'$cedula','$combosexo','$fecha',
						  '$domicilio','$telefono','$celular', '$email'  ,'$tipodoc','$numdoc',
                          '$combosangre','$preparacion' ,'$acogida','$voluntarios' , '$logistica' ,'$catequesis',
						  '$festival' ,'$area','$si' ,'$no', '$dispo1' ,'$dispo2',
						  '$dispo3','$horarioM','$horarioT' , '$horarioI', '$volun1','$volun2' ,
						  '$volun3', '$estudio1' ,'$estudio2' ,'$estudio3' ,'$estudio4' ,'$estudio5' ,
                          '$otroest' , '$idioma1' ,'$comboIngles', '$idioma2' ,  '$comboFrances' ,'$idioma3' , '$comboAleman',
                          '$idioma4' ,'$comboItaliano','$idioma5' ,'$comboPortu' ,'$idioma6','$comboOtro' ,'$idioma7' , '$administracion' , '$turismo',
						  '$informatica'  ,'$seguridad', '$educacion', '$sanidad' ,'$traduccion','$recursohumano' ,
						  '$otro','$conducir' , '$auto'  ,'$discapa' 
	  
		               )";
					 //queria que me permite insertar los valores de las celda de excel ala 
	
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