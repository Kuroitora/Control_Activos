<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class model_auditoria extends CI_Model{

	function model_auditoria() {
 		parent::__construct(); //llamada al constructor de Model.
          $this->load->helper('date');
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

     function crear_auditoria($data){
          $this->db->insert('auditoria', $data); 
          $id = $this->db->insert_id();
          $this->session->set_userdata('idAuditoria', $id);
          echo $this->session->userdata('idAuditoria');
          if($this->db->affected_rows() == 0){
               return 'Error al realizar la inserción de la auditoria';
          }else{
               $this->db->select('id,nombreActivo, estado,codigo');
               $this->db->where('idSala',$data['idSala']);
               $query = $this->db->get('activo');
               return $query->result();
          }
     }

     function borrar_auditoria($id){
          $this->db->where('id', $id);
          $this->db->delete('auditoria'); 
     }

     function reailizar_auditoria($data,$comment){
          $this->db->insert_batch('auditoria-activo', $data);

          $id = $data[0]['idAuditoria'];
          $this->db->set('estado', 1);
          $this->db->set('comentario', $comment);
          $this->db->where('id', $id);
          $this->db->update('auditoria');

     }


     function guardar_auditoria($data,$comment){
          $this->db->insert_batch('auditoria-activo', $data);

          $id = $data[0]['idAuditoria'];
          $this->db->set('comentario', $comment);
          $this->db->where('id', $id);
          $this->db->update('auditoria');

     }

}