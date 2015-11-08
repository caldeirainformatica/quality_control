<html>
    <!-- @autor: RICARDO CALDEIRA LIMA
         @matricula: 14214290044
    -->

    <!--
     Pagina responsável em descobrir se o cnpj é valido, se já existe no banco de dados
     é encaminhar para a página correta.
     -->

    <!-- inicio do cabeçalho. -->

    <head>
        <?php
        include_once $_SERVER['DOCUMENT_ROOT'].'/quality_control/model/head.php';
        ?>
        
        <!-- Bloco de verificação-->
        
        <script type="text/javascript">
            /*
             * Função responsável por verificar se o campo CNPJ está com o mínimo de caracteres e sem mascara,
             * Caso esteja correta, verifica se o CNPJ informado já está cadastrado no banco de dados quality_control
             * após a verificação decide se o site será direcionado para a pagina de novos cadastros ou vai direto a 
             * pesquisa
             */
            function verifica(){ 
                $cnpj = document.getElementById('cnpj');
                $tamanho = $cnpj.value.length;
                if ($tamanho != 14){
                    alert('O cnpj ' + $cnpj.value + ' está incorreto, lembre - se de utilizar apenas números');
                    document.getElementById('cnpj').focus();
                }else{
                    $.ajax({
                        type: 'POST',
                    url: "http://localhost/quality_control/control/verifica_duplicidade.php",
                    data: {
                        cnpj: $('#cnpj').val()
                    },
                    success: function(retorno) {
                    if(retorno == 1){
                        $('#recebeDados').attr('action','pesquisa.php?cnpj='+$cnpj.value);
                        document.recebeDados.submit();
                     }else if(retorno == 0){
                        $('#recebeDados').attr('action','cadastro.php');
                        document.recebeDados.submit();
                    }
                }
		});
                }
            }
        </script>
        
        
    </head>
    <!--
    Inicio do corpo da mensagem
    -->
    <body><!--  Página criada com bootstrap-->
        <div class="container" style="margin-top: 20px">
            <div style="margin-top: 100px; margin-left: 300px; margin-right: 350px;">
                <div class="panel panel-info">
                    <div class="panel-heading"><h4>Você foi selecionado para participar 
                            da pesquisa de qualidade. Sua opnião é de máxima improtancia
                            <br/> desde já agradecemos sua participação.</h4>
                    </div>
                    <div class="panel-body"> 
                        <fieldset>
                            <legend><img src="<?php $_SERVER['DOCUMENT_ROOT']?>/quality_control/img/logo.jpg" height="140" align='center'></legend><br/>

                            <form name="recebeDados" id="recebeDados" action="#" method="post">
                                <div class="col-md-8 col-sm-8">
                                    <label for="cnpj">Insira o cnpj da empresa em que representa<font color="red">*</font></label><br/>
                                    <input type="number" name="cnpj" id="cnpj" required autocomplete="off" placeholder="apenas números" class="form-control" />
                                </div>   
                               <br/>
                                <div class="col-md-8">
                                    <font color='red'>Campos com * são obrigatórios</font>
                                </div>
                               <div class="col-md-8">
                                   <input type="submit" id="enviar" value="Enviar" class="btn-info" onclick="verifica(); return false;">
                                   <input type="reset" id="reset" value="Limpar" class="btn-default">
                               </div>
                            </form>
                        </fieldset>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>