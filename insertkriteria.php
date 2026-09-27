<?php 
include "config.php";
$nm_kriteria = $_POST['nm_kriteria'];

$sql = "INSERT INTO kriteria(nm_kriteria) VALUES ('".$nm_kriteria."')";
$query = $koneksi->query($sql);
if($query === true){
    header('location: formkriteria.php');
} else {
    echo "Error";
}
?>