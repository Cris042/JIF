<?php
    
	namespace models;
	
    class deletar
    {
      
        public static function excluir_comunicados()
        {
            $id = $_POST['id'];
            \models\bd::excluir('comunicado',$id);
            \models\bd::msn('Elemento excluido com sucesso','1');
        }

        public static function excluir_coordenador()
        {
            $id = $_POST['id'];
            \models\bd::excluir('coordenadores_modalidades',$id);
            \models\bd::msn('Elemento excluido com sucesso','1');
        }

        public static function excluir_hospitais()
        {
            $id = $_POST['id'];
            \models\bd::excluir('hospitais',$id);
            \models\bd::msn('Elemento excluido com sucesso','1');
        }

        public static function excluir_turismo()
        {
            $id = $_POST['id'];
            \models\bd::excluir('turismo',$id);
            \models\bd::msn('Elemento excluido com sucesso','1');
        }

        public static function excluir_transporte()
        {
            $id = $_POST['id'];
            \models\bd::excluir('transporte',$id);
            \models\bd::msn('Elemento excluido com sucesso','1');
        }

        public static function excluir_equipe()
        {
            $id = $_POST['id'];
            \models\bd::excluir('organizacao',$id);
            \models\bd::msn('Elemento excluido com sucesso','1');
        }

        public static function excluir_telefone()
        {
            $id = $_POST['id'];
            \models\bd::excluir('telefones',$id);
            \models\bd::msn('Elemento excluido com sucesso','1');
        }
    }
?>