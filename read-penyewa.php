<?php
    include("connect.php");

    $show = "SELECT * FROM penyewa";
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
            <h2 align="center">Penyewa</h2>
            <tr>
                <th scope="col">No.</th>
                <th scope="col">No.Hp</th>
                <th scope="col">KTP_Penyewa</th>
                <th scope="col">No_Rekening</th>
                <th scope="col">NIK_Ortu</th>
                <th scope="col">Nama</th>
                <th scope="col">Status</th>
                <th scope="col">Alamat</th>
            </tr>
        </thead>
        <?php
        $no = 1;
        while ($data = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<th>" . $no. "</th>";
            echo "<td>" . $data['No_Hp']. "</td>";
            echo "<td>" . $data['KTP_Penyewa']. "</td>";
            echo "<td>" . $data['No_Rekening']. "</td>";
            echo "<td>" . $data['NIK_Ortu']. "</td>";
            echo "<td>" . $data['Nama']. "</td>";
            echo "<td>" . $data['Status']. "</td>";
            echo "<td>" . $data['Alamat']. "</td>";
            echo "<td><a href='form-update-penyewa.php?KTP_Penyewa=". $data['KTP_Penyewa'] ."'>Edit</a> | "."</td>";
            $no++;
        }
        ?>
    </table>
</body>
</html>