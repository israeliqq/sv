
<style type="text/css">
    
.botonera{
background: rgba(89,89,89,1);
background: rgba(3,3,3,1);
background: -moz-linear-gradient(left, rgba(3,3,3,1) 0%, rgba(3,3,3,1) 0%, rgba(3,3,3,1) 50%, rgba(3,3,3,1) 51%, rgba(3,3,3,1) 71%, rgba(3,3,3,1) 100%);
background: -webkit-gradient(left top, right top, color-stop(0%, rgba(3,3,3,1)), color-stop(0%, rgba(3,3,3,1)), color-stop(50%, rgba(3,3,3,1)), color-stop(51%, rgba(3,3,3,1)), color-stop(71%, rgba(3,3,3,1)), color-stop(100%, rgba(3,3,3,1)));
background: -webkit-linear-gradient(left, rgba(3,3,3,1) 0%, rgba(3,3,3,1) 0%, rgba(3,3,3,1) 50%, rgba(3,3,3,1) 51%, rgba(3,3,3,1) 71%, rgba(3,3,3,1) 100%);
background: -o-linear-gradient(left, rgba(3,3,3,1) 0%, rgba(3,3,3,1) 0%, rgba(3,3,3,1) 50%, rgba(3,3,3,1) 51%, rgba(3,3,3,1) 71%, rgba(3,3,3,1) 100%);
background: -ms-linear-gradient(left, rgba(3,3,3,1) 0%, rgba(3,3,3,1) 0%, rgba(3,3,3,1) 50%, rgba(3,3,3,1) 51%, rgba(3,3,3,1) 71%, rgba(3,3,3,1) 100%);
background: linear-gradient(to right, rgba(3,3,3,1) 0%, rgba(3,3,3,1) 0%, rgba(3,3,3,1) 50%, rgba(3,3,3,1) 51%, rgba(3,3,3,1) 71%, rgba(3,3,3,1) 100%);
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#030303', endColorstr='#030303', GradientType=1 );
}

</style>

<br><br>
<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="panel panel-default" >
                <div class="panel-body fondo">
                    <?php echo form_open(null, array('name'=>'form'));?>
                        <fieldset>
                        <div align="center">
                            <img class="img-circle img-responsive" id="img_logo" src="<?php echo base_url();?>tools/img/ccns.png">
                        </div>
                        <hr>
<!-- MENSAJES ALERTAS -->
<?php if($this->session->flashdata('mensaje')!=''){ ?>
        <div class="alert lert-dismissable alert-<?php echo $this->session->flashdata('css')?> a" id="myAlert">
            <?php echo $this->session->flashdata('mensaje')?>
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>   
        </div>
<?php } ?>
<!-- MENSAJES ALERTAS -->

                            <div class="form-group">
                                <label for="usuario"><span class="fa fa-user"></span> Usuario</label>
                                <input class="form-control" placeholder="Ingrese Usuario" name="usuario" type="text" autofocus>
                            </div>
                            <div class="form-group">
                                <label for="pass"><span class="fa fa-key"></span> Password</label>
                                <input class="form-control" placeholder="Ingrese Password" name="pass" type="password" value="">
                            </div>
                            <!-- BOTON LOGIN -->

                            <button type="submit" class="btn btn-lg btn-block botonera" value="Entrar"><span class="fa fa-unlock-alt"></span> Entrar</button>

                            <!-- FIN BOTON LOGIN -->
                   
                        </fieldset>
                    <?php echo form_close();?>
                </div>
            </div>
        </div>
    </div>
</div>


