let letreiro = $("#letreiro");
let imagem = $("#imagem");
let btnAnterior = $("#btn-anterior");
let btnProximo = $("#btn-proximo");
let contador = $("#contador");

let currentImage = 1

function mudarImagem() {
    imagem.attr("src", "./img/" + currentImage + ".jpg")
    contador.text(currentImage + " / 5")
}

setInterval(function() {
    mudarImagem()
    if (currentImage == 5) {
        currentImage = 0
    }

    currentImage++
}, 3000)

btnAnterior.click(function() {
    if (currentImage == 1) {
        currentImage = 5
    } else {
        currentImage--
    }
    mudarImagem()
})

btnProximo.click(function() {
    if (currentImage == 5) {
        currentImage = 1
    } else {
        currentImage++
    }
    mudarImagem()
})