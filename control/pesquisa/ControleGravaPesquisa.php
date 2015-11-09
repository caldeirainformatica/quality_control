<?php

  include_once '../../model/conexao.php';
    class ControleGravaPesquisa{
        public function getNome() {
            return $this->nome;
        }

        public function getSetor() {
            return $this->setor;
        }

        public function getOnline() {
            return $this->online;
        }

        public function getPresencial() {
            return $this->presencial;
        }

        public function getFinanceiro() {
            return $this->financeiro;
        }

        public function getComercial() {
            return $this->comercial;
        }

        public function getSuprema() {
            return $this->suprema;
        }

        public function getPreventiva() {
            return $this->preventiva;
        }

        public function getQualidade() {
            return $this->qualidade;
        }

        public function getCnpj() {
            return $this->cnpj;
        }

        public function setNome($nome) {
            $this->nome = $nome;
            return $this;
        }

        public function setSetor($setor) {
            $this->setor = $setor;
            return $this;
        }

        public function setOnline($online) {
            $this->online = $online;
            return $this;
        }

        public function setPresencial($presencial) {
            $this->presencial = $presencial;
            return $this;
        }

        public function setFinanceiro($financeiro) {
            $this->financeiro = $financeiro;
            return $this;
        }

        public function setComercial($comercial) {
            $this->comercial = $comercial;
            return $this;
        }

        public function setSuprema($suprema) {
            $this->suprema = $suprema;
            return $this;
        }

        public function setPreventiva($preventiva) {
            $this->preventiva = $preventiva;
            return $this;
        }

        public function setQualidade($qualidade) {
            $this->qualidade = $qualidade;
            return $this;
        }

        public function setCnpj($cnpj) {
            $this->cnpj = $cnpj;
            return $this;
        }

        
        public function gravaPesquisa($nome, $setor, $online, $presencial, 
                $financeiro, $comercial, $suprema, $preventiva, $qualidade, $cnpj){
            
            $conexao = new Conexao();
                
            $sql = ("insert into pesquisa (nome, setor, online, presencial, financeiro, comercial, suprema, preventiva, qualidade, cnpj)
                                values ('$nome', '$setor', '$online', '$presencial', '$financeiro', '$comercial', '$suprema', '$preventiva', '$qualidade', '$cnpj')");
            try {
                $retorno = $conexao->executar($sql);
                
                
                return 1;
            } catch (Exception $ex) {
                $retorno = $retorno. 'Erro grava_pesquisa '. $ex.error_log($message);
                
                return 0;
            }
        }
    }
?>