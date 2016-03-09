
<h3>Evolución de Movimientos</h3>
<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingOne">
      <h4 class="panel-title">
        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
           Mensuales
        </a>   
      </h4>
    </div>
    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
      <div class="panel-body">

        <?php $c = 0; ?>
        <?php foreach ($mensuales->result() as $mensual){ ?>

          <div class="list-group">
            <a href="http://www.administracionvielmisa.com/archivos/fondo/<?=$id_edificio?>/<?=$mensual->archivo?>" 
              class="list-group-item <?=($c == 0)? "active":" "?>">
              <h4 class="list-group-item-heading"><?=($c == 0)? "<span>Ultima Movimiento Mensual :</span>":"Movimiento Mensual :"?> 
                <?=$mensual->fecha?>
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
          Anuales
        </a>
      </h4>
    </div>
    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
      <div class="panel-body">
        <?php $c = 0; ?>
          <?php foreach ($anuales->result() as $anual){ ?>

            <div class="list-group">
              <a href="http://www.administracionvielmisa.com/archivos/fondo/<?=$id_edificio?>/<?=$anual->archivo?>" 
                class="list-group-item <?=($c == 0)? "active":" "?>">
                 <h4 class="list-group-item-heading"><?=($c == 0)? "<span>Ultima Movimiento Anual :</span>":"Movimiento Anual :"?> <?=$anual->fecha?></h4>
              </a>
            </div>

          <?php $c++; ?>

        <?php } ?>  
     </div>
    </div>
  </div>
</div>  