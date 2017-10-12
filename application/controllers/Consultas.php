<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Consultas extends CI_Controller {


	public function __construct(){
		parent::__construct();
		$this->layout->setLayout('consultaslayout');
		date_default_timezone_set("Chile/Continental");
	}

	
	public function index()
	{
		$org = strtoupper($this->input->get('org'));

        if($this->session->userdata('organo')){ 

        	$organo = $this->organo_model->getPerfil();	
			$id = null;

			foreach ($organo as $data) {
				if(($data->nombre)==$org){
					$id = $data->id;
				}
			}
			
			$datos=$this->organo_model->getOrgano($id);
			$grillaA=$this->organo_model->getGrilla($id,1);
			$grillaB=$this->organo_model->getGrilla($id,2);
			$grillaC=$this->organo_model->getGrilla($id,3);
			$config=$this->usuario_model->getConfig();
			$armamento=$this->organo_model->getArmamento($id);



	        $this->layout->view("index",compact('datos','grillaA','grillaB','grillaC','config','org','armamento'));
        }else{
            redirect(base_url()."home/error");
        }

	}

	public function expo()
	{
		$org = strtoupper($this->input->get('org'));
    	$organo = $this->organo_model->getPerfil();	
		$id = null;

		foreach ($organo as $data) {
			if(($data->nombre)==$org){
				$id = $data->id;
			}
		}

		$datos=$this->organo_model->getOrgano($id);
		$this->layout->setLayout('blancolayout');
	    $this->layout->view("expo",compact('datos','org'));
	}

}
