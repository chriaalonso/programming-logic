package divisor;
import java.util.Scanner;

public class Divisor {
    public static void main(String[] args) {
        Double divisor;
        Double dividendo;
        Double resultado;
        Double quociente;

        Scanner scanner = new Scanner(System.in);

        System.out.println("Insira o divisor");
        divisor = scanner.nextDouble();

        System.out.println("Insira o dividendo");
        dividendo = scanner.nextDouble();

        resultado = divisor / dividendo;
        quociente = divisor % dividendo;

        System.out.println(resultado);
        System.out.println(quociente);
    }
}