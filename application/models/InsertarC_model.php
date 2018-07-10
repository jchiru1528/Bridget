<?php
Class InsertarC_model extends CI_Model
{
//-funcion inserta detallado --------------------------------------------------------------------	
 function insertar_datos ( $nombre ,$contacto, $miembros , $direc,
						   $telefono1, $telefono2,$email ,$guia ,
		                   $parro ,$tiempo , $musica1, $musica2 , 
						   $message1, $otrasparro                                                                         
						 )
 {
	
    $query="INSERT INTO tbl_formulario_c(   nombre,contacto,total ,domicilio,
											telefono1 ,telefono2 ,email,guiaEspiritual ,
											parroquia ,servMusical ,Musical1 ,Musical2,
											Pregunta , otraparro
							 )  
	        VALUES (      '$nombre' ,'$contacto', '$miembros' , '$direc',
						   '$telefono1', '$telefono2','$email' ,'$guia' ,
		                   '$parro' ,'$tiempo' , '$musica1', '$musica2' ,
						   '$message1'	, '$otrasparro'   	
		           )";

				  
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