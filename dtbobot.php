<?php
include "config.php";

$query = "SELECT * FROM bobot, kriteria WHERE bobot.id_kriteria = kriteria.id_kriteria";
$dt_query = $koneksi->query($query);
?>
<table border="1">
    <thead>
        <tr>
            <th>ID Bobot</th>
            <th>ID Kriteria</th>
            <th>Value</th>
        </tr>
    </thead>
    <tbody>
        <?php
        while ($dt_bobot = $dt_query->fetch_array()) {
        ?>
            <tr>
                <td><?php echo $dt_bobot['id_bobot']; ?></td>
                <td><?php echo $dt_bobot['id_kriteria']; ?></td>
                <td><?php echo $dt_bobot['value']; ?></td>
            </tr>
        <?php
        }
        ?>
    </tbody>
</table>