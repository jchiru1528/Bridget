<?php
Class Login_model extends CI_Model
{
//-funcion inserta detallado --------------------------------------------------------------------	
 function login_a ($usuario,  $password)
	{
		$SQL=" SELECT * FROM loginusers where usuario= '$usuario' and pass = MD5('$password')";
					 //queria que me permite insertar los valores de las celda de excel ala 
						return $this->db->query($SQL)	;				
	
	}
	
			
	
}
?>