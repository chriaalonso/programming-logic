import 'dart:io';
import 'dart:math';

void main() {
  double numero;
  double raiz_q;
  double? raiz_c;

  print('CALCULAR RAÍZ QUADRADA: ');
  print('Insira um número: ');
  numero = double.parse(stdin.readLineSync()!);

  raiz_q = sqrt(numero);
  raiz_c = pow(numero, 1.0 / 3.0) as double?;

  print('A raíz quadrada de ' +
      numero.toStringAsFixed(0) +
      ' é ' +
      raiz_q.toStringAsPrecision(2));

  print('A raíz cúbica de ' +
      numero.toStringAsFixed(0) +
      ' é ' +
      raiz_c!.toStringAsPrecision(2));
}
