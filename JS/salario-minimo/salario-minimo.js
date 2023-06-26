let salary_minimum = 1320;
let salary = document.getElementById("salary");

let result = document.getElementById("salary_total");
let result_quociente = document.getElementById("salary_resto");


function calculate() {
    let total_salary = parseFloat(salary.value) / parseFloat(salary_minimum);
    let quociente = parseFloat(salary.value) % parseFloat(salary_minimum);

    let total_salary_format = total_salary.toFixed(2);
    let quociente_format = quociente.toFixed(2);

    salary_user_get.innerHTML = parseFloat(salary.value);
    result.innerHTML = parseFloat(total_salary_format);
    result_quociente.innerHTML = parseFloat(quociente_format);
}


