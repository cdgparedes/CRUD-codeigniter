<?php

/**
* 
*/
class Mpersona extends CI_Model
{
	
	function __construct()
	{
		parent::__Construct();
	}

	public function guardar($param){
		$campos = array(
          'idpersona'=>$param['idpersona'],
         'dni'=>$param['dni'],
         'nombre'=>$param['nombre'],
         'appaterno'=>$param['appaterno'],
         'appmaterno'=>$param['appmaterno'],
         'email'=>$param['email'],
         'fechar'=>$param['fecnace']

		);

		$this->db->insert('persona',$campos);
		return $this->db->insert_id();//retornamos el ùltimo ID

	}



public function actualizardatos($param){

	$campos = array(
       'appaterno'=>$param['appaterno'],
         'appmaterno'=>$param['appmaterno'],
         'email'=>$param['email'],
         

		);
	$this->db->update('persona',$campos);
	$this->db->where('idpersona',$this->session->userdata('s_idpersona'));
	return 1;
}

public function eliminarpersona($id){
	/*$campos=array(
		'idpersona'=>$id
	);
	$this->db->delete('persona',$campos);*/
     /*Otra forma de hacerlo es */
    $this->db->where('idpersona',$id);
     $this->db->delete('persona');
}




}




?>
