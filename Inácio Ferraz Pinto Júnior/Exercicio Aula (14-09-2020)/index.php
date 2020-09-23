<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/formulario.css">
    <title>Passando Dados do Formulario</title>
</head>

<body>
    <div id="div-principal">
        <h1>Criar Conta</h1>

        <form role="form" action="./php/validacaoForm.php" method="POST">

            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome">

            <br><br>

            <label for="sobrenome">Sobrenome:</label>
            <input type="text" name="sobrenome" id="sobrenome">

            <br><br>

            <label for="rua">Rua:</label>
            <input type="text" name="rua" id="rua">

            <br><br>

            <label for="bairro">Bairro:</label>
            <input type="text" name="bairro" id="bairro">

            <br><br>

            <label for="cidade">Cidade:</label>
            <input type="text" name="cidade" id="cidade">

            <br><br>

            <label for="estado">Estado: </label>
            <select name="estado" id="estado">
                    <option value="nenhum">nenhum</option>
                    <option value="ac">AC</option>
                    <option value="al">AL</option>
                    <option value="ap">AP</option>
                    <option value="am">AM</option>
                    <option value="ba">BA</option>
                    <option value="ce">CE</option>
                    <option value="es">ES</option>
                    <option value="go">GO</option>
                    <option value="ma">MA</option>
                    <option value="mt">MT</option>
                    <option value="ms">MS</option>
                    <option value="mg">MG</option>
                    <option value="pa">PA</option>
                    <option value="pb">PB</option>
                    <option value="pr">PR</option>
                    <option value="pe">PE</option>
                    <option value="pi">PI</option>
                    <option value="rn">RN</option>
                    <option value="rj">RJ</option>
                    <option value="rs">RS</option>
                    <option value="ro">RO</option>
                    <option value="rr">RR</option>
                    <option value="sc">SC</option>
                    <option value="sp">SP</option>
                    <option value="se">SE</option>
                    <option value="to">TO</option>
                    <option value="df">DF</option>
                </select>

            <br><br>

            <label>Sexo</label>
            <br>
            <input type="radio" id="feminino" name="sexo" value="feminino">
            <label for="feminino">Feminino</label><br>
            <input type="radio" id="masculno" name="sexo" value="masculno">
            <label for="masculno">Masculino</label><br>
            <input type="radio" id="NaD" name="sexo" value="NaD">
            <label for="NaD">Não Defnido</label>

            <br><br>

            <label for="email">email:</label>
            <input type="text" name="email" id="email">

            <br><br>

            <label for="telefone">telefone:</label>
            <input type="text" name="telefone" id="telefone">

            <br><br>

            <button type="reset">Limpar Formulario</button>
            <button type="submit">Enviar</button>

        </form>
    </div>
</body>

</html>