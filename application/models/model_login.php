<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class persona_model extends CI_Model{

	function persona_model() {
 		parent::__construct(); //llamada al constructor de Model.
 	}

 	function login($data){
		$this->db->where('usuario',$data['user']);
		$this->db->where('pass',$data['pass']);
		$query = $this->db->get('usuario');

		if($query->num_rows()==0){
			return $query;
		}
		else{
			return 0;
		}
		
	}

 }