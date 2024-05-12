<?php
    include("../connect.php");
    include("../header.php");

    $show = "SELECT * FROM Order_kos";
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
            <h2 align="center">Data Order Kos</h2>
            <tr>
                <th scope="col">No.</th>
                <th scope="col">Tanggal Sewa</th>
                <th scope="col">Bukti Transaksi</th>
                <th scope="col">Metode Pembayaran</th>
            </tr>
        </thead>
        <?php
        $no = 1;
        while ($data = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<th>" . $no. "</th>";
            echo "<td>" . $data['Tanggal_Sewa']. "</td>";
            echo "<td>" . $data['Bukti_Transaksi']. "</td>";
            echo "<td>" . $data['Metode_Pembayaran']. "</td>";
            echo "</tr>";
            $no++;
        }
        ?>
    </table>
</body>
</html>