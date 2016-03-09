<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Scrolling Nav - Start Bootstrap Template</title>

    <?php echo add_style('bootstrap.min');?>
    <?php echo add_style('business-casual');?>
    <?php echo add_style('addtohomescreen');?>
    <?php echo add_style('scrolling-nav');?>
	
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
		font-size: 25px;
		}

		.title_small{
		color:#990000;
		}
		.carousel{
		    width: 408px;
			height: 236px;
			padding: initial;
			padding-top: 24px;
		}
		hr {
			max-width: 100% !important;
			border-color: #999999;
		}
	</style>

</head>
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

    <nav class="navbar navbar-default navbar-fixed-top well" role="navigation">
        <div class="container">
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Administracion vielmisa</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">
				<img src="<?=base_url('images/logo.png')?>" style="width:200px" class="pull-left img-responsive">
				</a>
            </div>

            <div class="collapse navbar-collapse navbar-ex1-collapse">
				<img src="<?=base_url('images/logo.png')?>" style="width:300px" id="logo" class="pull-left img-responsive">
                <ul class="nav navbar-nav pull-right">
                    <li class="hidden">
                        <a class="page-scroll" href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#laempresa">La Empresa</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#services">Services</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
	<div class="container">
		<section id="intro" class="section">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
					
						<hr>
						<div class=""><img src="<?=base_url('images/logo.png')?>" alt="" class="img-responsive"></div>
						<div class="address-bar">Carlos Pellegrini 739 1"A" | Cap. Fed. Argentina - (5411) 4393-7777</div>
						<hr>						
					</div>
				</div>
			</div>
		</section>    

		<section id="laempresa" class="section">
			<div class="container">
				<div class="row">
					<div>
						<div class="col-lg-12 text-center">

								<hr>
								<h2 class="intro-text text-center  title_small">
								<strong>La Empresa</strong>
								</h2>
								<hr>
															
								<div id="carousel-example-generic" class="carousel slide img-responsive img-border img-left" data-interval="2000">
								<!-- Indicators -->
									<ol class="carousel-indicators hidden-xs">
										<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
										<li data-target="#carousel-example-generic" data-slide-to="1"></li>
										<li data-target="#carousel-example-generic" data-slide-to="2"></li>
										<li data-target="#carousel-example-generic" data-slide-to="3"></li> 
										<li data-target="#carousel-example-generic" data-slide-to="4"></li>
										<li data-target="#carousel-example-generic" data-slide-to="6"></li>
										<li data-target="#carousel-example-generic" data-slide-to="7"></li>
									</ol>
									

									<!-- Wrapper for slides -->
									<div class="carousel-inner">
									
										<div class="item active">
											<img class="img-responsive img-full" src="<?=base_url('images/empresa2.jpg')?>" 
											width="400" height="226" alt="">
										</div>
										<div class="item">
											<img class="img-responsive img-full" src="<?=base_url('images/slide-1.jpg')?>" alt="">
										</div>	
										<div class="item">
											<img class="img-responsive img-full" src="<?=base_url('images/slide-2.jpg')?>" alt="">
										</div>
										<div class="item">
											<img class="img-responsive img-full" src="<?=base_url('images/slide-3.jpg')?>" alt="">
										</div>                    
										<div class="item">
											<img class="img-responsive img-full" src="<?=base_url('images/slide-4.jpg')?>" alt="">
										</div>                    
										<div class="item">
											<img class="img-responsive img-full" src="<?=base_url('images/slide-5.jpg')?>" alt="">
										</div>                    
										<div class="item">
											<img class="img-responsive img-full" src="<?=base_url('images/slide-6.jpg')?>" alt="">
										</div>
									</div>
									

									<!-- Controls -->
									<a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
										<span class="icon-prev"></span>
									</a>
									<a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
										<span class="icon-next"></span>
									</a>
								</div>
								
								<hr class="visible-xs">
								<div style="text-align:-webkit-auto;">
	<p>
		Nuestra empresa fue fundada hace veinte a&ntilde;os por Amilcar M. Vielmi, Empresario y Lic. en filosof&iacute;a. 
		Hoy cuenta con un cuerpo profesional de s&oacute;lida experiencia en administraci&oacute;n de propiedades, consorcios, 
		complejos y actividades inmobiliarias, que trabaja en forma infatigable al servicio de sus clientes.
		Los valores que nos caracterizan son superaci&oacute;n diaria, integridad, seriedad, responsabilidad, compromiso y veracidad.</p>
	<p>
		Contamos con un amplio equipo de trabajo con experiencia y trayectoria que permite administrar consorcios 
		con absoluta idoneidad y eficiencia.
		Sabemos que los tiempos de hoy en d&iacute;a nos exigen una superaci&oacute;n constante, por eso y 
		con el fin de brindar una atenci&oacute;n con excelencia, nuestros clientes cuentan con un sistema de consultas on 
		line para que al instante puedan tener toda la informaci&oacute;n que necesitan de su consorcio 
		(expensas, horarios del personal, seguros, visitas de inspecci&oacute;n, etc.)
	</p>

	<p>
		<strong>Administraci&oacute;n Vielmi S.A. es miembro de:</strong>
		C&aacute;mera di Comercio Italiana nella Republica Argentina
		C&aacute;mara Argentina de la Propiedad Horizontal y Actividades Inmobiliarias.
	</p>

								</div>

							<hr>
							
						</div>
					</div>
				</div> 
			</div>
		</section>
		
		
	</div>
	
	
    <?php echo add_jscript('jquery');?>
    <?php echo add_jscript('bootstrap.min');?>
	<?php echo add_jscript('addtohomescreen');?>
	<?php echo add_jscript('jquery.easing.min');?>
	<?php echo add_jscript('scrolling-nav');?>


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