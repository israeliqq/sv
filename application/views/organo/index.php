
<script type="text/javascript">

        function calcular()
        {

        	var total = parseInt(document.getElementById('total').value);
        	var kia = parseInt(document.getElementById('kia').value);
        	var wia = parseInt(document.getElementById('wia').value);
        	var mia = parseInt(document.getElementById('mia').value);
        	var ewp = parseInt(document.getElementById('ewp').value);

        	var nucleo = parseInt(document.getElementById('nucleo').value);
        	var refuerzos = parseInt(document.getElementById('refuerzos').value);

        	var restante = (total + nucleo + refuerzos) - (kia + wia + mia + ewp);
            document.getElementById('restantes').value = restante;

            document.getElementById('total').value = total + nucleo + refuerzos;

            if(restante < 0) { ohSnap('<b><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> Error de Calculo: No puede haber un personal operativo menor a 0.</b>', {color: 'red'}, {'duration':'10000'}); }
        }

        function limpiar()
        {
        	document.getElementById('total').value = "";
        	document.getElementById('kia').value = "";
        	document.getElementById('wia').value = "";
        	document.getElementById('mia').value = "";
        	document.getElementById('ewp').value = "";
        	document.getElementById('nucleo').value = "";
        	document.getElementById('refuerzos').value = "";
        	document.getElementById('restantes').value = "";
        	document.getElementById('total').value = "";
        }


        function petroleo()
        {
        	var total = parseInt(document.getElementById('diesel').value);
        	var cantidad = parseInt(document.getElementById('lvdiesel').value);
        	var pj = ((total - cantidad) * 100) / (total);
            document.getElementById('pjdiesel').value = pj;
        }

        function bencina()
        {
        	var total = parseInt(document.getElementById('gasolina').value);
        	var cantidad = parseInt(document.getElementById('lvgasolina').value);
        	var pj = ((total - cantidad) * 100) / (total);
            document.getElementById('pjgasolina').value = pj;
        }        

        function avion()
        {
        	var total = parseInt(document.getElementById('aereo').value);
        	var cantidad = parseInt(document.getElementById('lvaereo').value);
        	var pj = ((total - cantidad) * 100) / (total);
            document.getElementById('pjaereo').value = pj;
        }


		<?php for ($i=1; $i <=8 ; $i++) { ?>


        function arma<?php echo $i;?>()
        {
        	var total = parseInt(document.getElementById('total<?php echo $i;?>').value);
        	var cantidad = parseInt(document.getElementById('cant<?php echo $i;?>').value);
        	var pj = ((total - cantidad) * 100) / (total);
            document.getElementById('pj<?php echo $i;?>').value = pj;
        }

			
		<?php } ?>



</script>

<?php echo form_open(null, array('name'=>'form'));?>


<input type="hidden" name="organofull" value="<?php echo strtoupper($this->input->get("org"));?>">


<div class="row">
	<div class="col-md-12">
		<span>
	    <h1 class="page-header" style="color:white;">
		    <img height="80" src="<?php echo base_url();?>tools/img/logo/<?php echo ($org);?>.png"> 
		    <b>EDITAR <?php echo ($org);?></b>
		</h1>
	    </span>
	</div>
</div>


<!-- MENSAJES ALERTAS -->
<?php if($this->session->flashdata('mensaje')!=''){ ?>
		<div class="alert lert-dismissable alert-<?php echo $this->session->flashdata('css')?> a" id="myAlert">
			<strong>INFORMACION ACTUALIZADA</strong><?php echo $this->session->flashdata('mensaje')?>
		    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>   
		</div>
<?php } ?>
<!-- MENSAJES ALERTAS -->


<div class="row">
	<div class="col-lg-12">
		<button type="submit" class="btn btn-lg btn-block" value="Entrar"><b><span class="fa fa-floppy-o"></span> Guardar</b></button>
	<hr>
	</div>
</div>

