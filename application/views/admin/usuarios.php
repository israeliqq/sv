

<div class="row">
	<div class="col-md-12">
		<span>
	    <h1 class="page-header" style="color:white;">
		    <img class="img-circle" width="58" height="58" src="<?php echo base_url();?>tools/img/ccn2px.png"> 
		    <b>CONFIGURACION</b>
		</h1>
	    </span>
	</div>
</div>

<?php echo form_open(null, array('name'=>'form'));?>


<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-default">
		<div class="panel-heading"><b>MODIFICAR USUARIOS</b></div>		
		<!-- /.panel-heading -->
			<div class="panel-body">

<!-- MENSAJES ALERTAS -->
<?php if($this->session->flashdata('mensaje')!=''){ ?>
		<div class="alert lert-dismissable alert-<?php echo $this->session->flashdata('css')?> a" id="myAlert">
			<strong>INFORMACION ACTUALIZADA</strong> <?php echo $this->session->flashdata('mensaje')?>
		    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>   
		</div>
<?php } ?>
<!-- MENSAJES ALERTAS -->

				<div class="row">
					<div class="col-lg-6">
					    <div class="table-responsive">
					        <table class="table table-striped table-hover table-condensed">
					            <thead>
					                <tr>
					                    <th class="col-xs-1">ID</th>
					                    <th class="col-xs-4">USUARIO</th>
					                    <th class="col-xs-4">PASSWORD</th>
					                    <th class="col-xs-3">ROL</th>
					                </tr>
					            </thead>
					            <tbody><?php $i=0;?>
					            <?php foreach ($usuarios as $dato) {?>
								<tr><?php $i++;?>		                 
									<td>
										<?php echo ($dato->id);?>
										<input type="hidden" class="form-control input-sm" name="id<?php echo $i;?>" value="<?php echo ($dato->id);?>" require>
									</td>
									<td>
										<input type="text" class="form-control input-sm" name="usuario<?php echo $i;?>" value="<?php echo ($dato->usuario);?>" require>
									</td>
									<td>
										<input type="password" class="form-control input-sm" name="pass<?php echo $i;?>" value="<?php echo ($dato->pass);?>" require>
									</td>

									<td>
										<select class="form-control input-sm" name="rol<?php echo $i;?>" require>
											<?php foreach ($rol as $dt) {?>
												<?php if($dt->id == $dato->fk_organo){  ?>
													<option selected="true" value="<?php echo ($dt->id);?>"><?php echo ($dt->nombre);?></option>
												<?php }else{ ?>
													<option value="<?php echo ($dt->id);?>"><?php echo ($dt->nombre);?></option>
												<?php } ?>
											<?php } ?>
										</select>
									</td>

								</tr>
								<?php } ?>
					            </tbody>
					        </table>
					    </div>
					    <!-- /.table-responsive -->
					</div>    
					<div class="col-lg-6">
					<div class="row">
						<div class="col-lg-12">
							<label>INICIO HORA H</label>
						    <div class="form-group input-group" data-align="top" data-autoclose="true">
							    <input type="number" class="form-control" name="horah" placeholder="Hora H" value="<?php echo ($config->hora_h);?>" require>
							    <span class="input-group-addon">
							        <span class="glyphicon glyphicon-time"></span>
							    </span>
							</div>
							<label>INICIO HORA GRILLA</label>
						    <div class="form-group input-group" data-align="top" data-autoclose="true">
							    <input class="form-control" placeholder="Inicio Reloj Grilla" type="time" name="grillah" value="<?php echo ($config->inicio_om);?>" require>
						    	<span class="input-group-addon">
							        <span class="glyphicon glyphicon-dashboard"></span>
							    </span>
							</div>    

							<button type="submit" class="btn btn-primary btn-lg btn-block">
								<span class="fa fa-floppy-o"></span> <b>GUARDAR</b>
							</button>
						</div>
					</div>

					</div>
				</div>


			</div>
			<!-- /.panel-body -->
		</div>
		<!-- /.panel -->
	</div>
</div>
<!-- /.row -->
 <?php echo form_close();?>