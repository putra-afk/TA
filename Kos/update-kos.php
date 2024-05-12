<?php
session_start();
include("../connect.php");

$No_Kamar  = $_POST['No_Kamar'];
$Alamat = $_POST['Alamat'];
$Biaya_Kos = $_POST['Biaya_Kos'];
$Sistem_Keamanan = $_POST['Sistem_Keamanan'];

$query = "UPDATE penyewa SET No_Kamar = '$No_Kamar', Alamat = '$Alamat', Biaya_Kos = '$Biaya_Kos', Sistem_Keamanan = '$Sistem_Keamanan' WHERE No_Kamar = $No_Kamar";

$result = mysqli_query($connect, $query);

if ($result) {
    header("Location: read-kos.php");
}
?>