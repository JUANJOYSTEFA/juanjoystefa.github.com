<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style.css">
	<title>Calcular El Arco</title>
</head>

<body>
	<div class="menu">
		<a href="/calculadora_mate/grados/"><span>Grados Decimales->GMS</span></a><br><br>
		<a href="/calculadora_mate/gms/"><span>GMS->Grados Decimales</span></a><br><br>
		<a href="/calculadora_mate/grds-rad/"><span>Grados->Radianes</span></a><br><br>
		<a href="/calculadora_mate/rad-grds/"><span>Radianes->Grados</span></a><br><br>
		<a href="/calculadora_mate/arco/"><span>Calcular longitud de arco</span></a><br><br>
		<a href="/calculadora_mate/area/"><span>Calcular Área del sector circular</span></a><br><br>
		<a href="/calculadora_mate/vangular/"><span>Calcular Velocidad Angular</span></a><br><br>
		<a href="/calculadora_mate/vlineal/"><span>Calcular Velocidad Lineal</span></a><br><br>
	</div>
	<div class="pagina">
		<div class="wrapper">

			<form action="" method="post">
				<center>
					<ul>
						<li>
							<h1>Ingrese El Radio:</h1>
						</li>
						<li>
							<input type="number" class="input" name="radio" min="0">
							<select name="unidadRadio" class="select">
								<option>Centimetros</option>
								<option>Metros</option>
								<option>Kilometros</option>
							</select>
						</li>
					</ul>
					<ul>
						<li>
							<h1>Ingrese El Ángulo:</h1>
						</li>
						<li>
							<input type="number" class="input" name="angulo" min="0" step="0.00001">
							<select name="unidadAngulo" class="select">
								<option>Grados</option>
								<option>Radianes</option>
							</select>
						</li>
					</ul>
					<input type="submit" value="Calcular" class="submit" name="submit">

				</center>
			</form>
			<center>
				<br>
				<h1>
					<?php
					if (!empty($_POST['radio']) && !empty($_POST['angulo'])) {
						$unidad = $_POST['unidadRadio'];
						$radio = $_POST['radio'];
						$unidadGrado = $_POST['unidadAngulo'];
						$grados = $_POST['angulo'];
						if ($unidadGrado == "Grados") {
							$grados = ($grados * M_PI) / 180;
						}
						$arco = $grados * $radio;
						echo "La longitud del arco es: $arco $unidad";
					}
					?>
				</h1>
			</center>
		</div>
	</div>
</body>

</html>