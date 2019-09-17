<?php 
     $query = "";
     $telefone = \models\bd::pesquisa('telefones',$query);
?>
<div id="container">      
    
    <section class="pesquisa-card" >
        <form method="post" class="ajax" action="models/pesquisa_ajax.php">
                <input placeholder="Procure por: Telefone ou Instituiçao" class="input-busca" type="text" name="pesquisa-telefones-user"  />
                <div  class="icone-search">
                  <button disabled name="pesquisa" class="icone-search"><i class="fas fa-search"></i></button>
                </div>
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
 
