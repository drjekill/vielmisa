<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Administracion Vielmi S.A</title>


    <?php echo add_style('bootstrap.min');?>
    <?php echo add_style('business-casual');?>
    <?php echo add_style('addtohomescreen');?>

    <!-- Fonts -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	<style>
		.title{
		color:#990000;
		}

		.title_small{
		color:#990000;
		}
	</style>
</head>

<body>

    <div class="brand"><img src="<?=base_url('images/logo.png')?>" alt="" class="img-responsive"></div>
    <div class="address-bar">Carlos Pellegrini 739 1"A" | Cap. Fed. Argentina - (5411) 4393-7777</div>

    <!-- Navigation -->
    <nav class="navbar navbar-default" role="navigation">
        <div class="container well">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- navbar-brand is hidden on larger screens, but visible when the menu is collapsed -->
          
					<img src="<?=base_url('images/logo2.png')?>" alt="" class="img-responsive">
		
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <?=anchor('dashboard/index','Home')?>
                    </li>
					<li>
					 <?=anchor('dashboard/consorcios','Consorcios')?>                      
                    </li>
					<li>
                         <?=anchor('dashboard/contact','Cont&aacute;ctanos')?>                       
                    </li>
                    <li>
                        <?=anchor('auth/login','Acceso propietarios')?>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <div class="container">
       <?php echo $content_for_layout?>
    </div>
    <!-- /.container -->

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <p>Copyright &copy; Your Website 2015</p>
                </div>
            </div>
        </div>
    </footer>

    <?php echo add_jscript('jquery');?>
    <?php echo add_jscript('bootstrap.min');?>
	<?php echo add_jscript('addtohomescreen');?>

    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    });
	
	addToHomescreen({
	   startDelay: 5
	});
	
    </script>
</body>

</html>
