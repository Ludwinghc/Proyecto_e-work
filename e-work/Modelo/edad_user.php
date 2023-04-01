<?php
function calcularTiempo($fechaini,$fechafin){
	//indice 0 = años
	//indice 1 = meses
	//indice 2 = dias
	//indice 11 = total dias
	$datetime1 = date_create($fechaini);
	$datetime2 = date_create($fechafin);
	$interval = date_diff($datetime1, $datetime2);

	$tiempo = array();

	foreach ($interval as $valor){
		$tiempo[]=$valor;
	}
	return $tiempo;
}
?>