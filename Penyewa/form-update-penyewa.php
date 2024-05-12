<?php
include("../connect.php");
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
    <title>Edit Penyewa</title>
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
    if (isset($_GET['KTP_Penyewa'])) {
        $KTP_Penyewa = $_GET['KTP_Penyewa'];
        $query = "SELECT * FROM penyewa WHERE KTP_Penyewa = '$KTP_Penyewa'";
        $result = mysqli_query($connect, $query);
        $row = mysqli_fetch_assoc($result);
    } else {
        echo "Data tidak ditemukan";
    }
    ?>

    <h2>Edit Penyewa</h2>
    <form action="update-penyewa.php" method="post">
        <table>
            <tr>
                <td><label for="No_Hp">No Hp:</label></td>
                <td><input type="number" id="No_Hp" name="No_Hp" value="<?php echo $row['No_Hp']; ?>"></td>
            </tr>
            <tr>
                <td><label for="No_Rekening">No Rekening:</label></td>
                <td><input type="number" id="No_Rekening" name="No_Rekening" value="<?php echo $row['No_Rekening']; ?>"></td>
            </tr>
            <tr>
                <td><label for="NIK_Ortu">NIK Ortu:</label></td>
                <td><input type="number" id="NIK_Ortu" name="NIK_Ortu" value="<?php echo $row['NIK_Ortu']; ?>"></td>
            </tr>
            <tr>
                <td><label for="Nama">Nama:</label></td>
                <td><input type="text" id="Nama" name="Nama" value="<?php echo $row['Nama']; ?>"></td>
            </tr>
            <tr>
                <td><label for="Status">Status:</label></td>
                <td>
                    <select name="Status" id="Status">
                        <option <?php if($row['Status'] == 'Belum Menikah') echo 'selected'; ?>>Belum Menikah</option>
                        <option <?php if($row['Status'] == 'Menikah') echo 'selected'; ?>>Menikah</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td><label for="Alamat">Alamat:</label></td>
                <td><input type="text" id="Alamat" name="Alamat" value="<?php echo $row['Alamat']; ?>"></td>
            </tr>
            <input type="hidden" name="KTP_Penyewa" value="<?php echo $KTP_Penyewa; ?>">
        </table>
        <button type="submit">Submit</button>
    </form>
</body>
</html>

</html>