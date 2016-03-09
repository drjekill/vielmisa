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
		<h3 class="title">Emergencias</br>
			<small>Ante cualquier caso comuniquese con la administración al 4393-7777 (rot)</small>
		 </h3> 
 	<hr>
	<dl id="obras">
	  <dt><strong>Plomeria:</strong></dt>
	  <dd><?=$emergencia->plomeria?></dd>	  
	  <dt><strong>Electricidad:</strong></dt>
	  <dd><?=$emergencia->electricista?></dd>	  
	  <dt><strong>Cerrajería:</strong></dt>
	  <dd><?=$emergencia->cerrajeria?></dd>	  
	  <dt><strong>Ascensores y Bombas:</strong></dt>
	  <dd><?=$emergencia->ascensor_bomba?></dd>	  
	  <dt><strong>Destapaciones y Desagotes:</strong></dt>
	  <dd><?=$emergencia->destapaciones_desagote?></dd>	 	  

	  <dt><strong>Gasista:</strong></dt>
	  <dd><?=$emergencia->gasista?></dd>	  
	  <dt><strong>Calderista:</strong></dt>
	  <dd><?=$emergencia->calderista?></dd>	  
	  <dt><strong>Fumigación:</strong></dt>
	  <dd><?=$emergencia->fumiga?></dd>	  
	  <dt><strong>ART:</strong></dt>
	  <dd><?=$emergencia->art?></dd>	  
	  <dt><strong>Comisaría:</strong></dt>
	  <dd><?=$emergencia->comisaria?></dd>	  	  
	  <dt><strong>Bomberos:</strong></dt>
	  <dd><?=$emergencia->bomberos?></dd>	  
	  <dt><strong>SAME:</strong></dt>
	  <dd><?=$emergencia->sane?></dd>	  
	</dl>
	<hr>
</div>	