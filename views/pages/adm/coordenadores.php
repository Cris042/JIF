<?php 
     $query = "";
     $coordenadores = \models\bd::pesquisa('coordenadores_modalidades',$query);
?>
<div id="container">      
    <section class="formulario">
        <h1>Cadastra Coordenadores De Modalidade</h1>

        <?php 
             if(@$_SESSION['mensagen'] == true);
             {
                echo @$_SESSION['msn'];
                unset($_SESSION['msn']);
                @$_SESSION['mensagen'] = false;
             }           
        ?>

        <form method="post">
             <label for="cargo">Cargo</label>
             <select name ="cargo" required>
                   <option name="Coordenador Técnico Atletismo">Coordenador Técnico Atletismo</option>
                   <option name="Coordenador Técnico Basquete">Coordenador Técnico Basquete </option>    
                   <option name="Coordenador Técnico Futsal">Coordenador Técnico Futsal </option>
                   <option name="Coordenador Técnico Handebol">Coordenador Técnico Handebol </option>    
                   <option name="Coordenador Técnico Judô">Coordenador Técnico Judô </option>
                   <option name="Coordenador Técnico Natação">Coordenador Técnico Natação </option>       
                   <option name="Coordenador Técnico">Coordenador Técnico </option>
                   <option name="Coordenador Técnico Voleibol">Coordenador Técnico Voleibol  </option>    
                   <option name="Coordenador Técnico Vôlei de Praia">Coordenador Técnico Vôlei de Praia  </option>
                    <option name="Coordenador Técnico Xadrez">Coordenador Técnico Xadrez </option>                    
             </select>

             <label for="nome">Nome</label>
             <input type="text" name ="nome" required />

             <label for="email">Email</label>
             <input type="text" name ="email" required pattern = "[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"/>  

             <input type="submit" name="cadastra" value="enviar" />
        </form>
        
    </section><!-- formulario -->

    <section class="pesquisa-card">
        <form method="post" class="ajax" action="models/pesquisa_ajax.php">
                <input placeholder="Procure por: Nome,E-mail e Cargo" class="input-busca" type="text" name="pesquisa-coordenadores" />
                <div  class="icone-search">
                  <button disabled name="pesquisa" class="icone-search"><i class="fas fa-search"></i></button>
                </div>
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
                                    <option name="Coordenador Técnico Atletismo">Coordenador Técnico Atletismo</option>
                                    <option name="Coordenador Técnico Basquete">Coordenador Técnico Basquete </option>    
                                    <option name="Coordenador Técnico Futsal">Coordenador Técnico Futsal </option>
                                    <option name="Coordenador Técnico Handebol">Coordenador Técnico Handebol </option>    
                                    <option name="Coordenador Técnico Judô">Coordenador Técnico Judô </option>
                                    <option name="Coordenador Técnico Natação">Coordenador Técnico Natação </option>       
                                    <option name="Coordenador Técnico">Coordenador Técnico </option>
                                    <option name="Coordenador Técnico Voleibol">Coordenador Técnico Voleibol  </option>    
                                    <option name="Coordenador Técnico Vôlei de Praia">Coordenador Técnico Vôlei de Praia  </option>
                                    <option name="Coordenador Técnico Xadrez">Coordenador Técnico Xadrez </option>                                               
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
                            <input type="hidden" name ="cargoatual<?php echo $value['id'] ?>" value="<?php echo $value['cargo'] ?>" />
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
 
