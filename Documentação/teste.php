<html>
    <head>
        <title>Aula Referente a Formulários</title>
        <meta charset="utf-8" />
        
       
    </head>
    <body>
        <form method="post">
            <label for="nome">Nome: </label><input type="text" required="true" name="nome" id="nome" autocomplete="off" placeholder="Digite o nome"/><br/>
           <label for="cpf"> CPF: </label><input type="text" required="true" name="cpf" id="cpf"/><br/>
            <label for="senha">Senha</label><input type="password" required="true" name="senha" id="senha"/><br/>
            <label for="masculino" id="sexo">Sexo</label><br />
            <label for="masculino">Masculino</label><input type="radio" name="sexo" id="masculino" value="M" checked="checked">
            <label for="feminino">Feminino</label><input type="radio" name="sexo" id="feminino" value="F"><br/>
          
            <fieldset style="width: 30%">
                <legend><label id="hobbies">Hobbies</label><br/></legend>
            <input type="checkbox" name="hobbies[]" value="e" id="esportes"><label id="esportes" for="esportes">Esportes</label><br/>
            <input type="checkbox" name="hobbies[]" value="m" id="musica"><label id="musica" for="musicas">Música</label><br/>
            <input type="checkbox" name="hobbies[]" value="l" id="leitura"><label id="leitura" for="leitura">Leitura</label><br/>
            <input type="checkbox" name="hobbies[]" value="t" id="teatro"><label id="teatro" for="teatro">Teatro</label><br/>
            <input type="checkbox" name="hobbies[]" value="c" id="cinema"><label id="cinema" for="cinema">Cinema</label><br/>
            </fieldset>
            
            <label id="uf" for="df">UF  </label><select name="uf" id="uf">
            <option value="null"></option>
            <option value="al">AL</option>
            <option value="am">AM</option>
            <option value="ap">AP</option>
            <option value="ba">BA</option>
            <option value="ce">CE</option>
            <option value="df">DF</option>
            <option value="es">ES</option>
            <option value="go">GO</option>
            <option value="ma">MA</option>
            <option value="mg">MG</option>
            <option value="ms">MS</option>
            <option value="mt">MT</option>
            <option value="pa">PA</option>
            <option value="pb">PB</option>
            <option value="pe">PE</option>
            <option value="pi">PI</option>
            <option value="pr">PR</option>
            <option value="rj">RJ</option>
            <option value="rn">RN</option>
            <option value="ro">RO</option>
            <option value="rr">RR</option>
            <option value="rs">RS</option>
            <option value="sc">SC</option>
            <option value="se">SE</option>
            <option value="sp">SP</option>
            <option value="to">TO</option>
            </select>
            <br />
            <label for="observacao">Observação</label><br/>
            <textarea rows="10" cols="50" id="observacao" name="observacao" placeholder="Digite a observação, se houver "></textarea><br/>
            
            
            
           <input type="submit" name="Enviar" value="Enviar">
            <input type="reset" name="Limpar" value="Limpar">
        </form>
        
      
        
    </body>

</html>