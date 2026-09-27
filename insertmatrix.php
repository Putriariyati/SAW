<?php
include "config.php";

// Pastikan nilai yang diterima melalui POST tidak kosong
if (isset($_POST['alternatif'], $_POST['bobot'], $_POST['skala'])) {
    // Ambil data dari form
    $alternatif = $_POST['alternatif'];
    $bobot = $_POST['bobot'];
    $skala = $_POST['skala'];

    // Query untuk memasukkan data ke dalam tabel penilaian
    $sql = "INSERT INTO penilaian (idalternatif, id_bobot, id_skala) VALUES ('$alternatif', '$bobot', '$skala')";
    $query = $koneksi->query($sql);

    // Cek apakah query berhasil
    if ($query === true) {
        // Redirect ke halaman formmatrix.php jika berhasil
        header('location: formmatrix.php');
        exit(); // Hentikan eksekusi skrip setelah redirect
    } else {
        // Tampilkan error MySQL jika query gagal
        echo "Error: " . $koneksi->error;
    }
} else {
    // Tampilkan pesan jika ada input yang kosong
    echo "Error: Semua field harus diisi!";
}
