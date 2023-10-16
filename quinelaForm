<HTML>
<HEAD> <TITLE>QUINELA</TITLE> </HEAD>
<STYLE>
table {
  border-collapse: collapse;
}
td, tr{
  border: 1px solid black;
  text-align: left;
  padding: 8px;
}
</STYLE>
<BODY>
<form name='mi_formulario' action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method='post'>
<?php

if($_SERVER['REQUEST_METHOD'] == 'POST'){
	for($i = 0; $i < 14; $i++){
		$r = $i + 1;
		$columna[$i] += ($_POST["resultado".$r]);
	}
	
	var_dump($columna);
}
$columna = array();
$numeros_generados = array();
$min = 0;
$max = 27;
//$i = 0;
$cantidad_numeros = 27;
$jornada = array();
$quinela = array();
$resultados = "1X2";
$rango = range(0, 27);

$equipos = array(
	"Alavés",
	"Athletic Bilbao",
	"Atlético de Madrid",
	"Barcelona",
	"Cádiz",
	"Celta de Vigo",
	"Elche",
	"Espanyol",
	"Getafe",
	"Granada",
	"Levante",
	"Mallorca",
	"Osasuna",
	"Rayo Vallecano",
	"Real Betis",
	"Real Madrid",
	"Real Sociedad",
	"Sevilla",
	"Valencia",
	"Villarreal",
	"Albacete",
	"Malaga",
	"Leganes",
	"Huesca",
	"Zaragoza",
	"Hercules",
	"Andorra",
	"Racing"
);

if ($cantidad_numeros > ($max - $min + 1)) {
	echo "No se pueden generar más números únicos que la longitud del rango.";
}else {
	while(count($numeros_generados) != 28){
		do {
			$numero_aleatorio = rand($min, $max);
			$numero_aleatorio2 = rand($min, $max);
		} while (in_array($numero_aleatorio, $numeros_generados) || in_array($numero_aleatorio2, $numeros_generados) || $numero_aleatorio == $numero_aleatorio2);
			$numeros_generados[] = $numero_aleatorio;
			$numeros_generados[] = $numero_aleatorio2;
			$jornada[] = array($equipos[$numero_aleatorio], $equipos[$numero_aleatorio2]);
	}
}

/*$resultadosLength = strlen($resultados);
for($col = 0; $col < 8; $col++){
	for($fi = 0; $fi < 14; $fi++){
		$quinela[$col][$fi] = 0;
	}
}
for($col = 0; $col < rand(1,8); $col++){
	for($fi = 0; $fi < 14; $fi++){
		$quinela[$col][$fi] = $resultados[random_int(0, $resultadosLength - 1)];
	}
}*/
$tabla = "<table>";


/*for($jornadas = 0; $jornadas < 56; $jornadas++){
	if ($cantidad_numeros > ($max - $min + 1)) {
		echo "No se pueden generar más números únicos que la longitud del rango.";
	}else {
		while(count($numeros_generados) != 28){
			do {
				$numero_aleatorio = rand($min, $max);
				$numero_aleatorio2 = rand($min, $max);
			} while (in_array($numero_aleatorio, $numeros_generados) || in_array($numero_aleatorio2, $numeros_generados) || $numero_aleatorio == $numero_aleatorio2);
				$numeros_generados[] = $numero_aleatorio;
				$numeros_generados[] = $numero_aleatorio2;
				$jornada[$jornadas][$i] = array($equipos[$numero_aleatorio], $equipos[$numero_aleatorio2]);
				$i++;
				if($i == 27){
					$i=0;
				}
				//shuffle($equipos);
				//$jornada2[] = array($equipos[$numero_aleatorio], $equipos[$numero_aleatorio2]);
		}
		
	}
	foreach($numeros_generados as $key => $value){
		unset($numeros_generados[$key]); 
	}
	shuffle($equipos);
}*/

var_dump($numeros_generados);
var_dump($jornada);
/*foreach($jornada as $elemento){
	$tabla .= "<td>".$elemento[0]."<br/> vs <br/>".$elemento[1]."</td>";
}*/

/*foreach($quinela as $columna){
	$tabla .= "<tr>";
	foreach($columna as $fila){
		$tabla .= "<td>".$fila."</td>";
	}
	$tabla .= "</tr>";
}*/

