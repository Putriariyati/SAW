<?php
include "config.php";

$query = "SELECT 
            penilaian.id_penilaian,
            alternatif.nmalternatif,
            bobot.value AS bobot_value,
            skala.value AS skala_value
          FROM penilaian
          JOIN alternatif ON penilaian.idalternatif = alternatif.idalternatif
          JOIN bobot ON penilaian.id_bobot = bobot.id_bobot
          JOIN skala ON penilaian.id_skala = skala.id_skala";
$dt_query = $koneksi->query($query);
?>
<table border="1">
    <thead>
        <tr>
            <th>ID NIlai</th>
            <th>Alternatif</th>
            <th>Bobot</th>
            <th>Skala</th>
        </tr>
    </thead>
    <tbody>
        <?php
        while ($dt_matrix = $dt_query->fetch_array()) {
        ?>
            <tr>
                <td><?php echo $dt_matrix['id_penilaian']; ?></td>
                <td><?php echo $dt_matrix['nmalternatif']; ?></td>
                <td><?php echo $dt_matrix['bobot_value']; ?></td>
                <td><?php echo $dt_matrix['skala_value']; ?></td>
            </tr>
        <?php
        }
        ?>
    </tbody>
</table>