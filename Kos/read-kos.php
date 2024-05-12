<?php
include("../connect.php");
include("../header.php");

$show = "SELECT * FROM Kos";
$result = mysqli_query($connect, $show);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="solid">
        <thead>

            <tr>
                <th colspan="4" align="center">Data Kos</th>
            </tr>
            <tr>
                <th scope="col">No_Kamar</th>
                <th scope="col">Alamat</th>
                <th scope="col">Biaya_Kos</th>
                <th scope="col">Sistem_Keamanan</th>
                <th scope="col">Aksi</th> <!-- Kolom tambahan untuk tautan edit -->
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            while ($data = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . $no. "</td>"; // Menggunakan <td> untuk nomor baris
                echo "<td>" . $data['Alamat']. "</td>";
                echo "<td>" . $data['Biaya Kos']. "</td>";
                echo "<td>" . $data['Sistem Keamanan']. "</td>";
                echo "<td><a href='form-update-kos.php?No_Kamar=". $data['No_Kamar'] ."'>Edit</a></td>"; // Tautan edit dalam kolom aksi
                echo "</tr>";
                $no++;
            }
            ?>
        </tbody>
    </table>
</body>
</html>