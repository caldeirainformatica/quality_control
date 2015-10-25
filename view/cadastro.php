<html>
    <!-- @autor: RICARDO CALDEIRA LIMA
         @matricula: 14214290044
    -->

    <!--
     Pagina responsável por pesquisar o cnpj na receita federal e após a conferencia do usuário, 
    cadastrar no banco de dados.
     -->

    <!-- inicio do cabeçalho. -->

    <head>
        <?php
        include_once $_SERVER['DOCUMENT_ROOT'].'/quality_control/model/head.php';
            $cnpj = $_POST['cnpj'];
           
        ?>
        
        
        
        
    </head>
    <!--
    Inicio do corpo da mensagem
    
    Está página necessita da página getcapcha.php encontrada na control,
    getcapcha é uma função que busca as letras em que o usuário deve digitar
    para obter as informações da receita federal.
    -->
    <body>
        <div class="container" style="margin-top: 20px">
            <div style="margin-top: 60px; margin-left: 300px; margin-right: 350px;">
              <div class="panel panel-info">
                    <div class="panel-heading"> <h3>Sua empresa ainda não está cadastrada<br/>
                        por favor, confira o cnpj e digite as letras <br/>
                        para a pesquisa</h3></div>
                    <div class="panel-body"> 
                <fieldset>
                    <legend><img src="<?php $_SERVER['DOCUMENT_ROOT']?>/quality_control/img/logo.jpg" height="140"></legend><br/>
                   
                    <form name="consulta" action="processa.php" method="post">
                        <div class="col-md-8">
                            <label for="cnpj">CNPJ<font color="red">*</font></label><br/>
                            <input type="number" name="cnpj" id="cnpj" required="required" placeholder="apenas números" class="form-control" value="<?php echo $cnpj; ?>" >
                        </div>   
                       <br/>
                        <div class="col-md-8">
                            <img src= "<?php $_SERVER['DOCUMENT_ROOT']?>/quality_control/control/getcaptcha.php" border="0"><font color="red">*</font><br/>
                            <input type="text" name="captcha" id="captcha" class="form-control" required="true" maxlength="6" placeholder="insira as letras a cima"><br/>
                        </div>
                        <div class="col-md-8">
                            <font color='red'>Campos com * são obrigatórios</font>
                        </div>
                       <div class="col-md-8">
                           <input type="submit" id="consultar" value="Consultar" class="btn-info">
                       </div>
                    </form>
                </fieldset>
                    </div> 
              </div>
            </div>
        </div>
    </body>
</html>