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
	<h3 class="title">Pliegos para Cotización</br></h3> 
	<hr>
	<dl id="obras">
	  <dt><strong>Pliegos de especificaciones técnicas:</strong></dt>
	  <dd><?=$obra->tareas?></dd>	  
	  <dt><strong>Ley de balcones y fachadas:</strong></dt>
	  <dd><?=$obra->ley?></dd>	  
	  <dt><strong>Otras:</strong></dt>
	  <dd><?=$obra->otros?></dd>	  
	</dl>
	<hr>
</div>	