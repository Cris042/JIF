<?php
    
	namespace models;
	
    class cadastro
    {
        public static function cadastro_comunicados()
        {
            $mensagen = strip_tags($_POST['mensagen']);
            $titulo =   strip_tags($_POST['titulo']);
            $verifica = \models\bd::verifica('comunicado','titulo = ?',array($titulo));
            
            if($verifica == true)
            {
               \models\bd::inserir('comunicado','?,?',array($mensagen,$titulo));
               \models\bd::msn('Cadastro efeituado com sucesso','1');
            }
            else
            {
                \models\bd::msn('Cadastro ja existente','2');
            }
        }

        public static function cadastro_coodenadores()
        {
             $cargo = strip_tags($_POST['cargo']);
             $nome = strip_tags($_POST['nome']);
             $email = strip_tags($_POST['email']);
             $verifica_email = \models\bd::verifica('coordenadores_modalidades','email = ?',array($email));
            
             if($verifica_email == true)
             {
               \models\bd::inserir('coordenadores_modalidades','?,?,?',array($cargo,$nome,$email));
               \models\bd::msn('Cadastro efeituado com sucesso','1');
             }
             else
             {
                \models\bd::msn('Cadastro ja existente','2');
             }

        }
        
        public static function cadastro_equipe()
        {
             $nome = strip_tags($_POST['nome']);
             $cargo = strip_tags($_POST['cargo']);
             $email = strip_tags($_POST['email']);
             $telefone = strip_tags($_POST['telefone']);
             $verifica_email = \models\bd::verifica('organizacao','email = ?',array($email));
            
             if($verifica_email == true)
             {
               \models\bd::inserir('organizacao','?,?,?,?',array($cargo,$telefone,$email,$nome));
               \models\bd::msn('Cadastro efeituado com sucesso','1');
             }
             else
             {
                \models\bd::msn('Cadastro ja existente','2');
             }

        }
        public static function cadastro_telefones()
        {
             $telefone = strip_tags($_POST['telefone']);
             $instituicao = strip_tags($_POST['instituicao']);
             $verifica_tel = \models\bd::verifica('telefones','numero = ?',array($telefone));
            
             if($verifica_tel == true) 
             {
               \models\bd::inserir('telefones','?,?',array($telefone,$instituicao));
               \models\bd::msn('Cadastro efeituado com sucesso','1');
             }
             else
             {
                \models\bd::msn('Cadastro ja existente','2');
             }
        }
        public static function cadastro_transporte()
        {
             $numero = strip_tags($_POST['numero']);
             $telefone = strip_tags($_POST['telefone']);
             $regiao = strip_tags($_POST['regiao']);
             $verifica_tel = \models\bd::verifica('transporte','telefone = ?',array($telefone));
            
             if($verifica_tel == true)
             {
               \models\bd::inserir('transporte','?,?,?',array($numero,$telefone,$regiao));
               \models\bd::msn('Cadastro efeituado com sucesso','1');
             }
             else
             {
                \models\bd::msn('Cadastro ja existente','2');
             }
        }
        public static function cadastro_atracao()
        {
             $data = strip_tags($_POST['data']);
             $horario = strip_tags($_POST['horario']);
             $local = strip_tags($_POST['local']);
             $nome = strip_tags($_POST['nome']);
             
             \models\bd::inserir('turismo','?,?,?,?',array($data,$horario,$local,$nome));
             \models\bd::msn('Cadastro efeituado com sucesso','1');
                           
        }

        public static function cadastro_hospitais()
        {
             $plano = strip_tags($_POST['plano']);
             $telefone = strip_tags($_POST['telefone']);
             $endereco = strip_tags($_POST['endereco']);
             $instituicao = strip_tags($_POST['instituicao']);        
             $verifica_tel = \models\bd::verifica('hospitais','telefone = ?',array($telefone));
            
               if($verifica_tel == true)
               {
               \models\bd::inserir('hospitais','?,?,?,?',array($plano,$telefone,$endereco,$instituicao));
               \models\bd::msn('Cadastro efeituado com sucesso','1');
               }    
               else
               {
                  \models\bd::msn('Cadastro ja existente','2');
               }       
        }
        public static function cadastro_boletim()
        {
             $imagem = $_FILES['imagem'];
             $mng = strip_tags($_POST['mensagen']);
             $autor = strip_tags($_POST['autor']);
             $imagens = array();
             $amountFiles = count($_FILES['imagems']['name']);
             $imgvalidas = false;

               for($i =0; $i < @$amountFiles; $i++)
               {
                     $imagemAtual = ['type'=>$_FILES['imagems']['type'][$i],
                     'size'=>$_FILES['imagems']['size'][$i]];

                     if(\models\bd::imagemValida($imagemAtual) == true)
                        $imgvalidas = true;
                     else
                        $imgvalidas = false;
               }

              
               if(\models\bd::imagemValida($imagem) == true && $imgvalidas == true )
               {
                  $img =\models\bd::uploadFile($imagem);
                  \models\bd::inserir('mensagen_reitoria','?,?,?',array($img,$mng,$autor));
                  for($i = 0; $i < $amountFiles; $i++)
                  {
                     $imagemAtual = ['tmp_name'=>$_FILES['imagems']['tmp_name'][$i],
                        'name'=>$_FILES['imagems']['name'][$i]];
                     $imagens[] = \models\bd::uploadFile($imagemAtual);
                  }
                  foreach ($imagens as $key => $value) 
                  {
                      \models\bd::inserir('boletim_documentos','?',array($value));
                  }
                  \models\bd::msn('Cadastro efeituado com sucesso','1');
               }
               else
               \models\bd::msn('Imagem Invalida','2');
        } 
    }
?>