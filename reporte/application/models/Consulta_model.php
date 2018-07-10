<?php
Class Consulta_model extends CI_Model
{
//-funcion inserta detallado --------------------------------------------------------------------	
 function buscar_a ()
	{
	
		$SQL=" SELECT 
		           (select UPPER(a.decrip_parroquia)FROM tbl_parroquias a where a.id_parroquia=parroquia)parro, nombre,
				   apellido, cedula, DATE_FORMAT( fehca_naci, '%d-%m-%Y' ) fehca_naci , domicilio,
				   telefono, celular, email, tipo_doc, numero_doc, DATE_FORMAT( fecha_creacion , '%d-%m-%Y %r' ) fecharegis
			FROM tbl_formulario_a	  
		     ";
					 //queria que me permite insertar los valores de las celda de excel ala 
						return $this->db->query($SQL)	;				
	
	}




      function buscar_b ()
		{
	

			$SQL="SELECT    nombre ,apellido , edad ,DATE_FORMAT(fechadenac, '%d-%m-%Y' )fechadenac , 
							nacionalidad , cedula , direccion , telefono , celular  ,  
							(select a.decrip_parroquia FROM tbl_parroquias a where a.id_parroquia=parroquia) parroquia , 
							enombre , parentesco , etel , enfermedad , 
							DATE_FORMAT( fecha_creacion , '%d-%m-%Y %r' ) fecharegis 
					 FROM
									   tbl_formulario_b
					  order by fecha_creacion
					 ";
							 //queria que me permite insertar los valores de las celda de excel ala 
								return $this->db->query($SQL)	;				
	
		} 
	
	function buscar_c ()
		{
	
			$SQL="SELECT 
						nombre,contacto,total ,domicilio,
            			telefono1 ,telefono2 ,email,guiaEspiritual , 
						IFNULL((select a.decrip_parroquia FROM tbl_parroquias a where a.id_parroquia=parroquia),'') parroquia ,
						servMusical ,Musical1 ,Musical2, otraparro , DATE_FORMAT( fecha_creacion , '%d-%m-%Y %r' ) fecharegis
					    from 
								tbl_formulario_c
						order 
								by fecha_creacion";
							

							return $this->db->query($SQL)	;											
		} 
	
		function buscar_d ()
		{
	
			$SQL=" SELECT 
			                codigo_jmj,nombre_grupo ,nacion,comunidad,
							total_parti,nombre_resp,apellido_resp,nombre_vice,
							apellido_vice, fecha_creacion , email_resp,email_vice
				   FROM 
						    tbl_formulario_d 
				   order 
							by fecha_creacion";
							

							return $this->db->query($SQL)	;											
		} 
	
	
	
	
	
	
	
	
	
			
	
}
?>