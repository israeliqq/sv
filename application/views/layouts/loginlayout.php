<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="PROYECTO SIVIO - PANORAMA CONJUNTO">
<meta name="author" content="Israel Terán - israeliqq@live.cl">
<title>CCN - SIVIO</title>
<link href="<?php echo base_url();?>tools/bootstrap3/bootstrap.min.css" rel="stylesheet">

<link href="<?php echo base_url();?>tools/bootstrap3/font-awesome/css/font-awesome.min.css" rel="stylesheet">
<style type="text/css">
.btn, .btn.hover, .btn.active{
    background:#D6B777;
    color:#FFFFFF;
    border-color:#D6B777;
}
body {
    background-image: url(<?php echo base_url();?>tools/img/fondo.jpg);
    background-attachment: fixed; 
    background-repeat: repeat;
}


</style>

</head>
<body>
<div class="container">
                    <!-- CONTENIDO -->
                    <?php echo $content_for_layout;?>
                    <!-- FIN CONTENIDO -->
</div>
</body>




<script src="<?php echo base_url();?>tools/jquery.min.js"></script>
<script src="<?php echo base_url();?>tools/bootstrap3/bootstrap.min.js"></script>
</html>
