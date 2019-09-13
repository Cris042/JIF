<?php 
     $query = "";
     if(isset($_POST['pesquisa']))
	 {
			$busca = $_POST['busca'];
            $query = " WHERE numero LIKE '%$busca%' or instituicao LIKE '%$busca%'";
     }
     $telefone = \models\bd::pesquisa('telefones',$query);
?>
<div id="container">      
    <section class="formulario">
        <h1>Telefones</h1>

        <?php 
            if($_SESSION['mensagen'] == true);
            {
               echo @$_SESSION['msn'];
               unset($_SESSION['msn']);
               $_SESSION['mensagen'] = false;
            }          
        ?>

        <form method="post">
             <label for="telefone">Telefone</label>
             <input type="text" class="telefone" name ="telefone" required/> 

             <label for="instituicao">Instituiçao</label>
             <input type="text" name ="instituicao" required/> 

             <input type="submit" name="cadastra" value="enviar" />
        </form>
        
    </section><!-- formulario -->
    
    <section class="pesquisa-card">

        <form method="post">
                <input placeholder="Procure por: instituiçao ou telefone," type="text" name="busca">
                <input type="submit" name="pesquisa" value="Buscar!">
        </form>

    </section><!--pesquisa-card-->
    
    <section class="listagen">
        <?php
             foreach($telefone as $key => $value) {	?>
                <form method="post">
                    <div class="card">
                        <ul>
                            <li class="list-group-item">
                                <b>Instituiçao</b><input type="text" name ="instituicao<?php echo $value['id']?>" value="<?php echo $value['instituicao']?>"/> 
                            </li>

                            <li class="list-group-item">
                                <b>Numero:</b><input type="text" class="telefone" name ="numero<?php echo $value['id']?>" value="<?php echo $value['numero']?>" />                              
                            </li>

                            <input type="hidden" name ="numeroatual<?php echo $value['id']?>" value="<?php echo $value['numero']?>" /> 
                            <input type="hidden" name ="id" value="<?php echo $value['id']?>" /> 

                            <button type="submit" name="editar" class="btn btn-link">Editar</button>
                            <button type="submit" name="excluir" class="btn btn-link" actionBtn="exluir" >Excluir</button>
                        </ul>
                    </div><!--card-->	
                </form>			
         <?php }?>
        <div class="clear"></div>
    </section><!--listagen-->
</div><!-- container -->
 
