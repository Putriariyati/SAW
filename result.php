<?php
include "config.php";

// Query untuk mengambil data dari view vmatrixkeputusan
$query = "SELECT * FROM vpenilaian";
$dt_query = $koneksi->query($query);
?>

<table border="1">
    <thead>
        <tr>
            <th>ID Nilai</th>
            <th>Alternatif</th>
            <th>Kriteria</th>
            <th>Bobot</th>
            <th>Nilai</th>
            <th>Keterangan</th>
        </tr>
    </thead>
    <tbody>
        <?php
        while ($dt_matrix = $dt_query->fetch_array()) {
        ?>
            <tr>
                <td><?php echo $dt_matrix['id_penilaian']; ?></td>
                <td><?php echo $dt_matrix['nmalternatif']; ?></td>
                <td><?php echo $dt_matrix['nm_kriteria']; ?></td>
                <td><?php echo $dt_matrix['value']; ?></td>
                <td><?php echo $dt_matrix['nilai']; ?></td>
                <td><?php echo $dt_matrix['keterangan']; ?></td>
            </tr>
        <?php
        }
        ?>
    </tbody>
</table>