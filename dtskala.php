<?php
include "config.php";

$query = "SELECT * FROM skala";
$dt_query = $koneksi->query($query);
?>
<table border="1">
    <thead>
        <tr>
            <th>ID Skala</th>
            <th>Value</th>
            <th>Keterangan</th>
        </tr>
    </thead>
    <tbody>
        <?php
        while ($dt_skala = $dt_query->fetch_array()) {
        ?>
            <tr>
                <td><?php echo $dt_skala['id_skala']; ?></td>
                <td><?php echo $dt_skala['value']; ?></td>
                <td><?php echo $dt_skala['keterangan']; ?></td>
            </tr>
        <?php
        }
        ?>
    </tbody>
</table>