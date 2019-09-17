<?php 
     $query = "";
     $comunicados = \models\bd::pesquisa('comunicado',$query);
?>
<div id="container">      
    
    
    <section class="pesquisa-card">
        <form method="post" class="ajax" action="models/pesquisa_ajax.php">
                <input placeholder="Procure por: Titulo" class="input-busca" type="text" name="pesquisa-comunicado-user" />
                <div  class="icone-search">
                  <button  disabled  class="icone-search"><i class="fas fa-search"></i></button>
                </div>
        </form>
    </section><!--pesquisa-card-->

    <section class="listagen">
         <?php 
             foreach($comunicados as $key => $value) {	?>
                    <div class="card user">                   
                        <ul>                                           
                            <li class="list-group-item ">
                                <P><b>Titulo :</b><span class="card-txt"><?php echo $value['titulo']?></span></P>                             
                            </li>
                            
                            <li class="list-group-item">
                                 <p><span class="card-msn text-center"><?php echo $value['mensagen']?></span></p>  
                            </li>

                                   
                        </ul>                
                    </div><!--card-->		
         <?php }?>
        <div class="clear"></div>
    </section><!--listagen--> 
</div><!--containere-->




 
