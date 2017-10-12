
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->layout->setLayout('organolayout');
		date_default_timezone_set("Chile/Continental");
	}


	public function usuarios()
	{
		if($this->session->userdata('organo')=="ADMIN"){ 
			if($this->input->post())
        	{
		        for ($i=1; $i <= 10; $i++) 
				{ 
		        	$id = $this->input->post(('id'.$i),true);
		            $usuario = $this->input->post(('usuario'.$i),true);
		            $pass = $this->input->post(('pass'.$i),true);
		            $rol = $this->input->post(('rol'.$i),true);
		            $this->usuario_model->UpdateUsuario($id, $usuario,$pass,$rol);
		        }
				$horah = $this->input->post(('horah'),true);
				$grillah = $this->input->post(('grillah'),true);
				$this->usuario_model->UpdateConfig($horah,$grillah);

				$this->session->set_flashdata('css','success');
	        	$this->session->set_flashdata('mensaje','Datos actualizados exitosamiente');
	    	}

		$usuarios=$this->usuario_model->getUsuarios();
		$config=$this->usuario_model->getConfig();
		$rol=$this->usuario_model->getOrgano();

		$this->layout->view("usuarios",compact('usuarios','config','rol'));

		}else{
			redirect(base_url()."home/error");
		}
	}


	public function inputritmo()
	{
		if($this->session->userdata('organo')=="RITMO"){ 
			$id = $this->input->get(('id'),true);

			$ritmo = "";
			$fecha = date("Y-m-d");
			$hora = date("H:i");
			$estado = null;


			if(!($id == null || $id == "")){
				$actualizar = $this->ritmo_model->getRitmoID($id);
				$ritmo = $actualizar->data;
				$fecha = $actualizar->fecha;
				$hora = $actualizar->hora;
				$estado = $actualizar->estado;
			}

			if($this->input->post())
        	{	
        		$id = $this->input->post(('id'),true);
        		$estado = $this->input->post(('estado'),true);
        		$fecha = $this->input->post(('fecha'),true);
        		$hora = $this->input->post(('hora'),true);
        		$ritmo = $this->input->post(('ritmo'),true);

        		if(!($id == null || $id == "")){
        			$this->ritmo_model->UpdateRitmo($ritmo, $fecha, $hora, $estado, $id);

        			$this->session->set_flashdata('css','success');
	        		$this->session->set_flashdata('mensaje','Datos actualizados exitosamente');
        		}else{
        			$this->ritmo_model->InsertRitmo($ritmo,$fecha,$hora,$estado);
        			$ritmo = "";
        			$this->session->set_flashdata('css','success');
	        		$this->session->set_flashdata('mensaje','La alerta se agrego exitosamente');
        		}

        	}



			$this->layout->setLayout('ritmolayout');
        	$this->layout->view("ingresar",compact('id','ritmo','fecha','hora','estado'));
		}else{ redirect(base_url()."home/error");}
	}


	public function ritmo()
	{
		//$fecha = (new \DateTime())->format('Y-m-d');
		if($this->session->userdata('organo')){ 
			$fecha = "";
			if($this->input->post())
	        {
				$fecha = $this->input->post(('fecha'),true);
			}

			$batalla=$this->ritmo_model->getRitmo($fecha);

			if($this->session->userdata('organo')=="RITMO"){ 
	        $this->layout->setLayout('ritmolayout');     
	        }else{$this->layout->setLayout('organolayout');}  
	                 
			$this->layout->view("ritmo",compact('batalla','fecha'));
		}else{	redirect(base_url()."home/error");	}
	}

	public function delritmo()
	{
		if($this->session->userdata('organo')){ 
			$id = $this->input->get('id');
			$this->ritmo_model->DeleteRitmo($id);
	       	$this->session->set_flashdata('css','success');
	       	$this->session->set_flashdata('mensaje','EL ARCHIVO FUE ELIMINADO EXITOSAMENTE!');    
			redirect(base_url()."admin/ritmo");
		}else{	redirect(base_url()."home/error");	}
	}


	public function alerta()
	{
		$fecha = (new \DateTime())->format('Y-m-d');
		$hora = (new \DateTime())->format('H:i');

			//Enviar alerta 10 minutos antes
			$hora = strtotime('+10 minute', strtotime($hora));
			//Formatear Hora
			$hora = date('H:i', $hora);


		$alerta=$this->ritmo_model->getRitmoAlerta($fecha,$hora);
		//print_r($alerta); exit;
		$dato = null;

		if(!empty($alerta)){ 
			$dato = $alerta->data; 
			$fecha = $alerta->fecha;
			$hora = $alerta->hora;

			$date = date_create($fecha);
			$fecha = date_format($date, 'd-m-Y');

			$time = date_create($hora);
			$hora = date_format($time, 'H:i');
		}else{  
			$dato = "nada"; 
			$fecha = "nada";
			$hora = "nada"; 
		}


		if($alerta->estado=="alto"){ $color = "red"; } 
		if($alerta->estado=="medio"){ $color = "yellow"; } 
		if($alerta->estado=="bajo"){ $color = "green"; } 

		$json = array('mensaje' => $dato, 'color' => $color, 'fecha' => $fecha, 'hora' => $hora);
		echo json_encode($json);
	}



	public function frecuencias()
	{

			if($this->session->userdata('organo')=="RITMO"){ 
		        $this->layout->setLayout('ritmolayout');     
		    }elseif($this->session->userdata('organo')){$this->layout->setLayout('organolayout'); } 
		    else{redirect(base_url()."home/error"); }

			$frecuencias=$this->ritmo_model->getFrecuencias();
			$enlaces=$this->ritmo_model->getEnlaces();
			$this->layout->view("frecuencias",compact('frecuencias', 'enlaces'));


	}


	public function update()
	{

		if($this->session->userdata('organo')){
			if($this->input->post())
	        {
	        	$frecuencias = array(
	        		'VHFAM' => $this->input->post(('VHFAM'),true),
					'UHFAM' => $this->input->post(('UHFAM'),true),
					'HF' => $this->input->post(('HF'),true),
					'VHF' => $this->input->post(('VHF'),true),
					'UHF' => $this->input->post(('UHF'),true)
	        	);
	        	$this->ritmo_model->UpdateFrecuencias($frecuencias);


	        	for ($i=1; $i <=15 ; $i++) { 
	        		$enlaces = array(
		        		'enlaces' => $this->input->post(('enlaces'.$i),true),
						'tipo' => $this->input->post(('tipo'.$i),true),
						'unidades' => $this->input->post(('unidades'.$i),true),
						'ftm' => $this->input->post(('ftm'.$i),true),
						'uhf' => $this->input->post(('uhfame'.$i),true),
						'vhf' => $this->input->post(('vhfame'.$i),true)
	        		);
	        		$this->ritmo_model->UpdateEnlaces($enlaces, $i);
	        	}

	        	$this->session->set_flashdata('css','success');
		       	$this->session->set_flashdata('mensaje','Los Datos se Actualizarón Exitosamente!'); 

			}
		}else{redirect(base_url()."home/error"); }


		$this->layout->setLayout('ritmolayout'); 
		$frecuencias=$this->ritmo_model->getFrecuencias();
		$enlaces=$this->ritmo_model->getEnlaces();

		//echo $enlaces[1-1]->enlaces; exit;
		$this->layout->view("updatefrecuencias",compact('frecuencias', 'enlaces'));


		
	}


}
