<?php 
    include('../../MySql.php'); 
    $coordenadores = \MySql::conectar()->prepare("SELECT * FROM `coordenadores_modalidades`");
    $coordenadores->execute(array());
    $coordenadores = $coordenadores->fetchAll();

    $organizacao = \MySql::conectar()->prepare("SELECT * FROM `organizacao`");
    $organizacao->execute(array());
    $organizacao = $organizacao->fetchAll();
    
    $comunicados = \MySql::conectar()->prepare("SELECT * FROM `comunicado`");
    $comunicados->execute(array());
    $comunicados = $comunicados->fetchAll();
    
    $hospitais = \MySql::conectar()->prepare("SELECT * FROM `hospitais`");
    $hospitais->execute(array());
    $hospitais = $hospitais->fetchAll();
    
    $turismo = \MySql::conectar()->prepare("SELECT * FROM `turismo`");
    $turismo->execute(array());
    $turismo = $turismo->fetchAll();
    
    $transporte = \MySql::conectar()->prepare("SELECT * FROM `transporte`");
    $transporte->execute(array());
    $transporte = $transporte->fetchAll();
    
    $telefones = \MySql::conectar()->prepare("SELECT * FROM `telefones`");
    $telefones->execute(array());
    $telefones = $telefones->fetchAll();

    $boletim = \MySql::conectar()->prepare("SELECT * FROM `mensagen_reitoria`");
    $boletim->execute(array());
    $boletim = $boletim->fetch();
    
 
?>

<html>
    
<style>
        *{
            margin: 0;
            padding: 0;
        }

       

        .card{
             width: 45%;
             margin-bottom: 50px;
             float: left;
         }

         .card-msn{
             margin-top: 50px;
             width: 100%;
         }

      
         .card-img{
             width: 50px;
             height: 50px;
             margin-bottom: 10px;
             margin-left: 48%;
             border-radius: 50%;
         }

         .logo{
             width: 100%;
             padding: 0;
             margin: 0;
             height: 650px;
             max-height: 650px;
         }

         .logo-img{
             width: 100%;
             height: 100%;
         }

         .corpo ul{
             text-align: center;
         }

         .corpo-msn ul{
             margin-left: 10%;
             margin-right: 10%;
             margin-top: 10px;
         }
         
         ul li{
             list-style: none;
         }

         h2{
             text-align: center;
             color: darkgreen;
             margin-top: 80px;
             margin-bottom: 80px;
         }

         h1{
             color: darkgreen;
             text-align: center;
         }

         .titulo{
             margin-bottom: 120px;
             margin-top: 120px;
         }

         .txt{
             text-align: justify;
         }

        .wraper-table{
            max-width: 90%;
            overflow-x: auto;
            position: relative;
            left: 50%;
            z-index: 0;
            transform:translate(-50%,0%);
            margin-top: 5%;
            margin-bottom: 5%;
        -ms-transform:translate(-50%,0%);	
       }

        table{
            border-collapse: collapse;
            width: 100%;
        }

        td, th{
            border: 1px solid #000;
            padding: 8px;
        }
        
    
        th{
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: justify;
            background: #fff;
            color: #000;
            font-weight: 100;
        }

        .coluna-principla{
            background: #00a000;
            text-align: center;
        }

        .li-mensagem{
            text-align: justify;
        }

 
 </style>
    
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

        <div class="logo" >
            <img class = "logo-img" src="../../views/templates/img/assinatura.JPG" />
        </div>
   
    </body>
</html>