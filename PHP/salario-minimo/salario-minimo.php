<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
	<title>Salário Mínimo</title>
</head>

<body>
	<div class="container mt-5">
		<div class="row">
			<div class="col">
				<h1 class="text-uppercase mb-5">Insira seu salário:</h1>
				<form action="<?= $_SERVER['PHP_SELF'] ?>" method="GET">
					<div class="mb-3">
						<label for="salary" class="form-label">Salário: </label>
						<input type="text" name="salary" id="salary" placeholder="Insira seu salário" class="form-control">
					</div>
					<button type="submit" class="btn btn-success mt-2">Calcular</button>
				</form>
				<h2 class="mt-5">Cálculo feito com base no valor do salário mínimo de R$1320,00</h2>
			</div>
		</div>

		<div class="row">
			<div class="col">
				<h2 class="mt-5">Resultado</h2>
				<?php
				$salary = $_GET['salary'] ?? 'Não inseriu o salário';
				$salary_minimum = 1320;

				$total_salary = $salary / $salary_minimum;
				$quociente = $salary % $salary_minimum;

				echo "<p>Quem recebe R$" . number_format($salary, 2, ",", ".") . " recebe " . number_format($total_salary, 2, ",", ".") . " salários mínimos mais R$" . $quociente . "</p>";
				?>
			</div>
		</div>
	</div>
</body>

</html>