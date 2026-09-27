<?php
include "config.php";

$query = "SELECT * FROM kriteria";
$dt_query = $koneksi->query($query);
?>
<table border="1">
    <thead>
        <tr>
            <th>ID Kriteria</th>
            <th>Nama Kriteria</th>
        </tr>
    </thead>
    <tbody>
        <?php
        while ($dt_kriteria = $dt_query->fetch_array()) {
        ?>
            <tr>
                <td><?php echo $dt_kriteria['id_kriteria']; ?></td>
                <td><?php echo $dt_kriteria['nm_kriteria']; ?></td>

            </tr>
        <?php
        }
        ?>
    </tbody>
</table>