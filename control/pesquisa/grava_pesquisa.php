<?php
    include_once 'ControleGravaPesquisa.php';
    
    $nome       = $_POST['nome'];
    $setor      = $_POST['setor'];
    $online     = $_POST['online'];
    $presencial = $_POST['presencial'];
    $financeiro = $_POST['financeiro'];
    $comercial  = $_POST['comercial'];
    $suprema    = $_POST['suprema'];
    $preventiva = $_POST['preventiva'];
    $qualidade  = $_POST['qualidade'];
    $cnpj       = $_POST['cnpj'];

    $grava = new ControleGravaPesquisa();
    
    $resultado = $grava->gravaPesquisa($nome, $setor, $online, $presencial, $financeiro, $comercial, $suprema, $preventiva, $qualidade, $cnpj);
    
    echo '<pre>';
    print_r($resultado);
    
    echo '<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>';
    
    var_dump($resultado);