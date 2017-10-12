	


<div class="row">
	<div class="col-md-12">
		<span >
	    <h1 class="page-header" style="color:white;">
		    <img height="70" src="<?php echo base_url();?>tools/img/logo/<?php echo ($org);?>.png">
		    <b><?php echo $org;?></b>
		</h1>
	    </span>
	</div>
</div>

<script language="JavaScript">
var tiempo = 5*60;

	function reloj(){
	    document.getElementById('CuentaAtras').innerHTML = "Tiempo Restante: <span style='color:#DC3912'>"+tiempo+"</span> Segundos";
	    document.getElementById('ocultar').style.display = 'none';
	    if(tiempo==0){ alert("Tiempo Terminado");
	    }else{tiempo-=1; setTimeout("reloj()",1000);}
	}
</script>



<div class="row">
	<div class="col-md-12">
			<a href="<?php echo base_url();?>repo/?org=<?php echo $org;?>" target="popup" class="btn btn-lg btn-block"><b><span class="fa fa-file-pdf-o"></span> Exportar a PDF</b></a>
			<hr>
	</div>

	<div class="col-md-12">

			<div class="panel-group" id="panel-742393">
				<div class="panel panel-default">
					<div class="panel-heading">
						 <a class="panel-title" data-toggle="collapse" data-parent="#panel-742393" href="#quad"><b><i class="fa fa-cube" aria-hidden="true"></i> BRIEF ACTUAL</b></a>
						 
					</div>
					<div id="quad" class="panel-collapse collapse">
						<div class="panel-body">
							<div align="right">
								<a class="btn  btn-block" href="<?php echo base_url();?>consultas/expo?org=<?php echo $org;?>" target="_blank"><i class="fa fa-expand" aria-hidden="true"></i><b> Exposición</b></a>
							</div>
							<hr>
							<table class="table table-bordered">
			                    <tbody>
			                        <tr>
			                            <td bgcolor="#F5F5F5">
			                             	<legend><b>RESUMEN ULTIMAS 24 HORAS</b></legend>
			                            	<?php echo ($datos->q1);?>
			                            </td>
			                            <td bgcolor="#ffffff">
			                            	<legend><b>PROXIMAS 24 HORAS</b></legend>
			                            	<?php echo ($datos->q2);?>	
			                            </td>
			                        </tr>
			                        <tr>
			                            <td bgcolor="#ffffff">
			                            	<legend><b>NIVELES</b></legend>
			                            	<?php echo ($datos->q3);?>
			                        	</td>
			                            <td bgcolor="#F5F5F5">
			                            	<legend><b>ESTADO DE LAS FUERZAS</b></legend>
			                           		<?php echo ($datos->q4);?>
			                            </td>
			                        </tr>
			                    </tbody>
			                </table>
						</div>
					</div>
				</div>
			</div>
	</div>
</div>


				


<div class="row">


	<div class="col-md-5">

			<div class="panel-group" id="panel-742396">
				<div class="panel panel-default">
					<div class="panel-heading">
						 <a class="panel-title" data-toggle="collapse" data-parent="#panel-742396" href="#FUERZA"><b><i class="fa fa-tachometer" aria-hidden="true"></i> SITUACION PERSONAL </b></a>
					</div>
					<div id="FUERZA" class="panel-collapse collapse">
						<div class="panel-body" align="center">
							<div id='torta'></div>
						</div>
					</div>
				</div>

			</div>
	</div>

	<div class="col-md-7">
		<div class="panel-group" id="panel-742391">
			<div class="panel panel-default">
				<div class="panel-heading">
					 <a class="panel-title" data-toggle="collapse" data-parent="#panel-742391" href="#EXTRAS"><b><i class="fa fa-calculator" aria-hidden="true"></i> ARMAMENTO - MUNICION</b></a>
					 
				</div>
				<div id="EXTRAS" class="panel-collapse collapse">
					<div class="panel-body">
				    	<div id="armamento"></div>
					</div>
				</div>
			</div>

		</div>
		<!-- /.panel -->


		
		
	</div>
	<!-- /.col-lg-6 -->
</div>
<!-- /.row -->

<div class="row">
<div class="col-md-6">


<div class="panel-group" id="panel-742390">
	<div class="panel panel-default">
		<div class="panel-heading">
			 <a class="panel-title" data-toggle="collapse" data-parent="#panel-742390" href="#COMBUSTIBLE"><b><i class="fa fa-tachometer" aria-hidden="true"></i> NIVELES DE COMBUSTIBLE DISPONIBLES</b></a>
		</div>
		<div id="COMBUSTIBLE" class="panel-collapse collapse">
			<div class="panel-body" align="center">

				<div id="myChart"></div>


			</div>
		</div>
	</div>
