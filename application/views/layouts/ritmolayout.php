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
<link href="<?php echo base_url();?>tools/bootstrap3/estilo.css" rel="stylesheet">
<link href="<?php echo base_url();?>tools/bootstrap3/font-awesome/css/font-awesome.min.css" rel="stylesheet">


<!-- DATE PIKER -->
<link rel="stylesheet" href="<?php echo base_url();?>tools/picker/date/css/datepicker.css">
<script src="<?php echo base_url();?>tools/picker/date/js/bootstrap-datepicker.js"></script>
<script>
      $(function(){
       $('.datepicker').datepicker();
      });
</script>
<!-- DATE PIKER -->

<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>tools/picker/dist/bootstrap-clockpicker.min.css">



</head>
<body>

<!-- BARRA NAVEGADORA -->
<nav class="navbar navbar-inverse navbar-fixed-top">
<div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#"><b><i class="fa fa-scribd" aria-hidden="true"></i>IVI<i class="fa fa-opera" aria-hidden="true"></i></b></a>
    </div>

    <ul class="nav navbar-nav">

      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><b><i class="fa fa-calendar" aria-hidden="true"></i> RITMO DE BATALLA</b><span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a a href="<?php echo base_url();?>admin/inputritmo"><b><i class="fa fa-keyboard-o" aria-hidden="true"></i> INGRESAR</b></a></li>
          <li><a a href="<?php echo base_url();?>admin/ritmo"><b><i class="fa fa-search" aria-hidden="true"></i> CONSULTAR</b></a></li>
        </ul>
      </li>

      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><b><i class="fa fa-wifi" aria-hidden="true"></i> TABLA DE FRECUENCIAS</b><span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a a href="<?php echo base_url();?>admin/update"><b><i class="fa fa-keyboard-o" aria-hidden="true"></i> ACTUALIZAR</b></a></li>
          <li><a a href="<?php echo base_url();?>admin/frecuencias"><b><i class="fa fa-search" aria-hidden="true"></i> CONSULTAR</b></a></li>
        </ul>
      </li>


    </ul>

    <ul class="nav navbar-nav navbar-right">
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown"  href="#"><span>
                  <img  height="20" src="<?php echo base_url();?>tools/img/lg.png">
              </span>
        <span >&nbsp;<b><?php echo strtoupper($this->session->userdata('usuario')); ?></b></span><span class="caret"></span></a>
        <ul class="dropdown-menu">          
          <li><a href="<?php echo base_url();?>home/salir"><b><span class="fa fa-lock" ></span>
            <span> Cerrar Sesión</span></b>
          </a></li>
        </ul>
      </li>
    </ul>
</div>
</nav>
<!-- FIN BARRA NAVEGADORA -->

  
<div class="container" style="margin-top:50px">


<div class="row">
<div class="col-md-4">
</div>
<div class="col-md-4">
</div>
<div class="col-md-4">
<div id="ohsnap"></div>
</div>
</div>
<!-- CONTENIDO -->
<?php echo $content_for_layout;?>
<!-- FIN CONTENIDO -->
</div>




<script type="text/javascript" src="<?php echo base_url();?>tools/picker/dist/bootstrap-clockpicker.js"></script>



<script type="text/javascript">
$('.clockpicker').clockpicker();
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
    <p style="color:white;"><b>SOFTWARE DE INTEGRACIÓN VISUAL DE INFORMACIÓN OPERACIONAL<br>SIVIO V1.9 - 2017</b></p>
  </div>
</footer>

</body>
</html>
