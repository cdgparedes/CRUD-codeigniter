<?php
   class Musuario extends CI_Model
{


		function __construct()
	{
		parent::__Construct();
	}

	public function guardarUsuario($paramUsu){
		$campos = array(
          'nombreusuario'=>$paramUsu['nomUsuario'],
         'clave'=> $paramUsu['clave'],
         'idpersona'=>$paramUsu['codigoUsuario'],
        
		);

		$this->db->insert('usuarios',$campos);
		return $this->db->insert_id();//retornamos el ùltimo ID

	}

	public function eliminarusuario($id){
	 $this->db->where('idpersona',$id);
     $this->db->delete('usuarios');
	}


}







 ?>