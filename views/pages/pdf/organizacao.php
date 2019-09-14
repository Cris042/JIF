<?php 
    include('../../MySql.php'); 
    $organizacao = \MySql::conectar()->prepare("SELECT * FROM `organizacao`");
    $organizacao->execute(array());
	$organizacao = $organizacao->fetchAll();
?>
<style>

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

    .titulo{
        text-align: center;
    }


</style>
<div id="container"> 
    <h2 class="titulo">Organizaçao<h2>
    <div class="wraper-table">            
            <table>    
            
                <tr>  
                   <th class="coluna-principla">E-mail</th>
                   <th class="coluna-principla">Cargo</th>
                   <th class="coluna-principla">Nome</th>
                   <th class="coluna-principla">Telefone</th>
                   <th class="coluna-principla">Respinsavel</th>
                </tr>

                <?php foreach($organizacao as $key => $value) {?>
                    <tr>
                         <th><?php echo $value['email']; ?></th>
                         <th><?php echo $value['cargo']; ?></th>
                         <th><?php echo $value['nome']; ?></th>
                         <th><?php echo $value['telefone']; ?></th>
                         <th><?php echo $value['responsavel']; ?></th>
                    </tr>              
                <?php }?>

            </table>
    </div><!--wraper-table-->
<div id="container"> 