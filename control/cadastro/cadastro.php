<?php
    include_once 'ControleCadastro.php';
    
    $razao          = $_POST['razao'];
    $fantasia       = $_POST['fantasia'];
    $cnpj           = $_POST['cnpj'];
    $endereco       = $_POST['endereco'];
    $numero         = $_POST['numero'];
    $complemento    = $_POST['complemento'];
    $municipio      = $_POST['municipio'];
    $uf             = $_POST['uf'];
    $bairro         = $_POST['bairro'];
    $telefone       = $_POST['telefone'];
    $email          = $_POST['email'];
    
    $cnpjSmascara = preg_replace("/\D+/", "", $cnpj);
    $control = new ControleCadastro();
    
    $resultado = $control->cadastrarEmpresa($razao, $fantasia, $cnpjSmascara, $endereco, $numero, $complemento, $municipio, $uf, $bairro, $telefone, $email);
    
    if ($resultado){
        ?>
<html>
    <head>
        <meta charset="utf-8">
        <title>Cadastro Empresa</title>
    </head>
<?php    }else{?>
    <script type="text/javascript">
    alert('Alguma coisa deu errado, informe a CPD SOLUÇÕES EM INFORMÁTICA o erro cadastrarOk');
    </script>
    <?php
}
?>
    <body>
        <form action="../../view/pesquisa.php" method="post" id="cadastroOk">
        <input type="hidden" value="<?php echo $cnpjSmascara;?>">
        </form>
    </body>
</html>