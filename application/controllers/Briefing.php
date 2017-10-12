<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Briefing extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->layout->setLayout('brieflayout');
		date_default_timezone_set("Chile/Continental");

	}


	public function index(){
		$organo=$this->organo_model->getPerfil();


                if($this->session->userdata('organo')){ 	

        		if($this->input->post())
                        {
                        	$org = $this->input->post('organo',true);
                        	$fecha = $this->input->post('fecha',true);
                        	$brief=$this->brief_model->getBriefCustom($org,$fecha);

                                $organo = $this->organo_model->getPerfil(); 
                                foreach ($organo as $data) {
                                        if(($data->id)==$org){ $org = $data->nombre; }
                                }


                        	//print_r($organo);
                        	//print_r($fecha);exit;
                        }
                        else
                        {
                        	$brief=null;
                        	$org = null;
                        	$fecha = null;
                        }

                $this->layout->view("index",compact('brief','organo','fecha','org'));
                	
                }else{
                        redirect(base_url()."home/error");
                }
        }


}
