<?php
session_start();
include("../connect.php");

$Tanggal_Sewa  = $_POST['Tanggal Sewa'];
$Bukti_Transaksi = $_POST['Bukti Transaksi'];
$Metode_Pembayaran= $_POST['Metode Pembayaran'];

$query = "UPDATE penyewa SET Tanggal Sewa = '$Tanggal Sewa', Bukti Transaksi = '$Bukti Transaksi', Metode Pembayaran = '$Metode Pembayaran',  WHERE Tanggal Sewa = $Tanggal Sewa";

$result = mysqli_query($connect, $query);

if ($result) {
    header("Location: read-order-kos.php");
}
?>