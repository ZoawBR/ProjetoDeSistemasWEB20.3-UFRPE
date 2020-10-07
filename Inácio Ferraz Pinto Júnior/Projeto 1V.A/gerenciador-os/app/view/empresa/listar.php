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
            <h1>Empresas Cadastradas:</h1>
            <hr class='setores-formulario'/>
            <div id='responsividade-table'>
                <table>
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Nome</th>
                            <th>CNPJ</th>
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
                            <th>Situação</th>
                            <th>Contrato</th>
                            <th>isAdm</th>
                            <th>Ações</th>

                        </tr>
                    </thead>

                    <tbody id='tabelaMostrarEmpresas'>
                        <?php
                            
                            foreach($empresa_dados as $dado){ 
                                $enderecos = $enderecoDao->findById($dado->getId_endereco());
                                $contatos = $contatoDao->findById($dado->getId_contato());
                        ?>
                            <tr>
                                <td><?php echo $dado->getId(); ?></td>
                                <td><?php echo $dado->getNome(); ?></td>
                                <td><?php echo $dado->getCnpj(); ?></td>
                                <td><?php echo $contatos->getCelular(); ?></td>
                                <td><?php echo $contatos->getTelefone(); ?></td>
                                <td><?php echo $contatos->getEmail(); ?></td>

                                <td><?php echo $enderecos->getCep(); ?></td>
                                <td><?php echo $enderecos->getEndereco(); ?></td>
                                <td><?php echo $enderecos->getNumero(); ?></td>
                                <td><?php echo $enderecos->getCidade(); ?></td>
                                <td><?php echo $enderecos->getEstado(); ?></td>
                                <td><?php echo $enderecos->getPais(); ?></td>
    
                                <td><?php echo $dado->getUsuario(); ?></td>
                                <td><?php echo $dado->getSituacao(); ?></td>
                                <td><?php echo $dado->getData_contrato(); ?></td>
                                <td><?php echo $dado->getIsAdm(); ?></td>
                                <td><a href="/empresa?visualizar&id=<?php echo $dado->getId(); ?>">Visualizar</a> | <form action="/empresa?editar&id=<?php echo $dado->getId(); ?>" method='POST'><button type='submit'>Editar</button></form> | <a href="">Excluir</a></td>                    
                            <tr>
                        <?php }; ?>

                    </tbody>
                </table>    
            </div>
        
        </div>
    </div>

</body>

<script src="assets/js/horaAtual.js"></script>
<script src="assets/js/mascaraFormulario.js"></script>

</html>