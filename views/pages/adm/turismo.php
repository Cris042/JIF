<?php 
     $query = "";
     if(isset($_POST['pesquisa']))
	 {
			$busca = $_POST['busca'];
            $query = " WHERE data LIKE '%$busca%' or hora  LIKE '%$busca%'
            or nome LIKE '%$busca%' or local LIKE '%$busca%'";
     }
     $turismo = \models\bd::pesquisa('turismo',$query);
?>
<div id="container">      
    <section class="formulario">
        <h1>Cadastra Atraçoes Turristicas</h1>

        <?php 
            if($_SESSION['mensagen'] == true);
            {
               echo @$_SESSION['msn'];
               unset($_SESSION['msn']);
               $_SESSION['mensagen'] = false;
            }          
        ?>

        <form method="post">
             <label for="data">Data</label>
             <input type="date" name ="data" min="2019-10-02" max="2019-10-31" required />

             <label for="horario">Horario</label>
             <input type="text" class="hora" name ="horario" required />

             <label for="local">Local</label>
             <input type="text" name ="local" required/> 

             <label for="nome">Nome</label>
             <input type="text" name ="nome" required/>  

             <input type="submit" name="cadastra" value="enviar" />
        </form>

    </section><!-- formulario -->

    <section class="pesquisa-card">

        <form method="post">
                <input placeholder="Procure por: data,horario,local e nome" type="text" name="busca">
                <input type="submit" name="pesquisa" value="Buscar!">
        </form>
        
    </section><!--pesquisa-card-->

    <section class="listagen">
        <?php
             foreach($turismo as $key => $value) {	?>
                <form method="post">
                    <div class="card">
                        <ul>
                            <li class="list-group-item ">
                                <b>Data:</b>
                                <input type="date" name ="data<?php echo $value['id']?>" min="2019-10-02" max="2019-10-31" value="<?php echo $value['data']?>"/>
                            </li>

                            <li class="list-group-item ">
                                <b>Horario:</b>
                                <input type="text" class="hora" name ="hora<?php echo $value['id']?>"  value="<?php echo $value['hora']?>" />                             
                            </li>

                            <li class="list-group-item ">
                                <b>Local:</b>
                                <input type="text" name ="local<?php echo $value['id']?>"  value="<?php echo $value['local']?>" /> 
                            </li>

                            <li class="list-group-item ">
                                <b>Nome</b>
                                <input type="text" name ="nome<?php echo $value['id']?>"  value="<?php echo $value['nome']?>" /> 
                            </li>
                            
                            <input type="hidden" name="id" value="<?php echo $value['id']?>" />

                            <button type="submit" name="editar" class="btn btn-link">Editar</button>
                            <button type="submit" name="excluir" class="btn btn-link" actionBtn="exluir" >Excluir</button>
                        </ul>
                    </div><!--card-->	
                </form>			
         <?php }?>
        <div class="clear"></div>
    </section><!--listagen-->
</div><!-- container -->
 
