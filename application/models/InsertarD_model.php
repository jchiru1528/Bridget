<?php
Class InsertarD_model extends CI_Model
{
//-funcion inserta detallado --------------------------------------------------------------------	
 function insertar_datos ( $codigo_jmj,
																$nombre_grupo,
																$nacion,
																$ciudad,
																$lengua_ma,
																$multilingue,
																$nacional_si,
																$nacional_no,
																$diocesano,
																$comunidad,
																$otros_a,
																$total_parti,
																$total_hombres,
																$total_mujeres,
																$menor_si,
																$menor_no,
																$total_menor,
																$necesidad_si,
																$necesidad_no,
																$auditiva,
																$total_audi,
																$motora,
																$total_motora,
																$cognitiva,
																$total_cogn,
																$visual,
																$total_visual,
																$mental,
																$total_mental,
																$visceral,
																$total_visceral,
																$cronica,
																$total_cronica,
																$religioso_si,
																$religioso_no,
																$nombre_resp,
																$apellido_resp,
																$sexo_resp,
																$fecha_resp,
																$pasap_resp,
																$cedula_resp,
																$ndoc_resp,
																$postal_resp,
																$ciudad_resp,
																$nacion_resp,
																$telofi_resp,
																$teldom_resp,
																$movil_resp,
																$fax_resp,
																$email_resp,
																$remail_resp,
																$idioma_resp,
																$notas_resp,
																$nombre_vice,
																$apellido_vice,
																$sexo_vice,
																$fecha_vice,
																$pasap_vice,
																$cedula_vice,
																$ndoc_vice,
																$postal_vice,
																$ciudad_vice,
																$nacion_vice,
																$telofi_vice,
																$teldom_vice,
																$movil_vice,
																$fax_vice,
																$email_vice,
																$remail_vice,
																$idioma_vice,
																$notas_vice,
																$total_orient,
																$notas_orient,
																$acepto,
																$nombre_opci,
																$apellido_opci,
																$sexo_opci,
																$fecha_opci,
																$pasap_opci,
																$cedula_opci,
																$ndoc_opci,
																$ciudad_opci,
																$nacion_opci,
																$telofi_opci,
																$teldom_opci,
																$movil_opci,
																$nombre_tutor,
																$apellido_tutor,
																$direc_tutor,
																$telofi_tutor,
																$teldom_tutor,
																$movil_tutor,
																$auditiva_opci,
																$motora_opci,
																$cognitiva_opci,
																$visual_opci,
																$mental_opci,
																$visceral_opci,
																$cronica_opci,
																$interprete_opci,
																$sruedas_opci)
 {
	
    $query="INSERT INTO tbl_formulario_d(   codigo_jmj,
											nombre_grupo,
											nacion,
											ciudad,
											lengua_ma,
											multilingue,
											nacional_si,
											nacional_no,
											diocesano,
											comunidad,
											otros_a,
											total_parti,
											total_hombres,
											total_mujeres,
											menor_si,
											menor_no,
											total_menor,
											necesidad_si,
											necesidad_no,
											auditiva,
											total_audi,
											motora,
											total_motora,
											cognitiva,
											total_cogn,
											visual,
											total_visual,
											mental,
											total_mental,
											visceral,
											total_visceral,
											cronica,
											total_cronica,
											religioso_si,
											religioso_no,
											nombre_resp,
											apellido_resp,
											sexo_resp,
											fecha_resp,
											pasap_resp,
											cedula_resp,
											ndoc_resp,
											postal_resp,
											ciudad_resp,
											nacion_resp,
											telofi_resp,
											teldom_resp,
											movil_resp,
											fax_resp,
											email_resp,
											remail_resp,
											idioma_resp,
											notas_resp,
											nombre_vice,
											apellido_vice,
											sexo_vice,
											fecha_vice,
											pasap_vice,
											cedula_vice,
											ndoc_vice,
											postal_vice,
											ciudad_vice,
											nacion_vice,
											telofi_vice,
											teldom_vice,
											movil_vice,
											fax_vice,
											email_vice,
											remail_vice,
											idioma_vice,
											notas_vice,
											total_orient,
											notas_orient,
											acepto,
											nombre_opci,
											apellido_opci,
											sexo_opci,
											fecha_opci,
											pasap_opci,
											cedula_opci,
											ndoc_opci,
											ciudad_opci,
											nacion_opci,
											telofi_opci,
											teldom_opci,
											movil_opci,
											nombre_tutor,
											apellido_tutor,
											direc_tutor,
											telofi_tutor,
											teldom_tutor,
											movil_tutor,
											auditiva_opci,
											motora_opci,
											cognitiva_opci,
											visual_opci,
											mental_opci,
											visceral_opci,
											cronica_opci,
											interprete_opci,
											sruedas_opci)  
	        VALUES (        '$codigo_jmj',
							'$nombre_grupo',
							'$nacion',
							'$ciudad',
							'$lengua_ma',
							'$multilingue',
							'$nacional_si',
							'$nacional_no',
							'$diocesano',
							'$comunidad',
							'$otros_a',
							'$total_parti',
							'$total_hombres',
							'$total_mujeres',
							'$menor_si',
							'$menor_no',
							'$total_menor',
							'$necesidad_si',
							'$necesidad_no',
							'$auditiva',
							'$total_audi',
							'$motora',
							'$total_motora',
							'$cognitiva',
							'$total_cogn',
							'$visual',
							'$total_visual',
							'$mental',
							'$total_mental',
							'$visceral',
							'$total_visceral',
							'$cronica',
							'$total_cronica',
							'$religioso_si',
							'$religioso_no',
							'$nombre_resp',
							'$apellido_resp',
							'$sexo_resp',
							'$fecha_resp',
							'$pasap_resp',
							'$cedula_resp',
							'$ndoc_resp',
							'$postal_resp',
							'$ciudad_resp',
							'$nacion_resp',
							'$telofi_resp',
							'$teldom_resp',
							'$movil_resp',
							'$fax_resp',
							'$email_resp',
							'$remail_resp',
							'$idioma_resp',
							'$notas_resp',
							'$nombre_vice',
							'$apellido_vice',
							'$sexo_vice',
							'$fecha_vice',
							'$pasap_vice',
							'$cedula_vice',
							'$ndoc_vice',
							'$postal_vice',
							'$ciudad_vice',
							'$nacion_vice',
							'$telofi_vice',
							'$teldom_vice',
							'$movil_vice',
							'$fax_vice',
							'$email_vice',
							'$remail_vice',
							'$idioma_vice',
							'$notas_vice',
							'$total_orient',
							'$notas_orient',
							'$acepto',
							'$nombre_opci',
							'$apellido_opci',
							'$sexo_opci',
							'$fecha_opci',
							'$pasap_opci',
							'$cedula_opci',
							'$ndoc_opci',
							'$ciudad_opci',
							'$nacion_opci',
							'$telofi_opci',
							'$teldom_opci',
							'$movil_opci',
							'$nombre_tutor',
							'$apellido_tutor',
							'$direc_tutor',
							'$telofi_tutor',
							'$teldom_tutor',
							'$movil_tutor',
							'$auditiva_opci',
							'$motora_opci',
							'$cognitiva_opci',
							'$visual_opci',
							'$mental_opci',
							'$visceral_opci',
							'$cronica_opci',
							'$interprete_opci',
							'$sruedas_opci')";

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