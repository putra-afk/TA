<?php
include("../connect.php");
include("../header.php");

$show = "SELECT * FROM Fasilitas";
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
            <h2 align="center">Data Fasilitas</h2>
            <tr>
                <th scope="col">No.</th>
                <th scope="col">Wifi</th>
                <th scope="col">Lemari</th>
                <th scope="col">Kamar Mandi</th>
                <th scope="col">Kamar</th>
                <th scope="col">Mesin Cuci</th>
                <th scope="col">Kursi</th>
                <th scope="col">Dapur</th>
                <th scope="col">Meja</th>
                <th scope="col">Air Galon</th>
            </tr>
        </thead>
        <?php
        $no = 1;
        while ($data = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<th>" . $no. "</th>";
            echo "<td>" . $data['Wifi']. "</td>";
            echo "<td>" . $data['Lemari']. "</td>";
            echo "<td>" . $data['Kamar Mandi']. "</td>";
            echo "<td>" . $data['Kamar']. "</td>";
            echo "<td>" . $data['Mesin Cuci']. "</td>";
            echo "<td>" . $data['Kursi']. "</td>";
            echo "<td>" . $data['Dapur']. "</td>";
            echo "<td>" . $data['Meja']. "</td>"; 
            echo "<td>" . $data['Air Galon']. "</td>";
            echo "</tr>";
            $no++;
        }
        ?>
    </table>
</body>
</html>