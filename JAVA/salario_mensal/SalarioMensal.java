package salario_mensal;

import java.text.NumberFormat;
import java.util.Scanner;

public class SalarioMensal {

    static NumberFormat numberFormat = NumberFormat.getCurrencyInstance();
    public static void main(String[] args) {

        
        Double salary;
        Integer days;
        Double hours;
        Double total_hours;
        Double per_hour;
        
        Scanner scanner = new Scanner(System.in);

        System.out.print("Insira o salário: ");
        salary = scanner.nextDouble();

        System.out.print("Insira os dias trabalhados: ");
        days = scanner.nextInt();

        System.out.print("Insira as horas trabalhadas: ");
        hours = scanner.nextDouble();

        total_hours = days * hours;
        per_hour = salary / total_hours;

        System.out.print("Você recebe por hora: R$"+numberFormat.format(per_hour));
    }
}