<?php
include "config.php";
$query = "SELECT * FROM kriteria";
$dt_query = $koneksi->query($query);
?>

<!DOCTYPE html>
<html>

<head>
    <title>Form Skala</title>
</head>

<body>
    <h3>Form Pengisian Bobot</h3>
    <form action="insertbobot.php" method="post">
        <table>
            <tr>
                <td>Kriteria</td>
                <td><select name="kriteria">
                        <?php
                        while ($dt_kriteria = $dt_query->fetch_array()) {
                        ?>
                            <option value="<?php echo $dt_kriteria['id_kriteria']; ?>">
                                <?php echo $dt_kriteria['nm_kriteria']; ?>
                            </option>
                        <?php
                        }
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Value Bobot </td>
                <td><input type="text" name="value_bobot"></td>
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