<div class="row">
	<div class="col-lg-12">
		<div class="panel-group" id="panel-742391">
			<div class="panel panel-default">
				<div class="panel-heading">
					 <a class="panel-title" data-toggle="collapse" data-parent="#panel-742391" href="#quad"><b><i class="fa fa-cube" aria-hidden="true"></i> QUAD CHART - BRIEF</b></a>
					 
				</div>
				<div id="quad" class="panel-collapse collapse">
					<div class="panel-body">
						<div class="col-lg-12">
								<!-- Nav tabs -->
								<ul class="nav nav-tabs">
									<li class="active"><a href="#cuadro1" data-toggle="tab"><b>ULTIMAS 12/24H</b></a></li>
									<li><a href="#cuadro2" data-toggle="tab"><b>PROXIMAS 12/24H</b></a></li>
									<li><a href="#cuadro3" data-toggle="tab"><b>NIVELES</b></a></li>
									<li><a href="#cuadro4" data-toggle="tab"><b>ESTADO FUERZAS</b></a></li>
								</ul>

								<!-- Tab panes -->
								<div class="tab-content">
									<div class="tab-pane fade in active" id="cuadro1"><br>
										<div class="form-group">
										<textarea name="c1" id="edit1" class="form-control"><?php echo ($datos->q1);?></textarea>
										</div>
									</div>

									<div class="tab-pane fade" id="cuadro2"><br>
										<div class="form-group">
										<textarea name="c2" id="edit2" class="form-control"><?php echo ($datos->q2);?></textarea>
										</div>
									</div>

									<div class="tab-pane fade" id="cuadro3"><br>
										<div class="form-group">
										<textarea name="c3" id="edit3" class="form-control"><?php echo ($datos->q3);?></textarea>
										</div>
									</div>

									<div class="tab-pane fade" id="cuadro4"><br>
										<div class="form-group">
										<textarea name="c4" id="edit4" class="form-control"><?php echo ($datos->q4);?></textarea>
										</div>
									</div>
								</div>
						</div>
					</div>
					<!-- /.panel body -->
				</div>
				<!-- /.id -->
			</div>
			<!-- /.panel default -->
		</div>
	</div>
	<!-- /.col 12 -->
</div>
<!-- /.row -->

<?php 
	$fuerzaom = $datos->fuerzaom;
	$kia = ($datos->kia);
	$wia = ($datos->wia);
	$mia = ($datos->mia);
	$ewp = ($datos->ewp);

	$total = $fuerzaom - ($kia + $wia + $mia + $ewp);
?>

