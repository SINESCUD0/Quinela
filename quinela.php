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
<?php
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

$jornada1 = array();

$partidos = array(
	array(
		array($equipos[0],$equipos[1]),
		array($equipos[2],$equipos[3]),
		array($equipos[4],$equipos[5]),
		array($equipos[6],$equipos[7]),
		array($equipos[8],$equipos[9]),
		array($equipos[10],$equipos[11]),
		array($equipos[12],$equipos[13]),
		array($equipos[14],$equipos[15]),
		array($equipos[16],$equipos[17]),
		array($equipos[18],$equipos[19]),
		array($equipos[20],$equipos[21]),
		array($equipos[22],$equipos[23]),
		array($equipos[24],$equipos[25]),
		array($equipos[26],$equipos[27])
	)
);

$resultadosLength = strlen($resultados);
for($col = 0; $col < 8; $col++){
	for($fi = 0; $fi < 14; $fi++){
		$quinela[$col][$fi] = 0;
	}
}
for($col = 0; $col < rand(1,8); $col++){
	for($fi = 0; $fi < 14; $fi++){
		$quinela[$col][$fi] = $resultados[random_int(0, $resultadosLength - 1)];
	}
}
$tabla = "<table>";

$numeros_generados = array();
$min = 0;
$max = 27;
$cantidad_numeros = 27;
if ($cantidad_numeros > ($max - $min + 1)) {
    echo "No se pueden generar más números únicos que la longitud del rango.";
}else {
    while(true){
        do {
            $numero_aleatorio = rand($min, $max);
			$numero_aleatorio2 = rand($min, $max);
        } while (in_array($numero_aleatorio, $numeros_generados) || in_array($numero_aleatorio2, $numeros_generados) || $numero_aleatorio == $numero_aleatorio2);
        $numeros_generados[] = $numero_aleatorio;
		$numeros_generados[] = $numero_aleatorio2;
		$jornada1[] = array($equipos[$numero_aleatorio], $equipos[$numero_aleatorio2]);
		if(count($numeros_generados) == 28){
			break;
		}
    }
	
}
var_dump($numeros_generados);
var_dump($jornada1);
foreach($jornada1 as $elemento){
	$tabla .= "<td>".$elemento[0]."<br/> vs <br/>".$elemento[1]."</td>";
}

foreach($quinela as $columna){
	$tabla .= "<tr>";
	foreach($columna as $fila){
		$tabla .= "<td>".$fila."</td>";
	}
	$tabla .= "</tr>";
}

var_dump($quinela);
echo $tabla."</table>";
?>
</BODY>
</HTML>