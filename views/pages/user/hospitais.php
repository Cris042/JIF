<?php 
     $query = "";
     if(isset($_POST['pesquisa']))
	 {
			$busca = $_POST['busca'];
            $query = " WHERE plano LIKE '%$busca%' or instituicao LIKE '%$busca%'
            or telefone LIKE '%$busca%' or endereco LIKE '%$busca%'";
     }
     $hospitais = \models\bd::pesquisa('hospitais',$query);
?>
<div id="container">      
    
    <section class="pesquisa-card">

        <form method="post">
                <input placeholder="Procure por: instituiçao ou telefone,endereço,plano" type="text" name="busca">
                <input type="submit" name="pesquisa" value="Buscar!">
        </form>

    </section><!--pesquisa-card-->

    <section class="listagen">
        <?php
             foreach($hospitais as $key => $value) {	?>
                   <div class="card">
                        <ul>
                            <li class="list-group-item ">
                                <P><b>Instituiçao :</b><span class="card-txt"><?php echo $value['instituicao']?></span></P>                             
                            </li>

                            <li class="list-group-item ">
                                <P><b>Telefone :</b><span class="card-txt"><?php echo $value['telefone']?></span></P>                             
                            </li>

                            <li class="list-group-item ">
                                <P><b>Endereço :</b><span class="card-txt"><?php echo $value['endereco']?></span></P>                             
                            </li>

                            <li class="list-group-item ">
                                <P><b>Plano :</b><span class="card-txt"><?php echo $value['plano']?></span></P>                             
                            </li>
                                                    
                        </ul>
                    </div><!--card-->	
         <?php }?>
        <div class="clear"></div>
    </section><!--listagen-->
</div><!-- container -->
 
