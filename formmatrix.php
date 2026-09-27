<?php
include "config.php";
$query_alternatif = "SELECT * FROM alternatif";
$dt_query_alternatif = $koneksi->query($query_alternatif);

$query_bobot = "SELECT * FROM bobot";
$dt_query_bobot = $koneksi->query($query_bobot);

$query_skala = "SELECT * FROM skala";
$dt_query_skala = $koneksi->query($query_skala);
?>

<!DOCTYPE html>
<html>

<head>
    <title>Form Matrix</title>
</head>

<body>
    <h3>Form Pengisian Matrix Nilai</h3>
    <form action="insertmatrix.php" method="post">
        <table>
            <tr>
                <td>Alternatif</td>
                <td><select name="alternatif">
                        <?php
                        while ($dt_alternatif = $dt_query_alternatif->fetch_array()) {
                        ?>
                            <option value="<?php echo $dt_alternatif['idalternatif']; ?>">
                                <?php echo $dt_alternatif['nmalternatif']; ?>
                            </option>
                        <?php
                        }
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Bobot</td>
                <td><select name="bobot">
                        <?php
                        while ($dt_bobot = $dt_query_bobot->fetch_array()) {
                        ?>
                            <option value="<?php echo $dt_bobot['id_bobot']; ?>">
                                <?php echo $dt_bobot['value']; ?>
                            </option>
                        <?php
                        }
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Skala</td>
                <td><select name="skala">
                        <?php
                        while ($dt_skala = $dt_query_skala->fetch_array()) {
                        ?>
                            <option value="<?php echo $dt_skala['id_skala']; ?>">
                                <?php echo $dt_skala['value']; ?>
                            </option>
                        <?php
                        }
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" name="submit">
                </td>
            </tr>
        </table>
    </form>
</body>

</html>