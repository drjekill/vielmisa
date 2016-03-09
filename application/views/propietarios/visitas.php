 <div class="panel-group" role="tablist" aria-multiselectable="true">
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingOne">
      <h4 class="panel-title">
        <a role="button">
         Visitas de Inspección
        </a>
      </h4>
    </div>
    <div class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
      <div class="panel-body">
        <?php $c = 0; ?>
          <?php foreach ($visitas->result() as $visita){ ?>
            <div class="list-group">
              <a href="http://www.administracionvielmisa.com/archivos/visita/<?=$id_edificio?>/<?=$visita->archivo?>" 
                class="list-group-item active">
                 <h4 class="list-group-item-heading">
                  (<?=$visita->fecha?>) <strong><?=$visita->archivo?></strong> 
                </h4>
              </a>
            </div>

          <?php $c++; ?>

        <?php } ?>     
      </div>
    </div>
  </div>
<div>  