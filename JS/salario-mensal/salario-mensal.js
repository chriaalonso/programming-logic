// Pega os valores inseridos no HTML
let salary = document.querySelector('#salary');
let days = document.querySelector('#days');
let hours = document.querySelector('#hours');
let result = document.querySelector('#salaryPerHour');

// Calcula os valores e insere o resultado no HTML
function calculate(){
    let totalHours = parseFloat(days.value) * parseFloat(hours.value);
    let totalSalary = parseFloat(salary.value) / parseFloat(totalHours);
    let totalSalaryFormat = totalSalary.toFixed(2);
    result.innerHTML = parseFloat(totalSalaryFormat);
}