<?php
session_start();
include("../connect.php");

$KTP_Penyewa = $_POST['KTP_Penyewa'];
$No_Hp  = $_POST['No_Hp'];
$No_Rekening = $_POST['No_Rekening'];
$NIK_Ortu = $_POST['NIK_Ortu'];
$Nama = $_POST['Nama'];
$Status = $_POST['Status'];
$Alamat = $_POST['Alamat'];

$query = "UPDATE penyewa SET No_Hp = '$No_Hp', No_Rekening = '$No_Rekening', NIK_Ortu = '$NIK_Ortu', Nama = '$Nama', Status = '$Status', Alamat = '$Alamat' WHERE KTP_Penyewa = $KTP_Penyewa";

$result = mysqli_query($connect, $query);

if ($result) {
    header("Location: read-penyewa.php");
}