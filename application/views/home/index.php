<style type="text/css">
    
.fondoclass{
/* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#ffffff+0,f1f1f1+50,e1e1e1+51,f6f6f6+100;White+Gloss+%231 */
background: rgb(255,255,255); /* Old browsers */
background: -moz-linear-gradient(-45deg, rgba(255,255,255,1) 0%, rgba(241,241,241,1) 50%, rgba(225,225,225,1) 51%, rgba(246,246,246,1) 100%); /* FF3.6-15 */
background: -webkit-linear-gradient(-45deg, rgba(255,255,255,1) 0%,rgba(241,241,241,1) 50%,rgba(225,225,225,1) 51%,rgba(246,246,246,1) 100%); /* Chrome10-25,Safari5.1-6 */
background: linear-gradient(135deg, rgba(255,255,255,1) 0%,rgba(241,241,241,1) 50%,rgba(225,225,225,1) 51%,rgba(246,246,246,1) 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ffffff', endColorstr='#f6f6f6',GradientType=1 ); /* IE6-9 fallback on horizontal gradient */


</style>



<br>


<div class="row">
    <div class="col-md-6">
        <a href="<?php echo base_url();?>organo/?org=<?php echo $this->session->userdata("organo");?>" >
            <div class="panel fondoclass">
                <div class="panel-heading">
                    <div class="row" align="center" style="color:#333333;">
                        <i class="fa fa-pencil-square fa-5x"></i><h1><b>EDITAR <?php echo $this->session->userdata("organo");?> </b></h1>
                    </div>
                </div>
            </div>
        </a>
    </div>



    <div class="col-md-6">
        <div class="row">
            <div class="col-md-6">
                <a href="<?php echo base_url();?>admin/ritmo">
                    <div class="panel fondoclass">
                        <div class="panel-heading">
                            <div class="row" align="center" style="color:#333333;">
                                <h4><b> <i class="fa fa-search"></i> RITMO BATALLA</b></h4>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-6">
                <a href="<?php echo base_url();?>briefing">
                    <div class="panel fondoclass">
                        <div class="panel-heading">
                            <div class="row" align="center" style="color:#333333;">
                                <h4><b> <i class="fa fa-calendar" aria-hidden="true"></i> HISTORICO</b></h4>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-6">
                <a href="#">
                    <div class="panel fondoclass">
                        <div class="panel-heading">
                            <div class="row" align="center" style="color:#333333;">
                                <h4><b> <i class="fa fa-envelope" aria-hidden="true"></i> ENLACE EXTERNO</b></h4>
                            </div>
                        </div>
                    </div>
                </a>
            </div>


            <div class="col-md-6">
                <a href="<?php echo base_url();?>admin/frecuencias">
                    <div class="panel fondoclass">
                        <div class="panel-heading">
                            <div class="row" align="center" style="color:#333333;">
                                <h4><b><i class="fa fa-table" aria-hidden="true"></i> TABLA DE FRECUENCIAS</b></h4>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>


<div class="row">
    <div class="col-lg-3 col-md-6">
        <div class="panel fondoclass">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3"><img src="<?php echo base_url();?>/tools/img/LOGO/omtn.png" height="80"></i></div>
                    <div class="col-xs-9 text-right">
                    <a href="<?php echo base_url();?>repo?org=omtn"><div class="huge"><b><i class="fa fa-file-pdf-o"></i> PDF</b></div></a>
                        <div><h3><b>OMTN</b></h3></div>
                    </div>
                </div>
            </div>
            <a href="<?php echo base_url();?>consultas/?org=omtn">
                <div class="panel-footer">
                    <span class="pull-left"><b>CONSULTAR</b></span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>



    <div class="col-lg-3 col-md-6">
        <div class="panel fondoclass">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3"><img src="<?php echo base_url();?>/tools/img/LOGO/omn.png" height="80"></i></div>
                    <div class="col-xs-9 text-right">
                    <a href="<?php echo base_url();?>repo/?org=omn""><div class="huge"><b><i class="fa fa-file-pdf-o"></i> PDF</b></div></a>
                        <div><h3><b>OMN</b></h3></div>
                    </div>
                </div>
            </div>
            <a href="<?php echo base_url();?>consultas/?org=omn">
                <div class="panel-footer">
                    <span class="pull-left"><b>CONSULTAR</b></span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>   



    <div class="col-lg-3 col-md-6">
        <div class="panel fondoclass">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3"><img src="<?php echo base_url();?>/tools/img/LOGO/oma.png" height="80"></i></div>
                    <div class="col-xs-9 text-right">
                    <a href="<?php echo base_url();?>repo/?org=oma""><div class="huge"><b><i class="fa fa-file-pdf-o"></i> PDF</b></div></a>
                        <div><h3><b>OMA</b></h3></div>
                    </div>
                </div>
            </div>
            <a href="<?php echo base_url();?>consultas/?org=oma">
                <div class="panel-footer">
                    <span class="pull-left"><b>CONSULTAR</b></span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>




    <div class="col-lg-3 col-md-6">
        <div class="panel fondoclass">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3"><img src="<?php echo base_url();?>/tools/img/LOGO/omtse.png" height="80"></i></div>
                    <div class="col-xs-9 text-right">
                    <a href="<?php echo base_url();?>repo/?org=omtse""><div class="huge"><b><i class="fa fa-file-pdf-o"></i> PDF</b></div></a>
                        <div><h3><b>OMTSE</b></h3></div>
                    </div>
                </div>
            </div>
            <a href="<?php echo base_url();?>consultas/?org=omtse">
                <div class="panel-footer">
                    <span class="pull-left"><b>CONSULTAR</b></span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>


</div>
<!-- /.row -->


<div class="row">


  <div class="col-lg-3 col-md-6">
        <div class="panel fondoclass">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3"><img src="<?php echo base_url();?>/tools/img/LOGO/omoe.png" height="80"></i></div>
                    <div class="col-xs-9 text-right">
                    <a href="<?php echo base_url();?>repo/?org=omoe""><div class="huge"><b><i class="fa fa-file-pdf-o"></i> PDF</b></div></a>
                        <div><h3><b>OMOE</b></h3></div>
                    </div>
                </div>
            </div>
            <a href="<?php echo base_url();?>consultas/?org=omoe">
                <div class="panel-footer">
                    <span class="pull-left"><b>CONSULTAR</b></span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>



    <div class="col-lg-3 col-md-6">
        <div class="panel fondoclass">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3"><img src="<?php echo base_url();?>/tools/img/LOGO/zzcc.png" height="80"></i></div>
                    <div class="col-xs-9 text-right">
                    <a href="<?php echo base_url();?>repo/?org=zzcc""><div class="huge"><b><i class="fa fa-file-pdf-o"></i> PDF</b></div></a>
                        <div><h3><b>ZZCC</b></h3></div>
                    </div>
                </div>
            </div>
            <a href="<?php echo base_url();?>consultas/?org=zzcc"">
                <div class="panel-footer">
                    <span class="pull-left"><b>CONSULTAR</b></span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>



    <div class="col-lg-3 col-md-6">
        <div class="panel fondoclass">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3"><img src="<?php echo base_url();?>/tools/img/LOGO/ft70.png" height="80"></i></div>
                    <div class="col-xs-9 text-right">
                    <a href="<?php echo base_url();?>repo/?org=ft70""><div class="huge"><b><i class="fa fa-file-pdf-o"></i> PDF</b></div></a>
                        <div><h3><b>FT-70</b></h3></div>
                    </div>
                </div>
            </div>
            <a href="<?php echo base_url();?>consultas/?org=ft70">
                <div class="panel-footer">
                    <span class="pull-left"><b>CONSULTAR</b></span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>


    <div class="col-lg-3 col-md-6">
        <div class="panel fondoclass">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3"><img src="<?php echo base_url();?>/tools/img/LOGO/reserva.png" height="80"></i></div>
                    <div class="col-xs-9 text-right">
                    <a href="<?php echo base_url();?>repo/?org=reserva"><div class="huge"><b><i class="fa fa-file-pdf-o"></i> PDF</b></div></a>
                        <div><h3><b>RESERVA</b></h3></div>
                    </div>
                </div>
            </div>
            <a href="<?php echo base_url();?>consultas/?org=reserva"">
                <div class="panel-footer">
                    <span class="pull-left"><b>CONSULTAR</b></span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>



</div>
<!-- /.row -->



<div class="row">



    <div class="col-lg-3 col-md-6">
        <div class="panel fondoclass">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3"><img src="<?php echo base_url();?>/tools/img/LOGO/doc.png" height="80"></i></div>
                    <div class="col-xs-9 text-right">
                    <a href="<?php echo base_url();?>repo/?org=doc""><div class="huge"><b><i class="fa fa-file-pdf-o"></i> PDF</b></div></a>
                        <div><h3><b>DOC</b></h3></div>
                    </div>
                </div>
            </div>
            <a href="<?php echo base_url();?>consultas/?org=doc">
                <div class="panel-footer">
                    <span class="pull-left"><b>CONSULTAR</b></span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>


    <div class="col-lg-3 col-md-6">
        <div class="panel fondoclass">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3"><img src="<?php echo base_url();?>/tools/img/LOGO/c1.png" height="80"></i></div>
                    <div class="col-xs-9 text-right">
                    <a href="<?php echo base_url();?>consultas/?org=c1""><div class="huge"><b><i class="fa fa-file-pdf-o"></i> PDF</b></div></a>
                        <div><h3><b>C1</b></h3></div>
                    </div>
                </div>
            </div>
            <a href="<?php echo base_url();?>consultas/?org=c1">
                <div class="panel-footer">
                    <span class="pull-left" ><b>CONSULTAR</b></span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>




    <div class="col-lg-3 col-md-6">
        <div class="panel fondoclass">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3"><img src="<?php echo base_url();?>/tools/img/LOGO/c2.png" height="80"></i></div>
                    <div class="col-xs-9 text-right">
                    <a href="<?php echo base_url();?>repo/?org=c2""><div class="huge"><b><i class="fa fa-file-pdf-o"></i> PDF</b></div></a>
                        <div><h3><b>C2</b></h3></div>
                    </div>
                </div>
            </div>
            <a href="<?php echo base_url();?>consultas/?org=c2">
                <div class="panel-footer">
                    <span class="pull-left"><b>CONSULTAR</b></span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>


    <div class="col-lg-3 col-md-6">
        <div class="panel fondoclass">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3"><img src="<?php echo base_url();?>/tools/img/LOGO/c4.png" height="80"></i></div>
                    <div class="col-xs-9 text-right">
                    <a href="<?php echo base_url();?>repo/?org=c4""><div class="huge"><b><i class="fa fa-file-pdf-o"></i> PDF</b></div></a>
                        <div><h3><b>C4</b></h3></div>
                    </div>
                </div>
            </div>
            <a href="<?php echo base_url();?>consultas/?org=c4">
                <div class="panel-footer">
                    <span class="pull-left"><b>CONSULTAR</b></span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>

</div>
<!-- /.row -->
