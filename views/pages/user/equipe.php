<?php 
     $query = "";
     $equipe = \models\bd::pesquisa('organizacao',$query);
?>
<div id="container">      
   
    <section class="pesquisa-card">
        <form method="post" class="ajax" action="models/pesquisa_ajax.php">
                <input placeholder="Procure por: Nome,Cargo,Responsavel,Telefone e E-mail" class="input-busca" type="text" name="pesquisa-equipe-user" />
                <div  class="icone-search">
                  <button disabled name="pesquisa" class="icone-search"><i class="fas fa-search"></i></button>
                </div>
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
 
