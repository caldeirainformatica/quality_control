<?php
    include_once 'ControleCadastro.php';
    include_once './../../model/head.php';
    
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
    
    $resultado = $control->cadastrarCliente($razao, $fantasia, $cnpjSmascara, $endereco, $numero, $complemento, $municipio, $uf, $bairro, $telefone, $email);
    
    if ($resultado){
        ?>
<script type="text/javascript">
    
    window.location.href = '../../view/pesquisa.php?cnpj=<?php echo $cnpj?>';

</script>
<?php    }else{?>
    <script type="text/javascript">
    alert('Alguma coisa deu errado, informe a CPD SOLUÇÕES EM INFORMÁTICA o erro cadastrarOk');
    </script>
    <?php
}
?>
    
</html>