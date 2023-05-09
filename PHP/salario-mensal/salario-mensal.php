<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    <title>Salário Mensal</title>
</head>

<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col">
                <h1 class="text-uppercase mb-5"> Quanto você ganha por hora:</h1>
                <?php

                $salary = $_GET['salary'] ?? 'Não inseriu o salário';
                $days = $_GET['days'] ?? 'Não inseriu os dias';
                $hours = $_GET['hours'] ?? 'Não inseriu as horas';

                $total_hours = $days * $hours;
                $per_hour = $salary / $total_hours;
                
                $per_hour_format = number_format($per_hour, 2, ',');

                echo '<h2>R$' . $per_hour_format . '</h2>';

                ?>
            </div>
        </div>
    </div>
</body>

</html>