<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</head>
<body>	

<div style="padding: 5vh; max-width: 50vw; ">
	<form action="index.php" method="POST">
		<div class="form-group">
			<label for="tempo-viagem">Tempo gasto na viagem</label>
			<input type="text" class="form-control" id="tempo-viagem" aria-describedby="emailHelp" placeholder="Tempo gasto na viagem (em horas)" name="tempo">
		</div>
		<div class="form-group">
			<label for="velocidade-media">Velocidade média</label>
			<input type="text" class="form-control" id="velocidade-media" placeholder="Velocidade (em km/h)" name="velocidade">
		</div>
		<button type="submit" class="btn btn-primary" name="enviar">Calcular</button>
	</form>
	
	<hr>
	<p>
		<?php
			//echo '<pre>';
			//print_r($_POST); 
			//echo '</pre>';

			if (isset($_POST['enviar'])) {

				if (($_POST['tempo'] != '') && ($_POST['velocidade'] != '')) {
					
					$rendimentoCarro = 12;
					$tempo = $_POST['tempo'];
					$velocidade = $_POST['velocidade'];

					$distancia = $tempo * $velocidade;

					$velocidadeMedia = $distancia / $tempo;

					$quantLitros = $distancia / $rendimentoCarro;

					echo "O veículo utilizado para base de cálculo faz $rendimentoCarro quilômetros / litro. <br>";
					echo "Tempo gasto: $tempo horas. <br>";
					echo "Distância percorrida: $distancia quilômetros. <br>";
					echo "Velocidade média do veículo: $velocidadeMedia km/h. <br>";
					echo "Quantidade de litros utilizados: $quantLitros litros. <br>";
				} else{
					echo "Por favor, forneça os dados para base de cálculo. ";	
				}

			} else{
				echo "Por favor, forneça os dados para base de cálculo. ";
			}

		?>
	</p>

</div>

</body>
</html>