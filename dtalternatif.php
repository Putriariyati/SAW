<?php
include "config.php";

$query = "SELECT * FROM alternatif";
$dt_query = $koneksi->query($query);
?>
<table border="1">
    <thead>
        <tr>
            <th>ID Alternatif</th>
            <th>Nama Alternatif</th>
        </tr>
    </thead>
    <tbody>
        <?php
        while ($dt_alternatif = $dt_query->fetch_array()) {
        ?>
            <tr>
                <td><?php echo $dt_alternatif['idalternatif']; ?></td>
                <td><?php echo $dt_alternatif['nmalternatif']; ?></td>

            </tr>
        <?php
        }
        ?>
    </tbody>
</table>