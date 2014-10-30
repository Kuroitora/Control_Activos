<?php
class ctrLogin extends CI_Controller{
	public function login(){
		
		$this->load->view('vistas/login');
	}

	public function principal(){
		$data['user'] = $_POST['inputUsuario'];
     	$data['pass'] = $_POST['inputPass'];

     	$this->load->model('model_login');
		$this->load->view('vistas/principal');
	}

	public function historial(){
		$this->load->view('vistas/historial');
	}

}