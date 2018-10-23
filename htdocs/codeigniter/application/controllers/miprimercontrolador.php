<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Miprimercontrolador extends CI_Controller {

   function __construct(){
   		parent ::__construct();
   		$this->load->helper('mihelper');
   }

  	 function index(){
  	 	$this->load->library('menu',array('Inicio','Contacto','Cursos'));
  	 	//variable para pasarsela a ala vista
  	 	$data['mi_menu'] = $this->menu->construirmenu();//data ahora tiene almacenado el menu enonces se la podeos pasar a la vista 
  	 	$this->load->view('practicando/primervista',$data);

   		}

    function holamundo(){
    	 echo " Esto es el Mètodo Holamundo";

    	$this-> load->view('practicando/primervista');
    	$this-> load->view('practicando/headers');
    	

    }

}
?>