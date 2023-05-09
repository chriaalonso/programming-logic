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
                <form action="salario-mensal.php" method="GET">
                    <div class="mb-3">
                        <label for="salary" class="form-label">Salário</label>
                        <input type="text" name="salary" id="salary" placeholder="Insira seu salário" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="days" class="form-label">Dias</label>
                        <input type="text" name="days" id="days" placeholder="Insira os dias" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="hours" class="form-label">Horas por dia</label>
                        <input type="text" name="hours" id="hours" placeholder="Insira as horas por dia" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-success mt-2">Calcular</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>