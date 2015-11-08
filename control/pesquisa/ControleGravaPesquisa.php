<?php

  include_once '../../model/conexao.php';
    class GravaPesquisa{
        protected $nome;
        protected $setor;
        protected $online;
        protected $presencial;
        protected $financeiro;
        protected $comercial;
        protected $suprema;
        protected $preventiva;
        protected $qualidade;
        protected $cnpj;


        public function gravaPesquisa($post){
            $this->nome       = $post['nome'];
            $this->setor      = $post['setor'];
            $this->online     = $post['online'];
            $this->presencial = $post['presencial'];
            $this->financeiro = $post['financeiro'];
            $this->comercial  = $post['comercial'];
            $this->suprema    = $post['suprema'];
            $this->preventiva = $post['preventiva'];
            $this->qualidade  = $post['qualidade'];
            $this->cnpj       = $post['cnpj'];
            
                $conexao = new Conexao();
                
            $sql = ("insert into pesquisa (nome, setor, online, presencial, financeiro, comercial, suprema, preventiva, qualidade)
                                values ('$nome', '$setor', '$online', '$presencial', '$financeiro', '$comercial', '$suprema', '$preventiva', '$qualidade')");
            try {
                $retorno = $conexao->executar($sql);
                
                return $retorno;
            } catch (Exception $ex) {
                $retorno = $retorno. 'Erro grava_pesquisa '. $ex.error_log($message);
                
                return $retorno;
            }
        }
    }
?>