<?php
    include $_SERVER['DOCUMENT_ROOT'].'/quality_control/model/conexao.php';

    $conecta = new Conexao();
    $cnpj = $_POST['cnpj'];

    $sql = "SELECT * FROM cliente WHERE cliente.cnpj = ".$cnpj;
   
    $result = $conecta->recuperaSelect($sql);
    if($result){
	foreach ($result as $r){
		echo ('ok');
     }
    }else{
        echo 'erro';
    }
  
       
?>