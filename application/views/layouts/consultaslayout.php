<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="PROYECTO SIVIO - PANORAMA CONJUNTO">
<meta name="author" content="Israel Terán - israeliqq@live.cl conuslta">
<title>CCN - SIVIO</title>

<link rel="stylesheet" href="<?php echo base_url();?>tools/bootstrap3/bootstrap.min.css">
<script src="<?php echo base_url();?>tools/bootstrap3/jquery.min.js"></script>
<script src="<?php echo base_url();?>tools/bootstrap3/bootstrap.min.js"></script>
<link href="<?php echo base_url();?>tools/bootstrap3/personalizado.css" rel="stylesheet">
<link href="<?php echo base_url();?>tools/bootstrap3/estilo.css" rel="stylesheet">
<link href="<?php echo base_url();?>tools/bootstrap3/font-awesome/css/font-awesome.min.css" rel="stylesheet">

<link href="<?php echo base_url();?>tools/bar/jquery.lineProgressbar.css" rel="stylesheet" type="text/css">
<script src="<?php echo base_url();?>tools/bar/jquery.lineProgressbar.js"></script>

<script src="<?php echo base_url();?>tools/zchart/zingchart.min.js"></script>
<!-- DATE PIKER -->
<link rel="stylesheet" href="<?php echo base_url();?>tools/picker/date/css/datepicker.css">
<script src="<?php echo base_url();?>tools/picker/date/js/bootstrap-datepicker.js"></script>
<script>
      $(function(){
       $('.datepicker').datepicker();
      });
</script>
<!-- DATE PIKER -->




</head>
<body>

