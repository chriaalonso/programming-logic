import 'dart:io';

void main() {
  double salary;
  int days;
  double hours;
  double total_hours;
  double per_hour;

  print('Insira o seu salário: ');
  salary = double.parse(stdin.readLineSync()!);
  salary = salary.toDouble();

  print('Insira os dias trabalhados: ');
  days = int.parse(stdin.readLineSync()!);
  days = days.toInt();

  print('Insira as horas trabalhadas: ');
  hours = double.parse(stdin.readLineSync()!);
  hours = hours.toDouble();

  total_hours = days * hours;
  per_hour = salary / total_hours;

  print("Você recebe por hora R\$" + per_hour.toStringAsPrecision(4));
}
