let numero = document.getElementById("numero");
let result_q = document.getElementById("result_raiz_q");
let result_c = document.getElementById("result_raiz_c");

function calcular() {
    let raiz_q = parseFloat(numero.value) ** (1/2);
    let raiz_c = parseFloat(numero.value) ** (1/3);

    numero_get.innerHTML = parseFloat(numero.value);
    result_q.innerHTML = raiz_q;
    result_c.innerHTML = raiz_c;
}