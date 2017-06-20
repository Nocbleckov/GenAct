<?php 
defined('BASEPATH') OR exit('Acceso directo no permitido');

class ControlAdministrador extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
	}

	public function index(){
		$data = array(
			'nombreUsuario'=>$this->input->post('nombreUsuarioData'),
			'nombreIngreso'=>$this->input->post('nombreIngresoData'),
			'privilegios'=>$this->input->post('privilegiosData'),
			'buscarAlumno'=>$this->load->view('Administrador/buscarAlumno',NULL,TRUE),
			);

		$this->load->view('Administrador/indexAdministrador',$data);
	}

}

?>