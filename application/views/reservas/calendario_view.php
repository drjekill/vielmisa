<style type="text/css">
    
    .siguiente, .previo{
        text-align: center;
    }

</style>
<html lang="es">
    <head>
        <title>Calendario codeigniter</title>

    </head>
 
    <body>
        <?=$calendario?>
        <input type="hidden" value="<?=$this->uri->segment(3)?>" class="year" />
        <input type="hidden" value="<?=$this->uri->segment(4)?>" class="month" />
        <input type="hidden" value="<?=$this->uri->segment(5)?>" class="espacio_id" />
        <div id="midiv"></div>
    </body>
</html>