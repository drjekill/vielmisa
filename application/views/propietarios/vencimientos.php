<style type="text/css">
	.panel-body{
		height: 300px;
		overflow: hidden;
		overflow-x: hidden;
	}
	#obras{
	    display: block;
	    max-width: 1000px;
	    margin: auto;
	    margin-top: 72px;
	}
	#obras dd{
		margin-left: 25px;
	}	

	#obras dt{
		color: #900;
	}
</style>

<div class="container">
	<hr>
		<h3 class="title">Ficha Técnica de Vencimientos</br></h3> 
	<hr>
	<dl id="obras">
	  <dt><strong>Matafuegos:</strong></dt>
	  <dd><?=$vencimiento->matafuego?></dd>	  
	  <dt><strong>Limpieza de tanques:</strong></dt>
	  <dd><?=$vencimiento->limpieza?></dd>	  
	  <dt><strong>Ascensores:</strong></dt>
	  <dd><?=$vencimiento->ascensor?></dd>	  
	  <dt><strong>Desinfección:</strong></dt>
	  <dd><?=$vencimiento->desinfeccion?></dd>	  
	  <dt><strong>Otros:</strong></dt>
	  <dd><?=$vencimiento->otros?></dd>	  
	</dl>
	<hr>
</div>	