<div class="row">
	<div class="col-lg-4">
		<div class="panel-group" id="panel-742392">
			<div class="panel panel-default">
				<div class="panel-heading">
					 <a class="panel-title" data-toggle="collapse" data-parent="#panel-742392" href="#FUERZA"><b><i class="fa fa-tachometer" aria-hidden="true"></i> SITUACION PERSONAL</b></a>
					 
				</div>
				<div id="FUERZA" class="panel-collapse collapse">
					<div class="panel-body">
						<table class="table table-hover table-condensed">
		                    <thead>
		                        <tr class="active">
		                            <th><i class="fa fa-share-alt" aria-hidden="true"></i> FUERZA ORGANO:
		                            	<div class="col-xs-7 pull-right"> 
		                            	<input name="fuerzaom" id="total"class="form-control input-sm" id="inputsm" type="number" value="<?php echo ($datos->fuerzaom); ?>" min="0" size="12" style="height:22px">
		                            	</div>
		                            </th>
		                            <th class="col-xs-2">CANTIDAD</th>
		                            
		                        </tr>
		                    </thead>
		                    <tbody>

		                        <tr>
		                            <td><b><i class="fa fa-user-times" aria-hidden="true"></i> KIA</b> <small>(Killed in Action)</small></td>
		                            <td><input name="kia" id="kia"  class="form-control input-sm" type="number" value="<?php echo ($datos->kia);?>" min="0" size="12">
		                            </td>
		                            
		                        </tr>
		                        <tr>
		                            <td><b><i class="fa fa-user-times" aria-hidden="true"></i> WIA</b>  <small>(Wounded in Action)</small></td>
		                            <td><input name="wia" id="wia"  class="form-control input-sm" type="number" value="<?php echo ($datos->wia);?>" min="0" size="12">
		                            </td>
		                            
		                        </tr>
		                        <tr>
		                            <td><b><i class="fa fa-user-times" aria-hidden="true"></i> MIA</b>  <small>(Missing in Action)</small></td>
		                            <td><input name="mia" id="mia" class="form-control input-sm" type="number" value="<?php echo ($datos->mia);?>" min="0" size="12">
		                            </td>
		                            
		                        </tr>
		                        <tr>
		                            <td><b><i class="fa fa-user-times" aria-hidden="true"></i>  EWP</b>  <small>(Enemy War Prisoner)</small></td>
		                            <td><input name="ewp" id="ewp"  class="form-control input-sm" type="number" value="<?php echo ($datos->ewp);?>" min="0" size="12">
		                            </td>
		                            
		                        </tr>
		                        <tr class="info">
		                            <th><i class="fa fa-users" aria-hidden="true"></i> CIDDS (Combat ID Dismounted Soldier)</th>
		                            <th><input name="tt" id="restantes" class="form-control input-sm" type="text" value="<?php echo $total;?>" readonly> </th>
		                           
		                        </tr>


		                        <tr class="active">
		                            <td ><b><i class="fa fa-user-plus" aria-hidden="true"></i> NUCLEO DE COMPLETACION</b></td>
		                            <td><input name="completacion" id="nucleo"  class="form-control input-sm" type="number" value="<?php echo ($datos->completacion);?>" min="0" size="12">
		                            </td>
		                        </tr>

		                        <tr class="active">
		                            <td ><b><i class="fa fa-user-plus" aria-hidden="true"></i> REFUERZOS</b></td>
		                            <td><input name="reserva" id="refuerzos" class="form-control input-sm" type="number" value="<?php echo ($datos->reserva);?>" min="0" size="10">
		                            </td>
		                        </tr>

		                    </tbody>
		                </table>
		                <div align="center">
		                	<input value="Calcular" type="button" class="btn btn-xs" onclick="calcular()">
		                	<input value="Limpiar" type="button" class="btn btn-xs" onclick="limpiar()">
						</div>
						<hr>

		                <legend style="font-size: 15px;"><b><i class="fa fa-pencil" aria-hidden="true"></i> OBSERVACIONES</b></legend>
						<div class="form-group">
							<textarea name="observaciones"  style="overflow:auto;resize:none"  class="form-control" rows="8"><?php echo ($datos->observaciones);?></textarea>
						</div>  

					</div>
					<!-- /.panel body -->
				</div>
				<!-- /.id -->
			</div>
			<!-- /.panel default -->
		</div>
	</div>
	<!-- /.col 4 -->

	<div class="col-lg-8">
		<div class="panel-group" id="panel-742394">
			<div class="panel panel-default">
				<div class="panel-heading">
					 <a class="panel-title" data-toggle="collapse" data-parent="#panel-742394" href="#EXTRAS"><b><i class="fa fa-calculator" aria-hidden="true"></i> SITUACION LOGISTICA</b></a>
					 
				</div>
				<div id="EXTRAS" class="panel-collapse collapse">
					<div class="panel-body">

						<table class="table   table-hover table-condensed">
		                    <thead >
		                        <tr class="active">
		                            <th class="col-lg-6">ARMAMENTO - MUNICION</th>
		                            <th class="col-lg-2">C. TOTAL</th>
		                            <th class="col-lg-2">C. OPER</th>
		                            <th class="col-lg-2">% OPER</th>
		                        </tr>
		                    </thead>
		                    <tbody>
		                    	
		                    	<?php for ($i=0; $i <= 7; $i++) { ?>
								<!-- ARMAMENTO 1-->
		                        <tr>
		                            <td>
		                            	<div class="input-group">
		                            		<span class="input-group-addon">
		                            			<i class="fa fa-shield" aria-hidden="true"></i>
		                            		</span>
											<input name="armnom<?php echo $i+1;?>" id="nom<?php echo $i+1;?>" placeholder="Armamento <?php echo $i+1;?>" class="form-control input-sm" value="<?php echo ($armamento[$i]->nombre);?>" type="text">
										</div>
									</td>
		                            <td>
		                            	<div class="input-group">
											<input name="total<?php echo $i+1;?>" id="total<?php echo $i+1;?>" class="form-control input-sm" type="number" value="<?php echo ($armamento[$i]->numero);?>" onchange="arma<?php echo $i+1;?>();" min="0" size="10">
											<span class="input-group-addon"><i class="fa fa-keyboard-o" aria-hidden="true"></i></span>
										</div>
		                            </td>									
		                            <td>
		                            	<div class="input-group">
											<input name="cant<?php echo $i+1;?>" id="cant<?php echo $i+1;?>" class="form-control input-sm" type="number" value="<?php echo ($armamento[$i]->numero2);?>" onchange="arma<?php echo $i+1;?>();"  min="0" size="10"><span class="input-group-addon"><i class="fa fa-calculator" aria-hidden="true"></i></span>
										</div>
		                            </td>
										<?php 
											$num = $armamento[$i]->numero;
											$num2 = $armamento[$i]->numero2;
											$pjj =  ($num2 * 100) / $num;
										 ?>
		                            <td>
		                            	<div class="input-group">
											<input name="pj<?php echo $i+1;?>" id="pj<?php echo $i+1;?>" class="form-control input-sm" type="number" value="<?php echo $pjj;?>"  readonly>
											<span class="input-group-addon"><i class="fa fa-percent" aria-hidden="true"></i></span>
										</div>
		                            </td>		                            
		                        </tr>
		                        <!-- FIN ARMAMENTO 1-->
								<?php } ?>
		                    	


		                        
		                      	<thead >
			                        <tr class="active">
			                            <th class="col-lg-6">COMBUSTIBLE</th>
			                            <th class="col-lg-2">LTS.  TOTAL </th>
			                            <th class="col-lg-2">LTS. DISP.</th>
			                            <th class="col-lg-2">% DISP.</th>			                            
			                        </tr>
		                    	</thead>
		                        <tr>
		                            <td>
		                            	<div class="input-group">
		                            		<span class="input-group-addon">
		                            			<i class="fa fa-car" aria-hidden="true"></i>
		                            		</span><b>
											<input class="form-control input-sm" value="DIESEL" name="nom_gasolina" type="text" readonly></b>
										</div>
		                            </td>
		                            <td>
		                            	<div class="input-group">
											<input name="diesel" onchange="petroleo();"  class="form-control input-sm" id="diesel" type="number" value="<?php echo ($datos->diesel);?>" placeholder="" min="0" required>

											<span class="input-group-addon"><b><i class="fa fa-thermometer-half" aria-hidden="true"></i></b></span>
										</div>
		                            </td>
		                            <td>
		                            	<div class="input-group">
											<input name="lvdiesel" onchange="petroleo();" class="form-control input-sm" id="lvdiesel" type="number" value="<?php echo ($datos->lvdiesel);?>" placeholder="" min="0" required>

											<span class="input-group-addon"><b><i class="fa fa-thermometer-half" aria-hidden="true"></i></b></span>
										</div >
		                            </td>

		                            	<?php 
											$num = $datos->diesel;
											$num2 = $datos->lvdiesel;
											$pjd =  ($num2 * 100) / $num;
										 ?>
		                            <td>
		                            	<div class="input-group">
											<input name="pdiesel" id="pjdiesel" class="form-control input-sm"  value="<?php echo $pjd;?>"     type="text" value="" readonly>
											<span class="input-group-addon"><i class="fa fa-percent" aria-hidden="true"></i></span>
										</div>
		                            </td>		                            		                            
		                        </tr>
		                        <tr>
		                            <td>
		                            	<div class="input-group">
		                            		<span class="input-group-addon">
		                            			<i class="fa fa-car" aria-hidden="true"></i>
		                            		</span><b>
											<input class="form-control input-sm" value="GASOLINA" name="nom_gasolina" type="text" readonly min="0" size="12" ></b>
										</div>
		                            </td>
		                            <td>
		                            	<div class="input-group">
											<input name="gasolina" class="form-control input-sm" id="gasolina" type="number" value="<?php echo ($datos->gasolina);?>" placeholder="" min="0" size="12" onchange="bencina();" required>
											<span class="input-group-addon"><b><i class="fa fa-thermometer-half" aria-hidden="true"></i></b></span>
										</div>
		                            </td>
		                            <td>
		                            	<div class="input-group">
											<input name="lvgasolina" class="form-control input-sm" id="lvgasolina" type="number" value="<?php echo ($datos->lvgasolina);?>" placeholder="" min="0" size="12"  onchange="bencina();" required>
											<span class="input-group-addon"><b><i class="fa fa-thermometer-half" aria-hidden="true"></i></b></span>
										</div>
		                            </td>
		                            	<?php 
											$num = $datos->gasolina;
											$num2 = $datos->lvgasolina;
											$pjg =  ($num2 * 100) / $num;
										 ?>

		                            <td>
		                            	<div class="input-group">
											<input name="pjgasolina" class="form-control input-sm" id="pjgasolina" type="text" value="<?php echo $pjg;?>"  min="0" size="12"  readonly>
											<span class="input-group-addon"><i class="fa fa-percent" aria-hidden="true"></i></span>
										</div>
		                            </td>		                            		                            
		                        </tr>
		                        <tr>
		                            <td>
		                            	<div class="input-group">
		                            		<span class="input-group-addon">
		                            			<i class="fa fa-plane" aria-hidden="true">&nbsp;</i>
		                            		</span><b>
											<input class="form-control input-sm" value="AVIACION JP1" name="nom_gasolina" type="text" readonly min="0" size="12" ></b>
										</div>
		                            </td>		                        
		                            <td>
		                            	<div class="input-group">
											<input name="aereo" class="form-control input-sm" id="aereo" type="number" value="<?php echo ($datos->aereo);?>" placeholder="" min="0" size="12"  onchange="avion();"  required>
											<span class="input-group-addon"><b><i class="fa fa-thermometer-half" aria-hidden="true"></i></b></span>
										</div>
		                            </td>
		                            <td>
		                            	<div class="input-group">
											<input name="lvaereo" class="form-control input-sm" id="lvaereo" type="number" value="<?php echo ($datos->lvaereo);?>" placeholder="" min="0" size="12"  onchange="avion();" required>
											<span class="input-group-addon"><b><i class="fa fa-thermometer-half" aria-hidden="true"></i></b></span>
										</div>
		                            </td>	

		                            	<?php 
											$num = $datos->aereo;
											$num2 = $datos->lvaereo;
											$pja =  ($num2 * 100) / $num;
										 ?>                            
		                            <td>
		                            	<div class="input-group">
											<input name="pjaereo" id="pjaereo" type="text" value="<?php echo $pja;?>"  readonly class="form-control input-sm" >
											<span class="input-group-addon"><i class="fa fa-percent" aria-hidden="true"></i></span>
										</div>
		                            </td>
		                        </tr>
		                    </tbody>
		                </table>

					</div>
					<!-- /.panel body -->
				</div>
				<!-- /.id -->
			</div>
			<!-- /.panel default -->
		</div>
	</div>
	<!-- /.col 4 -->


