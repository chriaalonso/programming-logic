// Pega os valores inseridos no HTML
let salary: any = document.querySelector('#salary');
let days: any = document.querySelector('#days');
let hours: any = document.querySelector('#hours');
let result: any = document.querySelector('#salaryPerHour');

// Calcula os valores e insere o resultado no HTML
function calculate(){
    let totalHours: any = parseFloat(days) * parseFloat(hours);
    let totalSalary: any = parseFloat(salary) / parseFloat(totalHours);
    let totalSalaryFormat: any = totalSalary.toFixed(2);
    result.innerHTML = parseFloat(totalSalaryFormat);
}


// // Pega os valores inseridos no HTML
// let salary = document.querySelector('#salary');
// let days = document.querySelector('#days');
// let hours = document.querySelector('#hours');
// let result = document.querySelector('#salaryPerHour');

// // Calcula os valores e insere o resultado no HTML
// function calculate(){
//     let totalHours = parseFloat(days.value) * parseFloat(hours.value);
//     let totalSalary = parseFloat(salary.value) / parseFloat(totalHours);
//     let totalSalaryFormat = totalSalary.toFixed(2);
//     result.innerHTML = parseFloat(totalSalaryFormat);
// }