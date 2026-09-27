<?php
include "config.php";

// Query untuk mengambil data dari view vrangking
$query = "SELECT * FROM vrangking";
$dt_query = $koneksi->query($query);
?>

<table border="1">
    <thead>
        <tr>
            <th>ID Alternatif</th>
            <th>Alternatif</th>
            <th>Rangking</th>
        </tr>
    </thead>
    <tbody>
        <?php
        while ($dt_matrix = $dt_query->fetch_array()) {
        ?>
            <tr>
                <td><?php echo $dt_matrix['idalternatif']; ?></td>
                <td><?php echo $dt_matrix['nmalternatif']; ?></td>
                <td><?php echo $dt_matrix['rangking']; ?></td>

            </tr>
        <?php
        }
        ?>
    </tbody>
</table>