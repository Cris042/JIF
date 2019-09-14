<?php 
    include('../../MySql.php'); 
    include('../../models\bd.php'); 
    use models\bd;
    $telefones = bd::selectAll('turismo');

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
    <h2 class="titulo">Atraçoes Turisticas<h2>
    <div class="wraper-table">            
            <table>    
            
                <tr>  
                   <th class="coluna-principla">Data</th>
                   <th class="coluna-principla">Horario</th>
                   <th class="coluna-principla">Local</th>
                   <th class="coluna-principla">Nome</th>
                </tr>

                <?php foreach($telefones as $key => $value) {?>
                    <tr>
                         <th><?php echo $value['data']; ?></th>
                         <th><?php echo $value['hora']; ?></th>
                         <th><?php echo $value['local']; ?></th>
                         <th><?php echo $value['nome']; ?></th>
                    </tr>              
                <?php }?>

            </table>
    </div><!--wraper-table-->
<div id="container"> 