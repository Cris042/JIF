<?php 
     $query = "";
     $hospitais = \models\bd::pesquisa('hospitais',$query);
?>
<div id="container">      
    <section class="formulario">
        <h1>Cadastra Hospitais</h1>

        <?php 
            if(@$_SESSION['mensagen'] == true);
            {
               echo @$_SESSION['msn'];
               unset($_SESSION['msn']);
               @$_SESSION['mensagen'] = false;
            }          
        ?>

        <form method="post">
             <label for="plano">Plano</label>
             <input type="text" name ="plano" required />

             <label for="instituicao">Instituiçao</label>
             <input type="text" name ="instituicao" required />
             
             <label for="telefone">Telefone</label>
             <input type="text" class="telefone" name ="telefone" required/> 

             <label for="endereco">Endereço</label>
             <input type="text" name ="endereco" required />  
                    
             <input type="submit" name="cadastra" value="enviar" />
        </form>
        
    </section><!-- formulario -->

    <section class="pesquisa-card">
        <form method="post" class="ajax" action="models/pesquisa_ajax.php">
                <input placeholder="Procure por: Plano,Instituiçao,Telefone e Endereço" class="input-busca" type="text" name="pesquisa-hospitais" />
                <div  class="icone-search">
                  <button disabled name="pesquisa" class="icone-search"><i class="fas fa-search"></i></button>
                </div>
        </form>
    </section><!--pesquisa-card-->

    <section class="listagen">
        <?php
             foreach($hospitais as $key => $value) {	?>
                <form method="post">
                   <div class="card">
                        <ul>
                            <li class="list-group-item ">
                                <b>Plano:</b>
                                <input type="text" name ="plano<?php echo $value['id']?>" value="<?php echo $value['plano']?>"/>                            
                            </li>

                            <li class="list-group-item ">
                                <b>Instituiçao:</b>
                                <input type="text" name ="instituicao<?php echo $value['id']?>" value="<?php echo $value['instituicao']?>"/>
                            </li>

                            <li class="list-group-item ">
                                <b>Telefone:</b>
                                <input type="text" class="telefone" name ="telefone<?php echo $value['id']?>" value="<?php echo $value['telefone']?>" />
                            </li>

                            <li class="list-group-item ">
                                <b>Endereço:</b>
                                <input type="text" name ="endereco<?php echo $value['id']?>" value="<?php echo $value['endereco']?>"/>
                            </li>
                            
                            <input type="hidden" name ="id" value="<?php echo $value['id']?>"  /> 
                            <input type="hidden" name ="telefoneatual<?php echo $value['id']?>" value="<?php echo $value['telefone']?>" />

                            <button type="submit" name="editar" class="btn btn-link">Editar</button>
                            <button type="submit" name="excluir" class="btn btn-link" actionBtn="exluir" >Excluir</button>
                        </ul>
                    </div><!--card-->	
                </form>			
         <?php }?>
        <div class="clear"></div>
    </section><!--listagen-->
</div><!-- container -->
 
