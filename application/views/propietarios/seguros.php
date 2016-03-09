<style type="text/css">
	.panel-body{
		height: 300px;
		overflow: hidden;
		overflow-x: hidden;
	}
	.obras{
	    display: block;
	    max-width: 1000px;
	    margin: auto;
	    margin-top: 72px;
	}
	.obras dd{
		margin-left: 25px;
	}	

	.obras dt{
		color: #900;
	}
</style>

<div class="container">
	<hr>
	<h3 class="title">Seguro del edificio</br></h3> 
	<hr>
	<dl class="obras">
	  <dt><strong>Compañia:</strong></dt>
	  <dd><?=$edificio->cnia?></dd>	  
	  <dt><strong>Nº Poliza:</strong></dt>
	  <dd><?=$edificio->poliza?></dd>	  
	  <dt><strong>Vigencia:</strong></dt>
	  <dd><?=$edificio->vigencia?></dd>	  
	  <dt><strong>Cobertura:</strong></dt>
	  <dd><?=$edificio->cobertura?></dd>	    
	</dl>
<hr>		
	<h3 class="title">Seguros del Personal</br></h3> 
<hr>
	<dl class="obras">
	  <dt><strong>ART:</strong></dt>
	  <dd><?=$personal->art?></dd>	  
	  <dt><strong>Teléfono:</strong></dt>
	  <dd><?=$personal->telefono?></dd>	   
	</dl>	
<hr>
	<dl class="obras">
	  <dt><strong>Vida Obligatorio:</strong></dt>
	  <dd></dd>	  
	  <dt><strong>Compañia:</strong></dt>
	  <dd><?=$personal->obligatorio_cnia?></dd>	  
	  <dt><strong>Nº Poliza:</strong></dt>
	  <dd><?=$personal->obligatorio_poliza?></dd>	  
	  <dt><strong>Vigencia:</strong></dt>
	  <dd><?=$personal->obligatorio_vigencia?></dd>
	</dl>	
<hr>
	<dl class="obras">
	  <dt><strong>Vida Colectivo:</strong></dt>
	  <dd></dd>	  
	  <dt><strong>Compañia:</strong></dt>
	  <dd><?=$personal->colectivo_cnia?></dd>	  
	  <dt><strong>Nº Poliza:</strong></dt>
	  <dd><?=$personal->colectivo_poliza?></dd>	  
	  <dt><strong>Vigencia:</strong></dt>
	  <dd><?=$personal->colectivo_vigencia?></dd>
	</dl>	
<hr>

</div>	