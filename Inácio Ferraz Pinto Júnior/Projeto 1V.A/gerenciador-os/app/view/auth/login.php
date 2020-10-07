<!-- 
    -=-=-=-=-==-==--=-=-==--=-=-==--==--=-==--=-=-=-=-
        CODIGO FEITO POR: INACIO FERRAZ PINTO JUNIOR
             GITHUB: https://github.com/ZoawBR
    -=-=-=-=-==-==--=-=-==--=-=-==--==--=-==--=-=-=-=-
 -->
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/login.css">
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="assets/img/icon-logo.jpg">

    <title>Facility - Zoa Sys.</title>
</head>

<body>
    <img class="logo" src="assets/img/login/logo.png" alt="">

    <div id="area-login">
        <div id="carousel-card">
            <img id="carousel" src="assets/img/login/carousel/1.jpg" alt="" srcset="">
        </div>

        <div id="login-card">
            <h1 class="letreiro"><strong>Facility</strong> - Controle de O.s.</h1>

            <div class="login-area">

                <form role="form" action="/auth" method="post" style="margin-top: 2%;" >
                    <input id="user-input" class="input-text" type="text" name="usuario" placeholder="Usuário">
                    <input id="password-input" class="input-text" type="password" name="senha" placeholder="Senha">
                    <button id="login-btn" class="btn" type="submit" name="entrar">Entrar</button>
                </form>
            </div>

            <div id="contato-area">
                <li>
                    <ul>
                        <a href="https://www.linkedin.com/in/in%C3%A1cio-ferraz-90ba83186/" target="_blank"><img class="config-logo-contato" src="/assets/img/login/linkedin.svg" alt=""></a>
                    </ul>
                    <ul>
                        <a href="https://www.instagram.com/inacioferrazpj/" target="_blank"><img class="config-logo-contato" src="assets/img/login/instagram.svg" alt=""></a>
                    </ul>
                    <ul>
                        <a href="https://api.whatsapp.com/send?phone=5587999278405" target="_blank"><img class="config-logo-contato" src="assets/img/login/whatsapp.svg" alt=""></a>
                    </ul>
                </li>
            </div>
        </div>
    </div>
</body>

<script src="assets/js/Carousel.js"></script>

</html>