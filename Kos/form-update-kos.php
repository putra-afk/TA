<?php
include("../connect.php");
if (isset($_GET['No_Kamar'])) {

    $No_Kamar = $_GET['No_Kamar'];

    $query = "SELECT * FROM Kos WHERE No_Kamar = '$No_Kamar'";

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
    if (isset($_GET['No_Kamar'])) {
        $No_Kamar = $_GET['No_Kamar'];
        $query = "SELECT * FROM kos WHERE No_Kamar = '$No_Kamar'";
        $result = mysqli_query($connect, $query);
        $row = mysqli_fetch_assoc($result);
    } else {
        echo "Data tidak ditemukan";
    }
    ?>

    <h2>Edit Kos</h2>
    <form action="update-kos.php" method="post">
        <table>
            <tr>
                <td><label for="No_Kamar">No Kamar:</label></td>
                <td><input type="text" id="No_Kamar" name="No_Kamar" value="<?php echo $row['No_Kamar']; ?>"></td>
            </tr>
            <tr>
                <td><label for="Alamat">Alamat:</label></td>
                <td><input type="text" id="Alamat" name="Alamat" value="<?php echo $row['Alamat']; ?>"></td>
            </tr>
            <tr>
                <td><label for="Biaya_Kos">Biaya Kos:</label></td>
                <td><input type="number" id="Biaya_Kos" name="Biaya_Kos" value="<?php echo $row['Biaya_Kos']; ?>"></td>
            </tr>
            <tr>
                <td><label for="Sistem_Keamanan">Sistem Keamanan:</label></td>
                <td><input type="text" id="Sistem_Keamanan" name="Sistem_Keamanan" value="<?php echo $row['Sistem_Keamanan']; ?>"></td>
            </tr>
            <input type="hidden" name="No_Kamar" value="<?php echo $No_Kamar; ?>">
        </table>
        <button type="submit">Submit</button>
    </form>
</body>
</html>