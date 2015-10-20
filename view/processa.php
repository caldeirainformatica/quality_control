<html>
	<?php
	
		require ('funcoes.php');
		include_once $_SERVER['DOCUMENT_ROOT'].'/quality_control/model/head.php';

                $cnpj = $_POST['CNPJ'];
                $captcha = $_POST['CAPTCHA'];

                // pega html resposta da receita
                $getHtmlCNPJ = getHtmlCNPJ($cnpj, $captcha);

//                if($getHtmlCNPJ)
//                {
                        // volova os dados em um array
                        $campos = parseHtmlCNPJ($getHtmlCNPJ);
                        print_r($campos);
            //    }

        ?>