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
$partidos = array(
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
$tabla2 = "<table>";
foreach($partidos as $elemento){
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
//echo $tabla2."</table>";
?>
</BODY>
</HTML>