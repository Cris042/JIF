<?php 
     $query = "";
     if(isset($_POST['pesquisa']))
	 {
			$busca = $_POST['busca'];
            $query = " WHERE cargo LIKE '%$busca%' or nome LIKE '%$busca%' or 
            email LIKE '%$busca%' or responsavel  LIKE '%$busca%' or telefone LIKE '%$busca%' ";
     }
     $equipe = \models\bd::pesquisa('organizacao',$query);
?>
<div id="container">      
   
    <section class="pesquisa-card">

        <form method="post">
                <input placeholder="Procure por: cargo,email,nome,telefone,responsavel" type="text" name="busca">
                <input type="submit" name="pesquisa" value="Buscar!">
        </form>

    </section><!--pesquisa-card-->

    <section class="listagen">
         <?php
             foreach($equipe as $key => $value) {	?>
                   <div class="card">
                        <ul>

                            <li class="list-group-item ">
                                <P><b>Cargo :</b><span class="card-txt"><?php echo $value['cargo']?></span></P>                             
                            </li>

                            <li class="list-group-item ">
                                <P><b>E-mail :</b><span class="card-txt"><?php echo $value['email']?></span></P>                             
                            </li>

                            <li class="list-group-item ">
                                <P><b>Nome :</b><span class="card-txt"><?php echo $value['nome']?></span></P>                             
                            </li>

                            <li class="list-group-item ">
                                <P><b>Telefone :</b><span class="card-txt"><?php echo $value['telefone']?></span></P>                             
                            </li>

                            <li class="list-group-item ">
                                <P><b>Responsavel :</b><span class="card-txt"><?php echo $value['responsavel']?></span></P>                             
                            </li>
                            
                        </ul>
                    </div><!--card-->	
         <?php }?>
        <div class="clear"></div>
    </section><!--listagen-->
</div><!-- container -->
 
