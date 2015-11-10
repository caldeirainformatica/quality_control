 <html>
     <head>
         <meta charset="utf-8">
        <title>FINALIZA CADASTRO</title>
         
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
   
    if ($resultado = 1){
    ?>
        <script type="text/javascript">
            alert('Pesquisa gravada com sucesso, você será direcionado a pagina inicial');
            window.location.href = '../../../../quality_control/view/';
        
        </script>
            
    <?php }  else {
        ?>
       <script type="text/javascript">
            alert('Erro ao grava pesquisa, comunique a CPD SOLUÇÕES EM INFORMÁTICA');
            window.location.href = 'localhost/quality_control/view/';
        
        </script>
        
<?php
} ?>
    </head>
 </html>