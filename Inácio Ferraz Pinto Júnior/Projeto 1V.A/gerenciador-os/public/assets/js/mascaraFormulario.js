// https://igorescobar.github.io/jQuery-Mask-Plugin/

$('#cep').mask('00000-000');
$('#cnpj').mask('00.000.000/0000-00');
$('#celular').mask('(00) 00000-0000');
$('#telefone').mask('(00) 0000-0000');
$('#cpf').mask('000.000.000-00');
$('#data_inicio').mask('00/00/0000');
$('#data_fim').mask('00/00/0000');


var options = {
    onKeyPress: function(cpf, ev, el, op) {
        var masks = ['000.000.000-000', '00.000.000/0000-00'];
        $('#cpf_cnpj').mask((cpf.length > 14) ? masks[1] : masks[0], op);
    }
}

$('#cpf_cnpj').length > 11 ? $('#cpf_cnpj').mask('00.000.000/0000-00', options) : $('#cpf_cnpj').mask('000.000.000-00#', options);