<div id="menu">
    <div id="conteudo-menu" style= 'height:75%;'>
        <img class="logo" src="assets/img/logo-menu.png" alt="">

        <h2 class="usuario-nome"><?php echo $_SESSION['usuario'];?></h2>
        <?php if($_SESSION['isEmpresa'] == 0): ?>
        <h4 class="empresa-nome">
            <?php
               echo $_SESSION['empresa'];
            ?>
        </h4>

        <?php endif; ?>

        <h4 id="horario-atual"></h4>
        <div id='scroll'style=' overflow:auto; height: 80%'>
            <!-- Funcionario COntratante -->
                <form action='/' method='POST'><button class="btn" type="submit">Início</button></form>  
                <form action='/os' method='POST'><button class="btn" type="submit">Ordens de Serviço</button></form> 
                <form action='/os?criar' method='POST'><button class="btn" type="submit">Cadastrar Ordem de Serviço</button></form> 
                <form action='/cliente' method='POST'><button class="btn" type="submit">Clientes</button></form> 
                <form action='/cliente?criar' method='POST'><button class="btn" type="submit">Cadastrar Cliente</button></form> 

            <?php if($_SESSION['isEmpresa'] == 1): ?>
                <form action='/funcionario' method='POST'><button class="btn" type="submit">Funcionarios</button></form> 
                <form action='/funcionario?criar' method='POST'><button class="btn" type="submit">Cadastrar Funcionario</button></form> 
            <?php endif; ?>

            <!-- ADM Site -->
            <?php if($_SESSION['isAdm'] == 1): ?>
                <form action='/empresa' method='POST'><button class="btn" type="submit">Empresas</button></form>  
                <form action='/empresa?criar' method='POST'><button class="btn" type="submit">Cadastrar Empresa</button></form>  
            <?php endif; ?>

            <!-- <form action='/produtos' method='POST'><button class="btn" type="submit">Produtos</button></form> 
            <form action='/cadastrar-produtos' method='POST'><button class="btn" type="submit">Cadastrar Produto</button></form> 
            <form action='/servicos' method='POST'><button class="btn" type="submit">Serviço</button></form> 
            <form action='/cadastrar-servico' method='POST'><button class="btn" type="submit">Cadastrar Serviço</button></form>  -->
        </div>
        <form action='/sair' method='POST'><button class="btn" type="submit">Sair</button></form>               
    </div>
    <div id="botaoHiden" onclick="hiddenMenu()" value='false'><i class="fas fa-bars" >//</i></div>

</div>

