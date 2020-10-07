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
    <link rel="stylesheet" href="assets/css/css-os.css">
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
            <h1>Cadastrar Ordem de Serviço:</h1>
            <hr class='setores-formulario'/>

            <form action="/os?cadastrar" method="post" >
                <fieldset>
                    <div class='div-form'>
                        <div class='div-form-1'>

                            <label for="cliente">Cliente:<span>*</span> </label>
                            <select id="cliente" name="cliente">
                                <?php 
                                    foreach($cliente_dados as $dado){ 
                    
                                ?>
                                <option value="<?php echo $dado->getId(); ?>"><?php echo $dado->getNome(); ?></option>
                                    <?php } ?>
                            </select>
                            

                            <!-- POR APRA APARECER A EMPRESA AUTOMATICAMENTE, MAS O ADM PODE MUDAR-->
                            <?php if($_SESSION['isEmpresa'] == 1){?>
                                <!-- Caso o usuario logado seja uma empresa, não tem necessidade de ir buscar o nome, pois na session ja tem essa info -->
                                <label for="empresa">Empresa:<span>*</span> </label>
                                <input type='text' name='empresa' id='empresa' value='<?php echo $_SESSION['usuario'];?>' readonly='readonly'> </input> 
                                <label for="empresa">Funcionario:<span>*</span> </label>
                                <input type='text' name='funcionario' id='func' value='' readonly='readonly'> </input> 

                            <?php } else { ?>
                                <!-- Caso o usuario logado seja um funcionario, ele vai buscar o nome da empresa -->
                                <label for="empresa">Empresa:<span>*</span> </label>
                                <?php $empresa = $empresaDao->findById($dado->getId_empresa());?>
                                <input type='text' name='empresa' id='empresa' value='<?php echo $empresa->getNome();?>' readonly='readonly'> </input> 
                                <label for="empresa">Funcionario:<span>*</span> </label>
                                <input type='text' name='funcionario' id='func' value='<?php echo $_SESSION['usuario'];?>' readonly='readonly'> </input> 
                            <?php } ?>


                            

                        </div>
                        <div></div>
                        <div class='div-form-2'>

                            <label for="data_inicio">Data de Início:<span>*</span> </label>
                            <input type='text' name='data_inicio' id='data_inicio'></input>

                            <label for="data_fim">Data de Encerramento: </label>
                            <input type='text' name='data_fim' id='data_fim'></input>
                            
                        </div>
                    </div>
                    
                </fieldset>
                
                       

            
                <div id="servico">
                    <div>
                        <label for="descricao">Descrição:<span>*</span> </label>
                        <input type='text' name='descricao' id='descricao' ></input>  
                    </div>
                    <div></div>
                    <div >
                        <label for="valorTotal">Valor Total:<span>*</span> </label>
                        <input type='text' name='valorTotal' id='valorTotal' ></input> 
                    </div>
                </div>

                <button type="submit" id='btn-cadastrar'>Cadastrar</button>
                <button type="reset" id='btn-cancelar'>Limpar Formuario</button>

            </form>
        </div>
    </div>

</body>


<script src="assets/js/horaAtual.js"></script>
<script src="assets/js/mascaraFormulario.js"></script>

</html>