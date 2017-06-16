<?php
defined('BASEPATH') OR exit('No esta el acceso directo a este script');
class ControlLogin extends CI_Controller
{

	function __construct() {
		parent::__construct();
		$this->load->helper('url');
	}

	public function index(){

		
		$this->load->view('Login/LoginGenAct');


	}

	public function datosIngreso(){
		$data = array(
			'nombreUsuario'=>$this->input->post('nombreUsuario'),
			'pass'=>$this->input->post('pass'),
			);
		echo json_encode($data);
	}

}

?>