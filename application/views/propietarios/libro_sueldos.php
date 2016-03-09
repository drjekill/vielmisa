 <div class="panel-group" role="tablist" aria-multiselectable="true">
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingOne">
      <h4 class="panel-title">
        <a role="button">
          Libro sueldos
        </a>
      </h4>
    </div>
    <div class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
      <div class="panel-body">
        <?php $c = 0; ?>
          <?php foreach ($libros->result() as $libro){ ?>
            <div class="list-group">
              <a href="http://www.administracionvielmisa.com/archivos/libro/<?=$id_edificio?>/<?=$libro->archivo?>" 
                class="list-group-item active">
                 <h4 class="list-group-item-heading">
                  (<?=$libro->fecha?>) <strong><?=$libro->archivo?></strong> 
                </h4>
              </a>
            </div>

          <?php $c++; ?>

        <?php } ?>     
      </div>
    </div>
  </div>
<div>  