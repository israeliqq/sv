
<div class="row">
	<div class="col-md-12">
		<span>
	    <h1 class="page-header" style="color:white;">
		    <img class="img-circle" width="58" height="58" src="<?php echo base_url();?>tools/img/ccn2px.png"> 
		    <b>TABLA DE FRECUENCIAS CONJUNTAS</b>
		</h1>
	    </span>
	</div>
</div>



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

<?php 	
	$fila = 15;
	for ($i=0; $i <15 ; $i++) {
		if($enlaces[$i]->enlaces == "" || $enlaces[$i]->enlaces == null){
			$fila = $fila -1;
		}
	}
?>




<?php for ($i=0; $i <$fila ; $i++) {?>
	<?php if($i==0) { ?>
	<tr>
	<td><?php echo $enlaces[$i]->enlaces;?></td>
	<td><?php echo $enlaces[$i]->tipo;?></td>
	<td><?php echo $enlaces[$i]->unidades;?></td>
	<td><?php echo $enlaces[$i]->ftm;?></td>
	<td><?php echo $enlaces[$i]->uhf;?></td>
	<td><?php echo $enlaces[$i]->vhf;?></td>

	<td rowspan="<?php echo $fila;?>" class="centrar" style="vertical-align: middle;"><?php echo $frecuencias->VHFAM;?></td>
	<td rowspan="<?php echo $fila;?>" class="centrar" style="vertical-align: middle;"><?php echo $frecuencias->UHFAM;?></td>
	<td rowspan="<?php echo $fila;?>" class="centrar" style="vertical-align: middle;"><?php echo $frecuencias->HF;?></td>
	<td rowspan="<?php echo $fila;?>" class="centrar" style="vertical-align: middle;"><?php echo $frecuencias->VHF;?></td>
	<td rowspan="<?php echo $fila;?>" class="centrar" style="vertical-align: middle;"><?php echo $frecuencias->UHF;?></td>
	</tr>
	<?php }else{ ?>
	<tr>
	<td><?php echo $enlaces[$i]->enlaces;?></td>
	<td><?php echo $enlaces[$i]->tipo;?></td>
	<td><?php echo $enlaces[$i]->unidades;?></td>
	<td><?php echo $enlaces[$i]->ftm;?></td>
	<td><?php echo $enlaces[$i]->uhf;?></td>
	<td><?php echo $enlaces[$i]->vhf;?></td>
	</tr>
<?php }} ?>

</table>		



	</div>
</div>


			</div>


		</div>
	</div>
</div>



