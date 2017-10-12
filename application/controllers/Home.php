<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->layout->setLayout('organolayout');
		date_default_timezone_set("Chile/Continental");
	}


	public function index(){
		$this->layout->setLayout('loginlayout');
		if($this->session->userdata('organo')){ 
			if($this->session->userdata('organo')=="ADMIN"){ 
				redirect(base_url()."home/menu");
			}else{

				$this->layout->view("index");}

		}else{ redirect(base_url()."home/error"); }
	}

	public function menu(){
		$this->layout->setLayout('loginlayout');
		if($this->session->userdata('organo')=="ADMIN"){ 

			$this->layout->view("menuadmin");

		}else{ redirect(base_url()."home/error"); }
	}



	public function login()
	{

		$mensaje = null;
		$css = null;

		if($this->input->post()){
			$user=strtoupper($this->input->post('usuario',true));
			$pass=$this->input->post('pass',true);
			$datos = $this->usuario_model->getLogin($user,$pass);

			if((sizeof($datos))==0){
				$mensaje = "<strong>Error:</strong> Usuario o Contraseña Incorrectos";
				$css = "danger";
			}else{
				$rol = $datos->fk_organo; 
				$org = null;
	            $organo = $this->organo_model->getPerfil(); 
	            foreach ($organo as $data) {
	                if(($data->id)==$rol){ $org = $data->nombre; }
	            }
				$this->session->set_userdata('sesiondatos');
				$this->session->set_userdata('usuario',$datos->usuario);
	            $this->session->set_userdata('organo',$org);

	            if($org=="ADMIN"){redirect(base_url()."home/menu");}
	            if($org=="RITMO"){redirect(base_url()."admin/inputritmo");}
	            else{ redirect(base_url()."home"); }
	            
			}
		}

		$this->session->set_flashdata('css',$css);
        $this->session->set_flashdata('mensaje',$mensaje);
        $this->layout->setLayout('loginlayout');
        $this->layout->view("login");
	}

	public function salir()
	{
		$this->session->sess_destroy("sesiondatos");
		redirect(base_url()."home/login");
	}

	public function error()
	{
		$this->layout->setLayout('loginlayout');
		$this->layout->view("error");
	}
	

}
