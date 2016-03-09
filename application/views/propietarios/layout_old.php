<!DOCTYPE html>
<html lang="en">
  <head>
<?php header('Content-Type: text/html; charset=utf-8'); ?>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Administracion vielmi sa</title>



    <?php echo add_style('bootstrap.min');?>
    <?php echo add_style('bootstrap-theme.min');?>
    <?php echo add_style('estilos');?>

    <?php echo add_jscript('jquery');?>
    <?php echo add_jscript('bootstrap.min');?>
    
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.1/themes/pepper-grinder/jquery-ui.css" />
    <style type="text/css">
        body {
         /* min-height: 2000px;*/
          padding-top: 70px;
        }
        .primary{
          margin-top: 50px;
        }
    </style>
  </head>

  <body>

    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
           <img  src="<?=base_url('images/vielmi_logo_inside.png')?>" />
        </div>
        <div class="navbar-collapse collapse navbar-right">
          <ul class="nav navbar-nav barra">
            <li><a href="<?=base_url('dashboard')?>">Home Vielmi</a></li>
            <li><a href="<?=base_url('propietarios')?>">Home Propietarios</a></li>
            <li><a href="#">Expensas</a></li>
            <li><a href="<?=base_url()?>calendario/espacio">Reservas</a></li>
            <li><a href="<?=base_url('propietarios/sugerencias')?>">Sugerencias</a></li>
            <li><a href="#contact">Contacto</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>

    <div class="container primary">        
        <div class="row ">
          <div class="col-md-4 well">

            <img  src="<?=base_url('images/edificio/'.$this->user->imagen)?>" class="media-object col-md-6" width="200" height="200" />
            <div class="col-md-6">
              <address>
                <strong>Torre 2</strong><br>
               <?=$this->user->direccion?><br>
                San Francisco, CA 94107<br>
                <abbr title="Phone">P:</abbr> (123) 456-7890
              </address>

              <address>
                <strong>Full Name</strong><br>
                <a href="mailto:#">first.last@example.com</a>
              </address>
            </div>

          </div>
          <div class="col-md-8">
            <div class="jumbotron">
                <?php echo $content_for_layout?>
            </div>
          </div>
        </div>
    </div>    
  </body>
</html>
