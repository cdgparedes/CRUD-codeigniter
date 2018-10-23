<?php 
/*


*/
class Clogin extends CI_controller
{

 function __construct()
 {

 	parent::__construct();
 	$this->load->model('login/mlogin');

 }

 
 public function index()
 {

 	 $data['mensaje']="";
 	$this->load->view('login/vlogin',$data);
   


 }

 public function ingresar(){
 	$usu=$this->input->post('txtusuario');
 	//$pass=$this->encrypt->sha1($this->input->post('txtclave'));//Contraseña encrptada
    $pass=$this->input->post('txtclave');//Contraseña encrptada
 	$res=$this->mlogin->ingresar($usu,$pass);
 	if ($res==1)  {
 		$this->load->view('persona/vupdatepersona');

 	}else{
 		$data['mensaje']="Conntraseña erronea";
 		$this->load->view('login/vlogin',$data);

 	}


 }



}









 ?>
	