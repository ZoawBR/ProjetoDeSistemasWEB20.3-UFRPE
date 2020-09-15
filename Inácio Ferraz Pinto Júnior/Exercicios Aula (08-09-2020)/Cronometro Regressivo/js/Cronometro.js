var tempo = 0;

var inputTemp = document.getElementById("entrada-tempo");
var hora = document.getElementById("hora");
var minuto = document.getElementById("minuto");
var segundo = document.getElementById("segundo");
var buttonIniciar = document.getElementById("btn-iniciar");
var buttonParar = document.getElementById("btn-parar");

var intervaloMin = null;


function iniciar() {
    var contSeg = 60
    var contMin = 0
    var contHora = 0

    if (tempo < 60) {
        contHora = 0
        contMin = tempo - 1
    } else if ((tempo % 60) == 0) {
        contHora = Math.trunc(tempo / 60) - 1
        contMin = 59
    } else if ((tempo % 60) > 0) {
        contHora = Math.trunc(tempo / 60)
        contMin = tempo % 60 - 1
    }

    intervaloMin = setInterval(function() {

        if ((tempo - 1) == -1) {
            pararTudo()
            minuto.innerText = "00";
            segundo.innerText = "00";
            hora.innerText = "00";
        } else {


            if (contSeg == 0) {
                tempo--;

                if (contMin == 0) {
                    contHora--
                    contMin = 60
                }

                contMin--;

                contSeg = 60;
            }

            contSeg--;

            minuto.innerText = contMin < 10 ? "0" + contMin.toString() : contMin;
            segundo.innerText = contSeg < 10 ? "0" + contSeg.toString() : contSeg;
            hora.innerText = contHora < 10 ? "0" + contHora.toString() : contHora;
        }

    }, 1000);
}

buttonIniciar.onclick = function() {
    tempo = inputTemp.value;

    buttonIniciar.disabled = true;
    buttonParar.disabled = false;
    iniciar();
}

function pararTudo() {
    clearInterval(intervaloMin);
    buttonIniciar.disabled = false;
    buttonParar.disabled = true;
}

buttonParar.onclick = function() {
    pararTudo()
}