<!-- BARRA NAVEGADORA -->
<nav class="navbar navbar-inverse navbar-fixed-top">
<div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="<?php echo base_url();?>home"><b><i class="fa fa-scribd" aria-hidden="true"></i>IVI<i class="fa fa-opera" aria-hidden="true"></i></b></a>
    </div>
    <ul class="nav navbar-nav">
      <li><a a href="<?php echo base_url();?>home"><b><i class="fa fa-home" aria-hidden="true"></i> INICIO</b></a></li>

      <?php if($this->session->userdata('organo')!="ADMIN"){ ?>
            <li><a a href="<?php echo base_url();?>organo/?org=<?php echo $this->session->userdata("organo");?>"><b><i class="fa fa-pencil-square-o" aria-hidden="true"></i> EDITAR</b></a></li>
      <?php } ?>

      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><b><i class="fa fa-search" aria-hidden="true"></i> CONSULTAR</b> <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="<?php echo base_url();?>consultas/?org=omtn"><b><i class="fa fa-chevron-right" aria-hidden="true"></i> OMTN</b></a></li>
          <li><a href="<?php echo base_url();?>consultas/?org=omn"><b><i class="fa fa-chevron-right" aria-hidden="true"></i> OMN</b></a></li>
          <li><a href="<?php echo base_url();?>consultas/?org=oma"><b><i class="fa fa-chevron-right" aria-hidden="true"></i> OMA</b></a></li>
          <li><a href="<?php echo base_url();?>consultas/?org=omtse"><b><i class="fa fa-chevron-right" aria-hidden="true"></i> OMTSE</b></b></a></li>
          <li><a href="<?php echo base_url();?>consultas/?org=omoe"><b><i class="fa fa-chevron-right" aria-hidden="true"></i> OMOE</b></a></li>
          <li><a href="<?php echo base_url();?>consultas/?org=zzcc"><b><i class="fa fa-chevron-right" aria-hidden="true"></i> ZZCC</b></a></li>
          <li><a href="<?php echo base_url();?>consultas/?org=ft70"><b><i class="fa fa-chevron-right" aria-hidden="true"></i> FT70</b></a></li>
          <li><a href="<?php echo base_url();?>consultas/?org=reserva"><b><i class="fa fa-chevron-right" aria-hidden="true"></i> RESERVA</b></a></li>
          <li><a href="<?php echo base_url();?>consultas/?org=doc"><b><i class="fa fa-chevron-right" aria-hidden="true"></i> DOC</b></a></li>
           <li><a href="<?php echo base_url();?>consultas/?org=c1"><b><i class="fa fa-chevron-right" aria-hidden="true"></i> C1</b></a></li>
          <li><a href="<?php echo base_url();?>consultas/?org=c2"><b><i class="fa fa-chevron-right" aria-hidden="true"></i> C2</b></a></li>
          <li><a href="<?php echo base_url();?>consultas/?org=c4"><b><i class="fa fa-chevron-right" aria-hidden="true"></i> C4</b></a></li>
          <li><a href="<?php echo base_url();?>consultas/?org=briefa"><b><i class="fa fa-chevron-right" aria-hidden="true"></i> BRIEF A</b></a></li>
          <li><a href="<?php echo base_url();?>consultas/?org=briefb"><b><i class="fa fa-chevron-right" aria-hidden="true"></i> BRIEF B</b></a></li>
        </ul>
      </li>
      <li><a a href="<?php echo base_url();?>briefing"><b><i class="fa fa-calendar" aria-hidden="true"></i> HISTORICO</b></a></li>
      <li><a a href="<?php echo base_url();?>admin/ritmo"><b><i class="fa fa-info-circle" aria-hidden="true"></i> RIMO DE BATALLA</b></a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><b><i class="fa fa-file-text" aria-hidden="true"></i> REPORTES</b><span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="<?php echo base_url();?>repo/?org=omtn" target="_blank"><b><i class="fa fa-file-text" aria-hidden="true"></i> OMTN</b></a></li>
          <li><a href="<?php echo base_url();?>repo/?org=omn" target="_blank"><b><i class="fa fa-file-text" aria-hidden="true"></i> OMN</b></a></li>
          <li><a href="<?php echo base_url();?>repo/?org=oma" target="_blank"><b><i class="fa fa-file-text" aria-hidden="true"></i> OMA</b></a></li>
          <li><a href="<?php echo base_url();?>repo/?org=omtse" target="_blank"><b><i class="fa fa-file-text" aria-hidden="true"></i> OMTSE</b></a></li>
          <li><a href="<?php echo base_url();?>repo/?org=omoe" target="_blank"><b><i class="fa fa-file-text" aria-hidden="true"></i> OMOE</b></a></li>
          <li><a href="<?php echo base_url();?>repo/?org=zzcc" target="_blank"><b><i class="fa fa-file-text" aria-hidden="true"></i> ZZCC</b></a></li>
          <li><a href="<?php echo base_url();?>repo/?org=ft70" target="_blank"><b><i class="fa fa-file-text" aria-hidden="true"></i> FT70</b></a></li>
          <li><a href="<?php echo base_url();?>repo/?org=reserva" target="_blank"><b><i class="fa fa-file-text" aria-hidden="true"></i> RESERVA</b></a></li>
          <li><a href="<?php echo base_url();?>repo/?org=doc" target="_blank"><b><i class="fa fa-file-text" aria-hidden="true"></i> DOC</b></a></li>
          <li><a href="<?php echo base_url();?>repo/?org=C1" target="_blank"><b><i class="fa fa-file-text" aria-hidden="true"></i> C1</b></a></li>
          <li><a href="<?php echo base_url();?>repo/?org=C2" target="_blank"><b><i class="fa fa-file-text" aria-hidden="true"></i> C2</b></a></li>
          <li><a href="<?php echo base_url();?>repo/?org=C4" target="_blank"><b><i class="fa fa-file-text" aria-hidden="true"></i> C4</b></a></li>
          <li><a href="<?php echo base_url();?>repo/?org=briefa" target="_blank"><b><i class="fa fa-file-text" aria-hidden="true"></i> BRIEF A</b></a></li>
          <li><a href="<?php echo base_url();?>repo/?org=briefb" target="_blank"><b><i class="fa fa-file-text" aria-hidden="true"></i> BRIEF B</b></a></li>
        </ul>
      </li>
      <li><a a href="<?php echo base_url();?>admin/frecuencias"><b><i class="fa fa-wifi" aria-hidden="true"></i> FRECUENCIAS</b></a></li>
    </ul>

    <ul class="nav navbar-nav navbar-right">
       <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown"  href="#"><span>
                  <img  height="20" src="<?php echo base_url();?>tools/img/lg.png">
              </span>
        <span >&nbsp;<b><?php echo strtoupper($this->session->userdata('usuario')); ?></b></span><span class="caret"></span></a>
        <ul class="dropdown-menu">

          <?php if($this->session->userdata('organo')=="ADMIN"){ ?>
            <li><a href="<?php echo base_url();?>admin/usuarios"><b><span class="fa fa-cog"></span> Configurar</b></a></li>
            <li class="divider"></li>
          <?php } ?>
          
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
