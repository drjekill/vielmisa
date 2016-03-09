 <div class="panel-group" role="tablist" aria-multiselectable="true">
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingOne">
      <h4 class="panel-title">
        <a role="button">
           Asambleas Ordinarias y Extraordinarias
        </a>
      </h4>
    </div>
    <div class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
      <div class="panel-body">
        <?php $c = 0; ?>
          <?php foreach ($asambleas->result() as $asamblea){ ?>
            <div class="list-group">
              <a href="http://www.administracionvielmisa.com/archivos/asamblea/<?=$id_edificio?>/<?=$asamblea->archivo?>" 
                class="list-group-item active">
                 <h4 class="list-group-item-heading">
                  (<?=$asamblea->fecha?>) <strong><?=$asamblea->titulo?></strong> 
                </h4>
              </a>
            </div>

          <?php $c++; ?>

        <?php } ?>     
      </div>
    </div>
  </div>
<div>  