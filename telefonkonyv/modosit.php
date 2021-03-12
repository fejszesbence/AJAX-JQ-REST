<?php
require_once './MySqlDB.php';
parse_str(file_get_contents('php://input'), $adatok);
print_r($adatok);
$mysql = new MySqlDB();
$id = $adatok['id'];
$nev = $adatok['nev'];
$tel = $adatok['tel'];
$kep = $adatok['kep'];
$updateString = "ID='".$id."', nev='".$nev."', tel='".$tel."', kep='".$kep."'";
echo $updateString;
$mysql->frissit("telefonkonyvem", $updateString, "ID='".$id."'");