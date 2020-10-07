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
            <h1>Clientes Cadastrados:</h1>
            <hr class='setores-formulario'/>
    <!-- AKI DEPOIS POR UM CODIGO QUE O ADM PODE VER DE TODAS A S EMPRESAS E FORMAS DE PESQUISAS -->
            <div id='responsividade-table'>
                <table>
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Nome</th>
                            <th>CPF/CNPJ</th>
                            <th>Celular</th>
                            <th>Telefone</th>
                            <th>E-mail</th>
                            <th>CEP</th>
                            <th>Endereço</th>
                            <th>Numero</th>
                            <th>Cidade</th>
                            <th>Estado</th>
                            <th>País</th>
                            <th>Usuário</th>
                        </tr>
                    </thead>

                    <tbody id='tabelaMostrarEmpresas'>
                    <?php
                            $enderecos = $enderecoDao->findAll();
                            $contatos = $contatoDao->findAll();
                            $empresas = $empresaDao->findAll();
                            foreach($cliente_dados as $dado){ 
                                if($_SESSION['id_empresa'] == $dado->getId_empresa()){
                        ?>
                            <tr>
                                <td><?php echo $dado->getId(); ?></td>
                                <td><?php echo $dado->getNome(); ?></td>
                                <td><?php echo $dado->getCnpj_cpf(); ?></td>
                                <td><?php echo $contatos[$dado->getId_contato()-1]->getCelular(); ?></td>
                                <td><?php echo $contatos[$dado->getId_contato()-1]->getTelefone(); ?></td>
                                <td><?php echo $contatos[$dado->getId_contato()-1]->getEmail(); ?></td>
                                <td><?php echo $enderecos[$dado->getId_endereco()-1]->getCep(); ?></td>
                                <td><?php echo $enderecos[$dado->getId_endereco()-1]->getEndereco(); ?></td>
                                <td><?php echo $enderecos[$dado->getId_endereco()-1]->getNumero(); ?></td>
                                <td><?php echo $enderecos[$dado->getId_endereco()-1]->getCidade(); ?></td>
                                <td><?php echo $enderecos[$dado->getId_endereco()-1]->getEstado(); ?></td>
                                <td><?php echo $enderecos[$dado->getId_endereco()-1]->getPais(); ?></td>
    
                                <td><a href="/cliente?visualizar&id=<?php echo $dado->getId_contato(); ?>">Visualizar</a> | <form action="/cliente?editar&id=<?php echo $dado->getId(); ?>" method='post'><button type='submit'>Editar</button></form> | <a href="">Excluir</a></td>                    
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