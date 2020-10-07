<?php
setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
date_default_timezone_set('America/Sao_Paulo');
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/css-formulario.css">
    <link rel="shortcut icon" href="assets/img/icon-logo.jpg">
    <link rel="stylesheet" href="assets/css/menu.css">

    <script src="assets/libs/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.10/jquery.mask.js"></script>

    <title>Facility - Zoa Sys.</title>
</head>
<body>

    <?php require __DIR__ . '/../template/menu.php';?>
        
    <div id="back-main">
        <div id="conteudo-main">
            <h1>Detalhes da Empresa:</h1>
            <hr class='setores-formulario'/>

            <form action="" method="post" >
                <fieldset>
                    <div class='div-form'>
                        <div class='div-form-1'>
                            <label for="cpnj">CNPJ:<span>*</span></label>
                            <input type='text' name='cnpj' id='cnpj' readonly='readonly' value='<?php echo $empresa_dados->getCnpj();?>'></input>

                            <label for="nome">Nome:<span>*</span> </label>
                            <input type='text' name='nome' id='nome' readonly='readonly' value='<?php echo $empresa_dados->getNome();?>'></input>  

                            <label for="usuario">Usuário:<span>*</span> </label>
                            <input type='text' name='usuario' id='usuario' readonly='readonly' value='<?php echo $empresa_dados->getUsuario();?>'></input>
                        
                            <label for="senha">Senha:<span>*</span> </label>
                            <input type='test' name='senha' id='senha' readonly='readonly' value='<?php echo $empresa_dados->getSenha();?>' ></input> 


                            <label for="celular">Celular:<span>*</span> </label>
                            <input type='text' name='celular' id='celular' readonly='readonly' value='<?php echo $contato_dados->getCelular();?>'></input>

                            <label for="telefone">Telefone: </label>
                            <input type='text' name='telefone' id='telefone' readonly='readonly' value='<?php echo $contato_dados->getTelefone();?>'></input>

                            <label for="email">E-Mail: </label>
                            <input type='email' name='email' id='email' readonly='readonly' value='<?php echo $contato_dados->getEmail();?>'></input>
                        </div>
                        <div></div>
                        <div class='div-form-2'>
                            
                            <label for="cep">CEP :<span>*</span> </label>
                            <input type='text' name='cep' id='cep' readonly='readonly' value='<?php echo $endereco_dados->getCep();?>'></input> 

                            <label for="endereco">Endereço:<span>*</span> </label>
                            <input type='text' name='endereco' id='endereco' readonly='readonly' value='<?php echo $endereco_dados->getEndereco();?>'></input> 

                            <label for="numero">Núm.:<span>*</span> </label>
                            <input type='text' name='numero' id='numero' readonly='readonly' value='<?php echo $endereco_dados->getNumero();?>'></input>  

                            <label for="cidade">Cidade:<span>*</span> </label>
                            <input type='text' name='cidade' id='cidade' readonly='readonly' value='<?php echo $endereco_dados->getCidade();?>'></input> 

                            <label for="estado">Estado:<span>*</span> </label>
                            <select id="estado" name="estado" readonly='readonly' value='<?php echo $endereco_dados->getEstado();?>'>
                                <option value="AC">AC</option>
                                <option value="AL">AL</option>
                                <option value="AP">AP</option>
                                <option value="AM">AM</option>
                                <option value="BA">BA</option>
                                <option value="CE">CE</option>
                                <option value="ES">ES</option>
                                <option value="GO">GO</option>
                                <option value="MA">MA</option>
                                <option value="MT">MT</option>
                                <option value="MS">MS</option>
                                <option value="MG">MG</option>
                                <option value="PA">PA</option>
                                <option value="PB">PB</option>
                                <option value="PR">PR</option>
                                <option value="PE">PE</option>
                                <option value="PI">PI</option>
                                <option value="RN">RN</option>
                                <option value="RJ">RJ</option>
                                <option value="RS">RS</option>
                                <option value="RO">RO</option>
                                <option value="RR">RR</option>
                                <option value="SC">SC</option>
                                <option value="SP">SP</option>
                                <option value="SE">SE</option>
                                <option value="TO">TO</option>
                                <option value="DF">DF</option>
                            </select>

                            <label for="pais">País:<span>*</span> </label>
                            <select id="pais" name="pais" readonly='readonly' value='<?php echo $endereco_dados->getPais();?>'>
                                <option value="brasil">Brasil</option>
                            </select>
                        </div>
                    </div>
                </fieldset>
                
                <hr class='setores-formulario'/>
            </form>
        </div>
    </div>

</body>

<script src="assets/js/horaAtual.js"></script>
<script src="assets/js/preenchimentoCep.js"></script>
<script src="assets/js/mascaraFormulario.js"></script>

</html>