<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Free Bootstrap Admin Template : Two Page</title>
    <!-- BOOTSTRAP STYLES-->
    <?php echo add_style('bootstrap');?>
    <?php echo add_style('custom');?>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div id="wrapper">
        <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="adjust-nav">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
					<img  src="<?=base_url('images/vielmi_logo_inside.png')?>" />
					
                </div>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="<?=base_url('dashboar')?>">Home Vielmi</a></li>
                        <li><a href="<?=base_url('propietarios/sugerencias')?>">suguerencias</a></li>
                        <li><a href="<?=base_url('auth/logout')?>">logout</a></li>
                    </ul>
                </div>

            </div>
        </div>
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                    <ul class="nav barra" id="main-menu">
                        <li class="text-center user-image-back" id="img_edificio">
                            <span class"title"><h3><?=$this->user->direccion?></h3></span>     
                            <img src="<?=base_url('images/edificio/'.$this->user->imagen)?>" class="img-circle img-responsive" /> 
                        </li>
                        <li>
                            <?=anchor('propietarios/expensas','<i class="fa fa-newspaper-o"></i> Expensas Mensuales')?>
                        </li>                    
                        <li>
                            <?=anchor('propietarios/movimientos','<i class="fa fa-calculator"></i> Movimientos de Fondos')?>      
                        </li>                    
                        <li>
                            <?=anchor('propietarios/legales','<i class="fa fa-gavel"></i> Legales')?>
                        </li>                   
                         <li>
                            <?=anchor('propietarios/asambleas','<i class="fa fa-comments-o"> </i>Asambleas')?>
                        </li>                   
                         <li>
                            <?=anchor('propietarios/circulares','<i class="fa fa-file-text-o"> </i>Circulares')?>
                        </li>                    
                        <li>
                            <?=anchor('propietarios/inventarios','<i class="fa fa-table"></i> Inventario del Edificio')?>
                        </li>                    
                        <li>
                            <?=anchor('propietarios/encargados','<i class="fa fa-users"></i> Encargados del Edificio')?>
                        </li>                    
                        <li>
                            <?=anchor('propietarios/obras', '<i class="fa fa-money"></i> Pliegos para Cotización');?>
                        </li>                    
                        <li>
                            <?=anchor('propietarios/visitas', '<i class="fa fa-search"></i> Visitas de Inspección');?>
                        </li>                    
                        <li>
                             <?=anchor('propietarios/vencimientos', '<i class="fa fa-calendar-check-o"></i> Vencimientos');?>
                        </li>                    
                        <li>
                            <?=anchor('propietarios/seguros', '<i class="fa fa-lock"></i> Seguros del Edificio');?>
                        </li>                    
                        <li>
                            <?=anchor('propietarios/emergencias', '<i class="fa fa-ambulance"></i> Emergencias');?>
                        </li>                    
                        <li>
                           <?=anchor('propietarios/libro_sueldos', '<i class="fa fa-book"></i> Libros de sueldos');?>
                        </li>
                      
                    </ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">
                 <?php echo $content_for_layout?> 
            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <?php echo add_jscript('jquery');?>
    <?php echo add_jscript('bootstrap.min');?>
    <?php echo add_jscript('jquery.metisMenu');?>
    <?php echo add_jscript('custom');?>


</body>
</html>
