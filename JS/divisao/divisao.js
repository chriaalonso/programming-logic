let dividendo = document.querySelector('#dividendo');
let divisor = document.querySelector('#divisor');
let result = document.querySelector('#resultado');
let resto = document.querySelector('#resto');

function calculate() {
    let resultadoo = parseFloat(dividendo.value / divisor.value);
    let quociente = parseFloat(dividendo.value % divisor.value);
    result.innerHTML = parseFloat(resultadoo.toFixed(2));
    resto.innerHTML = parseFloat(quociente.toFixed(2));
}
