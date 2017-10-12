
<div class="row">
	<div class="col-md-12">
		<span>
	    <h1 class="page-header" style="color:white;">
		    <img class="img-circle" width="58" height="58" src="<?php echo base_url();?>tools/img/ccn2px.png"> 
		    <b>ACTUALIZAR TABLA DE FRECUENCIAS CONJUNTAS</b>
		</h1>
	    </span>
	</div>
</div>




<!-- MENSAJES ALERTAS -->
<?php if($this->session->flashdata('mensaje')!=''){ ?>
		<div class="alert lert-dismissable alert-<?php echo $this->session->flashdata('css')?> a" id="myAlert">
			<strong>PROCESO EXITOSO: </strong> <?php echo $this->session->flashdata('mensaje')?>
		    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>   
		</div>
<?php } ?>
<!-- MENSAJES ALERTAS -->


<?php echo form_open(null, array('name'=>'form'));?>

<div class="row">
	<div class="col-md-12">
		<div class="panel panel-default">
			<div class="panel-heading" align="center">
				<b>TABLA DE FRECUENCIAS CONJUNTAS</b>
			</div>
			<!-- /.row -->

			<div class="panel-body">


<style type="text/css">

.centrar{
text-align: center;
font-weight: bold;
}


</style>




<div class="row">
	<div class="col-lg-12">


<table class="table table-hover table-bordered">

<thead>
  <tr class="active">
    <td rowspan="3" class="centrar" style="vertical-align: middle;">ENLACES</td>
    <td rowspan="3" class="centrar" style="vertical-align: middle;">TIPO OPERACION</td>
    <td rowspan="3" class="centrar" style="vertical-align: middle;">UNIDADES PATICIPANTES</td>
    <td colspan="3" class="centrar" style="vertical-align: middle;">OPERATIVA</td>
    <td colspan="3" class="centrar" style="vertical-align: middle;">SEGURIDAD</td>
    <td colspan="2" rowspan="2" class="centrar" style="vertical-align: middle;">EMERGENCIA</td>
  </tr>
  <tr class="active">
    <td class="centrar" style="vertical-align: middle;">PRIMARIA</td>
    <td colspan="2" class="centrar" style="vertical-align: middle;">ALTERNA</td>
    <td class="centrar" style="vertical-align: middle;">PRIMARIA</td>
    <td colspan="2" class="centrar" style="vertical-align: middle;">ALTERNA</td>
  </tr>
  <tr class="active">
    <td class="centrar" style="vertical-align: middle;">FTM A HQII</td>
    <td class="centrar" style="vertical-align: middle;">UHF/AM</td>
    <td class="centrar" style="vertical-align: middle;">VHF/AM</td>
    <td class="centrar" style="vertical-align: middle;">VHF/AM</td>
    <td class="centrar" style="vertical-align: middle;">UHF/AM</td>
    <td class="centrar" style="vertical-align: middle;">HF (NAVAL)</td>
    <td class="centrar" style="vertical-align: middle;">VHF</td>
    <td class="centrar" style="vertical-align: middle;">UHF</td>
  </tr>
</thead>


<?php for ($i=1; $i <=15 ; $i++) {?>

	<?php if($i==1) { ?>
	<tr>
	<td>
		<input class="form-control input-sm" type="text" name="enlaces<?php echo $i;?>" value="<?php echo $enlaces[$i-1]->enlaces;?>">
	</td>
	<td>
		<input class="form-control input-sm" type="text" name="tipo<?php echo $i;?>" value="<?php echo $enlaces[$i-1]->tipo;?>">
	</td>
	<td>
		<input class="form-control input-sm" type="text" name="unidades<?php echo $i;?>" value="<?php echo $enlaces[$i-1]->unidades;?>">
	</td>
	<td>
		<input class="form-control input-sm" type="text" name="ftm<?php echo $i;?>" value="<?php echo $enlaces[$i-1]->ftm;?>">
	</td>
	<td>
		<input class="form-control input-sm" type="text" name="uhfame<?php echo $i;?>" value="<?php echo $enlaces[$i-1]->uhf;?>">
	</td>
	<td>
		<input class="form-control input-sm" type="text" name="vhfame<?php echo $i;?>" value="<?php echo $enlaces[$i-1]->vhf;?>">
	</td>

	<td rowspan="15">
		<textarea class="form-control input-sm" rows="50" name="VHFAM" valign="top" style="resize:none;"><?php echo $frecuencias->VHFAM;?></textarea>
	</td>
	<td rowspan="15">
		<textarea class="form-control input-sm" rows="50" name="UHFAM"  style="resize:none; vertical-align: middle;"><?php echo $frecuencias->UHFAM;?></textarea>
	</td>
	<td rowspan="15">
		<textarea class="form-control input-sm" rows="50" name="HF"  style="resize:none; vertical-align: middle;"><?php echo $frecuencias->HF;?></textarea>
	</td>
	<td rowspan="15">
		<textarea class="form-control input-sm" rows="50" name="VHF"  style="resize:none; vertical-align: middle;"><?php echo $frecuencias->VHF;?></textarea>
	</td>
	<td rowspan="15">
		<textarea class="form-control input-sm" rows="50" name="UHF"  style="resize:none; vertical-align: middle;"><?php echo $frecuencias->UHF;?></textarea>
	</td>
	</tr>
	<?php }else{ ?>

	<tr>
	<td>
		<input class="form-control input-sm" type="text" name="enlaces<?php echo $i;?>" value="<?php echo $enlaces[$i-1]->enlaces;?>">
	</td>
	<td>
		<input class="form-control input-sm" type="text" name="tipo<?php echo $i;?>" value="<?php echo $enlaces[$i-1]->tipo;?>">
	</td>
	<td>
		<input class="form-control input-sm" type="text" name="unidades<?php echo $i;?>" value="<?php echo $enlaces[$i-1]->unidades;?>">
	</td>
	<td>
		<input class="form-control input-sm" type="text" name="ftm<?php echo $i;?>" value="<?php echo $enlaces[$i-1]->ftm;?>">
	</td>
	<td>
		<input class="form-control input-sm" type="text" name="uhfame<?php echo $i;?>" value="<?php echo $enlaces[$i-1]->uhf;?>">
	</td>
	<td>
		<input class="form-control input-sm" type="text" name="vhfame<?php echo $i;?>" value="<?php echo $enlaces[$i-1]->vhf;?>">
	</td>
	</tr>
<?php }} ?>

</table>		




		

	</div>
</div>

			</div>

			<div class="panel-footer" align="center">
				<div class="form-group" data-align="top" data-autoclose="true" >

					<button type="submit" class="btn btn-lg btn-block"><b>
					<span class="fa fa-floppy-o"></span> ACTUALIZAR TABLA DE FRECUENCIAS</b>
					</button>

				</div>
			</div>
		</div>
	</div>
</div>

<?php echo form_close();?>
			


