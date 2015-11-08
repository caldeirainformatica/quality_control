<?php
    include $_SERVER['DOCUMENT_ROOT'].'/quality_control/model/conexao.php';

    $conecta = new Conexao();
    $cnpj = $_POST['cnpj'];
    

    $sql = ("SELECT cnpj FROM cliente WHERE cliente.cnpj = '$cnpj'");
   
    $result = $conecta->recuperaSelect($sql);
    if($result){
	echo 1;
    }else{
        echo 0;
    }
  
       
?>