<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 //el nombre de la clase y del archivo siempre debe llevar el mismo nombre y la priemr letra en mayuscula 
// el nombre de la clase coincide con el nombre de la libreria 
// las librerias son clases 

  class Menu{
  	private $arr_menu;
  	 public function __construct($arr){
  	 	$this->arr_menu=$arr;
  	  }
  		public function construirmenu(){
  	 		$ret_menu="<nav><ul>";
  	 		foreach ($this->arr_menu as $opcion) {
  	 			$ret_menu="<li>".$opcion."</li>";
  	 		}
  	 		$ret_menu = " </nav></ul>";
  	 		return $ret_menu;
  	 	}

  	}
 ?>