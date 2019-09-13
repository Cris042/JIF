<?php 
     $query = "";
     if(isset($_POST['pesquisa']))
	 {
			$busca = $_POST['busca'];
            $query = " WHERE numero LIKE '%$busca%' or instituicao LIKE '%$busca%'";
     }
     $telefone = \models\bd::pesquisa('telefones',$query);
?>
<div id="container">      
    
    <section class="pesquisa-card">

        <form method="post">
                <input placeholder="Procure por: instituiçao ou telefone," type="text" name="busca">
                <input type="submit" name="pesquisa" value="Buscar!">
        </form>

    </section><!--pesquisa-card-->
    
    <section class="listagen">
        <?php
             foreach($telefone as $key => $value) {	?>
                    <div class="card">
                        <ul>
                            <li class="list-group-item ">
                                <P><b>Instituiçao :</b><span class="card-txt"><?php echo $value['instituicao']?></span></P>                             
                            </li>

                            <li class="list-group-item ">
                                <P><b>Telefone :</b><span class="card-txt"><?php echo $value['numero']?></span></P>                             
                            </li>

                        </ul>
                    </div><!--card-->		
         <?php }?>
        <div class="clear"></div>
    </section><!--listagen-->
</div><!-- container -->
 