</div>
<!-- /.row -->





<div class="row">
	<div class="col-lg-12">
		<div class="panel-group" id="panel-742398">
			<div class="panel panel-default">
				<div class="panel-heading">
					 <a class="panel-title" data-toggle="collapse" data-parent="#panel-742398" href="#GENERAL"><b><i class="fa fa-bar-chart" aria-hidden="true"></i> SITUACION GENERAL</b></a>
					 
				</div>
				<div id="GENERAL" class="panel-collapse collapse">
					<div class="panel-body">
			    <div class="table-responsive">
			        <table class="table table-hover table-condensed">
			            <thead class="active">
			                <tr class="active">
			                    <th class="col-xs-2"><i class="fa fa-users" aria-hidden="true"></i> SIT. PROPIA</th>
			                    <?php for ($i=0; $i < 13; $i++) { ?>
			                    	<th align="center">
			                    		<b><?php echo "<i class='fa fa-clock-o' aria-hidden='true'></i> ".date('H:s', strtotime($config->inicio_om."+ ".$i." hours"));?></b>
			                    	</th>
			                    <?php } ?>
			                </tr>
			            </thead>
			            <tbody>
			                <tr>
			                    <td><b>SIT. ACTUAL</b></td>
			                    <?php foreach($grillaA as $dato){ ?>
									<td><input name="<?php echo "grillaA".$dato->corretaje; ?>" class="form-control input-sm" type="number" value="<?php echo $dato->porcentaje;?>" placeholder="%" min="0" size="10" size="3" style="height:22px;"></td>
								<?php }?>

			                </tr>
			                <tr>
			                    <td><b>DEGRADACION GRAL</b></td>
			                    <?php foreach($grillaB as $dato){ ?>
									<td><input name="<?php echo "grillaB".$dato->corretaje; ?>" class="form-control input-sm" type="number" value="<?php echo $dato->porcentaje;?>" placeholder="%" min="0" size="10" size="3" style="height:22px"></td>
								<?php }?>
			                </tr>

				            <thead>
				                <tr class="active">
				                    <th class="col-xs-2"><i class="fa fa-users" aria-hidden="true"></i> SIT. ADVERSARIO</th>
				                    <?php for ($i=0; $i < 13; $i++) { ?>
				                    	<th align="center">
				                    		<b><?php echo "<i class='fa fa-clock-o' aria-hidden='true'></i> ".date('H:s', strtotime($config->inicio_om."+ ".$i." hours"));?></b>
				                    	</th>
				                    <?php } ?>
				                </tr>
				            </thead>


			                <tr>
			                    <td><b>SIT. ACTUAL</b></td>
			                    <?php foreach($grillaC as $dato){ ?>
									<td><input name="<?php echo "grillaC".$dato->corretaje; ?>" class="form-control input-sm" type="number" value="<?php echo $dato->porcentaje;?>" placeholder="%" min="0" max="100" size="3" style="height:22px"></td>
								<?php }?>
			                </tr>
			                <tr align="center">
			          			<td></td>
			          			<?php $h=$config->hora_h;
			          				for ($i=0; $i < 13; $i++) { ?>
			          				<td><b><small>H+<?php echo $h; $h++;?></small></b></td>
			          			<?php } ?>
			                </tr>
			            </tbody>
			        </table>
			    </div>
			    <!-- /.table-responsive -->
					</div>
					<!-- /.panel body -->
				</div>
				<!-- /.id -->
			</div>
			<!-- /.panel default -->
		</div>
	</div>
	<!-- /.col 12 -->
</div>
<!-- /.row -->



<div class="row">
	<div class="col-lg-12">

		<hr>
		<button type="submit" class="btn btn-lg btn-block" value="Entrar"><b><span class="fa fa-floppy-o"></span> Guardar</b></button>
		<hr>
	</div>
</div>



<?php echo form_close();?>