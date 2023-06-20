import 'dart:io';

void main() {
  double divisor;
  double dividendo;
  double resultado;
  double quociente;

  print('Insira o divisor');
  divisor = double.parse(stdin.readLineSync()!);
  divisor = divisor.toDouble();

  print('Insira o dividendo');
  dividendo = double.parse(stdin.readLineSync()!);
  dividendo = dividendo.toDouble();

  resultado = divisor / dividendo;
  quociente = divisor % dividendo;

  print(resultado);
  print(quociente);
  
}