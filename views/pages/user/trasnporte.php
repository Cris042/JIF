<?php 
     $query = "";
     $trasporte = \models\bd::pesquisa('transporte',$query);
?>
<div id="container">      
   
    <section class="pesquisa-card">
        <form method="post" class="ajax" action="models/pesquisa_ajax.php">
                <input placeholder="Procure por: Numero da linha,Regiao e Telefone" class="input-busca" type="text" name="pesquisa-trasnporte-user"  />
                <div  class="icone-search">
                  <button disabled name="pesquisa" class="icone-search"><i class="fas fa-search"></i></button>
                </div>
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
 
