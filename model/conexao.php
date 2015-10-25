<?php
	
	class Conexao {
		
		private $host		='localhost';
		private $user		= 'root';
		private $password	= 'root';
		private $banco		= 'quality_control';
		
		protected $conexao;
		protected $resulado;
		
		public function conectar(){
			$this-> conexao = mysqli_connect($this->host,$this->user,$this->password);
			mysqli_select_db($this->conexao, $this->banco)
			or die('Erro ao selecionar banco de dados.');
		}
		
		public function desconectar(){
			mysqli_close($this->conexao);
		}
		public function executar($sql){
                    try {
                        $this->conectar();
			$this->resulado = mysqli_query($this->conexao, $sql);
			$this->desconectar();
                        return $this->resulado;
                    } catch (Exception $e) {
                        return ('Erro ao executar sql, conexao, 29'.$e->getMessage());
                    }
                    
		}
		public function recuperaSelect($sql){
			$this->conectar();
			
			$this->resulado = mysqli_query($this->conexao, $sql);
			
			$registros = array();
			while ($dados = mysqli_fetch_assoc($this->resulado)){
				$registros[] = $dados;
			}
			$this->desconectar();
			return $registros;
		}
		
	}