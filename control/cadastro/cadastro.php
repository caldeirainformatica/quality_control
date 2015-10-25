<?php
    include_once 'ControleCadastro.php';
    
    $razao = $_POST['razao'];
    $fantasia = $_POST['fantasia'];
    $cnpj = $_POST['cnpj'];
    $endereco = $_POST['endereco'];
    $numero = $_POST['numero'];
    $complemento = $_POST['complemento'];
    $municipio = $_POST['municipio'];
    $uf = $_POST['uf'];
    $bairro = $_POST['bairro'];
    $telefone = $_POST['telefone'];
    $email = $_POST['email'];
    
    
    $control = ControleCadastro();
    
    $resultado = $control->cadastrarEmpresa($razao, $fantasia, $cnpj, $endereco, $numero, $complemento, $municipio, $uf, $bairro, $telefone, $email);
    
    echo $resultado;