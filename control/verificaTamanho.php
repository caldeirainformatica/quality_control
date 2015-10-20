<?php
    $cnpj = $_GET['cnpj'];
    $tamanho = strlen($cnpj);
    if (($tamanho < 14) or ($tamanho > 14)){
        echo ($cnpj);
    }else{
        echo ($cnpj);
    }
?>