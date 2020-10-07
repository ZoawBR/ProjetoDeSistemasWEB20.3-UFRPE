var horaAtual = document.getElementById('horario-atual');

setInterval(function() {
    let currentDate = new Date();
    horaAtual.innerText = `${currentDate.getHours()}:${currentDate.getMinutes()} ${currentDate.getDate()}/${currentDate.getMonth()}/${currentDate.getFullYear()}`;
}, 1000);

let hidden = false;

function hiddenMenu() {
    if (hidden == false) {
        document.getElementById('conteudo-menu').style.display = 'none';

        if (window.innerWidth < 800) {
            document.getElementById('menu').style.width = '0px';
            document.getElementById('back-main').style.width = '102%';
            document.getElementById('conteudo-menu').style.width = "0";

        } else {
            document.getElementById('menu').style.width = '30px';
            document.getElementById('back-main').style.width = '99%';
            document.getElementById('conteudo-menu').style.width = "0";


        }

        hidden = true;
    } else {
        document.getElementById('conteudo-menu').style.display = 'block';

        if (window.innerWidth < 800) {
            document.getElementById('menu').style.width = '230px';
            document.getElementById('back-main').style.width = '102%';
            document.getElementById('conteudo-menu').style.width = "100%";


        } else {
            document.getElementById('menu').style.width = '20%';
            document.getElementById('back-main').style.width = '80%';
            document.getElementById('conteudo-menu').style.width = "100%";


        }

        hidden = false;
    }
    document.getElementById('menu').style.transition = "1s";
    document.getElementById('botaoHiden').style.transition = "1s";
    document.getElementById('back-main').style.transition = "1s";
    document.getElementById('conteudo-menu').style.transition = "1s";
}