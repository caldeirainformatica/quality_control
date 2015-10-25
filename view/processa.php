<html>
    <?php
	
	require ('../model/funcoes.php');
	include_once $_SERVER['DOCUMENT_ROOT'].'/quality_control/model/head.php';
        $cnpj = $_POST['cnpj'];
        $captcha = $_POST['captcha'];
                
               
        // pega html resposta da receita
        $getHtmlCNPJ = getHtmlCNPJ($cnpj, $captcha);
        
        if($getHtmlCNPJ){
        // coloca os dados em um array
            $campos = parseHtmlCNPJ($getHtmlCNPJ);
        }
        //verifica a existencia dos dados no array
        if ($campos['status'] != 'ok'){
            echo '<div>';
            echo '<font color="red"><h4>'.$campos['status'].'***</h4></font>';
            include './cadastro.php';
            echo '</div>';
	}else {
    ?>		
    <script type="text/javascript">
        /*
         * Função a seguir efetuará a chamada para cadastrar os dados
         */
        function cadastrar(){ 
            if( $('#situacaoCadastral').val() == 'ATIVA'){
                $('#razao').removeAttr('disabled');
                $('#fantasia').removeAttr('disabled');
                $('#cnpj').removeAttr('disabled');
                $('#endereco').removeAttr('disabled');
                $('#numero').removeAttr('disabled');
                $('#complemento').removeAttr('disabled');
                $('#municipio').removeAttr('disabled');
                $('#uf').removeAttr('disabled');
                $('#bairro').removeAttr('disabled');
                $('#telefone').removeAttr('disabled');
                $('#email').removeAttr('disabled');
                $('#grava').attr('action','../control/cadastro/cadastro.php');
                $('#grava').submit();
            }else{
                var r=confirm('Infelizmente está empresa não está ativa e não pode ser cadastrada\n\
                        Você deseja tentar outro cnpj?');
                if (r == true){
                    $('#grava').attr('action',"<?php $_SERVER['DOCUMENT_ROOT'].'/quality_control/view'?>");
                    $('#grava').submit();
                }else{
                    alert('Obrigado e volte sempre');
                    document.window.closed;
                
                }
                 
            }
        }
        </script>
                
    <body>
        <div class="container" style="margin-top: 60px">
            <div class="row">
                <div class="col-md-12 col-sm-9 col-xs-4">
                    <div class="panel panel-info">	
                        <div class="panel-heading"><h1 align="center">CONFIRA OS DADOS PARA CADASTRO</h1></div>
                        <div class="panel-body">
                            <form method="post" id="grava">
                            <div class="col-md-6">
                                <label>Razão Social</label><br/>
                                <input type="text" disabled="disabled" class="form-control" name="razao" id="razao" value="<?php echo $campos[2]?>"><br/>
                                <label>Nome Fantasia</label><br/>
                                <input type="text" disabled="disabled" class="form-control" name="fantasia" id="fantasia" value="<?php echo $campos[3]?>"><br/>
                                <label>E-mail</label><br/>
                                <input type="email" required="required" placeholder="email@empresa.com.br" style="text-transform: lowercase;" class="form-control" name="email" id="email" value="<?php echo $campos[14]?>"><br/>
                                <input type="hidden" disabled="disabled" class="form-control" name="situacaoCadastral" id="situacaoCadastral" value="<?php echo $campos[17]?>">
                                <div class="col-md-2">	
                                    <label>UF</label><br/>
                                    <input type="text" disabled="disabled" class="form-control" name="uf" id="uf" value="<?php echo $campos[13]?>"><br/>
                                </div>
                                <div class="col-md-10">	
                                    <label>Municipio</label><br/>
                                    <input type="text" disabled="disabled" class="form-control" name="municipio" id="municipio" value="<?php echo $campos[12]?>"><br/>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="cnpj">CNPJ:</label><br/>
                                <input type="text" disabled="disabled" class="form-control" name="cnpj" id="cnpj" value="<?php echo $campos[0]?>"><br/>
                                <label>Endereço</label><br/>
                                <input type="text" disabled="disabled" class="form-control" name="endereco" id="endereco" value="<?php echo $campos[7]?>"><br/>
                                <div class="col-md-2">	
                                    <label>Número</label><br/>
                                    <input type="text" disabled="disabled" class="form-control" name="numero" id="numero" value="<?php echo $campos[8]?>"><br/>
                                </div>
                                <div class="col-md-10">	
                                    <label>Complemento</label><br/>
                                    <input type="text" class="form-control" name="complemento" id="complemento" value="<?php echo $campos[8]?>"><br/>
                                </div>
                                <div class="col-md-6">	
                                    <label>Bairro</label><br/>
                                    <input type="text" disabled="disabled" class="form-control" name="bairro" id="bairro" value="<?php echo $campos[11]?>"><br/>
                                </div>
                                <div class="col-md-6">	
                                    <label>Telefone</label><br/>
                                    <input type="text" class="form-control" name="telefone" id="telefone" value="<?php echo $campos[15]?>"><br/>
                                </div>
                            </div>
                            </form>
                        </div>
                        <div class="panel-footer">
                            <button type="button" id="cadastrar" name="cadastrar" onclick="cadastrar();" class="btn-success">Cadastrar</button>
                            <input type="submit" value="Cancelar" id="cancelar" name="cancelar" class="btn-danger" />
                        </div>
                    </div>
                </div>		
            </div>
        </div>
    </body>
</html>
    <?php 
        }
    ?>