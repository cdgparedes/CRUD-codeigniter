<?php


Class Mlogin extends CI_model
{
   public function ingresar($usu,$pass){
   	$this->db->select('u.idusuario,p.nombre,p.appaterno,p.appmaterno,p.idpersona');
     $this->db->from('usuarios u');
     $this->db->join('persona p','p.idpersona = u.idpersona');
      $this->db->where('u.nombreusuario',$usu);
        $this->db->where('u.clave',$pass);

        $resultado=$this->db->get();//todo
        if ($resultado->num_rows()==1){
        	$r=$resultado->row();//Aqui lo que se hace es capturar el registro obtenido .

     //Vamos a trabajar co variables de session asignandoles lo que ya tenemos en el regisro $r.
        	    $s_usuario=array(
                's_idpersona'=>$r->idpersona,
        	     's_idusuario'=> $r->idusuario,
        	      's_usuario'=> $r->nombre.",".$r->appaterno."".$r->appaterno
                );

        	    $this->session->set_userdata($s_usuario);//Asi es como se manejan las variables de seession en codeigniter 

                return 1;

                
        }else{
              return 0;
             } 
   }
}
 
  