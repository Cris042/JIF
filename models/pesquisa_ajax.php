<?php
   
   include('../MySql.php'); 
   $data = "";
    if(isset($_POST['pesquisa-comunicado']))
    {
       
		 $busca = strip_tags($_POST['pesquisa-comunicado']);
		 $query = " WHERE titulo LIKE '%$busca%' "; 
         $sql = \MySql::conectar()->prepare("SELECT * FROM comunicado $query ");	
         $sql->execute();
         $sql = $sql->fetchAll();
   
	
        foreach ($sql as $key => $value) 
        {           
            $data.=
                '<form method="post">  
                    <div class="card">                   
                        <ul>                                           
                            <li class="list-group-item ">
                                <input type="text"  class = "input-card text-center" name="titulo'.$value['id'] .'" 
                                value="'.$value['titulo'].'" />                                
                            </li>

                            <li class="list-group-item">
                                    <textarea class="textarea-card" type="text" name="mensagen'.$value['id'].'"
                                    value="'.$value['mensagen'].'" >'.$value['mensagen'].'                                    
                                    </textarea>
                            </li>

                            <input type="hidden" name="id" value="'.$value['id'].'" />
                            <input type="hidden" name="tituloatual'.$value['id'].'" value="'.$value['titulo'].'" />
                            
                            <button type="submit" name="editar" class="btn btn-link">Editar</button>
                            <button 
                                  type="submit" name="excluir" class="btn btn-link" actionBtn="exluir" >Excluir
                            </button>                           
                            
                            
                        </ul>         
                    </div><!--card-->
                </form>				
                <div class="clear"></div>
            ';		
        }
     }

    if(isset($_POST['pesquisa-coordenadores']))
    {
        
          $busca = strip_tags($_POST['pesquisa-coordenadores']);
          $query = " WHERE cargo LIKE '%$busca%' or nome LIKE '%$busca%' or email LIKE '%$busca%' ";
          $sql = \MySql::conectar()->prepare("SELECT * FROM coordenadores_modalidades $query ");	
          $sql->execute();
          $sql = $sql->fetchAll();
    
     
         foreach ($sql as $key => $value) 
         {           
             $data.=
                 '<form method="post">  
                     <div class="card">                   
                         <ul>                                           
                            <li class="list-group-item "><b>Cargo:</b>                              
                                <select name ="cargo'.$value['id'].'">
                                    <option name="'.$value['cargo'].'">'.$value['cargo'].'</option>
                                    <option name="gernete futibol">gernete futibol</option>
                                    <option name="gernete volei">gernete volei</option>                                               
                                </select>
                            </li>
                            
                            <li class="list-group-item ">
                                <b>Nome:</b>
                                <input type="text" name ="nome'.$value['id'].'" value="'.$value['nome'].'" />
                            </li>

                            <li class="list-group-item ">
                                <b>E-mail:</b><input type="text" name ="email'.$value['id'].'" value="'.$value['email'].'"
                                required pattern = "[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"/>                               
                            </li>
                            
                            <input type="hidden" name ="emailatual'.$value['id'].'" value="'.$value['email'].'" />
                            <input type="hidden" name ="id" value="'.$value['id'].'" />

                            <button type="submit" name="editar" class="btn btn-link">Editar</button>
                            <button type="submit" name="excluir" class="btn btn-link" actionBtn="exluir" >Excluir</button>
                                    
                         </ul>           
                     </div><!--card-->
                 </form>				
                 <div class="clear"></div>
             ';		
         }
     }

    if(isset($_POST['pesquisa-equipe']))
    {
        
          $busca = strip_tags($_POST['pesquisa-equipe']);
          $query = " WHERE cargo LIKE '%$busca%' or nome LIKE '%$busca%' or 
          email LIKE '%$busca%' or responsavel  LIKE '%$busca%' or telefone LIKE '%$busca%' ";
          $sql = \MySql::conectar()->prepare("SELECT * FROM organizacao $query ");	
          $sql->execute();
          $sql = $sql->fetchAll();
    
     
         foreach ($sql as $key => $value) 
         {           
             $data.=
                 '<form method="post">  
                     <div class="card">                   
                        <ul>
                            <li class="list-group-item ">
                                <b>Nome:</b>
                                <input type="text" name = "nome'.$value['id'].'" value="'.$value['nome'].'" />
                            </li>

                            <li class="list-group-item "><b>Cargo:</b>                             
                                <select name ="cargo'.$value['id'].'">
                                    <option name="'.$value['cargo'].'">'.$value['cargo'].'</option>
                                    <option name="gernete">gernete</option>                                              
                                </select>
                            </li>

                            <li class="list-group-item ">
                                <b>Responsavel</b>  
                                <input type="text" name ="responsavel'.$value['id'].'" value="'.$value['responsavel'].'" />
                            </li>

                            <li class="list-group-item ">
                                <b>Telefone</b> 
                                <input type="text"  class="telefone" name ="telefone'.$value['id'].'" value="'.$value['telefone'].'" /> 
                            </li>

                            <li class="list-group-item ">
                                <b>E-mail:</b><input type="text" name ="email'.$value['id'].'" value="'.$value['email'].'"
                                required pattern = "[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"/>                            
                            </li>
                            
                            <input type="hidden" name ="emailatual'.$value['id'].'" value="'.$value['email'].'" />
                            <input type="hidden" name ="id" value="'.$value['id'].'" />
                            <input type="hidden" name ="telefoneatual'.$value['id'].'" value="'.$value['telefone'].'" />

                            <button type="submit" name="editar" class="btn btn-link">Editar</button>
                            <button type="submit" name="excluir" class="btn btn-link" actionBtn="exluir" >Excluir</button>
                        </ul>     
                     </div><!--card-->
                 </form>				
                 <div class="clear"></div>
             ';		
         }
     }

    if(isset($_POST['pesquisa-hospitais']))
    {
        
          $busca = strip_tags($_POST['pesquisa-hospitais']);
          $query = " WHERE plano LIKE '%$busca%' or instituicao LIKE '%$busca%'
          or telefone LIKE '%$busca%' or endereco LIKE '%$busca%'";
          $sql = \MySql::conectar()->prepare("SELECT * FROM hospitais $query ");	
          $sql->execute();
          $sql = $sql->fetchAll();
    
     
         foreach ($sql as $key => $value) 
         {           
             $data.=
                 '<form method="post">  
                     <div class="card">                   
                        <ul>
                            <li class="list-group-item ">
                                <b>Plano:</b>
                                <input type="text" name ="plano'.$value['id'].'" value="'.$value['plano'].'"/>                            
                            </li>

                            <li class="list-group-item ">
                                <b>Instituiçao:</b>
                                <input type="text" name ="instituicao'.$value['id'].'" value="'.$value['instituicao'].'"/>
                            </li>

                            <li class="list-group-item ">
                                <b>Telefone:</b>
                                <input type="text" class="telefone" name ="telefone'.$value['id'].'" value="'.$value['telefone'].'" />
                            </li>

                            <li class="list-group-item ">
                                <b>Endereço:</b>
                                <input type="text" name ="endereco'.$value['id'].'" value="'.$value['endereco'].'"/>
                            </li>
                            
                            <input type="hidden" name ="id" value="'.$value['id'].'"  /> 
                            <input type="hidden" name ="telefoneatual'.$value['id'].'" value="'.$value['telefone'].'" />

                            <button type="submit" name="editar" class="btn btn-link">Editar</button>
                            <button type="submit" name="excluir" class="btn btn-link" actionBtn="exluir" >Excluir</button>
                        </ul>     
                     </div><!--card-->
                 </form>				
                 <div class="clear"></div>
             ';		
         }
     }

     if(isset($_POST['pesquisa-telefone']))
     {
         
           $busca = strip_tags($_POST['pesquisa-telefone']);
           $query = "WHERE numero LIKE '%$busca%' or instituicao LIKE '%$busca%'";
           $sql = \MySql::conectar()->prepare("SELECT * FROM telefones $query ");	
           $sql->execute();
           $sql = $sql->fetchAll();
     
      
          foreach ($sql as $key => $value) 
          {           
              $data.=
                  '<form method="post">  
                      <div class="card">                   
                         <ul>
                            <li class="list-group-item">
                                <b>Instituiçao</b><input type="text" name ="instituicao'.$value['id'].'" value="'.$value['instituicao'].'"/> 
                            </li>

                            <li class="list-group-item">
                                <b>Numero:</b><input type="text" class="telefone" name ="numero'.$value['id'].'" value="'.$value['numero'].'" />                              
                            </li>

                            <input type="hidden" name ="numeroatual'.$value['id'].'" value="'.$value['numero'].'" /> 
                            <input type="hidden" name ="id" value="'.$value['id'].'" /> 

                            <button type="submit" name="editar" class="btn btn-link">Editar</button>
                            <button type="submit" name="excluir" class="btn btn-link" actionBtn="exluir" >Excluir</button>
                         </ul>     
                      </div><!--card-->
                  </form>				
                  <div class="clear"></div>
              ';		
          }
      }

     if(isset($_POST['pesquisa-trasnporte']))
     {
         
           $busca = strip_tags($_POST['pesquisa-trasnporte']);
           $query = " WHERE numero_linha LIKE '%$busca%' or regiao  LIKE '%$busca%'
           or telefone  LIKE '%$busca%'";
           $sql = \MySql::conectar()->prepare("SELECT * FROM transporte $query ");	
           $sql->execute();
           $sql = $sql->fetchAll();
     
      
          foreach ($sql as $key => $value) 
          {           
              $data.=
                  '<form method="post">  
                      <div class="card">                   
                         <ul>
                            <li class="list-group-item">
                                <b>Numero Da linha:</b>
                            <input type="text" class="numero_linha" name ="numero_linha'.$value['id'].'" value="'.$value['numero_linha'].'"/>
                            </li>

                            <li class="list-group-item">
                                <b>Telefone:</b>
                                <input type="text" class="telefone" name ="telefone'.$value['id'].'" value="'.$value['telefone'].'" />
                            </li>

                            <li class="list-group-item">
                                <b>Regiao:</b>
                                <input type="text" name ="regiao'.$value['id'].'" value="'.$value['regiao'].'" />
                            </li>    

                            <input type="hidden" name="id"  value="'.$value['id'].'" />
                            <input type="hidden" name="telefoneatual'.$value['id'].'"  value="'.$value['telefone'].'" />

                            <button type="submit" name="editar" class="btn btn-link">Editar</button>
                            <button type="submit" name="excluir" class="btn btn-link" actionBtn="exluir" >Excluir</button>
                         </ul>     
                      </div><!--card-->
                  </form>				
                  <div class="clear"></div>
              ';		
          }
      }

      if(isset($_POST['pesquisa-turismo']))
      {
          
            $busca = strip_tags($_POST['pesquisa-turismo']);
            $query = " WHERE data LIKE '%$busca%' or hora  LIKE '%$busca%'
            or nome LIKE '%$busca%' or local LIKE '%$busca%'";
            $sql = \MySql::conectar()->prepare("SELECT * FROM turismo $query ");	
            $sql->execute();
            $sql = $sql->fetchAll();
      
       
           foreach ($sql as $key => $value) 
           {           
               $data.=
                   '<form method="post">  
                       <div class="card">                   
                          <ul>
                            <li class="list-group-item ">
                                 <b>Data:</b>
                            <input type="date" name ="data'.$value['id'].'" min="2019-10-02" max="2019-10-31" value="'.$value['data'].'"/>
                            </li>

                            <li class="list-group-item ">
                                <b>Horario:</b>
                                <input type="text" class="hora" name ="hora'.$value['id'].'"  value="'.$value['hora'].'" />                             
                            </li>

                            <li class="list-group-item ">
                                <b>Local:</b>
                                <input type="text" name ="local'.$value['id'].'"  value="'.$value['local'].'" /> 
                            </li>

                            <li class="list-group-item ">
                                <b>Nome</b>
                                <input type="text" name ="nome'.$value['id'].'"  value="'.$value['nome'].'" /> 
                            </li>
                            
                            <input type="hidden" name="id" value="'.$value['id'].'" />

                            <button type="submit" name="editar" class="btn btn-link">Editar</button>
                            <button type="submit" name="excluir" class="btn btn-link" actionBtn="exluir" >Excluir</button>
                          </ul>     
                       </div><!--card-->
                   </form>				
                   <div class="clear"></div>
               ';		
           }
       }
       
       if(isset($_POST['pesquisa-comunicado-user']))
       {
           
             $busca = strip_tags($_POST['pesquisa-comunicado-user']);
             $query = " WHERE titulo LIKE '%$busca%' "; 
             $sql = \MySql::conectar()->prepare("SELECT * FROM comunicado $query ");	
             $sql->execute();
             $sql = $sql->fetchAll();
       
        
            foreach ($sql as $key => $value) 
            {           
                $data.=
                    '<form method="post">  
                        <div class="card user">                   
                        <ul>                                           
                            <li class="list-group-item ">
                                <P><b>Titulo :</b><span class="card-txt">'.$value['titulo'].'</span></P>                             
                            </li>
                            
                            <li class="list-group-item">
                                <p><span class="card-msn text-center">'.$value['mensagen'].'</span></p>  
                            </li>
                             
                         </ul>           
                        </div><!--card-->
                    </form>				
                    <div class="clear"></div>
                ';		
            }
        }

        if(isset($_POST['pesquisa-coordenadores-user']))
        {
            
              $busca = strip_tags($_POST['pesquisa-coordenadores-user']);
              $query = " WHERE cargo LIKE '%$busca%' or nome LIKE '%$busca%' or email LIKE '%$busca%' ";
              $sql = \MySql::conectar()->prepare("SELECT * FROM coordenadores_modalidades $query ");	
              $sql->execute();
              $sql = $sql->fetchAll();
        
         
             foreach ($sql as $key => $value) 
             {           
                 $data.=
                     '<form method="post">  
                         <div class="card">                   
                         <ul>                                           
                            <li class="list-group-item ">
                               <P><b>Cargo :</b><span class="card-txt">'.$value['cargo'].'</span></P>                             
                            </li>
                            
                            <li class="list-group-item ">
                                <P><b>Nome :</b><span class="card-txt">'.$value['nome'].'</span></P>                             
                            </li>

                            <li class="list-group-item ">
                                <P><b>E-mail :</b><span class="card-txt">'.$value['email'].'</span></P>                             
                            </li>                              
                          </ul>           
                         </div><!--card-->
                     </form>				
                     <div class="clear"></div>
                 ';		
             }
        }
        if(isset($_POST['pesquisa-equipe-user']))
        {
            
              $busca = strip_tags($_POST['pesquisa-equipe-user']);
              $query = " WHERE cargo LIKE '%$busca%' or nome LIKE '%$busca%' or 
              email LIKE '%$busca%' or responsavel  LIKE '%$busca%' or telefone LIKE '%$busca%' ";
              $sql = \MySql::conectar()->prepare("SELECT * FROM organizacao $query ");	
              $sql->execute();
              $sql = $sql->fetchAll();
        
         
             foreach ($sql as $key => $value) 
             {           
                 $data.=
                     '<form method="post">  
                         <div class="card">                   
                            <ul>                                           
                               <li class="list-group-item ">
                                    <P><b>Cargo :</b><span class="card-txt">'.$value['cargo'].'</span></P>                             
                                </li>

                                <li class="list-group-item ">
                                    <P><b>E-mail :</b><span class="card-txt">'.$value['email'].'</span></P>                             
                                </li>

                                <li class="list-group-item ">
                                    <P><b>Nome :</b><span class="card-txt">'.$value['nome'].'</span></P>                             
                                </li>

                                <li class="list-group-item ">
                                    <P><b>Telefone :</b><span class="card-txt">'.$value['telefone'].'</span></P>                             
                                </li>

                                <li class="list-group-item ">
                                    <P><b>Responsavel :</b><span class="card-txt">'.$value['responsavel'].'</span></P>                             
                                </li>                        
                            </ul>           
                         </div><!--card-->
                     </form>				
                     <div class="clear"></div>
                 ';		
             }
         }
         if(isset($_POST['pesquisa-hospitais-user']))
         {
            
              $busca = strip_tags($_POST['pesquisa-hospitais-user']);
              $query =" WHERE plano LIKE '%$busca%' or instituicao LIKE '%$busca%'
              or telefone LIKE '%$busca%' or endereco LIKE '%$busca%'";
              $sql = \MySql::conectar()->prepare("SELECT * FROM hospitais $query ");	
              $sql->execute();
              $sql = $sql->fetchAll();
        
         
             foreach ($sql as $key => $value) 
             {           
                 $data.=
                     '<form method="post">  
                         <div class="card">                   
                            <ul>                                           
                                <li class="list-group-item ">
                                    <P><b>Instituiçao :</b><span class="card-txt">'.$value['instituicao'].'</span></P>                             
                                </li>

                                <li class="list-group-item ">
                                    <P><b>Telefone :</b><span class="card-txt">'.$value['telefone'].'</span></P>                             
                                </li>

                                <li class="list-group-item ">
                                    <P><b>Endereço :</b><span class="card-txt">'.$value['endereco'].'</span></P>                             
                                </li>

                                <li class="list-group-item ">
                                    <P><b>Plano :</b><span class="card-txt">'.$value['plano'].'</span></P>                             
                                </li>             
                            </ul>           
                         </div><!--card-->
                     </form>				
                     <div class="clear"></div>
                 ';		
             }
         }
         if(isset($_POST['pesquisa-telefones-user']))
         {
            
              $busca = strip_tags($_POST['pesquisa-telefones-user']);
              $query = " WHERE numero LIKE '%$busca%' or instituicao LIKE '%$busca%'";
              $sql = \MySql::conectar()->prepare("SELECT * FROM telefones $query ");	
              $sql->execute();
              $sql = $sql->fetchAll();
        
         
             foreach ($sql as $key => $value) 
             {           
                 $data.=
                     '<form method="post">  
                         <div class="card">                   
                            <ul>                                           
                                <li class="list-group-item ">
                                    <P><b>Instituiçao :</b><span class="card-txt">'.$value['instituicao'].'</span></P>                             
                                </li>

                                <li class="list-group-item ">
                                    <P><b>Telefone :</b><span class="card-txt">'.$value['numero'].'</span></P>                             
                                </li>             
                            </ul>           
                         </div><!--card-->
                     </form>				
                     <div class="clear"></div>
                 ';		
             }
         }
         if(isset($_POST['pesquisa-trasnporte-user']))
         {
            
              $busca = strip_tags($_POST['pesquisa-trasnporte-user']);
              $query = " WHERE numero_linha LIKE '%$busca%' or regiao  LIKE '%$busca%'
              or telefone  LIKE '%$busca%'";
              $sql = \MySql::conectar()->prepare("SELECT * FROM transporte $query ");	
              $sql->execute();
              $sql = $sql->fetchAll();
        
         
             foreach ($sql as $key => $value) 
             {           
                 $data.=
                     '<form method="post">  
                         <div class="card">                   
                            <ul>                                           
                                <li class="list-group-item ">
                                     <P><b>Numero da linha :</b><span class="card-txt">'.$value['numero_linha'].'</span></P>                             
                                </li>

                                <li class="list-group-item ">
                                    <P><b>Telefone :</b><span class="card-txt">'.$value['telefone'].'</span></P>                             
                                </li>

                                <li class="list-group-item ">
                                    <P><b>Regiao :</b><span class="card-txt">'.$value['regiao'].'</span></P>                             
                                </li>               
                            </ul>           
                         </div><!--card-->
                     </form>				
                     <div class="clear"></div>
                 ';		
             }
         }
         if(isset($_POST['pesquisa-turismo-user']))
         {
            
              $busca = strip_tags($_POST['pesquisa-turismo-user']);
              $query = " WHERE data LIKE '%$busca%' or hora  LIKE '%$busca%'
              or nome LIKE '%$busca%' or local LIKE '%$busca%'";
              $sql = \MySql::conectar()->prepare("SELECT * FROM turismo $query ");	
              $sql->execute();
              $sql = $sql->fetchAll();
        
         
             foreach ($sql as $key => $value) 
             {           
                 $data.=
                     '<form method="post">  
                         <div class="card">                   
                            <ul>                                           
                                <li class="list-group-item ">
                                    <P><b>Data :</b><span class="card-txt">'.$value['data'].'</span></P>                             
                                </li>

                                <li class="list-group-item ">
                                    <P><b>Horario :</b><span class="card-txt">'.$value['hora'].'</span></P>                             
                                </li>

                                <li class="list-group-item ">
                                    <P><b>Local :</b><span class="card-txt">'.$value['local'].'</span></P>                             
                                </li>

                                <li class="list-group-item ">
                                    <P><b>Nome :</b><span class="card-txt">'.$value['nome'].'</span></P>                             
                                </li>                  
                            </ul>           
                         </div><!--card-->
                     </form>				
                     <div class="clear"></div>
                 ';		
             }
         }
   
  
   echo $data;
?>