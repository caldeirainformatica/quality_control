<?php
    include_once '../../model/conexao.php';
    class ControleCadastro{
        protected $razao;
        protected $cnpj;
        protected $fantasia;
        protected $endereco;
        protected $email;
        protected $numero;
        protected $complemento;
        protected $bairro;
        protected $telefone;

        public function getRazao(){
            return $this->razao;
        }

        public function getCnpj() {
        return $this->cnpj;
        }

        public function getFantasia() {
        return $this->fantasia;
        }

        public function getEndereco() {
        return $this->endereco;
        }

        public function getEmail() {
        return $this->email;
        }

        public function getNumero() {
        return $this->numero;
        }

        public function getComplemento() {
        return $this->complemento;
        }

        public function getBairro() {
        return $this->bairro;
        }

        public function getTelefone() {
        return $this->telefone;
        }
        
        public function setRazao($razao){
            $this->razao = $razao;
        }

        public function setCnpj($cnpj) {
        $this->cnpj = $cnpj;
        }

        public function setFantasia($fantasia) {
        $this->fantasia = $fantasia;
        }

        public function setEndereco($endereco) {
        $this->endereco = $endereco;
        }

        public function setEmail($email) {
        $this->email = $email;
        }

        public function setNumero($numero) {
        $this->numero = $numero;
        }

        public function setComplemento($complemento) {
        $this->complemento = $complemento;
        }

        public function setBairro($bairro) {
        $this->bairro = $bairro;
        }

        public function setTelefone($telefone) {
        $this->telefone = $telefone;
        }

        public function cadastrarCliente ($razao, $fantasia, $cnpj,$endereco, $numero, 
                $complemento, $municipio, $uf, $bairro, $telefone, $email){
        
            $conexao = new Conexao();
            
           $sql = ("insert into cliente (razao, fantasia, cnpj, endereco, numero, complemento, municipio, uf, bairro, telefone, email)
                    values ('$razao', '$fantasia', '$cnpj', '$endereco', '$numero', '$complemento', '$municipio', '$uf', '$bairro', '$telefone', '$email')");
            try {
                $retorno = $conexao->executar($sql);
                
                return $retorno;
            } catch (Exception $ex) {
                $retorno = $retorno . '  /n erro da classe controle Cadastro '.$ex.error_log($erro);
            return $retorno;
            }    
                
        }
    }