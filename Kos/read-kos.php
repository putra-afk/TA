<?php
include("../connect.php");
include("../header.php");

$show = "SELECT * FROM kos";
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
            <h2 align="center">Data Kos</h2>
            <tr>
                <th scope="col">No. Kamar</th>
                <th scope="col">Alamat</th>
                <th scope="col">Biaya Kos</th>
                <th scope="col">Sistem Keamanan</th>
            </tr>
        </thead>
        <?php
        $no = 1;
        while ($data = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<th>" . $no. "</th>";
            echo "<td>" . $data['No_Kamar']. "</td>";
            echo "<td>" . $data['Alamat']. "</td>";
            echo "<td>" . $data['Biaya Kos']. "</td>";
            echo "<td>" . $data['Sistem Keamanan']. "</td>";
            echo "</tr>";
            $no++;
        }
        ?>
    </table>
</body>
</html>