<?php 
     $query = "";
     $turismo = \models\bd::pesquisa('turismo',$query);
?>
<div id="container">      
   
    <section class="pesquisa-card" >
        <form method="post" class="ajax" action="models/pesquisa_ajax.php">
                <input placeholder="Procure por: Numero da linha,Regiao e Telefone" class="input-busca" type="text" name="pesquisa-turismo-user"  />
                <div  class="icone-search">
                  <button disabled name="pesquisa" class="icone-search"><i class="fas fa-search"></i></button>
                </div>
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
 