</div>


</div>
<div class="col-md-6">
<div class="panel-group" id="panel-742399">
<div class="panel panel-default">
			<div class="panel-heading">
				 <a class="panel-title" data-toggle="collapse" data-parent="#panel-742399" href="#obj"><b><i class="fa fa-tag" aria-hidden="true"></i> OTROS<B></a>
			</div>
			<div id="obj" class="panel-collapse collapse">
				<div class="panel-body">				    	
					<div class="well">
						<legend>OBSERVACIONES</legend>
						<?php echo ($datos->observaciones);?>
							
					</div> 
				</div>
			</div>
		</div>
</div>
</div>
</div>
<!-- /.row -->




<div class="row">
	<div class="col-lg-12">
		<div class="panel-group" id="panel-744393">
			<div class="panel panel-default">
				<div class="panel-heading">
					 <a class="panel-title" data-toggle="collapse" data-parent="#panel-744393" href="#GENERAL"><b><i class="fa fa-bar-chart" aria-hidden="true"></i> SITUACION GENERAL</b></a>
					 
				</div>
				<div id="GENERAL" class="panel-collapse collapse">
					<div class="panel-body">
						<div id="barras"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>





<?php 
	$fuerzaom = $datos->fuerzaom;
	$kia = ($datos->kia);
	$wia = ($datos->wia);
	$mia = ($datos->mia);
	$ewp = ($datos->ewp);

	$total = $kia + $wia + $mia + $ewp;

	$restante = $fuerzaom - $total;

	$diesel = (($datos->diesel - $datos->lvdiesel) * 100)/($datos->diesel); 
	$gasolina = (($datos->gasolina - $datos->lvgasolina) * 100)/($datos->gasolina); 
	$aereo = (($datos->aereo - $datos->lvaereo) * 100)/($datos->aereo); 
?>

<script type="text/javascript">
var myConfig = {
 	type: "pie", 
 	backgroundColor: "#FFFFFF",
 	plot: {
 	  borderColor: "#F5F5F5",
 	  borderWidth: 2,
 	  // slice: 90,
 	  valueBox: {
 	    placement: 'in',
 	    text: '%t\n%npv%',
 	    fontFamily: "Open Sans"
 	  },
 	  tooltip:{
 	    fontSize: '18',
 	    fontFamily: "Open Sans",
 	    padding: "5 10",
 	    text: '%t\n%npv%',
 	  },
    animation: {
      delay: 1000,
      effect: 2,
      method: 2,
      sequence: 3,
      speed: 4000
    }
 	},
 	plotarea: {
 	  margin: "0 0 0 0"  
 	},
	series : [
		{
		  values : [<?php echo ($kia);?>],
		  text: "KIA",
		  backgroundColor: '#D70206',
		},
		{
		  values: [<?php echo ($wia);?>],
		  text: "WIA",
		  backgroundColor: '#F4C63D'
		},
		{
		  values: [<?php echo ($mia);?>],
		  text: 'MIA',
		  backgroundColor: '#8f46f4'
		},
		{
		  text: 'EWP',
		  values: [<?php echo ($ewp);?>],
		  backgroundColor: '#0068C4'
		},
		{
		  text: 'CIDDS',
		  values: [<?php echo ($restante);?>],
		  backgroundColor: '#66bf00'
		}
	]
};

zingchart.render({ 
	id : 'torta', 
	data : myConfig, 
	height: 350, 
	width: 425 
});

var myChart = {
  "type": "bar",
  "plot": {
    animation: {
      delay: 1000,
      effect: 4,
      method: 5,
      sequence: 3,
      speed: 4000
    }
  },
  "legend": {
    "toggle-action": "hide",
    "header": {
      "text": "Leyenda"
    },
    "item": {
      "cursor": "pointer"
    },
    "draggable": true,
    "drag-handler": "icon"
  },
  "scale-x": {
    "values": [<?php for($i=0;$i<13;$i++){ echo '"<b>'.date('H:s', strtotime($config->inicio_om."+ ".$i." hours")).'</b>",';}?>]
  },
  "series": [
    {
      "values": [<?php foreach($grillaA as $dato){  echo $dato->porcentaje.",";}?>],
      "text": "Situación Actual",
      "background-color": "#D70206"
    },
    {
      "values": [<?php foreach($grillaB as $dato){  echo $dato->porcentaje.",";}?>],
      "text": "Degradación General",
      "background-color": "#F4C63D"
    },
    {
      "values": [<?php foreach($grillaC as $dato){  echo $dato->porcentaje.",";}?>],
      "text": "Situación Adversario",
      "background-color": "#222222"
    }
  ]

};
zingchart.render({
	id: "barras",
	data: myChart,
	height: "480",
	width: "100%"
});
	



