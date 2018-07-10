<?php
Class Consulta_model extends CI_Model
{
//-funcion inserta detallado --------------------------------------------------------------------	
 function buscar_a ($cedula)
	{
	
		$SQL="SELECT        (select UPPER(a.decrip_parroquia)FROM tbl_parroquias a where a.id_parroquia=parroquia)parro,parroquia , nombre, apellido, 
		                    cedula, cedula,(case sexo when 'M' then 'Masculino' when 'F' then 'Femenino' end) tsexo ,sexo , fehca_naci, 
							domicilio, telefono, celular, email, tipo_doc, numero_doc,
							(select a.descrip_sangre from tbl_tipo_sangre a where a.id_sangre= tipo_sangre) tsangre, tipo_sangre, pre_pasto, acodiga, 
							voluntario, logistica, catequesis, 
							festival, resp_area, si, no, fin_semana, lun_a_vier, 
							toda_semana, manana, tarde, independiente, volun_ante, volun_desp, 
							volun_todo, estu_basico, estu_bachiller, estu_profesional, estu_tecnico, estu_pregrado, 
							estu_otro, idioma_ingles, nivel_ingles, idioma_frances, nivel_frances, idioma_aleman, nivel_aleman,
							idioma_italiano, nivel_italiano, idioma_portu,nivel_portu,idioma_otro,nivel_otro,otro_idioma, exp_admin, exp_turismos, 
							exp_informatica, exp_seguridad, exp_educacion, exp_sanidad, exp_traduccion, exp_recurso_h, 
							exp_otro, exp_conducir, tien_auto, exp_con_discapacitado
			 FROM
                               tbl_formulario_a
             WHERE 
                                cedula='$cedula'	  
		     ";
					 //queria que me permite insertar los valores de las celda de excel ala 
						return $this->db->query($SQL)	;				
	
	}




      function buscar_b ($cedula)
		{
	
			$SQL="SELECT    nombre ,apellido  , edad  ,fechadenac , nacionalidad , 
							pasaporte  ,fechadepas ,  cedula , direccion ,  
							telefono ,  celular , email , (select a.decrip_parroquia FROM tbl_parroquias a where a.id_parroquia=parroquia) parroquia  , 
							vicaria ,diosesis , nivelaca , ocupacion , 
							lugardetrab , direcciontrab ,participo ,grupos , 
							paisj ,   enombre , parentesco , etel , 
							enfermedad , tratamiento  , medicamentos ,(select a.descrip_sangre from tbl_tipo_sangre a where a.id_sangre= sangre )sangre ,
							alergia  , catequista  , animador ,coordinador ,
							coro , servidor ,  agente ,participante , 
							lector ,otros  ,liturgia , musica ,
							expresiones ,  animaciones ,exgrupales ,expresionescul ,
							deportes , actividaire ,campamentos  ,ejerespirit ,
							volunsocial ,actiespirit ,otras, pregunta1 , pregunta2  
					 FROM
									   tbl_formulario_b
					 WHERE 
										cedula='$cedula'	  
					 ";
							 //queria que me permite insertar los valores de las celda de excel ala 
								return $this->db->query($SQL)	;				
	
		} 
	
	function buscar_c ($cedula)
		{
	
			$SQL="SELECT   nombre,contacto,total ,domicilio,
											telefono1 ,telefono2 ,email,guiaEspiritual ,
											parroquia ,servMusical ,Musical1 ,Musical2, Pregunta 
											from  tbl_formulario_c
											where
											nombre = '$cedula'	 ";
							 //queria que me permite insertar los valores de las celda de excel ala 

							return $this->db->query($SQL)	;											
		} 
	
	function buscar_d ($cedula)
		{
	
			$SQL="SELECT * FROM tbl_formulario_d where 	codigo_jmj = '$cedula'	 ";

							return $this->db->query($SQL)	;											
		} 
	
	
	
	
	
	 function rpt_a ($cedula)
	{
	
		$SQL="SELECT        (select UPPER( a.decrip_parroquia) FROM tbl_parroquias a where a.id_parroquia=parroquia)parro,parroquia , 
							CONCAT(Nombre,  ' ', Apellido) as nombreR,
							cedula,(case sexo when 'M' then 'Masculino' when 'F' then 'Femenino' end) sexo , 
							DATE_FORMAT(fehca_naci,  '%d/%m/%Y')  fehca_naci,   
							domicilio, telefono, celular, email, tipo_doc, numero_doc,
							(select a.descrip_sangre from tbl_tipo_sangre a where a.id_sangre= tipo_sangre) tipo_sangre,
							(case pre_pasto when 1 then 'X' when 0 then '' end) pre_pasto,  (case acodiga when 1 then 'X' when 0 then '' end) acodiga, 
							(case voluntario when 1 then 'X' when 0 then '' end) voluntario,  (case logistica when 1 then 'X' when 0 then '' end) logistica, 
							(case catequesis when 1 then 'X' when 0 then '' end) catequesis,  (case festival when 1 then 'X' when 0 then '' end) festival, 
							(case resp_area when 1 then 'X' when 0 then '' end) resp_area , (case si when 1 then 'X' when 0 then '' end) si, 
							(case no when 1 then 'X' when 0 then '' end) no , (case fin_semana when 1 then 'X' when 0 then '' end) fin_semana, 
							(case lun_a_vier when 1 then 'X' when 0 then '' end) lun_a_vier , (case toda_semana when 1 then 'X' when 0 then '' end) toda_semana, 
							(case manana when 1 then 'X' when 0 then '' end) manana , (case  tarde when 1 then 'X' when 0 then '' end)  tarde, 
							(case independiente when 1 then 'X' when 0 then '' end) independiente , (case  volun_ante when 1 then 'X' when 0 then '' end)  volun_ante, 	
							(case volun_todo when 1 then 'X' when 0 then '' end) volun_todo , (case  volun_desp when 1 then 'X' when 0 then '' end)  volun_desp, (case  estu_basico when 1 then 'X' when 0 then '' end)  estu_basico, 	
							(case estu_bachiller when 1 then 'X' when 0 then '' end) estu_bachiller , (case  estu_profesional when 1 then 'X' when 0 then '' end)  estu_profesional,  
							(case estu_tecnico when 1 then 'X' when 0 then '' end) estu_tecnico,  (case   estu_pregrado when 1 then 'X' when 0 then '' end)   estu_pregrado,						 
							(case estu_otro when 1 then 'X' when 0 then '' end) estu_otro ,
							(case idioma_ingles when 1 then 'X' when 0 then '' end)idioma_ingles, nivel_ingles, 
							(case idioma_frances when 1 then 'X' when 0 then '' end)idioma_frances, nivel_frances,
							(case idioma_aleman when 1 then 'X' when 0 then '' end) idioma_aleman, nivel_aleman,
							(case idioma_italiano when 1 then 'X' when 0 then '' end)idioma_italiano, nivel_italiano,
							(case idioma_portu when 1 then 'X' when 0 then '' end)idioma_portu, nivel_portu,
							(case idioma_otro when 1 then 'X' when 0 then '' end)idioma_otro, nivel_otro,otro_idioma, 
							(case exp_admin  when 1 then 'X' when 0 then '' end) exp_admin,(case  exp_turismos  when 1 then 'X' when 0 then '' end)  exp_turismos,
							(case exp_informatica  when 1 then 'X' when 0 then '' end) exp_informatica ,(case  exp_seguridad  when 1 then 'X' when 0 then '' end)  exp_seguridad,
							(case exp_educacion  when 1 then 'X' when 0 then '' end) exp_educacion ,(case  exp_sanidad  when 1 then 'X' when 0 then '' end)  exp_sanidad,
							(case exp_traduccion  when 1 then 'X' when 0 then '' end) exp_traduccion ,(case  exp_recurso_h  when 1 then 'X' when 0 then '' end)  exp_recurso_h,
							(case exp_otro  when 1 then 'X' when 0 then '' end) exp_otro ,(case  exp_conducir  when 1 then 'X' when 0 then '' end) exp_conducir,
							(case tien_auto  when 1 then 'X' when 0 then '' end) tien_auto ,(case  exp_con_discapacitado  when 1 then 'X' when 0 then '' end)  exp_con_discapacitado
			 FROM
                               tbl_formulario_a
             WHERE 
                                cedula='$cedula'	  
		     ";
					 //queria que me permite insertar los valores de las celda de excel ala 
						return $this->db->query($SQL)	;				
	
	}
	
	
			
	
}
?>