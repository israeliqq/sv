

<div class="row">
<div class="col-md-12" align="right">

<button id="view-fullscreen" class="btn btn-sm"><b><i class="fa fa-desktop" aria-hidden="true"></i> Pantalla Completa</b></button>
<button id="cancel-fullscreen" class="btn btn-sm"><b><i class="fa fa-times" aria-hidden="true"></i> Salir Pantalla Completa</b></button>


<div class="btn-group">
    <br>
	<button type="button" class="btn btn-sm" data-toggle="dropdown"  id='ocultar'><b> <span class="fa fa-clock-o"></span> Iniciar Tiempo <span class="caret"></span></b></button>

    <ul class=" dropdown-menu " role="menu">
    	<li><a href="#" onclick="IniciarTiempo(5);"><b>5 Minutos</b></a></li>
    	<li><a href="#" onclick="IniciarTiempo(10);"><b>10 Minutos</b></a></li>
    	<li><a href="#" onclick="IniciarTiempo(15);"><b>15 Minutos</b></a></li>
    	<li><a href="#" onclick="IniciarTiempo(20);"><b>20 Minutos</b></a></li>
    	<li><a href="#" onclick="IniciarTiempo(30);"><b>30 Minutos</b></a></li>
    	<li><a href="#" onclick="IniciarTiempo(60);"><b>1 Hora</b></a></li>
    </ul>
    <hr>
</div>
</div>



<div class="row">
<div class="col-md-12" align="center">
      
       <div id="countdown-1" align="center"></div>

</div>
</div>


</div>
 
<div class="row">
<div class="col-md-12" align="center">
        
<h1 style="color:white"><b>EXPOSICION BRIEFING</b></h1>

<table class="table table-condensed ">
    <tbody>
        <tr>
            <td bgcolor="#F5F5F5">
             	<legend><b>RESUMEN ULTIMAS 12/24 HORAS</b></legend>
            	<?php echo ($datos->q1);?>
            </td>
            <td bgcolor="#ffffff">
            	<legend><b>PROXIMAS 12/24 HORAS</b></legend>
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

<script type="text/javascript">
    

(function () {
    var viewFullScreen = document.getElementById("view-fullscreen");
    if (viewFullScreen) {
        viewFullScreen.addEventListener("click", function () {
            var docElm = document.documentElement;
            if (docElm.requestFullscreen) {
                docElm.requestFullscreen();
            }
            else if (docElm.msRequestFullscreen) {
                docElm = document.body; //overwrite the element (for IE)
                docElm.msRequestFullscreen();
            }
            else if (docElm.mozRequestFullScreen) {
                docElm.mozRequestFullScreen();
            }
            else if (docElm.webkitRequestFullScreen) {
                docElm.webkitRequestFullScreen();
            }
        }, false);
    }

    var cancelFullScreen = document.getElementById("cancel-fullscreen");
    if (cancelFullScreen) {
        cancelFullScreen.addEventListener("click", function () {
            if (document.exitFullscreen) {
                document.exitFullscreen();
            }
            else if (document.msExitFullscreen) {
                document.msExitFullscreen();
            }
            else if (document.mozCancelFullScreen) {
                document.mozCancelFullScreen();
            }
            else if (document.webkitCancelFullScreen) {
                document.webkitCancelFullScreen();
            }
        }, false);
    }


    var fullscreenState = document.getElementById("fullscreen-state");
    if (fullscreenState) {
        document.addEventListener("fullscreenchange", function () {
            fullscreenState.innerHTML = (document.fullscreenElement)? "" : "not ";
        }, false);
        
        document.addEventListener("msfullscreenchange", function () {
            fullscreenState.innerHTML = (document.msFullscreenElement)? "" : "not ";
        }, false);
        
        document.addEventListener("mozfullscreenchange", function () {
            fullscreenState.innerHTML = (document.mozFullScreen)? "" : "not ";
        }, false);
        
        document.addEventListener("webkitfullscreenchange", function () {
            fullscreenState.innerHTML = (document.webkitIsFullScreen)? "" : "not ";
        }, false);
    }


})();




</script>


