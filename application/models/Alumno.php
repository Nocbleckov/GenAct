<?php 
defined('BASEPATH') OR exit('Acceso directo no disponible');

class Alumno extends CI_Model{
	function __construct(){
		parent::__construct();
		$this->load->database();
	}

	function obtCalificacion($data){
		$where = array(
			'a.nombreAlumno'=>$data['nombreAlumno'],
			'a.numeroCuenta'=>$data['numeroCuenta']
			);

		$this->db->select('*');
		$this->db->from('alumno_laboratorio AS al');
		$this->db->join('alumno AS a','al.idAlumno = a.idAlumno','INNER');
		$this->db->join('laboratorio AS l','al.idLaboratorio = l.idLaboratorio','INNER');
		$this->db->where($where);
		return $regreso = $this->db->get();
	}
}

?>