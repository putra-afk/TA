<?php
include("connect.php");
if (isset($_GET['KTP_Penyewa'])) {

    $KTP_Penyewa = $_GET['KTP_Penyewa'];

    $query = "SELECT * FROM penyewa WHERE KTP_Penyewa = '$KTP_Penyewa'";

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
    <title>Document</title>
</head>

<body>
    <form action="update.php" method="post">
        <label for="No_Hp">No Hp:</label>
        <input type="number" id="No_Hp" name="No_Hp" value="<?php echo $row['No_Hp']; ?>">
        <label for="No_Rekening">No Rekening:</label>
        <input type="number" id="No_Rekening" name="No_Rekening" value="<?php echo $row['No_Rekening']; ?>">
        <label for="NIK_Ortu">NIK_Ortu:</label>
        <input type="number" id="NIK_Ortu" name="NIK_Ortu" value="<?php echo $row['NIK_Ortu']; ?>">
        <label for="No.Hp">Nama:</label>
        <input type="text" id="Nama" name="Nama" value="<?php echo $row['Nama']; ?>">
        <label for="Status">Status:</label>
        <select name="Status" id="Status" value="<?php echo $row['Status']; ?>">
            <option>Belum Menikah</option>
            <option>Menikah</option>
        </select>
        <label for="alamat">Alamat:</label>
        <input type="text" id="Alamat" name="Alamat" value="<?php echo $row['Alamat']; ?>">
        <input type="hidden" name="KTP_Penyewa" value=<?= $KTP_Penyewa ?>>
        <button type="submit">Submit</button>
    </form>
</body>

</html>