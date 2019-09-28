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
            if(@$_SESSION['mensagen'] == true);
            {
               echo @$_SESSION['msn'];
               unset($_SESSION['msn']);
               @$_SESSION['mensagen'] = false;
            }          
        ?>

        <form method="post">
             <label for="nome">Nome</label>
             <input type="text" name="nome" required/> 

             <label for="cargo">Cargo</label>
             <select name ="cargo" required>
                    <option name="PRESIDENTE DA COMISSÃO ORGANIZADORA">PRESIDENTE DA COMISSÃO ORGANIZADORA </option>  
                    <option name="PRESIDENTE DA COMISSÃO DOS JIFs">PRESIDENTE DA COMISSÃO DOS JIFs  </option>        
                    <option name="COORDENAÇÃO GERAL">COORDENAÇÃO GERAL  </option>        
                    <option name="AUXILIAR DA COORDENAÇÃO LOCAL">AUXILIAR DA COORDENAÇÃO LOCAL  </option>        
                    <option name="COORDENAÇÃO TÉCNICA DESPORTIVA">COORDENAÇÃO TÉCNICA DESPORTIVA  </option>    
                    <option name="AUXILÍAR DA COORDENAÇÃO TÉCNICA">AUXILÍAR DA COORDENAÇÃO TÉCNICA  </option>  
                    <option name="COORDENAÇÃO DE ARBITRAGEM">COORDENAÇÃO DE ARBITRAGEM   </option>        
                    <option name="SECRETARIA">SECRETARIA   </option>        
                    <option name="PRESIDENTE DA COMISSÃO DISCIPLINAR">PRESIDENTE DA COMISSÃO DISCIPLINAR   </option>        
                    <option name="COORDENADORA ADMINISTRATIVA ">COORDENADORA ADMINISTRATIVA   </option>   
                    <option name="COORDENADOR DE CERIMONIAIS">COORDENADOR DE CERIMONIAIS  </option>  
                    <option name="COORDENADOR DE RECREAÇÃO E DE CULTURA ">COORDENADOR DE RECREAÇÃO E DE CULTURA   </option>        
                    <option name="COORDENADORA DE ALOJAMENTO">COORDENADORA DE ALOJAMENTO   </option>        
                    <option name="COORDENADORA DE HOSDEDAGEM">COORDENADORA DE HOSDEDAGEM   </option>        
                    <option name="COORDENADORA DE ALIMENTACÃO ">COORDENADORA DE ALIMENTACÃO   </option>    
                    <option name="COORDENADORA DE SERVICOS GERAIS">COORDENADORA DE SERVICOS GERAIS   </option>  
                    <option name="COORDENADOR DE TRANSPORTE">COORDENADOR DE TRANSPORTE   </option>        
                    <option name="COORDENADOR DE MANUTENÇÃO">COORDENADOR DE MANUTENÇÃO    </option>        
                    <option name="COORDENADOR DE TECNOLOGIA DA INFORMAÇÃO ">COORDENADOR DE TECNOLOGIA DA INFORMAÇÃO    </option>        
                    <option name="COORDENADORA DE ASSISTÊNCIA ESTUDANTIL">COORDENADORA DE ASSISTÊNCIA ESTUDANTIL    </option>                                  
                    <option name="COORDENADOR EXECUTIVO DO CFO ">COORDENADOR EXECUTIVO DO CFO    </option>        
                    <option name="OORDENADOR DE RECEPÇÃO E INFORMAÇÕES">COORDENADOR DE RECEPÇÃO E INFORMAÇÕES   </option> 
                    <option name="COORDENADOR DE MULTIMEIOS ">COORDENADOR DE MULTIMEIOS     </option>        
                    <option name="COORDENADORA DE COMUNICAÇÃO SOCIAL">COORDENADORA DE COMUNICAÇÃO SOCIAL     </option>        
                    <option name="COORDENADORA DE ASSISTÊNCIA ESTUDANTIL">COORDENADORA DE ASSISTÊNCIA ESTUDANTIL    </option>                                  
                    <option name="COORDENADORA DE SAÚDE">COORDENADORA DE SAÚDE     </option>        
                    <option name="COORDENADOR DE TURISMO">COORDENADOR DE TURISMO   </option>       
             </select>

             <label for="telefone">Telefone</label>
             <input type="text" name ="telefone" class="telefone" required/>

             <label for="email">Email</label>
             <input type="text" name ="email" required pattern = "[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"/> 

             <input type="submit" name="cadastra" value="enviar" />
        </form>
        
    </section><!-- formulario -->

    <section class="pesquisa-card">
        <form method="post"  class="ajax" action="models/pesquisa_ajax.php">
                <input placeholder="Procure por: Nome,Cargo,Responsavel,Telefone e E-mail" class="input-busca" type="text" name="pesquisa-equipe" />
                <div  class="icone-search">
                  <button disabled name="pesquisa" class="icone-search"><i class="fas fa-search"></i></button>
                </div>
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
                                    <option name="PRESIDENTE DA COMISSÃO ORGANIZADORA">PRESIDENTE DA COMISSÃO ORGANIZADORA </option>  
                                    <option name="PRESIDENTE DA COMISSÃO DOS JIFs">PRESIDENTE DA COMISSÃO DOS JIFs  </option>        
                                    <option name="COORDENAÇÃO GERAL">COORDENAÇÃO GERAL  </option>        
                                    <option name="AUXILIAR DA COORDENAÇÃO LOCAL">AUXILIAR DA COORDENAÇÃO LOCAL  </option>        
                                    <option name="COORDENAÇÃO TÉCNICA DESPORTIVA">COORDENAÇÃO TÉCNICA DESPORTIVA  </option>    
                                    <option name="AUXILÍAR DA COORDENAÇÃO TÉCNICA">AUXILÍAR DA COORDENAÇÃO TÉCNICA  </option>  
                                    <option name="COORDENAÇÃO DE ARBITRAGEM">COORDENAÇÃO DE ARBITRAGEM   </option>        
                                    <option name="SECRETARIA">SECRETARIA   </option>        
                                    <option name="PRESIDENTE DA COMISSÃO DISCIPLINAR">PRESIDENTE DA COMISSÃO DISCIPLINAR   </option>        
                                    <option name="COORDENADORA ADMINISTRATIVA ">COORDENADORA ADMINISTRATIVA   </option>   
                                    <option name="COORDENADOR DE CERIMONIAIS">COORDENADOR DE CERIMONIAIS  </option>  
                                    <option name="COORDENADOR DE RECREAÇÃO E DE CULTURA ">COORDENADOR DE RECREAÇÃO E DE CULTURA   </option>        
                                    <option name="COORDENADORA DE ALOJAMENTO">COORDENADORA DE ALOJAMENTO   </option>        
                                    <option name="COORDENADORA DE HOSDEDAGEM">COORDENADORA DE HOSDEDAGEM   </option>        
                                    <option name="COORDENADORA DE ALIMENTACÃO ">COORDENADORA DE ALIMENTACÃO   </option>    
                                    <option name="COORDENADORA DE SERVICOS GERAIS">COORDENADORA DE SERVICOS GERAIS   </option>  
                                    <option name="COORDENADOR DE TRANSPORTE">COORDENADOR DE TRANSPORTE   </option>        
                                    <option name="COORDENADOR DE MANUTENÇÃO">COORDENADOR DE MANUTENÇÃO    </option>        
                                    <option name="COORDENADOR DE TECNOLOGIA DA INFORMAÇÃO ">COORDENADOR DE TECNOLOGIA DA INFORMAÇÃO    </option>        
                                    <option name="COORDENADORA DE ASSISTÊNCIA ESTUDANTIL">COORDENADORA DE ASSISTÊNCIA ESTUDANTIL    </option>                                  
                                    <option name="COORDENADOR EXECUTIVO DO CFO ">COORDENADOR EXECUTIVO DO CFO    </option>        
                                    <option name="OORDENADOR DE RECEPÇÃO E INFORMAÇÕES">COORDENADOR DE RECEPÇÃO E INFORMAÇÕES   </option> 
                                    <option name="COORDENADOR DE MULTIMEIOS ">COORDENADOR DE MULTIMEIOS     </option>        
                                    <option name="COORDENADORA DE COMUNICAÇÃO SOCIAL">COORDENADORA DE COMUNICAÇÃO SOCIAL     </option>        
                                    <option name="COORDENADORA DE ASSISTÊNCIA ESTUDANTIL">COORDENADORA DE ASSISTÊNCIA ESTUDANTIL    </option>                                  
                                    <option name="COORDENADORA DE SAÚDE">COORDENADORA DE SAÚDE     </option>        
                                    <option name="COORDENADOR DE TURISMO">COORDENADOR DE TURISMO   </option>        
                                </select>
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
                            <input type="hidden" name ="cargoatual<?php echo $value['id'] ?>" value="<?php echo $value['cargo'] ?>" />
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
 
