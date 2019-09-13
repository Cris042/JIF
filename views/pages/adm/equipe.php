<?php 
     $query = "";
     if(isset($_POST['pesquisa']))
	 {
			$busca = $_POST['busca'];
            $query = " WHERE cargo LIKE '%$busca%' or nome LIKE '%$busca%' or 
            email LIKE '%$busca%' or responsavel  LIKE '%$busca%' or telefone LIKE '%$busca%' ";
     }
     $equipe = \models\bd::pesquisa('organizacao',$query);
?>
<div id="container">      
    <section class="formulario">
        <h1>Cadastra Membros  Da Organizaçao</h1>

        <?php 
            if($_SESSION['mensagen'] == true);
            {
               echo @$_SESSION['msn'];
               unset($_SESSION['msn']);
               $_SESSION['mensagen'] = false;
            }          
        ?>

        <form method="post">
             <label for="nome">Nome</label>
             <input type="text" name="nome" required/> 

             <label for="cargo">Cargo</label>
             <select name ="cargo" required>
                 <option name="gernete">gernete</option>
                 <option name="gernete">gernete</option>
             </select>

             <label for="responsavel">Responsavel</label>
             <input type="text" name ="responsavel" required />

             <label for="telefone">Telefone</label>
             <input type="text" name ="telefone" class="telefone" required/>

             <label for="endereco">Email</label>
             <input type="text" name ="email" required pattern = "[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"/> 

             <input type="submit" name="cadastra" value="enviar" />
        </form>
        
    </section><!-- formulario -->

    <section class="pesquisa-card">

        <form method="post">
                <input placeholder="Procure por: cargo,email,nome,telefone,responsavel" type="text" name="busca">
                <input type="submit" name="pesquisa" value="Buscar!">
        </form>

    </section><!--pesquisa-card-->

    <section class="listagen">
         <?php
             foreach($equipe as $key => $value) {	?>
                <form method="post">
                   <div class="card">
                        <ul>
                            <li class="list-group-item ">
                                <b>Nome:</b>
                                <input type="text" name = "nome<?php echo $value['id'] ?>" value="<?php echo $value['nome'] ?>" />
                            </li>

                            <li class="list-group-item "><b>Cargo:</b>                             
                                <select name ="cargo<?php echo $value['id'] ?>">
                                    <option name="<?php echo $value['cargo'] ?>"><?php echo $value['cargo'] ?></option>
                                    <option name="gernete">gernete</option>                                              
                                </select>
                            </li>

                            <li class="list-group-item ">
                                <b>Responsavel</b>  
                                <input type="text" name ="responsavel<?php echo $value['id'] ?>" value="<?php echo $value['responsavel'] ?>" />
                            </li>

                            <li class="list-group-item ">
                                <b>Telefone</b> 
                                <input type="text"  class="telefone" name ="telefone<?php echo $value['id'] ?>" value="<?php echo $value['telefone'] ?>" /> 
                            </li>

                            <li class="list-group-item ">
                                <b>E-mail:</b><input type="text" name ="email<?php echo $value['id'] ?>" value="<?php echo $value['email'] ?>"
                                required pattern = "[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"/>                            
                            </li>
                            
                            <input type="hidden" name ="emailatual<?php echo $value['id'] ?>" value="<?php echo $value['email'] ?>" />
                            <input type="hidden" name ="id" value="<?php echo $value['id'] ?>" />
                            <input type="hidden" name ="telefoneatual<?php echo $value['id'] ?>" value="<?php echo $value['telefone'] ?>" />

                            <button type="submit" name="editar" class="btn btn-link">Editar</button>
                            <button type="submit" name="excluir" class="btn btn-link" actionBtn="exluir" >Excluir</button>
                        </ul>
                    </div><!--card-->
             </form>				
         <?php }?>
        <div class="clear"></div>
    </section><!--listagen-->
</div><!-- container -->
 
