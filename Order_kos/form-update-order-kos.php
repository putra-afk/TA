<?php
include("../connect.php");
if (isset($_GET['Wifi'])) {

    $Tanggal_Pembayaran = $_GET['Tanggal Pembayaran'];

    $query = "SELECT * FROM Order_kos WHERE Tanggal Pembayaran = '$Tanggal Pembayaran'";

    $result = mysqli_query($connect, $query);

    $row = mysqli_fetch_assoc($result);
    
} else {
    echo "Data tidak ditemukan";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Kos</title>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
    </style>
</head>
<body>
    <?php
    include("../connect.php");
    if (isset($_GET['oke'])) {
        $Wifi = $_GET['Tanggal Pembayaran'];
        $query = "SELECT * FROM Order_kos WHERE Tanggal Pembayaran = '$Tanggal Pembayaran'";
        $result = mysqli_query($connect, $query);
        $row = mysqli_fetch_assoc($result);
    } else {
        echo "Data tidak ditemukan";
    }
    ?>

    <h2>Edit Kos</h2>
    <form action="update-order-kos.php" method="post">
        <table>
            <tr>
                <td><label for="Tanggal Pembayaran">Tanggal Pembayaran:</label></td>
                <td><input type="text" id="Tanggal Pembayaran" name="Tanggal Pembayaran" value="<?php echo $row['Tanggal Pembayaran']; ?>"></td>
            </tr>
            <tr>
                <td><label for="Bukti Transaksi">Bukti Transaksi:</label></td>
                <td><input type="text" id="Bukti Transaksi" name="Bukti Transaksi" value="<?php echo $row['Bukti Transaksi']; ?>"></td>
            </tr>
            <tr>
                <td><label for="Metode Pembayaran">Metode Pembayaran:</label></td>
                <td><input type="Metode Pembayaran" id="Metode Pembayaran" name="Metode Pembayaran" value="<?php echo $row['Metode Pembayaran']; ?>"></td>
            </tr>
            <input type="hidden" name="Tanggal Pembayaran" value="<?php echo $Tanggal_Pembayaran; ?>">
        </table>
        <button type="submit">Submit</button>
    </form>
</body>
</html>