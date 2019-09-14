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
    <section class="formulario">
        <h1>Cadastra comunicados</h1>

        <?php 
            if(@$_SESSION['mensagen'] == true);
            {
               echo @$_SESSION['msn'];
               unset($_SESSION['msn']);
               @$_SESSION['mensagen'] = false;
            }          
        ?>

        <form method="post">
             <label for="titulo">Titulo</label>
             <input type="text" name ="titulo" required/>

             <label for="mensagen">Mensagen</label>
             <textarea type="text" name="mensagen" required > </textarea>

             <input type="submit" name="cadastra" value="enviar" />
        </form>

    </section><!-- formulario -->
    
    <section class="pesquisa-card">

        <form method="post">
                <input placeholder="Procure por: Titulo" type="text" name="busca">
                <input type="submit" name="pesquisa" value="Buscar!">
        </form>

    </section><!--pesquisa-card-->

    <section class="listagen">
         <?php 
             foreach($comunicados as $key => $value) {	?>
                <form method="post">  
                    <div class="card">                   
                        <ul>                                           
                            <li class="list-group-item ">
                                 <input type="text"  class = "input-card text-center" name="titulo<?php echo $value['id'] ?>" 
                                  value="<?php echo $value['titulo']?>" />                                
                            </li>
                            
                            <li class="list-group-item">
                                <textarea class="textarea-card" type="text" name="mensagen<?php echo $value['id'] ?>"
                                 value="<?php echo $value['mensagen'] ?>" ><?php echo $value['mensagen'] ?>                                    
                                </textarea>
                            </li>

                            <input type="hidden" name="id" value="<?php echo $value['id'] ?>" />
                            <input type="hidden" name="tituloatual<?php echo $value['id'] ?>" value="<?php echo $value['titulo'] ?>" />
                            
                            <button type="submit" name="editar" class="btn btn-link">Editar</button>
                            <button 
                                  type="submit" name="excluir" class="btn btn-link" actionBtn="exluir" >Excluir
                            </button>                           
                        </ul>                
                    </div><!--card-->
             </form>				
         <?php }?>
        <div class="clear"></div>
    </section><!--listagen--> 
</div><!--containere-->




 
