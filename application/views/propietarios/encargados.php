<style type="text/css">

   address strong{
      color: #900 !important;
      font-family: Verdana,Arial,Helvetica,sans-serif !important;
      font-size: 17px !important;
      font-weight: bold;
   }

</style>
   <?php echo add_jscript('jquery');?>
<script type="text/javascript">
  $( document ).ready(function() {

      $(".encargado").click(function(){
        var id_encargado = $(this).attr('rel');
        $.post('<?=base_url("propietarios/get_encargado")?>', 
            {id_encargado:id_encargado},
            function(data){
               encargado = $.parseJSON(data);
               $("#name").html(encargado.nombre);  
               $("#horario").html(encargado.horario);  
               $("#recibos").html(encargado.recibos);  
               $("#vacaciones").html(encargado.vacaciones);  
               $("#art").html(encargado.art);  
               $("#seguros").html(encargado.seguros);  
               $("#medicina").html(encargado.medicina);  
               $("#ropa").html(encargado.ropa);
               $("#cronograma").attr("href", "http://www.administracionvielmisa.com/archivos/circular/<?=$id_edificio?>/"+encargado.cronograma);
               $('#myModal').modal('show');
            }
          ); 
      })
      
  });
</script>

 <div class="panel-group" role="tablist" aria-multiselectable="true">
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingOne">
      <h4 class="panel-title">
        <a role="button">
          Encargados del Edificio
        </a>
      </h4>
    </div>
    <div class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
      <div class="panel-body">
        <?php foreach ($encargados->result() as $encargado){ ?>
            <div class="list-group">
              <a href="#" class="list-group-item encargado" rel="<?=$encargado->id_encargado?>">
                 <h4 class="list-group-item-heading">
                  <span class="glyphicon glyphicon glyphicon-user" aria-hidden="true"></span> <strong><?=$encargado->nombre?></strong> 
                </h4>
              </a>
            </div>
        <?php } ?>     
      </div>
    </div>
  </div>
<div>

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title" id="myModalLabel">
          <div id="title"></div>
        </h4>
      </div>
      <div class="modal-body" id="body">
          <div class="media">
            <div class="media-left">
              <a href="#">
                <img class="media-object" data-src="holder.js/64x64" alt="64x64" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iNjQiIGhlaWdodD0iNjQiIHZpZXdCb3g9IjAgMCA2NCA2NCIgcHJlc2VydmVBc3BlY3RSYXRpbz0ibm9uZSI+PCEtLQpTb3VyY2UgVVJMOiBob2xkZXIuanMvNjR4NjQKQ3JlYXRlZCB3aXRoIEhvbGRlci5qcyAyLjYuMC4KTGVhcm4gbW9yZSBhdCBodHRwOi8vaG9sZGVyanMuY29tCihjKSAyMDEyLTIwMTUgSXZhbiBNYWxvcGluc2t5IC0gaHR0cDovL2ltc2t5LmNvCi0tPjxkZWZzPjxzdHlsZSB0eXBlPSJ0ZXh0L2NzcyI+PCFbQ0RBVEFbI2hvbGRlcl8xNGZhOTFiODQyZCB0ZXh0IHsgZmlsbDojQUFBQUFBO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1mYW1pbHk6QXJpYWwsIEhlbHZldGljYSwgT3BlbiBTYW5zLCBzYW5zLXNlcmlmLCBtb25vc3BhY2U7Zm9udC1zaXplOjEwcHQgfSBdXT48L3N0eWxlPjwvZGVmcz48ZyBpZD0iaG9sZGVyXzE0ZmE5MWI4NDJkIj48cmVjdCB3aWR0aD0iNjQiIGhlaWdodD0iNjQiIGZpbGw9IiNFRUVFRUUiLz48Zz48dGV4dCB4PSIxNC41IiB5PSIzNi41Ij42NHg2NDwvdGV4dD48L2c+PC9nPjwvc3ZnPg==" data-holder-rendered="true" style="width: 64px; height: 64px;">
              </a>
            </div>
            <div class="media-body">
              <h4 class="media-heading"> Legajo del personal</h4>
              <address>
                <strong>Nombre :</strong> <span id="name"></span></br>  
                <strong>Horario :</strong> <span id="horario"></span></br>  
                <strong>Recibos de sueldo :</strong>  <span id="recibos"></span></br>  
                <strong>Vacaciones :</strong>  <span id="vacaciones"></span></br>  
                <strong>ART :</strong>  <span id="art"></span></br>  
                <strong>Seguros del personal :</strong>  <span id="seguros"></span></br>  
                <strong>Medicina laboral :</strong>  <span id="medicina"></span></br>  
                <strong>Ropa Reglamentaria :</strong>  <span id="ropa"></span></br>  
                  <a id="cronograma" href="">
                   Descarge cronograma
                  </a>
            </address>
            </div>
          </div>  
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div> 
