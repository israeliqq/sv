<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Repo extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->layout->setLayout('organolayout');
		date_default_timezone_set("Chile/Continental");
	}


	public function index(){
		if($this->session->userdata('organo')){ 
			$org = strtoupper($this->input->get('org'));
			$organo = $this->organo_model->getPerfil();	
			$id = null;

			foreach ($organo as $data) {
				if(($data->nombre)==$org){
					$id = $data->id;
				}
			}
			

			$mpdf = new mPDF('utf-8', 'Legal');
			$info=$this->organo_model->getOrgano($id);
			$grillaA=$this->organo_model->getGrilla($id,1);
			$grillaB=$this->organo_model->getGrilla($id,2);
			$grillaC=$this->organo_model->getGrilla($id,3);
			$config=$this->usuario_model->getConfig();	
			$armamento=$this->organo_model->getArmamento($id);

			$fecha = date("d-m-Y");
	        $hora = date("H:i:s");

			$html='
					<p align="right">Reporte emitido el: '.$fecha.' a las '.$hora.'</p>
					<hr>
						<table class="tab">
							<tr class="tab">
								<td width="20%" class="tab" align="center">
									<img src="'.base_url().'tools/kcfinder/upload/image/ccn2px.png" alt=""/>
								</td>
								<td width="80%" class="tab" align="center">
									<h6>
										<strong>INFORME COMANDO CONJUNTO NORTE</strong>
									</h6>
								</td>
							</tr>
						</table>
						<hr>

						<h2 align="center"><u>QUAD CHART '.$org.'</u></h2>
				   	';

			$html.='
				<table>
			        <tr>
			            <td width="50%" style="background-color: #F5F5F5"><h6><b>RESUMEN ULTIMAS 24 HORAS</b></h6>
			            	<p>'.$info->q1.'</p>
			            </td>
			            <td width="50%"><h6><b>PROXIMAS 24 HORAS</b></h6>
			            	<p>'.$info->q2.'</p>
			            </td>
			        </tr>
			        <tr>
			            <td><h6><b>NIVELES</b></h6>
			            	<p>'.$info->q3.'</p>
			        	</td>
			            <td style="background-color: #F5F5F5"><h6><b>ESTADO DE LAS FUERZAS</b></h6>
			            	<p>'.$info->q4.'</p>
			            </td>
			        </tr>
				</table>';

			$fuerzaom = $info->fuerzaom;
			$kia = ($info->kia);
			$wia = ($info->wia);
			$mia = ($info->mia);
			$ewp = ($info->ewp);


			$total = $fuerzaom - ($kia + $wia + $mia + $ewp);
			$html.='<h2 align="center"><u>FUERZAS ORGANO '.$org.'</u></h2>
				<table>
					<tr style="background-color: #F5F5F5">
					  <td align="center" ><h6>DESCRIPCION</h6></td>
					  <td align="center"><h6>CANTIDAD</h6></td>
					</tr>
					<tr>
					  <td align="center"><h6>TOTAL DE FUERZA</h6></td>
					  <td align="center">'.$fuerzaom.'</td>
					</tr>
					<tr>
					  <td align="center"><h6>KIA (Killed in Action)</h6></td>
					  <td align="center">'.$kia.'</td>
					</tr>
					<tr>
					  <td align="center"><h6>WIA (Wounded in Action)</h6></td>
					  <td align="center">'.$wia.'</td>
					</tr>
					<tr>
					  <td align="center"><h6>MIA (Missing in Action)</h6></td>
					  <td align="center">'.$mia.'</td>
					</tr>
					<tr>
					  <td align="center"><h6>EWP (Enemy War Prisoner)</h6></td>
					  <td align="center">'.$ewp.'</td>
					</tr>
					<tr>
					  <td align="center"><h6>FUERZAS RESTANTES</h6></td>
					  <td align="center">'.$total.'</td>
					</tr>
					<tr>
					  <td align="center"><h6>REFUERZO</h6></td>
					  <td align="center">'.$info->reserva.'</td>
					</tr>
					<tr>
					  <td align="center"><h6>NUCLEO DE COMPLETACION</h6></td>
					  <td align="center">'.$info->completacion.'</td>
					</tr>				
				</table>';


					$diesel = ($info->lvdiesel*100)/($info->diesel); 
					$gasolina = ($info->lvgasolina*100)/($info->gasolina); 
					$aereo = ($info->lvaereo*100)/($info->aereo); 


			$html.='<h2 align="center"><u>DATOS EXTRAS '.$org.'</u></h2>
				<table>
					<tr style="background-color: #F5F5F5">
					  <td align="center"><h6>COMBUSTIBLE</h6></td>
					  <td align="center"><h6>PORCENTAJE</h6></td>
					</tr>
					<tr>
					  <td align="center"><h6>Gasolina</h6></td>
					  <td align="center"><p>'.$gasolina.'%</p></td>
					</tr>
					<tr>
					  <td align="center"><h6>Diesel</h6></td>
					  <td align="center"><p>'.$diesel.'%</p></td>
					</tr>
					<tr>
					  <td align="center"><h6>JP1</h6></td>
					  <td align="center"><p>'.$aereo.'%</p></td>
					</tr>
					<tr style="background-color: #F5F5F5">
					  <td align="center"><h6>ARMAMENTO</h6></td>
					  <td align="center"><h6>PORCENTAJE</h6></td>
					</tr>';

					foreach($armamento as $dato){ 
						$html.='<tr>
								  <td align="center"><h6>'.$dato->nombre.'</h6></td>
								  <td align="center"><p>'.($dato->numero2*100)/($dato->numero).'%</p></td>
								</tr>';
					}

				

			$html.='</table><h2 align="center"><u>OBSERVACIONES '.$org.'</u></h2>
					<table><tr><td><p style="font-size: x-small">'.$info->observaciones.'</p></td></tr></table>';


			$html2='
					<p align="right">Reporte emitido el: '.$fecha.' a las '.$hora.'</p>
					<hr>
						<table class="tab">
							<tr class="tab">
								<td width="20%" class="tab" align="center">
									<img src="'.base_url().'tools/kcfinder/upload/image/ccn2px.png" alt=""/>
								</td>
								<td width="80%" class="tab" align="center">
									<h6>
										<strong>INFORME COMANDO CONJUNTO NORTE</strong>
									</h6>
								</td>
							</tr>
						</table>
						<hr>
				   	';


			$html3.='<h2 align="center"><u>SITUACION GENERAL '.$org.'</u></h2>';


			$html3.='
	<table>
		<thead>
			<tr style="background-color: #F5F5F5">
				<th>ORGANO</th>';
				for ($i=0; $i < 13; $i++) {
					$html3.='<th>'.date('H:s', strtotime($config->inicio_om."+ ".$i." hours")).'</th>';
				}

			$html3.='</tr>
		</thead>
		<tbody>
			<tr>
				<th>SITUACION ACTUAL</th>';
				foreach($grillaA as $dato){ $html3.='<th>'.$dato->porcentaje.'%</th>'; }				
			$html3.='</tr>
			<tr>
				<th>DEGRADACION GENERAL</th>';
				foreach($grillaB as $dato){ $html3.='<th>'.$dato->porcentaje.'%</th>'; }					
			$html3.='</tr>
			<tr>
				<th>SITUACION ACTUAL ADV.</th>';
				foreach($grillaC as $dato){ $html3.='<th>'.$dato->porcentaje.'%</th>'; }				
						
			$h=$config->hora_h;
				          				
			$html3.='</tr><tr style="background-color: #F5F5F5"><th></th>';
				for ($i=0; $i < 13; $i++) { $html3.='<th>H+'.$h.'</th>'; $h++; }

			$html3.='
			</tr>
		</tbody>
	</table>';
			


			//echo $html;exit; //Prueba de HTML
			$hojacss = file_get_contents(base_url()."tools/bootstrap3/pdf.css");


			$mpdf->WriteHTML($hojacss, 1);

			//echo $html; exit;
			$mpdf->WriteHTML($html, 2);
			//$mpdf->AddPage();
			//$mpdf->WriteHTML($html2, 2);
			$mpdf->WriteHTML($html3, 2);
			$mpdf->Output("Informe ".$org.".pdf","D");

		}else{
                        redirect(base_url()."home/error");
                }
	}






















	public function historico(){

		if($this->session->userdata('organo')){ 
			$fecha = $this->input->get('fecha');
			$hora = $this->input->get('hora');


			$org = strtoupper($this->input->get('org'));
			$organo = $this->organo_model->getPerfil();	
			$id = null;

			foreach ($organo as $data) {
				if(($data->nombre)==$org){
					$id = $data->id;
				}
			}
			

			

			$mpdf = new mPDF('utf-8', 'Legal');
			$info=$this->organo_model->getOrganoHistorico($id,$fecha,$hora);
			$grillaA=$this->organo_model->getGrillaHistorica($id,1,$fecha,$hora);
			$grillaB=$this->organo_model->getGrillaHistorica($id,2,$fecha,$hora);
			$grillaC=$this->organo_model->getGrillaHistorica($id,3,$fecha,$hora);
			$config=$this->usuario_model->getConfig();
			$armamento=$this->organo_model->getArmamento($id);	

			$html='
					<p align="right">Reporte Historico del: '.$fecha.' a las '.$hora.'</p>
					<hr>
						<table class="tab">
							<tr class="tab">
								<td width="20%" class="tab" align="center">
									<img src="'.base_url().'tools/kcfinder/upload/image/ccn2px.png" alt=""/>
								</td>
								<td width="80%" class="tab" align="center">
									<h6>
										<strong>INFORME COMANDO CONJUNTO NORTE</strong>
									</h6>
								</td>
							</tr>
						</table>
						<hr>

						<h2 align="center"><u>QUAD CHART '.$org.'</u></h2>
				   	';
				   	
			$html.='
				<table>
			        <tr>
			            <td width="50%" style="background-color: #F5F5F5"><h6><b>RESUMEN ULTIMAS 24 HORAS</b></h6>
			            	<p>'.$info->q1.'</p>
			            </td>
			            <td width="50%"><h6><b>PROXIMAS 24 HORAS</b></h6>
			            	<p>'.$info->q2.'</p>
			            </td>
			        </tr>
			        <tr>
			            <td><h6><b>NIVELES</b></h6>
			            	<p>'.$info->q3.'</p>
			        	</td>
			            <td style="background-color: #F5F5F5"><h6><b>ESTADO DE LAS FUERZAS</b></h6>
			            	<p>'.$info->q4.'</p>
			            </td>
			        </tr>
				</table>';

			$fuerzaom = $info->fuerzaom;
			$kia = ($info->kia);
			$wia = ($info->wia);
			$mia = ($info->mia);
			$ewp = ($info->ewp);


			$total = $fuerzaom - ($kia + $wia + $mia + $ewp);
			$html.='<h2 align="center"><u>FUERZAS ORGANO '.$org.'</u></h2>
				<table>
					<tr style="background-color: #F5F5F5">
					  <td align="center" ><h6>DESCRIPCION</h6></td>
					  <td align="center"><h6>CANTIDAD</h6></td>
					</tr>
					<tr>
					  <td align="center"><h6>TOTAL DE FUERZA</h6></td>
					  <td align="center">'.$fuerzaom.'</td>
					</tr>
					<tr>
					  <td align="center"><h6>KIA (Killed in Action)</h6></td>
					  <td align="center">'.$kia.'</td>
					</tr>
					<tr>
					  <td align="center"><h6>WIA (Wounded in Action)</h6></td>
					  <td align="center">'.$wia.'</td>
					</tr>
					<tr>
					  <td align="center"><h6>MIA (Missing in Action)</h6></td>
					  <td align="center">'.$mia.'</td>
					</tr>
					<tr>
					  <td align="center"><h6>EWP (Enemy War Prisoner)</h6></td>
					  <td align="center">'.$ewp.'</td>
					</tr>
					<tr>
					  <td align="center"><h6>FUERZAS RESTANTES</h6></td>
					  <td align="center">'.$total.'</td>
					</tr>
					<tr>
					  <td align="center"><h6>REFUERZO</h6></td>
					  <td align="center">'.$info->reserva.'</td>
					</tr>
					<tr>
					  <td align="center"><h6>NUCLEO DE COMPLETACION</h6></td>
					  <td align="center">'.$info->completacion.'</td>
					</tr>					
				</table>';

					$diesel = ($info->lvdiesel*100)/($info->diesel); 
					$gasolina = ($info->lvgasolina*100)/($info->gasolina); 
					$aereo = ($info->lvaereo*100)/($info->aereo); 


			$html.='<h2 align="center"><u>DATOS EXTRAS '.$org.'</u></h2>
				<table>
					<tr style="background-color: #F5F5F5">
					  <td align="center"><h6>COMBUSTIBLE</h6></td>
					  <td align="center"><h6>PORCENTAJE</h6></td>
					</tr>
					<tr>
					  <td align="center"><h6>Gasolina</h6></td>
					  <td align="center"><p>'.$gasolina.'%</p></td>
					</tr>
					<tr>
					  <td align="center"><h6>Diesel</h6></td>
					  <td align="center"><p>'.$diesel.'%</p></td>
					</tr>
					<tr>
					  <td align="center"><h6>JP1</h6></td>
					  <td align="center"><p>'.$aereo.'%</p></td>
					</tr>
					<tr style="background-color: #F5F5F5">
					  <td align="center"><h6>ARMAMENTO</h6></td>
					  <td align="center"><h6>PORCENTAJE</h6></td>
					</tr>';


					foreach($armamento as $dato){ 
		
						$html.='<tr>
								  <td align="center"><h6>'.$dato->nombre.'</h6></td>
								  <td align="center"><p>'.($dato->numero2*100)/($dato->numero).'%</p></td>
								</tr>';
					}

				

			$html.='</table><h2 align="center"><u>OBSERVACIONES '.$org.'</u></h2>
					<table><tr><td><p style="font-size: x-small">'.$info->observaciones.'</p></td></tr></table>';


			$html2='
					<p align="right">Reporte emitido el: '.$fecha.' a las '.$hora.'</p>
					<hr>
						<table class="tab">
							<tr class="tab">
								<td width="20%" class="tab" align="center">
									<img src="'.base_url().'tools/kcfinder/upload/image/ccn2px.png" alt=""/>
								</td>
								<td width="80%" class="tab" align="center">
									<h6>
										<strong>INFORME COMANDO CONJUNTO NORTE</strong>
									</h6>
								</td>
							</tr>
						</table>
						<hr>
				   	';


			$html3.='<h2 align="center"><u>SITUACION GENERAL '.$org.'</u></h2>';


			$html3.='
	<table>
		<thead>
			<tr style="background-color: #F5F5F5">
				<th>ORGANO</th>';
				for ($i=0; $i < 13; $i++) {
					$html3.='<th>'.date('H:s', strtotime($config->inicio_om."+ ".$i." hours")).'</th>';
				}

			$html3.='</tr>
		</thead>
		<tbody>
			<tr>
				<th>SITUACION ACTUAL</th>';
				foreach($grillaA as $dato){ $html3.='<th>'.$dato->porcentaje.'%</th>'; }				
			$html3.='</tr>
			<tr>
				<th>DEGRADACION GENERAL</th>';
				foreach($grillaB as $dato){ $html3.='<th>'.$dato->porcentaje.'%</th>'; }					
			$html3.='</tr>
			<tr>
				<th>SITUACION ACTUAL ADV.</th>';
				foreach($grillaC as $dato){ $html3.='<th>'.$dato->porcentaje.'%</th>'; }				
						
			$h=$config->hora_h;
				          				
			$html3.='</tr><tr style="background-color: #F5F5F5"><th></th>';
				for ($i=0; $i < 13; $i++) { $html3.='<th>H+'.$h.'</th>'; $h++; }

			$html3.='
			</tr>
		</tbody>
	</table>';
			


			//echo $html;exit; //Prueba de HTML
			$hojacss = file_get_contents(base_url()."tools/bootstrap3/pdf.css");
			$mpdf->WriteHTML($hojacss, 1);
			$mpdf->WriteHTML($html, 2);
			//$mpdf->AddPage();
			//$mpdf->WriteHTML($html2, 2); //TITULO SEGUNDA PAGINA
			$mpdf->WriteHTML($html3, 2);
			$mpdf->Output("Informe ".$org.".pdf","D");
		
		}else{
                        redirect(base_url()."home/error");
                }
	
	}








}
