
<div class="row">
	<div class="col-md-12">
		<span>
	    <h1 class="page-header" style="color:white;">
		    <img class="img-circle" width="58" height="58" src="<?php echo base_url();?>tools/img/ccn2px.png"> 
		    <b>BRIEFING HISTORICO</b>
		</h1>
	    </span>
	</div>
</div>


<?php echo form_open(null, array('name'=>'form'));?>

<div class="row">
	<div class="col-md-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				<b>SELECCIONES FECHA Y ORGANO A CONSULTAR</b>
			</div>
			<!-- /.row -->



			<div class="panel-body">
				<div class="row">
					<div class="col-md-3">
					    <div class="form-group input-group input-sm" data-align="top" data-autoclose="true">
					    	<input class="datepicker form-control input-sm" type="text" required="true" name="fecha" value="<?php echo $fecha;?>" readonly>
					    	<span class="input-group-addon">
						        <span class="fa fa-calendar"></span>
						    </span>
						</div>    
					</div>

					<div class="col-md-3">
					    <div class="form-group input-sm" data-align="top" data-autoclose="true">
					    <select class="form-control input-sm" name="organo">
					    	<?php foreach ($organo as $dato) { ?>
					    			<?php if(($dato->nombre!="RITMO")){ if(($dato->nombre!="ADMIN")){ ?>
					    			<option value="<?php echo $dato->id;?>"><?php echo $dato->nombre;?></option>
					    		<?php } }}?>
					    </select>
						</div>    
					</div>


					<div class="col-md-3">
						<div class="form-group input-sm" data-align="top" data-autoclose="true">
							<button type="submit" class="btn btn-sm btn-block"><b>
							<span class="fa fa-search"></span> CONSULTAR</b>
							</button>
						</div>
					</div>
				</div>

<?php echo form_close();?>
			


		</div>
			<!-- /.panel-body -->
		</div>
		<!-- /.panel -->
	</div>
</div>
<!-- /.row -->


<div class="row">
	<div class="col-md-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				<b>SELECCIONES UN REGISTRO DEL <?php echo $fecha;?></b>
			</div>
			<!-- /.row -->

			<div class="panel-body">


			<div class="row">
			<div class="col-lg-12">
			    <div class="table-responsive">
			        <table class="table table-striped table-bordered table-hover">
			        	<?php if (empty($brief)) {?> <div align="center"><h3>No se encontraron datos, para la fecha seleccionada</h3><h4>Favor seleccione otra fecha</h4></div><?php  } else{?>
			            <tbody>
			            	
			            	<?php foreach (array_reverse($brief) as $dato) {?>
			                <tr>
								<td align="center">
								    <button type="button" name="ver" class="btn btn-block" data-toggle="modal" data-target="#<?php echo $dato->id?>">
								      <span class="fa fa-upload" aria-hidden="true"></span> 
								      <?php $date = date_create($dato->fecha);
											echo date_format($date, 'd-m-Y');
								      ?> | <?php echo $dato->hora;?> | <?php echo $org;?>
								    </button>
								</td>
			                </tr>



<!-- Modal -->
<div class="modal fade" id="<?php echo $dato->id?>" role="dialog">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Briefing Historico || <?php echo $dato->hora?> - <?php echo $dato->fecha?> - <?php echo $org;?> ||</h4>
			</div>
			<div class="modal-body">

			<div class="row">
				<div class="col-md-12">
					<a href="<?php echo base_url();?>repo/historico/?org=<?php echo $org;?>&fecha=<?php echo $dato->fecha;?>&hora=<?php echo $dato->hora;?>" target="popup" class="btn btn-lg btn-block"><b><span class="fa fa-file-pdf-o"></span> Exportar a PDF</b></a>
					<hr>
				</div>
			</div>

			<div class="row">
			<!-- /.col-lg-4 -->
			<div class="col-md-6">
				<div class="well">
					<h4>QUAD 1</h4>
					<p><?php echo $dato->q1?></p>
				</div>
			</div>
			<!-- /.col-lg-4 -->


			<!-- /.col-lg-4 -->
			<div class="col-md-6">
				<div class="well">
					<h4>QUAD 2</h4>
				<p><?php echo $dato->q2?></p>
				</div>
			</div>
			<!-- /.col-lg-4 -->
			</div>


			<div class="row">
			<!-- /.col-lg-4 -->
			<div class="col-md-6">
				<div class="well">
					<h4>QUAD 3</h4>
					<p><?php echo $dato->q3?></p>
				</div>
			</div>
			<!-- /.col-lg-4 -->


			<!-- /.col-lg-4 -->
			<div class="col-md-6">
				<div class="well">
					<h4>QUAD 4</h4>
				<p><?php echo $dato->q4?></p>
				</div>
			</div>
			<!-- /.col-lg-4 -->
			</div>


			</div>
			<div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">CERRAR</button>
			</div>
		</div>
	</div>
</div>
<!-- Modal -->


			                <?php }} ?> 
			            </tbody>
			        </table>
			    </div>
			    <!-- /.table-responsive -->
			</div>
			</div>
			<!-- /.row -->



		</div>
			<!-- /.panel-body -->
		</div>
		<!-- /.panel -->
	</div>
</div>
<!-- /.row -->



