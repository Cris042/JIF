<?php 
     $query = "";
     if(isset($_POST['pesquisa']))
	 {
			$busca = $_POST['busca'];
            $query = " WHERE numero_linha LIKE '%$busca%' or regiao  LIKE '%$busca%'
            or telefone  LIKE '%$busca%'";
     }
     $trasporte = \models\bd::pesquisa('transporte',$query);
?>
<div id="container">      
   
    <section class="pesquisa-card">

        <form method="post">
                <input placeholder="Procure por: Numero da linha ou telefone,regiao" type="text" name="busca">
                <input type="submit" name="pesquisa" value="Buscar!">
        </form>
        
    </section><!--pesquisa-card-->

    <section class="listagen">
        <?php
             foreach($trasporte as $key => $value) {	?>
                    <div class="card">
                        <ul>
                            <li class="list-group-item ">
                                <P><b>Numero da linha :</b><span class="card-txt"><?php echo $value['numero_linha']?></span></P>                             
                            </li>

                            <li class="list-group-item ">
                                <P><b>Telefone :</b><span class="card-txt"><?php echo $value['telefone']?></span></P>                             
                            </li>

                            <li class="list-group-item ">
                                <P><b>Regiao :</b><span class="card-txt"><?php echo $value['regiao']?></span></P>                             
                            </li>   
                         
                        </ul>
                    </div><!--card-->	
         <?php }?>
        <div class="clear"></div>
    </section><!--listagen-->
</div><!-- container -->
 
