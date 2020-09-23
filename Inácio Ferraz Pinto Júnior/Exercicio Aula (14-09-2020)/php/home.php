<?php
    session_start();
?>

<h1>Olá, <?php echo $_SESSION['nome']; ?> <?php echo $_SESSION['sobrenome'];  ?>. Do sexo <?php echo $_SESSION['sexo']?>. Eu sei que você mora na <?php  echo $_SESSION['rua']; ?>.</h1>
