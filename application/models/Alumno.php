<?php 
defined('BASEPATH') OR exit('Acceso directo no disponible');

class Alumno extends CI_Model{
	function __construct(){
		parent::__construct();
		$this->load->database();
	}

	function obtCalificacion($data){
		/*$where = array(
			'a.nombreAlumno'=>$data['nombreAlumno'],
			'a.numeroCuenta'=>$data['numeroCuenta']
			);*/

		/*$this->db->select('*');
		$this->db->from('alumno_laboratorio AS al');
		$this->db->join('alumno AS a','al.idAlumno = a.idAlumno','INNER');
		$this->db->join('laboratorio AS l','al.idLaboratorio = l.idLaboratorio','INNER');
		$this->db->where($where);

		$regreso = $this->db->get();*/

		$query = "SELECT al.calificacion, a.nombreAlumno, a.numeroCuenta ,l.nombreLaboratorio,l.numeroLaboratorio, al.semestre  FROM alumno_laboratorio AS al INNER JOIN alumno AS a ON al.idAlumno = a.idAlumno INNER JOIN laboratorio AS l ON al.idLaboratorio = l.idLaboratorio WHERE a.nombreAlumno = '".$data['nombreAlumno']."' AND a.numeroCuenta = '".$data['numeroCuenta']."';";
		
		$regreso = $this->db->query($query);
		

		/*echo var_dump($regreso->result_array());

		/*foreach ($regreso as $key) {
			$json['respuesta'] = $key;
		}*/

		return $regreso->result_array();

	}
}

?>