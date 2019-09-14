<?php 
    include('../../MySql.php'); 
    $comunicados = \MySql::conectar()->prepare("SELECT * FROM `comunicado`");
    $comunicados->execute(array());
	$comunicados = $comunicados->fetchAll();
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
    
    
    .wraper-table tr{
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
    <h2 class="titulo">Comunicados<h2>
    <div class="wraper-table">            
            <table>    
            
                <tr>  
                   <th class="coluna-principla">titulo</th>
                   <th class="coluna-principla">Mensagen</th>
                </tr>

                <?php foreach($comunicados as $key => $value) {?>
                    <tr>
                         <th><?php echo $value['titulo']; ?></th>
                         <th><?php echo $value['mensagen']; ?></th>
                    </tr>              
                <?php }?>

            </table>
    </div><!--wraper-table-->
<div id="container"> 