var myConfig = {
  type: "pie",
  backgroundColor: "#ffffff",
  legend: {
    layout: "h",
    align: "center",
    verticalAlign: "bottom",
    toggleAction: "remove",
    shadow: 0
  },
  plotarea: {
    y: 150
  },
  plot: {
    refAngle: 180,
    size: 250,
        animation: {
      delay: 1000,
      effect: 4,
      method: 5,
      sequence: 3,
      speed: 4000
    },

    valueBox: {
      placement: "in",
      offsetR: 20
    },
 	  valueBox: {
 	    placement: 'in',
 	    text: '%t\n%v%',
 	    fontFamily: "sans-serif"
 	  },
 	  tooltip:{
 	    fontSize: '18',
 	    fontFamily: "sans-serif",
 	    padding: "5 10",
 	    text: '%t\n%v%',
 	  },
  },
  scaleR: {
    aperture: 180
  },
  series: [{

      values: [<?php echo round($diesel,2); ?>],
      text: "Gasolina",
      backgroundColor: "#017E00"
    }, {
      values: [<?php echo round($gasolina,2); ?>],
      text: "Diesel",
      backgroundColor: "#FFA401"
    }, {
      values: [<?php echo round($aereo,2); ?>],
      text: "Aviación (JP1)",
      backgroundColor: "#0066CB"
    }
  ]
};

zingchart.render({
  id: 'myChart',
  data: myConfig,
  height: 290,
  width: 525
});
 


var myConfig = {
  type: "hbar",
  tooltip:{
    padding: 10,
    fontSize: 14,
    text: "%v% OPERACIONAL",
    backgroundColor: "#fff",
    fontColor: "#444",
    borderRadius: "5px",
    borderColor: "#333",
    borderWidth: 1
  },


  plotarea:{
    margin: "10 130 70 150"
  },
  plot:{
    borderRadius: "0 5 5 0",
    hightlightMarker: {
      backgroundColor:"red"
    },
    highlightState: {
      backgroundColor:"red"
    },

    animation: {
      delay: 1000,
      effect: 4,
      method: 5,
      sequence: 3,
      speed: 1000
    }
  },
 	scaleX: {
 	  labels: [<?php foreach($armamento as $dato){ echo "'<b>".$dato->nombre."</b>',";}?>],
 	  //labels: ['hola','hola','hola','hola','hola','hola','hola','hola',],
 	  item: {
 	    fontFamily: "sans-serif",
 	    fontSize: 14
 	  },
 	  lineColor: "#222222",
 	  tick:{
 	    visible: true
 	  }
 	},
 	scaleY: {
 	  label:{
 	    offsetY: 5,
 	    text: "PORCENTAJE OPERACIONAL",
 	    fontColor: "#605f5f",
 	    fontSize: 14,
 	    fontFamily: "sans-serif",
 	  },
 	  item: {
 	    // fontColor: "#fff",
 	    fontFamily: "sans-serif",
 	    fontSize: 14
 	  },
 	  lineWidth: 0,
 	  tick: {
 	    visible: false
 	  },
 	  guide:{
 	    lineStyle: "solid",
 	    lineColor: "#DDD"
 	  },
 	  values: "0:100:10"
 	},
	series : [
	  {
		  values: [<?php foreach($armamento as $dato){  echo (($dato->numero - $dato->numero2) * 100)/($dato->numero).",";}?> ],
		  backgroundColor: "#d6d6d6",
		  rules: [
		    { rule: '%i==0', backgroundColor: '#D70206'},
		    { rule: '%i==1', backgroundColor: '#F4C63D'},
		    { rule: '%i==2', backgroundColor: '#645143'},
		    { rule: '%i==3', backgroundColor: '#D17905'},
		    { rule: '%i==4', backgroundColor: '#781C7E'},
		    { rule: '%i==5', backgroundColor: '#10A5BA'},
		    { rule: '%i==6', backgroundColor: '#017E00'},
		   	{ rule: '%i==7', backgroundColor: '#005CB7'},
		  ]
		}
	]
};


zingchart.render({ 
	id : 'armamento', 
	data : myConfig, 
	height: 400, 
	width: 700 
});



</script>







