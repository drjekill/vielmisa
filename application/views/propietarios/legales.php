<script type="text/javascript">
$( document ).ready(function() {
    $(".legal").click(function(){
      var id_legal = $(this).attr('rel');
      $.post('<?=base_url("propietarios/get_legal")?>', 
          {id_legal:id_legal},
          function(data){
             legal = $.parseJSON(data);
             $("#title").html(legal.titulo);  
             $("#body").html(legal.informe);
             $('#myModal').modal('show');
          }
        );
    })
});

</script>

<h3>Legales</h3>
<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingOne">
      <h4 class="panel-title">
        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Juicios del Consorcio
        </a>   
      </h4>
    </div>
    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
      <div class="panel-body">
        <?php $c = 0; ?>
          <?php foreach ($legales->result() as $legal){ ?>
            <div class="list-group">
              <a href="#" class="list-group-item active legal" rel="<?=$legal->id_legal?>">
                 <h4 class="list-group-item-heading">
                  (<?=$legal->fecha?>) <strong><?=$legal->titulo?></strong> 
                </h4>
              </a>
            </div>
          <?php $c++; ?>

        <?php } ?>  
     </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingTwo">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Contratos y Reglamentos
        </a>
      </h4>
    </div>
    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
      <div class="panel-body">
        <?php $c = 0; ?>
          <?php foreach ($contratos->result() as $contrato){ ?>
            <div class="list-group">
              <a href="http://www.administracionvielmisa.com/archivos/legales_contratos/<?=$id_edificio?>/<?=$contrato->archivo?>" class="list-group-item active">
                 <h4 class="list-group-item-heading">
                  (<?=$contrato->fecha?>)<strong><?=$contrato->titulo?></strong> 
                </h4>
              </a>
            </div>

          <?php $c++; ?>

        <?php } ?>  
     </div>
    </div>
  </div>
</div>

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
      <div class="modal-body" id="body"></div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
