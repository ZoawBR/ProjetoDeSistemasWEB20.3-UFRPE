let btnPesquisar = document.getElementById("button-buscar-cep");

var dadosCidade = {}
var err = false
let ceps = ['AC', 'AL', 'AP', 'AM', 'BA', 'CE', 'ES', 'GO', 'MA', 'MT', 'MS', 'MG', 'PA', 'PB', 'PR', 'PE', 'PI', 'RN', 'RJ', 'RS', 'RO', 'RR', 'SC', 'SP', 'SE', 'TO', 'DF']

let cep = document.getElementById("cep");
let estado = document.getElementById("estado");
let cidade = document.getElementById("cidade");
let endereco = document.getElementById("endereco");

function arrumarCepParaAPI() {
    let cepParaApi = cep.value.split('-');
    return cepParaApi[0] + cepParaApi[1];
}

function enviarRequisicao() {
    let cepParaApi = arrumarCepParaAPI()
    req = fetch(`https://cep.awesomeapi.com.br/json/${cepParaApi}`)
        .then(function(res) {
            res.json().then(function(data) {
                if (data.status == 404) {
                    err = true
                } else if (data.status == 400) {
                    err = true
                } else {
                    err = false
                }


                dadosCidade["estado"] = data.state
                dadosCidade["cidade"] = data.city
                dadosCidade["endereco"] = data.address
                dadosCidade["ERRO"] = data.status
                mostrarRequisicaoParaCliente()
            })
        })
}

function mostrarRequisicaoParaCliente() {
    if (err == false) {
        ceps.forEach(element => {
            if (dadosCidade.estado == element) {
                $('#estado option').filter(function() {
                    return this.text == element;
                }).attr('selected', true);
            }
        });


        cidade.value = dadosCidade.cidade
        endereco.value = dadosCidade.endereco

        // erro.innerHTML = ""
    } else {
        if (dadosCidade.ERRO == 404) {
            erro.innerHTML = "CEP Não Foi Encontrado"
        }
        cidade.value = ""
        endereco.value = ""
        cep.style.border = '1px solid #f00'

    }
}

btnPesquisar.onclick = function(e) {
    var entrada = arrumarCepParaAPI();
    if (typeof entrada == String || entrada.length < 8 || entrada.length > 8) {
        cep.style.border = '1px solid #f00'
    } else {
        cep.style.border = '1px solid #ccc'
        enviarRequisicao();
    }
}