<?php
setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
date_default_timezone_set('America/Sao_Paulo');
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/menu.css">
    <link rel="shortcut icon" href="assets/img/icon-logo.jpg">
    <link rel="stylesheet" href="assets/css/inicio.css">
    <title>Facility - Zoa Sys.</title>
</head>
<body>

    <?php require __DIR__ . '/../template/menu.php';?>
        
    <div id="back-main">
        <div id="conteudo-main">
            LOGADO
        </div>
    </div>
</body>

<!-- <script src="../controllers/configButtonFuncionario.js"></script>

<?php //if($_SESSION['isEmpresa']): ?>
<script src="../controllers/configButtonEmpresa.js"></script>

<?php //endif; ?>

<?php //if($_SESSION['usuarioLogado']['nome'] == 'Zoa'): ?>
<script src="../controllers/configButtonADM.js"></script>
<?php //endif; ?> -->


<script src="assets/js/horaAtual.js"></script>

</html>