$tabla2 = "
<table>
	<tr>
		<td>".$jornada[0][0]." vs ".$jornada[0][1]."</td>
		<td>
			<input type='radio' name='resultado1' value='1' />1
			<input type='radio' name='resultado1' value='X' />X
			<input type='radio' name='resultado1' value='2' />2
		</td>
	</tr>
	<tr>
		<td>".$jornada[1][0]." vs ".$jornada[1][1]."</td>
		<td>
			<input type='radio' name='resultado2' value='1' />1
			<input type='radio' name='resultado2' value='X' />X
			<input type='radio' name='resultado2' value='2' />2
		</td>
	</tr>
	<tr>
		<td>".$jornada[2][0]." vs ".$jornada[2][1]."</td>
		<td>
			<input type='radio' name='resultado3' value='1' />1
			<input type='radio' name='resultado3' value='X' />X
			<input type='radio' name='resultado3' value='2' />2
		</td>
	</tr>
	<tr>
		<td>".$jornada[3][0]." vs ".$jornada[3][1]."</td>
		<td>
			<input type='radio' name='resultado4' value='1' />1
			<input type='radio' name='resultado4' value='X' />X
			<input type='radio' name='resultado4' value='2' />2
		</td>
	</tr>
	<tr>
		<td>".$jornada[4][0]." vs ".$jornada[4][1]."</td>
		<td>
			<input type='radio' name='resultado5' value='1' />1
			<input type='radio' name='resultado5' value='X' />X
			<input type='radio' name='resultado5' value='2' />2
		</td>
	</tr>
	<tr>
		<td>".$jornada[5][0]." vs ".$jornada[5][1]."</td>
		<td>
			<input type='radio' name='resultado6' value='1' />1
			<input type='radio' name='resultado6' value='X' />X
			<input type='radio' name='resultado6' value='2' />2
		</td>
	</tr>
	<tr>
		<td>".$jornada[6][0]." vs ".$jornada[6][1]."</td>
		<td>
			<input type='radio' name='resultado7' value='1' />1
			<input type='radio' name='resultado7' value='X' />X
			<input type='radio' name='resultado7' value='2' />2
		</td>
	</tr>
	<tr>
		<td>".$jornada[7][0]." vs ".$jornada[7][1]."</td>
		<td>
			<input type='radio' name='resultado8' value='1' />1
			<input type='radio' name='resultado8' value='X' />X
			<input type='radio' name='resultado8' value='2' />2
		</td>
	</tr>
	<tr>
		<td>".$jornada[8][0]." vs ".$jornada[8][1]."</td>
		<td>
			<input type='radio' name='resultado9' value='1' />1
			<input type='radio' name='resultado9' value='X' />X
			<input type='radio' name='resultado9' value='2' />2
		</td>
	</tr>
	<tr>
		<td>".$jornada[9][0]." vs ".$jornada[9][1]."</td>
		<td>
			<input type='radio' name='resultado10' value='1' />1
			<input type='radio' name='resultado10' value='X' />X
			<input type='radio' name='resultado10' value='2' />2
		</td>
	</tr>
	<tr>
		<td>".$jornada[10][0]." vs ".$jornada[10][1]."</td>
		<td>
			<input type='radio' name='resultado11' value='1' />1
			<input type='radio' name='resultado11' value='X' />X
			<input type='radio' name='resultado11' value='2' />2
		</td>
	</tr>
	<tr>
		<td>".$jornada[11][0]." vs ".$jornada[11][1]."</td>
		<td>
			<input type='radio' name='resultado12' value='1' />1
			<input type='radio' name='resultado12' value='X' />X
			<input type='radio' name='resultado12' value='2' />2
		</td>
	</tr>
	<tr>
		<td>".$jornada[12][0]." vs ".$jornada[12][1]."</td>
		<td>
			<input type='radio' name='resultado13' value='1' />1
			<input type='radio' name='resultado13' value='X' />X
			<input type='radio' name='resultado13' value='2' />2
		</td>
	</tr>
	<tr>
		<td>".$jornada[13][0]." vs ".$jornada[13][1]."</td>
		<td>
			<input type='radio' name='resultado14' value='1' />1
			<input type='radio' name='resultado14' value='X' />X
			<input type='radio' name='resultado14' value='2' />2
		</td>
	</tr>
</table>
<br/>";
for($i = 0; $i < 14; $i++){
	$columna[$i] = array(($jornada[$i][0]),($jornada[$i][1]));
}

//var_dump($quinela);
//echo $tabla."</table>";
echo $tabla2;
?>
<input type='submit' name='Enviar'/>
</form>
</BODY>
</HTML>
