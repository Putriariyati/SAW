<?php 
include "config.php";
$nm_skala = $_POST['value'];
$value_skala = $_POST['keterangan'];

$sql = "INSERT INTO skala(value,keterangan) VALUES ('".$nm_skala."','".$value_skala."')";
$query = $koneksi->query($sql);
if($query === true){
    header('location: formskala.php');
} else {
    echo "Error";
}
?>