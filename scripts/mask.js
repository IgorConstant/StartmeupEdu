$(document).ready(function () {
    $("#contatoCelular, #inputCelularDDD, #inputCelularDDDResp, #celularSaibaMais, #celularEmpresa").mask("(00) 00000-0000");
    $('#inputRG, #inputRGResp').mask('99.999.999-9');
    $("#inputDNResp, #inputDN").mask("99/99/9999");
    $('#inputCPF, #inputCPFResp').mask('000.000.000-00', {
        reverse: true
    });

});