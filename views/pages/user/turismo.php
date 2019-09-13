<?php 
     $query = "";
     if(isset($_POST['pesquisa']))
	 {
			$busca = $_POST['busca'];
            $query = " WHERE data LIKE '%$busca%' or hora  LIKE '%$busca%'
            or nome LIKE '%$busca%' or local LIKE '%$busca%'";
     }
     $turismo = \models\bd::pesquisa('turismo',$query);
?>
<div id="container">      
   
    <section class="pesquisa-card">

        <form method="post">
                <input placeholder="Procure por: data,horario,local e nome" type="text" name="busca">
                <input type="submit" name="pesquisa" value="Buscar!">
        </form>
        
    </section><!--pesquisa-card-->

    <section class="listagen">
        <?php
             foreach($turismo as $key => $value) {	?>      
                    <div class="card">
                        <ul>

                            <li class="list-group-item ">
                                <P><b>Data :</b><span class="card-txt"><?php echo $value['data']?></span></P>                             
                            </li>

                            <li class="list-group-item ">
                                <P><b>Horario :</b><span class="card-txt"><?php echo $value['hora']?></span></P>                             
                            </li>

                            <li class="list-group-item ">
                                <P><b>Local :</b><span class="card-txt"><?php echo $value['local']?></span></P>                             
                            </li>

                            <li class="list-group-item ">
                                <P><b>Nome :</b><span class="card-txt"><?php echo $value['nome']?></span></P>                             
                            </li>                         

                        </ul>
                    </div><!--card-->	
         <?php }?>
        <div class="clear"></div>
    </section><!--listagen-->
</div><!-- container -->
 
