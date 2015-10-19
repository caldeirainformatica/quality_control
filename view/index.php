<html>

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
            function verificaTamanho(){
                $cnpj = document.getElementById('cnpj');
                $tamanho = $cnpj.value.length;
                if ($tamanho != 14){
                    alert('O cnpj ' + $cnpj.value + ' está incorreto, lembre - se de utilizar apenas números');
                    document.getElementById('cnpj').focus();
                }else{
                    if(document.getElementById('enviar').disabled) document.getElementById('enviar').disabled=false;
                }
            }
           
        
            function verificaDuplicidade(){
		$.ajax({
                    url: "http://localhost/quality_control/model/verifica_duplicidade.php",
                    data: {
                        cnpj: $('#cnpj').val()
                    },
                    success: function(retorno) {
                    if(retorno == 'ok'){
                       location.href = 'http://localhost/quality_control/model/erro.php?cnpj='+ $('#cnpj').val();
                       
                       
                    }else{
                      alert('1');
            
			}
                    }
		});
            }
        </script>
        
        
    </head>
    <!--
    Inicio do corpo da mensagem
    -->
    <body>
        <div class="container" style="margin-top: 60px">
            <div style="margin-top: 100px; margin-left: 300px; margin-right: 200px;">
                <fieldset>
                    <legend><img src="<?php $_SERVER['DOCUMENT_ROOT']?>/quality_control/img/logo.jpg" height="100px" width="375px" align='center'></legend><br/>
                    <form name="recebeDados" method="GET">
                        <div class="col-md-8">
                            <label for="cnpj">Insira o cnpj da empresa em que representa<font color="red">*</font></label><br/>
                            <input type="number" name="cnpj" id="cnpj" required="true" placeholder="apenas números" class="form-control" onblur="verificaTamanho(); return false;" />
                        </div>   
                       <br/>
                        <div class="col-md-8">
                            <label for="nome">Insira o nome do avaliador</label><br/>
                            <input type="text" name="nome" id="nome" class="form-control"/><br/>
                        </div>
                        <div class="col-md-8">
                            <font color='red'>Campos com * são obrigatórios</font>
                        </div>
                       <div class="col-md-8">
                           <input type="submit" id="enviar" value="Enviar"  onclick="verificaDuplicidade(); return false;">
                       </div>
                    </form>
                </fieldset>
            </div>
        </div>
    </body>
</html>