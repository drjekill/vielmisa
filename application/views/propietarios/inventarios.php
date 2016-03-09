 <div class="panel-group" role="tablist" aria-multiselectable="true">
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingOne">
      <h4 class="panel-title">
        <a role="button">
           Inventario General
        </a>
      </h4>
    </div>
    <div class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
      <div class="panel-body">
        <?php $c = 0; ?>
          <?php foreach ($inventarios->result() as $inventario){ ?>
            <div class="list-group">
              <a href="http://www.administracionvielmisa.com/archivos/inventario/<?=$id_edificio?>/<?=$inventario->inventario?>" 
                class="list-group-item active">
                 <h4 class="list-group-item-heading">
                 <strong>Descargue inventario</strong>
                </h4>
              </a>
            </div>

          <?php $c++; ?>

        <?php } ?>     
      </div>
    </div>
  </div>
<div>  