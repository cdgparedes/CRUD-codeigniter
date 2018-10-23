
<?php
class Persona  extends CI_controller
{
	 function __construct()
	 {
   		parent ::__construct();
   		$this->load->model('mpersona');
   		$this->load->model('musuario');
   		$this->load->library('encrypt');
   		
     }

   		public function index(){
   			$this->load->view('persona/vperSona' );

   		}

   public function guardar(){
      $param['idpersona']=$this->input->post('txtID');
      $param['dni']=$this->input->post('txtDNI');
      $param['nombre']=$this->input->post('txtNombre');
      $param['appaterno']=$this->input->post('txtApPaterno');
      $param['appmaterno']=$this->input->post('txtApMaterno');
      $param['email']=$this->input->post('txtEmail');
      $param['fecnace']=$this->input->post('datFecNac');
    //usuario
      $paramUsu['nomUsuario']=$this->input->post('txtusuario');
      $paramUsu['clave']=$this->input->post('contraseña');
      $paramUsu['codigoUsuario']=$this->input->post('txtcodigousuario');
      //var_dump( $paramUsu);
    //accedemos al metodo guardar del model persona 
     $lastid = $this->mpersona->guardar($param);
  // this->input->post('');
      if ($lastid > 0)
         {
         	$paramUsu['idpersona']=$lastid;
          //var_dump( $paramUsu['idpersona']);
         	$this->musuario->guardarUsuario($paramUsu);


         }


   }


public function actualizardatos(){
      $param['nombre']=$this->input->post('txtNombre');
      $param['appaterno']=$this->input->post('txtApPaterno');
      $param['appmaterno']=$this->input->post('txtApMaterno');
      $param['email']=$this->input->post('txtEmail');

      $this->mpersona->actualizardatos($param);
      redirect('persona/index');
}

public function eliminarpersona(){
  
  $id=$this->input->post('txtIdPersona');

  $this->musuario->eliminarusuario($id);
  $this->mpersona->eliminarpersona($id);
  
}

}


?>