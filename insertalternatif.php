<?php 
include "config.php";
$nm_alternatif = $_POST['nmalternatif'];

$sql = "INSERT INTO alternatif(nmalternatif) VALUES ('".$nm_alternatif."')";
$query = $koneksi->query($sql);
if($query === true){
    header('location: formalternatif.php');
} else {
    echo "Error";
}
?>