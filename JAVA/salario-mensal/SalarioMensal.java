import java.text.NumberFormat;

public class SalarioMensal {

    static NumberFormat numberFormat = NumberFormat.getCurrencyInstance();
    public static void main(String[] args) {
        double salary = 8357.17;
        int days = 22;
        double hours = 8;
        double total_hours;
        double per_hour;

        total_hours = days * hours;
        per_hour = salary / total_hours;

        System.out.println("Você recebe por hora: R$"+numberFormat.format(per_hour));
    }
}