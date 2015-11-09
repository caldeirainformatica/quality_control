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
        include_once $_SERVER['DOCUMENT_ROOT'] . '/quality_control/model/head.php';
        ?>
    <script type="text/javascript">
        function gravar(){
        if ((document.getElementById('nome').value.length) < 3){
            $('#nome').val('Anônimo');
            document.pesquisa.submit();
        }else{
            document.pesquisa.submit();
        }
    }
    </script>
    </head>
    <body>
        <?php 
        if (!isset($_GET['cnpj'])){
           ?>
        <h1 align="center"><a href="../view/index.php" class="btn-danger">Erro, clique aqui para resolver</a></h1>;
    <?php
        }else{
            $cnpj = $_GET['cnpj'];
            ?>
        <div class="container" style="margin-top: 20px">
            <div class="row">
                <div class="panel panel-info" style="border-style: solid">
                    <div class="panel panel-heading">
                        <h4>Seja bem vindo ao sistema de pesquisa de qualidade CPD SOLUÇÕES EM INFORMÁTICA, 
                            essa pesquisa vai levar apenas 3 minutos.</h4>
                    </div>
                    <div class="panel panel-body">
                        <form action="../control/pesquisa/grava_pesquisa.php" method="post" name="pesquisa" id="pesquisa">
                            <div class="row">
                                <div class="col-md-6 col-xs-4 col-sm-2">
                                    <label for="nome">Informe seu nome do avaliador referente ao cnpj <input type="text" name="cnpj" id="cnpj" value="<?php echo $cnpj ?>" readonly/></label><br/>
                                    <input class="form-control" type="text" placeholder="Nomes em branco serão considerados anônimos" id="nome" name="nome"><br/>
                                </div>
                                <div class="col-md-6 col-xs-4 col-sm-2">
                                    <div class="col-md-8">
                                        <label for="setor">Setor em que trabalha<font color="red">*</font></label><br/>
                                        <select name="setor"  required class="form-control">
                                            <option value=""></option>
                                            <option value="Vendas Interna">Vendas Internas</option>
                                            <option value="Vendas Externas">Vendas Externas</option>
                                            <option value="Vendas Call Center">Vendas Call Center</option>
                                            <option value="Financeiro">Financeiro</option>
                                            <option value="Administrativo">Administrativo</option>
                                            <option value="Caixa">Caixa</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <h3 align="center">Considerando uma nota 0 como muito ruim, 5 como excelente. Pontue os tópicos abaixo</h3><br/>
                            <div class="row">
                                <div class="col-md-6 col-xs-12 col-sm-12">
                                    <h4 align="center">Itens marcados com <font color="red">*</font> são obrigatórios</h4>
                                    <table class="table table-hover table-striped">

                                        <tr>
                                            <td>Atendimento Online<font color="red">*</font></td>
                                            <td><label for="0online">0 </label><input type="radio" name="online" value="0" id="0online" required=""></td>
                                            <td><label for="1online">1 </label><input type="radio" name="online" value="1" id="1online"></td>
                                            <td><label for="2online">2 </label><input type="radio" name="online" value="2" id="2online"></td>
                                            <td><label for="3online">3 </label><input type="radio" name="online" value="3" id="3online"></td>
                                            <td><label for="4online">4 </label><input type="radio" name="online" value="4" id="4online"></td>
                                            <td><label for="5online">5 </label><input type="radio" name="online" value="5" id="5online"></td>                                   
                                        </tr>
                                        <tr>
                                            <td>Atendimento Presencial<font color="red">*</font></td>
                                            <td><label for="0presencial">0 </label><input type="radio" name="presencial" value="0" id="0presencial" required=""></td>
                                            <td><label for="1presencial">1 </label><input type="radio" name="presencial" value="1" id="1presencial"></td>
                                            <td><label for="2presencial">2 </label><input type="radio" name="presencial" value="2" id="2presencial"></td>
                                            <td><label for="3presencial">3 </label><input type="radio" name="presencial" value="3" id="3presencial"></td>
                                            <td><label for="4presencial">4 </label><input type="radio" name="presencial" value="4" id="4presencial"></td>
                                            <td><label for="5presencial">5 </label><input type="radio" name="presencial" value="5" id="5presencial"></td>                                   
                                        </tr>
                                        <tr>
                                            <td>Financeiro<font color="red">*</font></td>
                                            <td><label for="0financeiro">0 </label><input type="radio" name="financeiro" value="0" id="0financeiro" required=""></td>
                                            <td><label for="1financeiro">1 </label><input type="radio" name="financeiro" value="1" id="1financeiro"></td>
                                            <td><label for="2financeiro">2 </label><input type="radio" name="financeiro" value="2" id="2financeiro"></td>
                                            <td><label for="3financeiro">3 </label><input type="radio" name="financeiro" value="3" id="3financeiro"></td>
                                            <td><label for="4financeiro">4 </label><input type="radio" name="financeiro" value="4" id="4financeiro"></td>
                                            <td><label for="5financeiro">5 </label><input type="radio" name="financeiro" value="5" id="5financeiro"></td>                                   
                                        </tr>
                                        <tr>
                                            <td>Comercial<font color="red">*</font></td>
                                            <td><label for="0comercial">0 </label><input type="radio" name="comercial" value="0" id="0comercial" required=""></td>
                                            <td><label for="1comercial">1 </label><input type="radio" name="comercial" value="1" id="1comercial"></td>
                                            <td><label for="2comercial">2 </label><input type="radio" name="comercial" value="2" id="2comercial"></td>
                                            <td><label for="3comercial">3 </label><input type="radio" name="comercial" value="3" id="3comercial"></td>
                                            <td><label for="4comercial">4 </label><input type="radio" name="comercial" value="4" id="4comercial"></td>
                                            <td><label for="5comercial">5 </label><input type="radio" name="comercial" value="5" id="5comercial"></td>                                   
                                        </tr>
                                    </table>
                                </div>


                                <div class="col-md-6 col-xs-12 col-sm-12">
                                    <h4 align="center">Sua sugestão para melhorar</h4>
                                    <table class="table table-hover table-striped">

                                        <tr>
                                            <td><label for="suprema">Sistema Suprema Empresárial</label></td>
                                            <td><textarea rows="6" cols="50" name="suprema" id="suprema"></textarea></td>                                   
                                        </tr>
                                        <tr>
                                            <td><label for="preventiva">Manutenção Preventiva</label></td>
                                            <td><textarea rows="6" cols="50" name="preventiva" id="preventiva"></textarea></td>                                   
                                        </tr>
                                        <tr>
                                            <td><label for="qualidade">Qualidade dos serviços prestados</label></td>
                                            <td><textarea rows="6" cols="50" name="qualidade" id="qualidade"></textarea></td>                                   
                                        </tr>
                                    </table>
                                </div>      
                            </div>

                            <div class="panel-footer" align="center">
                                <!--<button type="button" id="gravar" name="gravar" onclick="gravar();" class="btn-success">Gravar</button>-->
                                <input type="button" value="Enviar" id="enviar" name="enviar" class="btn-success" onclick="gravar();"/>
                                <input type="reset" value="Limpar" id="reset" name="limpar" class="btn-danger" />
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
        <?php }?>