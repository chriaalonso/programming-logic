void main() {
  double salary = 8357.17;
  int days = 22;
  double hours = 8;
  double total_hours;
  double per_hour;

  total_hours = days * hours;
  per_hour = salary / total_hours;

  print("Você recebe por hora R\$" + per_hour.toStringAsPrecision(4));
}
