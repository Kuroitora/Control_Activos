<?php
class auditoria extends CI_Controller{

	public function __construct() {
        parent::__construct();
        $this ->load->model('model_auditoria');
        $this ->load->model('model_login');
        $this->load->library(array('session','form_validation'));
        $this->load->helper(array('url','form'));
        $this->load->database('default');
     }

     
    public function obtenerSede(){
        $data['sedes'] = $this->model_auditoria->obtener_sede();
        $this->load->view('vistas/auditoria',$data);
    }

    public function obtenerEdificios(){
         $options = "";
        if($this->input->post('sede'))
        {
            $sede = $this->input->post('sede');
            $edificios = $this->model_auditoria->obtener_edificios($sede);
            $cont=0;
            foreach($edificios as $fila)
            {$cont++;
            ?>
                <option value="<?=$fila->id?>"><?=$fila->nombre?></option>
            <?php
            }

           if($cont==0){
            ?>
                <option value="0">No hay edificios</option>
            <?php
            }

        }
    }

     public function obtenerPisos(){
         $options = "";
        if($this->input->post('edificio'))
        {
            $edificio = $this->input->post('edificio');
            $pisos = $this->model_auditoria->obtener_pisos($edificio);
            $cont=0;
            foreach($pisos as $fila)
            {$cont++;
            ?>
                <option value="<?=$fila->id?>"><?=$fila->nombre?></option>
            <?php
            }

           if($cont==0){
            ?>
                <option value="0">No hay pisos</option>
            <?php
            }

        }
    }

     public function obtenerSalas(){
         $options = "";
        if($this->input->post('piso'))
        {
            $piso = $this->input->post('piso');
            $salas = $this->model_auditoria->obtener_salas($piso);
            $cont=0;
            ?>
             <option value="0">Seleccione una sala</option>
            <?php
            foreach($salas as $fila)
            {$cont++;
            ?>
                <option value="<?=$fila->id?>"><?=$fila->nombre?></option>
            <?php
            }

           if($cont==0){
            ?>
                <option value="0">No hay salas</option>

            <?php
            }

        }
    }


    public function prueba(){
        
        $this->load->view('vistas/prueba');
    }
    

	public function crear(){
		
		$this->load->view('vistas/auditoria');
	}


    public function principal(){
        $data['user'] = $_POST['inputUsuario'];
        $data['pass'] = $_POST['inputPass'];
        $query = $this->model_login->login($data);
        if($query){ //Si el usuario fue validado correctamente
            $sedes = $this->model_auditoria->obtener_sede();
            foreach($query->result() as $row){
                $data = array(
                'username' => $data['user'],
                'is_logged_in' => true,
                'idUser' => $row->id,
                'sede' => $sedes
                );
            $this->session->set_userdata($data);

            $this->load->view('vistas/principal',$data);
            }
        }
        else{
            $msjValidate['msjValidate']=1;
            $this->load->view('vistas/login',$msjValidate);
        }

    }


}