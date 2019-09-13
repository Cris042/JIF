<?php 
     $query = "";
     if(isset($_POST['pesquisa']))
	 {
			$busca = $_POST['busca'];
			$query = " WHERE titulo LIKE '%$busca%' ";
     }
     $comunicados = \models\bd::pesquisa('comunicado',$query);
?>
<div id="container">      
    
    <section class="pesquisa-card">

        <form method="post">
                <input placeholder="Procure por: Titulo" type="text" name="busca">
                <input type="submit" name="pesquisa" value="Buscar!">
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




 
