<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="PROYECTO SIVIO - PANORAMA CONJUNTO">
<meta name="author" content="Israel Terán - israeliqq@live.cl">
<title>CCN - SIVIO</title>

<link rel="stylesheet" href="<?php echo base_url();?>tools/bootstrap3/bootstrap.min.css">
<script src="<?php echo base_url();?>tools/bootstrap3/jquery.min.js"></script>
<script src="<?php echo base_url();?>tools/bootstrap3/bootstrap.min.js"></script>
<link href="<?php echo base_url();?>tools/bootstrap3/personalizado.css" rel="stylesheet">
<link href="<?php echo base_url();?>tools/bootstrap3/font-awesome/css/font-awesome.min.css" rel="stylesheet">

<link href="<?php echo base_url();?>tools/timercount/timeTo.css" type="text/css" rel="stylesheet"/>


<style type="text/css">
.btn, .btn.hover, .btn.active{
    background:#D6B777;
    color:#FFFFFF;
    border-color:#D6B777;
}
body {
    background-image: url(<?php echo base_url();?>tools/img/fondo.jpg);
    background-attachment: fixed; 
    background-repeat: no-repeat;
}


.alert {
  padding: 15px;
  margin-bottom: 20px;
  border: 1px solid #eed3d7;
  border-radius: 4px;
  position: absolute;
  top: 60px;
  right: 21px;
  position:absolute; 
  z-index:1;
  /* Each alert has its own width */
  float: right;
  clear: right;
  background-color: white;
}

.alert-red {
  color: white;
  background-color: #DA4453;
}
.alert-green {
  color: white;
  background-color: #37BC9B;
}
.alert-blue {
  color: white;
  background-color: #4A89DC;
}
.alert-yellow {
  color: white;
  background-color: #F6BB42;
}
.alert-orange {
  color:white;
  background-color: #E9573F;
}


</style>

</head>

<body>




<div class="row">
<div class="col-md-4">
</div>
<div class="col-md-4">
</div>
<div class="col-md-4">
<div id="ohsnap"></div>
</div>
</div>



<?php echo $content_for_layout;?>


    <script src="<?php echo base_url();?>tools/timercount/jquery.time-to.js"></script>
    <script>

    	function IniciarTiempo(segundos){

    	minutos = 60*segundos;
        $('#countdown-1').timeTo(minutos, function(){
             ohSnap('<h1><i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;<b>SU TIEMPO DE EXPOSICION FINALIZO</b></h1>', {'duration':'15000'});
        },{
            theme: "black",
            fontSize: 28,
            captionSize: 10,
            //displayHours: false


        });

    	}
        $('#reset-1').click(function() {
            $('#countdown-1').timeTo('reset');
        });
    </script>

    <script src="<?php echo base_url();?>tools/alert/ohsnap.js"></script>

<script type= "text/javascript">
$(document).ready(function() {
function update() {
  $.ajax({
    type: 'POST',
    url: '<?php echo base_url();?>/admin/alerta',
    dataType: 'text',
        success: function(data) {  
            var mydata= $.parseJSON(data);

            var mensaje = mydata.mensaje;
            var fecha = mydata.fecha;
            var hora = mydata.hora; 
            var col = mydata.color;

            if(mensaje != "nada"){ 
                ohSnap('<i class="fa fa-calendar" aria-hidden="true"></i><b> ALERTA:  '+hora+' - '+fecha+'</b><br><br><i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;<b>'+mensaje+'</b>', {color: col}, {'duration':'2000'}); }
        }
    });//.ajax
 }  setInterval(update,5000);
});

</script>

<footer class="footer">
  <div class="container" align="center">
    <p style="color:white;"><b>SOFTWARE DE INTEGRACIÓN VISUAL DE INFORMACIÓN OPERACIONAL<br>SIVIO V1.4 - 2017</b></p>
  </div>
</footer>


</body>
</html>