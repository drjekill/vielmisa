 <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingOne">
      <h4 class="panel-title">
        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
           Liquidación mensual
        </a>
      </h4>
    </div>
    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
      <div class="panel-body">

        <?php $c = 0; ?>
        <?php foreach ($liquidaciones->result() as $liquidacion){ ?>

          <div class="list-group">
            <a href="http://www.administracionvielmisa.com/archivos/liquidacion/<?=$id_edificio?>/<?=$liquidacion->archivo?>" 
              class="list-group-item">
              <h4 class="list-group-item-heading"><?=($c == 0)? "<span>Ultima Liquidación :</span>":"Liquidación :"?> <?=$liquidacion->fecha?></h4>
              
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
          Prorrateo de expensas
        </a>
      </h4>
    </div>
    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
      <div class="panel-body">
        <?php $c = 0; ?>
          <?php foreach ($prorrateos->result() as $prorrateo){ ?>

            <div class="list-group">
              <a href="http://www.administracionvielmisa.com/archivos/prorrateo/<?=$id_edificio?>/<?=$prorrateo->archivo?>" 
                class="list-group-item <?=($c == 0)? "active":" "?>">
                <h4 class="list-group-item-heading">Prorrateo <?=$prorrateo->fecha?></h4>
              </a>
            </div>

          <?php $c++; ?>

        <?php } ?>  
     </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingThree">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          Gastos Particulares
        </a>
      </h4>
    </div>
    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
      <div class="panel-body">
        <?php $c = 0; ?>
        <?php foreach ($gastos->result() as $gasto){ ?>

          <div class="list-group">
            <a href="http://www.administracionvielmisa.com/archivos/gasto/<?=$id_edificio?>/<?=$gasto->archivo?>" 
              class="list-group-item <?=($c == 0)? "active":" "?>">
              <h4 class="list-group-item-heading">Gasto <?=$gasto->fecha?></h4>
            </a>
          </div>

          <?php $c++; ?>

        <?php } ?>  

      </div>
    </div>
  </div>  
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingfour">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
          Anexos de Expensas 
        </a>
      </h4>
    </div>
    <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingfour">
      <div class="panel-body">
      <?php $c = 0; ?>
        <?php foreach ($anexos->result() as $anexo){ ?>

          <div class="list-group">
            <a href="http://www.administracionvielmisa.com/archivos/anexo/<?=$id_edificio?>/<?=$anexo->archivo?>" 
              class="list-group-item <?=($c == 0)? "active":" "?>">
              <h4 class="list-group-item-heading">Anexo <?=$anexo->fecha?></h4>
            </a>
          </div>

        <?php $c++; ?>

      <?php } ?> 
      </div>
    </div>
  </div>
</div>
