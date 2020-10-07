<?php

setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
date_default_timezone_set('America/Sao_Paulo');
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/css-tabela.css">
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
            <h1>O's. Cadastrados:</h1>
            <hr class='setores-formulario'/>
    <!-- AKI DEPOIS POR UM CODIGO QUE O ADM PODE VER DE TODAS A S EMPRESAS E FORMAS DE PESQUISAS -->
            <div id='responsividade-table'>
                <table>
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>N° O's.</th>
                            <th>Nome do Cliente</th>
                            <th>Nome do Funcionario</th>
                            <th>Empresa</th>
                            <th>Data de Inicial</th>
                            <th>Date de Finalização</th>
                            <th>Valor</th>
                            <th>Situação</th>                            
                        </tr>
                    </thead>

                    <tbody id='tabelaMostrarEmpresas'>
                        <?php  
                                $os_dados = $osDao->findAll(); 

                            foreach($os_dados as $dado){ 
                                if($_SESSION['id_empresa'] == $dado->getId_empresa()){
                                    $empresa = $empresaDao->findById($dado->getId_empresa());
                                    $cliente = $clienteDao->findById($dado->getId_cliente());
                                    $funcionario = $funcionarioDao->findById($dado->getId_funcionario());?>
                                
                                <tr>
                                    <td><?php echo $dado->getId(); ?></td>
                                    <td><?php echo $dado->getNum_os(); ?></td>
                                    <td><?php echo $cliente->getNome(); ?></td>
                                    <td><?php echo $funcionario->getNome(); ?></td>
                                    <td><?php echo $empresa->getNome(); ?></td>
                                    <td><?php echo $dado->getData_inicio(); ?></td>
                                    <td><?php echo $dado->getData_fim(); ?></td>
                                    <td><?php echo $dado->getData_fim(); ?></td>
                                    <td><?php echo $dado->getData_fim(); ?></td>

                                    <td><a href="/os?visualizar&id=<?php echo $dado->getId(); ?>">Visualizar</a> | <a href="/os?editar&id=<?php echo $dado->getId(); ?>">Editar</a> | <a href="">Excluir</a></td>                    
                                <tr>


                        <?php }}; ?>
                    </tbody>
                </table>    
            </div>
        
        </div>
    </div>

</body>

<script src="assets/js/horaAtual.js"></script>
<script src="assets/js/mascaraFormulario.js"></script>

</html>