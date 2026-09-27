<?php
include "config.php";
$kriteria = $_POST['kriteria'];
$value_bobot = $_POST['value_bobot'];

$sql = "INSERT INTO bobot(id_kriteria,value) VALUES ('" . $kriteria . "','" . $value_bobot . "')";
$query = $koneksi->query($sql);
if ($query === true) {
    header('location: formbobot.php');
} else {
    echo "Error";
}
