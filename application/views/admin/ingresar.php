
<div class="row">
	<div class="col-md-12">
		<span>
	    <h1 class="page-header" style="color:white;">
		    <img class="img-circle" width="58" height="58" src="<?php echo base_url();?>tools/img/ccn2px.png"> 
		    <b>INGRESO DEL RITMO DE BATALLA</b>
		</h1>
	    </span>
	</div>
</div>




<!-- MENSAJES ALERTAS -->
<?php if($this->session->flashdata('mensaje')!=''){ ?>
		<div class="alert lert-dismissable alert-<?php echo $this->session->flashdata('css')?> a" id="myAlert">
			<strong>INFORMACION ACTUALIZADA</strong> <?php echo $this->session->flashdata('mensaje')?>
		    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>   
		</div>
<?php } ?>
<!-- MENSAJES ALERTAS -->


<?php echo form_open(null, array('name'=>'form'));?>

<div class="row">
	<div class="col-md-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				<b>INGRESE LOS DATOS SOLICITADOS</b>
			</div>
			<!-- /.row -->

			<div class="panel-body">
				<div class="row">
					<div class="col-lg-4">
						<label>Nivel de Importancia</label>
						<select name="estado" class="form-control input-sm" placeholder="Nivel de Importancia" required style="text-align:center;">
							<option value="alto" style="background-color: #F2DEDE; font-size: 150%;">Alto</option>
							<option value="medio" style="background-color: #FCF8E3; font-size: 150%;">Medio</option>
							<option value="bajo" style="background-color: #DFF0D8; font-size: 150%;">Bajo</option>
						</select>
					</div>
					<div class="col-lg-4">
						<label>Fecha de Alerta</label>
						<div class="form-group input-group" data-align="top" data-autoclose="true">
				    	<input class="datepicker form-control input-sm" type="text" name="fecha" value="<?php echo $fecha;?>" readonly required>
				    	<input type="text"  name="id" value="<?php echo $id;?>" hidden>
				    	<span class="input-group-addon">
					        <span class="fa fa-calendar"></span>
					    </span>
						</div>  
					</div>
					<div class="col-lg-4">
						<label>Hora de Alerta</label>
							<div class="input-group clockpicker" data-placement="left" data-align="top" data-autoclose="true">
							    <input  name="hora" type="time" class="form-control" value="<?php echo date("H:i");?>" readonly required>
							    <span class="input-group-addon">
							        <span class="glyphicon glyphicon-time"></span>
							    </span>
							</div>
					</div>		
				</div>




				<div class="row">
					<div class="col-lg-12">
						<textarea name="ritmo" class="form-control" rows="4" required><?php echo $ritmo;?></textarea>
					</div>
				</div>



			</div>

			<div class="panel-footer" align="center">
				<div class="form-group" data-align="top" data-autoclose="true" >

					<button type="submit" class="btn btn-lg btn-block"><b>
					<span class="fa fa-floppy-o"></span> REGISTRAR RITMO DE BATALLA</b>
					</button>

				</div>
			</div>
		</div>
	</div>
</div>

<?php echo form_close();?>
			


