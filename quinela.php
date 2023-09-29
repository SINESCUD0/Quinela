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