<?php
defined('BASEPATH') OR exit('Acceso directo no disponible');

class Usuario extends CI_Model{
	
	function __construct()
	{
		parent::__construct();
		$this->load->database();

	}

	function existeUsuario($data){
		return $regreso['usuario']= $this->db->get_where('usuario',
			array(
				'nombreIngreso'=>$data['nombreUsuario'],
				'password'=>$data['pass']
				))->result();

	}

	function ingresarUsuario($data){
		$this->db->insert('usuario',array(
			'nomUsuario'=>$data['nombreUsuario'],
			'password'=>$data['pass'],
			'nombreIngreso'=>$data['nombreUsuario'],
			'privilegios'=>0
			));
	}

}

?>