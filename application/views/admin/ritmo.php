
<div class="row">
	<div class="col-md-12">
		<span>
	    <h1 class="page-header" style="color:white;">
		    <img class="img-circle" width="58" height="58" src="<?php echo base_url();?>tools/img/ccn2px.png"> 
		    <b>RITMO DE BATALLA</b>
		</h1>
	    </span>
	</div>
</div>


<?php echo form_open(null, array('name'=>'form'));?>

<div class="row">
	<div class="col-md-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				<b>SELECCIONE FECHA CONSULTAR</b>
			</div>
			<!-- /.row -->

			<div class="panel-body">
				<div class="row">

					<div class="col-md-3">
					    <div class="form-group input-group input-sm" data-align="top" data-autoclose="true" >
					    	<input class="datepicker form-control input-sm" type="date" required="true" name="fecha" value="<?php echo $fecha;?>" readonly>
					    	<span class="input-group-addon">
						        <span class="fa fa-calendar"></span>
						    </span>
						</div>    
					</div>



					<div class="col-md-3">
						<div class="form-group input-sm" data-align="top" data-autoclose="true">
							<button type="submit" class="btn btn-sm btn-block"><b>
							<span class="fa fa-search"></span> CONSULTAR</b>
							</button>
						</div>
					</div>
					<div class="col-md-6">
					</div>

				</div>
			</div>
		</div>
	</div>
</div>

<?php echo form_close();?>
			

			




<?php  if (!($batalla==null || $batalla=="")) {?>
<div class="row">
	<div class="col-md-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				<b>RITMO DE BATALLA | <?php $newFecha = date("d-m-Y", strtotime($fecha)); echo $newFecha;?></b>
			</div>
			<!-- /.row -->

					<div class="panel-body">
						<div class="row">
							<div class="col-md-12">
							<div style="display:inline-block;width:100%;overflow-y:auto;">
							<ul class="timeline timeline-horizontal">
							<?php  foreach ($batalla as $dato) {?>

								<li class="timeline-item">
								<?php 

									if($dato->estado=="alto"){ $color = "#CE0D17"; } 
									if($dato->estado=="medio"){ $color = "#FCA601"; } 
									if($dato->estado=="bajo"){ $color = "#118330"; } 
									$newHora = date("H:i", strtotime($dato->hora));
									$newFecha = date("d-m-Y", strtotime($dato->fecha));

								?>
									
									<div class="timeline-badge danger" id="hora" style="background-color:<?php echo $color;?>">
										<b><?php echo $newHora;?></b>
									</div>
									<div class="timeline-panel" style="background-color:#F5F5F5">
										<div class="timeline-heading">
											<h1 class="timeline-title" style="color:#555555"><b><?php echo $newHora;?> 

<?php if($this->session->userdata('organo')=="RITMO"){ ?>
<a href="<?php echo base_url();?>admin/delritmo/?id=<?php echo ($dato->id);?>&fecha=<?php echo ($dato->fecha);?>"><i class="fa fa-trash" aria-hidden="true"></i></a>
<a href="<?php echo base_url();?>admin/inputritmo/?id=<?php echo ($dato->id);?>"><i class="fa fa-pencil-square" aria-hidden="true"></i></a>
<?php } ?>


											</b></h1>
											<p><small class="text-muted"><i class="fa fa-calendar"></i> <b><?php echo $newFecha;?></b></small> </p>
										</div>
										<div class="timeline-body">
											<p><?php echo ($dato->data);?></p>
										</div>
									</div>
								</li>

								
							<?php } ?>


							</ul>
						</div>
						</div>
					</div>

				</div>
				</div>
			</div>
		</div>
	</div>
</div>




<?php } else{ ?>


<div class="row">
	<div class="col-md-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				<b>RITMO DE BATALLA</b>
			</div>
			<!-- /.row -->

					<div class="panel-body">
						<div class="row">
							<div class="col-md-12">
								<h3 align="center">NO EXISTEN ALERTAS PARA NOTIFICAR</h3>
							</div>
						</div>
					</div>
		</div>
	</div>
</div>

<?php } ?>



