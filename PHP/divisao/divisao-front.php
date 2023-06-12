<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    <title>Divisão</title>
</head>

<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col">
                <h1 class="text-uppercase mb-5"> Divisão:</h1>
                <form action="" method="GET">
                    <div class="mb-3">
                        <label for="salary" class="form-label">Dividendo</label>
                        <input type="number" name="dividendo" id="dividendo" value="<?= $dividendo; ?>" placeholder="Insira o Dividendo" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="days" class="form-label">Divisor</label>
                        <input type="number" name="divisor" id="divisor" value="<?= $divisor; ?>" placeholder="Insira o Divisor" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-success mt-2 mb-3">Dividir</button>
                </form>
            </div>
        </div>

        <hr>

        <div class="row mt-5">
            <div class="col">
                <h2>Estrutura da divisão</h2>

                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                    <?php
                    $dividendo = $_GET['dividendo'] ?? 0;
                    $divisor = $_GET['divisor'] ?? 1;

                    $resultado = $dividendo / $divisor;
                    $quociente = $dividendo % $divisor;

                    echo '<h2>Resultado: ' . $resultado . '</h2>';
                    echo '<h2>Resto: ' . $quociente . '</h2>';
                    ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>