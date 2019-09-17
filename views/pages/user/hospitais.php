<?php 
     $query = "";
     $hospitais = \models\bd::pesquisa('hospitais',$query);
?>
<div id="container">      
    
    <section class="pesquisa-card">
        <form method="post"  class="ajax" action="models/pesquisa_ajax.php">
                <input placeholder="Procure por: Plano,Instituiçao,Telefone e Endereço" class="input-busca" type="text" name="pesquisa-hospitais-user"  />
                <div  class="icone-search">
                  <button disabled name="pesquisa" class="icone-search"><i class="fas fa-search"></i></button>
                </div>
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
 
