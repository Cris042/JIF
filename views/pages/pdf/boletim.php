<?php 
    include('../../MySql.php'); 
    include('../../models/bd.php'); 
    $coordenadores = \models\bd::selectAll('coordenadores_modalidades');
    $organizacao = \models\bd::selectAll('organizacao');
    $hospitais = \models\bd::selectAll('hospitais');
    $turismo = \models\bd::selectAll('turismo');
    $transporte = \models\bd::selectAll('transporte');
    $telefones = \models\bd::selectAll('telefones');
    $docs = \models\bd::selectAll('boletim_documentos');
    $boletim = \models\bd::select('mensagen_reitoria');
    $comunicados = \models\bd::selectAll('comunicado');
    $jogos = \models\bd::selectAll('jogo ORDER BY etapa');
 
?>

<html>
    <head>
        <link rel="stylesheet" type="text/css" href="../../views/templates/css/pdf.css" />
    </head>
 
    <body>

        <div class="logo" >
            <img class = "logo-img" src="../../views/templates/upload/<?php print_r($boletim[1]);?>" />
        </div>

        <h1 class="titulo"> Boletim 01 </h1>

        <div class="txt">
            <h1 > Mensagen da Reitoria </h1><br><br>
                <p>
                    <?php  print_r($boletim[2]);?>
               </p>
        </div>

        <h2>  Coordenadores de modalidades </h2>

        <div class="listagem">
            <?php foreach($coordenadores as $key => $value) {?>
            <div class="card">
                <div class="card-img">
                    <img class = "img "src="../../views/templates/img/icone.png" />
                </div>
                <div class="corpo">
                    <ul class="list-grup">
                        <li><b class="txt">Email :   </b><?php echo $value['email']; ?></li>
                        <li><b class="txt">Cargo :   </b><?php echo $value['cargo']; ?></li>
                        <li><b class="txt">Nome :   </b><?php echo $value['nome']; ?></li>
                    </ul>
                </div>
            </div>
            <?php }?>
        </div>

        <h2>  Organizaçao </h2>

        <div class="listagem">
            <?php foreach($organizacao as $key => $value) {?>
            <div class="card">
                <div class="card-img">
                    <img class = "img "src="../../views/templates/img/icone.png" />
                </div>
                <div class="corpo">
                    <ul class="list-grup">
                        <li><b class="txt">Email :   </b><?php echo $value['email']; ?></li>
                        <li><b class="txt">Cargo :   </b><?php echo $value['cargo']; ?></li>
                        <li><b class="txt">Nome :   </b><?php echo $value['nome']; ?></li>
                        <li><b class="txt">Telefone :   </b><?php echo $value['telefone']; ?></li>
                    </ul>
                </div>
            </div>
            <?php }?>
        </div>

        <div class="listagem">
            <?php foreach($comunicados as $key => $value) {?>
            <div class="card-msn">
                <div class="corpo-msn">
                    <ul class="list-grup">
                        <li><h2> <?php echo $value['titulo']; ?> </h2></li>
                        <li class="li-mensagem"><?php echo $value['mensagen']; ?></li>
                    </ul>
                </div>
            </div>
            <?php }?>
        </div>

        <h2>Hospitais</h2>
        <div class="wraper-table">            
            <table>    
            
                <tr>  
                   <th class="coluna-principla">Plano</th>
                   <th class="coluna-principla">Telefone</th>
                   <th class="coluna-principla">Endereço</th>
                   <th class="coluna-principla">Instituiçao</th>
                </tr>

                <?php foreach($hospitais as $key => $value) {?>
                    <tr>
                         <th><?php echo $value['plano']; ?></th>
                         <th><?php echo $value['telefone']; ?></th>
                         <th><?php echo $value['endereco']; ?></th>
                         <th><?php echo $value['instituicao']; ?></th>
                    </tr>              
                <?php }?>

            </table>
        </div><!--wraper-table-->

        <h2>Transporte</h2>
        <div class="wraper-table">            
            <table>    
            
                <tr>  
                   <th class="coluna-principla">Numero da Linha</th>
                   <th class="coluna-principla">Telefone</th>
                   <th class="coluna-principla">Regiao</th>
                </tr>

                <?php foreach($transporte as $key => $value) {?>
                    <tr>
                         <th><?php echo $value['numero_linha']; ?></th>
                         <th><?php echo $value['telefone']; ?></th>
                         <th><?php echo $value['regiao']; ?></th>
                    </tr>              
                <?php }?>

            </table>
        </div><!--wraper-table-->


        <h2>Atraçoes Turristicas</h2>
        <div class="wraper-table">            
            <table>    
            
                <tr>  
                   <th class="coluna-principla">Data</th>
                   <th class="coluna-principla">Horario</th>
                   <th class="coluna-principla">Local</th>
                   <th class="coluna-principla">Nome</th>
                </tr>

                <?php foreach($turismo as $key => $value) {?>
                    <tr>
                         <th><?php echo $value['data']; ?></th>
                         <th><?php echo $value['hora']; ?></th>
                         <th><?php echo $value['local']; ?></th>
                         <th><?php echo $value['nome']; ?></th>
                    </tr>              
                <?php }?>

            </table>
        </div><!--wraper-table-->

        <h2>Telefones</h2>
        <div class="wraper-table">            
            <table>    
            
                <tr>  
                   <th class="coluna-principla">Instituiçao</th>
                   <th class="coluna-principla">Telefone</th>
                </tr>

                <?php foreach($telefones as $key => $value) {?>
                    <tr>
                         <th><?php echo $value['instituicao']; ?></th>
                         <th><?php echo $value['numero']; ?></th>
                    </tr>              
                <?php }?>

            </table>
        </div><!--wraper-table-->

        <h2>Jogos</h2>
        <div class="wraper-table">            
            <table>    
            
                <tr>  
                   <th class="coluna-principla">Data</th>
                   <th class="coluna-principla">Horario</th>
                   <th class="coluna-principla">Local</th>
                   <th class="coluna-principla">Grupo</th>
                   <th class="coluna-principla">Etapa</th>
                   <th class="coluna-principla">Modalidade</th>
                   <th class="coluna-principla">Time 1</th>
                   <th class="coluna-principla">Time 2</th>
                </tr>

                <?php foreach($jogos as $key => $value) {
                  $local = \models\bd::select('local','local_id = ?',array($value['local']) );
                  $campus01 = \models\bd::select('campus','campus_id = ?', array($value['time1']) );
                  $campus02 = \models\bd::select('campus','campus_id = ?', array($value['time2']) );
                  $etapa = \models\bd::select('etapa','etapa_id = ?', array($value['etapa']) );
                  $modalidade = \models\bd::select('modalidade','modalidade_id = ?', array(19) );
               
                ?>
                    <tr>
                         <th><?php echo $value['data']; ?></th>
                         <th><?php echo $value['horario']; ?></th>
                         <th><?php print_r($local[1]); ?></th>
                         <th><?php echo $value['grupo']; ?></th>
                         <th><?php print_r($etapa[1]); ?></th>
                         <th><?php print_r($modalidade[1]); ?></th>
                         <th><?php print_r($campus01[1]); ?></th>
                         <th><?php print_r($campus02[1]); ?></th>                      
                    </tr>              
                <?php }?>

            </table>
        </div><!--wraper-table-->

        

    <?php foreach($docs as $key => $value) {?>
        <div>
            <img class = "doc-img" src="../../views/templates/upload/<?php echo ($value['imagem']);?>" />
        </div>
    <?php }?>
   
    </body>
</html>