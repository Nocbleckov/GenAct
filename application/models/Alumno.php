<?php 
defined('BASEPATH') OR exit('Acceso directo no disponible');

class Alumno extends CI_Model{
	function __construct(){
		parent::__construct();
		$this->load->database();
	}

	function obtCalificacion($data){
		
	}
}

?>