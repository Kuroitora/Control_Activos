<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class model_auditoria extends CI_Model{

	function model_auditoria() {
 		parent::__construct(); //llamada al constructor de Model.
 	}
 

 function obtener_sede(){
     	$sedes = $this->db->get('sede');
     	return $sedes->result();
     }

 function obtener_edificios($id){
		$this->db->where('idSede',$id);
     	$edificios = $this->db->get('edificio');
     	return $edificios->result();
     }

 function obtener_pisos($id){
		$this->db->where('idEdificio',$id);
     	$pisos = $this->db->get('piso');
     	return $pisos->result();
     }

 function obtener_salas($id){
		$this->db->where('idPiso',$id);
     	$salas = $this->db->get('sala');
     	return $salas->result();
     }

}