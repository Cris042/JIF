<?php
    
	namespace models;
	
    class editar
    {
        public static function editar_comunicados()
        {
            $id = $_POST['id'];
            $titulo = strip_tags($_POST['titulo'.$id]);
            $tituloatual = strip_tags($_POST['tituloatual'.$id]);
            $mensagen = strip_tags($_POST['mensagen'.$id]);
            if($titulo != $tituloatual)
                $verifica = \models\bd::verifica('comunicado','titulo = ?',array($titulo));
            else
                $verifica = true;

            if($verifica == true)
            {
                \models\bd::editar('comunicado','titulo = ?,mensagen = ?',array($titulo,$mensagen),$id);
                \models\bd::msn('Atualizalçao realizada com sucesso','1');
            }
            else
            {
                \models\bd::msn('Parametros invalidos','2');
            }

        }

        public static function editar_coordenador()
        {
            $id = $_POST['id'];
            $cargo = strip_tags($_POST['cargo'.$id]);
            $nome = strip_tags($_POST['nome'.$id]);
            $email = strip_tags($_POST['email'.$id]);
            $emailatual = strip_tags($_POST['emailatual'.$id]);

            if($email != $emailatual)
                $verifica = \models\bd::verifica('coordenadores_modalidades','email = ?',array($email));
            else
                $verifica = true;

            if($verifica == true)
            {
                \models\bd::editar('coordenadores_modalidades','cargo = ?,nome= ?,email = ?',
                 array($cargo,$nome,$email),$id);
                \models\bd::msn('Atualizalçao realizada com sucesso','1');
            }
            else
            {
                \models\bd::msn('Parametros invalidos','2');
            }

        }

        public static function editar_hospitais()
        {
            $id = $_POST['id'];
            $plano = strip_tags($_POST['plano'.$id]);
            $telefone = strip_tags($_POST['telefone'.$id]);
            $endereco = strip_tags($_POST['endereco'.$id]);
            $telefoneatual = strip_tags($_POST['telefoneatual'.$id]);
            $instituicao = strip_tags($_POST['instituicao'.$id]);

            if($telefone != $telefoneatual)
                $verifica = \models\bd::verifica('hospitais','telefone = ?',array($telefone));
            else
                $verifica = true;

            if($verifica == true)
            {
                \models\bd::editar('hospitais','plano = ?,telefone = ?,instituicao = ?,endereco = ? ',
                 array($plano,$telefone,$instituicao,$endereco),$id);
                \models\bd::msn('Atualizalçao realizada com sucesso','1');
            }
            else
            {
                \models\bd::msn('Parametros invalidos','2');
            }

        }

        public static function editar_equipe()
        {
            $id = $_POST['id'];
            $cargo = strip_tags($_POST['cargo'.$id]);
            $telefoneatual = strip_tags($_POST['telefoneatual'.$id]);
            $telefone = strip_tags($_POST['telefone'.$id]);
            $emailatual = strip_tags($_POST['emailatual'.$id]);
            $email = strip_tags($_POST['email'.$id]);

            if($telefone != $telefoneatual)
                $verifica = \models\bd::verifica('organizacao','telefone = ?',array($telefone));
            
            if($email != $emailatual)
                $verifica = \models\bd::verifica('organizacao','email = ?',array($email));

            else if($email == $emailatual && $telefone == $telefoneatual)
                $verifica = true;


            if($verifica == true)
            {
                \models\bd::editar('organizacao','cargo = ?,telefone = ?,email = ?',
                 array($cargo,$telefone,$email),$id);
                \models\bd::msn('Atualizalçao realizada com sucesso','1');
            }
            else
            {
                \models\bd::msn('Parametros invalidos','2');
            }

        }

        public static function editar_telefone()
        {
            $id = $_POST['id'];
            $instituicao = strip_tags($_POST['instituicao'.$id]);
            $telefoneatual = strip_tags($_POST['numeroatual'.$id]);
            $telefone = strip_tags($_POST['numero'.$id]);
          

            if($telefone != $telefoneatual)
                $verifica = \models\bd::verifica('telefones','numero = ?',array($telefone));
            else
                $verifica = true;

            if($verifica == true)
            {
                \models\bd::editar('telefones','numero = ?,instituicao = ?',
                 array($telefone,$instituicao),$id);
                \models\bd::msn('Atualizalçao realizada com sucesso','1');
            }
            else
            {
                \models\bd::msn('Parametros invalidos','2');
            }

        }

        public static function editar_transporte()
        {
            $id = $_POST['id'];
            $numero_linha = strip_tags($_POST['numero_linha'.$id]);
            $telefoneatual = strip_tags($_POST['telefoneatual'.$id]);
            $telefone = strip_tags($_POST['telefone'.$id]);
            $regiao = strip_tags($_POST['regiao'.$id]);
          

            if($telefone != $telefoneatual)
                $verifica = \models\bd::verifica('transporte','telefone = ?',array($telefone));
            else
                $verifica = true;

            if($verifica == true)
            {
                \models\bd::editar('transporte','telefone = ?,numero_linha = ?,regiao = ?',
                 array($telefone,$numero_linha,$regiao),$id);
                \models\bd::msn('Atualizalçao realizada com sucesso','1');
            }
            else
            {
                \models\bd::msn('Parametros invalidos','2');
            }

        }

        public static function editar_turismo()
        {
            $id = $_POST['id'];
            $data = strip_tags($_POST['data'.$id]);
            $hora = strip_tags($_POST['hora'.$id]);
            $local = strip_tags($_POST['local'.$id]);
            $nome = strip_tags($_POST['nome'.$id]);
              
            \models\bd::editar('turismo','data = ?,hora = ?,local = ? ,nome = ?',
            array($data,$hora,$local,$nome),$id);
            \models\bd::msn('Atualizalçao realizada com sucesso','1');
            
        }
        public static function editar_boletim()
        {
            $id = $_POST['id'];
            @$imagem = $_FILES['imagem'];
            $mng = strip_tags($_POST['mensagen']);
            $autor = strip_tags($_POST['autor']);

            \models\bd::editar('mensagen_reitoria','autor = ?,mensagem = ?',
            array($autor,$mng),$id);

            if(@$imagem != "")
            {
                if(\models\bd::imagemValida($imagem) == true)
                {
                    $img =\models\bd::uploadFile($imagem);
                    \models\bd::editar('mensagen_reitoria','img = ?',
                    array($img),$id);
                    \models\bd::msn('Atualizalçao realizada com sucesso','1');
                }
            }
            else
            {
                \models\bd::msn('Imagem Invalida','2'); 
            }
                   
            
            
        }
    }

?>