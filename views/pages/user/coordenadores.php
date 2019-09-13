<?php 
     $query = "";
     if(isset($_POST['pesquisa']))
	 {
			$busca = $_POST['busca'];
			$query = " WHERE cargo LIKE '%$busca%' or nome LIKE '%$busca%' or email LIKE '%$busca%' ";
     }
     $coordenadores = \models\bd::pesquisa('coordenadores_modalidades',$query);
?>
<div id="container">      
   
    <section class="pesquisa-card">

        <form method="post">
                <input placeholder="Procure por: cargo,email,nome" type="text" name="busca">
                <input type="submit" name="pesquisa" value="Buscar!">
        </form>

    </section><!--pesquisa-card-->

    <section class="listagen">
         <?php 
            foreach($coordenadores as $key => $value) {?>
                    <div class="card">
                        <ul>
                            <li class="list-group-item ">
                                <P><b>Cargo :</b><span class="card-txt"><?php echo $value['cargo']?></span></P>                             
                            </li>
                            
                            <li class="list-group-item ">
                                <P><b>Nome :</b><span class="card-txt"><?php echo $value['nome']?></span></P>                             
                            </li>

                            <li class="list-group-item ">
                                <P><b>E-mail :</b><span class="card-txt"><?php echo $value['email']?></span></P>                             
                            </li>
                            
                        </ul>
                    </div><!--card-->
         <?php }?>
        <div class="clear"></div>
    </section><!--listagen-->
</div><!-- container -->
 
