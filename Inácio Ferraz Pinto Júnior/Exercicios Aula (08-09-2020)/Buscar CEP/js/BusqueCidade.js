let btnPesquisar = document.getElementById("btn-pesquisar");
let fieldEntrada = document.getElementById("cep-entrada");
let erro = document.getElementById("erro");

var dadosCidade = {}
var err = false

let cep = document.getElementById("cep");
let estado = document.getElementById("estado");
let cidade = document.getElementById("cidade");
let endereco = document.getElementById("endereco");
let distrito = document.getElementById("distrito");

function enviarRequisicao() {
    req = fetch(`https://cep.awesomeapi.com.br/json/${fieldEntrada.value}`)
        .then(function(res) {
            res.json().then(function(data) {
                if (data.status == 404) {
                    err = true
                } else if (data.status == 400) {
                    err = true
                } else {
                    err = false
                }

                dadosCidade["cep"] = data.cep
                dadosCidade["estado"] = data.state
                dadosCidade["cidade"] = data.city
                dadosCidade["endereco"] = data.address
                dadosCidade["distrito"] = data.district
                dadosCidade["ERRO"] = data.status

                mostrarRequisicaoParaCliente()
            })
        })
}

function mostrarRequisicaoParaCliente() {
    if (err == false) {
        cep.innerText = dadosCidade.cep
        estado.innerText = dadosCidade.estado
        cidade.innerText = dadosCidade.cidade
        endereco.innerText = dadosCidade.endereco
        distrito.innerText = dadosCidade.distrito
        erro.innerHTML = ""
    } else {
        if (dadosCidade.ERRO == 404) {
            erro.innerHTML = "CEP Inválido"
        } else if (dadosCidade.ERRO == 400) {
            erro.innerHTML = "CEP Não Existe"
        }
        cep.innerText = ""
        estado.innerText = ""
        cidade.innerText = ""
        endereco.innerText = ""
        distrito.innerText = ""
    }
}

btnPesquisar.onclick = function(e) {
    enviarRequisicao();
}