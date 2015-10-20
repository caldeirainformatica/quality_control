<html>

    <!--
     Pagina responsável por pesquisar o cnpj na receita federal e após a conferencia do usuário, 
    cadastrar no banco de dados.
     -->

    <!-- inicio do cabeçalho. -->

    <head>
        <?php
        include_once $_SERVER['DOCUMENT_ROOT'].'/quality_control/model/head.php';
            $cnpj = $_GET['cnpj'];
            $nome = $_GET['nome'];
        ?>
        
        
        <!-- Bloco de verificação-->
        
    </head>
    <!--
    Inicio do corpo da mensagem
    -->
    <body>
        <div class="container" style="margin-top: 60px">
            <div style="margin-top: 60px; margin-left: 300px; margin-right: 200px; border-style: solid;">
                <fieldset>
                    <legend><img src="<?php $_SERVER['DOCUMENT_ROOT']?>/quality_control/img/logo.jpg" height="100px" width="375px" align='center'></legend><br/>
                    <h3>Sua empresa ainda não está cadastrada<br/>
                        por favor, confira o cnpj e digite as letras <br/>
                        para a pesquisa</h3>
                    <form name="recebeDados" action="processa.php" method="post">
                        <div class="col-md-8">
                            <label for="cnpj">CNPJ<font color="red">*</font></label><br/>
                            <input type="number" name="CNPJ" id="CNPJ" required="true" placeholder="apenas números" class="form-control" value="<?php echo $cnpj; ?>" />
                            <input type="hidden" name="nome" id="nome" value="<?php echo $nome; ?>">
                        </div>   
                       <br/>
                        <div class="col-md-8">
                            <img src= "getcaptcha.php" border="0"><font color="red">*</font><br/>
                            <input type="text" name="CAPTCHA" id="CAPTCHA" class="form-control" required="true" maxlength="6" placeholder="captcha"/><br/>
                        </div>
                        <div class="col-md-8">
                            <font color='red'>Campos com * são obrigatórios</font>
                        </div>
                       <div class="col-md-8">
                           <input type="submit" id="consultar" value="Consultar">
                       </div>
                    </form>
                </fieldset>
            </div>
        </div>
    </body>
</html>