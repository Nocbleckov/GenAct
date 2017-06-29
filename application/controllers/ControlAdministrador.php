<?php 
defined('BASEPATH') OR exit('Acceso directo no permitido');

class ControlAdministrador extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('Alumno');
	}

	public function index(){
		$data = array(
			'nombreUsuario'=>$this->input->post('nombreUsuarioData'),
			'nombreIngreso'=>$this->input->post('nombreIngresoData'),
			'privilegios'=>$this->input->post('privilegiosData'),
			'buscarAlumno'=>$this->load->view('BuscarAlumno/buscarAlumno',NULL,TRUE),
			);

		$this->load->view('Administrador/indexAdministrador',$data);
	}


	public function vistaRes(){

		$data = $this->input->post();

		$regreso = $this->load->view('BuscarAlumno/mostrarResultado',$data,TRUE);

		echo $regreso;

	}

	public function obtCalificaciones(){

		$data = array(
			'nombreAlumno'=>$this->input->post('nombreAlumno'),
			'numeroCuenta'=>$this->input->post('numeroCuenta')
			);
		$regreso = 
		$this->Alumno->obtCalificacion($data);
		echo json_encode($regreso);
	}



}

?>