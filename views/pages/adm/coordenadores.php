<?php 
     $query = "";
     if(isset($_POST['pesquisa']))
	 {
			$busca = $_POST['busca'];
			$query = " WHERE cargo LIKE '%$busca%' or nome LIKE '%$busca%' or email LIKE '%$busca%' ";
     }
     $coordenadores = \models\bd::pesquisa('coordenadores_modalidades',$query);
?>
<div id="container">      
    <section class="formulario">
        <h1>Cadastra Coordenadores De Modalidade</h1>

        <?php 
             if($_SESSION['mensagen'] == true);
             {
                echo @$_SESSION['msn'];
                unset($_SESSION['msn']);
                $_SESSION['mensagen'] = false;
             }           
        ?>

        <form method="post">
             <label for="cargo">Cargo</label>
             <select name ="cargo" required>
                 <option name="gernete futibol">gernete futibol</option>
                 <option name="gernete volei">gernete volei</option>
             </select>

             <label for="nome">Nome</label>
             <input type="text" name ="nome" required />

             <label for="email">Email</label>
             <input type="text" name ="email" required pattern = "[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"/>  

             <input type="submit" name="cadastra" value="enviar" />
        </form>
        
    </section><!-- formulario -->

    <section class="pesquisa-card">

        <form method="post">
                <input placeholder="Procure por: cargo,email,nome" type="text" name="busca">
                <input type="submit" name="pesquisa" value="Buscar!">
        </form>

    </section><!--pesquisa-card-->

    <section class="listagen">
         <?php 
            foreach($coordenadores as $key => $value) {?>
                <form method="post" >
                    <div class="card">
                        <ul>
                            <li class="list-group-item "><b>Cargo:</b>                              
                                <select name ="cargo<?php echo $value['id'] ?>">
                                    <option name="<?php echo $value['cargo'] ?>"><?php echo $value['cargo'] ?></option>
                                    <option name="gernete futibol">gernete futibol</option>
                                    <option name="gernete volei">gernete volei</option>                                               
                                </select>
                            </li>
                            
                            <li class="list-group-item ">
                                <b>Nome:</b>
                                <input type="text" name ="nome<?php echo $value['id'] ?>" value="<?php echo $value['nome'] ?>" />
                            </li>

                            <li class="list-group-item ">
                                <b>E-mail:</b><input type="text" name ="email<?php echo $value['id'] ?>" value="<?php echo $value['email'] ?>"
                                required pattern = "[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"/>                               
                            </li>
                            
                            <input type="hidden" name ="emailatual<?php echo $value['id'] ?>" value="<?php echo $value['email'] ?>" />
                            <input type="hidden" name ="id" value="<?php echo $value['id'] ?>" />

                            <button type="submit" name="editar" class="btn btn-link">Editar</button>
                            <button type="submit" name="excluir" class="btn btn-link" actionBtn="exluir" >Excluir</button>
                        </ul>
                    </div><!--card-->
                </form>				
         <?php }?>
        <div class="clear"></div>
    </section><!--listagen-->
</div><!-- container -->
 
