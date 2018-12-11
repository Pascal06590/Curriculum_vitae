<?php
// Calcule un age en fonction d'une date
function age($date)
{
	// PHP décompose la date saisie dans l'ordre défini
    list($annee, $mois, $jour) = explode ('/', $date);
    $TSN = strtotime($annee."/".$mois."/".$jour);
    $TS = strtotime(date("Y/m/d"));

    $Age = ($TS-$TSN)/(365*3600*24);
    return round($Age);
}
?>