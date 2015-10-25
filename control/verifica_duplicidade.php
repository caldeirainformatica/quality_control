<?php
    include $_SERVER['DOCUMENT_ROOT'].'/quality_control/model/conexao.php';

    $conecta = new Conexao();
    $cnpj = $_POST['cnpj'];
    

    $sql = ("SELECT cnpj FROM empresa WHERE empresa.cnpj = '$cnpj'");
   
    $result = $conecta->recuperaSelect($sql);
    if($result){
	echo true;
    }else{
        echo false;
    }
  
       
?>