<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Raíz quadrada e cúbica</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
</head>

<body>
	<div class="container">
		<div class="row">
			<div class="col">
				<h1>Calcular raíz quadrada e cúbica</h1>
			</div>
		</div>

		<div class="row">
			<div class="col">
				<form action="<?= $_SERVER['PHP_SELF']; ?>">
					<label for="" class="form-label">Insira um número</label>
					<input type="number" name="numero" id="numero" class="form-control">

					<div class="row">
						<div class="col">
							<button class="btn btn-success mt-3">Calcular</button>
						</div>
					</div>
				</form>
			</div>
		</div>

		<div class="row mt-5">
			<div class="col">
				<?php
					$numero = $_GET['numero'] ?? 'Número não inserido';

					$raiz_q = $numero ** (1/2);
					$raiz_c = $numero ** (1/3);

					echo "<p>Analisando o número <strong>$numero</strong>, temos: </p>";
					echo "Raíz quadrada: <strong>$raiz_q</strong>";
					echo "<br>";
					echo "Raíz cúbica: <strong>$raiz_c</strong>";
				?>
			</div>
		</div>
	</div>
</body>

</html>