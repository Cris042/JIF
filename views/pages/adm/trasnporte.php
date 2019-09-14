<?php 
     $query = "";
     if(isset($_POST['pesquisa']))
	 {
			$busca = $_POST['busca'];
            $query = " WHERE numero_linha LIKE '%$busca%' or regiao  LIKE '%$busca%'
            or telefone  LIKE '%$busca%'";
     }
     $trasporte = \models\bd::pesquisa('transporte',$query);
?>
<div id="container">      
    <section class="formulario">
        <h1>Cadastra Meios De Trasporte</h1>

        <?php 
            if(@$_SESSION['mensagen'] == true);
            {
               echo @$_SESSION['msn'];
               unset($_SESSION['msn']);
               @$_SESSION['mensagen'] = false;
            }          
        ?>

        <form method="post">
             <label for="numero">Numero da Linha</label>
             <input type="text" class="numero_linha" name ="numero" required />

             <label for="regiao">Regiao</label>
             <input type="text" name ="regiao" required />

             <label for="telefone">Telefone</label>
             <input type="text" class="telefone" name ="telefone" required/> 
                         
             <input type="submit" name="cadastra" value="enviar" />
        </form>
        
    </section><!-- formulario -->

    <section class="pesquisa-card">

        <form method="post">
                <input placeholder="Procure por: Numr da linha ou telefone,regiao" type="text" name="busca">
                <input type="submit" name="pesquisa" value="Buscar!">
        </form>
        
    </section><!--pesquisa-card-->

    <section class="listagen">
        <?php
             foreach($trasporte as $key => $value) {	?>
                <form method="post">
                    <div class="card">
                        <ul>
                            <li class="list-group-item">
                                <b>Numero Da linha:</b>
                                <input type="text" class="numero_linha" name ="numero_linha<?php echo $value['id']?>" value="<?php echo $value['numero_linha']?>"/>
                            </li>

                            <li class="list-group-item">
                                <b>Telefone:</b>
                                <input type="text" class="telefone" name ="telefone<?php echo $value['id']?>" value="<?php echo $value['telefone']?>" />
                            </li>

                            <li class="list-group-item">
                                <b>Regiao:</b>
                                <input type="text" name ="regiao<?php echo $value['id']?>" value="<?php echo $value['regiao']?>" />
                            </li>    

                            <input type="hidden" name="id"  value="<?php echo $value['id']?>" />
                            <input type="hidden" name="telefoneatual<?php echo $value['id']?>"  value="<?php echo $value['telefone']?>" />

                            <button type="submit" name="editar" class="btn btn-link">Editar</button>
                            <button type="submit" name="excluir" class="btn btn-link" actionBtn="exluir" >Excluir</button>
                        </ul>
                    </div><!--card-->	
                </form>			
         <?php }?>
        <div class="clear"></div>
    </section><!--listagen-->
</div><!-- container -->
 
