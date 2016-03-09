 <div class="panel-group" role="tablist" aria-multiselectable="true">
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingOne">
      <h4 class="panel-title">
        <a role="button">
          Circulares
        </a>
      </h4>
    </div>
    <div class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
      <div class="panel-body">
        <?php $c = 0; ?>
          <?php foreach ($circulares->result() as $circular){ ?>
            <div class="list-group">
              <a href="http://www.administracionvielmisa.com/archivos/circular/<?=$id_edificio?>/<?=$circular->archivo?>" 
                class="list-group-item active">
                 <h4 class="list-group-item-heading">
                  (<?=$circular->fecha?>) <strong><?=$circular->titulo?></strong> 
                </h4>
              </a>
            </div>

          <?php $c++; ?>

        <?php } ?>     
      </div>
    </div>
  </div>
<div>  