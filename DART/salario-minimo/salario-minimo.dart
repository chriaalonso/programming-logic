import 'dart:io';

void main() {
  double salary;
  double basic_salary = 1320;
  double basic_salary_total;
  double basic_quociente_total;

  print('Insira seu salário');
  salary = double.parse(stdin.readLineSync()!);

  basic_salary_total = salary / basic_salary;
  basic_quociente_total = salary % basic_salary;

  print('Você recebe ' + basic_salary_total.toStringAsPrecision(3) + ' salários mais R\$' + basic_quociente_total.toStringAsPrecision(5));
}