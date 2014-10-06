<?php
class ctrLogin extends CI_Controller{
	public function login(){
		
		$this->load->view('vistas/login');
	}

	public function principal(){
		$this->load->view('vistas/principal');
	}

	public function historial(){
		$this->load->view('vistas/historial');
	}

}