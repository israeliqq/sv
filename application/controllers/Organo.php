<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Organo extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->layout->setLayout('organolayout');
		date_default_timezone_set("Chile/Continental");
	}



    public function prueba(){
        $this->layout->view("prueba");
    }

	public function index()
	{   

        $org = strtoupper($this->input->get('org'));
        foreach ($this->organo_model->getPerfil() as $data) {
            if(($data->nombre)==$org){
                $id = $data->id;
            }
        }

        if($this->session->userdata('usuario')){ 
    		if($this->input->post())
            {
                $org = $this->input->post('organofull',true);
                foreach ($this->organo_model->getPerfil() as $data) {
                    if(($data->nombre)==$org){
                        $id = $data->id;
                    }
                }
    
                $fecha=date("Y/m/d");
                $hora=date("H:i:s");



                $c1 = $this->input->post('c1',true);
                $c2 = $this->input->post('c2',true);
                $c3 = $this->input->post('c3',true);
                $c4 = $this->input->post('c4',true);


                $fuerza=array
     			(
                    'fk_organo'=>$id,
                    'kia'=>$this->input->post('kia',true),
                    'wia'=>$this->input->post('wia',true),
                    'mia'=>$this->input->post('mia',true),
                    'ewp'=>$this->input->post('ewp',true),
                    'diesel'=>$this->input->post('diesel',true),
                    'lvdiesel'=>$this->input->post('lvdiesel',true),
                    'gasolina'=>$this->input->post('gasolina',true),
                    'lvgasolina'=>$this->input->post('lvgasolina',true),
                    'aereo'=>$this->input->post('aereo',true),
                    'lvaereo'=>$this->input->post('lvaereo',true),
                    'fuerzaom'=>$this->input->post('fuerzaom',true),
                    'reserva'=>$this->input->post('reserva',true),
                    'completacion'=>$this->input->post('completacion',true),
                    'observaciones'=>$this->input->post('observaciones',true),
                    'q1'=>str_replace("../", base_url(), $c1),
                    'q2'=>str_replace("../", base_url(), $c2),
                    'q3'=>str_replace("../", base_url(), $c3),
                    'q4'=>str_replace("../", base_url(), $c4),
                    'fecha'=>$fecha,
                    'hora'=>$hora,
                );


                for ($i=1; $i <= 8; $i++) { 
                    $nombre = strtoupper($this->input->post('armnom'.$i,true));
                    $numero = $this->input->post('total'.$i,true);
                    $numero2 = $this->input->post('cant'.$i,true);
                    if( !(empty($nombre))){
                        $armamento = array
                        (
                            'nombre'=>$nombre,
                            'numero'=>$numero,
                            'numero2'=>$numero2,
                            'fecha'=>$fecha,
                            'hora'=>$hora,
                            'fk_organo'=>$id
                        );
                        $this->organo_model->InsertArmamento($armamento);
                    }
                }

     		
                $grillaA=array($this->input->post('grillaA0',true),$this->input->post('grillaA1',true),$this->input->post('grillaA2',true), $this->input->post('grillaA3',true),$this->input->post('grillaA4',true),$this->input->post('grillaA5',true),$this->input->post('grillaA6',true),  $this->input->post('grillaA7',true),$this->input->post('grillaA8',true),  $this->input->post('grillaA9',true),$this->input->post('grillaA10',true), $this->input->post('grillaA11',true),$this->input->post('grillaA12',true),$fecha,$hora);

                $grillaB=array($this->input->post('grillaB0',true),$this->input->post('grillaB1',true),$this->input->post('grillaB2',true), $this->input->post('grillaB3',true),$this->input->post('grillaB4',true),$this->input->post('grillaB5',true),$this->input->post('grillaB6',true),  $this->input->post('grillaB7',true),$this->input->post('grillaB8',true),  $this->input->post('grillaB9',true),$this->input->post('grillaB10',true), $this->input->post('grillaB11',true),$this->input->post('grillaB12',true),$fecha,$hora);

                $grillaC=array($this->input->post('grillaC0',true),$this->input->post('grillaC1',true),$this->input->post('grillaC2',true), $this->input->post('grillaC3',true),$this->input->post('grillaC4',true),$this->input->post('grillaC5',true),$this->input->post('grillaC6',true),  $this->input->post('grillaC7',true),$this->input->post('grillaC8',true),  $this->input->post('grillaC9',true),$this->input->post('grillaC10',true), $this->input->post('grillaC11',true),$this->input->post('grillaC12',true),$fecha,$hora);

                $this->organo_model->InsertOrgano($fuerza);
                $this->organo_model->InsertGrilla($id, $grillaA, 1, $fecha, $hora);
                $this->organo_model->InsertGrilla($id, $grillaB, 2, $fecha, $hora);
                $this->organo_model->InsertGrilla($id, $grillaC, 3, $fecha, $hora);
                //$this->organo_model->InsertGrilla($id, $grillaD, 4, $fecha, $hora);

                $this->session->set_flashdata('css','success');
                $this->session->set_flashdata('mensaje','Datos actualizados exitosamente');
                redirect(base_url()."organo/?org=".$org);
            }

            $armamento=$this->organo_model->getArmamento($id);
            //echo $armamento[0]->nombre;
            //print_r($armamento); 

    		$datos=$this->organo_model->getOrgano($id);
    		$grillaA=$this->organo_model->getGrilla($id,1);
    		$grillaB=$this->organo_model->getGrilla($id,2);
    		$grillaC=$this->organo_model->getGrilla($id,3);
    		//$grillaD=$this->organo_model->getGrilla($id,4);
    		$config=$this->usuario_model->getConfig();	
    	   
            //print_r($armamento);exit;
            $this->layout->view("index",compact('datos','grillaA','grillaB','grillaC','grillaD','config','org','armamento'));

        }else{ redirect(base_url()."home/error"); }
	}


}
